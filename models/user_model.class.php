<?php
/**
 * Author: Devan Tackett
 * Date: 3/27/2021
 * File: user_model.class.php
 * Description: the model class for users, verifies login info, registers new users, resets passwords, and logs users out
 */
//include database.php


class UserModel{

    private $db; //database object
    private $dbConnection; //database connection object

    //constructor that connects to the database
    public function __construct() {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }
    //add user method
    public function add_user(){
        //retrieves user details then adds them to the database. returns true if successful and false if not.
        if (isset($_GET['id'])) { //requests id from the registration form
            if (isset($_GET['username'])) { //requests username from the registration form
                if (isset($_GET['password'])) { //requests password from the registration form
                    if (isset($_GET['email'])) { //requests email from the registration form
                        if (isset($_GET['firstname'])) { //requests first name from the registration form
                            if (isset($_GET['lastname'])) { //requests last name from the registration form
                                $id = trim($_GET['id']);
                                $username = trim($_GET['username']);
                                $password = trim($_GET['password']);
                                $email = trim($_GET['email']);
                                $firstname = trim($_GET['firstname']);
                                $lastname = trim($_GET['lastname']);

                                //inserts new user row into user table
                                $sql = "INSERT INTO users VALUES('$id','$username','$password','$email','$firstname','$lastname')";
                                //execute the query
                                $query = $this->dbConnection->query($sql);

                                //if the query doesn't return false, then create the temp cookie and return true, else return false
                                if ($query != false){
                                    return true;
                                }

                            }
                        }
                    }
                }
            }
        }
        return false;
    }

    public function verify_user(){
        //retrieves a user's username and password, then verifies them against the database
        if (isset($_GET['username'])) { //requests username from the login form
            if (isset($_GET['password'])) { //requests password from the login form
                $username = trim($_GET['username']);
                $password = trim($_GET['password']);

                //validate username against a record in the users table in the database.
                $sql = "SELECT * FROM users WHERE username='$username'";

                //execute the query
                $query = $this->dbConnection->query($sql);
                $pass = false;
                //loop through all rows
                while ($query_row = $query->fetch_assoc()) {
                    //if ($query_row["username"] == $username) {
                        $pass == password_verify($password, $query_row["password"]);
                    //}
                }
                //if the query doesn't return false, then create the temp cookie and return true, else return false
                if ($query != false and $pass != false){
                    //create temp cookie
                    setcookie("username",$username);
                    return true;
                }
            }
        }
        return false;
    }

    public function logout(){
        //destroy the temp cookie made when the user logs in, and returns true
        //delete the session cookie
        setcookie("username", "",  time()-60);
        return true;
    }

    public function reset_password(){
        //retrieves a users username and password, then updates the password with the new one, returns true if successful, false if not
        if (isset($_GET['username'])) { //requests username from the password reset form
            if (isset($_GET['password'])) { //requests password from the password reset form
                $username = trim($_GET['username']);
                $password = trim($_GET['password']);

                //selects the username's stuff
                $sql = "SELECT * FROM users WHERE username='$username'";

                //execute the query
                $query = $this->dbConnection->query($sql);

                //loop through all rows and then set the password when you find the username
                while ($query_row = $query->fetch_assoc()) {
                    //if ($query_row["username"] == $username) { don't need this
                        $query_row["password"] = password_hash ($password , PASSWORD_DEFAULT);
                    //}
                }

            }
        }
    }
}
