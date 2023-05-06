<?php

namespace app\models;

class Operation {
    public function addition($a, $b){
        return $a + $b;
    }

    public function subtraction($a, $b){
        return $a - $b;
    }

    public function multiplication($a, $b){
        return $a * $b;
    }

    public function division($a, $b){
        if($b==0){
            return 0;
        }
        return $a / $b;
    }


}