<?php

namespace Deg540\StringCalculatorPHP;

use function PHPUnit\Framework\isEmpty;

class StringCalculator
{
    function add(String $inputString):int
    {
        if(empty($inputString)){
            return 0;
        }else {
            $suma = 0;
            $inputStringSeparado = explode(",", $inputString);
            /*
            foreach ($inputStringSeparado as $i=>$aux) {
                $inputStringSeparado[$i]=explode("/n",$aux);
            }
            */
            foreach ($inputStringSeparado as $number) {
                $suma += (int)$number;
            }
            return $suma;
        }
    }
}