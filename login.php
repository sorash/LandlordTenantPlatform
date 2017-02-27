<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LTP - Sign In</title>
	  <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
	  <link rel="stylesheet" href="css/login.css"     type="text/css" media="screen" />
  </head>

  <body>
    <section>
      <div class="inner-wrapper">
        <div id="header">
          <a href="welcome.php" id="logo"></a>
          <h1>Landlord/Tenant Platform</h1>
        </div>

        <div id="content">
          <form method="POST">
            <label>Email:</label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label>Password:</label>
            <input type="text" placeholder="Enter Password" name="password" id="password" required>

            <div id="forgot">
              <a href="#">Recover Forgotten Password</a>
            </div>

            <button type="submit">Sign In</button>

            <div id="center">
              <input type="checkbox" name="remember" id="remember"><label for="remember">Remember Me</label>
            </div>
          </form>
        </div>

        <div id="register">
          <p>Not a member yet? <a href="welcome.php">Sign Up</a></p>
        </div>
      </div>
    </section>
  </body>
</html>