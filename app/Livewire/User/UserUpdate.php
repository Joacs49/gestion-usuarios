<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserUpdate extends Component
{
    public $userId, $name, $lastname, $email, $numberphone, $country, $district, $direction, $password;
    public $isOpenUpdate = false;
    protected $listeners = ['openModalUser' => 'loadUser'];

    public function loadUser($data)
    {
        $userId = $data['id']; 
        $user = User::findOrFail($userId);
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->lastname = $user->lastname;
        $this->email = $user->email;
        $this->numberphone = $user->numberphone;
        $this->country = $user->country;
        $this->district = $user->district;
        $this->direction = $user->direction;
        $this->isOpenUpdate = true;
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $this->userId,
            'numberphone' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'district' => 'required|string|max:100',
            'direction' => 'required|string|max:255',
        ]);
    
        $user = User::findOrFail($this->userId);
        $user->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'numberphone' => $this->numberphone,
            'country' => $this->country,
            'district' => $this->district,
            'direction' => $this->direction,
        ]);

        session()->flash('message', 'Usuario actualizado correctamente.');
        $this->isOpenUpdate = false;
        $this->dispatch('userUpdated')->to(UserIndex::class);
        $this->emit('userUpgraded'); 
    }

    public function render()
    {
        return view('livewire.user.user-update');
    }
}
