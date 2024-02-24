<?php
    session_start();
    
?>
<!DOCTYPE html>
<html>
<head>
        <link rel="icon" href="src/logo.png" />
        <title>Electronics Shopping Project</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    </head>
    <body>
        <div>
        <?php
            require 'header.php';
           ?>
            <div class="product-topsection">
                <div class="topsection-caption">
                <h1>Welcome to our Electronics Shopping Project!</h1>
                    <p>We have the best cameras, mobiles and laptops for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container-productpage">
            <h3>Mobiles</h3>
                <div class="row">
                
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="src/iphone-13-pro.jpg" class='product-imgs' alt="Cannon">
                            </a>
                            
                                <div class="caption">
                                    <h3>Iphone 13pro</h3>
                                    <p>Price: Rs. 36000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(1)" name="add" >Add to cart</button>
                                    
                                </div>
                    </div>
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="src/1plus_z_fold_5.jpg"  class='product-imgs' alt="Sony DSLR">
                            </a>
                            
                                <div class="caption">
                                    <h3>One plus fold 5</h3>
                                    <p>Price: Rs. 40000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(2)" name="add" value="add" >Add to cart</button>
                                </div>
                    </div>
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="src/samsung-galaxy-a51.jpg"  class='product-imgs' alt="Sony DSLR">
                            </a>
                            
                                <div class="caption">
                                    <h3>Xiaomi A51</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(3)" name="add" value="add" >Add to cart</button>
                                </div>
                    </div>
                   
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="src/galaxys22ultra.jpg"  class='product-imgs' alt="Olympus">
                            </a>
                            
                                <div class="caption">
                                    <h3>Samsung galaxy Ultra 22</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(4)" name="add" value="add" >Add to cart</button>
                                </div>
                            
                    </div>
                </div>
                <h3>Cameras</h3>
                <div class="row">
              
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="src/13130.jpg" class='product-imgs' alt="Cannon">
                            </a>
                          
                                <div class="caption">
                                <h3>Cannon DSLR</h3>
                                    <p>Price: Rs. 36000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(9)" name="add" value="add" >Add to cart</button>
                                </div>
                      
                    </div>
                
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="src/generative-ai.jpg"  class='product-imgs' alt="Sony DSLR">
                            </a>
                            
                                <div class="caption">
                                <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 40000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(10)" name="add" value="add" >Add to cart</button>
                                </div>
                     
                    </div>
                 
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="src/MP_silver_1.jpg"  class='product-imgs' alt="Olympus">
                            </a>
                       
                                <div class="caption">
                                <h3>Nikon Handcam</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(11)" name="add" value="add" >Add to cart</button>
                                </div>
                         
                       
                    </div>
                    
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="src/photo-camera-balancing.jpg"  class='product-imgs' alt="Sony DSLR">
                            </a>
                           
                                <div class="caption">
                                <h3>Nikon DSLR</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <p><a href="login.php" role="button" class="btn ">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(12)" name="add" value="add" >Add to cart</button>
                                </div>
                         
                        
                    </div>
                </div>
                <h3>Laptops</h3>
                <div class="row">
                 
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="src/mac.jpg" class='product-imgs' alt="Cannon">
                            </a>
                         
                                <div class="caption">
                                    <h3>i macbook</h3>
                                    <p>Price: Rs. 150000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(17)" name="add" value="add" >Add to cart</button>
                                </div>
                        
                        
                    </div>
                    
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="src/dell.jpg" class='product-imgs' alt="Cannon">
                            </a>
                        
                                <div class="caption">
                                    <h3>Dell</h3>
                                    <p>Price: Rs. 100000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(18)" name="add" value="add" >Add to cart</button>
                                </div>
                           
                        
                    </div>
                    
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="src/hp.jpg" class='product-imgs' alt="Cannon">
                            </a>
                          
                                <div class="caption">
                                    <h3>HP</h3>
                                    <p>Price: Rs. 75000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                    <button class="add-to-cart-btn" onclick="addToCart(19)" name="add" value="add" >Add to cart</button>
                                </div>
                        
                        
                    </div>
                    
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="src/lenovo.jpg" class='product-imgs' alt="Cannon">
                            </a>
                         
                                <div class="caption">
                                    <h3>Lenovo</h3>
                                    <p>Price: Rs. 60000.00</p>
                                    <p><a href="login.php" role="button" class="buy-now-btn">Buy Now</a></p>
                                                <button class="add-to-cart-btn" onclick="addToCart(20)" name="add" value="add" >Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require 'footer.php';
           ?>
         <script>
    jQuery(document).ready(function(){
        var userName = '<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; ?>';

        if (!userName) {
            jQuery('.add-to-cart-btn').each(function() {
                jQuery(this).hide();
            });
        } else {
            jQuery('.buy-now-btn').each(function() {
                jQuery(this).hide();
            });
        }

    });

    function addToCart(productId) {
            var userName = '<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; ?>';
            var data = {
                userName: userName, 
                productId: productId
            };

            console.log(userName);
            
            $.ajax({
                type: 'POST',
                url: 'addcart.php',
                data: data,
                success: function(response) {
                    alert(response);
                    window.location.href = 'cart.php';
                },
                error: function(error) {
                    console.error('Error:', error);
                    
                }
            });
        }
 
</script>

        </div>
    </body>
</html>
