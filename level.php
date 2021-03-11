<?php
session_start();
$stu_id = $_SESSION['stu_id'];
$level = $_POST['level'];
$_SESSION['level'] = $level;
$l1 = 14;
$l2 = 14;
  if(isset($_SESSION['stu_id']) && isset($_SESSION['passwd']) && isset($_POST['level'])){
    
    include('dbDetails.php');
    $con = mysqli_connect($host, $usr_nm, $usr_passwd);
    if($con){
      // Select database
      mysqli_select_db($con, $db_nm);
      $q = "SELECT * FROM student_status_tb WHERE stu_id='$stu_id'";
      $result = mysqli_query($con, $q);
      $row=mysqli_fetch_array($result);
      
      //level1 check status
      if($row['level1_status'] == 0 && $level == "level1"){
        header('location:instruction.php');
      }elseif($row['level1_status'] == 1 && $level == "level1"){
        header('location:marks.php');
      }

      if($row['level1_marks'] < $l1 && $level == "level2" && $row['level1_status'] == 1){
          unset($_SESSION['level']);//for no direct open test, marks,instruction
          echo "<script>alert('You are Disqualified!')</script>";
          echo "<script>location.href = 'profile.php'</script>";
      }else{    
      //level2 check status
        if($row['level2_status'] == 0 && $level == "level2" && $row['level1_status'] == 1){
          header('location:instruction.php');
        }elseif($row['level2_status'] == 0 && $level == "level2" ){
          if($row['level1_status'] == 0) {
            unset($_SESSION['level']);
            echo "<script>alert('First complete Level 1');</script>";
            echo "<script>location.href = 'profile.php'</script>";
          }      
        }elseif($row['level2_status'] == 1 && $level == "level2"){
            header('location:marks.php');
        }
      }
     
      if(($row['level1_marks'] < $l1 && $level == "level3") && $row['level1_status'] == 1|| ($row['level1_marks'] >= $l1 && $row['level2_marks'] < $l2 && $level == "level3" && $row['level2_status'] == 1)){
          unset($_SESSION['level']);
          echo "<script>alert('You are Disqualified!');</script>";
          echo "<script>location.href = 'profile.php'</script>";
      }else{ 
          //level3 check status
          if($row['level3_status'] == 0 && $level == "level3" && $row['level1_status'] == 1 && $row['level2_status'] == 1){
            header('location:instruction.php');
          }elseif($row['level3_status'] == 0 && $level == "level3"){
              if($row['level1_status'] == 0 && $row['level2_status'] == 0) {
                unset($_SESSION['level']);
                echo "<script>alert('First complete Level 1 & Level 2');</script>";
                echo "<script>location.href = 'profile.php'</script>";
              } elseif($row['level2_status'] == 0 && $row['level1_status'] == 1){
                unset($_SESSION['level']);
                echo "<script>alert('First complete Level2');</script>";
                echo "<script>location.href = 'profile.php'</script>";
              } 
          }elseif($row['level3_status'] == 1 && $level == "level3"){
              header('location:marks.php');
          }
      
      }
    }
  
  }else{
    header('location:profile.php');
  }
?>
