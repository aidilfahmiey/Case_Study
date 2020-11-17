<?php 
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
$userdata[]='irises';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EventGaffer | Booked Schedule</title>
        <link rel="stylesheet" type="text/css" href="styling/CheckSchedule.css">
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
    
    <img src="resource/baloon.jpg" alt="Contact" width="100%" height="450">

    <br />
    <br />
    <br />
    <br />

    <form class="example" action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>


        <h1 class="checkTitle">Booked Schedule</h1>
    
        <?php include("userdata.php");?>
        <?php
        $udate = "2020-12-19";
        if (array($udate,$userdata)){
            echo "<p>The event on $udate has successfully been booked by.</p>";
        } else {
            echo "<p>There is no event booked on $udate .</p>";
        }

        $udate = "2020-11-20";
        if (array($udate,$userdata)){
            echo "<p>The event on $udate has successfully been booked.</p>";
        } else {
            echo "<p>There is no event booked on $udate .</p>";
        }

        $udate = "2021-01-06";
        if (array($udate,$userdata)){
            echo "<p>The event on $udate has successfully been booked.</p>";
        } else {
            echo "<p>There is no event booked on $udate .</p>";
        }

        $udate = "2020-12-01";
        if (array($udate,$userdata)){
            echo "<p>The event on $udate has successfully been booked.</p>";
        } else {
            echo "<p>There is no event booked on $udate .</p>";
        }
        
        ?>


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
</body>
</html>

</html>