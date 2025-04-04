<div class=" min-h-screen flex flex-col items-center justify-center">

    <section class="w-95 h-24 bg-blue-500 flex flex-row items-center shadow-md rounded-t-lg">

        <div class="flex flex-col justify-start w-full ml-5">
            <h1 class="text-2xl font-bold text-white">Gestión de Usuarios</h1>
            <p class="text-white text-paragraph">Administra los usuarios del sistema</p>
        </div>
        
        <div class="flex flex-row items-center justify-end w-full mr-5">
            @livewire('user.user-show')
            <a href="{{ route('users.store.view') }}" class="bg-white text-blue-700 px-7 py-2 rounded-md hover:bg-gray-200">Nuevo Usuario</a>
        </div>

    </section>

    <table class="w-95 border-collapse shadow-md rounded-b-lg">
        @if (isset($users) && !$users->isEmpty())
        <thead class="bg-table border-b-[1px] border-gray-300 text-gray-500">
            <tr class="text-left">
                <th class="text-sm font-medium pl-4 p-2">Usuario</th>
                <th class="text-sm font-medium pl-4 p-2">Contacto</th>
                <th class="text-sm font-medium pl-4 p-2">Ubicación</th>
                <th class="text-sm font-medium pl-4 p-2">Dirección</th>
                <th class="text-sm font-medium pl-4 p-2" colspan="2">Acciones</th>
            </tr>
        </thead>
        
        @endif

        <tbody class="text-center bg-white">
            @forelse ($users as $usuario)
            <tr class="border-b-[1px] border-gray-300 hover:bg-gray-200">
                <td class="flex flex-row p-2 items-center text-left"><span class="text-center pl-2"><img class="object-cover w-9 h-9" src="https://cdn-icons-png.flaticon.com/512/9512/9512683.png" alt="user"></span><div class="flex flex-col pl-3 text-base">{{ $usuario->name }} {{ $usuario->lastname }}<span class="block text-sm text-gray-500">{{ $usuario->email }}</span></div></td>
                <td class="p-2">{{ $usuario->numberphone }}</td>
                <td class="p-2">{{ $usuario->country }}, {{ $usuario->district }}</td>
                <td class="p-2">{{ $usuario->direction }}</td>
                <td class="p-2"><button onclick="Livewire.dispatch('openModal', { data: { id: {{ $usuario->id }} } })">Actualizar</button></td>
                <td class="p-2">@livewire('user.user-delete', ['userId' => $usuario->id], key($usuario->id))</td>
            </tr>
            @empty
                <li>No se encontraron usuarios.</li>
            @endforelse
        </tbody>
    </table>
       
</div>
