<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;

class UserEditForm extends Form
{
    public $user;

    #[Validate('required',message:"Il nome è richiesto")] 
    #[Validate('min:3',message:"Il nome è troppo corto")]
    public $name='';

    /* #[Validate('required|min:3|email|unique:users')] */
    public $email='';

    #[Validate('sometimes|min:3')] 
    public $password='';

    public function rules(){
        return [
            'email'=>[
                'required',
                'email',
                'min:3',
                Rule::unique('users')->ignore($this->user),
            ]
            ];
    }

    public function setData($user){
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function update(User $user){
        $user->update([
            'name'=>$this->name,
            'email'=>$this->email,
        ]);

        if($this->password){
            $this->user->update(
                [
                    'password'=>$this->password,
                ]
                );
        }
    }
}
