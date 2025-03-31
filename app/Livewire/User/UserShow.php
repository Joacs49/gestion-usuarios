<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserShow extends Component
{
    public $search = '';

    public function updatedSearch()
    {
        $this->dispatch('searchUpdated', search: $this->search);
    }

    public function render()
    {
        return view('livewire.user.user-show');
    }
}

