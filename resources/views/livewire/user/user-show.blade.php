<div>
    <input class="text-white placeholder-white" type="text" wire:model="search" placeholder="Buscar usuarios por nombre" oninput="Livewire.dispatch('searchUpdated', { search: this.value })">
</div>
