<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;

class ApiController extends Controller
{
    public function getBatchStatus(Request $request)
    {
        $base = env('UPSTREAM_BASE_URL', 'http://127.0.0.1:5107'); // use IPv4
        $url = rtrim($base, '/') . '/status/batch';

        try {
            $response = Http::timeout(5)
                ->retry(3, 100)
                ->withOptions(['verify' => false]) // dev only
                ->get($url)
                ->throw();

            return response()->json($response->json());
        } catch (ConnectionException $e) {
            Log::error('Upstream connection failed', ['url' => $url, 'msg' => $e->getMessage()]);
            return response()->json(['error' => 'Connection failed', 'message' => $e->getMessage()], 502);
        } catch (RequestException $e) {
            Log::error('Upstream request error', ['status' => $e->response?->status(), 'body' => $e->response?->body()]);
            return response()->json(['error' => 'Upstream request failed', 'status' => $e->response?->status(), 'body' => $e->response?->body()], 502);
        } catch (\Throwable $e) {
            Log::error('Unexpected error fetching batch status', ['msg' => $e->getMessage()]);
            return response()->json(['error' => 'Unexpected error', 'message' => $e->getMessage()], 500);
        }
    }
}
