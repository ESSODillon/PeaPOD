<?php

/*
 * Author: Dillon Polley
 * Date: 3/27/21
 * Name: register.class.php
 * Description: A confirmation message after the user has attempted to create an account
 */
class Register extends View
{
    public function display($message)
    {

        //call the header method defined in the parent class to add the header
        parent::header();
?>
        <!-- page specific content starts -->
        <!-- top row for the page header  -->
        <div class="top-row">Register</div>

        <?php

        if ($message == true) {
        ?>


            <!-- middle row -->
            <div class="middle-row">
                <h3>Create an Account</h3>
                <p>Successful account creation</p>
            </div>

            <!-- bottom row for links  -->
            <div class="bottom-row">
                <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            </div>
        <?php
        } else {
        ?>

            <!-- middle row -->
            <div class="middle-row">
                <h3>Create an Account</h3>
                <p>Account creation failed. Please try again.</p>
            </div>

            <!-- bottom row for links  -->
            <div class="bottom-row">
                <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            </div>

            <!-- page specific content ends -->

<?php
        }
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}
