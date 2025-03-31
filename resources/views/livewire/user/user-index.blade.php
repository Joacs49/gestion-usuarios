<div class=" min-h-screen flex flex-col items-center justify-center">
    <h1 class="text-3xl font-bold text-blue-500">Usuarios</h1>

    @livewire('user.user-show')

        @forelse ($users as $usuario)
            <table class="w-full border-collapse">
                <thead class="bg-gray-200">
                    <tr class="text-center">
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Ubicación</th>
                        <th>Dirección</th>
                        <th colspan="2">Interactuar</th>
                    </tr>
                </thead>

                <tbody class="text-center">
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->lastname }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->numberphone }}</td>
                        <td>{{ $usuario->country }}, {{ $usuario->district }}</td>
                        <td>{{ $usuario->direction }}</td>
                        <td><button onclick="Livewire.dispatch('openModal', { data: { id: {{ $usuario->id }} } })">Actualizar</button></td>
                        <td>@livewire('user.user-delete', ['userId' => $usuario->id], key($usuario->id))</td>
                    </tr>
                </tbody>
            </table>
        @empty
            <li>No se encontraron usuarios.</li>
        @endforelse
</div>
