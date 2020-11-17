<?php include("data_lib.php");?>
<?php

$user = new Data("None","None","None",00000000000,"00/00/0000","000000000000","00:00","00:00",00);

$user->setFName($_POST['first_name']);
$fname = $user->getFName();

$user->setLName($_POST['last_name']);
$lname = $user->getLName();

$user->setEmail($_POST['email']);
$pemail = $user->getEmail();

$user->setPnum($_POST['Phone_number']);
$pnum = $user->getPnum();

$user->setDate($_POST['datec']);
$pdate = $user->getDate();

$user->setIc($_POST['ic']);
$pic = $user->getIc();

$user->setSTime($_POST['starttime']);
$pstime = $user->getSTime();

$user->setETime($_POST['endtime']);
$petime = $user->getETime();

$user->setPax($_POST['pax']);
$ppax = $user->getPax();

var_dump($user);

$userd=array(

    'first_name'=>array ($fname),
    'last_name'=>array ($lname),
    'email'=>array ($pemail),
    'Phone_number'=>array ($pnum),
    'datec'=>array ($pdate),
    'ic'=>array ($pic),
    'starttime'=>array ($pstime),
    'endttime'=>array ($petime),
    'pax'=>array ($ppax)
);

echo "<pre>";
print_r($userd);
echo"<pre>";
/*
$userd = array(
    
    $fname,
    $lname,
    $pemail,
    $pnum,
    $pdate,
    $pic,
    $pstime, 
    $petime,
    $ppax,

)
*/
?>
