<div>
    <span class="cursor-pointer text-xl" wire:click="toggleOptions">...</span>

    @if($showSelect)
        <div class="mt-2 p-2 border rounded-md bg-white shadow-lg">
            <button class="w-full text-left p-2 border-b-2 disabled">Acciones</button>
            <button class="w-full text-left p-2 hover:bg-gray-200" onclick="Livewire.dispatch('openModal', { data: { id: {{ $usuario->id }} } })">Actualizar</button>
            @livewire('user.user-delete', ['userId' => $usuario->id], key($usuario->id))
        </div>
    @endif
</div>
