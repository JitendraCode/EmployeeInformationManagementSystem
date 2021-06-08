<?php  
$conn = mysqli_connect('localhost', 'root', '','jeet1');
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }  
$delete_id=$_GET['del'];  
$delete_query="DELETE  from register WHERE username='$delete_id'";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('adminhome.php?deleted=user has been deleted','_self')</script>";  
}  
  
?> 