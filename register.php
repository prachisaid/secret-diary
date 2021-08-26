<?php

session_start();
header('location:login.php');


$con = mysqli_connect('localhost', 'root', '', 'userregistration');
$email = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertable where email = '$email'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Email already taken";
}else{
    $reg = " insert into usertable(email, password) values ('$email' , '$pass')";
    mysqli_query($con, $reg);
    echo" Registeration successful";
}

?>