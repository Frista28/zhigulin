<?php

namespace zhigulin;

use core\EquationInterface;

class Square extends Linear implements EquationInterface
{

    protected function discrem($a, $b, $c)
    {
        $d = ($b ** 2) - 4 * $a * $c;
        return $d;
    }
    public function solve($a, $b, $c):array
    {
        if ($a == 0) return $this->linear($b, $c);
        MyLog::log("Определено, что это квадратное уравнение");
        $x = $this->discrem($a, $b, $c);
        if ($x > 0) {
            return $this->x = array(
                ((-$b + sqrt($x)) / (2 * $a)),
                ((-$b - sqrt($x)) / (2 * $a))
            );
        }
        if ($x < 0) {
            throw new ZhigulinException("Ошибка: уравнение не имеет решений.");

        }
        return $this->x = array((-$b) / 2 * $a);

    }
}