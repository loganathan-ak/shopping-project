<?php
   session_start();
   require 'connect.php'

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
           <div id="bannerImage">
                   <div id="bannerContent">
                       <h1>Experience the Future of Electronics!</h1>
                       <p>Discover a world of cutting-edge technology and unbeatable <br>deals at our Electronics Shopping Project.</p>
                       <a href="products.php" class="btn">Shop Now</a>    
               </div>
           </div>
           <div class="product-container">
               <div class="row">
                   <div class="column">
                       
                           <a href="products.php">
                                <img src="src/iphone2.jpg" class="thumbnailimg" alt="Camera">
                           </a>
                          
                                <div class="caption">
                                        <p id="autoResize">Mobiles</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           
                      
                   </div>
                   <div class="column">
                       
                           <a href="products.php">
                               <img src="src/camera.png" class="thumbnailimg" alt="Watch">
                           </a>
                           
                                <div class="caption">
                                    <p id="autoResize"> Camera</p>
                                    <p>Original Camera's from the best brands.</p>
                                </div>
                          
                   </div>
                   <div class="column">
                           <a href="products.php">
                               <img src="src/laptop.jpg" class="thumbnailimg" alt="Shirt">
                           </a>
                           
                               <div class="caption">
                                   <p id="autoResize">Laptops</p>
                                   <p>Buy Laptops Online at Lowest Prices.</p>
                               </div>
                           
                   </div>
               </div>
           </div>
           <?php
            require 'footer.php';
           ?>
        </div>
       
    </body>
</html>
