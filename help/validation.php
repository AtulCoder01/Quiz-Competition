<?php
session_start();
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
echo "Connetion Successfull!";
}else{
echo "Connetion Faillds";
}
	
if(isset($_POST['register'])){
	$stu_id = mysqli_real_escape_string($con, $_POST['roll_no']);
	$stu_name = mysqli_real_escape_string($con, $_POST['f_name']." ".$_POST['l_name']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$dob = mysqli_real_escape_string($con, $_POST['dob']);
	$passwd = mysqli_real_escape_string($con, $_POST['passwd']);
	$cfmpasswd = mysqli_real_escape_string($con, $_POST['cfmpasswd']);	
	
	if(empty($stu_id)){
		array_push($errors, "Roll No. is required");
	}
	if(empty($stu_name)){
		array_push($errors, "Name is required");
	}
	if(empty($mobile)){
		array_push($errors, "Mobile No. is required");
	}
	if(empty($dob)){
		array_push($errors, "DOB is required");
	}
	if(empty($passwd)){
		array_push($errors, "Password is required");
	}
	if($passwd != $cfmpasswd){
		array_push($errors, "Password do not match");	
	}

	if(count($errors) == 0){

		
		
		// Select database
		mysqli_select_db($con, 'quiz_db');
		// Check connection

			$passwd = md5($passwd);
			// check student already exist or not
			$q = "SELECT * FROM student_details_tb WHERE stu_id = '$stu_id' && mobile = '$mobile' && passwd = '$passwd'";
			$chk = mysqli_query($con,$q);
			if(mysqli_num_rows($chk)){
				array_push($errors, "Student already exist");
			}else{
				$_SESSION['stu_id'] = $stu_id;
			        $_SESSION['passwd'] = $passwd;
				$q = "INSERT INTO student_details_tb (stu_id, name, mobile, dob, passwd) VALUES ($stu_id, '$stu_name', '$mobile', '$dob', '$passwd')";
				if(mysqli_query($con, $q)){	
				$q = "INSERT INTO student_status_tb (stu_id) VALUES ($stu_id)";

					if(mysqli_query($con, $q)){
						header('location:profile.php');
					}
				}
			}
	}

}
////////////////////////////////////////////////////////////////////////////////////

/*if(isset($_POST['login'])){
	echo $stu_id = mysqli_real_escape_string($con, $_POST['roll_no']);
	echo $passwd = mysqli_real_escape_string($con, $_POST['passwd']);

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
		/*
			$passwd = md5($passwd);	
			// check student already exist or not
			$q = "SELECT * FROM student_details_tb WHERE stu_id = '$stu_id' && passwd = '$passwd'";
			$chk = mysqli_query($con,$q);
			if(mysqli_num_rows($chk)){
				$_SESSION['stu_id'] = $stu_id
				$_SESSION['passwd'] = $passwd;
				header('location:profile.php');	
			}else{
				array_push($errors, "Roll No./Password is incorrect");
			}*/
	}
	
//}

/////////////////////////////////////////////////////////////////////////////////////
/*if(isset($_POST['forget'])){
	$stu_id = mysqli_real_escape_string($con, $_POST['roll_no']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$dob = mysqli_real_escape_string($con, $_POST['day']."-". $_POST['month']."-".$_POST['year']);
	$newpasswd = mysqli_real_escape_string($con, $_POST['cfnpasswd']);
	$cfmnewpasswd = mysqli_real_escape_string($con, $_POST['cfmnewpasswd']);	

	if(empty($stu_id)){
		array_push($errors, "Roll No. is required");
	}
	if(empty($mobile)){
		array_push($errors, "Mobile No. is required");
	}
	if(empty($dob)){
		array_push($errors, "DOB is required");
	}
	if(empty($newpasswd)){
		array_push($errors, "Password is required");
	}
	if($newpasswd != $newcfmpasswd){
		array_push($errors, "Password do not match");	
	}

	if(count($errors) == 0){

		include('dbDetails.php');
		// Create connection
		$con = mysqli_connect($host, $usr_nm, $usr_passwd);
		// Select database
		mysqli_select_db($con, $db_nm);
		// Check connection
		if (!$con) {
			array_push($errors, "die("Connection failed: " . mysqli_connect_error())");			
		}else{
			$newpasswd = md5($newpasswd);	
			// check student already member our database or nat
			$q = "UPDATE student_details_tb SET passwd = '$newpasswd' WHERE stu_id = '$stu_id' && mobile = '$mobile' && dob = '$dob'";
			if(mysqli_query($con,$q)){
				header('location:login.php');	
			}else{
				array_push($errors, "Enter wrong details!");
			
			}
		}
	}
	// Close connection
	mysqli_close(con);
}*/

// Close connection
mysqli_close($con);
/////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['logout'])){
session_start();
session_destroy();

header('location:login.php');
}
?>
