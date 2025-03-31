<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    
    @livewire('user.user-index')

    <button><a href="{{ route('users.store.view') }}">Crear Usuario</a></button>

    @livewire('user.user-update')

    @livewireScripts
</body>
</html>
