<?php
// session_start();
	$stu_id = "";
	$stu_name = "";
	$mobile = "";
	$dob = "";
	$passwd = "";
	$errors = array();
	// Create connection
	include('dbDetails.php');
	$con = mysqli_connect($host, $usr_nm, $usr_passwd);
	if($con){

if(isset($_POST['register'])){
	$stu_id = mysqli_real_escape_string($con, $_POST['roll_no']);
	$stu_name = mysqli_real_escape_string($con, $_POST['f_name']." ".$_POST['l_name']);
	$course = mysqli_real_escape_string($con, $_POST['course']);
	$branch = mysqli_real_escape_string($con, $_POST['branch']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$dob = mysqli_real_escape_string($con, $_POST['dob']);
	$passwd = mysqli_real_escape_string($con, $_POST['passwd']);
	$cfmpasswd = mysqli_real_escape_string($con, $_POST['cfmpasswd']);	
	
		// Select database
		mysqli_select_db($con, $db_nm);
		// Check connection

			$passwd = md5($passwd);
			// check student already exist or not
			$q = "SELECT * FROM student_details_tb WHERE stu_id = '$stu_id' or mobile = '$mobile'";// AND passwd = '$passwd'
			$chk = mysqli_query($con,$q);
			if($chk){

			
				if(mysqli_num_rows($chk)){
					array_push($errors, "Student already exist!");
				}else{
					$q = "INSERT INTO student_details_tb (stu_id, name, course, years, mobile, dob, passwd) VALUES ('$stu_id', '$stu_name', '$course', '$branch', '$mobile', '$dob', '$passwd')";
					if(mysqli_query($con, $q)){	
					$q = "INSERT INTO student_status_tb (stu_id) VALUES ('$stu_id')";

						if(mysqli_query($con, $q)){						
							$_SESSION['stu_id'] = $stu_id;
							$_SESSION['passwd'] = $passwd;
							echo "<script>alert('User Registration Successfully!');</script>";
							echo "<script>location.href = 'profile.php'</script>";					
						}
					}
				}
			}else{
				echo "<script>alert('User Registration Failed! \n Please try again...');</script>";
			}

}
////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['login'])){
	$stu_id = mysqli_real_escape_string($con, $_POST['roll_no']);
	$passwd = mysqli_real_escape_string($con, $_POST['passwd']);

	if(empty($stu_id)){

		array_push($errors, "Roll No. is required");
	}
	if(empty($passwd)){
		array_push($errors, "Password is required");
	}

	if(count($errors) == 0){

		// Select database
		mysqli_select_db($con, $db_nm);
		// Check connection
			$passwd = md5($passwd);	
			// check student already exist or not
			$q = "SELECT * FROM student_details_tb WHERE stu_id = '$stu_id' AND passwd = '$passwd'";
			$chk = mysqli_query($con,$q);
			if(mysqli_num_rows($chk)){				
				$_SESSION['stu_id'] = $stu_id;
				$_SESSION['passwd'] = $passwd;
				header('location:profile.php');	
			}else{
				array_push($errors, "Roll No. / Password is incorrect");
			}
	}
	
}
//////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['forget'])){
	$stu_id = mysqli_real_escape_string($con, $_POST['roll_no']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$dob = mysqli_real_escape_string($con, $_POST['dob']);
	$newpasswd = mysqli_real_escape_string($con, $_POST['newpasswd']);
	$cfmnewpasswd = mysqli_real_escape_string($con, $_POST['cfmnewpasswd']);	

		// Select database
		mysqli_select_db($con, $db_nm);
		// Check connection
			$newpasswd = md5($newpasswd);	
			// check student already member our database or not
			$q = "SELECT * FROM student_details_tb WHERE stu_id = '$stu_id' AND mobile = '$mobile' AND dob = '$dob'";
			if(mysqli_num_rows(mysqli_query($con,$q))){
				$q = "UPDATE student_details_tb SET passwd = '$newpasswd' WHERE stu_id = '$stu_id' AND mobile = '$mobile' AND dob = '$dob'";
				mysqli_query($con,$q);
				echo "<script>alert('Password Changed Successfully!');</script>";
            	echo "<script>location.href = 'login.php'</script>";	
			}else{
				array_push($errors, "Entered wrong details!");
			
			}

}
// Close connection
mysqli_close($con);
}else{
	array_push($errors, "Databases connection faileds!");
}

/////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['logout'])){
session_start();
session_destroy();

header('location:index.php');
}
?>
