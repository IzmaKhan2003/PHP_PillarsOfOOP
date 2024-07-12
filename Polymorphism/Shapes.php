<?php
interface Shapes {
    public function calculateArea();
}

class Circle implements Shapes {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle implements Shapes {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

$circle = new Circle(5);
echo $circle->calculateArea() . "\n";      

$rectangle = new Rectangle(4, 6);
echo $rectangle->calculateArea() . "\n";