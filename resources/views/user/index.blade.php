<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    @livewireStyles
</head>
<body>
    <h1>Usuarios</h1>

    <h2>Busqueda por filtrado:</h2>
    <input type="text" id="busqueda" name="busqueda" placeholder="Ingrese el nombre del usuario">

    <ul id="resultado"></ul>

    <button><a href="{{ route('users.store.view') }}">Crear Usuario</a></button>

    @livewire('user.user-update')

    @livewireScripts
    <script src="{{ asset('js/user/searchUser.js') }}"></script>
</body>
</html>
