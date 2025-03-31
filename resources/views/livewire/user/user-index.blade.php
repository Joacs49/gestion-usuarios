<div>
    <h1>Usuarios</h1>

    @livewire('user.user-show')

    <ul>
        @forelse ($users as $usuario)
            <li><strong>Nombre:</strong> {{ $usuario->name }}</li>
            <li><strong>Apellido:</strong> {{ $usuario->lastname }}</li>
            <li><strong>Email:</strong> {{ $usuario->email }}</li>
            <li><strong>Teléfono:</strong> {{ $usuario->numberphone }}</li>
            <li><strong>Ubicación:</strong> {{ $usuario->country }}, {{ $usuario->district }}</li>
            <li><strong>Dirección:</strong> {{ $usuario->direction }}</li>
            <button onclick="Livewire.dispatch('openModal', { data: { id: {{ $usuario->id }} } })">Actualizar</button>
            @livewire('user.user-delete', ['userId' => $usuario->id], key($usuario->id))

            <hr>
        @empty
            <li>No se encontraron usuarios.</li>
        @endforelse
    </ul>
</div>
