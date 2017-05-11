<!DOCTYPE HTML>
<head>
<title></title>
</head>
<body>
<h1>todolist</h1>
    <ul>
    @foreach ($tasks as $task)

    <li>{{ $task }}</li>

    @endforeach
    
    </ul>


</body>
</html>