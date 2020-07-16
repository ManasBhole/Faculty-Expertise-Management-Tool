-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 03:20 PM
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
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
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
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Sdrn`, `First_name`, `Middle_name`, `Last_name`, `DOB`, `Department`, `Contact_no`, `Addr`, `Email`, `Doj`, `Qualification`, `Desig`, `Password`, `OTP`) VALUES
('007', 'test', NULL, NULL, '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', 'hncqx5d61o'),
('150', 'Leena', NULL, 'Ragha', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('197', 'Snehal', '', 'Gaikwad', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('248', 'Arpita', 'Goutam', 'Palchoudhury', '1967-06-21', 'COMP', 1234567890, '-', '@', '2001-09-10', 'Ph.D  ( English Literature)', ' Associate Professor', '123', NULL),
('295', 'Vanita', NULL, 'Mane', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('330', 'Namita', 'Damodar', 'Pulgam', '1983-09-10', 'COMP', 1234567890, '-', '@', '2005-12-23', 'M.E. Computer', 'A.P.', '123', 'bb9cad60'),
('374', 'Aditi', 'Sunil', 'Chhabria', '1984-07-23', 'COMP', 1234567890, '-', '@', '2006-07-17', 'M.E. Computers', 'Assistant Professor', '123', '362394c6'),
('377', 'Vaishali', 'Satish', 'Jadhav', '1971-09-17', 'COMP', 1234567890, '-', '@', '2007-07-13', 'Pursuing Ph.D.', 'Assistant Professor', '123', NULL),
('381', 'Narendrakumar ', 'Ramchandra', 'Dasre', '1980-08-01', 'COMP', 1234567890, '-', '@', '2007-07-23', 'Ph. D.', ' Professor', '123', '3cde8181'),
('383', 'Shital', 'Sunil', 'Mali', '1979-05-16', 'COMPS', 1234567890, '-', '@', '2007-07-09', 'Ph,D, pursing', 'Associate Professor', '123', NULL),
('393', 'Dr. Amarsinh', 'V.', 'Vidhate', '1974-05-21', 'COMP', 1234567890, '-', '@', '2007-07-17', 'Ph.D.(Computer Engineering), M.Tech. (Computer Eng', 'Professor', '123', 'ZxpgBY'),
('396', 'Puja', '', 'Padiya', '1979-09-09', 'COMP', 1234567890, '-', '@', '2007-01-08', 'Ph.D. Pursuing', 'Assistant Professor', '123', NULL),
('407', 'Rajshree', NULL, 'Shedge', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('411', 'TUSHAR ', 'HINDURAO', 'GHORPADE ', '1979-02-03', 'COMP', 1234567890, '-', '@', '2008-01-18', 'ME in Computer Engineering', 'Assistant Professor', '123', 'ec71de5a'),
('419', 'Sheetal', NULL, 'Ahir', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', '2MYHy6'),
('482', 'Smita', '', 'Patil-Bhoir', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', '', '', '123', 'JQ76CN'),
('526', 'Vilas', 'Janardan', 'Rane', '1986-11-11', 'COMP', 1234567890, '-', '@', '2011-02-03', 'M.Sc.', 'Assistant Professor', '123', NULL),
('528', 'Swarupa', NULL, 'Bodhe', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('536', 'nilam', 'sangram', 'patil', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'ME electronics', 'Assistant professor', '123', NULL),
('566', 'Pramod', 'Jagannath', 'Bide', '1989-01-25', 'COMP', 1234567890, '-', '@', '2012-08-16', 'M.E', 'AP', '123', 'NULL'),
('570', 'ASHWINI ', 'ANIL', 'RAORANE', '1990-04-23', 'COMP', 1234567890, '-', '@', '2012-08-16', 'ME (Electronics)', 'Lecturer', '123', NULL),
('576', 'Smita', 'dinesh', 'Bharne', '1982-06-14', 'COMP', 1234567890, '-', '@', '2012-09-13', 'M.Tech', 'Assistant Professor', '123', 'a22bc9ae'),
('583', 'Snehal', NULL, 'Mumbailkar', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', 'RKfwZg'),
('586', 'Vijaylaxmi', 'S', 'Bittal', '1984-07-31', 'COMP', 1234567890, '-', '@', '2013-01-10', 'M.Tech', 'assistant professor', '123', NULL),
('587', 'Trupti', 'prashant', 'Patil', '1984-07-08', 'COMP', 1234567890, '-', '@', '2013-01-07', 'ME (copmuter)', 'Assistant Professor', '123', NULL),
('593', 'Prathmesh', 'Narayan', 'Gunjgur', '1988-10-18', 'COMP', 1234567890, '-', '@', '2013-01-24', 'M.E Computer Engineering', 'Assistant Professor', '123', NULL),
('601', 'Kriti', '', 'Karnam', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'B.E.,Mtech', 'Assistant Professor', '123', 'e7fa430d'),
('603', 'Harsha', '', 'Saxena', '1990-11-06', 'COMP', 1234567890, '-', '@', '2013-07-01', 'mtech', 'assistant proffesor', '123', '2ff22efa'),
('609', 'Nazia', '', 'S', '1982-01-02', 'COMP', 1234567890, '-', '@', '2013-07-08', 'M.Tech', 'Asst Professor', '123', NULL),
('615', 'Shilpa', 'Tushar', 'Bhangale', '1976-07-27', 'CE', 1234567890, '-', '@', '2013-07-15', 'MPHIL- SET', 'assistant professor', '123', NULL),
('618', 'Rubi', '', 'Mandal', '1986-01-19', 'COMP', 1234567890, '-', '@', '2013-07-25', 'Mtech', 'Lecturer', '123', NULL),
('627', 'Apurva', 'Swapnil', 'Shinde', '1991-12-18', 'COMP', 1234567890, '-', '@', '2013-08-13', 'M.E. (Computers)', 'Assistant Professor', '123', '8023ed41'),
('631', 'Savita', 'Kiran', 'Sawant', '1983-12-15', 'COMP', 1234567890, '-', '@', '2016-01-02', 'M.Tech in Computer Engg', 'Assistant Professor', '123', 'd2367116'),
('638', 'Ekta', NULL, 'Sarda', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('650', 'Bhavana', 'Bhimsen', 'Turorikar', '1983-07-03', 'COMP', 1234567890, '-', '@', '2014-08-07', 'ME(Computer Networks)', 'Assistant Professor', '123', '694a090f'),
('654', 'MANSI', 'BHUSHAN', 'JAWALE', '1991-10-31', 'COMP', 1234567890, '-', '@', '2014-06-15', 'M.A.', 'Lecturer', '123', NULL),
('657', 'KHUSHBOO', 'SHIVKUMAR', 'PICHHODE', '1989-12-03', 'COMPS', 1234567890, '-', '@', '2014-07-16', 'M.E', 'Assistant Professor', '123', NULL),
('663', 'Shilpa', 'Vilas', 'Mahagaonkar', '1984-05-24', 'COMP', 1234567890, '-', '@', '2014-07-16', 'ME', 'Assistant Professor', '123', NULL),
('672', 'Pallavi', 'H.', 'Chitte', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.E.Computer Engineering', 'Assistant Professor', '123', '41fd65ae'),
('677', 'kamlesh', 'lekhraj', 'nenwani', '1987-04-04', 'CE', 1234567890, '-', '@', '2014-08-01', 'M.E.', 'Lecturer', '123', NULL),
('679', 'Dhanashri', 'Ashok', 'Bhosale', '1989-03-10', 'COMP', 1234567890, '-', '@', '2013-02-09', 'ME', 'lecturer', '123', '8aa5381f'),
('687', 'Sumithra', '', 'T.V', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH', '', '123', NULL),
('693', 'vishvas', 'hasuram', 'patil', '1986-01-15', 'COMP', 1234567890, '-', '@', '2015-07-01', 'M.sc.', 'Lecturer', '123', '703141b6'),
('696', 'varsha', 'ramesh', 'patil', '0091-04-29', 'COMP', 1234567890, '-', '@', '2015-06-17', 'M.E.Computer Engineering', 'Assistant Professor', '123', NULL),
('699', 'Preet Chandan', '', 'Kaur', '1989-02-09', 'COMP', 1234567890, '-', '@', '2015-07-15', 'M.E.Computer Engineering', 'Assistant professor', '123', 'CZtPQs'),
('700', 'Pranali', 'Mohan', 'Yadav', '1990-12-18', 'CE', 1234567890, '-', '@', '2015-06-15', 'BE, ME (persuing)', 'Teaching Assistant', '123', NULL),
('711', 'PRAMOD ', 'HARIBHAU', 'KACHARE', '1991-04-24', 'COMP', 1234567890, '-', '@', '2015-07-07', 'M.Tech.', 'Assistant Professor', '123', '536de3d5'),
('712', 'DIAMBAR', 'VITTHALBUWA', 'PURI', '1990-09-29', 'COMP', 1234567890, '-', '@', '2015-07-07', 'M.Tech.', 'Assistant Professor', '123', '4241a33d'),
('717', 'SWARALI', 'PRASHANT', 'SHETH', '1985-01-24', 'COMP', 1234567890, '-', '@', '2015-07-23', 'M.Tech.', 'Lecturer', '123', 'a862f9af'),
('719', 'CHANDRAKANT', 'JAGANNATH', 'GAIKWAD', '1972-08-02', 'COMP', 1234567890, '-', '@', '2015-08-10', 'Ph.D.', 'Professor', '123', '36ed2611'),
('721', 'Nivedita', 'Elan', 'Shekhar', '1992-04-28', 'COMPS', 1234567890, '-', '@', '2015-08-11', 'M.E.Computer Engineering', 'Assitance Professor', '123', NULL),
('726', 'Krupi', 'Pranav', 'Saraf', '1989-07-19', 'COMPS', 1234567890, '-', '@', '2016-01-06', 'ME', 'Assistant Professor', '123', NULL),
('728', 'saguna', 'kailas', 'ingle', '1983-08-05', 'COMP', 1234567890, '-', '@', '2016-12-03', 'M.E.(IT)', 'Assistant Professor', '123', NULL),
('752', 'Shilpa', 'Gulabrao', 'Kolte', '1977-06-17', 'COMP', 1234567890, '-', '@', '2016-06-22', 'M.E.', 'A.P.', '123', '0bf3ade3'),
('765', 'Pornima', 'Kailas', 'Gidhe', '1993-04-06', 'COMP', 1234567890, '-', '@', '2016-07-12', 'M.E.Computer Engineering', 'Assistant professor', '123', NULL),
('767', 'Bijal', 'Chandubhai', 'Panchal', '1989-12-11', 'COMP', 1234567890, '-', '@', '2016-07-12', 'M.E', 'Assistant Professor', '123', '3acb890f'),
('769', 'SAYALI', 'ASHOK', 'SAPKAL', '1989-05-08', 'COMP', 1234567890, '-', '@', '2016-07-13', 'M.E', 'Lecturer', '123', NULL),
('770', 'Siddhi', 'Nikhil', 'Kadu', '1989-12-01', 'COMP', 1234567890, '-', '@', '2016-07-12', 'M.E', 'Assistant Professor', '123', '5b6a61d0'),
('772', 'SAMEER', 'SHAMRAO', 'CHIKANE', '1993-09-03', 'COMPS', 1234567890, '-', '@', '2016-07-13', 'ME', 'ASSISTANT PROFESSOR', '123', NULL),
('785', 'Snehal', 'Shashikant', 'Bhoir', '1992-08-15', 'COMP', 1234567890, '-', '@', '2016-07-21', 'M.E.Computer Engineering', 'Assistant Professor', '123', NULL),
('786', 'JYOTI', 'VINAYAK', 'DEOGIRIKAR', '1994-01-14', 'COMP', 1234567890, '-', '@', '2016-08-01', 'ME', 'Assistant professor', '123', NULL),
('787', 'SHRADDHA', 'ANANT', 'NARHARI', '1989-07-31', 'COMP', 1234567890, '-', '@', '2017-12-15', 'ME', 'Assitant Professor', '123', NULL),
('800', 'Prof. Prashant', 's', 'Lokhande', '1974-06-16', 'COMP', 1234567890, '-', '@', '2017-01-16', 'ME IT', 'Associate Professor', '123', NULL),
('802', 'PAYAL', 'FATEHLAL', 'SANCHETI', '1994-04-02', 'COMP', 1234567890, '-', '@', '2017-01-23', 'B.E', 'LAB INSTRUCTOR', '123', NULL),
('803', 'Snehal', 'Suresh', 'Nikalje', '1992-10-27', 'COMP', 1234567890, '-', '@', '2017-02-01', 'BE', 'Lab Instructor', '123', NULL),
('804', 'roshni', 'satish', 'singh', '1993-06-18', 'COMP', 1234567890, '-', '@', '2017-02-01', 'BE', 'lab instructor', '123', NULL),
('806', 'Sathya', ' ', 'Arumugam', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'Ph.D', 'Assistant Professor', '123', NULL),
('807', 'vishwanath', 'subhaschandra', 'chikkareddi', '1988-02-24', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH( COMPUTER SCIENCE AND ENGG), PhD(pursuing)', 'Assistant Professor', '123', NULL),
('811', 'Rashmi', 'Amol', 'Dhumal', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.E.Computer Engineering', 'Associate Professor', '123', NULL),
('812', 'Tabassum', 'Altaf', 'Maktum', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.E.Computer Engineering', 'Assistant Professor', '123', NULL),
('817', 'PRACHI', 'DEEPAK', 'JUNWALE', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH( COMPUTER SCIENCE AND ENGG)', 'ASSISTANT PROFESSOR', '123', NULL),
('821', 'NEERAJ', 'KUMAR', 'SHARMA', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'PhD', 'PROFESSOR', '123', NULL),
('826', 'Ida', 'Hector', 'Lionel', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.Tech(Information Technology)', 'Assistant Professor', '123', 'NULL'),
('827', 'PRIYANKA', 'RAMRAO', 'GUTTE', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.Tech(Control system)', 'Asst. Professor', '123', NULL),
('829', 'Himani', 'Mohan', 'Jawale', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH( COMPUTER ENGG)', 'Assistant Professor', '123', NULL),
('840', 'Dr. Dhiraj', 'B', 'Magare', '1981-02-02', 'COMP', 1234567890, '-', '@', '2017-11-20', 'Doctor', 'Associate Professor', '123', NULL),
('842', 'Suchita', 'Suresh', 'Dange', '1993-04-26', 'COMP', 1234567890, '-', '@', '2017-12-04', 'M.TECH( COMPUTER ENGG)', 'Assistant Professor', '123', NULL),
('848', 'Rohini', 'Lakhanlal', 'Damahe', '1988-02-03', 'COMP', 1234567890, '-', '@', '2017-11-12', 'ME(Computer Engineering)', 'Assistant Professor', '123', NULL),
('858', 'SHITAL', 'HARIBHAU', 'GADE', '1983-06-06', 'COMP', 1234567890, '-', '@', '2018-01-02', 'M.E.Computer Engineering', 'ASSISTANT PROFESSOR', '123', NULL),
('874', 'AMIT', 'KAILASH', 'BARVE', '1985-08-26', 'COMP', 1234567890, '-', '@', '2018-02-16', 'Phd', 'Assiciate Professor', '123', NULL),
('876', 'BHARTI', 'VISHANDAS', 'NATHWANI', '1984-07-27', 'COMPS', 1234567890, '-', '@', '2018-02-20', 'Ph.D.', 'Assistant Professor', '123', NULL),
('878', 'Bharti', 'A', 'Joshi', '1970-04-25', 'COMPS', 1234567890, '-', '@', '2018-03-01', 'Phd', 'Professor', '123', 'bHhwYV'),
('888', 'Dr Dhananjay', 'Manohar', 'Dakhane', '1972-04-06', 'COMP', 1234567890, '-', '@', '1972-04-06', 'PhD', 'Professor', '123', 'hDvgGJ'),
('892', 'Dr. Yogita ', 'Dhanraj', 'Mistry', '1979-07-26', 'COMP', 1234567890, '-', '@', '2018-12-17', 'Ph. D.', 'Associate Professor', '123', 'euFpRr'),
('894', 'B', 'J', 'Gorad', '1988-04-04', 'COMP', 1234567890, '-', '@', '2018-12-24', 'M.Tech CST,  PhD Pursuing', 'Assistant Professor', '123', NULL),
('896', 'SANGITA', 'SANTOSH', 'CHAUDHARI', '1977-06-10', 'COMP', 1234567890, '-', '@', '2019-01-01', 'PhD', 'professor', '123', '4GoHWM'),
('897', 'R', 'D', 'Suryawanshi', '1986-05-12', 'COMP', 1234567890, '-', '@', '2019-01-01', 'Msc, Net,Phd Persuing', 'Assistant Professor', '123', 'D7qHRm'),
('898', 'vaibhav', 'Eknath', 'Narawade', '1977-08-08', 'COMP', 1234567890, '-', '@', '2019-01-03', 'PhD Computer Enggineering', 'Professor', '123', 'uWzgp2'),
('999', 'a', 'a', 'a', '0000-00-00', 'INSTR', 1234567890, '-', '@', '0000-00-00', 'a', 'a', '123', 'dd867ff4'),
('abc', 'sf', 'f', 'h', '2016-01-07', 'CE', 1234567890, '-', '@', '2016-01-12', 'ME pursuing', 'ap', '123', '1225dbb4');

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
