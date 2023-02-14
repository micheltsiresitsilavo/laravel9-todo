<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Todo App</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li style="color:red">{{$error}}</li>
        @endforeach
        
    @endif
    <form action="{{route('todos.store')}}" method="POST">
        @csrf
        <input type="text" name="todo">
        <button type="submit">Add Todo</button>
    </form>

    <ul>
       @foreach ($todos as $todo)
           <li>
            {{$todo->todo}} 
            |  
            
                <a href="{{route('todos.edit', $todo)}}">Edit</a>
                    <form action="{{route('todos.destroy', $todo)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
            
            </li>
       @endforeach
    </ul>
</body>
</html>