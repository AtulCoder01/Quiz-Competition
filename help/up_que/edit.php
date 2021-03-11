<?php
	$level = "level3";
	$years = "second";
	echo "<center><h1>Update Question ".ucfirst($years)." Year ".str_replace('level', 'Level ', $level)."</h1><Center>";
	//$table = "que_".$years."_".$level."_tb";
	//$con = mysqli_connect("localhost", "root", "", "quiz_db");
	$res = mysqli_query($con, "SELECT * FROM $table");
	$total_que = mysqli_num_rows($res);
if(isset($_POST['update'])){	
	if($con){
		for ($i = 1; $i <= $total_que; $i += 1){
			$question = "que".$i ;
			$opt1 =	"choice_".$i."_1";
			$opt2 =	"choice_".$i."_2";
			$opt3 =	"choice_".$i."_3";
			$opt4 =	"choice_".$i."_4";
			$answers = "ans".$i ;
			$que = $_POST[$question];
			$choice1 = $_POST[$opt1];
			$choice2 = $_POST[$opt2];
			$choice3 = $_POST[$opt3];
			$choice4 = $_POST[$opt4];
			$ans = $_POST[$answers];
			$chk = mysqli_query($con, "UPDATE $table SET question='$que', choice1='$choice1', choice2='$choice2', choice3='$choice3', choice4='$choice4', answer='$ans' WHERE que_id='$i'");
			if($chk){
				echo "Q. ".$i." ----> <p style='color:#00ff00'>Uploaded Successfully!</p>";
			}else{
				echo "Q. ".$i." ----> <b style='color:#ff0000'>Uploaded Failds!</b>";
			}
		}
	}else{
		echo "Database Connectivity Failds!";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Question</title>
	<script language="javascript" type="text/javascript" src="vali.js"></script>
</head>
<form action="edit.php" method="post">
<body>
<br/>
<?php
	for($i =1 ; $i <= $total_que; $i += 1){
		$result = mysqli_query($con, "SELECT * FROM $table WHERE que_id='$i'");
		$row = mysqli_fetch_array($result);
?>
<table border="5" bgcolor="swan" align="center" vlign="middle" cellspacing="2" cellpadding="2">
	<tr align="center">
	<th>Question : <?php echo $i; ?></th>
	</tr>
	<tr>
	<td><textarea placeholder="Write Question..." rows="4" name="que<?php echo $i; ?>" cols="57" required><?php echo $row['question']; ?></textarea></td>
	</tr>
	<tr>
	<td><input type="text" name="choice_<?php echo $i; ?>_1" value="<?php echo $row['choice1']; ?>" placeholder="Choice 1..." size="50" required></td>
	</tr>
	<tr>
	<td><input type="text" name="choice_<?php echo $i; ?>_2"  value="<?php echo $row['choice2']; ?>" placeholder="Choice 2..." size="50" required></td>
	</tr>
	<tr>
	<td><input type="text" name="choice_<?php echo $i; ?>_3"  value="<?php echo $row['choice3']; ?>" placeholder="Choice 3..." size="50" required></td>
	</tr>
	<tr>
	<td><input type="text" name="choice_<?php echo $i; ?>_4"  value="<?php echo $row['choice4']; ?>" placeholder="Choice 4..." size="50" required></td>
	</tr>
	<tr>
	<td><input type="text" name="ans<?php echo $i; ?>"  value="<?php echo $row['answer']; ?>" placeholder="Answer...e.g. 1,2,3,4" size="50" maxlength="1" required onkeypress="return isNumber(event)"></td>
	</tr>	
	</table>
<?php
	}
?>
	<br/>
	<center><input type="submit" name="update" value="Update"></center>	
	</br>
</form>
</body>
</html>