<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Yugal - Login</title>
	<link rel="stylesheet" href="css/login.css">	

</head>
<body>
	<form method="post" action="app/http/auth.php">
	<div class="login-container">
		<h1>Login Page</h1>	 	

	 		<?php if (isset($_GET['error'])) { ?>
	 		<div class="alert alert-warning" role="alert">
			  <?php echo htmlspecialchars($_GET['error']);?>
			</div>
			<?php } ?>
			
	 		<?php if (isset($_GET['success'])) { ?>
	 		<div class="alert alert-success" role="alert">
			  <?php echo htmlspecialchars($_GET['success']);?>
			</div>
			<?php } ?>
		  
		    <label class="form-label">
		           User name</label>
		    <input type="text" 
		           class="form-control"
		           name="username">		  

		  
		    <label class="form-label">
		           Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password">
		 
		  
		  <button type="submit">LOGIN</button>
		  <button type="submit"><a href="/bharat1"> Go Back TO Home</button></a>
		           <div class="signup">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
		  	
	 </div>
	</form>
</body>
</html>
<?php
  }else{
  	header("Location: home.php");
   	exit;
  }
 ?>