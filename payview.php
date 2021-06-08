<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jeet1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//error_reporting(0);
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: userlogin.php');
  } else{

  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Salary</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
  </head>
  <body>
    <div class="register">
  <h1>Salary</h1>
</div>
  <form class="user" method="post" action="payview.php">
  <?php
$user=$_SESSION['username'];
$ret=mysqli_query($conn,"SELECT * from register where username='$user'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
    <h2>
    <div class="input-group">
      <label>Username</label><?php  echo $row['username'];?>
    </div>
    <div class="input-group">
      <label>Tax Deduction</label><?php  echo $row['deduction'];?>
    </div>
    <div class="input-group">
      <label>OverTime</label><?php  echo $row['overtime'];?>
    </div>
    <div class="input-group">
      <label>Bonus</label><?php  echo $row['bonus'];?>
    </div>
    <div class="input-group">
      <label>NetPay</label><?php  echo $row['netpay'];?>
    </div>
    <?php }?>
    </div></div>
    <?php } ?>
  </h2>
  </form>
  </body>
  </html>