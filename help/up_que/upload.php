<?php
	$level = "level3"; 
	$years = "third";
	echo "<center><h1>Upload Question ".ucfirst($years)." Year ".str_replace('level', 'Level ', $level)."</h1><Center>";
if(isset($_POST['upload'])){
	$que = $_POST['que'];
	$choice1 = $_POST['choice1'];
	$choice2 = $_POST['choice2'];
	$choice3 = $_POST['choice3'];
	$choice4 = $_POST['choice4'];
	$ans = $_POST['ans'];

	//$table = "que_".$years."_".$level."_tb";
	

	//$con = mysqli_connect("localhost", "root", "", "quiz_db");
	if($con){
		$chk = mysqli_query($con, "INSERT INTO $table (question, choice1, choice2, choice3, choice4, answer) VALUES ('$que', '$choice1', '$choice2', '$choice3', '$choice4', $ans)");
		if($chk){
			echo "<p style='color:#00ff00'>Uploaded Successfully!</p>";
		}else{
			echo "<b style='color:#ff0000'>Uploaded Failds!</b>";
		}
	}else{
		echo "Database Connectivity Failds!";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Question</title>
	<script language="javascript" type="text/javascript" src="vali.js"></script>
</head>
<form action="upload.php" method="post">
<body>
<br/>
<table border="5" bgcolor="swan" align="center" vlign="middle" cellspacing="2" cellpadding="2">
	<tr>
	<td><textarea placeholder="Write Question..." rows="4" name="que" cols="57" required></textarea></td>
	</tr>
	<tr>
	<td><input type="text" name="choice1" placeholder="Choice 1..." size="50" required></td>
	</tr>
	<tr>
	<td><input type="text" name="choice2" placeholder="Choice 2..." size="50" required></td>
	</tr>
	<tr>
	<td><input type="text" name="choice3" placeholder="Choice 3..." size="50" required></td>
	</tr>
	<tr>
	<td><input type="text" name="choice4" placeholder="Choice 4..." size="50" required></td>
	</tr>
	<tr>
	<td><input type="text" name="ans" placeholder="Answer...e.g. 1,2,3,4" size="50" maxlength="1" required onkeypress="return isNumber(event)"></td>
	</tr>	
	<tr align="center">
	<td><input type="submit" name="upload" value="Upload"></td>
	</tr>	
	</table>
</form>
</body>
</html>





























