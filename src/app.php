<?php

declare(strict_types=1);

namespace App;

require_once __DIR__ . "/../vendor/autoload.php";

$filteredByGreen = filterCSV(readCSV("../files/XLÄ-Table 1.csv"), "grö");

$sortedByVariant = sortProductsByVariant($filteredByGreen);

dump($filteredByGreen);
dump($sortedByVariant);
