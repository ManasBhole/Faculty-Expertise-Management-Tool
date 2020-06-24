-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 05:09 PM
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
  `Faculty_name` varchar(60) NOT NULL,
  `Award_name` varchar(60) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Event_name` varchar(60) NOT NULL,
  `University` varchar(60) NOT NULL,
  `College_name` varchar(60) NOT NULL,
  `Level` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`Faculty_name`, `Award_name`, `Position`, `Event_name`, `University`, `College_name`, `Level`) VALUES
('shubham', 'asas', '1st', 'fdfd', 'sfds', 'sdfs', 'National level');

-- --------------------------------------------------------

--
-- Table structure for table `competitive_exam`
--

CREATE TABLE `competitive_exam` (
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

INSERT INTO `competitive_exam` (`Faculty_name`, `PET_appeared`, `PET_date`, `PET_score`, `GATE_appeared`, `GATE_date`, `GATE_score`, `pdf`) VALUES
('shubham', 'sada', '2020-05-01', 121, '1', '2020-06-25', 2123, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_as_resource`
--

CREATE TABLE `faculty_as_resource` (
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

INSERT INTO `faculty_as_resource` (`Faculty_name`, `Resource_person`, `Topic_name`, `Event_name`, `Level`, `Venue`, `Date`, `pdf`) VALUES
('Shubham Mohape', 'Judge', 'asd', 'as', 'State level', 'rait', '2020-07-03', NULL),
('Shubham Mohape', 'Judge', 'asd', 'as', 'Local level', 'rait', '2020-06-26', NULL),
('Shubham Mohape', 'Judge', 'asd', 'as', 'National level', 'rait', '2020-07-03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_long_live`
--

CREATE TABLE `faculty_long_live` (
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

INSERT INTO `faculty_long_live` (`Faculty_name`, `Reason_long_live`, `From_date`, `To_date`, `Date_of_joining_after_long_live`, `pdf`) VALUES
('Shubham Mohape', 'nothing', '2020-06-11', '2020-06-30', '2020-06-24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_promotion`
--

CREATE TABLE `faculty_promotion` (
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
(4, 'hershal', 'hershhal@gmail.com', 'gggg');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
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

INSERT INTO `qualification` (`Faculty_name`, `Admitted_for_program`, `Specialization`, `Year_of_admission`, `University`, `Registration_number`, `College_name`, `Status`, `Research_topic`, `Guide_name`, `pdf`) VALUES
('', '', '', 0000, '', 0, '', '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
