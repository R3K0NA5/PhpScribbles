<?php

namespace senos_uzduotys\Kalkuliatorius;


interface KCalculator
{
    public function add(int $a, int $b): int;

    public function subtract(int $a, int $b, int $c): int;
}
