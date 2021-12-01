<?php

include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$search = mysqli_query($connection,"select * from login where username='$username' and password='$password'");
$row = mysqli_num_rows($search);

if($row > 0){
    $SESSION['username'] = "$username";

    header("location:index.php");
}else{
    header("location:login.php?message=failed");
}

?>
