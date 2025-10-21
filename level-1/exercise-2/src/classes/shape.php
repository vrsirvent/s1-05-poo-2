<?php

abstract class Shape implements Calculable {
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    abstract public function calculateArea(): float;
}

interface Calculable {
    public function calculateArea(): float;
}

?>

