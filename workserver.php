<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }
	$db = mysqli_connect('localhost', 'root', '', 'jeet1');

	// initialize variables
	$name = "";
	$taskname = "";
	$startdate = "";
	$enddate = "";
	$progress = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$taskname = $_POST['taskname'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		$progress = $_POST['progress'];

		mysqli_query($db, "INSERT INTO info (name, taskname,startdate,enddate,progress) VALUES ('$name', '$taskname','$startdate','$enddate','$progress')"); 
		$_SESSION['message'] = "Task saved"; 
		header('location: work.php');
	}
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$taskname = $_POST['taskname'];
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$progress = $_POST['progress'];

	mysqli_query($db, "UPDATE info SET name='$name', taskname='$taskname', startdate='$startdate', enddate='$enddate', progress='$progress' WHERE id=$id");
	$_SESSION['message'] = "Task updated!"; 
	header('location: work.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Task deleted!"; 
	header('location: work.php');
}