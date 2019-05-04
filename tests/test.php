<?php

require_once __DIR__."/../vendor/autoload.php";

use BoletoTotal\Itau\BoletoItau;


$boleto = new BoletoItau(5,2.95,2950.00);

$boleto->render();
