-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 06:23 AM
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
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_gallery`
--

CREATE TABLE `event_gallery` (
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
(7, 'Special Practical Session', 'Special-Practical-Session', '<p>Actual lab courses, however, often amount to following a ready-formulated procedure, trying to get the equipment to work, arriving at results that&nbsp;<em>don&rsquo;t</em>&nbsp;clearly demonstrate the concept or relationship they are intended to demonstrate, and following more recipes for computations that don&rsquo;t connect to anything much like &ldquo;understanding&rdquo; in the student&rsquo;s head.</p>\r\n\r\n<p>Since the undergraduate&rsquo;s understanding of science seems more likely to come from a lecture course than a laboratory course (at least if the laboratory course is as characterized in #2), students might get a better understanding of science if they elected to take more science lecture classes.</p>\r\n\r\n<p>However, when science lecture courses require that students also take the corresponding lab course, the disincentive to take more than the minimum number of science classes is huge, because the lab course will chew up a whole afternoon (or more) of the academic week (when students might well be taking some other courses they want or need to take).**</p>\r\n\r\n<p>From the point of view of allocating faculty, the demand for a relatively small student-to-faculty ratio in lab sections means that a science course with a largish lecture and multiple lab sections can account for one science faculty member&rsquo;s entire teaching load in a given term.</p>\r\n', 'lab.jpg', '2017-10-26 16:42:36'),
(11, ' Montessori graduation - 2017', 'Montessori-graduation-2017', '<p>We are soon coming to the end of our current school year and in honor of the time we have spent together and what the future holds, we celebrate with a fun, simple, but very memorable preschool graduation&hellip;</p>\r\n\r\n<p>There are many different thoughts about whether or not it is &ldquo;appropriate&rdquo; for preschoolers to participate in a graduation program or ceremony. I can&rsquo;t answer that for you because I think it all depends on the approach you take and if your approach will be a meaningful and enriching experience for your students and their parents. While you consider what you believe&hellip;</p>\r\n', 'graduation.jpg', '2017-10-26 18:37:33'),
(12, 'STAR DUST Annual Concert 2017', 'STAR-DUST-Annual-Concert-2017', '<p><strong>The Annual concert of the DONUM DEI Institute, Primary section under the title &ldquo;STAR DUST&rdquo; was held on the 14th&nbsp;&amp; 15th&nbsp;of February 2017, respectively at the Bishops College Auditorium.</strong></p>\r\n\r\n<p>The concert was an excellent platform for our students to showcase their hidden talents. The concert is made colourful with a variation of languages and culture in the event. The programme included items in Arabic, English, Sinhala, Tamil and Malay languages.</p>\r\n\r\n<p>As a Shariah compliant school we have taken steps to ensure that the students learn to enjoy what is permitted. Every student had been given an opportunity to take part in this colourful event, which is an important part of their learning process. The students learn to work as a team, respecting each other while enjoying themselves. It surely is a herculean task to enable a force of 1500 students to take part in one concert, but our creative and efficient teachers had made it look very easy with their excellent planning and hard work.</p>\r\n', 'event1.jpg', '2017-10-26 18:51:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_gallery`
--
ALTER TABLE `event_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_gallery`
--
ALTER TABLE `event_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
