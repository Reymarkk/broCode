
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Login Form - Pure Coding</title>
</head>
<style>
    hr {
        border: 1px dashed #6d6a6a;
        width: 90%; 
        margin: auto;
        margin-top: 3%;
        margin-bottom: 3%;
        
    }
</style>
<body>
	
    <div class="container">
		<form action="includes/subscription.inc.php" method="POST" class="login-email">
            <center>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">bro<span style="color:#FFAA33;">Code</span> Basic</p>
			<p class="login-register-text">$9.99/ month</p>
            <hr></hr>
            <p class="login-register-text">Free Monthly Materials</p>
            <hr></hr>
            <p class="login-register-text">Special Courses	</p>
            <hr></hr>
            </center>

            <div class="input-group">
				<button name="submit-m" class="btn">Get Started</button>
			</div>
            
			<p class="login-register-text"><a href="reset-password.php" class="login-forgot-password" >Terms and condition will apply.</a></p>
			<p class="login-register-text">Don't have an account? <a href="signup.php">Register Here</a>.</p>
		</form>
	</div>

    <div class="container">
		<form action="includes/subscription.inc.php" method="POST" class="login-email">
            <center>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">bro<span style="color:#FFAA33;">Code</span> Premium</p>
			<p class="login-register-text">$99.99 / yearly </p>
            <hr></hr>
            <p class="login-register-text">broCode Express Service </p>
            <hr></hr>
            <p class="login-register-text">Exclusive Early Access Materials </p>
            <hr></hr>
            </center>
            <div class="input-group">
				<button name="submit-y" class="btn">Get Started</button>
			</div>
            
			<p class="login-register-text"><a href="reset-password.php" class="login-forgot-password" >Terms and condition will apply.</a></p>
			<p class="login-register-text">Don't have an account? <a href="signup.php">Register Here</a>.</p>
		</form>
	</div>
    
</body>
</html>