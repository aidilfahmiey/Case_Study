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
<?php include("userdata.php");?>
