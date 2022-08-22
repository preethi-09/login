<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>Register Account Form</h2>
				<div class="form-row">
					<label for="full-name">FULL NAME</label>
					<input type="text" name="username" id="username" class="input-text" placeholder="username" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">YOUR EMAIL ID</label>
					<input type="text" name="email" id="email" class="input-text" placeholder="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">PASSWORD</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row">
					<label for="password">CONFIRM PASSWORD</label>
					<input type="password" name="confirm" id="confirm" class="input-text" placeholder="confirm password" required>
					<i class="fas fa-key"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="signup" class="register" value="SIGN UP">
				</div>
			</form>
		</div>
	</div>
</body> 
</html>