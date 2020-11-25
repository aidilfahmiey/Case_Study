<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EventGaffer | Booked Schedule</title>
        <link rel="stylesheet" type="text/css" href="styling/CheckSchedule.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <h1 class="checkTitle">Booked Schedule</h1>
    <br />
    <br />
    <br />

        <?php

        /*$userdata = array( 
            array( 
                'ufname' => 'Aidil', 
                'ulname' => 'Fahmiey', 
                'uemail' => 'aidil@gmail.com',
                'upnum' => '0194194420', 
                'udate' => '2020-11-20', 
                'uic' => 991004095159,
                'ustime' => '08:00', 
                'uetime' => '15:00', 
                'upax' => 100
            ), 
            array( 
                'ufname' => 'Sabrina', 
                'ulname' => 'Fasha', 
                'uemail' => 'sabrina24@gmail.com',
                'upnum' => '0163069986', 
                'udate' => '2020-12-19', 
                'uic' => 990225055658,
                'ustime' => '11:00', 
                'uetime' => '17:00', 
                'upax' => 250
            ), 
            array( 
                'ufname' => 'Khairul', 
                'ulname' => 'Nazreen', 
                'uemail' => 'nazreenx99@gmail.com',
                'upnum' => '01115437789', 
                'udate' => '2021-01-06', 
                'uic' => 960915037865,
                'ustime' => '11:00', 
                'uetime' => '17:00', 
                'upax' => 80
            ) ,
            array( 
                'ufname' => 'Aiman', 
                'ulname' => 'Hakim', 
                'uemail' => 'aiman_hkm@gmail.com',
                'upnum' => '0195489421', 
                'udate' => '2020-12-01', 
                'uic' => 890606093182,
                'ustime' => '08:30', 
                'uetime' => '13:30', 
                'upax' => 400
            ) 
        );*/

        /*$input = $_POST['search'];
        $afterInput = $_POST['search'];
        $id1 = array_search('2020-11-20', array_column($userdata, 'udate')); 
        $id2 = array_search('2020-12-19', array_column($userdata, 'udate'));
        $id3 = array_search('2021-01-06', array_column($userdata, 'udate'));
        $id4 = array_search('2020-12-01', array_column($userdata, 'udate'));*/

        
        
        /*if ($input === '2020-11-20'){
            return $afterInput = 0;
        } elseif ($input == '2020-12-19'){
            return $afterInput = 1;
        } elseif ($input == '2021-01-06'){
            return $afterInput = 2;
        } elseif ($input == '2020-12-01'){
            return $afterInput = 3;
        } else {
        echo "<p>There is no event booked on $input .</p>";
        }*/

        /*if ($id1 === $afterInput){
            echo "<p>The event on $input has fully been booked.</p>";
        } elseif ($id2 === $afterInput){
            echo "<p>The event on $input has fully been booked.</p>";
        } elseif ($id3 === $afterInput){
            echo "<p>The event on $input has fully been booked.</p>";
        } elseif ($id4 === $afterInput){
            echo "<p>The event on $input has fully been booked.</p>";
        } else {
        echo "<p>There is no event booked on $input .</p>";
        }*/
        
        /*if ($input === $id1){
            echo "<p>The event on $input has fully been booked.</p>";
        } else {
        echo "<p>There is no event booked on $input .</p>";
        }*/


        $udate = array('2020-11-20' => '0',
        '2020-12-19' => '1',
        '2021-01-06' => '2',
        '2020-12-01' => '3');

        $input = $_POST['search'];

        /*foreach ($udate as $dateBooked => $afterInput){
            echo $dateBooked.' '.$afterInput.'<br />';
        }*/

        foreach ($udate as $dateBooked => $afterInput){
            if ($dateBooked == $input){
                echo "<p>The event on $input has fully been booked.</p>";
            } elseif ($dateBooked != $input){
                echo "<p>There is no event booked on $input .</p>";
            } else {
            echo " ";
            }
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