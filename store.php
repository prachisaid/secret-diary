<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'userregistration');
$slogan = $_POST['slogan'];
$s = $_SESSION['mail'];

    $reg = " update usertable set slogan = '$slogan' where usertable . email = '$s'";
    mysqli_query($con, $reg);
    header('location:diary.php');
?>