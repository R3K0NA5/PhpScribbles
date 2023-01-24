<?php

namespace senos_uzduotys\Kalkuliatorius;


interface KCalculator2
{
    public function multiply(int $a, int $b): int;

    public function getDivide (int $a, int $b ): int;
}
