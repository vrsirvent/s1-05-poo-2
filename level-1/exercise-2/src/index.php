<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';

$triangle = new Triangle(24, 5);
echo PHP_EOL . "Triangle area: " . $triangle->calculateArea() . PHP_EOL;

$rectangle = new Rectangle(35, 11);
echo "Rectangle area: " . $rectangle->calculateArea() . PHP_EOL;

?>

