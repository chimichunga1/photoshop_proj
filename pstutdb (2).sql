-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 10:05 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pstutdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'Johndave', 'Johndave27');

-- --------------------------------------------------------

--
-- Table structure for table `choices_table`
--

CREATE TABLE `choices_table` (
  `choices_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `choices_1_description` varchar(250) NOT NULL,
  `choices_2_description` varchar(250) NOT NULL,
  `choices_3_description` varchar(250) NOT NULL,
  `choices_4_description` varchar(250) NOT NULL,
  `choices_1_id` int(11) NOT NULL,
  `choices_2_id` int(11) NOT NULL,
  `choices_3_id` int(11) NOT NULL,
  `choices_4_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices_table`
--

INSERT INTO `choices_table` (`choices_id`, `question_id`, `choices_1_description`, `choices_2_description`, `choices_3_description`, `choices_4_description`, `choices_1_id`, `choices_2_id`, `choices_3_id`, `choices_4_id`) VALUES
(1, 1, 'Philippines', 'P', 'Cebu', 'Manila', 1, 2, 3, 4),
(4, 4, 'Jose Rizal', 'Princess Thea', 'Willie Revillame', 'Tito Sen', 1, 2, 3, 4),
(5, 5, 'Adobe', 'Photoshop', 'CS', 'OK', 1, 2, 3, 4),
(6, 6, '2', '4', 'Choco Choco', 'Bintana', 1, 2, 3, 4),
(7, 7, 'James Gosling', 'Bjarnne Stroustroupe', 'Rodrigo Duterte', 'Jamill', 1, 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `question_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_description` varchar(250) NOT NULL,
  `question_answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_table`
--

INSERT INTO `question_table` (`question_id`, `quiz_id`, `question_description`, `question_answer`) VALUES
(1, 1, 'What is the capital of the Philippines?', 4),
(4, 1, 'National hero of the Philippines?', 1),
(5, 2, 'Meaning of CS6', 3),
(6, 1, '1+1 is equal to?', 1),
(7, 1, 'Who created Java?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_table`
--

CREATE TABLE `quiz_table` (
  `quiz_id` int(11) NOT NULL,
  `quiz_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_table`
--

INSERT INTO `quiz_table` (`quiz_id`, `quiz_description`) VALUES
(1, 'Basic Quiz'),
(2, 'Advance Quiz');

-- --------------------------------------------------------

--
-- Table structure for table `score_table`
--

CREATE TABLE `score_table` (
  `score_id` int(11) NOT NULL,
  `score_info` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `score_remarks` varchar(250) NOT NULL,
  `student_id` int(11) NOT NULL,
  `section_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score_table`
--

INSERT INTO `score_table` (`score_id`, `score_info`, `quiz_id`, `score_remarks`, `student_id`, `section_info_id`) VALUES
(1, 4, 1, 'Perfect', 2, 6),
(2, 2, 1, 'Good', 2, 6),
(3, 0, 1, 'Poor', 2, 6),
(4, 0, 1, 'Poor', 1, 0),
(5, 0, 1, 'Poor', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `section_info_table`
--

CREATE TABLE `section_info_table` (
  `section_info_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `section_confirm_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_info_table`
--

INSERT INTO `section_info_table` (`section_info_id`, `section_id`, `student_id`, `section_confirm_status`) VALUES
(4, 1, 2, 'Confirmed'),
(5, 2, 2, 'Confirmed'),
(6, 3, 2, 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `section_table`
--

CREATE TABLE `section_table` (
  `section_id` int(11) NOT NULL,
  `section_code` varchar(250) NOT NULL,
  `section_name` varchar(250) NOT NULL,
  `section_count` varchar(250) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `section_availability` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_table`
--

INSERT INTO `section_table` (`section_id`, `section_code`, `section_name`, `section_count`, `teacher_id`, `section_availability`) VALUES
(1, 'CS6SEC20181', 'BSCS A41-AM', '1', 1, 'Available'),
(2, 'CS6SEC20182', 'BSCS B4-1 AM', '1', 1, 'Available'),
(3, 'CS6SEC20183', 'My Photoshop Class', '1', 2, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `student_id` int(11) NOT NULL,
  `student_status` varchar(250) NOT NULL,
  `student_firstname` varchar(250) NOT NULL,
  `student_lastname` varchar(250) NOT NULL,
  `student_username` varchar(250) NOT NULL,
  `student_password` varchar(250) NOT NULL,
  `student_session` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`student_id`, `student_status`, `student_firstname`, `student_lastname`, `student_username`, `student_password`, `student_session`) VALUES
(1, 'Active', 'Johnlaine', 'David', 'JohndaveHehe', 'Johndave', 'Session Active'),
(2, 'Active', 'Jasmin Angelica', 'Bonifacio', 'JsmnBnfc', 'Johndave27', 'Session Active');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_table`
--

CREATE TABLE `teacher_table` (
  `teacher_id` int(11) NOT NULL,
  `teacher_username` varchar(250) NOT NULL,
  `teacher_password` varchar(250) NOT NULL,
  `teacher_firstname` varchar(250) NOT NULL,
  `teacher_lastname` varchar(250) NOT NULL,
  `teacher_status` varchar(250) NOT NULL,
  `teacher_session` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_table`
--

INSERT INTO `teacher_table` (`teacher_id`, `teacher_username`, `teacher_password`, `teacher_firstname`, `teacher_lastname`, `teacher_status`, `teacher_session`) VALUES
(1, 'Johndave', 'Johndave27', 'Johndave', 'David', 'Active', 'Session Cleared'),
(2, 'ChrstnMch', 'Panen2000', 'Christina Micah', 'Panen', 'Active', 'Session Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `choices_table`
--
ALTER TABLE `choices_table`
  ADD PRIMARY KEY (`choices_id`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `quiz_table`
--
ALTER TABLE `quiz_table`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `score_table`
--
ALTER TABLE `score_table`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `section_info_table`
--
ALTER TABLE `section_info_table`
  ADD PRIMARY KEY (`section_info_id`);

--
-- Indexes for table `section_table`
--
ALTER TABLE `section_table`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher_table`
--
ALTER TABLE `teacher_table`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `choices_table`
--
ALTER TABLE `choices_table`
  MODIFY `choices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `quiz_table`
--
ALTER TABLE `quiz_table`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `score_table`
--
ALTER TABLE `score_table`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `section_info_table`
--
ALTER TABLE `section_info_table`
  MODIFY `section_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `section_table`
--
ALTER TABLE `section_table`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacher_table`
--
ALTER TABLE `teacher_table`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
