<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Tavern</title>
</head>
<body>
    <h1>Welcome to the registration board!</h1>
	<p>Register here</p>

	<form action="handleForms.php" method="POST">
		<div class="fields">
			<p><input type="text" placeholder="username here" class="fields" name="username"></p>
			<p><input type="password" placeholder="password here" class="fields" name="password"></p>
			<p><input type="submit" value="Register" id="submitBtn" name="regBtn"></p>
		</div>
	</form>
    <p><input type="submit" value="Login" id="submitBtn2" name="logBtn" onclick="location.href='login.php'"></p>
</body>
</html>