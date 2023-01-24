<?php
namespace senos_uzduotys\Traitai interface\mano;
trait PositiveNumberCheker{
    public function check($number):bool{
        return $number >0;
    }
}


//tikrinam ar skaciai nera minusiniai