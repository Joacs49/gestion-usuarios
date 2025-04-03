<div class="flex items-center relative">
    <span class="absolute left-2 ml-0">🔍</span>
    <input class="border border-search text-white placeholder-white mr-2 p-2 pl-8 
    rounded-lg focus:outline-none " type="text" wire:model="search" 
    placeholder="Buscar usuarios" oninput="Livewire.dispatch('searchUpdated', { search: this.value })">
</div>
