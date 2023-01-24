<?php

namespace senos_uzduotys\Kalkuliatorius;

include_once 'skaiciai.php';

class SimpleCalculator implements KCalculator,KCalculator2
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function subtract(int $a, int $b, int $c): int
    {
        return $a - $b - $c;
    }

    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    public function getDivide(int $a, int $b): int
    {
        return $a / $b;
    }
public function getNumbers(array $x): string
{
    return json_encode(array($x));
}
}