-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 08:36 AM
-- Server version: 5.6.30
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
('admin1', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `nonAcademic`
--

CREATE TABLE IF NOT EXISTS `nonAcademic` (
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `nid` varchar(12) NOT NULL,
  `home_address` text NOT NULL,
  `current_address` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nonAcademic_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `non_academic_positions`
--

CREATE TABLE IF NOT EXISTS `non_academic_positions` (
  `position_id` int(11) NOT NULL,
  `position` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_academic_positions`
--

INSERT INTO `non_academic_positions` (`position_id`, `position`, `description`) VALUES
(1, 'Clerk', 'a clerk'),
(2, 'Accountant', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `home_address` text NOT NULL,
  `current_address` text NOT NULL,
  `previous_school` varchar(20) NOT NULL,
  `entering_class` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mothers_name` varchar(30) NOT NULL,
  `mothers_id` varchar(12) NOT NULL,
  `mothers_job` varchar(20) NOT NULL,
  `mothers_working_address` text NOT NULL,
  `mothers_email` varchar(50) NOT NULL,
  `fathers_name` varchar(30) NOT NULL,
  `fathers_id` varchar(12) NOT NULL,
  `fathers_job` varchar(20) NOT NULL,
  `fathers_working_address` text NOT NULL,
  `fathers_email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first_name`, `middle_name`, `last_name`, `dob`, `home_address`, `current_address`, `previous_school`, `entering_class`, `email`, `mothers_name`, `mothers_id`, `mothers_job`, `mothers_working_address`, `mothers_email`, `fathers_name`, `fathers_id`, `fathers_job`, `fathers_working_address`, `fathers_email`, `password`, `student_id`, `time_stamp`) VALUES
('Pramodya', '', 'Abeysinghe', '0000-00-00', '', '', '', '', 'pramodyaabeysinghe@gmail.com', 'Pramodya Abeysinghe', '', '', '', 'pramodyaabeysinghe@gmail.com', 'Pramodya Abeysinghe', '', '', '', 'pramodyaabeysinghe@gmail.com', '', '20171017', '2017-10-17 16:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `nid` varchar(12) NOT NULL,
  `home_address` text NOT NULL,
  `current_address` text NOT NULL,
  `previous_school` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `teachers_id` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`first_name`, `middle_name`, `last_name`, `dob`, `nid`, `home_address`, `current_address`, `previous_school`, `email`, `password`, `teachers_id`, `timestamp`) VALUES
('Pramodya', '', 'Abeysinghe', '0000-00-00', '', '', '', '', 'pramodyaabeysinghe@gmail.com', '12121212', '201710t', '2017-10-18 08:08:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `nonAcademic`
--
ALTER TABLE `nonAcademic`
  ADD PRIMARY KEY (`nonAcademic_id`);

--
-- Indexes for table `non_academic_positions`
--
ALTER TABLE `non_academic_positions`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teachers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `non_academic_positions`
--
ALTER TABLE `non_academic_positions`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
