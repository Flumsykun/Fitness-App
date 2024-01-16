<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitHub</title>
    <!-- Add your stylesheets, scripts, or other meta tags here -->
</head>
<body>

<header>
    <h1>Welcome to FitHub</h1>
    <!-- Add any additional header content or navigation links -->
</header>

<section>
    <h2>Key Features:</h2>
    <ul>
        @guest
            <!-- If user is not logged in, show login links -->
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('request.password.reset') }}">Forgot your password?</a></li>

        @else
            <!-- If user is logged in, show appropriate links -->
            @if(auth()->user()->hasRole('admin'))
                <!-- Admin links -->
                <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                <li><a href="{{ route('admin.workout-split.create') }}">Create Workout Split</a></li>
            @else
                <!-- User links -->
                <li><a href="{{ route('user.profile') }}">User Profile</a></li>

            @endif
            <!-- Add links to other key features or sections -->
            <li><a href="{{ route('logout') }}">Logout</a></li>
        @endguest
    </ul>
</section>

<footer>
    <!-- Add footer content or links to additional information -->
    <p>&copy; {{ date('Y') }} FitHub. All rights reserved.</p>
</footer>

</body>
</html>
