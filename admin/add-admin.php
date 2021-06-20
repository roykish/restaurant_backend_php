<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'restaurant_php');


  if(isset($_POST['add-admin'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $query = "INSERT INTO add_admin_info('fullname','username','email') VALUES ('$fullname', '$username', '$email')";
    $query_run = mysqli_query($connection, $query);
    

  }

?>