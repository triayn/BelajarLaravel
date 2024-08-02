<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('User')]

class Show extends Component
{
    public \App\Models\User $user;
    
    public function render()
    {
        return view('livewire.users.show');
    }
}
