<?php 
	session_start();
	include('link.php');
	if(isset($_SESSION['stu_id']) && isset($_SESSION['passwd'])){
		header('location:profile.php');
	}else{
		include('server.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo $url; ?>/images/icons/icon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/loginutil.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/login.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/error.css">
	
<!--===============================================================================================-->
<script language="javascript" type="text/javascript" src="<?php echo $url; ?>/js/validation.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo $url; ?>/images/back.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo $url; ?>/login.php" method="post">
					<span class="login100-form-logo">
						<div class="login100-form-avatar">
						<a href="<?php echo $url; ?>/index.php"><img src="<?php echo $url; ?>/images/llogo.png" alt="AVATAR"></a>
                    </div>
					</span>

				    <span class="login100-form-title p-b-34 p-t-27">
						Quiz Competition
					</span>

					<!--show Error validation here -->
					<?php include('error.php');?>

					<div class="wrap-input100 validate-input" data-validate = "Enter rollnumber">
						<input class="input100" type="text" name="roll_no" placeholder="Roll Number" maxlength="10" pattern=".{10,}" required title="Enter only 10 Numbers" onkeypress="return isNumber(event)">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="passwd" placeholder="Password" style="text-decoration: none" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    
					<div class="text-right p-t-2">
						<a class="txt1" href="<?php echo $url; ?>/forgot.php" style="text-decoration:none">
							Forgot Password?
						</a>
					</div>
                    <br/><br/>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>

                    <div class="text-center p-t-75">
						<p style="color:#fff">Not yet a member?</p> <a class="txt1" href="<?php echo $url; ?>/register.php" style="text-decoration:none">
							Register here
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html> 
