<?php
declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Worker
 *
 * @author yuriy
 */


abstract class Worker {
    protected $isFixed;
    protected $payment;
    protected $name;
    protected $workPeriod;
    
    function __construct(string $name, bool $isFixed, int $payment, int $workPeriod) {
        $this->name=$name;
        $this->isFixed=$isFixed;
        $this->payment=$payment;
        $this->workPeriod=$workPeriod;
    }
    
    abstract public function getPayment():int ;
    abstract public function setPayment(int $setting_payment):void;    
    abstract public function setRang(string $settingRang):void ;
    abstract public function getRang():string ;
    abstract public function setFixed(bool $setFixed):void ;
    abstract public function getFixed():bool ;
    abstract public function setName($name):void ;
    abstract public function GetName():string ;
    abstract public function getMoney():int ;
    abstract public function getPeriod():int;

    private function calculateFixedMiney(){}
    
    private function calculateNotFixedMoney(){}
}

/**/