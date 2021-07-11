<?php

class Calc {
    public $operator;
    public $num1;
    public $num2;

    public function __construct($one, $two , $three)
    {
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }

    public function calculator()
    {
        switch ($this->operator){
            case 'add';
                $result = $this->num1 + $this->num2;
                return $result;

            case 'sub';
                $result = $this->num1 - $this->num2;
                return $result;

            case 'div';
                $result = $this->num1 / $this->num2;
                return $result;

            case 'mul';
                $result = $this->num1 * $this->num2;
                return $result;

            default :
                echo 'ERROR!';
                break;
        }
    }
}