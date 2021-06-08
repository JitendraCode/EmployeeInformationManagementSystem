<?php
session_start();

// initializing variables
$username = "";
$errors = array(); 


// Create connection
$conn = mysqli_connect('localhost', 'root', '','jeet1');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username =  mysqli_real_escape_string($conn,$_POST['username']);
  $deduction = mysqli_real_escape_string($conn,$_POST['deduction']);
  $overtime = mysqli_real_escape_string($conn,$_POST['overtime']);
  $bonus = mysqli_real_escape_string($conn,$_POST['bonus']);
  $netpay = mysqli_real_escape_string($conn,$_POST['netpay']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($deduction)) { array_push($errors, "deduction is required"); }
  if (empty($overtime)) { array_push($errors, "overtime is required"); }
  if (empty($bonus)) { array_push($errors, "bonus is required"); }
  if (empty($netpay)) { array_push($errors, "netpay is required"); }

  
  // Finally, register user if there are no errors in the form
   if (count($errors) == 0) {

    $query="UPDATE register SET deduction='$deduction',  overtime='$overtime', bonus='$bonus', netpay='$netpay' where username='$username'";
    $conn->query($query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Updated successfully";
    header('location: adminhome.php');
  }
}
mysqli_close($conn);
?>