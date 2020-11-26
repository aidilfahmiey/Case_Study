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
                <li><a href="index.php"><strong>Reservation</strong></a></li>
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


              <form id="login" class="input-group" action="login.php" method="POST">
                <input type="text" class="input-field" name="user" placeholder="User Id" required>
                <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
                <br><br><br>
                <button type="submit" class="submit-btn">Log in</button>
              </form>
              <form id="signup" class="input-group" action="registration.php" method="POST">
                <input type="text" class="input-field" name="user"  placeholder="User Id" required>
                <input type="text" class="input-field" name= "email" placeholder="Email Id" required>
                <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
                <br><br>
                <button type="submit" class="submit-btn">Sign Up</button>
              </form>
               </div>
              </div>
              <script>
                var x = document.getElementById("login");
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

<h1 class= "maintitle">A relieble Platform for you</h1>
<p><center><font color="purple"><h3>This is a global self-service ticketing solution,for events ranging from small congregational to big conferences <br> and as
     well as music concerts, marathons,fundraising program and gaming competitions. Now everyone can organize, <br> discover, 
     book and join events that encourage their joy and fulfill their lives. Our purpose is to connect the world <br> together through live escapade.</h3></font></center></p>

<div id= event>
<h2 class= 'eventtitle'>Recent Events</h2> 
<div class="gallery">
    <img src="resource/event1.jpg"  width="600" height="200">
</div>

<div class="gallery">
    <img src="resource/event2.jpg"  width="600" height="200">
</div>
  
<div class="gallery">
    <img src="resource/event3.jpg"  width="600" height="200">
</div>

<div class="gallery">
    <img src="resource/event4.jpg"  width="600" height="200">
</div>

</div>



<div class= "customer">
<h1><center>Customer Reviews</center></h1>
     <div class="slideshow-container">

<div class="mySlides">
  <q>EventGaffer  has everything we need with tremendous ease of access and excellent customer service</q>
  <p class="author">- Ayesha binti kadir</p>
</div>

<div class="mySlides">
  <q>I love the event budget, management and services.Thanks to EventGaffer for being a corporate planner</q>
  <p class="author">- Muhammad Rahman </p>
</div>

<div class="mySlides">
  <q>Enables me to maintain consistency and manage a high volume of events.I am satisfied and happy.</q>
  <p class="author">- Nadia Sara</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
 
  slides[slideIndex-1].style.display = "block";  

}
</script>

</div>

<div class="operation">
            <br />
            <br />
            <h2 class="operationTitle">OPERATION HOUR</h2>
            <h3 class="operationDesc">Monday – Sunday <br />(including eve, public holidays & replacement holidays):<br /><br />8.00 a.m. - 5.00 p.m.</h3>
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
