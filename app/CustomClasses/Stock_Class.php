<?php

namespace App\CustomClasses;

class Stock_Class
{
    private $requestBody;
    protected $firstCoin;
    protected $secondCoin;
    private $param;

    public function SetFirstCoin($coinVal){
        $this->firstCoin=$coinVal;
    }
    public function SetSecondCoin($coinVal){
        $this->secondCoin=$coinVal;
    }
    public function GetFirstCoin(){
        print_r($this->secondCoin);
    }
    public function GetSecondCoin(){
        print_r($this->secondCoin);
    }


}
