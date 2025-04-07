<div>
    @if ($isOpen)
        <section class="fixed inset-0 flex flex-col items-center justify-center z-50">
            <section class="w-[600px] h-[250px] bg-blue-200 rounded-md flex items-center justify-center flex-col">
                <div class="w-full h-full text-left">
                    <h1>Agregar Nuevo Usuario</h1>
                    <h2>Complete el formulario para registrar un nuevo usuario en el sistema.</h2>

                    <div class="flex justify-between">
                        <button>información Personal</button>
                        <button>Contacto</button>
                        <button>Ubicación</button>
                    </div>
                </div>

                <div class="w-full h-full">
                    <form wire:submit.prevent="storeUser" class="flex flex-row">
                        @csrf
                        <label for="name">Nombre:</label>
                        <input type="text" wire:model="name" placeholder="Ingrese su nombre">

                        <label for="lastname">Apellido:</label>
                        <input type="text" wire:model="lastname" placeholder="Ingrese su apellido">

                        <label for="email">Correo Electrónico:</label>
                        <input type="email" wire:model="email" placeholder="Ingrese su correo electrónico">

                        <label for="numberphone">Celular:</label>
                        <input type="text" wire:model="numberphone" placeholder="Ingrese su teléfono">

                        <label for="country">País:</label>
                        <input type="text" wire:model="country" placeholder="Ingrese su país">

                        <label for="district">Distrito:</label>
                        <input type="text" wire:model="district" placeholder="Ingrese su distrito">

                        <label for="direction">Dirección:</label>
                        <input type="text" wire:model="direction" placeholder="Ingrese su dirección">

                        <label for="password">Contraseña:</label>
                        <input type="password" wire:model="password" placeholder="Ingrese su contraseña">
    
                        <button wire:click="$set('isOpen', false)">Cancelar</button>
                        <button type="submit">Crear Usuario</button>
                    </form>
                </div>
            </section>
        </section>
    @endif
</div>
