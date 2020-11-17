<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Event Gaffer</title>
    <link rel="stylesheet" type="text/css" href="styling/Home.css">


</head>
<body>
    <header>
        <div class="Top">
        <a href="index.php" class="logomain"><img src="resource/logo1.png" alt="logo" class="logo"></a>
        
            <nav>
                <ul>
                <li><a href="index.php"><strong>Home</strong></a></li>
                <li><a href="Reservation.php"><strong>Reservation</strong></a></li>
                <li><a href="About.php"><strong>About Us</strong></a></li>
                <li><a href="Contact.php"><strong>Contact Us</strong></a></li>
                </ul>
            </nav>
    </header>

    <div class="register">
              <div class="form-box">
                <div class="button-box">
                  <div id="btn"></div>
                   <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                   <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
                </div>
                
              
              <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="User Id" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <br><br>
                <button type="submit" class="submit-btn">Log in</button>
              </form>
              <form id="signup" class="input-group">
                <input type="text" class="input-field" placeholder="User Id" required>
                <input type="text" class="input-field" placeholder="Email Id" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <br><br>
                <button type="submit" class="submit-btn">Sign Up</button>
              </form>
               </div>
              </div>
              <script>
                var x = document.getElementById("iogin");
                var y = document.getElementById("signup");
                var z = document.getElementById("btn");
                function signup(){
                  x.style.left = "-400px";
                  y.style.left = "50px";
                  z.style.left = "110px";
                }

                function login(){
                  x.style.left = "50px";
                  y.style.left = "450px";
                  z.style.left = "0";
                }
              </script>
        
   
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
