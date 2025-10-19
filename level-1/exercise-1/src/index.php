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

class Parrot extends Animal {
    public function speak(): string {
        return "Hi human!";
    }
}

class Canary extends Animal {
    public function speak(): string {
        return "Tweet, Twee, Twee, Tweet";
    }
}

$animals = [ new Canary("Yellow"), new Parrot("Philip") ];

foreach ($animals as $animal) {
    echo $animal->getName() . " says: " . $animal->speak() . PHP_EOL;
}

?>


