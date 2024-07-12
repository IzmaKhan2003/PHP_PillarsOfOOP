<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        return $this->name . ' is eating.';
    }
}
class Dog extends Animal {
    public function bark() {
        return $this->name . ' is barking.';
    }
}

class Cat extends Animal {
    public function meow() {
        return $this->name . ' is meowing.';
    }
}

$dog = new Dog('Dog');
$cat = new Cat('Cat');


echo $dog->eat() . "\n"; 
echo $dog->bark() . "\n"; 

echo $cat->eat() . "\n"; 
echo $cat->meow(). "\n"; 