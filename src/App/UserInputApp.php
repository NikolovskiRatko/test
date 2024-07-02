<?php

namespace App;

use Models\UserAnimal;
use Interfaces\AppInterface;

class UserInputApp implements AppInterface {
    public function run() {
        $farmRhyme = new FarmRhyme();

        while (true) {
            echo "Enter animal name (or type 'done' to finish): ";
            $animalName = trim(fgets(STDIN));
            if (strtolower($animalName) == 'done') {
                break;
            }

            echo "Enter sound that $animalName makes: ";
            $animalSound = trim(fgets(STDIN));

            $farmRhyme->addAnimal(new UserAnimal($animalName, $animalSound));
        }

        $farmRhyme->printVerse();
    }
}
