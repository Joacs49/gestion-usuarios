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
    <main class="bg-container">
        @livewire('user.user-index')

        @livewire('user.user-update')

        @livewire('user.user-store')

        @livewireScripts
    </main>
</body>
</html>
