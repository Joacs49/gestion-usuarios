<div class=" min-h-screen flex flex-col items-center justify-center">

    <section class="w-95 h-24 bg-blue-500 flex flex-row items-center shadow-md rounded-t-lg">

        <div class="flex flex-col justify-start w-full">
            <h1 class="text-3xl font-bold text-white">Gestión de Usuarios</h1>
            <p class="text-white">Administra los usuarios del sistema</p>
        </div>
        
        <div class="flex flex-row items-center justify-end w-full">
            @livewire('user.user-show')
            <a href="{{ route('users.store.view') }}" class="bg-white text-blue-600">Nuevo Usuario</a>
        </div>

    </section>

    <table class="w-95 border-collapse shadow-md rounded-b-lg ">
        @if (isset($users) && !$users->isEmpty())
        <thead class="bg-table">
            <tr class="text-center">
                <th>Usuario</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Ubicación</th>
                <th>Dirección</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        
        @endif

        <tbody class="text-center bg-white">
            @forelse ($users as $usuario)
            <tr>
                <td>{{ $usuario->name }} {{ $usuario->lastname }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->numberphone }}</td>
                <td>{{ $usuario->country }}, {{ $usuario->district }}</td>
                <td>{{ $usuario->direction }}</td>
                <td><button onclick="Livewire.dispatch('openModal', { data: { id: {{ $usuario->id }} } })">Actualizar</button></td>
                <td>@livewire('user.user-delete', ['userId' => $usuario->id], key($usuario->id))</td>
            </tr>
            @empty
                <li>No se encontraron usuarios.</li>
            @endforelse
        </tbody>
    </table>
       
</div>
