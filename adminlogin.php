<?php include('adminserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div class="register">
  <h1>Admin Login</h1>
</div>
<form method="post" action="adminlogin.php"><h2>
  <span><?php echo $error; ?></span>
    <div class="input-group">
      <label>AdminName</label>
      <input type="text" name="username">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div><br>
    <div class="input-group">
      <button type="submit" class="btn" name="login_admin">Login</button>
      <button type="reset" class="btn">Reset</button>
    </div>
    <p>
    You are not suppose to be here let's start from start <a href="index.php">Byee!</a>
    </p></h2>
  </form>
</body>
</html>