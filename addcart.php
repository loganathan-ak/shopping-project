<?php
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["userName"];
    $productid = $_POST['productId'];

    $query = "SELECT * FROM products WHERE  id = '$productid'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $productName = $row['product_name'];
    $productPrice = $row['price'];

    $checkquery = "SELECT * FROM users_cart WHERE user_name = '$username' AND product_name = '$productName'";
    $chechresult = mysqli_query($conn, $checkquery);
    $checkrow = mysqli_fetch_assoc($chechresult);

    if ($checkrow  > 0) {
        echo "product already added.";
        
    } else {
        $insertQuery = "INSERT INTO users_cart (user_name, product_name, product_price) VALUES ('$username', '$productName', '$productPrice')";
        if (mysqli_query($conn, $insertQuery)) {
            echo "Product added to the cart successfully.";
        } else {
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
        }
    }
}
?>
