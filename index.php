<?php

require_once 'config.php';
require_once 'libs/Calculator.php';


try
{
    $calculator = new Calculator();
    $calculator->setFirstNumber(33);
    $calculator->setSecondNumber(22);

    $num1 = $calculator->getFirstNumber();
    $num2 = $calculator->getSecondNumber();
    $result = $calculator->multiply();

    $calculator->MS($result);
    
    $calculator->setFirstNumber(17);
    $calculator->setSecondNumber(15);
    $result = $calculator->multiply();

    $calculator->MMinus($result);
    $result = $calculator->MR();

}
catch (Exception $e)
{
    $e->getMessage();
}

require_once 'templates/index.php';
?>
