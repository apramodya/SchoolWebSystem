-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 04:00 AM
-- Server version: 5.6.30
-- PHP Version: 5.5.35

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
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
('admin1', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `Announce` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_gallery`
--

CREATE TABLE IF NOT EXISTS `event_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_gallery`
--

INSERT INTO `event_gallery` (`id`, `title`, `slug`, `body`, `post_image`, `created_time`) VALUES
(7, 'Special Practical Session', 'Special-Practical-Session', '<p>Actual lab courses, however, often amount to following a ready-formulated procedure, trying to get the equipment to work, arriving at results that&nbsp;<em>don&rsquo;t</em>&nbsp;clearly demonstrate the concept or relationship they are intended to demonstrate, and following more recipes for computations that don&rsquo;t connect to anything much like &ldquo;understanding&rdquo; in the student&rsquo;s head.</p>\r\n\r\n<p>Since the undergraduate&rsquo;s understanding of science seems more likely to come from a lecture course than a laboratory course (at least if the laboratory course is as characterized in #2), students might get a better understanding of science if they elected to take more science lecture classes.</p>\r\n\r\n<p>However, when science lecture courses require that students also take the corresponding lab course, the disincentive to take more than the minimum number of science classes is huge, because the lab course will chew up a whole afternoon (or more) of the academic week (when students might well be taking some other courses they want or need to take).**</p>\r\n\r\n<p>From the point of view of allocating faculty, the demand for a relatively small student-to-faculty ratio in lab sections means that a science course with a largish lecture and multiple lab sections can account for one science faculty member&rsquo;s entire teaching load in a given term.</p>\r\n', 'lab.jpg', '2017-10-26 11:12:36'),
(11, ' Montessori graduation - 2017', 'Montessori-graduation-2017', '<p>We are soon coming to the end of our current school year and in honor of the time we have spent together and what the future holds, we celebrate with a fun, simple, but very memorable preschool graduation&hellip;</p>\r\n\r\n<p>There are many different thoughts about whether or not it is &ldquo;appropriate&rdquo; for preschoolers to participate in a graduation program or ceremony. I can&rsquo;t answer that for you because I think it all depends on the approach you take and if your approach will be a meaningful and enriching experience for your students and their parents. While you consider what you believe&hellip;</p>\r\n', 'graduation.jpg', '2017-10-26 13:07:33'),
(12, 'STAR DUST Annual Concert 2017', 'STAR-DUST-Annual-Concert-2017', '<p><strong>The Annual concert of the DONUM DEI Institute, Primary section under the title &ldquo;STAR DUST&rdquo; was held on the 14th&nbsp;&amp; 15th&nbsp;of February 2017, respectively at the Bishops College Auditorium.</strong></p>\r\n\r\n<p>The concert was an excellent platform for our students to showcase their hidden talents. The concert is made colourful with a variation of languages and culture in the event. The programme included items in Arabic, English, Sinhala, Tamil and Malay languages.</p>\r\n\r\n<p>As a Shariah compliant school we have taken steps to ensure that the students learn to enjoy what is permitted. Every student had been given an opportunity to take part in this colourful event, which is an important part of their learning process. The students learn to work as a team, respecting each other while enjoying themselves. It surely is a herculean task to enable a force of 1500 students to take part in one concert, but our creative and efficient teachers had made it look very easy with their excellent planning and hard work.</p>\r\n', 'event1.jpg', '2017-10-26 13:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `news_feed`
--

CREATE TABLE IF NOT EXISTS `news_feed` (
  `type` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `news_id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `news` text NOT NULL,
  `posted_by` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_feed`
--

INSERT INTO `news_feed` (`type`, `timestamp`, `news_id`, `title`, `news`, `posted_by`) VALUES
(1, '2017-10-24 04:04:06', 1, 'Staff Meeting', 'A staff meeting will be held at 12 p.m. on 25th of October at main hall.', 'Pramodya'),
(1, '2017-10-24 04:14:22', 2, 'Special meeting', 'A staff meeting will be held at 3 p.m. on 25th of October at main hall.', 'Pramodya'),
(1, '2017-10-24 04:17:29', 3, 'Funeral', 'Funeral of Mrs. Perera''s mother is on 26th October at 3 p.m. in Borella Cemetery.', 'Pramodya'),
(1, '2017-10-24 05:25:01', 4, 'Staff Meeting', 'A staff meeting will be held at 12 p.m. on 28th of October at main hall.', 'admin'),
(2, '2017-10-24 10:39:48', 9, 'Special notice', 'tomorrow is a poya holiday (28th October)', 'admin'),
(1, '2017-10-27 07:04:53', 10, 'now', 'bla', 'admin'),
(1, '2017-12-17 09:34:27', 11, 'ss', 'ss', 'admin'),
(1, '2017-12-17 20:23:35', 12, 'today', 'salary banked', '851674439V'),
(3, '2017-12-17 20:26:21', 13, 'new 12', 'newn new', '851674439V');

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
  `password` varchar(32) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonAcademic`
--

INSERT INTO `nonAcademic` (`first_name`, `middle_name`, `last_name`, `dob`, `nid`, `home_address`, `current_address`, `email`, `position`, `password`, `time_stamp`) VALUES
('Pramodya', '', 'Abeysinghe', '0000-00-00', '951661177V', 'No 18, Temple Lane, Colpety', '', 'pramodyaabeysinghe@gmail.com', 'Accountant', 'ed2b1f468c5f915f3f1cf75d7068baae', '2017-10-25 18:35:51');

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
  `password` varchar(32) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `date_entered` date NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first_name`, `middle_name`, `last_name`, `dob`, `home_address`, `current_address`, `previous_school`, `entering_class`, `email`, `mothers_name`, `mothers_id`, `mothers_job`, `mothers_working_address`, `mothers_email`, `fathers_name`, `fathers_id`, `fathers_job`, `fathers_working_address`, `fathers_email`, `password`, `student_id`, `date_entered`, `time_stamp`) VALUES
('Pramodya', '', 'Abeysinghe', '1995-06-14', 'col3', 'col3', '', '10', 'pramodyaabeysinghe@gmail.com', 'Pramodya Abeysinghe', '636673392V', '', '', '', 'Pramodya Abeysinghe', '611671392V', '', '', '', 'ed2b1f468c5f915f3f1cf75d7068baae', '20171038', '2001-01-05', '2017-10-23 14:49:42'),
('q', 'w', 'er', '1994-02-20', 'matra', 'matara', '', '9', 'qwert@gmail.com', 'qw', '956661171V', '', '', '', 'zxcas', '941661943V', '', '', '', '25d55ad283aa400af464c76d713c07ad', '20171233', '2010-10-31', '2017-12-17 19:30:45'),
('Pramodya', '', 'Abeysinghe', '1996-03-30', 'matara', 'matara', '', '', 'pramodyaabeysinghe@gmail.com', 'Pramodya Abeysinghe', '625431223V', '', '', '', 'Pramodya Abeysinghe', '611431223V', '', '', '', 'ed2b1f468c5f915f3f1cf75d7068baae', '20171285', '2010-10-31', '2017-12-15 16:18:17');

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
  `date_entered` date NOT NULL,
  `home_address` text NOT NULL,
  `current_address` text NOT NULL,
  `previous_school` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`first_name`, `middle_name`, `last_name`, `dob`, `nid`, `date_entered`, `home_address`, `current_address`, `previous_school`, `email`, `password`, `timestamp`) VALUES
('qwerty', '', 'qwerty', '1990-06-20', '851674439V', '2017-12-10', 'colombo', 'colombo', '', 'abc@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2017-12-17 15:25:20'),
('teacher1', '', 'abey', '0000-00-00', '921743382V', '0000-00-00', 'matara', 'matara', '', 'pramodyaabeysinghe@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', '2017-12-17 13:50:04'),
('Pramodya', 's', 'Abeysinghe', '0000-00-00', '951661171V', '2012-03-30', 'we', 'we', '', 'pramodyaabeysinghe@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', '2017-10-23 15:34:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_feed`
--
ALTER TABLE `news_feed`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `nonAcademic`
--
ALTER TABLE `nonAcademic`
  ADD PRIMARY KEY (`nid`);

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
  ADD PRIMARY KEY (`nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_feed`
--
ALTER TABLE `news_feed`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `non_academic_positions`
--
ALTER TABLE `non_academic_positions`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
