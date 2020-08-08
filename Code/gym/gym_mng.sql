-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 05:50 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_mng`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(4) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `address`, `feedback`) VALUES
(13, 'najmul', 'vvn@gmail.com', 'Bashundhara', 'this is amazing.'),
(14, 'Bijoy', 'bi@gmail.com', 'new york, America', 'nice ');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `STUDENT_ID` text NOT NULL,
  `MACHINE_ID` text NOT NULL,
  `LEVEL_STARS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`STUDENT_ID`, `MACHINE_ID`, `LEVEL_STARS`) VALUES
('M001', 'MCH02', '5'),
('M001', 'MCH02', '5'),
('M001', 'MCH23', '5'),
('M001', 'MCH21', '4'),
('M002', 'MCH12', '5'),
('M002', 'MCH03', '4'),
('M002', 'MCH15', '4'),
('M003', 'MCH10', '4'),
('M003', 'MCH16', '3'),
('M003', 'MCH11', '4\r\n'),
('M003', 'MCH13', '5'),
('M004', 'MCH15', '1'),
('M005', 'MCH12', '1'),
('F001', 'MCH05', '4'),
('M006', 'MCH16', '4'),
('M007', 'MCH17', '2'),
('M008', 'MCH07', '3'),
('M009', 'MCH08', '2'),
('M010', 'MCH22', '2'),
('M012', 'MCH19', '4'),
('M012', 'MCH01', '1'),
('M012', 'MCH18', '5'),
('M014', 'MCH21', '5'),
('M015', 'MCH16', '2'),
('M016', 'MCH22', '2'),
('M017', 'MCH14', '3'),
('M018', 'MCH11', '2'),
('M019', 'MCH12', '2'),
('M020', 'MCH05', '4'),
('M021', 'MCH04', '3'),
('F002', 'MCH02', '3'),
('F003', 'MCH12', '4'),
('F005', 'MCH16', '4'),
('F006', 'MCH18', '2'),
('F007', 'MCH03', '3'),
('F008', 'MCH04', '2'),
('F009', 'MCH', '5'),
('F010', 'MCH02', '2'),
('F013', 'MCH09', '1'),
('F013', 'MCH05', '3'),
('F014', 'MCH12', '4'),
('F015', 'MCH16', '5'),
('F016', 'MCH24', '4'),
('F017', 'MCH24', '5'),
('F018', 'MCH11', '3'),
('F019', 'MCH14', '5'),
('F020', 'MCH22', '3');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `NAME` text NOT NULL,
  `id` int(3) NOT NULL,
  `SEX` text NOT NULL,
  `HOUR` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`NAME`, `id`, `SEX`, `HOUR`) VALUES
('Najmul Russel ', 111, 'M', 10),
('Jonh cena', 222, 'M', 12),
('Jay cutler', 333, 'F', 8),
('Big Show', 444, 'M', 5),
('Katrina', 555, 'F', 5);

-- --------------------------------------------------------

--
-- Table structure for table `locker`
--

