<?php

abstract class Category 
{
    protected function getMyCategory(){
        echo "sono la categoria";
    }
}

class Attualità extends Category {
    public function getMyCategory(){
        echo "Sono la categoria di attualità";
    }
}

class Sport extends Category{
    public function getMyCategory(){
        echo "Sono la categoria di sport";
    }
}

class Gossip extends Category{
    public function getMyCategory(){
        echo "Sono la categoria di gossip";
    }
}

class Storia extends Category{
    public function getMyCategory(){
        echo "Sono la categoria di storia";
    }
}