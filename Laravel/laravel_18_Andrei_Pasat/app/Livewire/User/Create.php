<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required',message:"Il nome è richiesto")] 
    #[Validate('min:3',message:"Il nome è troppo corto")] 
    public $name;

    #[Validate('required|min:3|email')] 
    public $email;

    #[Validate('required|min:3')] 
    public $password;

    public function render()
    {
        return view('livewire.user.create');
    }

    public function store(){

        $this->validate();

        /* $validateData = $this->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]); */

        User::create([
            'email'=>$this->email,
            'name'=>$this->name,
            'password'=>$this->password,
        ]);

        session()->flash('success','User successfully created.');

        $this->reset();

        /* $this->name='';
        $this->email='';
        $this->password=''; */

        $this->dispatch('refreshUsers')->to('user.index');
    }
}
