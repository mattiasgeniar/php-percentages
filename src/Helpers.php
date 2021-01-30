<?php

use Mattiasgeniar\Percentage\Percentage;

if (!method_exists("percentage_between"))
{
    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    function percentage_between(float $a, float $b): float
    {
        return Percentage::differenceBetween($a, $b);
    }
}

if (!method_exists("percentage_abs_between"))
{
    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    function percentage_abs_between(float $a, float $b): float
    {
        return Percentage::absoluteDifferenceBetween($a, $b);
    }
}

if (!method_exists("percentage"))
{
    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    function percentage(float $a, float $b): float
    {
        return Percentage::calculate($a, $b);
    }
}

if (!method_exists("percentage_of"))
{
    /**
     * @param float $percentage
     * @param float $number
     * @return float
     */
    function percentage_of(float $percentage, float $number): float
    {
        return Percentage::of($percentage, $number);
    }
}

if (!method_exists("percentage_extension"))
{
    /**
     * @param float $percentage
     * @param float $a
     * @param float $b
     * @return float
     */
    function percentage_extension(float $percentage, float $a, float $b): float
    {
        return Percentage::extension($percentage, $a, $b);
    }
}
