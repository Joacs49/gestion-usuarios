<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Users</title>
</head>
<body>
    <h1>Create Users</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="lastname" placeholder="Lastname">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="numberphone" placeholder="Numberphone">
        <input type="text" name="country" placeholder="Country">
        <input type="text" name="district" placeholder="District">
        <input type="text" name="direction" placeholder="Direction">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>