@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if(session('status'))
                <div class="bg-red-500 rounded-lg p-4 mb-6 text-white text-center">
                    {{ session('status') }}
                </div>

            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}">

                    @error('email')
                        <div class="mb-2 text-red-500 text-sm text-white">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                    @error('password')
                    <div class="mb-2 text-red-500 text-sm text-white">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="m-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="Remember Me">Remember me</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 rounded-lg text-white rounded-font-medium w-full p-3">Login</button>
                </div>
            </form>

        </div>
    </div>
@endsection


