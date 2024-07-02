<?php

namespace Models;


class Dog extends Animal {
    public function getName(): string {
        return 'dog';
    }
    public function getSound(): string {
        return 'woof';
    }
}
