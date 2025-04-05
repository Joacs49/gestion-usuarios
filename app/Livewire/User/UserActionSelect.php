<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserActionSelect extends Component
{
    public $usuario;
    public $showSelect = false;

    public function mount($usuario )
    {
        $this->usuario  = $usuario;
    }

    public function toggleOptions()
    {
        $this->showSelect = !$this->showSelect;
    }

    public function render()
    {
        return view('livewire.user.user-action-select');
    }
}
