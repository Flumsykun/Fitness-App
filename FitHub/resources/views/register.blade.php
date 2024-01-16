<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<h5>Register Here</h5>

<form action="{{ route('register') }}" method="post">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Register</button>
</form>

<a href="{{ route('login') }}">Login</a>
</body>
</html>
