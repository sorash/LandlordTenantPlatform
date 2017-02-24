<?php
    ob_start();
    session_start();
    require 'DBC.php';
    
    
    if($_POST){
        if($_POST["login"])
        {
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
        else if($_POST["register"])
        {
            $db = new DBLink;
            $db->addUser($_POST);
        }            
    }    
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Welcome to LTP</title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/welcome.css"   type="text/css" media="screen" />
  </head>

  <body>
    <div class="parent">
      <div class="half">
        <form method="post" action="">
          <div class="register">
            <label>First Name:</label>
            <input type="text" placeholder="Enter First Name" name="firstName" id="firstName" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" required>
	
            <br /><br />
   
            <label>Last Name:</label>
            <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName"   data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" required>
		  
            <br /><br />
    
            <label>Email:</label>
            <input type="email" placeholder="Enter Email" name="email" id="email" data-validation="email" required>
		
            <br /><br />
    
            <label>Password:</label>
	          <input type="password" placeholder="Enter Password" name="pass_confirmation" data-validation="strength" data-validation-strength="2" type="password" >
		
            <br /><br />
    
            <label>Password (Confirmation):</label>
            <input type="password" placeholder="Enter Password Again" name="pass" data-validation="confirmation"  type="password" > 
		
            <br /><br />
    
            <label>I am:</label>
            <input type="radio" name="userType" value="landlord">Landlord
            <input type="radio" name="userType" value="tenant">Tenant
    
            <br /><br />
    
            <div class="center">
              <button type="submit" name="register">Register</button>
		        </div>
	        </div>
	      </form>
    </div><div class="half">
      <form method="post" action="">
          <div class="inner login">
            <label>Email:</label>
            <input type="text" placeholder="Enter Email" name="username" id="username" required>

		        <br /><br /><br />
		
            <label>Password:</label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
		
		        <br /><br />
		
		        <div class="center">
              <button type="submit" name="login">Login</button>
              <br /><br />
              <input type="checkbox"> Remember Me
		       </div>
	      </div>
	    </form>
      </div>
    </div>  
	  
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