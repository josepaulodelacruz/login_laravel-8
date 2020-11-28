<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Login</title>
</head>
<body class="bg-gray-200">
<nav class="bg-white p-6 flex justify-between mb-6">

    <ul class="flex item-center">
        <li>
            <a class="p-3" href="{{ route('home') }}">Home</a>
        </li>
        <li>
            <a class="p-3" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li>
            <a class="p-3" href="">Post</a>
        </li>
    </ul>

    <ul class="flex item-center">
        @auth
        <li>
            <a class="p-10" href="">{{ auth()->user()->name }}</a>
        </li>

        <li>
            <form action="{{ route('logout') }}"  method="post">
                @csrf
                <button type="submit" >Logout</button>
            </form>
        </li>
        @endauth

        @guest
        <li>
            <a class="p-3"  href="{{ route('login') }}">Login</a>
        </li>
        <li>
            <a class="p-3" href="{{ route('register') }}">Register</a>
        </li>
        @endguest
    </ul>
</nav>

@yield('content')

</body>
</html>
