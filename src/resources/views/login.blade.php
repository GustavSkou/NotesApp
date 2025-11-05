<x-html_body>
    <div class="min-h-screen flex flex-col items-center justify-center">
        <form action="{{route('login')}}" method="post" class="max-w-md mx-auto mt-8 flex flex-col gap-4">
            @csrf
            <div class="flex flex-col">
                <label for="email" class="mb-1 text-sm font-medium">Email</label>
                <input class="border rounded px-3 py-2 w-full"
                    id="email" 
                    name="email" 
                    type="email" 
                    required/>
            </div>

            <div class="flex flex-col">
                <label for="password" class="mb-1 text-sm font-medium">Password</label>
                <input class="border rounded px-3 py-2 w-full"
                    id="password" 
                    name="password" 
                    type="password" 
                    required/>
            </div>

            <div class="flex justify-end">
                <button class="btn" type="submit">Login</button>
            </div>

            @if ($errors->any)
                <ul class="bg-red-100">
                    @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            @endif

        </form>

        <label>Don't have an account?</label>
        <a href="{{route('show.register')}}">Register</a>
    </div>
</x-html_body>