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

        $data["a"] = $a;
        $data["b"] = $b;
        $data["result"] = $operation->addition($a, $b);

        $data["view"] = "addition";
        $this->load("template", $data);
    }

    public function subtraction(){
        $data["view"] = "subtraction";
        $this->load("template", $data);
    }

    public function calculateSubtraction(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];

        $data["a"] = $a;
        $data["b"] = $b;
        $data["result"] = $operation->subtraction($a, $b);

        $data["view"] = "subtraction";
        $this->load("template", $data);
    }

    public function multiplication(){
        $data["view"] = "multiplication";
        $this->load("template", $data);
    }

    public function calculateMultiplication(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];

        $data["a"] = $a;
        $data["b"] = $b;
        $data["result"] = $operation->multiplication($a, $b);

        $data["view"] = "multiplication";
        $this->load("template", $data);
    }

    public function division(){
        $data["view"] = "division";
        $this->load("template", $data);
    }

    public function calculateDivision(){
        $operation = new Operation();
        $a = $_POST["a"];
        $b = $_POST["b"];

        $data["a"] = $a;
        $data["b"] = $b;
        $data["result"] = $operation->division($a, $b);

        $data["view"] = "division";
        $this->load("template", $data);
    }

}
