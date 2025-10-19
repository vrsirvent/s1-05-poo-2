<?php

abstract class Shape implements Calculable {
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width; 
        $this->height = $height;  
    }

    protected function calculateBase(): float {
        return $this->width * $this->height;
    }

    abstract public function calculateArea(): float;
}

interface Calculable {
    public function calculateArea(): float;
}

class Triangle extends Shape {
    public function calculateArea(): float {
        return $this->calculateBase() / 2; 
    }
}

class Rectangle extends Shape {
    public function calculateArea(): float {
        return $this->calculateBase(); 
    }
}

$triangle = new Triangle(24, 5);
echo PHP_EOL . "Triangle area: " . $triangle->calculateArea() . PHP_EOL;

$rectangle = new Rectangle(35, 11); 
echo "Rectangle area: " . $rectangle->calculateArea() . PHP_EOL; 

?>


