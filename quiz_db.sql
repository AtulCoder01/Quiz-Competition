-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 10:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `que_first_level1_tb`
--

CREATE TABLE `que_first_level1_tb` (
  `que_id` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_first_level1_tb`
--

INSERT INTO `que_first_level1_tb` (`que_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 4),
(2, 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 2),
(3, 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 3),
(4, 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 1),
(5, 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 2),
(6, 'Any type of storage that is used for holding information between steps in its processing is', 'CPU', 'Primary storage', 'Intermediate storage', 'Internal storage', 3),
(7, 'A name applied by Intel corp. to high speed MOS technology is called', 'HDLC', 'LAP', 'HMOS', 'SDLC', 3),
(8, 'A program component that allows structuring of a program in an unusual way is known as', 'Correlation', 'Coroutine', 'Diagonalization', 'Quene', 2),
(9, 'The radian of a number system', 'Is variable', 'Has nothing to do with digit position value', 'Equals the number of its distinct counting digits', 'Is always an even number', 3),
(10, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que_first_level2_tb`
--

CREATE TABLE `que_first_level2_tb` (
  `que_id` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_first_level2_tb`
--

INSERT INTO `que_first_level2_tb` (`que_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 4),
(2, 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 2),
(3, 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 3),
(4, 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 1),
(5, 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 2),
(6, 'Any type of storage that is used for holding information between steps in its processing is', 'CPU', 'Primary storage', 'Intermediate storage', 'Internal storage', 3),
(7, 'A name applied by Intel corp. to high speed MOS technology is called', 'HDLC', 'LAP', 'HMOS', 'SDLC', 3),
(8, 'A program component that allows structuring of a program in an unusual way is known as', 'Correlation', 'Coroutine', 'Diagonalization', 'Quene', 2),
(9, 'The radian of a number system', 'Is variable', 'Has nothing to do with digit position value', 'Equals the number of its distinct counting digits', 'Is always an even number', 3),
(10, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que_first_level3_tb`
--

CREATE TABLE `que_first_level3_tb` (
  `que_id` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_first_level3_tb`
--

INSERT INTO `que_first_level3_tb` (`que_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 4),
(2, 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 2),
(3, 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 3),
(4, 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 1),
(5, 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 2),
(6, 'Any type of storage that is used for holding information between steps in its processing is', 'CPU', 'Primary storage', 'Intermediate storage', 'Internal storage', 3),
(7, 'A name applied by Intel corp. to high speed MOS technology is called', 'HDLC', 'LAP', 'HMOS', 'SDLC', 3),
(8, 'A program component that allows structuring of a program in an unusual way is known as', 'Correlation', 'Coroutine', 'Diagonalization', 'Quene', 2),
(9, 'The radian of a number system', 'Is variable', 'Has nothing to do with digit position value', 'Equals the number of its distinct counting digits', 'Is always an even number', 3),
(10, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que_second_level1_tb`
--

CREATE TABLE `que_second_level1_tb` (
  `que_id` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_second_level1_tb`
--

INSERT INTO `que_second_level1_tb` (`que_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 4),
(2, 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 2),
(3, 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 3),
(4, 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 1),
(5, 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 2),
(6, 'Any type of storage that is used for holding information between steps in its processing is', 'CPU', 'Primary storage', 'Intermediate storage', 'Internal storage', 3),
(7, 'A name applied by Intel corp. to high speed MOS technology is called', 'HDLC', 'LAP', 'HMOS', 'SDLC', 3),
(8, 'A program component that allows structuring of a program in an unusual way is known as', 'Correlation', 'Coroutine', 'Diagonalization', 'Quene', 2),
(9, 'The radian of a number system', 'Is variable', 'Has nothing to do with digit position value', 'Equals the number of its distinct counting digits', 'Is always an even number', 3),
(10, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que_second_level2_tb`
--

CREATE TABLE `que_second_level2_tb` (
  `que_id` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_second_level2_tb`
--

INSERT INTO `que_second_level2_tb` (`que_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 4),
(2, 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 2),
(3, 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 3),
(4, 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 1),
(5, 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 2),
(6, 'Any type of storage that is used for holding information between steps in its processing is', 'CPU', 'Primary storage', 'Intermediate storage', 'Internal storage', 3),
(7, 'A name applied by Intel corp. to high speed MOS technology is called', 'HDLC', 'LAP', 'HMOS', 'SDLC', 3),
(8, 'A program component that allows structuring of a program in an unusual way is known as', 'Correlation', 'Coroutine', 'Diagonalization', 'Quene', 2),
(9, 'The radian of a number system', 'Is variable', 'Has nothing to do with digit position value', 'Equals the number of its distinct counting digits', 'Is always an even number', 3),
(10, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que_second_level3_tb`
--

CREATE TABLE `que_second_level3_tb` (
  `que_id` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_second_level3_tb`
--

INSERT INTO `que_second_level3_tb` (`que_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 4),
(2, 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 2),
(3, 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 3),
(4, 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 1),
(5, 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 2),
(6, 'Any type of storage that is used for holding information between steps in its processing is', 'CPU', 'Primary storage', 'Intermediate storage', 'Internal storage', 3),
(7, 'A name applied by Intel corp. to high speed MOS technology is called', 'HDLC', 'LAP', 'HMOS', 'SDLC', 3),
(8, 'A program component that allows structuring of a program in an unusual way is known as', 'Correlation', 'Coroutine', 'Diagonalization', 'Quene', 2),
(9, 'The radian of a number system', 'Is variable', 'Has nothing to do with digit position value', 'Equals the number of its distinct counting digits', 'Is always an even number', 3),
(10, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que_third_level1_tb`
--

CREATE TABLE `que_third_level1_tb` (
  `que_id` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_third_level1_tb`
--

INSERT INTO `que_third_level1_tb` (`que_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 4),
(2, 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 2),
(3, 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 3),
(4, 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 1),
(5, 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 2),
(6, 'Any type of storage that is used for holding information between steps in its processing is', 'CPU', 'Primary storage', 'Intermediate storage', 'Internal storage', 3),
(7, 'A name applied by Intel corp. to high speed MOS technology is called', 'HDLC', 'LAP', 'HMOS', 'SDLC', 3),
(8, 'A program component that allows structuring of a program in an unusual way is known as', 'Correlation', 'Coroutine', 'Diagonalization', 'Quene', 2),
(9, 'The radian of a number system', 'Is variable', 'Has nothing to do with digit position value', 'Equals the number of its distinct counting digits', 'Is always an even number', 3),
(10, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que_third_level2_tb`
--

CREATE TABLE `que_third_level2_tb` (
  `que_id` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_third_level2_tb`
--

INSERT INTO `que_third_level2_tb` (`que_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 4),
(2, 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 2),
(3, 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 3),
(4, 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 1),
(5, 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 2),
(6, 'Any type of storage that is used for holding information between steps in its processing is', 'CPU', 'Primary storage', 'Intermediate storage', 'Internal storage', 3),
(7, 'A name applied by Intel corp. to high speed MOS technology is called', 'HDLC', 'LAP', 'HMOS', 'SDLC', 3),
(8, 'A program component that allows structuring of a program in an unusual way is known as', 'Correlation', 'Coroutine', 'Diagonalization', 'Quene', 2),
(9, 'The radian of a number system', 'Is variable', 'Has nothing to do with digit position value', 'Equals the number of its distinct counting digits', 'Is always an even number', 3),
(10, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 3);

-- --------------------------------------------------------

--
-- Table structure for table `que_third_level3_tb`
--

CREATE TABLE `que_third_level3_tb` (
  `que_id` bigint(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_third_level3_tb`
--

INSERT INTO `que_third_level3_tb` (`que_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 4),
(2, 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 2),
(3, 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 3),
(4, 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 1),
(5, 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 2),
(6, 'Any type of storage that is used for holding information between steps in its processing is', 'CPU', 'Primary storage', 'Intermediate storage', 'Internal storage', 3),
(7, 'A name applied by Intel corp. to high speed MOS technology is called', 'HDLC', 'LAP', 'HMOS', 'SDLC', 3),
(8, 'A program component that allows structuring of a program in an unusual way is known as', 'Correlation', 'Coroutine', 'Diagonalization', 'Quene', 2),
(9, 'The radian of a number system', 'Is variable', 'Has nothing to do with digit position value', 'Equals the number of its distinct counting digits', 'Is always an even number', 3),
(10, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_details_tb`
--

CREATE TABLE `student_details_tb` (
  `stu_id` bigint(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `course` varchar(10) NOT NULL,
  `years` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `passwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details_tb`
--

INSERT INTO `student_details_tb` (`stu_id`, `name`, `course`, `years`, `mobile`, `dob`, `passwd`) VALUES
(1501504005, 'Test Name', 'B.Tech', 'First', '8888888888', '1999-11-14', 'a152e841783914146e4bcd4f39100686');

-- --------------------------------------------------------

--
-- Table structure for table `student_status_tb`
--

CREATE TABLE `student_status_tb` (
  `stu_id` bigint(15) NOT NULL,
  `level1_status` int(5) NOT NULL DEFAULT 0,
  `level2_status` int(11) NOT NULL DEFAULT 0,
  `level3_status` int(5) NOT NULL DEFAULT 0,
  `level1_marks` int(5) NOT NULL DEFAULT 0,
  `level2_marks` int(5) NOT NULL DEFAULT 0,
  `level3_marks` int(5) NOT NULL DEFAULT 0,
  `level1_attempt_que` int(5) NOT NULL DEFAULT 0,
  `level2_attempt_que` int(5) NOT NULL DEFAULT 0,
  `level3_attempt_que` int(5) NOT NULL DEFAULT 0,
  `level3_true_que` int(5) NOT NULL DEFAULT 0,
  `level2_true_que` int(5) NOT NULL DEFAULT 0,
  `level1_true_que` int(5) NOT NULL DEFAULT 0,
  `level1_wrong_que` int(5) NOT NULL DEFAULT 0,
  `level2_wrong_que` int(5) NOT NULL DEFAULT 0,
  `level3_wrong_que` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_status_tb`
--

INSERT INTO `student_status_tb` (`stu_id`, `level1_status`, `level2_status`, `level3_status`, `level1_marks`, `level2_marks`, `level3_marks`, `level1_attempt_que`, `level2_attempt_que`, `level3_attempt_que`, `level3_true_que`, `level2_true_que`, `level1_true_que`, `level1_wrong_que`, `level2_wrong_que`, `level3_wrong_que`) VALUES
(1501504005, 1, 0, 0, 17, 0, 0, 8, 0, 0, 0, 0, 5, 3, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `que_first_level1_tb`
--
ALTER TABLE `que_first_level1_tb`
  ADD PRIMARY KEY (`que_id`),
  ADD UNIQUE KEY `question` (`question`);

--
-- Indexes for table `student_details_tb`
--
ALTER TABLE `student_details_tb`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `student_status_tb`
--
ALTER TABLE `student_status_tb`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `que_first_level1_tb`
--
ALTER TABLE `que_first_level1_tb`
  MODIFY `que_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
