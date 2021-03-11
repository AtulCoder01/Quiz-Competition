
<?php
session_start();
$errors = array();
$stu_id = $_SESSION['stu_id'];
include('link.php');
include('dbDetails.php');
$con = mysqli_connect($host, $usr_nm, $usr_passwd);
if($con){
    // Select database
    mysqli_select_db($con, $db_nm);
    $level_status = $_SESSION['level']."_status";
	$q = "SELECT * FROM student_status_tb WHERE stu_id='$stu_id'";
    $result1 = mysqli_query($con, $q);
    $row1=mysqli_fetch_array($result1);
	$row1[$level_status];
	if(isset($_SESSION['stu_id']) && isset($_SESSION['passwd']) && isset($_SESSION['level']) && $row1[$level_status] == 0){
		$result2 = mysqli_query($con, "SELECT * FROM student_details_tb WHERE stu_id='$stu_id'");
		$row2=mysqli_fetch_array($result2);
		if($row2['years'] == "Fourth"){
			$que_table = "que_".strtolower('Third')."_".$_SESSION['level']."_tb"; 
		}else{
			$que_table = "que_".strtolower($row2['years'])."_".$_SESSION['level']."_tb";
		}
		$_SESSION['que_table'] = $que_table;
		$row = mysqli_query($con, "SELECT * FROM $que_table");
		$total_que = mysqli_num_rows($row);
		$_SESSION['total_que'] = $total_que;
	}else{
		header('location:index.php');
	}
		mysqli_close($con);		
}else{
	array_push($errors, "Databases connection faileds!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>INSTRUCTIONS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo $url; ?>/images/icons/icon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/insutil.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/ins.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo $url; ?>/images/back.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<div class="login100-form-avatar">
						<a href="<?php echo $url; ?>/profile.php"><img src="<?php echo $url; ?>/images/llogo.png" alt="AVATAR"></a>
                    </div>
					</span>

				    <span class="login100-form-title p-b-34 p-t-27">
						Instrustions
					</span>

                    <p>1. Total number of questions : <?php echo $total_que; ?></p>
                    <p>2. Time Alloted : <?php echo $total_que; ?> Mins</p>
                    <p>3. Each Questions carry 4 marks & 1 negative mark on wrong Answer</p>
                    <p>4. DO NOT REFRESH THE PAGE BECAUSE YOU ARE NOT ALLOWED TO ATTEMPT IT AGAIN</p>
                    <br/><br/><br/>
                    <center><p>All The Best</p></center>
                    <br/><br/>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="ins_btn" name="instruction" formaction="<?php echo $url; ?>/test.php">
							Start Test
						</button>
					</div>

                    
				</form>
			</div>
		</div>
	</div>
</body>
</html> 