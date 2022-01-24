<?php

namespace Calculator;

use Calculator\Operations\Exponent;
use Calculator\Operations\Percentage;

class Calculator
{
    function exponent($num, $exponent): int
    {
        $exponentObj = new Exponent($num, $exponent);
        return $exponentObj->compute();
    }
    function Percentage($num1, $num2): int
    {
        $PercentageObj = new Percentage($num1, $num2);
        return $PercentageObj->Percentage();
    }
    // Write your functions below

}
