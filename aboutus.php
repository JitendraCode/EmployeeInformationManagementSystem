<?php 
  session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */
.header {
  padding: 50px;
  text-align: center;
  background: black;
  color: white;
  opacity:0.9;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 40px;
}

.header p{
  color: yellow;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: black;
  opacity: 0.9;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: red;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

.row h5{
  color: yellow;
}
.row p{
  color: yellow;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: black;
  padding: 10px;
  color: white;
  opacity: 0.9;
}

/* Main column */
.main {   
  flex: 70%;
  padding: 20px;
  opacity: 0.9;
  background-color: black;
  color: white;

}

/* Fake image, just for this example */
.img {
  background-color: black;
  width: 100%;
  padding: 10px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background-color: black;
  color:white;
  opacity: 0.9;
}

.footertext{
  color: red;
  background-color: black;
  opacity: 0.9;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width:100%;
  }
}
</style>
</head>
<body>

  <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])):?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
  </div>
  <?php endif ?>


<div class="header">
  <h1>Employee Management System</h1>
  <p>A website to deal with your information.</p>
</div>

<div class="row">
  <div class="side">
    <h2>About Us</h2>
    <h5>Our Office</h5>
    <section><img class="img" style="height:200px;" src="office.jpg">
    <p>Our goal to have a friendly relationship with our employee and work hard to achieve our goals</p>
    <h3>More Images From Our Office</h3>
    <img class="img" style="height:150px;" src="office1.jpg"><br>
    <img class="img" style="height:150px;" src="office2.jpg"><br>
    <img class="img" style="height:160px;" src="office3.jpg">
  </section>
  </div>
  <div class="main">
    <h2>Employee of the year</h2>
    <section><img class="img" style="height:300px;" src="office1.jpg">
    </section>
    <p>Ganesh Gaitonde</p>
    <p>Here is to another day of outward smile and inward screams.</p>
    <br>
    <h2>Meeting room</h2>
    <section>
    <img class="img" style="height:400px;" src="office3.jpg">
  </section>
    <p>It's only been 45 minutes work hard 7 hours to go. </p>
  </div>
</div>

<div class="footer">
  <a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.pinterest.co.uk/"><i class="fa fa-pinterest-p"></i></a>
  <a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
  <a href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
  <a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
  <p class="footertext">
    Have a Great day!
  </p>
</div>

</body>
</html>
