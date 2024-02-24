<?php
session_start();
require 'updatechanges.php';
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
                <h1>Change Password</h1>
                <?php  if (count($errors) > 0) { ?>
                                    <div class="error">
                                    <?php foreach ($errors as $error) { ?>
                                    <p><?php echo $error ?></p>
                                    <?php } ?>
                                    </div>
                                    <?php  }else{
                                       if (isset($_SESSION['success'])) {
                                        echo '<div style="color: green;">' . $_SESSION['success'] . '</div>';
                                    }
                                    }?>
                        <form method="post" action="">
                        <input type="text" class="form-input" name="username" value='<?php echo $_SESSION['user_name']; ?>' >
                            <br>
                                <input type="password" class="form-input" name="oldPassword" placeholder="Old Password">
                            <br>
                                <input type="password" class="form-input" name="newPassword" placeholder="New Password">
                                <br>
                                <input type="password" class="form-input" name="retype" placeholder="Re-type new password">
                                <br>
                                <input type="submit" class="change-btn" name="submit"  value="Change">
                            
                        </form>
                </div>
           </div>
           <?php
                require 'footertwo.php';
            ?>
        </div>
    </body>
</html>
