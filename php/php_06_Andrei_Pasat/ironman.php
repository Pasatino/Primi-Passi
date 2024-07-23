<?php

require_once("components/armor.php");
require_once("components/weapon.php");

class Ironman{
    public $weapon;
    public $armor;
    public function __construct(Weapon $weapon, Armor $armor){
        $this->weapon=$weapon;
        $this->armor=$armor;
    }

    public function showIronman(){
        echo "Ironman armato con " . get_class($this->weapon) . " E portetto da " . get_class($this->armor);
    }
}

$ironman1 = new Ironman (new Rocket, new Titan);
$ironman1->showIronman();

$tantiIronMan=[];

for($i = 1; $i<=(random_int(1, 10)); $i++){

    $counter = $i;

    array_push($tantiIronMan, new Ironman (new Rocket, new Titan));
}

var_dump($tantiIronMan);