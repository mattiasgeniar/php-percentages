<?php

namespace Mattiasgeniar\Percentage;

class Percentage
{
    public function __construct()
    {
        // constructor body
    }

    /*
        What is the percentage increase or decrease
        from $a to $b ?
    */
    public static function changeBetween ($a, $b)
    {
        return ($b - $a) / $a * 100;
    }

    /*
        How much is $a of $b in percentages?
    */
    public static function percentageOf ($a, $b)
    {
        return $a * 100 / $b;
    }

    /*
        Get a percentage return from a number.
    */
    public static function fromNumber ($a, $percentage)
    {
        return $a * ($percentage / 100);
    }
}
