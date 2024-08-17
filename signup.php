<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yugal - Sign Up</title>  
  <link rel="stylesheet" href="css/signup.css">  
</head>
<body>

  <form class="modal-content" method="post" action="app/http/signup.php" enctype="multipart/form-data">
        <?php if (isset($_GET['error'])) { ?>
      <div class="alert alert-warning" role="alert">
        <?php echo htmlspecialchars($_GET['error']);?>
      </div>
      <?php } 
              
              if (isset($_GET['name'])) {
                $name = $_GET['name'];
              }else $name = '';

              if (isset($_GET['username'])) {
                $username = $_GET['username'];
              }else $username = '';
      ?>
     <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill this form to create your account.</p>
      <hr>

        <label class="form-label">
               Name</label>
        <input type="text"
               name="name"
               value="<?=$name?>" 
               class="form-control">
      

     
        <label class="form-label">
               User name</label>
        <input type="text" 
               class="form-control"
               value="<?=$username?>" 
               name="username">
    

        <label class="form-label">
               Password</label>
        <input type="password" 
               class="form-control"
               name="password">
      

      
        <label class="form-label">
               Profile Picture</label>
        <input type="file" 
               class="form-control"
               name="pp">   
      
    
      


      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn"><a href="login.php">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>

    

     
    </div>
  </form>
</div>




<?php
  }else{
    header("Location: home.php");
    exit;
  }
 ?>

</body>


