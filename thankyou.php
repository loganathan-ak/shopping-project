
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
            <br>
            <div class="thankyou-div">
                <div class="thankyou-content">          
                 <p>Your order is confirmed. Thank you for shopping with us.<br> <a href="products.php">Click here</a> to purchase any other item.</p>
                 
                </div>
            </div>
            <?php
            require 'footertwo.php';
            ?>
        </div>
    </body>
</html>
