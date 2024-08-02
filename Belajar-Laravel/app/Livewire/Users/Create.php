<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $name, $email;
    public $success;
    protected $rules = [
        'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email', 'regex:/^[\w\.-]+@gmail\.com$/']
    ];

    /**
     * store function
     */
    public function store()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email
        ]);

        // Flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        // Redirect
        return redirect()->route('users');
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}
