
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
		<form action="includes/billing.inc.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Fill out</p>
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
				<input type="email" placeholder="Your Email Account" name="uemail" value="" required>
			</div>
			<div class="input-group">
				<input type="address" placeholder="Billing Address" name="baddress" value="" required>
			</div>
			<div class="input-group">
				<input type="tel" placeholder="Contact Number" name="cnumber" value="" required>
			</div>
			<div class="input-group">
				<button name="submit-y" class="btn">Subscribe</button>
			</div>
            <!-- create something like this but for subscription -->
			<?php
			if (isset($_GET["newpwd"])) {
				if ($_GET["newpwd"] == "passwordupdated") {
					echo "<center><p> Your password has been reset! </p></center>";
				}
			}
			?>
            <p class="login-register-text">Subscribe and start learning.</p>
			<p class="login-register-text"><a href="reset-password.php" class="login-forgot-password" >Terms and condition will apply.</a></p>`
		</form>
	</div>
</body>
</html>