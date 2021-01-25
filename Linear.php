<?php
namespace zhigulin;
class Linear{
    protected function linear ($a, $b){

        if($a == 0){
            Throw new ZhigulinException("Определено, что такое уравнение не существует");
        }
        MyLog::log("Определено, что это линейное уравнение");
        $x = -($b/$a);
        $this -> x = $x;
        return $this -> x = array(-$b/$a);
    }
    protected $x;
}

