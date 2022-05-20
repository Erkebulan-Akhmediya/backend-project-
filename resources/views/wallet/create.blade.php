<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="{{ url('css/create.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('wallet.store') }}" class="block">
        @csrf
        <h4>New Category</h4>
        <p>Category</p>
        <input type="text" name="category">
        <p>Expenses</p>
        <input type="number" name="money">
        <input type="submit">
    </form>
</body>
</html>