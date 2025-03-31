<div>

    <h2>Busqueda por filtrado:</h2>
    <input type="text" wire:model="search" oninput="console.log('Enviando evento:', this.value); Livewire.dispatch('searchUpdated', { search: this.value })">
    
</div>
