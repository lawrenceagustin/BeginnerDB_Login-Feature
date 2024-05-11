<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tavern Login</title>
</head>
<body>
	<h1>Login here to enter the Tavern!</h1>
	<form action="handleForms.php" method="POST">
		<div class="fields">
			<p><input type="text" placeholder="username here" class="fields" name="username"></p>
			<p><input type="password" placeholder="password here" class="fields" name="password"></p>
			<p><input type="submit" value="Login" name="loginBtn"></p>
		</div>
	</form>
	<a href="register.php">
		<input type="submit" value="Register" name="regBtn">
</body>
</html>