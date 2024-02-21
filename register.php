<?php
session_start();
                require 'registerscript.php';
            ?>
<!DOCTYPE html>
<html>
<head>
        <link rel="icon" href="src/logo.png" />
        <title>Electronics Shopping Project</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                   <h1><b>SIGN UP</b></h1>
                   <?php  if (count($errors) > 0) { ?>
                        <div class="error">
                        <?php foreach ($errors as $error) { ?>
                        <p><?php echo $error ?></p>
                        <?php } ?>
                        </div>
             <?php  }?>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="text" class="form-input" name="name" placeholder="Name" required="true">
                            <br>
                                <input type="email" class="form-input" name="email" placeholder="Email" required="true" >
                                <br>
                                <input type="tel" class="form-input" name="contact" placeholder="Contact" required="true">
                                <br>
                                <input type="text" class="form-input" name="city" placeholder="City" required="true">
                                <br>
                                <input type="text" class="form-input" name="address" placeholder="Address" required="true">
                                <br>
                                <input type="password" class="form-input" name="password" placeholder="Password(min. 6 characters)" required="true" >
                                <br>
                                <input type="password" class="form-input" name="confirmpassword" placeholder="Confirm password" required="true" >
                                <br>
                                <input type="submit" class="register-btn" name='submit' value="Sign Up">
                            
                        </form>
                </div>
           </div>
           <?php
                require 'footertwo.php';
            ?>
        </div>
    </body>
</html>
