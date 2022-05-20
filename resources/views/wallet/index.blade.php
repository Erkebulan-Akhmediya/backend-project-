<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
</head>
<body>
    <header>
        <div class="block" id="header">
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('wallet.index') }}">Wallet</a>
        </div>
    </header>
    <main>
        <div class="block" id="categories">
            <h1>Categories</h1>
            <div>
                @foreach($categories as $category)
                    <p>{{ $category->category }}</p>
                @endforeach
            </div>
        </div>
        <div class="block" id="money">
            <h1>Expenses</h1>
            <div>
                @foreach($categories as $category)
                    <p>{{ $category->money }}</p>
                @endforeach
            </div>
        </div>
    </main>
    <footer>
        <a href="{{ route('wallet.create') }}" class="block">Add</a>
    </footer>
</body>
</html>