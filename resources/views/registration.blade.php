<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ url('css/registration.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <h1>Registration</h1>
        <p>Username</p>
        <input type="text" name="username">
        <p>Password</p>
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>