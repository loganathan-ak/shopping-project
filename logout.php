<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
        <link rel="icon" href="src/logo.png" />
        <title>Electronics Shopping Project</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            
            </div>
            <?php
                require 'footertwo.php';
            ?>
        </div>
    </body>
</html>
