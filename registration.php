<!--Azlina Arna Nur (1630558)-->
<?php
session_start();
header('location:index.php');
$con =mysqli_connect('localhost', 'root', 'aurna1630558', 'userregistration');
mysqli_select_db($con, 'userregistration');
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];


$reg="insert into regtable(user, email, password) values ('$user', '$email', '$password')";
mysqli_query ($con, $reg);

?>