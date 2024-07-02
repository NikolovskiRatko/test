<?php

namespace App;

use Interfaces\AppInterface;
use Models\UserAnimal;
use Interfaces\DataLoaderInterface;

class DataDrivenApp implements AppInterface {
    private $dataLoader;

    public function __construct(DataLoaderInterface $dataLoader) {
        $this->dataLoader = $dataLoader;
    }

    public function run() {
        $animalsData = $this->dataLoader->loadData(__DIR__ . '/../data.json');

        $animals = [];
        foreach ($animalsData as $animalData) {
            $animals[] = new UserAnimal($animalData['name'], $animalData['sound']);
        }

        $farmRhyme = new FarmRhyme($animals);
        $farmRhyme->printVerse();
    }
}
