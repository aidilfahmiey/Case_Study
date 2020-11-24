<?php include("data_lib.php");?>

<?php

if(isset($_POST['submit'])){

    session_start();

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


$userdata = array(
    "ufname"=>array ("Aidil","Sabrina","Khairul","Aiman"),
    "ulname"=>array ("Fahmiey","Fasha","Nazreen","Hakim"),
    "uemail"=>array ("aidil@gmail.com","sabrina24@gmail.com","nazreenx99@gmail.com","aiman_hkm@gmail.com"),
    "upnum"=>array ("0194194420","0163069986","01115437789","0195489421"),
    "udate"=>array ("2020-11-20","2020-12-19","2021-01-06","2020-12-01"),
    "uic"=>array (991004095159,990225055658, 960915037865,890606093182),
    "ustime"=>array ("08:00","09:30","11:00","08:30"),
    "uetime"=>array ("15:00","16:30","17:00","13:30"),
    "upax"=>array (100,250,80,400)
);

$userdata["ufname"][]= $fname;
$userdata["ulname"][]= $lname;
$userdata["uemail"][]= $pemail;
$userdata["upnum"][]= $pnum;
$userdata["udate"][]= $pdate;
$userdata["uic"][]= $pic;
$userdata["ustime"][]= $pstime;
$userdata["uetime"][]= $petime;
$userdata["upax"][]= $ppax;

$_SESSION['data']=$userdata;


array_push($_SESSION);


//FOR CHECKING//
/*
print_r($_SESSION);
echo "<pre>";
print_r($_SESSION);
echo"<pre>";
*/

}

?>