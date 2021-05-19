<?php

use sarassoroberto\usm\entity\User;
use sarassoroberto\usm\model\UserModel;
use sarassoroberto\usm\validator\bootstrap\ValidationFormHelper;
use sarassoroberto\usm\validator\LoginValidation;
use sarassoroberto\usm\validator\ValidationResult;

session_start();

require "./__autoload.php";
$action = "./login_user.php";
$title = "Login";
/** $action rappresentà l'indirizzo a cui verranno inviati i dati del form */



if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $Message = "";

    list($email, $emailClass, $emailClassMessage, $emailMessage) = ValidationFormHelper::getDefault();
    list($password, $passwordClass, $passwordClassMessage, $passwordMessage) = ValidationFormHelper::getDefault();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $userModel = new UserModel();
    $isValid = $userModel->checkUser($email, md5($password));

    if ($isValid) {
        $_SESSION['isLoged'] = true;
        $_SESSION['username'] = $email;
        header('location: ./list_users.php');
    } else {
        $Message = 'Password e/o mail errata.';
    }
    $val = new LoginValidation($password, $email);

    $emailValidation = $val->getError('email');
    $passwordValidation = $val->getError('password');

    list($email, $emailClass, $emailClassMessage, $emailMessage) = ValidationFormHelper::getValidationClass($emailValidation);
    list($password, $passwordClass, $passwordClassMessage, $passwordMessage) = ValidationFormHelper::getValidationClass($passwordValidation);
}

include './src/view/login_user_view.php';
