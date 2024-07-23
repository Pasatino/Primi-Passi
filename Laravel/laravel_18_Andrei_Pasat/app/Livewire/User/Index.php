<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $q='';

    #[On('refreshUsers')]
    public function render()
    {
        $users = User::where('email','LIKE','%'.$this->q.'%')->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.user.index',compact('users'));
    }
    public function delete(User $user){
        $user->delete();
    }
}
