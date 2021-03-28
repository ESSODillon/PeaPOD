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
        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
        </div>
        <!-- page specific content ends -->


<?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}
