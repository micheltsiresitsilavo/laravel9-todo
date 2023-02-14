<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Task</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li style="color:red">{{$error}}</li>
        @endforeach
        
    @endif
    <form action="" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="todo" value="{{$todo->todo}}">
        <button type="submit">Edit Todo</button>
    </form>
</body>
</html>