<?php

/**
 * Author: Kameron Someson
 * Date: 3/26/2021
 * File: user_controller.class.php
 * Description:
 */

class UserController
{
    //Variables
    private $index;
    private $register;
    private $login;
    private $verify;
    private $logout;
    private $reset;
    private $do_reset;
    private $error;

    public function __construct()
    {
        $this->index = new Index();
        $this->register = new Register();
        $this->login = new Login();
        $this->verify = new Verify();
        $this->logout = new Logout();
        $this->reset = new Reset();
        $this->do_reset = new confirmReset();
        $this->error = new UserError();
    }

    //display the index page
    public function displayIndex()
    {
        $view = new Index();
        $view->display();
    }

    //display the register page
    public function registerUser()
    {
        $view = new Register();
        $view->display();
    }

    //display the login page
    public function login()
    {
        $view = new Login();
        $view->display();
    }

    //display the verify page
    public function verifyUser()
    {
        $view = new Verify();
        $view->display();
    }

    //display the logout page
    public function logout()
    {
        $view = new Logout();
        $view->display();
    }

    //display the reset page
    public function reset()
    {
        $view = new Reset();
        $view->display();
    }

    //display the reset confirm page
    public function doReset()
    {
        $view = new confirmReset();
        $view->display();
    }

    //display error
    public function error($message)
    {
        //create an object of the Error class
        $error = new UserError();

        //display the error page
        $error->display($message);
    }
}
