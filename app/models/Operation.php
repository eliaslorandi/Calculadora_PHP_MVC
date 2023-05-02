<?php

namespace app\models;

class Operation {
    public function add($a, $b){
        return $a + $b;
    }

    public function sub($a, $b){
        return $a - $b;
    }

    public function multi($a, $b){
        return $a * $b;
    }

    public function div($a, $b){
        if($b==0){
            return 0;
        }
        return $a / $b;
    }


}