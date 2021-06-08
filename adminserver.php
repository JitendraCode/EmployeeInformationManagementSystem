<?php
session_start();
$error=''; //Variable to Store error message;
if(isset($_POST['login_admin'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
 $error = "Username or Password is Empty";
 }
 else
 {
 //Define $user and $pass
 $username=$_POST['username'];
 $password=$_POST['password'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "jeet1");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM admin where username='$username' AND password='$password' ");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
  $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
 header("Location: adminhome.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>