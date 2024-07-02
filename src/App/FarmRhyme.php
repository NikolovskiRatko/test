<?php

namespace App;

use Interfaces\AnimalInterface;

class FarmRhyme {
    private $animals = [];

    public function __construct(array $animals = []) {
        $this->animals = $animals;
    }

    public function addAnimal(AnimalInterface $animal) {
        $this->animals[] = $animal;
    }

    public function printVerse() {
        foreach ($this->animals as $animal) {
            $name = $animal->getName();
            $sound = $animal->getSound();
            echo "Old MacDonald had a farm, E I E I O,\n";
            echo "And on his farm, he had a $name, E I E I O.\n";
            echo "With a $sound $sound here and a $sound $sound there,\n";
            echo "Here a $sound, there a $sound, everywhere a $sound $sound.\n";
            echo "Old MacDonald had a farm, E I E I O.\n\n";
        }
    }
}