<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Operation;

class CalcController extends Controller{
    public function index(){
        echo'calculator system';
    }

    public function add($a, $b){
        $operation = new Operation();
        echo $operation->add($a, $b);
    }

    public function sub($a, $b){
        $operation = new Operation();
        echo $operation->sub($a, $b);
    }

    public function multi($a, $b){
        $operation = new Operation();
        echo $operation->multi($a, $b);
    }

    public function div($a, $b=0){
        $operation = new Operation();
        echo $operation->div($a, $b);
    }
}
