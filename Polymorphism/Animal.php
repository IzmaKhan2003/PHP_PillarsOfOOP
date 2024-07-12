<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        echo $this->name . " makes seound\n";
    }
}
class Dog extends Animal {
    public function makeSound() {
        echo $this->name . " is barking\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo $this->name . " is meowing\n";
    }
}

interface CanFly {
    public function fly();
}

class Bird extends Animal implements CanFly {
    public function makeSound() {
        echo $this->name . "is chirping\n";
    }

    public function fly() {
        echo "The bird is flying.\n";
    }
}

$animal = new Animal("animal");
$animal->makeSound();  // Output: The animal makes a sound.

$dog = new Dog("dog");
$dog->makeSound();  // Output: The dog barks.

$cat = new Cat("cat");
$cat->makeSound();  // Output: The cat meows.

$bird = new Bird("bird");
$bird->makeSound();  // Output: The bird chirps.
$bird->fly(); 