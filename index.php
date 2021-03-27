<?php

/*
 * Author: your name
 * Date: today's date
 * Name: index.php
 * Description: short description about this file
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();

//add your code below this line to complete this file

$action = "register";
if (isset($_GET['action'])&& !(empty($_GET["action"])))
    $action = $_GET['action'];

//invoke proper method defined
if ($action === 'index'){

    $user_controller->displayIndex();

} else if ($action === 'register'){
    $user_controller->RegisterUser();

} else if ($action === 'login'){
    $user_controller->Login();

} else if ($action === 'verify'){
    $user_controller->verifyUser();

} else if ($action === 'logout'){
    $user_controller->Logout();

}else if ($action === 'reset'){
    $user_controller->Reset();

}else if ($action === 'do_reset'){
    $user_controller->doReset();

} else if ($action === 'error'){
    $message = "An error has occurred.";
    if((isset($_GET['message'])) && !(empty($_GET['message'])))
        $message = $_GET['message'];

    $user_controller->error($message);
} else {
    $message = "Invalid action was requested.";
    $user_controller->error($message);
}