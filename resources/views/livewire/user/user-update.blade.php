<div>
    @if($isOpenUpdate)
        <section>
            <h1>Actualizar Usuario</h1>

            <form wire:submit.prevent="updateUser">
                <input type="text" wire:model.defer="name" placeholder="Nombre">
                <input type="text" wire:model.defer="lastname" placeholder="Apellido">
                <input type="email" wire:model.defer="email" placeholder="Correo Electrónico">
                <input type="text" wire:model.defer="numberphone" placeholder="Teléfono">
                <input type="text" wire:model.defer="country" placeholder="País">
                <input type="text" wire:model.defer="district" placeholder="Distrito">
                <input type="text" wire:model.defer="direction" placeholder="Dirección">
                <button 
                    class="w-full text-left p-2 hover:bg-gray-200 cursor-pointer" 
                    type="submit">
                    Actualizar
                </button>
                <button wire:click="$set('isOpenUpdate', false)">Cerrar</button>
            </form>
        </section>
    @endif
</div>
