<?php

/*
 * Author: Dillon Polley
 * Date: 3/27/21
 * Name: register.class.php
 * Description: A confirmation message after the user has attempted to create an account
 */
class confirmReset extends View
{
    public function display($message)
    {

        //call the header method defined in the parent class to add the header
        parent::header();
?>
        <!-- page specific content starts -->
        <!-- top row for the page header  -->
        <div class="top-row">Confirm Reset</div>

        <!-- middle row -->
        <div class="middle-row">
            <h3>Confirm Reset</h3>
            <p><?= $message ?></p>
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
