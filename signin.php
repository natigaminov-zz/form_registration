<?php include("includes/header.php"); ?>

    <div class="container mlogin">
        <div id="login">
            <h1>LOGIN</h1>
            <form name="loginform" id="loginform" action="auth.php" method="POST">
                <p>
                <label for="user_login">Username<br />
                <input type="text" name="username" id="username" class="input" value=""/></label>
                </p>
            
                <p>
                <label for="user_pass">Password<br />
                <input type="password" name="password" id="password" class="input" value=""/></label
                </p>
            
                <p class="submit">
                <input type="submit" name="login" class="button" value="Log In" />
                </p>
            
                <p class="regtext">No account yet? <a href="signup.php" >Register Here</a>!</p>
            </form>
        </div>

    </div>
	
<?php include("includes/footer.php"); ?>
