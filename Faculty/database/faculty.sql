-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 02:56 PM
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
  `Faculty_name` varchar(40) NOT NULL,
  `Award_name` varchar(40) NOT NULL,
  `Position` varchar(40) NOT NULL,
  `Event_name` varchar(40) NOT NULL,
  `University` varchar(40) NOT NULL,
  `College_name` varchar(40) NOT NULL,
  `Level` varchar(40) NOT NULL,
  `PDF` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `competitive_exam`
--

CREATE TABLE `competitive_exam` (
  `Faculty_name` varchar(40) NOT NULL,
  `PET_appeared` varchar(10) DEFAULT NULL,
  `PET_date` date DEFAULT NULL,
  `PET_score` int(10) DEFAULT NULL,
  `GATE_appeared` varchar(10) DEFAULT NULL,
  `GATE_date` date DEFAULT NULL,
  `GATE_score` int(10) DEFAULT NULL,
  `PDF` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_as_resource`
--

CREATE TABLE `faculty_as_resource` (
  `Faculty_name` varchar(40) NOT NULL,
  `Resource_person` varchar(20) NOT NULL,
  `Topic_name` varchar(100) NOT NULL,
  `Event_name` varchar(100) NOT NULL,
  `Level` varchar(30) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `PDF` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_long_live`
--

CREATE TABLE `faculty_long_live` (
  `Faculty_name` varchar(40) NOT NULL,
  `Reason_long_live` varchar(100) NOT NULL,
  `From_date` date NOT NULL,
  `To_date` date NOT NULL,
  `Date_of_joining_after_long_live` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_promotion`
--

CREATE TABLE `faculty_promotion` (
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
  `Date_promotion_2` date DEFAULT NULL,
  `PDF` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(40) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `fname`, `email`, `password`) VALUES
(0, 'Shubham', 'shubham.mohapess@gmail.com', 'Shubhamisgreat');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `Faculty_name` varchar(40) NOT NULL,
  `Admitted_for_program` varchar(10) NOT NULL,
  `Specialization` varchar(40) NOT NULL,
  `Year_of_admission` int(10) NOT NULL,
  `University` varchar(40) NOT NULL,
  `Registration_number` varchar(10) NOT NULL,
  `College_name` varchar(40) NOT NULL,
  `Status` varchar(40) NOT NULL,
  `Research_topic` varchar(40) NOT NULL,
  `Guide_name` varchar(40) NOT NULL,
  `PDF` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
