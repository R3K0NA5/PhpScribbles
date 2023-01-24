<?php

namespace senos_uzduotys\Kalkuliatorius;



class VisiSudeti
{
    public string $text1;
    public string $text2;
    public string $text3;
    public string $text4;
    public int $int1;
    public int $int2;



    public function __construct(string $text1, string $text2, string $text3, string $text, int $int1, int $int2)
    {
        $this->text1 = $text1;
        $this->text2 = $text2;
        $this->text3 = $text3;
        $this->text4 = $text;
        $this->int1 = $int1;
        $this->int2 = $int2;
    }

    public function testVisiSudeti(): string
    {
        return $this->text1 . $this->text2 . $this->text3 . $this->text4 . $this->int1 . $this->int2;
    }

    public function getsudeti(): string
    {
        return $this->text1 . $this->int1 + $this->int2;
    }

}