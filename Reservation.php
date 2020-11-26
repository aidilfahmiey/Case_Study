<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Gaffer</title>
    <link rel="stylesheet" type="text/css" href="styling/Reservation.css">


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

    <div class="formbody">
    <div class="mainform"><h1>Reservation Form</h1></div>
    
    <div class="main">
            <form action="afterconfirm.php" method="post">
        
                    <h2 class="name">Name</h2>
                    <input type="text" class="firstname" name="first_name" placeholder="First Name" required>
                    <input type="text" class="lastname" name="last_name" placeholder="Last Name" required><br>

                    <h2 class="name">Email</h2>
                    <input type="email" class="email" name="email" placeholder="Email" required>

                    <h2 class="name">Phone Number</h2>
                    <input type="tel" class="pnum" name="Phone_number" placeholder="01234567891"  maxlength="12" required><br>

                    <h2 class="name">Choose date</h2>
                    <input type="date" class="datec" name="datec" required>

                    <h2 class="name">I/C</h2>
                    <input type="text" class="icc" name="ic" placeholder="000000000000" minlength="12" maxlength="12" required><br>

                    <h2 class="name">Choose time</h2>
                    <input type="time" class="time" name="starttime" min="08:00" max="13:00" required>
                    <a class="until">UNTIL</a>
                    <input type="time" class="time" name="endtime" min="13:00" max="17:00" required><br>

                    <h2 class="name">Number of pax</h2>
                    <input type="number" class="pax" name="pax" placeholder="Minimum is 50" min="50"required>

                    <button class="button button1" type="submit" name="submit" value="Submit">Make Reservation</button>
                    
                    <button class="button button2" type="submit" name="check" value="Check Date Availability" onclick="window.location.href='http://localhost/Case_Study/CheckSchedule.php'">Check Date Availability</button>
                    
                    
                
            </form>
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
    </table>

</body>
</html>
