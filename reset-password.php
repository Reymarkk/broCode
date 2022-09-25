
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
		<form action="includes/reset-request.inc.php" method="POST" class="login-email">
			<p class="reset-text" style="font-size: 2rem; font-weight: 800;">Reset password</p>
            <p class="reset-password-text">Enter the email associated with your account and we'll send an email with instructions to reset your password.</p>
			<div class="input-group">
				<input type="text" placeholder="Enter your email address" name="email" value="" required>
			</div>
			<div class="input-group">
				<button name="reset-request-submit" class="btn">Send Instructions</button>
			</div>  
		</form>
		<?php
		if (isset($_GET["reset"])) {
			if ($_GET["reset"] == "success") {
				echo '<p class="signupsuccess">Check your email!</p>';
			}
		}
		?>
	</div>
</body>
</html>