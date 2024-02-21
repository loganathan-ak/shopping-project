<?php
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["userName"];
    $productname = $_POST['productName'];

    $checkquery = "SELECT * FROM users_cart WHERE user_name = '$username' AND product_name = '$productname'";
    $checkresult = mysqli_query($conn, $checkquery);
    $checkrow = mysqli_fetch_assoc($checkresult);
    if ($checkrow > 0) {
        $deleteQuery = "DELETE FROM users_cart WHERE user_name = '$username' AND product_name = '$productname'";
        
        if (mysqli_query($conn, $deleteQuery)) {
            echo "Row deleted successfully.";
        } else {
            echo "Error deleting row: " . mysqli_error($conn);
        }
    } else {
        echo "Row not found.";
    }
}
?>
