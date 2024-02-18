<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit contacts</h1>
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
    <form action="/contacts/{{$contact->id}}" method="post">
        <p>
            Name : <input type="text" value="{{ $contact->name }}" name="name">
        </p>
        <p>
            Email : <input type="text" value="{{ $contact->email }}" name="email">
        </p>
        <p>
            Phone : <input type="text" name="phone" value="{{ $contact->phone }}">
        </p>
        <p>
            Location : <input type="text" value="{{ $contact->location }}" name="location">
        </p>
        @csrf
        @method('PUT')
        <input type="submit" value="Edit">
    </form>
</body>
</html>