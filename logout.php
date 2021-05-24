<?php

use sarassoroberto\usm\service\UserSession;

require "./__autoload.php";

$session = new UserSession();
$session->logOut();
header('location: login_user.php');