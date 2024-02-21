<?php

require 'connect.php';

$errors = array();

if (isset($_POST['submit'])) {

  $username = $_POST['name'];
  $email =$_POST['email'];
  $contact = $_POST['contact'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $password_1 = $_POST['password'];
  $password_2 = $_POST['confirmpassword'];

  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE user_name='$username' OR user_mail='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { 
    if ($user['user_name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['user_mail'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO users (user_name, user_mail, user_contact, user_address, user_city, user_password) 
                          VALUES('$username', '$email', '$contact', '$address', '$city', '$password_1')";
    mysqli_query($conn, $query);
    $_SESSION['user_name'] = $username;
    $_SESSION['success'] = "You are now registered and logged in";
    header('location: products.php');
  }
}
?>
