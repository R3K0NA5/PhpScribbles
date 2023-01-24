<?php
namespace senos_uzduotys\Traitai interface\mano;
use interface\mano\FactorialCalculator;
use interface\mano\ConcreteFactorialCalculator;
class Main
{
public static function run():void
{
    $calculator = new interface\mano\ConcreteFactorialCalculator();
    $result = $calculator->calculate(4);
    echo $result;
}
}