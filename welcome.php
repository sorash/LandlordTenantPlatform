<?php

// error messages
$firstNameError = "";
$lastNameError = "";
$emailError = "";
$passwordError = "";
$password2Error = "";
$userTypeError = "";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to LTP</title>
	  <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
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
          <input type="text" placeholder="Enter First Name" name="firstName" id="firstName" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" required>
          <p class="error"><?php echo $firstNameError; ?></p>
          <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName"   data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" required>
          <p class="error"><?php echo $lastNameError; ?></p>
          <input type="email" placeholder="Enter Email" name="email" id="email" data-validation="email" required>
          <p class="error"><?php echo $emailError; ?></p>
          <input type="password" placeholder="Enter Password" name="pass_confirmation" data-validation="strength" data-validation-strength="2" required>
          <p class="error"><?php echo $passwordError; ?></p>
          <input type="password" placeholder="Enter Password Again" name="pass" data-validation="confirmation"  type="password" required>
          <p class="error"><?php echo $password2Error; ?></p>

          <div id="userType">
            <label>I am a:</label>
            <input type="radio" name="userType" id="landlord"><label for="landlord">Landlord</label>
            <input type="radio" name="userType" id="tenant"><label for="tenant">Tenant</label>
            <p class="error"><?php echo $userTypeError; ?></p>
          </div>

          <button type="submit">Sign Up</button>
        </form>
      </aside>
    </section>
  </body>
</html>