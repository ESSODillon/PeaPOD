<?php

/*
 * Author: Dillon Polley
 * Date: 3/27/21
 * Name: index.class.php
 * Description: The view file for the application homepage
 */

class Index
{
    public function display()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PeaPOD | Register</title>
            <link rel="stylesheet" href="../../www/css/styles.css" />
        </head>

        <body>
            <!-- The form sends information entered by the user to index.php with a querystring variable called "action"-->
            <form action="index.php?action" method="post">

                <!-- Input elements for username, password, email, first & last name. Each with specified types and required for submission. Also a submit button to send the form to index.php -->
                <input placeholder="Username" type="text" required>

                <input placeholder="Password, 5 characters minimum" minlength="5" type="password" required>

                <input placeholder="Email" type="email" required>

                <input placeholder="First name" type="text" required>

                <input placeholder="Last name" type="text" required>

                <input class="button" type="submit" value="REGISTER">
            </form>

        </body>

        </html>
<?php
    }
}

?>