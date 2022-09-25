
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Login Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="includes/login.inc.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<?php
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
						echo "<center><p> Fill in all fields! </p></center>";
					}
					else if ($_GET["error"] == "wronglogin") {
						echo "<center><p> Incorrect login information!</p></center>";
					}
				}
			?>
			<div class="input-group">
				<input type="text" placeholder="Username/Email" name="uid" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<?php
			if (isset($_GET["newpwd"])) {
				if ($_GET["newpwd"] == "passwordupdated") {
					echo "<center><p> Your password has been reset! </p></center>";
				}
			}
			?>
			<p class="login-register-text"><a href="reset-password.php" class="login-forgot-password" >Forgot your password?</a></p>
			<p class="login-register-text">Don't have an account? <a href="signup.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>