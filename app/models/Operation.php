<?php

namespace app\models;

class Operation {

    public function addition($a = 0, $b = 0){
        $total = $a + $b;
        return $total;
       
    }

    public function subtraction($a, $b){
        if($a == null & $b == null){
            $total = 0;
            return $total;
        } elseif($a = null){
            return $b;
        }elseif($b = null){
            $total = $a;
            return $total;
        } 
            $total = $a - $b;
            return $total;
        }

    public function multiplication($a, $b){
        if($a==0 & $b==0){
            return 0;
        }
        return $a * $b;
    }

    public function division($a, $b){
        if($a==0 & $b==0){
            return 0;
        }
        return $a / $b;
    }


}