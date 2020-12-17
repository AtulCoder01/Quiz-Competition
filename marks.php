<?php
session_start();
$stu_id = $_SESSION['stu_id'];
include('dbDetails.php');
$con = mysqli_connect($host, $usr_nm, $usr_passwd);
if($con){
    // Select database
    mysqli_select_db($con, $db_nm);
    $level_status = $_SESSION['level']."_status";
	$q = "SELECT * FROM student_status_tb WHERE stu_id='$stu_id'";
    $result = mysqli_query($con, $q);
    $row=mysqli_fetch_array($result);
    if(isset($_SESSION['stu_id']) && isset($_SESSION['passwd']) && isset($_SESSION['level']) && $row[$level_status] == 1){ 
            $result2 = mysqli_query($con, "SELECT * FROM student_details_tb WHERE stu_id='$stu_id'");
            $row2=mysqli_fetch_array($result2);
            if($row2['years'] == "Fourth"){
                $que_tb = "que_".strtolower('Third')."_".$_SESSION['level']."_tb";
            }else{
                $que_tb = "que_".strtolower($row2['years'])."_".$_SESSION['level']."_tb";
            }
            $status = $_SESSION['level']."_status";
            $marks = $_SESSION['level']."_marks";
            $attempt_que = $_SESSION['level']."_attempt_que";
            $true_que = $_SESSION['level']."_true_que";
            $wrong_que = $_SESSION['level']."_wrong_que";
            $res = mysqli_query($con, "SELECT * FROM $que_tb");
            $total_que = mysqli_num_rows($res); // fetch number of question
            $precent = ($row[$marks] * 100) / ($total_que * 4);
            if($row[$status] == 1){
            echo "<center><b>*** ".str_replace('level', 'Level ', $_SESSION['level'])." Completed ***</b></center><br/>";
            }
            echo "<center>Total Questions : ".$total_que."</center><br/>";
            echo "<center>Attempt Questions : ".$row[$attempt_que]."</center><br/>";
            echo "<center>True Questions : ".$row[$true_que]."</center><br/>";
            echo "<center>False Questions : ".$row[$wrong_que]."</center><br/>";
            if($_SESSION['level'] == "level1"){
                $l = 14;
            }elseif($_SESSION['level'] == "level2"){
                $l = 14;
            }elseif($_SESSION['level'] == "level3"){
                $l = 14;
            }

            if($row[$marks] >= $l){
            echo "<center>Total marks : ".$row[$marks]." (".number_format($precent,2)."%)</center><br/>";
            }else{
                echo "<center>Total marks : ".$row[$marks]." (DISQUALIFIED)</center><br/>";
            }
            
    }else{
       header('location:index.php');
    }
    mysqli_close($con);	
}else{
	array_push($errors, "Databases connection faileds!");
}
?>

