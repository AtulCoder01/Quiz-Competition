<?php 
	session_start();
	$stu_nm = "";
	if(isset($_SESSION['stu_id']) && isset($_SESSION['passwd'])){
		include('link.php');
		include('dbDetails.php');
		// Create connection
		$con = mysqli_connect($host, $usr_nm, $usr_passwd);
		// Select database
		mysqli_select_db($con, $db_nm);
		// Check connection
			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());			
			}else{
				$stu_id = $_SESSION['stu_id'];
				$passwd = $_SESSION['passwd'];
				$q = "SELECT * FROM student_details_tb WHERE stu_id = '$stu_id' && passwd = '$passwd'";
				$chk = mysqli_query($con,$q);
				if(mysqli_num_rows($chk)){
						$row=mysqli_fetch_array($chk);
						$stu_nm=$row['name'];
				}else{
						array_push($errors, "Student already exist");
					}	
			
		}
	}else{
		header('location:index.php');
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
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/index.css" />
<!--===============================================================================================-->
</head>
<body>
<h2 align="center" style="color :green">Welcome!&nbsp;<?php echo $stu_nm; ?></h2>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo $url; ?>/images/profile.png');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="" method="post">
					<div class="login100-form-avatar">
						<a href="<?php echo $url; ?>/index.php"><img src="<?php echo $url; ?>/images/llogo.png" alt="AVATAR"></a>s
                        <br/><br/><br/><br/><br/>
                    </div>
					<span class="login100-form-title p-t-20 p-b-45">
						<b>QUIZ COMPETITION</b>
					</span>
                    <br/><br/><br/><br/><br/><br/><br/>
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" value="level1" formaction="<?php echo $url; ?>/level.php" name="level">
							<h><b>LEVEL 1</b></h>
						</button>
					</div>
                    <br/><br/><br/><br/>
                    <div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" value="level2" formaction="<?php echo $url; ?>/level.php" name="level">
							<h><b>LEVEL 2</b></h>
						</button>
					</div>
                    <br/><br/><br/><br/>
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" value="level3" formaction="<?php echo $url; ?>/level.php" name="level">
							<h><b>LEVEL 3</b></h>
						</button>
					</div>
                    <br/><br/><br/><br/>
                    <div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" formaction="<?php echo $url; ?>/server.php" name="logout">
							<h><b>LOG OUT</b></h>
						</button>
					</div>

					</form>
			</div>
		</div>
	</div>

</body>
</html>
