<?php

namespace senos_uzduotys\Kalkuliatorius;

class CarDoor
{
public int $duris;
public function __construct(int $duris)
{
    $this->duris = $duris;
}

public function getDuris():int
{
    return $this->duris;
}
}