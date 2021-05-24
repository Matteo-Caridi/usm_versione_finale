<pre></pre>
<?php

use sarassoroberto\usm\service\UserSession;

require "../../__autoload.php";
require "../../vendor/testTools/testTool.php";


// use sarassoroberto\usm\service\UserSession;


$us = new UserSession();

// print_r(scandir('.'));

$user = $us ->autenticate('adam.ros@email.com', '0fe4f43e1dd173abc07ce508a74800e2');

print_r($_SESSION);
// assertEquals($_SESSION['user_autenticated'],$user);