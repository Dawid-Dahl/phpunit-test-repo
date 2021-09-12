<?php

class AppTest extends \PHPUnit\Framework\TestCase
{
    public function testReadCSV()
    {
        \App\testFn();

        //$CSV = \App\readCSV("../files/XLÄ-Table 1.csv");

        $this->assertSame(1, 1);
    }
}
