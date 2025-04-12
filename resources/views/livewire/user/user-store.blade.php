<div>
    @if ($isOpen)
        <section class="fixed inset-0 flex flex-col items-center justify-center z-50">
            <section class="w-[600px] h-[250px] bg-blue-200 rounded-md flex items-center  flex-col">
                <div class="w-full h-full text-left">
                    <h1>Agregar Nuevo Usuario</h1>
                    <h2>Complete el formulario para registrar un nuevo usuario en el sistema.</h2>

                    <div class="flex justify-between">
                        <button type="button" wire:click="$set('activeSection', 'personal')">Información Personal</button>
                        <button type="button" wire:click="$set('activeSection', 'contact')">Contacto</button>
                        <button type="button" wire:click="$set('activeSection', 'location')">Ubicación</button>
                    </div>
                </div>

                <div class="w-full h-full">
                    <form wire:submit.prevent="storeUser" class="flex flex-col gap-4">
                        @csrf
                    
                        @if ($activeSection === 'personal')
                            <div class="flex items-start flex-col">
                                <label for="name">Nombre:</label>
                                <input type="text" wire:model="name" placeholder="Ingrese su nombre">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="lastname">Apellido:</label>
                                <input type="text" wire:model="lastname" placeholder="Ingrese su apellido">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="password">Contraseña:</label>
                                <input type="password" wire:model="password" placeholder="Ingrese su contraseña">
                            </div>
                        @endif
                    
                        @if ($activeSection === 'contact')
                            <div class="flex items-start flex-col">
                                <label for="email">Correo Electrónico:</label>
                                <input type="email" wire:model="email" placeholder="Ingrese su correo electrónico">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="numberphone">Celular:</label>
                                <input type="text" wire:model="numberphone" placeholder="Ingrese su teléfono">
                            </div>
                        @endif

                        @if ($activeSection === 'location')
                            <div class="flex items-start flex-col">
                                <label for="country">País:</label>
                                <input type="text" wire:model="country" placeholder="Ingrese su país">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="district">Distrito:</label>
                                <input type="text" wire:model="district" placeholder="Ingrese su distrito">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="direction">Dirección:</label>
                                <input type="text" wire:model="direction" placeholder="Ingrese su dirección">
                            </div>
                        @endif
                    
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="button" wire:click="$set('isOpen', false)">Cancelar</button>
                            <button type="submit">Crear Usuario</button>
                        </div>
                    </form>                    
                </div>
            </section>
        </section>
    @endif
</div>
