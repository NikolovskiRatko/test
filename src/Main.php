<?php

require_once 'autoload.php';

use App\DataDrivenApp;
use App\PolymorphismApp;
use App\UserInputApp;
use Loaders\JsonDataLoader;

echo "Choose the application to run:\n";
echo "1. Data-Driven App\n";
echo "2. Polymorphism App\n";
echo "3. User Input App\n";
echo "Enter the number of your choice: ";

$choice = trim(fgets(STDIN));

switch ($choice) {
    case 1:
        $dataLoader = new JsonDataLoader();
        (new DataDrivenApp($dataLoader))->run();
        break;
    case 2:
        (new PolymorphismApp())->run();
        break;
    case 3:
        (new UserInputApp())->run();
        break;
    default:
        echo "Invalid choice. Exiting.\n";
        break;
}
