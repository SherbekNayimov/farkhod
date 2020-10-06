<?php

class Calculator
{
    public function add($a, $b)
    {
       return $a + $b;
    }
    public function substrct($a, $b)
    {
        return $a - $b;
    }
    public function multiply($a, $b)
    {
        return $a * $b;
    }
    public function divide($a, $b)
    {
     return $a / $b;
    }
    public function remainder($a, $b)
    {
        return $a % $b;
    }
    public function bulish($a, $b){
        return ($a / 13 || $b / 13) - 5;
    }
    public function kupaytirish($a, $b){
        $A = $this->multiply($a, $b);
        $B = $this->divide($a, $b);
        return ($A + $B) /2;
    }
}


$calculator = new Calculator();
$numbers = range(1,100);
foreach ($numbers as $number){
    $rand = rand(2,10);


            echo " Number: $number: <br>";
            echo "$number + $rand  = " . $calculator->add($number, $rand) . "<hr>";
            echo "$number - $rand  = " . $calculator->substrct($number, $rand) . "<hr>";
            echo "$number * $rand  = " . $calculator->multiply($number, $rand) . "<hr>";
            echo "$number / $rand  = " . $calculator->divide($number, $rand) . "<hr>";
            echo "$number % $rand  = " . $calculator->remainder($number, $rand) . "<hr>";
            echo "sherbek = " . $calculator->bulish($number, $rand) . "<hr>";
            echo "Nayimov  = " . $calculator->kupaytirish($number, $rand) . "<hr>";

}
