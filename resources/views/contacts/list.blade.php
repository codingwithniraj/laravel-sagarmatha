<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Contacts</h1>
    <a href="/contacts/create">Add new</a> <br>
    @if(Session::has('msg'))
        <p class="alert alert-info">{{ Session::get('msg') }}</p>
    @endif
    <hr>
    @foreach($contacts as $contact)
        Name : {{ $contact->name }}
        <br>
        Email : {{ $contact->email }}
        <form onsubmit="return confirm('Are you sure?')" action="/contacts/{{$contact->id}}" method="post">
            @csrf 
            @method('DELETE')
            <input type="submit" value="Delete"> 
        </form>
        Edit

        <hr>
    @endforeach
</body>
</html>