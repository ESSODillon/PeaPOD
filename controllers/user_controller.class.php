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
    private $user_model;

    public function __construct()
    {
        $this->user_model = new UserModel();
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
        $message = $this->user_model->add_user();
        $view = new Register();
        $view->display($message);
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
        $message = $this->user_model->verify_user();
        $view = new Verify();
        $view->display($message);
    }

    //display the logout page
    public function logout()
    {
        $message = $this->user_model->logout();
        $view = new Logout();
        $view->display($message);
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
        $message = $this->user_model->reset_password();
        $view = new confirmReset();
        $view->display($message);
    }

    //display error
    public function error($message)
    {
        //create an object of the Error class
        $view = new UserError();

        //display the error page
        $view->display($message);
    }
}
