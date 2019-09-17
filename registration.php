<?php


session_start();

$conn = mysql_connect('localhost', 'root', "zealusers");
//Select the database
mysqli_select_db($con, 'zealusers');
//Variables to store the input from the form
$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];

$safe = " select * from usertable where username = '$username'";

$result = mysqli_query($con, $safe);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username Already Taken";
} else {
    $reg = " insert into table usertable(username , password) values('$username' , '$password')";
    mysqli_query($conn, $reg);
    echo"Registration Successful";
}
?>