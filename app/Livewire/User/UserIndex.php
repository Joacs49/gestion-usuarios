<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $search = '';
    public $users = [];
    protected $listeners = [
        'searchUpdated' => 'buscarUsuarios',
        'userUpdated' => '$refresh',
        'userDestroy' => '$refresh',
    ];
    
    public function mount()
    {
        $this->buscarUsuarios();
    }

    public function buscarUsuarios($search = null)
    {
        $this->search = $search ?? '';
        
        try {
            $this->users = empty($this->search)
                ? User::select("id", "name", "lastname", "email", "numberphone", "country", "district", "direction")->get()
                : User::where('name', 'LIKE', "%{$this->search}%")
                      ->select("id", "name", "lastname", "email", "numberphone", "country", "district", "direction")
                      ->get();
        } catch (\Exception $e) {
            session()->flash('error', 'Ocurrió un error en la consulta: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.user.user-index', ['users' => $this->users]);
    }
}
