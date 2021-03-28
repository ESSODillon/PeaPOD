<?php
/**
 * Author: Matt Jewell
 * Date: 3/27/2021
 * File: verify.class.php
 * Description:
 */

include "../../application/database.class.php";

class User
{

    public $Database;

    public function __construct()
    {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }
   //I'm lost and out of time... :(
}