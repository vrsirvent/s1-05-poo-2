

<?php

require_once 'Animal.php';

class Parrot extends Animal {
    public function speak(): string {
        return "Hi human!";
    }
}

?>

