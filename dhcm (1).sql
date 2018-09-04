-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2016 at 07:11 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_officer`
--

CREATE TABLE IF NOT EXISTS `medical_officer` (
  `officer_id` int(6) NOT NULL,
  `fi_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `password` int(8) NOT NULL,
  `re_pass` int(8) NOT NULL,
  `dept_name` varchar(5) NOT NULL COMMENT '1.CSE 2.EEE 3.CE 4.ME 5.TE 6.IPE 7.ARC 8.MEDICAL',
  `contact` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_officer`
--

INSERT INTO `medical_officer` (`officer_id`, `fi_name`, `l_name`, `designation`, `password`, `re_pass`, `dept_name`, `contact`, `email`) VALUES
(1001, 'Dr. Emdad', 'Hossain', 'Head of medical center DUET', 123, 123, '8', 2147483647, 'emdad@duet.ac.bd'),
(124014, 'Rakib Md Ali', 'Shimul', 'officer', 123, 123, '1', 1611667795, 'Shimulxico@yahoo.com'),
(124040, 'rakib', 'shimul', 'officer', 123, 123, '1', 1711167795, 'shimul@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `std_id` int(6) NOT NULL,
  `test_id` int(11) NOT NULL,
  `test_result` varchar(50) DEFAULT NULL,
  `std_remark` varchar(20) NOT NULL,
  `report_date` date DEFAULT NULL,
  `next_checkup` date DEFAULT NULL,
  `doc_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`std_id`, `test_id`, `test_result`, `std_remark`, `report_date`, `next_checkup`, `doc_name`) VALUES
(124014, 1, 'Eye is normal ', 'Normal', '2015-12-01', '2016-12-01', 'Dr. Ajgor Ali'),
(124014, 2, 'Blood Pressure is normal', 'Normal', '2015-12-01', '2016-12-01', 'Dr.Rupon Hossain '),
(124014, 3, 'Blood Sugar is normal', 'Normal', '2015-12-01', '2016-12-01', 'Dr. Jinia Nasrin');

-- --------------------------------------------------------

--
-- Table structure for table `std_info`
--

CREATE TABLE IF NOT EXISTS `std_info` (
  `std_id` int(6) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(6) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `age` varchar(8) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `dept` varchar(3) NOT NULL,
  `year` varchar(3) NOT NULL,
  `semister` varchar(3) NOT NULL,
  `section` varchar(5) NOT NULL,
  `contact_no` int(16) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` int(8) DEFAULT NULL,
  `present_address` varchar(50) NOT NULL,
  `permanent_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_info`
--

INSERT INTO `std_info` (`std_id`, `first_name`, `last_name`, `gender`, `age`, `f_name`, `m_name`, `dept`, `year`, `semister`, `section`, `contact_no`, `email`, `password`, `present_address`, `permanent_address`) VALUES
(124014, 'Rakib Md Ali', 'Shimul', 'male', '24years', 'Bazlur Rahman', 'Rahmatunn nesa', 'cse', '3rd', '1st', 'a', 1711167795, 'shimulxico@yahoo.com', 123, 'DUET,GAZIPUR', 'DUET,GAZIPUR'),
(124016, 'Shimul', 'Xico', 'male', '24years', 'B.Rahman', 'R.Nessa.', 'cse', '3rd', '1st', 'a', 1611667795, 'shimul@yahoo.com', 123, 'DUET,GAZIPUR', 'DUET,GAZIPUR'),
(124018, 'robiul', 'alom', 'male', '25', 'RoSid', 'Halima khatun', '1', '3rd', '1st', 'A', 908376, 'robiul@gmail.com', 123, 'DUET,GAZIPUR', 'DUET,GAZIPUR');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(4) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `test_type` varchar(15) NOT NULL,
  `test_cost` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `test_type`, `test_cost`) VALUES
(1, 'Eye Test', 'minor', 150),
(2, 'Blood pressure', 'Minor', 20),
(3, 'Blood Suger', 'Minor', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_officer`
--
ALTER TABLE `medical_officer`
  ADD PRIMARY KEY (`officer_id`),
  ADD UNIQUE KEY `officer_id` (`officer_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`std_id`,`test_id`),
  ADD KEY `for_key` (`test_id`);

--
-- Indexes for table `std_info`
--
ALTER TABLE `std_info`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `std_id` (`std_id`),
  ADD UNIQUE KEY `contact_no` (`contact_no`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD UNIQUE KEY `test_id` (`test_id`),
  ADD UNIQUE KEY `test_name` (`test_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `fk` FOREIGN KEY (`std_id`) REFERENCES `std_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `for_key` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
