<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Note</h1>
    @if ($errors->any())
    <div style="background-color: rgba(243, 20, 20, 0.658); max-width: 30%; display: flex; align-items: center; margin-bottom: 20px">
        <ul style="list-style: none">
            @foreach ($errors->all() as $error)
                <li style="color:rgba(243, 9, 9, 0.849)">{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif
    <form action="{{route('notes.store')}}" method="POST">
        @csrf
        <label for="note">Note</label><br>
        <textarea name="note"  cols="30" rows="10"></textarea><br><br>
        <input type="text" name="degree" placeholder="Degree"><br><br>
        <input type="text" name="region" placeholder="Region"><br><br>
        <input type="text" name="city" placeholder="City"><br><br>
        <button type="submit">Add Your Note</button>
    </form>
</body>
</html>