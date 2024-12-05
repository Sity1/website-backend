<?php
class fruit {
   //properties
    public $name;
   public $color; 

//methods
function setName($name) {
    $this->name = $name;
} 

function getName() {
    return $this->name;
}

function setColor($color) {
    $this->color = $color;
} 

function getColor() {
    return $this->color;
}

}

$apple =new fruit();
$apple->setName("apple");

echo $apple->getName();

echo "<br>";
 echo "<br>";

$mango = new fruit();
$mango->setName("mango");

echo $mango->getName();

echo "<br>";

$mango->setColor("green");
 
echo $mango->getcolor();

echo "<br>";



class car {
    public $color;
    public $model; 

    function __construct($model) {
        $this->model = $model;
    }

function getModel() {
    return $this->model;
}

}

$toyota = new car("2025");

echo $toyota->getModel(); 

$toyota->color ="red";

echo $toyota->color. "<br>";



class vegetable extends fruit {
    public $nutrient;

}

$ponkinLeaf = new vegetable();

$ponkinLeaf->setName("ponkinleaf");

echo $ponkinLeaf->getName();






?>
