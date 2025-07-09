<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Employee Management</h1>
        <nav>
            @auth
                <a href="{{ route('employees.index') }}" class="btn btn-primary">Employee List</a>
                <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            @endguest
        </nav>
        @yield('content')
    </div>
</body>
</html>