<?php


session_start();
//header('location:login.php');

$con = mysqli_connect('localhost', 'root', 'realadministrator@0125');

mysqli_select_db($con, 'zealusers');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$safe = "select * from usertable where name = '$username'";

$result = mysqli_query($con, $safe);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username Already Taken";
} else {
    $reg = " insert into table usertable(name , email , password) values('$username', '$email'  , '$password')";
    mysqli_query($con, $reg);
    echo"Registration Successful";
}
?>