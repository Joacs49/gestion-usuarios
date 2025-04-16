<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserStore extends Component
{
    public $isOpen = false;
    public $name, $lastname, $email, $numberphone, $country, $district, $direction, $password;
    public $activeSection = 'personal';
    protected $listeners = ['open' => 'openModal'];

    public function openModal()
    {
        $this->resetValidation();
        $this->reset(); 
        $this->isOpen = true;
    }

    public function storeUser()
    {
        try {
            $this->validate([
                'name' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'numberphone' => 'required|string|max:20',
                'country' => 'required|string|max:100',
                'district' => 'required|string|max:100',
                'direction' => 'required|string|max:255',
                'password' => 'required|string|min:9',
            ]);

            User::create([
                'name' => $this->name,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'numberphone' => $this->numberphone,
                'country' => $this->country,
                'district' => $this->district,
                'direction' => $this->direction,
                'password' => bcrypt($this->password),
            ]);

            session()->flash('message', 'Usuario creado correctamente.');
            $this->isOpen = false;
            $this->dispatch('userCreated'); 
            
        } catch (\Exception $e) {
            session()->flash('error', 'Error al crear el usuario: ' . $e->getMessage());
            $this->isOpen = false;
        }
    }

    public function render()
    {
        return view('livewire.user.user-store');
    }
}
