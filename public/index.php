<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once __DIR__  . '/../vendor/autoload.php';

use App\{
    IMC,Template
};


$template = new Template();
$result = '';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $weight = floatval(filter_input(INPUT_POST, 'peso'));
    $height = floatval(filter_input(INPUT_POST, 'altura'));


    $IMC = new IMC($weight, $height);

    $result = $IMC->checkResult();
    $imcValue = $IMC->getIMC();

    $result =  "valor do imc é : {$IMC->getIMC()} e você está {$IMC->checkResult()}";


}

return $template->render('formulario', compact('result'));





