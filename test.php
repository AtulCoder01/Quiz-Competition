
<?php
session_start();
  // only once loaded page
if(!isset($_SESSION['loaded'])){
    $_SESSION['loaded'] = 1;


include('link.php');
$errors = array();
include('random.php');

if(isset($_SESSION['stu_id']) && isset($_SESSION['passwd']) && isset($_POST['instruction'])){
	include('dbDetails.php');
	$con = mysqli_connect($host, $usr_nm, $usr_passwd);
	if($con){
		// Select database
		mysqli_select_db($con, $db_nm);
    // Check connection
    $stu_id = $_SESSION['stu_id'];
   // question table
    $que_table = $_SESSION['que_table'];
    $level_tb = $_SESSION['level']."_status";
    mysqli_query($con, "UPDATE student_status_tb SET $level_tb='1' WHERE stu_id='$stu_id'");// for complete level
		$q = "SELECT * FROM $que_table";
		$count = mysqli_query($con, $q);
		$max = mysqli_num_rows($count);
    $random_array = nonRepeat(1, $max, $max);
		$_SESSION['random_array'] = $random_array;
			
	}else{
    array_push($errors, "Databases connection faileds!");
  }	 

}else{
  header('location:profile.php');
  }
}else{
  echo "<script>alert('You refreshed, your quiz is over');</script>";
  echo "<script>location.href='verify_que.php';</script>";
}
?>


<html>
<head>

  <title id="time">TimeLeft</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="<?php echo $url; ?>/images/icons/icon.ico"/>
	<link rel="stylesheet" href="<?php echo $url; ?>/css/test.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/css/testutil.css">

  <script language="javascript" type="text/javascript" src="<?php echo $url; ?>/js/timer.js"></script>
  <script language="javascript" type="text/javascript" src="<?php echo $url; ?>/js/test.js"></script>
  <script language="javascript" type="text/javascript">
  window.oncontextmenu = function () {
    alert("Right click disable!");
    return false;  
    }
  </script>

 </head>
<body onload="timeout()" onKeyDown ="showKeyCode();">
<script type="text/javascript">  var timeLeft="<?php echo ($_SESSION['total_que'] * 60);?>";		  </script>

<form action="verify_que.php" name="test_form" id="test_form" method="post">
<br>
<center><h2>Welcome to Quiz Comptition</h2></center> 
<br>
<div class="container">

    <?php
      $num = 1;
      foreach ($random_array as $id){
        $result = mysqli_query($con, "SELECT * FROM $que_table WHERE que_id = '$id'");
        $row=mysqli_fetch_array($result);  
           
    ?>
  <table class="table table-bordered">
    <thead>
     <tr>
        <th><pre><?php echo $num.". ".$row['question']; ?></pre></th>
      </tr>
    </thead>
    <tbody>
        <?php
          $repeat_opt = nonRepeat(1, 4, 4);
            foreach ($repeat_opt as $opt_id){
                $choice = "choice".$opt_id;
        ?>
          <tr>
            <td><input type="radio" name="click<?php echo $id; ?>" value="<?php echo $opt_id; ?>">&nbsp;<?php echo $row[$choice]; ?></td>
          </tr>
          <?php
            }
          ?>
    </tbody>
  
  </table>
  <br>
  <?php
      $num += 1;
      }
      mysqli_close($con); 
  ?><center>
   
    <input type="submit" value="Submit" name= "test" class="btn btn-primary" />
    </center><br/><br/>
</div>
</form>

</body>
</html>