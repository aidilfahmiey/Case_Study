<?php
$flowers = array('tulips', 'roses', 'daffodils', 'orchids', 'daisies');
$flowers[]='irises';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Booked Schedule</title>
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
    
    <img src="resource/Contact.jpg" alt="Contact" width="100%" height="350">

    <br />
    <br />
    <br />
    <br />


        <h1>Booked Schedule</h1>
    
        <?php
        $order = 'babybreath';
        if (in_array($order,$flowers)){
            echo "<p>Yes, $order are in stock.</p>";
        } else {
            echo "<p>Sorry, no $order available.</p>";
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