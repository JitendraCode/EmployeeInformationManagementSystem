<?php include('chngpass_server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div class="register">
  <h1>Change Password</h1>
</div>
<form method="post" action="changepassword.php">
  <h2>
  <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
     <div class="input-group">
      <label>Old Password</label>
      <input type="password" name="password_0">
    </div>
    <div class="input-group">
      <label>New Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div><br>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">SUBMIT</button>
      <button type="reset" class="btn">RESET</button>
    </div>
  </h2>
  </form>
</body>
</html>