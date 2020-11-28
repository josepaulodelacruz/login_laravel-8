@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name"
                           class="bg-gray-100 rounded-lg @error('name') border-red-500 @enderror p-4 w-full border-2" placeholder="Name" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username"
                           class="bg-gray-100 rounded-lg p-4 w-full  @error('username') border-red-500 @enderror border-2" placeholder="Username" value="{{ old('username') }}">

                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email"
                           class="bg-gray-100 rounded-lg p-4 w-full @error('username') border-red-500 @enderror border-2" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password"
                           class="bg-gray-100 rounded-lg p-4 w-full @error('username') border-red-500 @enderror  border-2" placeholder="Password">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-100 rounded-lg p-4 w-full border-2" placeholder="Confirm Password">
                </div>

                <div>
                    <button class="bg-blue-500 w-full text-white px-4 py-3 rounded-font-medium">Register</button>
                </div>

            </form>
        </div>
    </div>
@endsection
