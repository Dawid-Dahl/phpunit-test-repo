<?php

namespace App;

function testFn()
{
    var_dump("LOL");

    return 1;
}

function readCSV(string $csvPath)
{
    $file = file($csvPath, FILE_IGNORE_NEW_LINES);
    $columns = explode(";", $file[0]);
    $fileMap = array_map(fn ($line) => str_getcsv($line, ";", '"'), array_slice($file, 1));

    return array_map(
        fn ($line) => array_combine($columns, $line),
        $fileMap,
    );
}

function filterCSV(array $array = [], string $filterBy = "")
{
    return array_filter(
        $array,
        fn ($product) => gettype(strpos($product["descriptionshort"], $filterBy)) === "integer"
    );
}

function sortProductsByVariant(array $productArray)
{
    $sortedByVariant = [];

    foreach ($productArray as $product) {
        $variantKey = $product["variantkey"];

        if (array_key_exists($variantKey, $sortedByVariant)) {
            array_push($sortedByVariant[$variantKey], $product);
        } else {
            $sortedByVariant[$variantKey] = [];
        }
    }

    return $sortedByVariant;
}
