<?php include('login_server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div class="register">
  <h1>User Login</h1>
</div>
<form method="post" action="userlogin.php"><h2>
  <span><?php echo $error; ?></span>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div><br>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
      <button type="reset" class="btn">Reset</button>
    </div>
    <p>
     not yet user? <a href="register.php">Register</a>
    </p>
    <p>
      Are you Admin? <a href="adminlogin.php">Log in</a>
    </p>
  </h2>
  </form>
</body>
</html>