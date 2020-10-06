<?php

class Calculator
{
    public function divide($a, $b)
    {
        return $a / $b;
    }
}


$calculator = new Calculator();

$numbers = range(1,100);
foreach ($numbers as $number) {

    for ($i = 1; $i < 100; $i++) {
        if ($i % 3 == 0 || $i % 21 == 0 || $i % 42 == 0 || $i % 43 == 0) {
            $rand = rand(1, 10);
            echo "$i / $rand  = " . $calculator->divide($i, $rand) . "<hr>";

        }
    }
}

