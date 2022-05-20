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
                    <a href="{{ route('wallet.show', ['wallet' => $category->id]) }}" >{{ $category->category }}</a><br>
                @endforeach
            </div>
        </div>
        <div class="block" id="money">
            <h1>Expenses</h1>
            <div>
                @foreach($categories as $category)
                <a href="{{ route('wallet.show', ['wallet' => $category->id]) }}" >{{ $category->money }}</a><br>
                @endforeach
            </div>
        </div>
    </main>
    <footer>
        <a href="{{ route('wallet.create') }}" class="block">Add</a>
    </footer>
</body>
</html>