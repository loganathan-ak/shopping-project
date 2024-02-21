<?php
require 'connect.php';
$errors = array();

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE user_name='$username'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            if ($password == $user['user_password']) {
                $_SESSION['user_name'] = $username;
                header('location: products.php');
            } else {
                array_push($errors, "Wrong username/password combination");
            }
        } else {
            array_push($errors, "User not found");
        }
    }
}
?>
