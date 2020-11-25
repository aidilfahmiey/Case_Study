<?php
session_start();

$con =mysqli_connect('localhost', 'root', 'aurna1630558', 'userregistration');
mysqli_select_db($con, 'userregistration');
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$s = "select * from regtable where user = '$user' && password= '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
   header('location:welcome.php');
}
else {
    header('location:index.php'); 
}
?>