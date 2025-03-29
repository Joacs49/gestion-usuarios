<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
            <li>{{ $user->lastname }}</li>
            <li>{{ $user->email }}</li>
            <li>{{ $user->numberphone }}</li>
            <li>{{ $user->country }}</li>
            <li>{{ $user->district }}</li>
            <li>{{ $user->direction }}</li>
        @endforeach
    </ul>

    <button><a href="{{ route('users.store.view') }}">Crear Usuario</a></button>
</body>
</html>