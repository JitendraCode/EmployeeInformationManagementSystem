<?php include('payserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>PayRoll</title>
  <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div class="register">
  <h1>PayRoll</h1>
</div>
<form method="post" action="pay.php">
  <h2>
  <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label><input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Deduction</label><input type="int" name="deduction">
    </div>
    <div class="input-group">
      <label>Overtime</label><input type="int" name="overtime">
    </div>
    <div class="input-group">
      <label>Bonus</label><input type="int" name="bonus">
    </div>
    <div class="input-group">
      <label>netpay</label><input type="int" name="netpay">
    </div><br>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Submit</button>
      <button type="reset" class="btn">Reset</button>
    </div>
    <p>
      Go To Profile <a href="adminhome.php">Back!</a>
    </p>
  </h2>
  </form>
</body>
</html>