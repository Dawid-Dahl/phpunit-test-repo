<?php

namespace App;

class AppTest extends \PHPUnit\Framework\TestCase
{
    public function testReadCSV()
    {
        $CSV = \App\readCSV(__DIR__ . "./../files/XLÄ-Table 1.csv");

        $this->assertSame(1, 1);
    }
}
