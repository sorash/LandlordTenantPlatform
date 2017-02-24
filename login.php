<?php
    ob_start();
    session_start();
    require 'DBC.php';
    
    
    if($_POST){
        $db = new DBLink;
        /*if(($row = $db->login($_POST)) == false){
            echo "<p style='color:red;'>NO</p>";
        }else 
            echo "<p style='color:red;'>YES</p>";
            var_dump($row);*/
        if(($row = $db->login($_POST)) != false)
        {
            
            $_SESSION["LTPUserName"] = $row["FirstName"];
            header("Location: index.php");
            exit();
        }else {
            echo "<p style='color:red;font-size:20px;'> NOOOOOO</p>";
        }
            
    }    
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Landlord/Tenant Platform Login</title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/sitecss.css"   type="text/css" media="screen" />
  </head>

  <body>
    <form method="post" action="" class="login">
      <div class="login">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

		<br /><br /><br />
		
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
		
		<br /><br />
		
		<div class="center">
          <button type="submit">Login</button>
		  <br /><br />
          <input type="checkbox" checked="checked"> Remember Me</input>
		</div>
	  </div>
	  <center><a href="register.php" style="color:white;"> Register </a></center>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
    <script src="jQuery-Form-Validator/form-validator/jquery.form-validator.min.js"></script>
    <script>
         /* $.validate({
            lang: 'en',
            modules : 'security',
            borderColorOnError : '#c90808'
          });*/
    </script>
  </body>
</html>