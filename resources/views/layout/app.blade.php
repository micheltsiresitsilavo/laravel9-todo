<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SecurityNote</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
        nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(121, 241, 121, 0.829);
            color: white;
            padding: 20px;
           
        }

        main {
            max-width: 50%;
            margin: 0 auto;
            min-height: 100vh;
            background-color: rgba(250, 246, 246, 0.788)
        }

        .note::after {
            content: "";
            border: 1px orange solid ;
            width: 35px;
            display: flex;
            margin-top: -6px

        }

        .note, .edit_note {
            margin-bottom: 15px;
        
        }

        .add_note::after {
            content: "";
            border: 1px orange solid ;
            width: 60%;
            display: flex;
            margin-top: -6px

        }

        .edit_note::after {
            content: "";
            border: 1px orange solid ;
            width: 60%;
            display: flex;
            margin-top: -6px

        }
        .minima {
            font-style: italic; 
            font-size: 0.9em;
            background-color: orange;
            padding: 2px 1px
        }

    </style>
</head>
<body>
    <main>      
        @include('partials.nav')
        @yield('content')
    </main>
</body>
</html>

