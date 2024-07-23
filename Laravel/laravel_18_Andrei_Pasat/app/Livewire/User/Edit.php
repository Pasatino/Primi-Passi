<?php

namespace App\Livewire\User;


use Livewire\Component;
use App\Livewire\Forms\UserEditForm;

class Edit extends Component
{
    public $user;
    public UserEditForm $form;

    public function render()
    {
        
        return view('livewire.user.edit');
    }

    public function mount(){
        $this->form->setData($this->user);
    }

    public function update(){
        $this->validate();
        $this->form->update($this->user);
        session()->flash('success','User successfully updated.');
    }
}
