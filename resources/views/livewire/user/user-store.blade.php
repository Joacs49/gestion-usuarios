<div>
    @if ($isOpen)
        <section class="w-96 h-80 fixed inset-0 flex flex-col items-center justify-center bg-blue-500 z-50">
            <div>
                <h1>Agregar Nuevo Usuario</h1>
                <h2>Complete el formulario para registrar un nuevo usuario en el sistema.</h2>

                <form wire:submit.prevent="storeUser">
                    @csrf
                    <input type="text" wire:model="name" placeholder="Nombre">
                    <input type="text" wire:model="lastname" placeholder="Apellido">
                    <input type="email" wire:model="email" placeholder="Correo Electrónico">
                    <input type="text" wire:model="numberphone" placeholder="Teléfono">
                    <input type="text" wire:model="country" placeholder="País">
                    <input type="text" wire:model="district" placeholder="Distrito">
                    <input type="text" wire:model="direction" placeholder="Dirección">
                    <input type="password" wire:model="password" placeholder="Dirección">

                    <button wire:click="$set('isOpen', false)">Cancelar</button>
                    <button type="submit">Crear Usuario</button>
                </form>
            </div>
        </section>
    @endif
</div>
