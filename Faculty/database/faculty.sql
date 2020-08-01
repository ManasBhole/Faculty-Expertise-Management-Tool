-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 04:10 PM
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
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `Username` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`Username`, `Password`) VALUES
('admin', '12345'),
('admin', '12345');

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
(1, 'Shubham Ashok Mohape', 'Best Student', '1st', 'award distribution', '2020-07-10', 'mumbai', 'beststudent', 'State level', 'upload_files/awards/721-Student Application Form PART-1.pdf', 12345);

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
(1, 'Shubham Ashok Mohape', '12', '2020-07-10', 121, '1', '2020-07-30', 123, 'upload_files/exams/276-Preet_Project Proposal Submission Format.pdf', 12345);

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
(1, 'Shubham Ashok Mohape', 'Lectures in Industry', 'none', 'none', 'Local level', 'rait', '2020-07-21', '', 12345),
(2, 'Shubham Ashok Mohape', 'Chairperson', 'NONE', 'NONE', 'International level', 'RAIT', '2020-07-28', 'upload_files/resource_person/662-Preet_Project Proposal Submission Format.pdf', 12345);

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
('12345', 'Shubham', 'Ashok', 'Mohape', '2020-07-19', 'Comps', 1234567899, 'none', 'shubham.mohapess@gmail.com', '2020-07-20', 'none', 'none', '12345', NULL),
('007', 'chirag', 'rajesh', 'nawale', '0000-00-00', '', 0, '', 'shubham.mohapess@gmail.com', '0000-00-00', '', '', '12345', NULL);

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
(1, 'Shubham Ashok Mohape', 'nothing', '2020-07-09', '2020-07-30', '2020-07-31', '', 12345),
(2, 'Shubham Ashok Mohape', '', '0000-00-00', '0000-00-00', '0000-00-00', 'upload_files/long_live/303-vlab.pdf', 12345);

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
(1, 'Shubham Ashok Mohape', '2020-07-16', '12345', '02y-06m', '03y-02m', '05y-05m', '05y-05m', 'none', 'none', '2020-07-29', 'none', '2020-07-30', '', 12345);

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
(1, 'Shubham Ashok Mohape', 'none', 'none', 2000, 'none', 1234, 'none', 'none', 'none', 'none', 'upload_files/qualification/194-SDG RAIT Summer Internship Program  2020-Student Allocation Final.pdf', 12345);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `competitive_exam`
--
ALTER TABLE `competitive_exam`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_as_resource`
--
ALTER TABLE `faculty_as_resource`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty_long_live`
--
ALTER TABLE `faculty_long_live`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty_promotion`
--
ALTER TABLE `faculty_promotion`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
