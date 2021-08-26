<?php

session_start();


$con = mysqli_connect('localhost', 'root', '', 'userregistration');
$email = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertable where email = '$email' && password = '$pass'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['mail'] = $email;
    header('location:diary.php');
}else{
    header('location:login.php');
}

?>