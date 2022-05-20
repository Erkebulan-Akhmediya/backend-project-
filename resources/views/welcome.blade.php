<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ url('css/welcome.css') }}">
</head>
<body>
    <header>
        <div class="block" id="header">
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('wallet.index') }}">Wallet</a>
        </div>
    </header>
    <main>
        <h1 class="block" id="welcome">Welcome to E-Wallet</h1>
        <a href="{{ route('wallet.index') }}">
            <p class="block" id="get-started">Get Started</p>
        </a>
    </main>
</body>
</html>