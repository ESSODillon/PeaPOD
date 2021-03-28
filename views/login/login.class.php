<?php
/**
 * Author: Matt Jewell
 * Date: 3/27/2021
 * File: login.class.php
 * Description:
 */

session_start();
    //include code from database.php
    require_once "verify.class.php";
    $user= new User();

    if(isset($_REQUEST['submit'])) {
        extract($_REQUEST);
        $login= $user->check_login($username, $password);
        if($login) {
            header("location:index.php");
        } else  {
            echo 'Wrong Username or Password';
        }
    }





?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PeaPOD User Management System</title>
    <link href="../../www/css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<h1><span style="color: forestgreen; font-family: serif; font-size: 36pt">PeaPOD</span> User Management System</h1>
<div id="wrapper">
    <img src="../../www/img/peapod_logo.png" style="float: right; width: 130px">
    <div class="top-row">CREATE AN ACCOUNT</div>
    <div class="middle-row">
        <p>Please complete the entire form. All fields are required.</p>
        <form method="post" action="index.php?action=register">
            <div><input type="text" name="username" style="width: 99%" required placeholder="Username"></div>
            <div><input type="password" name="password" style="width: 99%" required minlength="5" placeholder="Password, 5 characters minimum"></div>
            <div><input type="email" name="email" style="width: 99%" required="" placeholder="Email"></div>
            <div><input type = 'text' name="fname" style="width: 99%" required placeholder="First name"></div>
            <div><input type="text" name="lname" style="width: 99%" required placeholder="Last name"></div>
            <div><input type="submit" class="button" value="register"></div>
        </form>
    </div>
    <div class="bottom-row">
        <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
        <span style="float: right"></span>
    </div>
</div>
</body>
</html>

