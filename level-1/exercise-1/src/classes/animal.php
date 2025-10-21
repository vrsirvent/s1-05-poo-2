<?php

abstract class Animal implements Speaks {
    protected string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    abstract public function speak(): string;
}

interface Speaks {
    public function speak(): string;
}

?>

