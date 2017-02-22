<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Landlord/Tenant Platform Register</title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/sitecss.css"   type="text/css" media="screen" />
  </head>

  <body>
    <form method="post" action="/register.php" class="register">
      <div class="register">
        <label>First Name</label>
        <input type="text" placeholder="Enter First Name" name="firstName" id="firstName" required>

		<br /><br />
		
        <label>Last Name</label>
        <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName" required>
		
		<br /><br />
		
        <label>Email</label>
        <input type="email" placeholder="Enter Email" name="email" id="email" required>
		
		<br /><br />
		
        <label>Password</label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
		
		<br /><br />
		
        <label>Password (Confirmation)</label>
        <input type="text" placeholder="Enter Password Again" name="passwordConfirm" id="passwordConfirm" required>
		
		<br /><br />
		
		<div class="center">
          <button type="submit">Register</button>
		</div>
	  </div>
	</form>
  </body>
</html>