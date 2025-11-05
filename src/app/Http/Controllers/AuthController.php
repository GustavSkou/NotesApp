<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function ShowLogin()
    {
        return view('login');
    }

    public function ShowRegister()
    {
        return view('register');
    }

    public function Register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:5|confirmed'
        ]);

        User::create($validated);

        //Auth::login($user);

        return redirect()->route('show.login');
    }

    public function Login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('notebook.index');
        }

        throw ValidationException::withMessages([
            'credential' => 'some credential was wrong'
        ]);
    }

    public function LogOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login');
    }
}
