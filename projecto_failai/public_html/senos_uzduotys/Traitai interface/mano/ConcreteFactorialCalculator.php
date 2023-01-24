<?php

namespace senos_uzduotys\Traitai interface\mano;
use interface\mano\FactorialCalculator;

class ConcreteFactorialCalculator extends interface\mano\FactorialCalculator
{
    public function calculate($x) {
        $result = 1;
        for ($i = 1; $i <= $x; $i++) {
            $result *= $i;
        }
        return $result;
    }
}