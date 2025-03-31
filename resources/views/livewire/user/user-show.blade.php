<div>

    <h2>Busqueda por filtrado:</h2>
    <input type="text" wire:model="search" placeholder="Ingrese el nombre de la personan a buscar" oninput="Livewire.dispatch('searchUpdated', { search: this.value })">
    
</div>
