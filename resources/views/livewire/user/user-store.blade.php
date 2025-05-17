<div>
    @if ($isOpen)
        <div class="fixed inset-0 bg-black opacity-80 z-40"></div>
        <section class="fixed inset-0 flex flex-col items-center justify-center z-50">
            <section class="w-[600px] h-[250px] bg-white rounded-md flex items-center flex-col">
                <div class="w-full h-full text-left ml-10 mt-5">
                    <h1 class="font-semibold text-xl">Agregar Nuevo Usuario</h1>
                    <h2 class="text-sm color-paragraph mt-2">Complete el formulario para registrar un nuevo usuario en el sistema.</h2>

                    <div class="w-11/12 flex mt-3 bg-gray-100 rounded-md text-gray-500 font-medium">
                        <button 
                            type="button" 
                            wire:click="$set('activeSection', 'personal')" 
                            class="text-sm m-1 p-2 cursor-pointer rounded
                                {{ $activeSection === 'personal' ? 'bg-white text-black shadow-md' : '' }}">
                            Información Personal
                        </button>

                        <button 
                            type="button" 
                            wire:click="$set('activeSection', 'contact')" 
                            class="text-sm m-1 p-2 pr-16 pl-16 cursor-pointer rounded
                                {{ $activeSection === 'contact' ? 'bg-white text-black shadow-md' : '' }}">
                            Contacto
                        </button>

                        <button 
                            type="button" 
                            wire:click="$set('activeSection', 'location')" 
                            class="text-sm m-1 p-2 pr-15 pl-16 cursor-pointer rounded
                                {{ $activeSection === 'location' ? 'bg-white text-black shadow-md' : '' }}">
                            Ubicación
                        </button>
                    </div>
                </div>

                <div class="w-full h-full">
                    <form id="createUserForm" wire:submit.prevent="storeUser" class="flex flex-row text-sm font-medium ml-6 mt-5">
                        @csrf
                        @if ($activeSection === 'personal')
                            <div class="flex items-start flex-col">
                                <label for="name">Nombre</label>
                                <input type="text" wire:model="name" placeholder="Ingrese su nombre">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="lastname">Apellido</label>
                                <input type="text" wire:model="lastname" placeholder="Ingrese su apellido">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="password">Contraseña</label>
                                <input type="password" wire:model="password" placeholder="Ingrese su contraseña">
                            </div>
                        @endif
                    
                        @if ($activeSection === 'contact')
                            <div class="flex items-start flex-col">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" wire:model="email" placeholder="Ingrese su correo electrónico">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="numberphone">Celular</label>
                                <input type="text" wire:model="numberphone" placeholder="Ingrese su teléfono">
                            </div>
                        @endif

                        @if ($activeSection === 'location')
                            <div class="flex items-start flex-col">
                                <label for="country">País</label>
                                <input type="text" wire:model="country" placeholder="Ingrese su país">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="district">Distrito</label>
                                <input type="text" wire:model="district" placeholder="Ingrese su distrito">
                            </div>
                    
                            <div class="flex items-start flex-col">
                                <label for="direction">Dirección</label>
                                <input type="text" wire:model="direction" placeholder="Ingrese su dirección">
                            </div>
                        @endif
                    
                    </form>    
                    
                    <div class="w-full h-full flex items-end justify-end">  
                        <button type="button" wire:click="$set('isOpen', false)">Cancelar</button>
                        <button type="submit" form="createUserForm">Crear Usuario</button>
                    </div>

                </div>
            </section>
        </section>
    @endif
</div>
