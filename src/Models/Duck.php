<?php

namespace Models;


class Duck extends Animal {
    public function getName(): string {
        return 'duck';
    }
    public function getSound(): string {
        return 'quack';
    }
}
