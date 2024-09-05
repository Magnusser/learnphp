<?php

class Box {
    public $height;
    public $width;
    public $length;

    public function volume(){
        return $this->height * $this->width * $this->length;
    }
}

class MetalBox extends Box {
    public $weightPerUnit = 10;
    public function weight(){
        return $this->volume() * $this->weightPerUnit;
    }
}

$num1 = 1;
$num2 = $num1;
$num2 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1->height = 1;
$box1->width = 1;
$box1->length = 1;
var_dump($box1);
$box2 = new MetalBox();
$box2->height = 2;
$box2->width = 100;
$box2->length = 0.3;
var_dump($box1);
var_dump($box2);

var_dump($box1->volume());
var_dump($box2->volume());
?>