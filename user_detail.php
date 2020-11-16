<?php include("data_lib.php");?>
<?php

$user = new Data("None","None","None",00000000000,"00/00/0000","000000000000","00:00","00:00",00);

$user->setFName($_POST['name']);
$fname = $user->getFName();

$user->setLName($_POST['matricnumber']);
$lname = $user->getLName();

$user->setEmail($_POST['gender']);
$pemail = $user->getEmail();

$user->setPnum($_POST['dob']);
$pnum = $user->getPnum();

$user->setDate($_POST['citizenship']);
$pdate = $person->getDate();

$user->setIc($_POST['status']);
$pic = $user->getIc();

$user->setSTime($_POST['religion']);
$pstime = $user->getSTime();

$user->setETime($_POST['active']);
$petime = $user->getETime();

$user->setPax($_POST['cyear']);
$ppax = $user->getPax();


var_dump($user);

?>