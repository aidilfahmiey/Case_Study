<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Gaffer</title>
    <link rel="stylesheet" type="text/css" href="styling/afterconfirm.css">


</head>
<body>
    <header>
        <div class="Top">
        <a href="index.html" class="logomain"><img src="resource/logo1.png" alt="logo" class="logo"></a>
        
            <nav>
                <ul>
                <li><a href="index.php"><strong>Home</strong></a></li>
                <li><a href="Reservation.php"><strong>Reservation</strong></a></li>
                <li><a href="About.php"><strong>About Us</strong></a></li>
                <li><a href="Contact.php"><strong>Contact Us</strong></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <hr class="line">

    <div class="mainthanks">
        <div class="thanksimg"><img src="resource/thanks.png" alt="thank you"></div>
        <p class="desc">Please go to our office for futher planning.</p>
        <div class="gotomain">
            <a href="Home.html" class="continue" onclick="getConfirmation();"><strong>Continue</strong></a>
        </div>
    </div>

    <table class="table">
    <tr>
        <td width=50%>

        <div class="text">
            <a>Jalan Hang Tuah,</a>
            <br>
            <a>Persiaran Tunku Mahkota Patik,</a>
            <br>
            <a>40460 Kota Kemuning, Shah Alam</a>
            <br>
            <a>Selangor, Malaysia</a>
        </div>

        </td>
        <td>

        <div class="follow">
            <a class="footpic">Follow us</a>
            <br><br>
            <a href="https://twitter.com/explore"><img src="resource/twitter.png" alt="Twitter logo" class="footpic"></a>
            <a  href="https://www.facebook.com/"><img src="resource/fb.png" alt="Facebook logo" class="footpic"></a>
        </div>

        </td>
    </tr>


    <script type = "text/javascript">

    function getConfirmation() {
        alert("Go to Homepage");
    }

</script>     

</body>
</html>
<?php include("data_lib.php");?>

<?php

if(isset($_POST['submit'])){

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
}

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


array_push($userdata);
print_r($userdata);
echo "<pre>";
print_r($userdata);
echo"<pre>";


?>
