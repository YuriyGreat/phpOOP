<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 22.10.17
 * Time: 15.02
 */


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('Worker.php');
/**
 * Description of Developer
 *
 * @author yuriy

 */

include_once('classes/Employees/Worker.php');
include_once('classes/Employees/Developer.php');
include_once('classes/Employees/HTMLdeveloper.php');

class Designer extends Worker
{
    public function getPayment():int {
        return $this->payment;
    }
    public function setPayment(int $setting_payment):void {
        $this->payment=$setting_payment;
    }

    public function setRang(string $settingRang):void {
        $this->rang=$settingRang;
    }
    public function getRang():string {
        return $this->rang;
    }
    public function setFixed(bool $setFixed):void {
        $this->isFixed=$setFixed;
    }
    public function getFixed():bool {
        return $this->isFixed;
    }
    public function setName($name):void {
        $this->name=$name;
    }
    public function GetName():string {
        return $this->name;
    }
    public function getPeriod():int{
        return $this->workPeriod;
    }
    public function getMoney():int {
        if ($this->isFixed){
            return $this->calculateFixedMiney();
        }else{
            return $this->calculateNotFixedMoney();
        }
    }

    private function calculateFixedMiney():int{
        return $this->getPayment();
    }

    private function calculateNotFixedMoney():int{
        return $this->getPayment()*$this->getPeriod();
    }
}


