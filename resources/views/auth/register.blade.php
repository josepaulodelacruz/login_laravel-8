@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white rounded-lg w-4/12 p-6">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-6">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" placeholder="Name"
                           class="bg-gray-200 @error('name') border-red-500 @enderror border rounded-lg w-full p-4" value="{{ old('name') }}">
                    @error('name')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" placeholder="Username" class="bg-gray-200 border rounded-lg w-full p-4" value="{{ old('username') }}">
                    @error('username')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" placeholder="Email" class="bg-gray-200 border-b rounded-lg w-full p-4" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="mb-6">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" placeholder="Password" name="password" class="bg-gray-200 border-b rounded-lg w-full p-4">
                    @error('password')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="sr-only">Password Confirmation</label>
                    <input type="password" placeholder="Password Confirmation" name="password_confirmation" class="bg-gray-200 border-b rounded-lg w-full p-4">
                </div>

                <button type="submit" class="w-full p-4 bg-blue-500 rounded-lg text-center text-white">
                    Register
                </button>
            </form>
        </div>
    </div>
@endsection
