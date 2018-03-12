-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 08:40 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedie_base1`
--

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `feed_no` int(6) NOT NULL,
  `st_username` varchar(50) NOT NULL,
  `te_username` varchar(50) NOT NULL,
  `sub_code` varchar(7) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `cover` int(2) DEFAULT NULL,
  `discuss` int(2) DEFAULT NULL,
  `knowledge` int(2) DEFAULT NULL,
  `communicate` int(2) DEFAULT NULL,
  `inspire` int(2) DEFAULT NULL,
  `punctual` int(2) DEFAULT NULL,
  `engage` int(2) DEFAULT NULL,
  `prepare` int(2) DEFAULT NULL,
  `guidance` int(2) DEFAULT NULL,
  `available` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hods`
--

CREATE TABLE `hods` (
  `hod_username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dept` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hods`
--

INSERT INTO `hods` (`hod_username`, `password`, `dept`) VALUES
('AMBIKADEVI', 'csehod', 'CSE'),('ECEHOD', 'ecehod', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `rollno` varchar(10) NOT NULL,
  `st_username` varchar(25) NOT NULL,
  `class` varchar(8) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `done` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`rollno`, `st_username`, `class`, `password`, `done`) VALUES
('NCE15CS001', 'Aathira V E', 'CSE-A S6', 'aathira', 0),
('NCE15CS002', 'Abhijith C', 'CSE-A S6', 'abhijith', 0),
('NCE15CS004', 'Adith K V', 'CSE-A S6', 'adith', 0),
('NCE15CS006', 'Aishwarya Ravi', 'CSE-A S6', 'aiswarya', 0),
('NCE15CS007', 'Aiswarya S Prakash', 'CSE-A S6', 'aiswarya', 0),
('NCE15CS008', 'Ajith P G', 'CSE-A S6', 'ajith', 0),
('NCE15CS010', 'Akhila Keshav', 'CSE-A S6', 'akhila', 0),
('NCE15CS011', 'Akhila N', 'CSE-A S6', 'akhila', 0),
('NCE15CS012', 'Amrutha K B', 'CSE-A S6', 'amrutha', 0),
('NCE15CS013', 'Anagha S Thadathil', 'CSE-A S6', 'anagha', 0),
('NCE15CS014', 'Anjali Sunil', 'CSE-A S6', 'anjali', 0),
('NCE15CS015', 'Anjana Das', 'CSE-A S6', 'anjana', 0),
('NCE15CS016', 'Anusha K A', 'CSE-A S6', 'anusha', 0),
('NCE15CS017', 'Arjun Jayesh', 'CSE-A S6', 'arjun', 0),
('NCE15CS018', 'Aswathy M K', 'CSE-A S6', 'aswathy', 0),
('NCE15CS019', 'Athulya M K', 'CSE-A S6', 'athulya', 0),
('NCE15CS020', 'Baby Shafna K M', 'CSE-A S6', 'babyshafna', 0),
('NCE15CS022', 'Bindhuja P', 'CSE-A S6', 'bindhuja', 0),
('NCE15CS023', 'Chandni Chakkungal', 'CSE-A S6', 'chandni', 0),
('NCE15CS024', 'Devkiran M', 'CSE-A S6', 'devkiran', 0),
('NCE15CS025', 'Diya Lakshmi P', 'CSE-A S6', 'diyalakshmi', 0),
('NCE15CS026', 'Geethu Seby', 'CSE-A S6', 'geethu', 0),
('NCE15CS027', 'Heera Mohan', 'CSE-A S6', 'heera', 0),
('NCE15CS028', 'Ijas Ali', 'CSE-A S6', 'ijas', 0),
('NCE15CS029', 'Jayalakshmi S', 'CSE-A S6', 'jayalakshmi', 0),
('NCE15CS030', 'Jayaraj A', 'CSE-A S6', 'jayaraj', 0),
('NCE15CS031', 'Jijo Daniel', 'CSE-A S6', 'jijo', 0),
('NCE15CS033', 'Jithin P Ganesh', 'CSE-A S6', 'jithin', 0),
('NCE15CS032', 'Jithin Palathingal', 'CSE-A S6', 'jithin', 0),
('NCE15CS034', 'Jovial John George', 'CSE-A S6', 'jovial', 0),
('NCE15CS035', 'Keerthana Unnikrishnan', 'CSE-A S6', 'keerthana', 0),
('NCE15CS037', 'Liyas Thomas', 'CSE-A S6', 'liyas', 0),
('NCE15CS038', 'Meera M', 'CSE-A S6', 'meera', 0),
('NCE15CS040', 'Merin George C', 'CSE-A S6', 'merin', 0),
('NCE15CS041', 'Mohammed Anoop P N', 'CSE-A S6', 'anoop', 0),
('NCE15CS042', 'Muvin M', 'CSE-A S6', 'muvin', 0),
('NCE15CS043', 'Namitha H', 'CSE-A S6', 'namitha', 0),
('NCE15CS044', 'Nandini V K', 'CSE-A S6', 'nandini', 0),
('NCE15CS045', 'Nidhi K S', 'CSE-A S6', 'nidhi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `te_username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dept` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`te_username`, `password`, `dept`) VALUES
('ARUN K', 'arun', 'CSE'),
('BIJI K P', 'biji', 'CSE'),
('DEEPTHI', 'deepthi', 'CSE'),
('RESHMI H', 'reshmi', 'ECE'),
('SRUTHY M R', 'sruthy', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `teachersinfo`
--

CREATE TABLE `teachersinfo` (
  `info_no` int(6) NOT NULL,
  `te_username` varchar(50) NOT NULL,
  `class` varchar(8) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_code` varchar(7) NOT NULL,
  `dept` varchar(5) NOT NULL,
  `rank` int(5) DEFAULT NULL,
  `overall` int(3) DEFAULT NULL,
  `class_strength` int(3) NOT NULL,
  `feed_applied` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachersinfo`
--

INSERT INTO `teachersinfo` (`info_no`, `te_username`, `class`, `sub_name`, `sub_code`, `dept`, `rank`, `overall`, `class_strength`, `feed_applied`) VALUES
(1, 'ARUN K', 'CSE-A S6', 'Networking', 'CS306', 'CSE', NULL, NULL, 39, 0),
(2, 'RESHMI H', 'CSE-A S6', 'Management', 'HS300', 'ECE', NULL, NULL, 39, 0),
(3, 'SRUTHY M R', 'CSE-A S6', 'Design Algorithm', 'CS302', 'CSE', NULL, NULL, 39, 0),
(4, 'DEEPTHI', 'CSE-A S6', 'Compiler Design', 'CS304', 'CSE', NULL, NULL, 39, 0),
(5, 'BIJI K P', 'CSE-A S6', 'Software Engg', 'CS308', 'CSE', NULL, NULL, 39, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`feed_no`),
  ADD KEY `st_username` (`st_username`),
  ADD KEY `te_username` (`te_username`);

--
-- Indexes for table `hods`
--
ALTER TABLE `hods`
  ADD PRIMARY KEY (`hod_username`),
  ADD KEY `hod_username` (`hod_username`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_username`),
  ADD KEY `st_username` (`st_username`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`te_username`),
  ADD KEY `te_username` (`te_username`);

--
-- Indexes for table `teachersinfo`
--
ALTER TABLE `teachersinfo`
  ADD UNIQUE KEY `info_no` (`info_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `feed_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `teachersinfo`
--
ALTER TABLE `teachersinfo`
  MODIFY `info_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
