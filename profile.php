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


if(isset($_POST['submit']))
  {
   
    $user=$_SESSION['username'];
    $username=$_POST['username'];
    $birthdate=$_POST['birthdate'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
     $query=mysqli_query($conn, "UPDATE register SET username='$username',  birthdate='$birthdate', gender='$gender', address='$address' where username='$user'");
    if ($query) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Updated profile";
    header("Location: home1.php"); // Redirecting to other page

  }
  else
    {
      $_SESSION['username'] = $username;
    $_SESSION['success'] = "Cannot updated profile";
    header("Location: home1.php"); // Redirecting to other page
    }
  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
  </head>
  <body>
    <div class="register">
  <h1>Profile</h1>
</div>
  <form class="user" method="post" action="profile.php">
  <?php
$user=$_SESSION['username'];
$ret=mysqli_query($conn,"SELECT * from register where username='$user'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

    <h2>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" aria-describedby="emailHelp" required="true" value="<?php  echo $row['username'];?>">
    </div>
    <div class="input-group">
      <label>Date Of Birth</label>
      <input type="date" name="birthdate" min="1990-01-01" max="2000-01-01" aria-describedby="emailHelp" required="true" value="<?php  echo $row['birthdate'];?>">
    </div>
    <div class="input-group">
      <label>Gender</label>
      <input type="text" name="gender"  aria-describedby="emailHelp" required="true" value="<?php  echo $row['gender'];?>">
    </div>
    <div class="input-group">
      <label>Address</label>
      <input type="text" name="address" aria-describedby="emailHelp" required="true" value="<?php  echo $row['address'];?>">
    </div><br>
    <?php }?>
    </div></div>
    <?php } ?>
    <div class="input-group">
      <button type="submit" class="btn" name="submit">Update Profile</button>
    </div>
    <p>
    Don't want to Update <a href="home1.php">Go Back</a>
    </p>
  </h2>
  </form>
  </body>
  </html>