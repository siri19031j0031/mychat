<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create new account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<div class="signup-form">
    <form action="" method="post">
		<div class="form-header">
			<h2>Sign Up</h2>
			<p>Fill the form an create a MyChat account.</p>
		</div>
		<div class="form-group">
			<label>UserName</label>
        	<input type="text" class="form-control" placeholder="siridamineni" name="user_name" autocomplete="off" required="required">
        </div>
           <div class="form-group">
			<label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="user_pass" autocomplete="off" required="required">
        </div>
		<div class="form-group">
			<label>Email Address</label>
        	<input type="email" class="form-control" placeholder="someone@site.com" name="user_email" autocomplete="off" required="required">
        </div>
        <div class="form-group">
        	<label>Country</label>
        	<select class="form-control" name="user_country" required>
        		<option disabled="">Select the country</option>
        		<option>Pakisthan</option>
        		<option>United states of America</option>
        		<option>India</option>
        		<option>U.K</option>
        		<option>bangladesh</option>
        		<option>france</option>
        	</select>
        </div>
                	<label>Gender</label>
        	<select class="form-control" name="user_gender" required>
        		<option disabled="">Select the Gender</option>
        		<option>Male</option>
        		<option>female</option>
        		<option>others</option>
        	</select>
        </div>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
		</div>
		<?php include("signup_user.php"); ?>	
    </form>
	<div class="text-center small" style='color:#67428B;'>Already have a Account? <a href="signin.php">SignIn here</a></div>
</div>
</body> 
</html>    