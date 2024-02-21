<?php
session_start();
require 'connect.php';

$userName = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';


$query = "SELECT * FROM users_cart WHERE user_name = '$userName'";
$result = mysqli_query($conn, $query);

$totalPrice = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="src/logo.png" />
    <title>Electronics Shopping Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <div>
        <?php 
        require 'header.php';
        ?>
        <br>
        <div class="table-div">
            <table class="table">
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php
               foreach ($result as $row ) {
                    echo "<tr>";
                    echo "<td>{$row['cart_id']}</td>";
                    echo "<td>{$row['product_name']}</td>";
                    echo "<td>Rs {$row['product_price']}</td>";
                    echo "<td>
                            <a href='#' class='remove-btn' onclick='removeFromCart(\"{$row['product_name']}\")'>
                                <i class='material-icons'>highlight_off</i> Remove
                            </a>
                          </td>";
                    echo "</tr>";

                    $totalPrice += $row['product_price'];
                }
                ?>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td>Rs <?php echo $totalPrice; ?></td>
                    <td><a href="thankyou.php" class="order-btn">Confirm Order</a></td>
                </tr>
            </table>
        </div>
        <br>
        <?php
        require 'footertwo.php';
        ?>
<script>
    function removeFromCart(productName) {
       //console.log(productName);
        var userName = '<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; ?>';
            var data = {
                userName: userName, 
                productName: productName
            };

            console.log(userName);
            
            $.ajax({
                type: 'POST',
                url: 'removecart.php',
                data: data,
                success: function(response) {
                    alert(response);
                    location.reload(true)
                },
                error: function(error) {
                    console.error('Error:', error);
                    
                }
            });
    }
</script>

 
</script>
    </div>
</body>
</html>
