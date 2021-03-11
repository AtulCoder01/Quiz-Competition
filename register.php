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
	<title>REGISTER HERE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="<?php echo $url; ?>/images/icons/icon.ico"/>

	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/registerutil.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/register.css">

	<script language="javascript" type="text/javascript" src="<?php echo $url; ?>/js/validation.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo $url; ?>/images/back.jpg');">
			<div class="wrap-login100">

				<form class="login100-form validate-form" name="form_reg" action="<?php echo $url; ?>/register.php" method="post" onSubmit="return isMatchReg();">
					
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

					<div class="wrap-input100 validate-input" data-validate = "FirstName">
						<input class="input100" type="text" name="f_name" placeholder="First Name" required title="Please Enter First Name!">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "LastName">
						<input class="input100" type="text" name="l_name" placeholder="Last Name" required title="Please Enter Last Name!">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Course">
						
                        <select class="input100" name="course" placeholder="Course" required>
								<option  value="" style="background-color: #757fff;">Course</option>
                                <option style="background-color: #757fff;" >B.Tech</option>
								<option style="background-color: #757fff;">BCA</option>
								<option style="background-color: #757fff;">DIPLOMA</option>
								
							</select>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Branch">
						
                        <select class="input100" name="branch" required title="Please select Year" required>
								<option value="" style="background-color: #757fff;">Year</option>
                                <option style="background-color: #757fff;" >First</option>
								<option style="background-color: #757fff;">Second</option>
								<option style="background-color: #757fff;">Third</option>
								<option style="background-color: #757fff;">Fourth</option>
															
							</select>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Enter rollnum"  >
						<input class="input100" type="text" name="roll_no" placeholder="Roll Number" maxlength="10" pattern=".{10,}" required title="Enter only 10 Numbers" onkeypress="return isNumber(event)">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Mobile number" >
						<input class="input100" type="text" name="mobile" placeholder="Mobile No." maxlength="10" pattern=".{10,}" required title="Enter only 10 Numbers" onkeypress="return isNumber(event)">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "D.O.B">
						<input class="input100" type="text" name="dob" placeholder="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="passwd" placeholder="Password" pattern=".{6,14}" required title="Enter 6 to 14 characters"> 
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="cfmpasswd" placeholder="Confirm Password" pattern=".{6,14}" required title="Enter 6 to 14 characters">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						
					</div>
					
                    <br/><br/>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="register">
							Register
						</button>
					</div>

                    <div class="text-center p-t-70">
						<p style="color:#fff">Already have an Account? </p><a class="txt1" href="<?php echo $url; ?>/login.php" style="text-decoration:none">
							LogIn Here
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>
