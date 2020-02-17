<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
      <label>First name</label>
      <input type="text" name="firstname" name="firstname">
    </div>
    <div class="input-group">
      <label>Last name</label>
      <input type="text" name="lastname" name="lastname">
    </div>
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

<label>Select gender:</label> <br>
    <input type="radio" id="male" name="gender" value="male">      
  <label >Male</label><br>
  
   <input type="radio" id="female" name="gender" value="female">    
  <label >Female</label><br>
 
  <input type="radio" id="other" name="gender" value="other">    
  <label >Other</label><br><br>

<label>Register As:</label><br>
<input type="radio" id="bonne" name="gender" value="bonne">      
  <label >Bonne</label><br>
  
   <input type="radio" id="guardian" name="gender" value="guardian">    
  <label >Guardian</label><br>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>

     

  
    
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>