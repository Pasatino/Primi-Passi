<?php

require_once("class.php");

class Post {
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct($titolo,Category $categoria, $tag){
        $this->titolo=$titolo;
        $this->categoria=$categoria;
        $this->tag=$tag;
    }

    public function stampaArticolo(){
        
        echo "Il titolo dell'articolo è " . "$this->titolo" . " oggi parleremo di " . get_class($this->categoria) . " $this->tag";
    }
}

$calcio1 = new Post("Napoli", new Sport, "#Maradona");
$calcio1->stampaArticolo();