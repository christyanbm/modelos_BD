<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas</title>
</head>
<body>
    <h2>aqui se mostraran las tareas</h2>
    @foreach ( $tareas as $tarea )
       <li>{{ $tarea->titulo }} </li>

    @endforeach
</body>
</html>
