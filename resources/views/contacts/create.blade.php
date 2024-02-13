<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add new contacts</h1>
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
    <form action="/contacts" method="post">
        <p>
            Name : <input type="text" name="name">
        </p>
        <p>
            Email : <input type="text" name="email">
        </p>
        <p>
            Phone : <input type="text" name="phone">
        </p>
        <p>
            Location : <input type="text" name="location">
        </p>
        @csrf
        <input type="submit" value="Add">
    </form>
</body>
</html>