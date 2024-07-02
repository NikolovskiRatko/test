<?php

namespace Models;

class UserAnimal extends Animal {
    private $name;
    private $sound;

    public function __construct(string $name, string $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSound(): string {
        return $this->sound;
    }
}