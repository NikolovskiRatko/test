<?php

namespace Models;


class Pig extends Animal {
    public function getName(): string {
        return 'pig';
    }
    public function getSound(): string {
        return 'oink';
    }
}
