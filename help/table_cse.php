<?php
// Create table student details 
$q = "CREATE TABLE student_details_tb (stu_id varchar(11) PRIMARY KEY, name varchar(30) NOT NULL, course varchar(10) NOT NULL, years varchar(10) NOT NULL, mobile varchar(11) UNIQUE NOT NULL, dob date NOT NULL, passwd varchar(50) NOT NULL);";
// INSERT table 
$q = "INSERT INTO student_details_tb (stu_id, name, course, branch, mobile, dob, passwd) VALUES ($stu_id, $stu_name, $course, $branch, $mobile, $dob, $passwd)";

// Create table status details 
$q = "CREATE TABLE student_status_tb (stu_id varchar(11) PRIMARY KEY, level1_status int(2) UNSIGNED DEFAULT 0, level2_status int(2) UNSIGNED DEFAULT 0, level3_status int(2) UNSIGNED DEFAULT 0, level1_marks int(5) DEFAULT 0, level2_marks int(5) DEFAULT 0, level3_marks int(5) DEFAULT 0, level1_true_que int(5) UNSIGNED DEFAULT 0, level2_true_que int(5) UNSIGNED DEFAULT 0, level3_true_que int(5) UNSIGNED DEFAULT 0, level1_wrong_que int(5) UNSIGNED DEFAULT 0, level2_wrong_que int(5) UNSIGNED DEFAULT 0, level3_wrong_que int(5) UNSIGNED DEFAULT 0, level1_attempt_que int(5) UNSIGNED DEFAULT 0, level2_attempt_que int(5) UNSIGNED DEFAULT 0, level3_attempt_que int(5) UNSIGNED DEFAULT 0);";
// INSERT table 
$q = "INSERT INTO student_details_tb (stu_id) VALUES ($stu_id)";

// Create table status details 
$q = "CREATE TABLE que_first_level1_tb (que_id int(3) PRIMARY KEY AUTO_INCREMENT, question varchar(500) UNIQUE NOT NULL, choice1 varchar(100) NOT NULL, choice2 varchar(100) NOT NULL, choice3 varchar(100) NOT NULL, choice4 varchar(100) NOT NULL, answer int(2) NOT NULL);";
// INSERT table student details 
$q = "INSERT INTO que_level1_tb (question, choice1, choice2, choice3, choice4, answer) VALUES ("Which language used in AI ?", "C", "Java", "Prolog", "Ruby", 3)";

// sea marks
select level1_status,level1_attempt_que,level1_marks,level1_true_que,level1_wrong_que from student_status_tb;

// change column name
ALTER TABLE que_btech_cse_level1_tb RENAME COLUMN choise1 to choice;
or
ALTER TABLE `blog` CHANGE COLUMN `read-more` `read_more` VARCHAR(255) NOT NULL;
?>

 
f (!$con) {
			array_push($errors, "die('Connection failed: ' . mysqli_connect_error())");		
		}else{

INSERT INTO que_level1_tb (question, choice1, choice2, choice3, choice4, answer) VALUES (" ?", "", "", "", "", 3);
































