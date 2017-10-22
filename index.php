<?php
declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author yuriy
 */
include_once('classes/Employees/Developer.php');
include_once('classes/Employees/HTMLdeveloper.php');
include_once('classes/Employees/Designer.php');
include_once('classes/Team/Team.php');
/*
$worker2=new Developer('asd',true,5000,1);

$worker= new Developer('Petr Petrov',true,300,1);


echo $worker->getPayment().'<br>';
echo $worker->getFixed().'<br>';
echo $worker->GetName().'<br>';/**/
$team=new Team('x');
$team->addWorker(new Designer('Petr',true,3000,1));
$team->addWorker(new Developer('Vasiliy',false,10,60));
$team->addWorker(new Developer('Alexey',true,1000,1));
$team->addWorker(new Developer('Maria',true,1000,1));
$team->addWorker(new HTMLdeveloper('Oleg',false,5,120));
$team->viewTeam();