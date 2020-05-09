<?php

namespace Mattiasgeniar\Percentage\Tests;

use Mattiasgeniar\Percentage\Percentage;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_can_calculate_simple_percentage_differences()
    {
        $this->assertEquals(20, Percentage::changeBetween(100, 120));

        $this->assertEquals(-20, Percentage::changeBetween(100, 80));

        $this->assertEquals(20, Percentage::absoluteChangeBetween(100, 80));
    }

    /** @test */
    public function it_can_calculate_how_much_percentage_a_is_of_b()
    {
        $this->assertEquals(120, Percentage::percentageOf(120, 100));

        $this->assertEquals(50, Percentage::percentageOf(50, 100));
    }

    /** @test */
    public function it_can_get_the_percentage_value_of_a_number()
    {
        $this->assertEquals(40, Percentage::fromNumber(20, 200));

        $this->assertEquals(100, Percentage::fromNumber(50, 200));

        $this->assertEquals(-40, Percentage::fromNumber(-20, 200));
    }

    /** @test */
    public function it_can_get_the_percentage_extension_value()
    {
        $this->assertEquals(1.6, Percentage::extension(140, 3, 2));

        $this->assertEquals(2.4, Percentage::extension(140, 1, 2));
    }
}
