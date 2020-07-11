<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="css/signinup.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="home.php">
	<h1>Create Account</h1>
	
	<span>or use your email for registration</span>
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<button id="signup" onclick="SingUp()">SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="home.php">
		<h1>Sign In</h1>
		
	<span>or use your account</span>
	<input id="email" type="email" name="email" placeholder="Email">
	<input id="pass" type="password" name="password" placeholder="Password">
	<a href="#">Forgot Your Password</a>
	<button onclick="SignIn()">Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost"  id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details to access Food Court Management</p>
			<!--<button class="ghost" id="signUp">Sign Up</button>-->
		</div>
	</div>
</div>
</div>

<script type="text/javascript" src="js/signinup.js"></script>

</body>
</html>