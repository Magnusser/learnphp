<?php

class Box {
    public function __construct(){
        echo "Box was createddd\n";
    }
    public function __call($spell, $args){

    }
    public function __set($spell, $name){
        var_dump($spell, $name);
    }
    public function __destruct(){
        echo "Box aws destryed\n";
    }
}


$box = new Box();
$box->spell = 'Wish';