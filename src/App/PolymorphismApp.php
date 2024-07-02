<?php

namespace App;

use Models\Cow;
use Models\Dog;
use Models\Cat;
use Models\Duck;
use Models\Pig;
use Interfaces\AppInterface;

class PolymorphismApp implements AppInterface {
    public function run() {
        $app = new App();
        $animals = [new Cow(), new Dog(), new Cat(), new Duck(), new Pig()];
        $app->run($animals);
    }
}
