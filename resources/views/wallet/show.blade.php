<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="{{ url('css/show.css') }}">
</head>
<body>
    <header>
        <div class="block" id="header">
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('wallet.index') }}">Wallet</a>
        </div>
    </header>
    <main>
        <h1 class="block" id="name">Category Name: {{$category->category}}</h1>
        <p class="block" id="expense">Total Expenses: {{$category->money}}</p>
        <a href="{{ route('wallet.edit', ['wallet' => $category->id]) }}">
            <p class="block">Edit</p>
        </a>
    </main>
</body>
</html>