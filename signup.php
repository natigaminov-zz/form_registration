<?php include("includes/header.php"); ?>

<div class="container mregister">
	<div id="login">
		<h1>REGISTER</h1>
		<form name="registerform" id="registerform" action="reg.php" method="post">
			<p>
			<label for="user_pass">Username<br />
			<input type="text" name="username" id="username" class="input" value="" size="20" /></label>
			</p>
	
			<p>
			<label for="user_pass">Password<br />
			<input type="password" name="password" id="password" class="input" value="" size="32" /></label>
			</p>	
		
			<p class="submit">
			<input type="submit" name="register" id="register" class="button" value="Register" />
			</p>
	
			<p class="regtext">Already have an account? <a href="signin.php" >Login Here</a>!</p>
		</form>
	
	</div>
</div>
	
<?php include("includes/footer.php"); ?>