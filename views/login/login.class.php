<?php

/*
 * Author: Dillon Polley
 * Date: 3/27/21
 * Name: verify.class.php
 * Description: A confirmation message after the user has attempted to create an account
 */
class Login extends View
{
    public function display()
    {

        //call the header method defined in the parent class to add the header
        parent::header();
?>
        <!-- page specific content starts -->
        <!-- top row for the page header  -->
        <div class="top-row">Login</div>

        <!-- middle row -->
        <div class="middle-row">
            <h3>Login</h3>
            <p>Please Login below</p>

            <!--Get user login info and post it to the model-->
            <form action="index.php?action=verify" method="post">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input class="button" type="submit" name="submit" placeholder="Login" value="LOGIN">
            </form>

        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Don't have an account? <a href="index.php">Register</a></span>
        </div>
        <!-- page specific content ends -->

<?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}
