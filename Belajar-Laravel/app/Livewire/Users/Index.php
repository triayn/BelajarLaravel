<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function destroy($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->delete();
        }

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->route('users');
    }

    public function render()
    {
        return view('livewire.users.index', [
            'users' => User::latest()->paginate(5)
        ]);
    }
}