CREATE TABLE `locker` (
  `LOCKER_ID` text NOT NULL,
  `STUDENT_ID` text NOT NULL,
  `DATE_OF_HIRE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locker`
--

INSERT INTO `locker` (`LOCKER_ID`, `STUDENT_ID`, `DATE_OF_HIRE`) VALUES
('L1', '111', '2018-04-18'),
('L3', '222', '2018-04-10'),
('L1', '111', '2018-04-18'),
('L3', '222', '2018-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `locker_type`
--

CREATE TABLE `locker_type` (
  `LOCKER_ID` text NOT NULL,
  `TYPE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locker_type`
--

INSERT INTO `locker_type` (`LOCKER_ID`, `TYPE`) VALUES
('L01', 'NORMAL'),
('L02', 'NORMAL'),
('L03', 'NORMAL'),
('L04', 'NORMAL'),
('L05', 'NORMAL'),
('L07', 'LUXURY'),
('L08', 'LUXURY'),
('L09', 'LUXURY'),
('L10', 'LUXURY'),
('L11', 'LUXURY'),
('L12', 'LUXURY'),
('L13', 'LUXURY'),
('L14', 'LUXURY'),
('L15', 'LUXURY'),
('L06', 'NORMAL');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `MACHINE_NAME` text NOT NULL,
  `MACHINE_ID` text NOT NULL,
  `MACHINE_CONDITION` text NOT NULL,
  `INCLUDING_DATE` date NOT NULL,
  `TIME_PER_PERSON` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`MACHINE_NAME`, `MACHINE_ID`, `MACHINE_CONDITION`, `INCLUDING_DATE`, `TIME_PER_PERSON`) VALUES
('Abdominal Bench', 'MCH01', 'GOOD', '2016-06-01', '8.00 MINUTES'),
('Barbells', 'MCH02', 'BEST', '2015-12-02', '10 MINUTES'),
('Bench Press', 'MCH03', 'BEST', '2015-12-02', '10 MINUTES'),
('Cables and Pulleys', 'MCH04', 'BETTER', '2015-12-01', '15 MINUTES'),
('Calf Machine', 'MCH05', 'POOR', '2015-12-02', '20 MINUTES'),
('Dipping Bars', 'MCH06', 'BEST', '2015-12-01', '20 MINUTES'),
('Dumb Bells', 'MCH07', 'BETTER', '2016-06-01', '15 MINUTES'),
('Foam Roller', 'MCH08', 'POOR', '2014-02-01', '15 MINUTES'),
('Hack Squat Machine', 'MCH09', 'GOOD', '2014-02-01', '20 MINUTES'),
('Hammer Strength Machine', 'MCH10', 'BEST', '2014-02-01', '20 MINUTES'),
('Hyper Extension Bench', 'MCH11', 'BEST', '2014-02-01', '10 MINUTES'),
('Incline Bench Press', 'MCH12', 'GOOD', '2015-09-01', '10 MINUTES'),
('Lat Pulldown Machine', 'MCH13', 'GOOD', '2016-06-01', 'UNLIMITED'),
('Leg Abduction Machine', 'MCH14', 'BETTER', '2015-12-01', '15 MINUTES'),
('Leg Curl Machine', 'MCH15', 'GOOD', '2015-12-02', 'UNLIMITED'),
('Leg Extension Machine', 'MCH16', 'BETTER', '2016-06-01', 'UNLIMITED'),
('Leg Press Machine', 'MCH17', 'BEST', '2014-02-01', 'UNLIMITED'),
('Pec Deck Machine', 'MCH18', 'BETTER', '2015-09-01', '25 MINUTES'),
('Preacher Bench', 'MCH19', 'GOOD', '2015-12-01', '25 MINUTES'),
('Pull Up Bar', 'MCH20', 'BETTER', '2017-08-15', '25 MINUTES'),
('Smith Machine', 'MCH21', 'BEST', '2017-08-15', '20 MINUTES'),
('Squat Rack', 'MCH22', 'BEST', '2017-08-15', '20 MINUTES'),
('Stability Ball', 'MCH23', 'BETTER', '2017-08-15', '10 MINUTES'),
('Wall Ball', 'MCH24', 'GOOD', '2017-08-15', 'UNLIMITED');

-- --------------------------------------------------------

--
-- Table structure for table `machine_damage`
--

CREATE TABLE `machine_damage` (
  `MACHINE_ID` text NOT NULL,
  `TYPE_OF_DAMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine_damage`
--

INSERT INTO `machine_damage` (`MACHINE_ID`, `TYPE_OF_DAMAGE`) VALUES
('MCH22', 'BROKEN BUT CAN BE USED'),
('MCH09', 'BROKEN BADLY');

-- --------------------------------------------------------

--
-- Table structure for table `steam_bath`
--

CREATE TABLE `steam_bath` (
  `STEAM_ROOM_ID` text NOT NULL,
  `LAST_MAINTENANCE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steam_bath`
--

INSERT INTO `steam_bath` (`STEAM_ROOM_ID`, `LAST_MAINTENANCE_DATE`) VALUES
('SR1', '2017-12-01'),
('SR2', '2017-12-11'),
('sr3', '2018-04-17'),
('sr2', '2018-04-20'),
('sr3', '2018-04-17'),
('sr2', '2018-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `steam_bath_history`
--

CREATE TABLE `steam_bath_history` (
  `STEAM_ROOM_ID` text NOT NULL,
  `STUDENT_ID` text NOT NULL,
  `LAST_DATE_OF_HAVING_BATH` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steam_bath_history`
--

INSERT INTO `steam_bath_history` (`STEAM_ROOM_ID`, `STUDENT_ID`, `LAST_DATE_OF_HAVING_BATH`) VALUES
('SR1', 'F001', '2017-11-22'),
('SR2', 'F003', '2017-12-01'),
('SR1', 'F006', '2017-12-03'),
('SR1', 'M014', '2017-11-20'),
('SR2', 'M009', '2017-11-13'),
('SR2 ', 'M021', '2017-11-16'),
('SR1', 'F005', '2017-10-11'),
('SR1', 'M003', '2017-09-12'),
('SR1', 'F005', '2017-07-19'),
('SR1', 'F016', '2017-08-18'),
('', '', '0000-00-00'),
('', '', '0000-00-00'),
('', '', '0000-00-00'),
('', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `instructor_name` varchar(200) NOT NULL,
  `STUDENT_NAME` varchar(100) NOT NULL,
  `student_id` int(4) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `ADDRESS` text NOT NULL,
  `ADMISSION_DATE` date NOT NULL,
  `SEX` varchar(100) NOT NULL,
  `gender` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`instructor_name`, `STUDENT_NAME`, `student_id`, `email`, `password`, `ADDRESS`, `ADMISSION_DATE`, `SEX`, `gender`) VALUES
('', 'red', 102, 'redwan@gmail.com', '12345', 'dhaka', '2018-02-28', '', 'Male'),
('redwan', 'najmul', 104, 'najmulhoq@gmail.com', '569856', 'bashundhara', '2018-03-29', '', 'Male'),
('Najmul', 'MUN', 105, 'me@gmail.com', 'redwan', 'FENI', '2018-03-01', '', 'Male'),
('aaaa', 'priyashish', 106, 'priyo@gmail.com', '123', 'dhaka', '2018-04-14', '', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `Gender` text NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Email` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`first_name`, `last_name`, `Gender`, `Phone_Number`, `Email`) VALUES
('Redwan', 'muntasir', 'MALE', 17000000, 114),
('Redwan', 'muntasir', 'MALE', 17000000, 114);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
