<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Operation;

class CalcController extends Controller{
    public function index(){
        $this->load('Calc');
    }

    public function add(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $operation->add($a, $b);
    }

    public function sub(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $operation->sub($a, $b);
    }

    public function multi(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];

        $die["a"] = $a;
        $die["b"] = $b;
        $die["result"] = $operation->multi($a, $b); 
        $this->load("calc", $die);
    }

    public function div(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $operation->div($a, $b);
    }
}
