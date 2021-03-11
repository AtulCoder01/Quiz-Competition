<?php 
	session_start();
	include('link.php');
	if(isset($_SESSION['stu_id']) && isset($_SESSION['passwd'])){
		header('location:profile.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>QUIZ COMPETITION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo $url; ?>/images/icons/icon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/index.css">
<!--===============================================================================================-->
</head>
<body>
    
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo $url; ?>/images/back.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form">
                  <div>  
                   <img src="<?php echo $url; ?>/images/logo.png" alt="Rama University">
                      <br/><br/>
                    </div>
                    
            
					<div class="login100-form-avatar">
                        
						<img src="<?php echo $url; ?>/images/llogo.png" alt="AVATAR">
                        <br/><br/><br/><br/><br/>
                    </div>
					<span class="login100-form-title p-t-20 p-b-45">
						<b>QUIZ COMPETITION</b>
					</span>
                    <br/><br/><br/><br/><br/><br/><br/>
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" formaction="<?php echo $url; ?>/login.php">
							<h><b><a href="<?php echo $url; ?>/login.php" style="text-decoration:none">Login</a></b></h>
						</button>
					</div>
                    <br/><br/><br/><br/>
                    <div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" formaction="<?php echo $url; ?>/register.php">
                            <h><b><a href="<?php echo $url; ?>/register.php" style="text-decoration:none">Register</a></b></h>
						</button>
					</div>

					</form>
			</div>
		</div>
        <center><h5> Developed by-> Aditya Kumar,  Atul Kumar and Swapnil Jaiswal<h5
                                                                                                   ></center>
	</div>
    

</body>
</html>