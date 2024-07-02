<?php

namespace Models;

use Interfaces\AnimalInterface;

abstract class Animal implements AnimalInterface {
    abstract public function getName(): string;
    abstract public function getSound(): string;
}
