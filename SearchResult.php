<!--Nur Sabrina Fasha binti Zaidi Sham (1813526)-->
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

        $udate = array('2020-11-20' => '0',
        '2020-12-19' => '1',
        '2021-01-06' => '2',
        '2020-12-01' => '3');

        $input = $_POST['search'];

        foreach ($udate as $dateBooked => $afterInput){
        
            if ($dateBooked == $input){
                echo "<p align='center'> <font color=black  size='4pt'>The event on $input has fully been booked.</font></p>";
                break;
            } else {
                echo "<p align='center'> <font color=black  size='4pt'>There is no event booked on $input .</font></p>";
                break;
                
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
