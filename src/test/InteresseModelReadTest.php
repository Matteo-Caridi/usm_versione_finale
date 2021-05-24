<?php
use sarassoroberto\usm\model\InteresseModel;
include "./__autoload.php";

$interesse = new InteresseModel();
$int = $interesse->readAll();


print_r($int);