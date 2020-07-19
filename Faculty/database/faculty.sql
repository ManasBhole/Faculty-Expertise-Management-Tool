-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 04:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `Faculty_name` varchar(60) NOT NULL,
  `Award_name` varchar(60) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Event_name` varchar(60) NOT NULL,
  `Date` date DEFAULT NULL,
  `University` varchar(60) NOT NULL,
  `College_name` varchar(60) NOT NULL,
  `Level` varchar(60) NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `Sdrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `Faculty_name`, `Award_name`, `Position`, `Event_name`, `Date`, `University`, `College_name`, `Level`, `pdf`, `Sdrn`) VALUES
(11, 'Shubham', 'Best Student', '1st', 'award distribution', '2020-07-19', 'ggg', 'none', 'Local level', '', 0),
(12, 'Shubham', 'Best Student', '2nd', 'none', '2020-07-23', 'mumbai', 'none', 'State level', '', 0),
(13, 'Shubham', 'none', '2nd', 'award distribution', '2020-07-09', 'mumbai', 'beststudent', 'State level', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `competitive_exam`
--

CREATE TABLE `competitive_exam` (
  `id` int(26) NOT NULL,
  `Faculty_name` varchar(60) NOT NULL,
  `PET_appeared` varchar(60) NOT NULL,
  `PET_date` date NOT NULL,
  `PET_score` int(60) NOT NULL,
  `GATE_appeared` varchar(60) NOT NULL,
  `GATE_date` date NOT NULL,
  `GATE_score` int(60) NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `Sdrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitive_exam`
--

INSERT INTO `competitive_exam` (`id`, `Faculty_name`, `PET_appeared`, `PET_date`, `PET_score`, `GATE_appeared`, `GATE_date`, `GATE_score`, `pdf`, `Sdrn`) VALUES
(6, 'hershalrao', '12', '2020-06-10', 201, '12', '2020-06-09', 122, '', 0),
(7, 'hershalrao', '', '2020-06-01', 20, '1', '2020-06-01', 12, 'upload_files/exams/5efb82d221a2d3.91422516.png', 0),
(8, 'hershalrao', '12', '2020-07-23', 20, '12', '2020-07-22', 122, 'upload_files/exams/5efb8819195451.44560951.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_as_resource`
--

CREATE TABLE `faculty_as_resource` (
  `id` int(26) NOT NULL,
  `Faculty_name` varchar(60) NOT NULL,
  `Resource_person` varchar(60) NOT NULL,
  `Topic_name` varchar(30) NOT NULL,
  `Event_name` varchar(30) NOT NULL,
  `Level` varchar(60) NOT NULL,
  `Venue` varchar(60) NOT NULL,
  `Date` date NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `Sdrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_as_resource`
--

INSERT INTO `faculty_as_resource` (`id`, `Faculty_name`, `Resource_person`, `Topic_name`, `Event_name`, `Level`, `Venue`, `Date`, `pdf`, `Sdrn`) VALUES
(1, 'Smruti Singh', 'Chairperson', 'a', 'a', 'State level', 'a', '2019-11-14', NULL, 0),
(2, 'Smruti Singh', 'Judge', 'a', 'a', 'National level', 'a', '2020-06-24', NULL, 0),
(5, 'B', 'Reviewer (for paper orPh.D. related)', 'visual studio', 'Annual Day', 'State level', 'RAIT', '2020-06-04', NULL, 0),
(9, 'hershalrao', 'Expert speaker', 'dafwe', 'wegt', 'State level', 'we324r', '2020-06-25', NULL, 0),
(10, 'hershalrao', 'Judge', 'dafwe', 'wegt', 'State level', 'jhgjhgkhjjhwe324r', '2020-06-11', NULL, 0),
(11, 'hershalrao', 'Judge', 'dafwe', 'wegt', 'State level', 'jhgjhgkhjjhwe324r', '2020-06-18', NULL, 0),
(12, 'hershalrao', 'Expert speaker', 'dafwe', 'wegt', 'Local level', 'jhgjhgkhjjhwe324r', '2020-06-10', 'upload_files/resource_person/5efb4cc0647fd2.01347097.png', 0),
(13, 'hershalrao', 'Expert speaker', 'dafwe', 'wegt', 'State level', 'we324r', '2020-06-10', 'upload_files/resource_person/5efb52eecefb75.72304037.png', 0),
(14, 'hershalrao', 'Expert speaker', 'dafwe', 'wegt', 'State level', 'we324r', '2020-05-13', 'upload_files/resource_person/5efb6426e201d1.70155898.png', 0),
(15, 'hershalrao', 'Judge', 'dafwe', 'wegt', 'State level', 'KJHIGJUIwe324r', '2020-07-30', 'upload_files/resource_person/5efb88b7411338.11900690.png', 0),
(16, 'hershalrao', 'Judge', 'dafwe', 'wegt', 'National level', 'asd', '2020-07-23', 'upload_files/resource_person/5efb8afb3f8b35.66155329.png', 0),
(17, 'hershalrao', 'Judge', 'dafwemngjh', 'wegt', 'State level', 'we324r', '2019-06-11', 'upload_files/resource_person/5f02353f8c7974.77654821.png', 0),
(18, 'hershalrao', 'Expert speaker', 'aklj', 'wegt', 'State level', 'we324r', '2021-02-08', 'upload_files/resource_person/5f0372a44621c8.51094527.png', 0),
(19, 'Shubham', 'Chairperson', 'none', 'none', 'State level', 'none', '2020-07-30', 'upload_files/resource_person/5f04a794dcf941.43126765.pdf', 0),
(20, 'Shubham', 'Expert speaker', '', '', 'Local level', '', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `Sdrn` varchar(8) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Contact_no` bigint(10) NOT NULL,
  `Addr` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Doj` date NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Desig` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `OTP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`Sdrn`, `First_name`, `Middle_name`, `Last_name`, `DOB`, `Department`, `Contact_no`, `Addr`, `Email`, `Doj`, `Qualification`, `Desig`, `Password`, `OTP`) VALUES
('12345', 'Shubham', 'Ashok', 'Mohape', '2020-07-19', 'Comps', 1234567899, 'none', 'shubham.mohapess@gmail.com', '2020-07-20', 'none', 'none', '12345', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_long_live`
--

CREATE TABLE `faculty_long_live` (
  `id` int(26) NOT NULL,
  `Faculty_name` varchar(60) NOT NULL,
  `Reason_long_live` varchar(60) NOT NULL,
  `From_date` date NOT NULL,
  `To_date` date NOT NULL,
  `Date_of_joining_after_long_live` date NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `Sdrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_long_live`
--

INSERT INTO `faculty_long_live` (`id`, `Faculty_name`, `Reason_long_live`, `From_date`, `To_date`, `Date_of_joining_after_long_live`, `pdf`, `Sdrn`) VALUES
(1, 'Smruti Singh', 'Not feeling well', '2020-06-15', '2020-06-26', '2020-06-26', NULL, 0),
(2, 'B', 'Not feeling well 34', '2020-06-18', '2020-11-25', '2020-11-25', NULL, 0),
(5, 'hershalrao', 'kjhkjnkjn', '2020-07-16', '2020-07-23', '2020-07-28', 'upload_files/long_live/5efb883a03ed08.29054701.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_promotion`
--

CREATE TABLE `faculty_promotion` (
  `id` int(26) NOT NULL,
  `Faculty_name` varchar(60) NOT NULL,
  `Date_of_joining` date NOT NULL,
  `SDNR_number` varchar(40) NOT NULL,
  `RAIT_experience` varchar(100) NOT NULL,
  `Other_experience` varchar(100) NOT NULL,
  `Industry_experience` varchar(100) NOT NULL,
  `Total_experience` varchar(100) NOT NULL,
  `Starting_designation` varchar(60) NOT NULL,
  `Promotion_1` varchar(60) NOT NULL,
  `Date_promotion_1` date NOT NULL,
  `Promotion_2` varchar(60) NOT NULL,
  `Date_promotion_2` varchar(60) NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `Sdrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_promotion`
--

INSERT INTO `faculty_promotion` (`id`, `Faculty_name`, `Date_of_joining`, `SDNR_number`, `RAIT_experience`, `Other_experience`, `Industry_experience`, `Total_experience`, `Starting_designation`, `Promotion_1`, `Date_promotion_1`, `Promotion_2`, `Date_promotion_2`, `pdf`, `Sdrn`) VALUES
(1, 'Shubham', '2020-06-05', '12345', 'none', 'none', 'none', 'none', 'none', 'none', '2020-07-09', 'none', '2020-06-18', NULL, 0),
(2, 'hershalrao', '2020-07-23', '12365', 'as,dnqejk', 'qw,njdej', 'qw,mdkjqe', 'qw ekj', 'a,smDLKWE', 'ASDWKEL', '2020-07-14', 'AS,MJKDEW', '2020-07-10', 'upload_files/promotion/5efb8865c06ce2.54046193.png', 0),
(3, 'Shubham', '2020-07-09', '12345', '02y-05m', '03y-04m', '04y-04m', '05y-03m', 'none', 'none', '2020-07-10', 'none', '2020-07-22', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `SDRN` int(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `username`, `userid`, `SDRN`, `Designation`, `password`) VALUES
(1, 'Shubham', 'shubham.mohapess@gmail.com', 0, '', 'SAM'),
(2, 'hershalrao', 'hershalrao@gmail.com', 0, '', 'aaaa'),
(3, 'Chirag', 'chiragnawale@gmail.com', 12345, 'none', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(26) NOT NULL,
  `Faculty_name` varchar(60) NOT NULL,
  `Admitted_for_program` varchar(60) NOT NULL,
  `Specialization` varchar(60) NOT NULL,
  `Year_of_admission` year(4) NOT NULL,
  `University` varchar(60) NOT NULL,
  `Registration_number` int(60) NOT NULL,
  `College_name` varchar(60) NOT NULL,
  `Status` varchar(60) NOT NULL,
  `Research_topic` varchar(60) NOT NULL,
  `Guide_name` varchar(60) NOT NULL,
  `pdf` varchar(200) DEFAULT 'n/a',
  `Sdrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `Faculty_name`, `Admitted_for_program`, `Specialization`, `Year_of_admission`, `University`, `Registration_number`, `College_name`, `Status`, `Research_topic`, `Guide_name`, `pdf`, `Sdrn`) VALUES
(2, 'Shubham', 'hi', 'hi', 2012, 'hi', 12, 'hi', 'hi', 'hi', 'hi', NULL, 0),
(3, 'hershalrao', 'SDQWEQ', 'ASEW', 2010, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asd', '', 0),
(4, 'hershalrao', 'SDQWEQ', 'ASEW', 2011, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asd', '', 0),
(5, 'hershalrao', 'SDQWEQqw', 'ASEW', 2010, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asd', '', 0),
(6, 'hershalrao', 'SDQWEQ1w', 'ASEW', 2010, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asd', '', 0),
(7, 'hershalrao', 'SDQWEQa', 'ASEW', 2010, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asd', '', 0),
(8, 'hershalrao', 'SDQWEQ', 'ASEW1', 2010, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asd', '', 0),
(9, 'hershalrao', 'SDQWEQ', 'ASEW12', 2010, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asd', '', 0),
(10, 'hershalrao', 'SDQWEQ112', 'ASEW1', 2010, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asd', '', 0),
(11, 'hershalrao', 'SDQWEQ', 'ASEW', 2020, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asdqwd', '', 0),
(12, 'hershalrao', 'SDQWEQ', 'ASEWKJ', 2010, 'ASDE', 12313, 'WD', 'WD', 'AS', 'asd', 'upload_files/qualification/5efb8887c4aaf9.90568409.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitive_exam`
--
ALTER TABLE `competitive_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_as_resource`
--
ALTER TABLE `faculty_as_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_long_live`
--
ALTER TABLE `faculty_long_live`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_promotion`
--
ALTER TABLE `faculty_promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `competitive_exam`
--
ALTER TABLE `competitive_exam`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty_as_resource`
--
ALTER TABLE `faculty_as_resource`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `faculty_long_live`
--
ALTER TABLE `faculty_long_live`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty_promotion`
--
ALTER TABLE `faculty_promotion`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
