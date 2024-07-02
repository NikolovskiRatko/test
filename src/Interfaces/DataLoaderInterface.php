<?php

namespace Interfaces;

interface DataLoaderInterface {
    public function loadData(string $filePath): array;
}
