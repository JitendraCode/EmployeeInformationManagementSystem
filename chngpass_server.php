<?php
session_start();

 if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: userlogin.php');
  }

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
  $password_0 = mysqli_real_escape_string($conn,$_POST['password_0']);
  $password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn,$_POST['password_2']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_0)) { array_push($errors, "old password is required"); }
  if (empty($password_1)) { array_push($errors, "new password is required"); }
  if (empty($password_2)) { array_push($errors, "confirm password is required"); }

  if ($password_1 != $password_2) {
    array_push($errors, "The new/confirm password do not match");
  }
  // Finally, register user if there are no errors in the form
   if (count($errors) == 0) {
    $query=mysqli_query($conn,"SELECT * from register where username='$username' and   password='$password_0'");
    $row=mysqli_fetch_array($query);
    if($row>0){
    $ret=mysqli_query($conn,"UPDATE register set password='$password_1' where username='$username'");
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "password changed successfully";
    header('location: home1.php');
     } else {
      $_SESSION['username']=$username;
     $_SESSION['success'] = "Old password do not match";
     header('location:home1.php');
         }
       }
     }
mysqli_close($conn);
?>