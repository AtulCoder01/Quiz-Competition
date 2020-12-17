<?php
session_start();
$level = $_SESSION['level'];
include('dbDetails.php');
if(isset($_SESSION['stu_id']) && isset($_SESSION['passwd'])){
  $stu_id = $_SESSION['stu_id'];
    $con = mysqli_connect($host, $usr_nm, $usr_passwd);
    if($con){
      // Select database
      mysqli_select_db($con, $db_nm);
      // Check connection
        $table = $_SESSION['que_table'];
        $marks_tb = $level."_marks";
        $attempt_tb = $level."_attempt_que";
        $true_que_tb = $level."_true_que";
        $wrong_que_tb = $level."_wrong_que";
        $random_array = $_SESSION['random_array'];
        $true_que = 0;
        $wrong_que = 0;
        foreach ($random_array as $id){
          $que_id = "click".$id;
          $q = "SELECT * FROM $table WHERE que_id = '$id'";
          $result = mysqli_query($con, $q);
          $row=mysqli_fetch_array($result);
          if($_POST[$que_id] == $row['answer']){
            $true_que  += 1;
          }elseif($_POST[$que_id] == ""){
            continue;
          }else{
            $wrong_que  += 1;
          }
        }
        $total_num = ($true_que * 4) - $wrong_que ;
        $attempt_que = $true_que + $wrong_que ;
        $q = "UPDATE student_status_tb SET $marks_tb='$total_num', $attempt_tb='$attempt_que', $true_que_tb='$true_que', $wrong_que_tb='$wrong_que' WHERE stu_id='$stu_id'";
        if(mysqli_query($con, $q)){
          header('location:profile.php');
        }
    }
  mysqli_close($con);
}
unset($_SESSION['loaded']);
?>
