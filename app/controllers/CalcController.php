<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Operation;

class CalcController extends Controller{
    public function index(){
        $data["view"] = "home";
        $this->load("template", $data);
    }

    public function addition(){
        $data["view"] = "addition";
        $this->load("template", $data);
    }

    public function calculateAddition(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $operation->add($a, $b);
    }

    public function subtraction(){
        $data["view"] = "subtraction";
        $this->load("template", $data);
    }

    public function calculateSubtraction(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $operation->add($a, $b);
    }

    public function multiplication(){
        $data["view"] = "multiplication";
        $this->load("template", $data);
    }

    public function calculateMultiplication(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];

        $die["a"] = $a;
        $die["b"] = $b;
        $die["result"] = $operation->multi($a, $b); 
        $this->load("calc", $die);
    }

    public function division(){
        $data["view"] = "division";
        $this->load("template", $data);
    }

    public function calculateDivision(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $operation->div($a, $b);
    }

}
