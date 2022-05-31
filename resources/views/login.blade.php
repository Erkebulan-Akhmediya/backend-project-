<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('css/registration.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('check') }}">
        @csrf
        <h1>Login</h1>
        <p>Username</p>
        <input type="text" name="username">
        <p>Password</p>
        <input type="password" name="password">
        <input type="submit">
        <p style="color: black; font-size: 20px;">Don't have an account? <a href="{{ route('registration') }}" style="color: black;">Register</a></p>
    </form>
</body>
</html>