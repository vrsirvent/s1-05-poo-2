<?php

require_once 'Animal.php';

class Canary extends Animal {
    public function speak(): string {
        return "Tweet, Twee, Twee, Tweet";
    }
}

?>