<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $somma = 0;
    public $sottrai = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment(){
        $this->count++;
    }
    public function decrement(){
        $this->count--;
    }
    public function zero(){
        $this->count=0;
    }
    public function add(){
     
        $this->count += $this->somma;
    }
    public function subtract(){
     
        $this->count -= $this->sottrai;
    }
}
