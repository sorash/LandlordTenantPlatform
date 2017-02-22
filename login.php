<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Landlord/Tenant Platform Login</title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/sitecss.css"   type="text/css" media="screen" />
  </head>

  <body>
    <form method="post" action="/login.php" class="login">
      <div class="login">
        <label><b>Username</b></label>
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
	</form>
  </body>
</html>