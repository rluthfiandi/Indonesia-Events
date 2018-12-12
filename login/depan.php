<!DOCTYPE html>
<html>
	<head>
		<title>Login Indonesia Event</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<br/>
		<br/>
		<center><h2>Indonesia Events</h2></center>
		<br/>
		<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>

	
</html>