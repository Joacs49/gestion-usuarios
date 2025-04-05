<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class UserDelete extends Component
{
    public $userId;
    
    public function mount($userId)
    {
        $this->userId = $userId;
    }

    public function destroyUser()
    {
        try {
            $user = User::findOrFail($this->userId);
            $user->delete();
            Log::info('Usuario eliminado: ' . $this->userId);

            session()->flash('message', 'Usuario eliminado correctamente.');

            $this->dispatch('userDestroy')->to(UserIndex::class);
            $this->emit('userDeleted'); 

        } catch (\Exception $e) {
            Log::error('Error al eliminar usuario: ' . $e->getMessage());
            session()->flash('error', 'No se pudo eliminar el usuario.');
        }
    }

    public function render()
    {
        return view('livewire.user.user-delete');
    }
}
