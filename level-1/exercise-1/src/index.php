<?php

require_once 'Canary.php';
require_once 'Parrot.php';

$animals = [ new Canary("Yellow"), new Parrot("Philip") ];

foreach ($animals as $animal) {
    echo $animal->getName() . " says the sound: " . $animal->speak() . PHP_EOL;
}

?>
