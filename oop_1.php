<?php

class Calculation{
    public $a, $b, $c;

    function sum() {
        $this->c = $this->a + $this->b;
    }
}

$calculation = new Calculation();
$calculation->a = 100;
$calculation->b = 20;
$calculation->sum();
echo $calculation->c;

 ?>