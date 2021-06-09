<?php

/*
 * Author: Dillon Polley
 * Date: today's date
 * Name: index.php
 * Description: short description about this file
 */

//include code in vendor/autoload.php file
require_once("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();

//add your code below this line to complete this file

$action = "index";

if (isset($_GET['action']) && !(empty($_GET["action"])))
    $action = $_GET['action'];

//invoke proper method defined
if ($action === 'index') {

    $user_controller->displayIndex();
} else if ($action === 'register') {
    $message = "Your account has been successfully created";
    $user_controller->RegisterUser($message);
} else if ($action === 'login') {
    $user_controller->Login();
} else if ($action === 'verify') {
    $user_controller->verifyUser();
} else if ($action === 'logout') {
    $user_controller->Logout();
} else if ($action === 'reset') {
    $user_controller->Reset();
} else if ($action === 'do_reset') {
    $message = "Password successfully reset";
    $user_controller->doReset($message);
} else if ($action === 'error') {
    $message = "An error has occurred.";
    if ((isset($_GET['message'])) && !(empty($_GET['message'])))
        $message = $_GET['message'];

    $user_controller->error($message);
} else {
    $message = "Invalid action was requested.";
    $user_controller->error($message);
}
