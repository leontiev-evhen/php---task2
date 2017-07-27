<?php

require_once 'config.php';
require_once 'libs/Calculator.php';
 

try
{
    $data = [];
    /*================== plus ========================*/

    $calculator = new Calculator();
    $calculator->setFirstNumber(33);
    $calculator->setSecondNumber(22);

    $data['plus']['num1'] = $calculator->getFirstNumber();
    $data['plus']['num2'] = $calculator->getSecondNumber();

    $data['plus']['result'] = $calculator->plus();

    /*================== minus ========================*/

    $calculator->setFirstNumber(33);
    $calculator->setSecondNumber(22);

    $data['minus']['num1'] = $calculator->getFirstNumber();
    $data['minus']['num2'] = $calculator->getSecondNumber();

    $data['minus']['result'] = $calculator->minus();

    /*================== multiply ========================*/

    $calculator->setFirstNumber(33);
    $calculator->setSecondNumber(22);

    $data['multiply']['num1'] = $calculator->getFirstNumber();
    $data['multiply']['num2'] = $calculator->getSecondNumber();

    $data['multiply']['result'] = $calculator->multiply();

    /*================== division ========================*/

    $calculator->setFirstNumber(33);
    $calculator->setSecondNumber(22);

    $data['division']['num1'] = $calculator->getFirstNumber();
    $data['division']['num2'] = $calculator->getSecondNumber();

    $data['division']['result'] = $calculator->division();

    /*================== sqrt ========================*/

    $data['sqrt']['num'] = 25;
    $data['sqrt']['result'] = $calculator->mySqrt($data['sqrt']['num']);


    /*================== percent ========================*/

    $calculator->setFirstNumber(33);
    $calculator->setSecondNumber(22);

    $data['percent']['num1'] = $calculator->getFirstNumber();
    $data['percent']['num2'] = $calculator->getSecondNumber();

    $data['percent']['result'] = $calculator->percent();

    /*================== memory ========================*/
    //for example 33 * 22 - 15 * 17 =

    $calculator->setFirstNumber(33);
    $calculator->setSecondNumber(22);

    $data['memory']['num1'] = $calculator->getFirstNumber();
    $data['memory']['num2'] = $calculator->getSecondNumber();

    $result = $calculator->multiply();

    $calculator->MS($result);

    $calculator->setFirstNumber(17);
    $calculator->setSecondNumber(15);

    $data['memory']['num3'] = $calculator->getFirstNumber();
    $data['memory']['num4'] = $calculator->getSecondNumber();

    $result = $calculator->multiply();
    $calculator->MMinus($result);
    $data['memory']['result'] = $calculator->MR();

}
catch (Exception $e)
{
    $error = $e->getMessage();
}

require_once 'templates/index.php';
?>
