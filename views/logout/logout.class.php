<?php
/**
 * Author: Matt Jewell
 * Date: 3/27/2021
 * File: logout.class.php
 * Description:
 */

session_start();
include_once 'include/class.user.php';
$user = new User(); $uid = $_SESSION['uid'];
if (!$user->get_session()){
    header("location:login.php");
}

//better than nothing?