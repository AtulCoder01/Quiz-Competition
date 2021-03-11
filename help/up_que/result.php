<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quiz_db');

$details = array("B.tech","BCA","DIPLOMA");
$year_details = array("First","Second","Third","Fourth");
?>

<html>
<head>
<title>Quiz Competition</title>
</head>
<body>
<br/>
<h1 align="center" style="text-shadow:3px 3px yellow; font-family:Monotype Corsiva; font-size:24pt; color:#FF0000; text-transform:uppercase; text-decoration:blink; font-weight:bold;" >Rama University, Kanpur</h1>
<br/><h1 align="center">Quiz Competition Result</h1>
<form name="f1" action="insertion.php" method="post">
<table border="5" align="center">

<tr align="center">
<th >S. No. *</th>
<th >Roll Number *</th>
<th>Name *</th>
<th>Course *</th>
<th>Year *</th>
<th>Level1 Marks *</th>
<th>Level2 Marks *</th>
<th>Level3 Marks *</th>
<th>Total Marks *</th>

<tr/>
<?php 
    $count = 0;
	foreach ($details as $x){
		foreach($year_details as $y){
		
			$result=mysqli_query($con,"SELECT * FROM student_details_tb WHERE course='$x'AND years='$y'");
			$num=mysqli_num_rows($result);
			for($i=1;$i<=$num;$i++)
			{
				$row=mysqli_fetch_array($result);
				$stu_id = $row['stu_id'];
				$result1=mysqli_query($con,"SELECT * FROM student_status_tb WHERE stu_id='$stu_id'");
				$num1=mysqli_num_rows($result1);
				$row1 = mysqli_fetch_array($result1);
				$count += 1;
?>
<tr align="center">
<td><?php echo $count; ?></td>
<td><?php echo $row['stu_id']; ?></td>
<td align="left">&nbsp;&nbsp;<?php echo $row['name']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['years']; ?></td>
<td><?php echo $row1['level1_marks']; ?></td>
<td><?php echo $row1['level2_marks']; ?></td>
<td><?php echo $row1['level3_marks']; ?></td>
<td><?php echo $row1['level1_marks']+$row1['level2_marks']+$row1['level3_marks']; ?></td>
<?php
}
		}
	}
?>
<tr/>
</table>
</form>

</body>
</html>
