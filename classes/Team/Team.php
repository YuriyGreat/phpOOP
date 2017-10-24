<?php
declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Team
 *
 * @author yuriy
 */
include_once('classes/Employees/Worker.php');
include_once('classes/Employees/Developer.php');
include_once('classes/Employees/HTMLdeveloper.php');
include_once('classes/Employees/Designer.php');

class Team 
{
    private $teamName;
    private $workers;

    function __construct(string $teamName)
    {
        $this->teamName=$teamName;
    }
    public function addWorker(Worker $worker):void
    {
        $this->workers[]=$worker;
    }
    public function calculateAllPayments():int{
        $payment=0;
        foreach($this->workers as $item){
            $payment+=$item->GetMoney();
        }
        return $payment;
    }
    public function printInfo(Worker $worker):void {
        if ($worker->getFixed()){
            echo $worker->GetName().', '.$worker->GetMoney().' per month<br>';
        }else{
            echo $worker->GetName().', '.$worker->GetMoney().' at all<br>';
        }
    }
    public function viewTeam():void
    {
        echo 'team '.$this->teamName.'<br>';
        foreach ($this->workers as $item) {
            $this->printInfo($item);
        }
        echo 'all payments: '.$this->calculateAllPayments().'<br>';
    }

    
}
