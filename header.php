
            <nav class="navbar-top">
                <div class="container-nav"> 
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand">Electronics Shopping Project</a>
                    </div>
                    
                    <div class="navbar-right" id="myNavbar">
                        <div class="right-side">
                           <div class="login-menu">
                           <?php
                           if(isset($_SESSION['user_name'])){
                           ?>
                             <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                             <li><a href="changepassword.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                             <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           </div>
                           <?php
                           }else{
                            ?>
                            <div class="notlogin-menu">
                             <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  
                            </div>
                            <?php
                           }
                           ?>
                        </div>
                    </div>
                </div>
 </nav>
