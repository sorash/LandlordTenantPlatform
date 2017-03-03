<?php
    ob_start();
    session_start();
    require 'DBC.php';
    
    if($_POST){
        $db = new DBLink;
        $db->addUser($_POST);
        header("Location: welcome.php");
        exit();
    }
    
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to LTP</title>
	 <!-- <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />-->
	  <link rel="stylesheet" href="css/welcome.css"   type="text/css" media="screen" />
  </head>

  <body>
    <header>
      <div id="header-inner">
        <a id="logo"></a>

        <nav>
          <a id="menu"></a>
          <ul>
            <li><a href="https://github.com/sorash/LandlordTenantPlatform" target="_blank">Source Code</a></li>
            <li><a href="http://civictech.ca/codeacross-toronto-2017/" target="_blank">CodeAcross Toronto 2017</a></li>

            <li class="right">Already a member? <a href="login.php">Login</a></li>
            <li class="right" id="mobile"><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="inner-wrapper">
      <article id="information">
        <h1>Landlord/Tenant Platform</h1>
        <h2>A place for landlords and tenants to connect and discuss issues regarding their properties.</h2>
      </article>

      <aside id="register">
        <form method="POST">
          <input type="text" placeholder="Enter First Name" name="firstName" id="firstName" data-validation="custom" data-validation-regexp="^([a-zA-Z ]+)$" data-validation-error-msg="Invalid Name" data-validation-error-msg-container="#FirstNameError" required>
          <div id="FirstNameError" style="color:red;width:75%;"></div>
          <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName"   data-validation="custom" data-validation-regexp="^([a-zA-Z ]+)$" data-validation-error-msg="Invalid Last Name"  data-validation-error-msg-container="#LastNameError" required>
          <div id="LastNameError" style="color:red;width:75%;"></div>
          <input type="email" placeholder="Enter Email" name="email" id="email" data-validation="email"  data-validation-error-msg-container="#EmailError"  data-validation-error-msg="Invalid Email" required>
          <div id="EmailError" style="color:red;width:75%;"></div>
          <input type="password" placeholder="Enter Password" name="pass_confirmation" data-validation="strength" data-validation-strength="2" data-validation-error-msg-container="#PasswordError"  required>
          <div id="PasswordError" style="color:red;width:75%;"></div>
          <input type="password" placeholder="Enter Password Again" name="pass" data-validation="confirmation"  type="password"  data-validation-error-msg="Passwords don't match." data-validation-error-msg-container="#PasswordConfError" required>
         <div id="PasswordConfError" style="color:red;width:75%;"></div>
          <div id="userType">
            <label>I am a:</label>
            <input type="radio" name="userType" id="landlord"><label for="landlord">Landlord</label>
            <input type="radio" name="userType" id="tenant"><label for="tenant">Tenant</label>
          </div>

          <button type="submit">Sign Up</button>
        </form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
<script src="jQuery-Form-Validator/form-validator/jquery.form-validator.min.js"></script>
    <script>
          $.validate({
            lang: 'en',
            modules : 'security',
            errorMessagePosition : 'top'
            
          });
    </script>
      </aside>
    </section>
  </body>
</html>