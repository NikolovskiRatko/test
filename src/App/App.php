<?php

namespace App;

class App {
    public function run(array $animals) {
        foreach ($animals as $animal) {
            $name = $animal->getName();
            $sound = $animal->getSound();
            echo "Old MacDonald had a farm, E I E I O,\n";
            echo "And on his farm, he had a $name, E I E I O.\n";
            echo "With a $sound $sound here and a $sound $sound there,\n";
            echo "Here a $sound, there a $sound, ev'rywhere a $sound $sound.\n";
            echo "Old MacDonald had a farm, E I E I O.\n\n";
        }
    }
}
