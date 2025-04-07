<div>
    @if($isOpen)
        <section>
            <h1>Actualizar Usuario</h1>

            <form wire:submit.prevent="updateUser">
                <input type="text" wire:model="name" placeholder="Nombre">
                <input type="text" wire:model="lastname" placeholder="Apellido">
                <input type="email" wire:model="email" placeholder="Correo Electrónico">
                <input type="text" wire:model="numberphone" placeholder="Teléfono">
                <input type="text" wire:model="country" placeholder="País">
                <input type="text" wire:model="district" placeholder="Distrito">
                <input type="text" wire:model="direction" placeholder="Dirección">
                <button type="submit">Actualizar</button>
                <button wire:click="$set('isOpen', false)">Cerrar</button>
            </form>
        </section>
    @endif
</div>
