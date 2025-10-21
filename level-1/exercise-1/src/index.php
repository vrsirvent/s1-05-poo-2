<?php

require_once 'classes/Canary.php';
require_once 'classes/Parrot.php';

$animals = [ new Canary("Yellow"), new Parrot("Philip") ];

foreach ($animals as $animal) {
    echo $animal->getName() . " says the sound: " . $animal->speak() . PHP_EOL;
}

?>
