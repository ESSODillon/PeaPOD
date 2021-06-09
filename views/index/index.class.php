<?php

/*
 * Author: Dillon Polley
 * Date: 3/27/21
 * Name: index.class.php
 * Description: The view file for the application homepage
 */

class Index extends View
{
    public function display()
    {
        parent::header();
?>
        <div class="top-row">Register</div>
        <!-- The form sends information entered by the user to index.php with a querystring variable called "action"-->
        <div class="middle-row">
            <h3>Create an Account</h3>
            <p>Please complete the entire form. All fields are required.</p>

            <form action="index.php?action=register" method="post">
                <!-- Input elements for username, password, email, first & last name. Each with specified types and required for submission. Also a submit button to send the form to index.php -->
                <input placeholder="Username" type="text" required>

                <input placeholder="Password, 5 characters minimum" minlength="5" type="password" required>

                <input placeholder="Email" type="email" required>

                <input placeholder="First name" type="text" required>

                <input placeholder="Last name" type="text" required>

                <input class="button" type="submit" value="REGISTER">
            </form>
        </div>

        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            <!-- <span style="float: right">Don't have an account? <a href="index.php">Register</a></span> -->
        </div>
<?php
        parent::footer();
    }
}

?>