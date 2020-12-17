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
	<title>Forgot</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo $url; ?>/images/icons/icon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/forgotutil.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/forgot.css">
<!--===============================================================================================-->
<script language="javascript" type="text/javascript" src="<?php echo $url; ?>/js/validation.js"></script>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo $url; ?>/images/back.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" name="form_for"  action="<?php echo $url; ?>/forgot.php" method="post" onSubmit="return isMatchFor();">
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
                    <div class="wrap-input100 validate-input" data-validate = "Mobile number">
						<input class="input100" type="text" name="mobile" placeholder="Mobile No." maxlength="10" pattern=".{10,}" required title="Enter only 10 Numbers" onkeypress="return isNumber(event)">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "D.O.B">
						<input class="input100" type="text" name="dob" placeholder="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="newpasswd" placeholder="New Password" pattern=".{6,14}" required title="Enter 6 to 14 characters">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="cfmnewpasswd" placeholder="Confirm New Password" pattern=".{6,14}" required title="Enter 6 to 14 characters">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    <br/><br/>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="forget">
							Confirm
						</button>
					</div>

                </form>
			</div>
		</div>
	</div>
</body>
</html> 
