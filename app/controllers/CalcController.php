<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Operation;

class CalcController extends Controller{
    public function index(){
        echo'calculator system';
    }

    public function somar($a, $b){
        $operation = new Operation();
        echo $operation->add($a, $b);
    }
}
