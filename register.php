<?php
require 'DBC.php';
    if($_POST){
        $db = new DBLink;
        $db->addUser($_POST);
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Landlord/Tenant Platform Register</title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/sitecss.css"   type="text/css" media="screen" />
  </head>

  <body>
    <form method="post" action="" class="register">
      <div class="register">
        <p>
            <label>First Name</label>
            <input type="text" placeholder="Enter First Name" name="firstName" id="firstName" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" required>
        </p>    
	
	    <p>
          <label>Last Name</label>
        <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName"   data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" required>
		</p>	
		
		<p>
        <label>Email</label>
        <input type="email" placeholder="Enter Email" name="email" id="email" data-validation="email" required>
		</p>
		
        <p>
        <label>Password</label>
		 <input name="pass_confirmation" data-validation="strength" 
		 data-validation-strength="2" type="password" >
		</p>
		
		<p>
        <label>Password (Confirmation)</label>
        <input name="pass" data-validation="confirmation"  type="password" > 
		</p>
		<p>
        <label>UserType</label>
        <input type="text" name="userType" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" required > 
		</p>
		<div class="center">
          <button type="submit">Register</button>
		</div>
	  </div>
	      <center><a href="login.php" style="color:white;"> login </a></center>
	</form>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
<script src="jQuery-Form-Validator/form-validator/jquery.form-validator.min.js"></script>
    <script>
          $.validate({
            lang: 'en',
            modules : 'security',
            borderColorOnError : '#c90808'
          });
    </script>
  </body>
</html>