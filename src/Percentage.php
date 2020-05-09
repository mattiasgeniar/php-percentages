<?php

namespace Mattiasgeniar\Percentage;

class Percentage
{
    /**
     * What is the percentage increase or decrease from $a to $b ?
     */
    public static function differenceBetween($a, $b)
    {
        return floatval(($b - $a) / $a * 100);
    }

    /**
     * What is the absolute percentage increase or decrease from $a to $b ?
     */
    public static function absoluteDifferenceBetween($a, $b)
    {
        return floatval(abs(static::differenceBetween($a, $b)));
    }

    /**
     * How much is $a of $b in percentages?
     */
    public static function calculate($a, $b)
    {
        return floatval($a * 100 / $b);
    }

    /**
     * Get a percentage return from a number.
     */
    public static function of($percentage, $number)
    {
        return floatval($number * ($percentage / 100));
    }

    /**
     * Get the absolute value if you extend range $a to $b with $percentage.
     */
    public static function extension($percentage, $a, $b): float
    {
        if ($a > $b) {
            $movement = $a - $b;

            return floatval($a - ($movement * $percentage / 100));
        } else {
            $movement = $b - $a;

            return floatval($a + ($movement * $percentage / 100));
        }
    }
}
