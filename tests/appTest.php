<?php

namespace App;

class AppTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function readCSV_returns_valid_output()
    {
        include_once "valid-results/validReadCSVResult.php";

        $csv = readCSV(__DIR__ . "./../files/XLÄ-Table 1.csv");

        $this->assertSame(json_decode($validReadCSVResult, true), $csv);
    }

    /**
     * @test
     */
    public function filterCSV_filters_correctly()
    {
        include_once "valid-results/validFilterCSVResult.php";

        $filteredByGreen = filterCSV(readCSV(__DIR__ . "./../files/XLÄ-Table 1.csv"), "grö");

        $this->assertSame(json_decode($validFilterCSVResult, true), $filteredByGreen);
    }

    /**
     * @test
     */
    public function sortProductsByVariant_sorts_by_variant_key()
    {
        include_once "valid-results/validSortProductsByVariant.php";

        $productsSortedByVariant = sortProductsByVariant(readCSV(__DIR__ . "./../files/XLÄ-Table 1.csv"));

        $this->assertSame(json_decode($validSortProductsByVariantResult, true), $productsSortedByVariant);
    }
}
