<?php


session_start();


$con = mysqli_connect('localhost', 'root', 'realadministrator@0125');

mysqli_select_db($con, 'zealusers');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$safe = "select * from usertable where username = '$username' && password = 'password'";

$result = mysqli_query($con, $safe);

$num = mysqli_num_rows($result);

if ($num == 1) {
    header('location:home.php');
} else {
    header('location:login.php');
}
?>