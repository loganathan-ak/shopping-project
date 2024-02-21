<?php
require 'connect.php';
$errors = array();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $oldpass = $_POST['oldPassword'];
    $newpassword_1 = $_POST['newPassword'];
    $newpassword_2 = $_POST['retype'];
    

    if ($newpassword_1 != $newpassword_2) {
        array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM users WHERE user_name='$username'";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        if ($oldpass == $user['user_password']) {
            $update_query = "UPDATE users SET user_password='$newpassword_1' WHERE user_name='$username'";
            mysqli_query($conn, $update_query);
            $_SESSION['success'] = 'Password changed successfully';
        } else {
            array_push($errors, "Incorrect old password");
        }
    } else {
        array_push($errors, "User not found");
    }
}
?>
