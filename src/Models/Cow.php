<?php

namespace Models;

class Cow extends Animal {
    public function getName(): string {
        return 'cow';
    }
    public function getSound(): string {
        return 'moo';
    }
}
