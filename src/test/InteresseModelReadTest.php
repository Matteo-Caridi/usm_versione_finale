<?php

use sarassoroberto\usm\model\InteresseModel;
use sarassoroberto\usm\entity\Interesse;

include "./__autoload.php";

$interesse = new InteresseModel();
$int = $interesse->readAll();

print_r($int);
