<?php include('../../../stmarys_private/db_admin_connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Disabled</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Registration Disabled</h2>
  </div>
	
  <!-- <form method="post" action="register.php"> -->
  <form method="" action="">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Will not work</button>
  	</div>
  	<p>
  		<a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>