-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2020 at 02:22 PM
-- Server version: 5.7.28
-- PHP Version: 7.4.7

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
  `University` varchar(60) NOT NULL,
  `College_name` varchar(60) NOT NULL,
  `Level` varchar(60) NOT NULL,
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `Faculty_name`, `Award_name`, `Position`, `Event_name`, `University`, `College_name`, `Level`, `pdf`) VALUES
(3, '', 'hello', '1st', 'hello', 'hello', 'hello', 'Local level', NULL),
(4, 'Shubham', 'bye', '1st', 'bye', 'bye', 'bye', 'Local level', NULL);

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
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitive_exam`
--

INSERT INTO `competitive_exam` (`id`, `Faculty_name`, `PET_appeared`, `PET_date`, `PET_score`, `GATE_appeared`, `GATE_date`, `GATE_score`, `pdf`) VALUES
(3, 'Shubham', '2', '2020-06-11', 2, '1', '2020-06-13', 2, NULL);

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
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_as_resource`
--

INSERT INTO `faculty_as_resource` (`id`, `Faculty_name`, `Resource_person`, `Topic_name`, `Event_name`, `Level`, `Venue`, `Date`, `pdf`) VALUES
(1, 'Smruti Singh', 'Chairperson', 'a', 'a', 'State level', 'a', '2020-06-30', NULL),
(2, 'Smruti Singh', 'Judge', 'a', 'a', 'National level', 'a', '2020-06-24', NULL),
(5, 'B', 'Reviewer (for paper orPh.D. related)', 'visual studio', 'Annual Day', 'State level', 'RAIT', '2020-06-04', NULL),
(8, 'Shubham', 'Lectures in Industry', 'none', 'none', 'International level', 'none', '0000-00-00', NULL),
(9, 'hershalrao', 'Expert speaker', 'dafwe', 'wegt', 'State level', 'we324r', '2020-06-25', NULL);

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
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_long_live`
--

INSERT INTO `faculty_long_live` (`id`, `Faculty_name`, `Reason_long_live`, `From_date`, `To_date`, `Date_of_joining_after_long_live`, `pdf`) VALUES
(1, 'Smruti Singh', 'Not feeling well', '2020-06-15', '2020-06-26', '2020-06-26', NULL),
(2, 'B', 'Not feeling well 34', '2020-06-18', '2020-11-25', '2020-11-25', NULL),
(4, 'Shubham', 'nothing', '2020-06-04', '2020-06-12', '2020-07-16', NULL);

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
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_promotion`
--

INSERT INTO `faculty_promotion` (`id`, `Faculty_name`, `Date_of_joining`, `SDNR_number`, `RAIT_experience`, `Other_experience`, `Industry_experience`, `Total_experience`, `Starting_designation`, `Promotion_1`, `Date_promotion_1`, `Promotion_2`, `Date_promotion_2`, `pdf`) VALUES
(1, 'Shubham', '2020-06-05', '12345', 'none', 'none', 'none', 'none', 'none', 'none', '2020-07-09', 'none', '2020-06-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `username`, `userid`, `password`) VALUES
(1, 'Shubham', 'shubham.mohapess@gmail.com', 'SAM'),
(2, 'hershalrao', 'hershalrao@gmail.com', 'aaaa');

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
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `Faculty_name`, `Admitted_for_program`, `Specialization`, `Year_of_admission`, `University`, `Registration_number`, `College_name`, `Status`, `Research_topic`, `Guide_name`, `pdf`) VALUES
(2, 'Shubham', 'hi', 'hi', 2012, 'hi', 12, 'hi', 'hi', 'hi', 'hi', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `competitive_exam`
--
ALTER TABLE `competitive_exam`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty_as_resource`
--
ALTER TABLE `faculty_as_resource`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faculty_long_live`
--
ALTER TABLE `faculty_long_live`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faculty_promotion`
--
ALTER TABLE `faculty_promotion`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
