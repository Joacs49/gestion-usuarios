<div>
    @if ($isOpen)
        <div class="fixed inset-0 bg-black opacity-80 z-40"></div>
        <section class="fixed inset-0 flex flex-col items-center justify-center z-50">
            <section 
                class="w-[680px] h-[380px] bg-white rounded-md flex items-center flex-col">
                <div class="w-full text-left ml-10 mt-5">
                    <h1 class="font-semibold text-xl">Agregar Nuevo Usuario</h1>
                    <h2 class="text-sm color-paragraph mt-2">Complete el formulario para registrar un nuevo usuario en el sistema.</h2>

                    <div class="w-11/12 flex mt-3 bg-gray-100 rounded-md text-gray-500 font-medium">
                        <button 
                            type="button" 
                            wire:click="$set('activeSection', 'personal')" 
                            class="text-sm m-1 p-2 pr-8 pl-8 cursor-pointer rounded
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
                            class="text-sm m-1 p-2 pr-19 pl-18 cursor-pointer rounded
                                {{ $activeSection === 'location' ? 'bg-white text-black shadow-md' : '' }}">
                            Ubicación
                        </button>
                    </div>
                </div>

                <div class="w-full h-full">
                    <form id="createUserForm" wire:submit.prevent="storeUser" class="w-full flex flex-row text-sm font-medium ml-6 mt-5">
                        @csrf
                        @if ($activeSection === 'personal')
                            <section class="w-11/12 flex flex-wrap">
                                <div class="w-47-porcent flex flex-col mr-4">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" id="name" wire:model="name" placeholder="Ingrese su nombre" 
                                    class="w-full rounded-sm p-2 mt-2 mr-4 border border-gray-300 focus:border-gray-500 outline-none">
                                </div>
                        
                                <div class="w-6/12 flex flex-col">
                                    <label for="lastname">Apellido</label>
                                    <input type="text" wire:model="lastname" placeholder="Ingrese su apellido"
                                    class="w-full rounded-sm p-2 mt-2 mr-4 border border-gray-300 focus:border-gray-500 outline-none">
                                </div>
                        
                                <div class="w-full flex items-start flex-col mt-4">
                                    <label for="password">Contraseña</label>
                                    <input type="password" wire:model="password" placeholder="Ingrese su contraseña"
                                    class="w-full rounded-sm p-2 mt-2 border border-gray-300 focus:border-gray-500 outline-none">
                                </div>
                            </section>
                        @endif
                    
                        @if ($activeSection === 'contact')
                            <section class="w-full flex items-start flex-col">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" wire:model="email" placeholder="Ingrese su correo electrónico"
                                class="w-11/12 rounded-sm p-2 mt-2 border border-gray-300 focus:border-gray-500 outline-none">
                   
                                <label for="numberphone" class="mt-4">Celular</label>
                                <input type="text" wire:model="numberphone" placeholder="Ingrese su teléfono"
                                class="w-11/12 rounded-sm p-2 mt-2 border border-gray-300 focus:border-gray-500 outline-none">
                            </section>
                        @endif

                        @if ($activeSection === 'location')
                            <section class="w-11/12 flex flex-wrap">
                                <div class="w-47-porcent flex flex-col mr-4">
                                    <label for="country">País</label>
                                    <input type="text" wire:model="country" placeholder="Ingrese su país"
                                    class="w-full rounded-sm p-2 mt-2 border border-gray-300 focus:border-gray-500 outline-none">
                                </div>

                                <div class="w-6/12 flex flex-col">
                                    <label for="district">Distrito</label>
                                    <input type="text" wire:model="district" placeholder="Ingrese su distrito"
                                    class="w-full rounded-sm p-2 mt-2 border border-gray-300 focus:border-gray-500 outline-none">
                                </div>

                                <div class="w-full flex flex-col mt-4">
                                    <label for="direction">Dirección</label>
                                    <input type="text" wire:model="direction" placeholder="Ingrese su dirección"
                                    class="w-full rounded-sm p-2 mt-2 border border-gray-300 focus:border-gray-500 outline-none">
                                </div>
                            </section>
                        @endif
                    </form> 
                    
                    <section class="flex gap-4 text-sm font-medium items-end justify-end mt-5 mr-8">
                        <button type="button" wire:click="$set('isOpen', false)" class="p-2 pr-4 pl-4 bg-white border-1 rounded-sm cursor-pointer">Cancelar</button>
                        <button type="submit" form="createUserForm" class="p-2 pr-4 pl-4 bg-blue-500 border-1 border-blue-600 rounded-sm text-white cursor-pointer">Crear Usuario</button> 
                    </section>
                </div>
            </section>
        </section>
    @endif
</div>
