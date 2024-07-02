<?php

namespace Loaders;

use Interfaces\DataLoaderInterface;

class JsonDataLoader implements DataLoaderInterface {
    public function loadData(string $filePath): array {
        $jsonData = file_get_contents($filePath);
        return json_decode($jsonData, true);
    }
}
