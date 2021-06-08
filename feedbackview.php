<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="feedbackstyle.css"> <!--css file link in bootstrap folder-->  
    <title>feedBack</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 60px;  
  
    }
  
</style>  
  
<body>  
<div class="register">  
    <h1 align="center">All Feedback</h1>  
<div class="input-group"><!--this is used for responsive display in mobile and other devices-->  
    <table class="input-group" style="table-layout: fixed;">  
        <thead>  
  
        <tr>  
  
            <th>Name</th><td><td><td>  
            <th>Email</th><td><td><td>  
            <th>Subject</th><td><td><td>  
            <th>Message</th>    
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
        $view_users_query="SELECT user_name,user_email,subject,content from feedback";//select query for viewing users.  
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $name=$row[0];  
            $email=$row[1];  
            $subject=$row[2];  
            $content=$row[3];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $name;  ?></td><td><td><td>  
            <td><?php echo $email;  ?></td><td><td><td>  
            <td><?php echo $subject;  ?></td><td><td><td>  
            <td><?php echo $content;  ?></td>   
        </tr>  
  
        <?php } ?>  
  
    </table>  
    <p>
    Home Page <a href="adminhome.php">Go Back</a>
    </p>
        </div>  
</div>  
</body>  
  
</html>