<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    /**
     * define public variable
     */
    public $id;
    public $name;
    public $email;

    /**
     * mount or construct function
     */
    public function mount($id)
    {
        $user = User::find($id);

        if ($user) {
            $this->id       = $user->id;
            $this->name    = $user->name;
            $this->email  = $user->email;
        }
    }

    /**
     * update function
     */
    public function update()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email', 'regex:/^[\w\.-]+@gmail\.com$/'],
        ]);

        if ($this->id) {

            $user = User::find($this->id);

            if ($user) {
                $user->update([
                    'name'     => $this->name,
                    'email'   => $this->email
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('users');
    }

    public function render()
    {
        return view('livewire.users.edit');
    }
}
