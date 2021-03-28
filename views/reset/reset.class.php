<?php

/*
 * Author: Dillon Polley
 * Date: 3/27/21
 * Name: register.class.php
 * Description: A confirmation message after the user has attempted to create an account
 */
class Reset extends View
{
    public function display()
    {

        //call the header method defined in the parent class to add the header
        parent::header();
?>
        <!-- page specific content starts -->
        <!-- top row for the page header  -->
        <div class="top-row">Reset your Password</div>

        <!-- middle row -->
        <div class="middle-row">
            <h3>Password Reset</h3>
            <p>Fill in the form below to reset your password</p>
            <form action="index.php?action" method="post">
                <!-- Input elements for username, password, email, first & last name. Each with specified types and required for submission. Also a submit button to send the form to index.php -->
                <input placeholder="Username" type="text" readonly required>

                <input placeholder="New Password, 5 characters minimum" minlength="5" type="password" required>

                <input class="button" type="submit" value="CHANGE PASSWORD">
            </form>
        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
        </div>
        <!-- page specific content ends -->


<?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}
