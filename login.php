<?php
session_start();
require 'loginscript.php';
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
           <div class="login-div">
                <div class="login-column">
                                <h3>LOGIN</h3>
                            <div class="login-fields">
                                <p>Login to make a purchase.</p>
                                <?php  if (count($errors) > 0) { ?>
                                    <div class="error">
                                    <?php foreach ($errors as $error) { ?>
                                    <p><?php echo $error ?></p>
                                    <?php } ?>
                                    </div>
                                    <?php  }?>
                                <form method="post" action="">
                                        <input type="text" class="form-input" name="username" placeholder="User name" >
                                        <input type="password" class="form-input" name="password" placeholder="Password">
                                        <input type="submit" value="Login" name='submit' class="login-btn">
                                </form>
                            </div>
                     <p class="redirect-registerpage">Don't have an account yet? <a href="register.php">Register</a></p>
                </div>
           </div>
           <?php
                require 'footertwo.php';
            ?>
        </div>
    </body>
</html>
