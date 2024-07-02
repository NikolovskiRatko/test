<?php

namespace Models;


class Cat extends Animal {
    public function getName(): string {
        return 'cat';
    }
    public function getSound(): string {
        return 'meow';
    }
}
