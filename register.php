<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div class="register">
	<h1>Register</h1>
</div>
<form method="post" action="register.php"><h2>
  <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" value="<?php echo $password_1; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" value="<?php echo $password_2; ?>">
  	</div>
  	<div class="input-group">
  		<label>Gender</label>
  		<input type="text" name="gender" value="<?php echo $gender; ?>">
  	</div>
  	<div class="input-group">
  		<label>Date of Birth</label>
  		<input type="Date" name="birthday" min="1990-01-01" max="2000-01-01" value="<?php echo $birthday; ?>">
  	</div>
  	<div class="input-group">
  		<label>Address</label>
  		<textarea name="address" rows="2" cols="48" value="<?php echo $address; ?>"></textarea>
  	</div><br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	  <button type="reset" class="btn">Reset</button>
  	</div>
  	<p>
  		Already a User? <a href="userlogin.php">Sign in</a>
  	</p>
    <p>
      Are you Admin? <a href="adminlogin.php">Log in</a>
    </p></h2>
  </form>
</body>
</html>