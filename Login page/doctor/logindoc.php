<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="login 2.css">
	<title>Doctor's login</title>
</head>
<body>
	
	<div class="container">
		<form action="loginscript.php" class="login active" method="post">
        <h1> Hello Doctor</h1>
			<h2 class="title">Login with your account</h2>
			<div class="form-group">
				<label for="name">Name</label>
				<div class="input-group">
					<input type="name" id="name" placeholder="name" name="name"required>
					<i class='bx bx-envelope'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<div class="input-group">
					<input type="password" pattern=".{8,}" id="password" placeholder="Your Password" name="docpass"required>
					<i class='bx bx-lock-alt' ></i>
				</div>
				<span class="help-text">At least 8 characters</span>
			</div>
			<button type="submit" class="btn-submit" name="submit">Login</button>
			<a href="#">Forgot password?</a>
		
		</form>

		
	</div>

	<script src="login 2.js"></script>
</body>
</html>