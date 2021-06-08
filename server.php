<?php
session_start();

// initializing variables
$username = "";
$password_1="";
$password_2="";
$gender="";
$birthday="";
$address="";
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
  $password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn,$_POST['password_2']);
  $gender = mysqli_real_escape_string($conn,$_POST['gender']);
  $birthday = mysqli_real_escape_string($conn,$_POST['birthday']);
  $address = mysqli_real_escape_string($conn,$_POST['address']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "password is required"); }
  if (empty($gender)) { array_push($errors, "gender is required"); }
  if (empty($birthday)) { array_push($errors, "birthdate is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE username='$username' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) { array_push($errors, "Username already exists");}
  }

  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }
  // Finally, register user if there are no errors in the form
   if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query="INSERT INTO `register` (`username`, `password`, `gender`, `birthdate`, `address`) VALUES ('$username', '$password_1', '$gender', '$birthday', '$address')";
    $conn->query($query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: userlogin.php');
  }
}
mysqli_close($conn);
?>