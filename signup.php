
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="includes/signup.inc.php" method="POST" class="login-email"> 
		<!-- method="post" attribute value specifies that the form data will be sent to the server by storing it in an HTTP request body.
		This method is used to transfer data securely using HTTP headers.
		yung signup.inc.php is a php file that contains codes or command without html hehe nilagyan ko ng inc para madetermine na for command lang siya -->
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<?php
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
						echo "<center><p> Fill in all fields! </p></center>";
					}
					else if ($_GET["error"] == "invaliduid") {
						echo "<center><p> Choose a proper username!</p></center>";
					}
					else if ($_GET["error"] == "invalidemail") {
						echo "<center><p> Choose a proper email!</p></center>";
					}
					else if ($_GET["error"] == "passwordsdontmatch") {
						echo "<center><p> Password doesn't match!</p></center>";
					}
					else if ($_GET["error"] == "stmtfailed") {
						echo "<center><p> Something went wrong, try again!</p></center>";
					}
					else if ($_GET["error"] == "usernametaken") {
						echo "<center><p> Username is already taken!</p></center>";
					}
					else if ($_GET["error"] == "none") {
						echo "<center><p> You have signed up!</p></center>";
					}
				}
			?>
			<div class="input-group">
				<input type="text" placeholder="Name" name="name" value="" required>
				<!-- placeholder for web, name to call the data using php -->
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="uid" value="" required>
			</div>
			
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>