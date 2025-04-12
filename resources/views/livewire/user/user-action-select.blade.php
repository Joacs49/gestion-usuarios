<div>
    <section class="relative"> 
        <div class="w-8 h-5 ml-5 hover:bg-gray-400 duration-300 rounded-md flex items-center justify-center">
            <span 
                class="mb-3 cursor-pointer text-xl" 
                wire:click="toggleOptions">
                ...
            </span>
        </div>

        @if($showSelect)
            <div class="mt-2 p-2 border rounded-md bg-white shadow-lg absolute z-10">
                <button class="w-full text-left p-2 border-b-2 disabled font-bold">Acciones</button>
                <button 
                    class="w-full text-left p-2 hover:bg-gray-200 cursor-pointer" 
                    onclick="Livewire.dispatch('openModal', { data: { id: {{ $usuario->id }} } })">
                    Actualizar
                </button>

                @livewire('user.user-delete', ['userId' => $usuario->id], key($usuario->id))
            </div>
        @endif
    </section>
</div>
