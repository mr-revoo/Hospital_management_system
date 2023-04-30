
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="css/doctor-login_styles.css">
	<title>RDoctor Login Form</title>
</head>
<body>
	
	<div class="container">
		<form action="#" class="login active">
        <h1> Hello Doctor</h1>
			<h2 class="title">Login with your account</h2>
			<div class="form-group">
				<label for="name">Name</label>
				<div class="input-group"> 
					<input type="name" id="name" placeholder="name">
					<i class='bx bx-envelope'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<div class="input-group">
					<input type="password" pattern=".{8,}" id="password" placeholder="Your Password">
					<i class='bx bx-lock-alt' ></i>
				</div>
				<span class="help-text">At least 8 characters</span>
			</div>
			<button type="submit" class="btn-submit">Login</button>
			<a href="#">Forgot password?</a> <h5>Press here</h5>
		
		</form>

		<form action="#" class="register">
			<h2 class="title">Register your account</h2>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" id="email" placeholder="Email address">
					<i class='bx bx-envelope'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<div class="input-group">
					<input type="password" pattern=".{8,}" id="password" placeholder="Your password">
					<i class='bx bx-lock-alt' ></i>
				</div>
				<span class="help-text">At least 8 characters</span>
			</div>
			<div class="form-group">
				<label for="confirm-pass">Confirm password</label>
				<div class="input-group">
					<input type="password" id="confirm-pass" placeholder="Enter password again">
					<i class='bx bx-lock-alt' ></i>
				</div>
				<span class="help-text">Confirm password must be same with password</span>
			</div>
			<button type="submit" class="btn-submit">Register</button>
			<p>I already have an account. <a href="#" onclick="switchForm('login', event)">Login</a></p>
		</form>
	</div>

	<script src="login 2.js"></script>
</body>
</html>