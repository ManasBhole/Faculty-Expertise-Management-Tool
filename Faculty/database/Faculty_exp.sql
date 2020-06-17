-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2020 at 05:14 PM
-- Server version: 5.7.28
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Faculty_exp`
--

-- --------------------------------------------------------

--
-- Table structure for table `Awards`
--

CREATE TABLE `Awards` (
  `Faculty_name` varchar(40) NOT NULL,
  `Award_name` varchar(40) NOT NULL,
  `Position` varchar(40) NOT NULL,
  `Event_name` varchar(40) NOT NULL,
  `University` varchar(40) NOT NULL,
  `College_name` varchar(40) NOT NULL,
  `Level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Competitive_exam`
--

CREATE TABLE `Competitive_exam` (
  `Faculty_name` varchar(40) NOT NULL,
  `PET_appeared` varchar(10) DEFAULT NULL,
  `PET_date` date DEFAULT NULL,
  `PET_score` int(10) DEFAULT NULL,
  `GATE_appeared` varchar(10) DEFAULT NULL,
  `GATE_date` date DEFAULT NULL,
  `GATE_score` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Faculty_as_resource`
--

CREATE TABLE `Faculty_as_resource` (
  `Faculty_name` varchar(40) NOT NULL,
  `Resource_person` varchar(20) NOT NULL,
  `Topic_name` varchar(100) NOT NULL,
  `Event_name` varchar(100) NOT NULL,
  `Level` varchar(30) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Faculty_long_live`
--

CREATE TABLE `Faculty_long_live` (
  `Faculty_name` varchar(40) NOT NULL,
  `Reason_long_live` varchar(100) NOT NULL,
  `From_date` date NOT NULL,
  `To_date` date NOT NULL,
  `Date_of_joining_after_long_live` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Faculty_promotion`
--

CREATE TABLE `Faculty_promotion` (
  `Faculty_name` varchar(40) NOT NULL,
  `Date_of_joining` date NOT NULL,
  `SDNR_number` int(10) NOT NULL,
  `RAIT_experience` int(10) NOT NULL,
  `Other_experience` int(10) NOT NULL,
  `Industry_experience` int(10) NOT NULL,
  `Total_experience` int(10) NOT NULL,
  `Starting_designation` varchar(40) NOT NULL,
  `Promotion_1` varchar(40) DEFAULT NULL,
  `Date_promotion_1` date DEFAULT NULL,
  `Promotion_2` varchar(40) DEFAULT NULL,
  `Date_promotion_2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Login_info`
--

CREATE TABLE `Login_info` (
  `Faculty_name` varchar(40) NOT NULL,
  `User_name` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Faculty_hod` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Qualification`
--

CREATE TABLE `Qualification` (
  `Faculty_name` varchar(40) NOT NULL,
  `Admitted_for_program` varchar(10) NOT NULL,
  `Specialization` varchar(40) NOT NULL,
  `Year_of_admission` int(10) NOT NULL,
  `University` varchar(40) NOT NULL,
  `Registration_number` varchar(10) NOT NULL,
  `College_name` varchar(40) NOT NULL,
  `Status` varchar(40) NOT NULL,
  `Research_topic` varchar(40) NOT NULL,
  `Guide_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Login_info`
--
ALTER TABLE `Login_info`
  ADD PRIMARY KEY (`User_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
