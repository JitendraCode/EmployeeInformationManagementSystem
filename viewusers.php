<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="style.css"> <!--css file link in bootstrap folder-->  
    <title>Edit Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
  
<div class="register">  
    <h1 align="center">All the Users</h1>  
  
<div class="input-group"><!--this is used for responsive display in mobile and other devices-->  
  
    <h2>
    <table class="input-group" style="table-layout: fixed;">  
        <thead>  
  
        <tr>  
        
            <th>User Name</th>  
            <th>Gender</th>  
            <th>Birthdate</th>  
            <th>Address</th>  
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        session_start();
        $conn = mysqli_connect('localhost', 'root', '','jeet1');
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
        if (!isset($_SESSION['username'])) {
            $_SESSION['msg'] = "You must log in first";
            header('location: adminlogin.php');
            }
        $view_users_query="SELECT username,gender,birthdate,address from register";//select query for viewing users.  
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $username=$row[0];  
            $gender=$row[1];  
            $birthdate=$row[2];  
            $address=$row[3];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $username;  ?></td>  
            <td><?php echo $gender;  ?></td>  
            <td><?php echo $birthdate;  ?></td>  
            <td><?php echo $address;  ?></td>   
            <td><a href="delete.php?del=<?php echo $username ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
    <p>
    Don't want to Delete <a href="adminhome.php">Go Back</a>
    </p>
</h2>
        </div>  
</div>  
  
  
</body>  
  
</html>