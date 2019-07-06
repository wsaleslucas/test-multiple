<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class DiscoveryNumberTest extends TestCase
{
    /**
     * @return void
     */
    public function testManyMultiple()
    {
        $discovery = new \App\Http\Core\DiscoveryMultiples();
        $discovery->dynamicMultiples(45);
        $this->assertEquals(
            $discovery->getResult(), 'Linians'
        );
    }

    /**
     * @return void
     */
    public function testMultipleByThree()
    {
        $discovery = new \App\Http\Core\DiscoveryMultiples();
        $discovery->dynamicMultiples(3);
        $this->assertEquals(
            $discovery->getResult(), 'Linio'
        );
    }

    /**
     * @return void
     */
    public function testMultipleByFive()
    {
        $discovery = new \App\Http\Core\DiscoveryMultiples();
        $discovery->dynamicMultiples(5);
        $this->assertEquals(
            $discovery->getResult(), 'IT'
        );
    }

    /**
     * @return void
     */
    public function testNoMultiple()
    {
        $discovery = new \App\Http\Core\DiscoveryMultiples();
        $discovery->dynamicMultiples(2);
        $this->assertEquals(
            $discovery->getResult(), '2'
        );
    }
}
