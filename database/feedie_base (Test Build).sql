-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 03:26 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedie_base`
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
  `q1` int(2) DEFAULT NULL,
  `q2` int(2) DEFAULT NULL,
  `q3` int(2) DEFAULT NULL,
  `q4` int(2) DEFAULT NULL,
  `q5` int(2) DEFAULT NULL,
  `q6` int(2) DEFAULT NULL,
  `q7` int(2) DEFAULT NULL,
  `q8` int(2) DEFAULT NULL,
  `q9` int(2) DEFAULT NULL,
  `q10` int(2) DEFAULT NULL
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
('AUEHOD', 'auehod', 'AUE'),
('CSEHOD', 'csehod', 'CSE'),
('ECEHOD', 'eceecehod', 'ECE'),
('EEEHOD', 'eeehod', 'EEE'),
('MEHOD', 'mehod', 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `maintainers`
--

CREATE TABLE `maintainers` (
  `ma_username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintainers`
--

INSERT INTO `maintainers` (`ma_username`, `password`) VALUES
('master', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `quest_id` int(2) NOT NULL,
  `quest_content` varchar(250) DEFAULT NULL,
  `quest_value` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quest_id`, `quest_content`, `quest_value`) VALUES
(1, 'The teacher covers the entire syllabus', 0),
(2, 'The teacher discusses topics in detail', 0),
(3, 'The teacher possesses deep knowledge of the subject taught', 0),
(4, 'The teacher communicate clearly', 0),
(5, 'The teacher inspires me by his/her knowledge in the subject', 0),
(6, 'The teacher is punctual to the class', 0),
(7, 'The teacher engages the class for the full duration and completes the course in time', 0),
(8, 'The teacher comes fully prepared for the class', 0),
(9, 'The teacher provide guidance outside/inside the class', 0),
(10, 'The teacher was available to answer questions in office hours', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `r_no` int(1) NOT NULL,
  `r_value` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`r_no`, `r_value`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

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
/* S2 CSE-A (TOTAL: 31) */
('NCE15CS053', 'Harikrishnan C H', 'CSE-A S2', 'nce15cs053', 0),
('NCE17CS001', 'Adith S', 'CSE-A S2', 'nce17cs001', 0),
('NCE17CS002', 'Afseena A', 'CSE-A S2', 'nce17cs002', 0),
('NCE17CS003', 'Aiswarya M', 'CSE-A S2', 'nce17cs003', 0),
('NCE17CS004', 'Akarsh K Murthy', 'CSE-A S2', 'nce17cs004', 0),
('NCE17CS005', 'Akshay Sanker M', 'CSE-A S2', 'nce17cs005', 0),
('NCE17CS006', 'Amrutha R', 'CSE-A S2', 'nce17cs006', 0),
('NCE17CS008', 'Anu P', 'CSE-A S2', 'nce17cs008', 0),
('NCE17CS009', 'Anupama V S', 'CSE-A S2', 'nce17cs009', 0),
('NCE17CS010', 'Deepika R', 'CSE-A S2', 'nce17cs010', 0),
('NCE17CS011', 'Devika S Nair', 'CSE-A S2', 'nce17cs011', 0),
('NCE17CS012', 'Divya P', 'CSE-A S2', 'nce17cs012', 0),
('NCE17CS013', 'Fathima Nasreen K H', 'CSE-A S2', 'nce17cs013', 0),
('NCE17CS014', 'Goutham Gopinath', 'CSE-A S2', 'nce17cs014', 0),
('NCE17CS015', 'Leenu Mathew', 'CSE-A S2', 'nce17cs015', 0),
('NCE17CS016', 'Likha', 'CSE-A S2', 'nce17cs016', 0),
('NCE17CS017', 'Nishana N', 'CSE-A S2', 'nce17cs017', 0),
('NCE17CS018', 'Risna C M', 'CSE-A S2', 'nce17cs018', 0),
('NCE17CS019', 'Rohit Bhaskar Uday', 'CSE-A S2', 'nce17cs019', 0),
('NCE17CS020', 'S Suhaila  ', 'CSE-A S2', 'nce17cs020', 0),
('NCE17CS021', 'Sahla K', 'CSE-A S2', 'nce17cs021', 0),
('NCE17CS022', 'Sanmayanandkrishna A H', 'CSE-A S2', 'nce17cs022', 0),
('NCE17CS023', 'Shibila S', 'CSE-A S2', 'nce17cs023', 0),
('NCE17CS024', 'Shinu ', 'CSE-A S2', 'nce17cs024', 0),
('NCE17CS025', 'Silpa C ', 'CSE-A S2', 'nce17cs025', 0),
('NCE17CS026', 'Silpa M S', 'CSE-A S2', 'nce17cs026', 0),
('NCE17CS027', 'Sneha A', 'CSE-A S2', 'nce17cs027', 0),
('NCE17CS028', 'Vipindas V R', 'CSE-A S2', 'nce17cs028', 0),
('NCE17CS029', 'Vishnu H', 'CSE-A S2', 'nce17cs029', 0),
('NCE17CS030', 'Vishnu S', 'CSE-A S2', 'nce17cs030', 0),
/* S4 CSE-A (TOTAL: 58) */
('NCE16CS001', 'Abhijith P U', 'CSE-A S4', 'nce16cs001', 0),
('NCE16CS002', 'Abhijith Warrier', 'CSE-A S4', 'nce16cs002', 0),
('NCE16CS003', 'Abhinand N ', 'CSE-A S4', 'nce16cs003', 0),
('NCE16CS004', 'Abijith P', 'CSE-A S4', 'nce16cs004', 0),
('NCE16CS005', 'Acksa Varghese', 'CSE-A S4', 'nce16cs005', 0),
('NCE16CS006', 'Adarsh R', 'CSE-A S4', 'nce16cs006', 0),
('NCE16CS007', 'Adithyan D', 'CSE-A S4', 'nce16cs007', 0),
('NCE16CS008', 'Aditya Padmanabhan', 'CSE-A S4', 'nce16cs008', 0),
('NCE16CS009', 'Agil Krishna', 'CSE-A S4', 'nce16cs009', 0),
('NCE16CS010', 'Ahlad V K', 'CSE-A S4', 'nce16cs010', 0),
('NCE16CS011', 'Aiswarya Jagadeesh', 'CSE-A S4', 'nce16cs011', 0),
('NCE16CS012', 'Aiswarya Raj', 'CSE-A S4', 'nce16cs012', 0),
('NCE16CS013', 'Ajay E K', 'CSE-A S4', 'nce16cs013', 0),
('NCE16CS014', 'Ajmal Roshan K C', 'CSE-A S4', 'nce16cs014', 0),
('NCE16CS015', 'Akhila V', 'CSE-A S4', 'nce16cs015', 0),
('NCE16CS017', 'Akhil K P ', 'CSE-A S4', 'nce16cs017', 0),
('NCE16CS018', 'Akhil M', 'CSE-A S4', 'nce16cs018', 0),
('NCE16CS019', 'Akhil T P', 'CSE-A S4', 'nce16cs019', 0),
('NCE16CS020', 'Akshay Kumar R', 'CSE-A S4', 'nce16cs020', 0),
('NCE16CS022', 'Amrutha.R', 'CSE-A S4', 'nce16cs022', 0),
('NCE16CS023', 'Anand Krishnan N M', 'CSE-A S4', 'nce16cs023', 0),
('NCE16CS024', 'Anjana R', 'CSE-A S4', 'nce16cs024', 0),
('NCE16CS026', 'Ansar A', 'CSE-A S4', 'nce16cs026', 0),
('NCE16CS027', 'Anupriya Vijayan E K', 'CSE-A S4', 'nce16cs027', 0),
('NCE16CS028', 'Archana R', 'CSE-A S4', 'nce16cs028', 0),
('NCE16CS029', 'Ardra P', 'CSE-A S4', 'nce16cs029', 0),
('NCE16CS030', 'Arjun Balachandran', 'CSE-A S4', 'nce16cs030', 0),
('NCE16CS031', 'Arun P', 'CSE-A S4', 'nce16cs031', 0),
('NCE16CS033', 'Athira Murali T E', 'CSE-A S4', 'nce16cs033', 0),
('NCE16CS034', 'Atul I Nair', 'CSE-A S4', 'nce16cs034', 0),
('NCE16CS035', 'Ayisha', 'CSE-A S4', 'nce16cs035', 0),
('NCE16CS036', 'Ayisha Showkath ', 'CSE-A S4', 'nce16cs036', 0),
('NCE16CS037', 'Beneetta P B', 'CSE-A S4', 'nce16cs037', 0),
('NCE16CS038', 'Bijith Kaladharan', 'CSE-A S4', 'nce16cs038', 0),
('NCE16CS039', 'Chaithra K M', 'CSE-A S4', 'nce16cs039', 0),
('NCE16CS040', 'Cheloor Saravanan', 'CSE-A S4', 'nce16cs040', 0),
('NCE16CS041', 'Deepthidas R', 'CSE-A S4', 'nce16cs041', 0),
('NCE16CS042', 'Dhanish I', 'CSE-A S4', 'nce16cs042', 0),
('NCE16CS043', 'Dhanya V ', 'CSE-A S4', 'nce16cs043', 0),
('NCE16CS044', 'Dhaya V Nair', 'CSE-A S4', 'nce16cs044', 0),
('NCE16CS045', 'Dhrishya Vijayan', 'CSE-A S4', 'nce16cs045', 0),
('NCE16CS046', 'Fidha C S', 'CSE-A S4', 'nce16cs046', 0),
('NCE16CS047', 'Girish C', 'CSE-A S4', 'nce16cs047', 0),
('NCE16CS048', 'Gopika G Nair', 'CSE-A S4', 'nce16cs048', 0),
('NCE16CS049', 'Gopika J', 'CSE-A S4', 'nce16cs049', 0),
('NCE16CS050', 'Gopika V', 'CSE-A S4', 'nce16cs050', 0),
('NCE16CS051', 'Gowtham Kumar J', 'CSE-A S4', 'nce16cs051', 0),
('NCE16CS052', 'Greeshma Surendran', 'CSE-A S4', 'nce16cs052', 0),
('NCE16CS053', 'Hareesh P V', 'CSE-A S4', 'nce16cs053', 0),
('NCE16CS055', 'Hijaz Ibrahim', 'CSE-A S4', 'nce16cs055', 0),
('NCE16CS056', 'Hridya A H', 'CSE-A S4', 'nce16cs056', 0),
('NCE16CS057', 'I B Amritha', 'CSE-A S4', 'nce16cs057', 0),
('NCE16CS060', 'Jishnu Raj', 'CSE-A S4', 'nce16cs060', 0),
('NCE16CS061', 'Jithin B', 'CSE-A S4', 'nce16cs061', 0),
('NCE16CS062', 'Karthik K S', 'CSE-A S4', 'nce16cs062', 0),
('NCE15CS039', 'Megha A U', 'CSE-A S4', 'nce15cs039', 0),
('NCE15CS053', 'Prasanth S', 'CSE-A S4', 'nce15cs053', 0),
('NCE15CS054', 'Rahul Dev', 'CSE-A S4', 'nce15cs054', 0),
/* S4 CSE-B (TOTAL: 57) */
('LNCE16CS123',	'Vinduja Narayanan K', 'CSE-B S4', 'lnce16cs123', 0),
('NCE15CS052', 'Prasad D', 'CSE-B S4', 'nce15cs052', 0),
('NCE16CS063', 'Kavya Prasad', 'CSE-B S4', 'nce16cs063', 0),
('NCE16CS064', 'Layana T V', 'CSE-B S4', 'nce16cs064', 0),
('NCE16CS065', 'Madheena Beegam A', 'CSE-B S4', 'nce16cs065', 0),
('NCE16CS066', 'Manju K M', 'CSE-B S4', 'nce16cs066', 0),
('NCE16CS067', 'Manu M', 'CSE-B S4', 'nce16cs067', 0),
('NCE16CS068', 'Mathew Albert Shibu', 'CSE-B S4', 'nce16cs068', 0),
('NCE16CS069', 'Minu O', 'CSE-B S4', 'nce16cs069', 0),
('NCE16CS070', 'Mohammed Faisal K V', 'CSE-B S4', 'nce16cs070', 0),
('NCE16CS071', 'Mridula Parthan', 'CSE-B S4', 'nce16cs071', 0),
('NCE16CS072', 'Muhammad Mubashir T', 'CSE-B S4', 'nce16cs072', 0),
('NCE16CS073', 'Muhammad Niyas K K', 'CSE-B S4', 'nce16cs073', 0),
('NCE16CS074', 'Nair Krishnanjali ', 'CSE-B S4', 'nce16cs074', 0),
('NCE16CS075', 'Navaneeth K', 'CSE-B S4', 'nce16cs075', 0),
('NCE16CS076', 'Nikhil M', 'CSE-B S4', 'nce16cs076', 0),
('NCE16CS079', 'Niyas S', 'CSE-B S4', 'nce16cs079', 0),
('NCE16CS080', 'Parvathi P', 'CSE-B S4', 'nce16cs080', 0),
('NCE16CS081', 'Parvathy M', 'CSE-B S4', 'nce16cs081', 0),
('NCE16CS082', 'P Goutham', 'CSE-B S4', 'nce16cs082', 0),
('NCE16CS083', 'Pooja Krishnan', 'CSE-B S4', 'nce16cs083', 0),
('NCE16CS084', 'Pooja S Nair', 'CSE-B S4', 'nce16cs084', 0),
('NCE16CS085', 'Pranav A K', 'CSE-B S4', 'nce16cs085', 0),
('NCE16CS087', 'Prasad Praveen', 'CSE-B S4', 'nce16cs087', 0),
('NCE16CS088', 'Priyamvada K', 'CSE-B S4', 'nce16cs088', 0),
('NCE16CS089', 'Rajkiran V R', 'CSE-B S4', 'nce16cs089', 0),
('NCE16CS090', 'Ramsiya M', 'CSE-B S4', 'nce16cs090', 0),
('NCE16CS091', 'Rasikh Mohammed K', 'CSE-B S4', 'nce16cs091', 0),
('NCE16CS092', 'Reema N B', 'CSE-B S4', 'nce16cs092', 0),
('NCE16CS093', 'Renjith Krishna Menon', 'CSE-B S4', 'nce16cs093', 0),
('NCE16CS094', 'Reshma     ', 'CSE-B S4', 'nce16cs094', 0),
('NCE16CS095', 'Reshma Vijayakumar', 'CSE-B S4', 'nce16cs095', 0),
('NCE16CS096', 'Rohith T R', 'CSE-B S4', 'nce16cs096', 0),
('NCE16CS097', 'Roshin Sosa Philip', 'CSE-B S4', 'nce16cs097', 0),
('NCE16CS099', 'Shafeeq Rahman C P', 'CSE-B S4', 'nce16cs099', 0),
('NCE16CS100', 'Shahad S', 'CSE-B S4', 'nce16cs100', 0),
('NCE16CS101', 'Shahina V', 'CSE-B S4', 'nce16cs101', 0),
('NCE16CS102', 'Shree Parvathy Devi M', 'CSE-B S4', 'nce16cs102', 0),
('NCE16CS103', 'Sivarajan M', 'CSE-B S4', 'nce16cs103', 0),
('NCE16CS104', 'Sneha T', 'CSE-B S4', 'nce16cs104', 0),
('NCE16CS105', 'Sreejith D Nair', 'CSE-B S4', 'nce16cs105', 0),
('NCE16CS106', 'Sreejith S Kumar', 'CSE-B S4', 'nce16cs106', 0),
('NCE16CS107', 'Sreeju S', 'CSE-B S4', 'nce16cs107', 0),
('NCE16CS108', 'Sreelakshmi Girisan', 'CSE-B S4', 'nce16cs108', 0),
('NCE16CS109', 'Sreelakshmi T V', 'CSE-B S4', 'nce16cs109', 0),
('NCE16CS110', 'Sreeshma M', 'CSE-B S4', 'nce16cs110', 0),
('NCE16CS111', 'Srinath G', 'CSE-B S4', 'nce16cs111', 0),
('NCE16CS112', 'Surjith Shankar S', 'CSE-B S4', 'nce16cs112', 0),
('NCE16CS113', 'Swetha N V', 'CSE-B S4', 'nce16cs113', 0),
('NCE16CS114', 'Thasini A', 'CSE-B S4', 'nce16cs114', 0),
('NCE16CS115', 'Ummer Hashim M', 'CSE-B S4', 'nce16cs115', 0),
('NCE16CS116', 'Vani Suresh', 'CSE-B S4', 'nce16cs116', 0),
('NCE16CS117', 'Vignesh C R', 'CSE-B S4', 'nce16cs117', 0),
('NCE16CS118', 'Vinayak Dev M', 'CSE-B S4', 'nce16cs118', 0),
('NCE16CS119', 'Vishnu Prasad E', 'CSE-B S4', 'nce16cs119', 0),
('NCE16CS120', 'Viswas     ', 'CSE-B S4', 'nce16cs120', 0),
('NCE16CS121', 'Vydehi K', 'CSE-B S4', 'nce16cs121', 0),
/* S6 CSE-A (TOTAL: 39) */
('NCE15CS001', 'Aathira V E', 'CSE-A S6', 'nce15cs001', 0),
('NCE15CS002', 'Abhijith C', 'CSE-A S6', 'nce15cs002', 0),
('NCE15CS004', 'Adith K V', 'CSE-A S6', 'nce15cs004', 0),
('NCE15CS006', 'Aishwarya Ravi', 'CSE-A S6', 'nce15cs006', 0),
('NCE15CS007', 'Aiswarya S Prakash', 'CSE-A S6', 'nce15cs007', 0),
('NCE15CS008', 'Ajith P G', 'CSE-A S6', 'nce15cs008', 0),
('NCE15CS010', 'Akhila Keshav', 'CSE-A S6', 'nce15cs010', 0),
('NCE15CS011', 'Akhila N', 'CSE-A S6', 'nce15cs011', 0),
('NCE15CS012', 'Amrutha K B', 'CSE-A S6', 'nce15cs012', 0),
('NCE15CS013', 'Anagha S Thadathil', 'CSE-A S6', 'nce15cs013', 0),
('NCE15CS014', 'Anjali Sunil', 'CSE-A S6', 'nce15cs014', 0),
('NCE15CS015', 'Anjana Das', 'CSE-A S6', 'nce15cs015', 0),
('NCE15CS016', 'Anusha K A', 'CSE-A S6', 'nce15cs016', 0),
('NCE15CS017', 'Arjun Jayesh', 'CSE-A S6', 'nce15cs017', 0),
('NCE15CS018', 'Aswathy M K', 'CSE-A S6', 'nce15cs018', 0),
('NCE15CS019', 'Athulya M K', 'CSE-A S6', 'nce15cs019', 0),
('NCE15CS020', 'Baby Shafna K M', 'CSE-A S6', 'nce15cs020', 0),
('NCE15CS022', 'Bindhuja P', 'CSE-A S6', 'nce15cs022', 0),
('NCE15CS023', 'Chandni Chakkungal', 'CSE-A S6', 'nce15cs023', 0),
('NCE15CS024', 'Devkiran M', 'CSE-A S6', 'nce15cs024', 0),
('NCE15CS025', 'Diya Lakshmi P', 'CSE-A S6', 'nce15cs025', 0),
('NCE15CS026', 'Geethu Seby', 'CSE-A S6', 'nce15cs026', 0),
('NCE15CS027', 'Heera Mohan', 'CSE-A S6', 'nce15cs027', 0),
('NCE15CS028', 'Ijas Ali', 'CSE-A S6', 'nce15cs028', 0),
('NCE15CS029', 'Jayalakshmi S', 'CSE-A S6', 'nce15cs029', 0),
('NCE15CS030', 'Jayaraj A', 'CSE-A S6', 'nce15cs030', 0),
('NCE15CS031', 'Jijo Daniel', 'CSE-A S6', 'nce15cs031', 0),
('NCE15CS033', 'Jithin P Ganesh', 'CSE-A S6', 'nce15cs033', 0),
('NCE15CS032', 'Jithin Palathingal', 'CSE-A S6', 'nce15cs032', 0),
('NCE15CS034', 'Jovial John George', 'CSE-A S6', 'nce15cs034', 0),
('NCE15CS035', 'Keerthana Unnikrishnan', 'CSE-A S6', 'nce15cs035', 0),
('NCE15CS037', 'Liyas Thomas', 'CSE-A S6', 'nce15cs037', 0),
('NCE15CS038', 'Meera M', 'CSE-A S6', 'nce15cs038', 0),
('NCE15CS040', 'Merin George C', 'CSE-A S6', 'nce15cs040', 0),
('NCE15CS041', 'Mohammed Anoop P N', 'CSE-A S6', 'nce15cs041', 0),
('NCE15CS042', 'Muvin M', 'CSE-A S6', 'nce15cs042', 0),
('NCE15CS043', 'Namitha H', 'CSE-A S6', 'nce15cs043', 0),
('NCE15CS044', 'Nandini V K', 'CSE-A S6', 'nce15cs044', 0),
('NCE15CS045', 'Nidhi K S', 'CSE-A S6', 'nce15cs045', 0),
/* S6 CSE-B (TOTAL: 39) */
('NCE15CS046', 'Nikhil Nair', 'CSE-B S6', 'nce15cs046', 0),
('NCE15CS047', 'Nirmal K', 'CSE-B S6', 'nce15cs047', 0),
('NCE15CS048', 'Nithin P', 'CSE-B S6', 'nce15cs048', 0),
('NCE15CS049', 'Noel Jackson', 'CSE-B S6', 'nce15cs049', 0),
('NCE15CS050', 'Nusaiba K K', 'CSE-B S6', 'nce15cs050', 0),
('NCE15CS051', 'Pranav P S', 'CSE-B S6', 'nce15cs051', 0),
('NCE15CS055', 'Rahul K', 'CSE-B S6', 'nce15cs055', 0),
('NCE15CS056', 'Raphel Shaji', 'CSE-B S6', 'nce15cs056', 0),
('NCE15CS057', 'Rehana K C', 'CSE-B S6', 'nce15cs057', 0),
('NCE15CS058', 'Resmi M', 'CSE-B S6', 'nce15cs058', 0),
('NCE15CS059', 'Rishika P P', 'CSE-B S6', 'nce15cs059', 0),
('NCE15CS060', 'Rohit', 'CSE-B S6', 'nce15cs060', 0),
('NCE15CS061', 'Rohith M S', 'CSE-B S6', 'nce15cs061', 0),
('NCE15CS062', 'Roopesh R', 'CSE-B S6', 'nce15cs062', 0),
('NCE15CS063', 'Safna A M', 'CSE-B S6', 'nce15cs063', 0),
('NCE15CS064', 'Sanjai A', 'CSE-B S6', 'nce15cs064', 0),
('NCE15CS065', 'Shafna S', 'CSE-B S6', 'nce15cs065', 0),
('NCE15CS066', 'Shahana P B', 'CSE-B S6', 'nce15cs066', 0),
('NCE15CS067', 'Shyam Prakash S', 'CSE-B S6', 'nce15cs067', 0),
('NCE15CS068', 'Shyamaprasad V', 'CSE-B S6', 'nce15cs068', 0),
('NCE15CS069', 'Sindhuja M S', 'CSE-B S6', 'nce15cs069', 0),
('NCE15CS070', 'Sneha C', 'CSE-B S6', 'nce15cs070', 0),
('NCE15CS071', 'Sreejith E R', 'CSE-B S6', 'nce15cs071', 0),
('NCE15CS072', 'Sruthi P', 'CSE-B S6', 'nce15cs072', 0),
('NCE15CS074', 'Sufyan P K', 'CSE-B S6', 'nce15cs074', 0),
('NCE15CS075', 'Sumayya Sherin S', 'CSE-B S6', 'nce15cs075', 0),
('NCE15CS076', 'Swathi S', 'CSE-B S6', 'nce15cs076', 0),
('NCE15CS077', 'Swetha Subrahmanian P', 'CSE-B S6', 'nce15cs077', 0),
('NCE15CS078', 'Swetha V Devan', 'CSE-B S6', 'nce15cs078', 0),
('NCE15CS079', 'Thushara Thulasidas Nair', 'CSE-B S6', 'nce15cs079', 0),
('NCE15CS080', 'Vaishnavi Santhosh', 'CSE-B S6', 'nce15cs080', 0),
('NCE15CS081', 'Varadarajan A H', 'CSE-B S6', 'nce15cs081', 0),
('NCE15CS082', 'Vineeth V', 'CSE-B S6', 'nce15cs082', 0),
('NCE15CS083', 'Vineetha V', 'CSE-B S6', 'nce15cs083', 0),
('NCE15CS084', 'Vishnu B', 'CSE-B S6', 'nce15cs084', 0),
('NCE15CS086', 'Vishnu Prasad M K', 'CSE-B S6', 'nce15cs086', 0),
('NCE15CS085', 'Vishnu R', 'CSE-B S6', 'nce15cs085', 0),
('NCE15CS087', 'Vivek T V', 'CSE-B S6', 'nce15cs087', 0),
('PCE15CS005', 'Jeffi Reji', 'CSE-B S6', 'pce15cs005', 0),
/* EEE-A S6 (TOTAL: 63) */
('NCE15EE001', 'Abhijit Krishnan A', 'EEE-A S6', 'nce15ee001', 0),
('NCE15EE002', 'Abhiram C K', 'EEE-A S6', 'nce15ee002', 0),
('NCE15EE003', 'Aboo Faris', 'EEE-A S6', 'nce15ee003', 0),
('NCE15EE004', 'Adithya Krishna', 'EEE-A S6', 'nce15ee004', 0),
('NCE15EE005', 'Ambili V', 'EEE-A S6', 'nce15ee005', 0),
('NCE15EE006', 'Anjali A', 'EEE-A S6', 'nce15ee006', 0),
('NCE15EE007', 'Anjith. R. Nair', 'EEE-A S6', 'nce15ee007', 0),
('NCE15EE008', 'Arjun A', 'EEE-A S6', 'nce15ee008', 0),
('NCE15EE009', 'Arjun Sasikumar', 'EEE-A S6', 'nce15ee009', 0),
('NCE15EE010', 'Arjun Surendran', 'EEE-A S6', 'nce15ee010', 0),
('NCE15EE011', 'Arshifa A', 'EEE-A S6', 'nce15ee011', 0),
('NCE15EE012', 'Arun V P', 'EEE-A S6', 'nce15ee012', 0),
('NCE15EE013', 'Arun Mohan V', 'EEE-A S6', 'nce15ee013', 0),
('NCE15EE014', 'Aswathy A', 'EEE-A S6', 'nce15ee014', 0),
('NCE15EE015', 'Athira S', 'EEE-A S6', 'nce15ee015', 0),
('NCE15EE016', 'Athul Kamal R', 'EEE-A S6', 'nce15ee016', 0),
('NCE15EE017', 'Basil P. Poulose', 'EEE-A S6', 'nce15ee017', 0),
('NCE15EE018', 'Binu Raj C', 'EEE-A S6', 'nce15ee018', 0),
('NCE15EE019', 'Davis Varghese', 'EEE-A S6', 'nce15ee019', 0),
('NCE15EE020', 'Deon Mohammed', 'EEE-A S6', 'nce15ee020', 0),
('NCE15EE021', 'Diya R', 'EEE-A S6', 'nce15ee021', 0),
('NCE15EE022', 'Gayathri Muralidharan', 'EEE-A S6', 'nce15ee022', 0),
('NCE15EE023', 'Greeshma K', 'EEE-A S6', 'nce15ee023', 0),
('NCE15EE024', 'Harikrishna P', 'EEE-A S6', 'nce15ee024', 0),
('NCE15EE025', 'Hima M', 'EEE-A S6', 'nce15ee025', 0),
('NCE15EE026', 'Hima M M', 'EEE-A S6', 'nce15ee026', 0),
('NCE15EE027', 'Jagath G', 'EEE-A S6', 'nce15ee027', 0),
('NCE15EE028', 'Jayakrishnan K', 'EEE-A S6', 'nce15ee028', 0),
('NCE15EE029', 'Karthik R Revi', 'EEE-A S6', 'nce15ee029', 0),
('NCE15EE030', 'Kripa Krishna A', 'EEE-A S6', 'nce15ee030', 0),
('NCE15EE031', 'Krishnadas K', 'EEE-A S6', 'nce15ee031', 0),
('NCE15EE032', 'P Krishnakumar', 'EEE-A S6', 'nce15ee032', 0),
('NCE15EE033', 'Lesly Catherine', 'EEE-A S6', 'nce15ee033', 0),
('NCE15EE034', 'Midun S', 'EEE-A S6', 'nce15ee034', 0),
('NCE15EE035', 'Mohammed Ibrahim N', 'EEE-A S6', 'nce15ee035', 0),
('NCE15EE036', 'Nelson P O', 'EEE-A S6', 'nce15ee036', 0),
('NCE15EE037', 'Nirmal Prasad', 'EEE-A S6', 'nce15ee037', 0),
('NCE15EE038', 'Parameswaran T K ', 'EEE-A S6', 'nce15ee038', 0),
('NCE15EE039', 'Pavan Krishnan K A', 'EEE-A S6', 'nce15ee039', 0),
('NCE15EE040', 'Prajitha K Nair', 'EEE-A S6', 'nce15ee040', 0),
('NCE15EE041', 'Pranavkumar S', 'EEE-A S6', 'nce15ee041', 0),
('NCE15EE042', 'Premjith V K', 'EEE-A S6', 'nce15ee042', 0),
('NCE15EE043', 'Rajalakshmy S', 'EEE-A S6', 'nce15ee043', 0),
('NCE15EE044', 'Reshma Raj K', 'EEE-A S6', 'nce15ee044', 0),
('NCE15EE045', 'Sai Krishnan', 'EEE-A S6', 'nce15ee045', 0),
('NCE15EE046', 'Sandeep  T C', 'EEE-A S6', 'nce15ee046', 0),
('NCE15EE047', 'Sangeetha V', 'EEE-A S6', 'nce15ee047', 0),
('NCE15EE048', 'Sanjay.S', 'EEE-A S6', 'nce15ee048', 0),
('NCE15EE049', 'Shanila P', 'EEE-A S6', 'nce15ee049', 0),
('NCE15EE050', 'Shareefa P A', 'EEE-A S6', 'nce15ee050', 0),
('NCE15EE051', 'Shilpa Manikandan', 'EEE-A S6', 'nce15ee051', 0),
('NCE15EE052', 'Sruthi Ram Kumar', 'EEE-A S6', 'nce15ee052', 0),
('NCE15EE053', 'Sujith V', 'EEE-A S6', 'nce15ee053', 0),
('NCE15EE054', 'Susmitha P', 'EEE-A S6', 'nce15ee054', 0),
('NCE15EE055', 'Vishnu V', 'EEE-A S6', 'nce15ee055', 0),
('NCE15EE056', 'Vishnu Menon P', 'EEE-A S6', 'nce15ee056', 0),
('LNCE15EE057', 'Aravind S Sankar', 'EEE-A S6', 'lnce15ee057', 0),
('LNCE15EE058', 'Faisal P M', 'EEE-A S6', 'lnce15ee058', 0),
('LNCE15EE059', 'Jeevan', 'EEE-A S6', 'lnce15ee059', 0),
('LNCE15EE060', 'Jomon George', 'EEE-A S6', 'lnce15ee060', 0),
('LNCE15EE061', 'Nived M Jayan', 'EEE-A S6', 'lnce15ee061', 0),
('LNCE15EE062', 'Rony C Joshy', 'EEE-A S6', 'lnce15ee062', 0),
('LNCE15EE063', 'Sreejith V S', 'EEE-A S6', 'lnce15ee063', 0),
/* EEE-A S4 (TOTAL: 43) */
('NCE16EE001', 'Aardhra T V', 'EEE-A S4', 'nce16ee001', 0),
('NCE16EE002', 'Abhijith S', 'EEE-A S4', 'nce16ee002', 0),
('NCE16EE003', 'Abhishek P M', 'EEE-A S4', 'nce16ee003', 0),
('NCE16EE004', 'Adithian S', 'EEE-A S4', 'nce16ee004', 0),
('NCE16EE005', 'Adithyan K G', 'EEE-A S4', 'nce16ee005', 0),
('NCE16EE006', 'Aghil K B', 'EEE-A S4', 'nce16ee006', 0),
('NCE16EE007', 'Aiswarya Nair A', 'EEE-A S4', 'nce16ee007', 0),
('NCE16EE008', 'Ajay Ram P Nair', 'EEE-A S4', 'nce16ee008', 0),
('NCE16EE009', 'Ajmal M', 'EEE-A S4', 'nce16ee009', 0),
('NCE16EE010', 'Akhil T R', 'EEE-A S4', 'nce16ee010', 0),
('NCE16EE011', 'Akshay G', 'EEE-A S4', 'nce16ee011', 0),
('NCE16EE014', 'Anne Mary Thomas', 'EEE-A S4', 'nce16ee014', 0),
('NCE16EE015', 'Arun K Narayanan', 'EEE-A S4', 'nce16ee015', 0),
('NCE16EE016', 'Arun K S', 'EEE-A S4', 'nce16ee016', 0),
('NCE16EE018', 'Athul B', 'EEE-A S4', 'nce16ee018', 0),
('NCE16EE019', 'Bavin B', 'EEE-A S4', 'nce16ee019', 0),
('NCE16EE020', 'Bhavana V', 'EEE-A S4', 'nce16ee020', 0),
('NCE16EE021', 'Dona Clinfard P', 'EEE-A S4', 'nce16ee021', 0),
('NCE16EE022', 'Gopika Krishnan K', 'EEE-A S4', 'nce16ee022', 0),
('NCE16EE023', 'Gopika S', 'EEE-A S4', 'nce16ee023', 0),
('NCE16EE025', 'Karthika K', 'EEE-A S4', 'nce16ee025', 0),
('NCE16EE026', 'Kiran K Narayanan', 'EEE-A S4', 'nce16ee026', 0),
('NCE16EE027', 'Meera.M', 'EEE-A S4', 'nce16ee027', 0),
('NCE16EE028', 'Megha G', 'EEE-A S4', 'nce16ee028', 0),
('NCE16EE029', 'Mohammed Nizamudheen', 'EEE-A S4', 'nce16ee029', 0),
('NCE16EE030', 'Muahammed Faisal K T', 'EEE-A S4', 'nce16ee030', 0),
('NCE16EE031', 'Naveen Ravindran', 'EEE-A S4', 'nce16ee031', 0),
('NCE16EE032', 'Nithin Babu', 'EEE-A S4', 'nce16ee032', 0),
('NCE16EE033', 'Pradeep J', 'EEE-A S4', 'nce16ee033', 0),
('NCE16EE034', 'P Sruthi', 'EEE-A S4', 'nce16ee034', 0),
('NCE16EE035', 'Ramadas K', 'EEE-A S4', 'nce16ee035', 0),
('NCE16EE036', 'R Harikrishnan', 'EEE-A S4', 'nce16ee036', 0),
('NCE16EE037', 'Rohith  V', 'EEE-A S4', 'nce16ee037', 0),
('NCE16EE038', 'Salini M', 'EEE-A S4', 'nce16ee038', 0),
('NCE16EE039', 'Sanjana S', 'EEE-A S4', 'nce16ee039', 0),
('NCE16EE040', 'Sidharth S Menon', 'EEE-A S4', 'nce16ee040', 0),
('NCE16EE041', 'Sooraj M S', 'EEE-A S4', 'nce16ee041', 0),
('NCE16EE042', 'Susmitha T M', 'EEE-A S4', 'nce16ee042', 0),
('NCE16EE043', 'Ujjwal K Menon', 'EEE-A S4', 'nce16ee043', 0),
('NCE16EE044', 'Vikas V', 'EEE-A S4', 'nce16ee044', 0),
('NCE16EE045', 'Vipin V', 'EEE-A S4', 'nce16ee045', 0),
/* ('', 'Anil K R', 'EEE-A S4', '', 0), */
/* ('', 'Cyril Joseph', 'EEE-A S4', '', 0), */
/* MTR-A S4 (TOTAL: 47) */
('NCE16MC001', 'Abdul Hameed V M', 'MTR-A S4', 'nce16mc001', 0),
('NCE16MC002', 'Adith Sunder C', 'MTR-A S4', 'nce16mc002', 0),
('NCE16MC003', 'Akash Krishnan A', 'MTR-A S4', 'nce16mc003', 0),
('NCE16MC004', 'Akhil Reghunath', 'MTR-A S4', 'nce16mc004', 0),
('NCE16MC005', 'Amal Das T S', 'MTR-A S4', 'nce16mc005', 0),
('NCE16MC006', 'Amal J Antony', 'MTR-A S4', 'nce16mc006', 0),
('NCE16MC007', 'Amaljith K', 'MTR-A S4', 'nce16mc007', 0),
('NCE16MC008', 'Amal M A', 'MTR-A S4', 'nce16mc008', 0),
('NCE16MC009', 'Anil C A', 'MTR-A S4', 'nce16mc009', 0),
('NCE16MC010', 'Anselm Linson', 'MTR-A S4', 'nce16mc010', 0),
('NCE16MC011', 'Antony Komban Winson', 'MTR-A S4', 'nce16mc011', 0),
('NCE16MC013', 'Athul Krishna M J', 'MTR-A S4', 'nce16mc013', 0),
('NCE16MC014', 'Basil Joy', 'MTR-A S4', 'nce16mc014', 0),
('NCE16MC015', 'Ceril Sabu Joseph', 'MTR-A S4', 'nce16mc015', 0),
('NCE16MC016', 'C R Athul Sreeraj', 'MTR-A S4', 'nce16mc016', 0),
('NCE16MC018', 'Govardhan P B', 'MTR-A S4', 'nce16mc018', 0),
('NCE16MC019', 'Issac K Joy', 'MTR-A S4', 'nce16mc019', 0),
('NCE16MC020', 'Jijay Krishna M', 'MTR-A S4', 'nce16mc020', 0),
('NCE16MC021', 'Jithin Cheriyan', 'MTR-A S4', 'nce16mc021', 0),
('NCE16MC022', 'Jithin T ', 'MTR-A S4', 'nce16mc022', 0),
('NCE16MC023', 'Jithin T J', 'MTR-A S4', 'nce16mc023', 0),
('NCE16MC025', 'Kirandev K S', 'MTR-A S4', 'nce16mc025', 0),
('NCE16MC026', 'Merril Daniel Roy', 'MTR-A S4', 'nce16mc026', 0),
('NCE16MC027', 'Muhammed Basil S', 'MTR-A S4', 'nce16mc027', 0),
('NCE16MC028', 'Muhammed Shafi K', 'MTR-A S4', 'nce16mc028', 0),
('NCE16MC029', 'Nikhil', 'MTR-A S4', 'nce16mc029', 0),
('NCE16MC030', 'Nourin', 'MTR-A S4', 'nce16mc030', 0),
('NCE16MC031', 'Prathibha P K', 'MTR-A S4', 'nce16mc031', 0),
('NCE16MC032', 'Rahul Ramesh', 'MTR-A S4', 'nce16mc032', 0),
('NCE16MC033', 'Ramees N', 'MTR-A S4', 'nce16mc033', 0),
('NCE16MC034', 'Robin Joseph', 'MTR-A S4', 'nce16mc034', 0),
('NCE16MC036', 'Roshan Sathar A', 'MTR-A S4', 'nce16mc036', 0),
('NCE16MC037', 'R Vishnu Prasath ', 'MTR-A S4', 'nce16mc037', 0),
('NCE16MC038', 'Sanjay S', 'MTR-A S4', 'nce16mc038', 0),
('NCE16MC039', 'Shahid S', 'MTR-A S4', 'nce16mc039', 0),
('NCE16MC040', 'Sharooque Shajahan', 'MTR-A S4', 'nce16mc040', 0),
('NCE16MC041', 'Sidharth S', 'MTR-A S4', 'nce16mc041', 0),
('NCE16MC042', 'Simon Thomas', 'MTR-A S4', 'nce16mc042', 0),
('NCE16MC043', 'Smruthi Ranjith', 'MTR-A S4', 'nce16mc043', 0),
('NCE16MC044', 'Sreehari K Nair', 'MTR-A S4', 'nce16mc044', 0),
('NCE16MC045', 'Sumith P S', 'MTR-A S4', 'nce16mc045', 0),
('NCE16MC046', 'Vikas.V', 'MTR-A S4', 'nce16mc046', 0),
('NCE16MC047', 'Vishnu P', 'MTR-A S4', 'nce16mc047', 0),
('NCE16MC048', 'Vishnuprakash V U', 'MTR-A S4', 'nce16mc048', 0),
('NCE16MC049', 'Vyshnav C V', 'MTR-A S4', 'nce16mc049', 0),
('NCE15MC047', 'Rinshil', 'MTR-A S4', 'nce15mc047', 0),
('LNCE16MC050', 'Midhun Headly Lawrance', 'MTR-A S4', 'lnce16mc050', 0),
/* MTR-A S6 (TOTAL: 67) */
('NCE15MC001', 'Abhijith Dinesh', 'MTR-A S6', 'nce15mc001', 0),
('NCE15MC002', 'Abijith U K', 'MTR-A S6', 'nce15mc002', 0),
('NCE15MC003', 'Adithya Suresh', 'MTR-A S6', 'nce15mc003', 0),
('NCE15MC004', 'Adithya Mohan', 'MTR-A S6', 'nce15mc004', 0),
('NCE15MC005', 'Ajay Anand C', 'MTR-A S6', 'nce15mc005', 0),
('NCE15MC006', 'Akash A', 'MTR-A S6', 'nce15mc006', 0),
('NCE15MC007', 'Akhil Chand P P', 'MTR-A S6', 'nce15mc007', 0),
('NCE15MC008', 'Akshaylal M R', 'MTR-A S6', 'nce15mc008', 0),
('NCE15MC009', 'Albin Leo', 'MTR-A S6', 'nce15mc009', 0),
('NCE15MC010', 'Alind Roy', 'MTR-A S6', 'nce15mc010', 0),
('NCE15MC011', 'Amarjith Vinod', 'MTR-A S6', 'nce15mc011', 0),
('NCE15MC012', 'Antony Sebastian Kachapally', 'MTR-A S6', 'nce15mc012', 0),
('NCE15MC013', 'Anupama R Nath', 'MTR-A S6', 'nce15mc013', 0),
('NCE15MC014', 'Arjun S', 'MTR-A S6', 'nce15mc014', 0),
('NCE15MC015', 'Athira Menon', 'MTR-A S6', 'nce15mc015', 0),
('NCE15MC016', 'Athul K A', 'MTR-A S6', 'nce15mc016', 0),
('NCE15MC017', 'Athul Vaishnav C', 'MTR-A S6', 'nce15mc017', 0),
('NCE15MC019', 'Daril Silva', 'MTR-A S6', 'nce15mc019', 0),
('NCE15MC020', 'Deepak R', 'MTR-A S6', 'nce15mc020', 0),
('NCE15MC021', 'Deepak Sunil', 'MTR-A S6', 'nce15mc021', 0),
('NCE15MC022', 'Deepu Vinil', 'MTR-A S6', 'nce15mc022', 0),
('NCE15MC023', 'Govind K A', 'MTR-A S6', 'nce15mc023', 0),
('NCE15MC024', 'Hariharan C G', 'MTR-A S6', 'nce15mc024', 0),
('NCE15MC025', 'Jefina Teresa Johnson', 'MTR-A S6', 'nce15mc025', 0),
('NCE15MC026', 'Jerom Mathew Paul', 'MTR-A S6', 'nce15mc026', 0),
('NCE15MC027', 'Jithin T.J', 'MTR-A S6', 'nce15mc027', 0),
('NCE15MC028', 'Johnson K Jose', 'MTR-A S6', 'nce15mc028', 0),
('NCE15MC029', 'Joseph Jithin Paul', 'MTR-A S6', 'nce15mc029', 0),
('NCE15MC030', 'Jovin Davis T', 'MTR-A S6', 'nce15mc030', 0),
('NCE15MC031', 'Juby Elizebeth John', 'MTR-A S6', 'nce15mc031', 0),
('NCE15MC032', 'Justin Jose', 'MTR-A S6', 'nce15mc032', 0),
('NCE15MC033', 'Kenes Chris', 'MTR-A S6', 'nce15mc033', 0),
('NCE15MC034', 'Kiran George', 'MTR-A S6', 'nce15mc034', 0),
('NCE15MC035', 'Marshel Martin', 'MTR-A S6', 'nce15mc035', 0),
('NCE15MC036', 'Mohammed Hani Sherif', 'MTR-A S6', 'nce15mc036', 0),
('NCE15MC037', 'Mohamed Junaid M C', 'MTR-A S6', 'nce15mc037', 0),
('NCE15MC038', 'Mohamed Sharook Khan', 'MTR-A S6', 'nce15mc038', 0),
('NCE15MC040', 'Mohammed Suhail T S', 'MTR-A S6', 'nce15mc040', 0),
('NCE15MC041', 'Muhammed Nameer P', 'MTR-A S6', 'nce15mc041', 0),
('NCE15MC042', 'Nakul Bhaskar', 'MTR-A S6', 'nce15mc042', 0),
('NCE15MC043', 'Nirmal C Ravindran', 'MTR-A S6', 'nce15mc043', 0),
('NCE15MC044', 'Rahul A M', 'MTR-A S6', 'nce15mc044', 0),
('NCE15MC045', 'Rajeev P T', 'MTR-A S6', 'nce15mc045', 0),
('NCE15MC046', 'Reshma S', 'MTR-A S6', 'nce15mc046', 0),
('NCE15MC048', 'Rohit Jacob Robert', 'MTR-A S6', 'nce15mc048', 0),
('NCE15MC049', 'Sachin A S', 'MTR-A S6', 'nce15mc049', 0),
('NCE15MC050', 'Sagar Johny C', 'MTR-A S6', 'nce15mc050', 0),
('NCE15MC051', 'Saras Mohan', 'MTR-A S6', 'nce15mc051', 0),
('NCE15MC052', 'Sarun R Kumar', 'MTR-A S6', 'nce15mc052', 0),
('NCE15MC053', 'Spencer David', 'MTR-A S6', 'nce15mc053', 0),
('NCE15MC054', 'Sreejith S', 'MTR-A S6', 'nce15mc054', 0),
('NCE15MC055', 'Sreerag K R', 'MTR-A S6', 'nce15mc055', 0),
('NCE15MC056', 'Sudharshan K', 'MTR-A S6', 'nce15mc056', 0),
('NCE15MC057', 'Sudheesh S', 'MTR-A S6', 'nce15mc057', 0),
('NCE15MC058', 'Vishnu P V', 'MTR-A S6', 'nce15mc058', 0),
('NCE15MC059', 'Vishnu Chandran N', 'MTR-A S6', 'nce15mc059', 0),
('NCE15MC060', 'Vishnu Raj P', 'MTR-A S6', 'nce15mc060', 0),
('NCE15MC061', 'Yadukrishnan K', 'MTR-A S6', 'nce15mc061', 0),
('LNCE15MC062', 'Abinav T V', 'MTR-A S6', 'lnce15mc062', 0),
('LNCE15MC063', 'Akshay Sivan', 'MTR-A S6', 'lnce15mc063', 0),
('LNCE15MC064', 'Alan V Reji', 'MTR-A S6', 'lnce15mc064', 0),
('LNCE15MC065', 'Ashique Anand', 'MTR-A S6', 'lnce15mc065', 0),
('LNCE15MC066', 'Avinash Ramanujan', 'MTR-A S6', 'lnce15mc066', 0),
('LNCE15MC067', 'Dheeraj S', 'MTR-A S6', 'lnce15mc067', 0),
('LNCE15MC068', 'Jayakrishnan A R', 'MTR-A S6', 'lnce15mc068', 0),
('LNCE15MC069', 'Jobin Joseph', 'MTR-A S6', 'lnce15mc069', 0),
('LNCE15MC070', 'Sreevinayak P V', 'MTR-A S6', 'lnce15mc070', 0),
/* MCE-A S4 (TOTAL: ) */
('NCE16ME061', 'Jobin Raju', 'MCE-A S4', 'nce16me061', 0),
('NCE16ME062', 'Joseph S', 'MCE-A S4', 'nce16me062', 0),
('NCE16ME063', 'Lahashad C A', 'MCE-A S4', 'nce16me063', 0),
('NCE16ME064', 'L Vignesh Aravind', 'MCE-A S4', 'nce16me064', 0),
('NCE16ME065', 'Midhun Raj K', 'MCE-A S4', 'nce16me065', 0),
('NCE16ME066', 'Midun C', 'MCE-A S4', 'nce16me066', 0),
('NCE16ME068', 'Mohammed Rashad A T', 'MCE-A S4', 'nce16me068', 0),
('NCE16ME069', 'Muhammed Anees', 'MCE-A S4', 'nce16me069', 0),
('NCE16ME070', 'Muhammed Haseebussaman N K', 'MCE-A S4', 'nce16me070', 0),
('NCE16ME071', 'Muhammed Mubariz A P', 'MCE-A S4', 'nce16me071', 0),
('NCE16ME072', 'Navaneeth Krishnan P T', 'MCE-A S4', 'nce16me072', 0),
('NCE16ME073', 'Niveth Krishnan', 'MCE-A S4', 'nce16me073', 0),
('NCE16ME075', 'Paul Jims', 'MCE-A S4', 'nce16me075', 0),
('NCE16ME076', 'Prajith P', 'MCE-A S4', 'nce16me076', 0),
('NCE16ME077', 'Pratheev Kumar K', 'MCE-A S4', 'nce16me077', 0),
('NCE16ME078', 'R Adharsh', 'MCE-A S4', 'nce16me078', 0),
('NCE16ME079', 'Rafeek T S', 'MCE-A S4', 'nce16me079', 0),
('NCE16ME080', 'Rahul M R', 'MCE-A S4', 'nce16me080', 0),
('NCE16ME081', 'Rahul R', 'MCE-A S4', 'nce16me081', 0),
('NCE16ME083', 'Ranjith O', 'MCE-A S4', 'nce16me083', 0),
('NCE16ME084', 'Robin Roy', 'MCE-A S4', 'nce16me084', 0),
('NCE16ME085', 'Rohin R', 'MCE-A S4', 'nce16me085', 0),
('NCE16ME086', 'Rohit Babu M K', 'MCE-A S4', 'nce16me086', 0),
('NCE16ME088', 'Rohith P', 'MCE-A S4', 'nce16me088', 0),
('NCE16ME089', 'Rubeek B', 'MCE-A S4', 'nce16me089', 0),
('NCE16ME090', 'Sabith Muhsin', 'MCE-A S4', 'nce16me090', 0),
('NCE16ME091', 'Sarath K', 'MCE-A S4', 'nce16me091', 0),
('NCE16ME092', 'Sarath V P', 'MCE-A S4', 'nce16me092', 0),
('NCE16ME094', 'Sayuj M J', 'MCE-A S4', 'nce16me094', 0),
('NCE16ME095', 'Shabeer Ali', 'MCE-A S4', 'nce16me095', 0),
('NCE16ME096', 'Shalif P S', 'MCE-A S4', 'nce16me096', 0),
('NCE16ME097', 'Sharan S Menon', 'MCE-A S4', 'nce16me097', 0),
('NCE16ME098', 'Shijo Joshy', 'MCE-A S4', 'nce16me098', 0),
('NCE16ME099', 'Shiju V', 'MCE-A S4', 'nce16me099', 0),
('NCE16ME100', 'Shiyas M', 'MCE-A S4', 'nce16me100', 0),
('NCE16ME101', 'Shyam M A', 'MCE-A S4', 'nce16me101', 0),
('NCE16ME102', 'Sooraj Sivadasan', 'MCE-A S4', 'nce16me102', 0),
('NCE16ME103', 'Sravan T', 'MCE-A S4', 'nce16me103', 0),
('NCE16ME104', 'Sreehari Madhu', 'MCE-A S4', 'nce16me104', 0),
('NCE16ME105', 'Sreehari Unnikrishnan', 'MCE-A S4', 'nce16me105', 0),
('NCE16ME106', 'Sreenath K J', 'MCE-A S4', 'nce16me106', 0),
('NCE16ME107', 'Suraj S', 'MCE-A S4', 'nce16me107', 0),
('NCE16ME108', 'Thejus Jayaseelan', 'MCE-A S4', 'nce16me108', 0),
('NCE16ME109', 'Tibin T R', 'MCE-A S4', 'nce16me109', 0),
('NCE16ME110', 'Vaisakh Pradeep', 'MCE-A S4', 'nce16me110', 0),
('NCE16ME111', 'Vignesh M', 'MCE-A S4', 'nce16me111', 0),
('NCE16ME113', 'Vineeth N V', 'MCE-A S4', 'nce16me113', 0),
('NCE16ME114', 'Vipin K', 'MCE-A S4', 'nce16me114', 0),
('NCE16ME115', 'Vishnu K Anilkumar', 'MCE-A S4', 'nce16me115', 0),
('NCE16ME116', 'Vishnu K P', 'MCE-A S4', 'nce16me116', 0),
('NCE16ME117', 'Vishnu Suresh P U', 'MCE-A S4', 'nce16me117', 0),
('NCE16ME118', 'Vivek Nair P A', 'MCE-A S4', 'nce16me118', 0),
('NCE16ME119', 'V Mubarak', 'MCE-A S4', 'nce16me119', 0),
('NCE15ME072', 'Nithin Krishnan K', 'MCE-A S4', 'nce15me072', 0),
('NCE15ME107', 'Sivaprasad O B', 'MCE-A S4', 'nce15me107', 0),
/* MCE-A S6 (TOTAL: ) */
('NCE15ME065', 'Melvin Johnson', 'MCE-A S6', 'nce15me065', 0),
('NCE15ME066', 'Mithun Gopinath', 'MCE-A S6', 'nce15me066', 0),
('NCE15ME067', 'Mohamed Jasil C', 'MCE-A S6', 'nce15me067', 0),
('NCE15ME068', 'Mohammed Safarulla H', 'MCE-A S6', 'nce15me068', 0),
('NCE15ME069', 'Muhammed Kunhi M P', 'MCE-A S6', 'nce15me069', 0),
('NCE15ME070', 'Najmal K Jamal', 'MCE-A S6', 'nce15me070', 0),
('NCE15ME071', 'Nandagopan K S', 'MCE-A S6', 'nce15me071', 0),
('NCE15ME073', 'Nijil C R', 'MCE-A S6', 'nce15me073', 0),
('NCE15ME074', 'Nithin A M', 'MCE-A S6', 'nce15me074', 0),
('NCE15ME075', 'Nithin K P', 'MCE-A S6', 'nce15me075', 0),
('NCE15ME076', 'Nithin R K', 'MCE-A S6', 'nce15me076', 0),
('NCE15ME078', 'Noel T John', 'MCE-A S6', 'nce15me078', 0),
('NCE15ME079', 'Noushad C N', 'MCE-A S6', 'nce15me079', 0),
('NCE15ME081', 'Prajith T', 'MCE-A S6', 'nce15me081', 0),
('NCE15ME082', 'Rahul K.R', 'MCE-A S6', 'nce15me082', 0),
('NCE15ME083', 'Rahul K R', 'MCE-A S6', 'nce15me083', 0),
('NCE15ME084', 'Ramshid S M', 'MCE-A S6', 'nce15me084', 0),
('NCE15ME085', 'Renjith N P', 'MCE-A S6', 'nce15me085', 0),
('NCE15ME086', 'Ridhinjith M P', 'MCE-A S6', 'nce15me086', 0),
('NCE15ME087', 'Robin Rappai', 'MCE-A S6', 'nce15me087', 0),
('NCE15ME088', 'Rohit I J', 'MCE-A S6', 'nce15me088', 0),
('NCE15ME089', 'Rohith Krishnan R', 'MCE-A S6', 'nce15me089', 0),
('NCE15ME090', 'Rojan V Thanjan', 'MCE-A S6', 'nce15me090', 0),
('NCE15ME091', 'Roshan Ahamed N A', 'MCE-A S6', 'nce15me091', 0),
('NCE15ME092', 'Sabiq Zayan S', 'MCE-A S6', 'nce15me092', 0),
('NCE15ME093', 'Sachin Das', 'MCE-A S6', 'nce15me093', 0),
('NCE15ME094', 'Sahal T', 'MCE-A S6', 'nce15me094', 0),
('NCE15ME095', 'Sai Krishna K B', 'MCE-A S6', 'nce15me095', 0),
('NCE15ME096', 'Sajith Sreenivasan', 'MCE-A S6', 'nce15me096', 0),
('NCE15ME097', 'Sanal V Cyriac', 'MCE-A S6', 'nce15me097', 0),
('NCE15ME098', 'Sandeep D', 'MCE-A S6', 'nce15me098', 0),
('NCE15ME101', 'Saurav P S', 'MCE-A S6', 'nce15me101', 0),
('NCE15ME103', 'Shibin S', 'MCE-A S6', 'nce15me103', 0),
('NCE15ME104', 'Shibli K', 'MCE-A S6', 'nce15me104', 0),
('NCE15ME105', 'Shravan Gopal P', 'MCE-A S6', 'nce15me105', 0),
('NCE15ME108', 'Sreejith.S', 'MCE-A S6', 'nce15me108', 0),
('NCE15ME109', 'Sreejith V K', 'MCE-A S6', 'nce15me109', 0),
('NCE15ME110', 'Sreekanth K', 'MCE-A S6', 'nce15me110', 0),
('NCE15ME111', 'Sreekanth J Marar', 'MCE-A S6', 'nce15me111', 0),
('NCE15ME112', 'Sreerag A G', 'MCE-A S6', 'nce15me112', 0),
('NCE15ME113', 'Sreerag K', 'MCE-A S6', 'nce15me113', 0),
('NCE15ME114', 'Sreerag P V', 'MCE-A S6', 'nce15me114', 0),
('NCE15ME115', 'Sudheesh C', 'MCE-A S6', 'nce15me115', 0),
('NCE15ME117', 'Sufvan', 'MCE-A S6', 'nce15me117', 0),
('NCE15ME118', 'V S Surabish', 'MCE-A S6', 'nce15me118', 0),
('NCE15ME119', 'Vaishnav V ', 'MCE-A S6', 'nce15me119', 0),
('NCE15ME120', 'Vishagh V', 'MCE-A S6', 'nce15me120', 0),
('NCE15ME121', 'Vishnu K N', 'MCE-A S6', 'nce15me121', 0),
('NCE15ME122', 'Vishnu Prabhakar', 'MCE-A S6', 'nce15me122', 0),
('NCE15ME123', 'Viswajith S Nair', 'MCE-A S6', 'nce15me123', 0),
('NCE15ME124', 'Vysagh V', 'MCE-A S6', 'nce15me124', 0),
('NCE15ME125', 'Vyshkh P', 'MCE-A S6', 'nce15me125', 0),
('LNCE15ME127', 'Bharadwaj R Govind', 'MCE-A S6', 'lnce15me127', 0),
('LNCE15ME128', 'Harikrishnan V', 'MCE-A S6', 'lnce15me128', 0),
('LNCE15ME129', 'Krishna Raj', 'MCE-A S6', 'lnce15me129', 0);
/* ('', 'Jithin P J', 'MCE-A S6', '', 0), */
/* ('', 'Sudheer G', 'MCE-A S6', '', 0), */

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
('S4 CSE-A TEACHER 1', 'TEACHER1', 'CSE'),
('S4 CSE-A TEACHER 2', 'TEACHER2', 'CSE'),
('S4 CSE-A TEACHER 3', 'TEACHER3', 'CSE'),
('S4 CSE-A TEACHER 4', 'TEACHER4', 'CSE'),
('S4 CSE-A TEACHER 5', 'TEACHER5', 'CSE'),
('S4 CSE-A TEACHER 6', 'TEACHER6', 'CSE'),
('S4 CSE-B TEACHER 1', 'TEACHER1', 'CSE'),
('S4 CSE-B TEACHER 2', 'TEACHER2', 'CSE'),
('S4 CSE-B TEACHER 3', 'TEACHER3', 'CSE'),
('S4 CSE-B TEACHER 4', 'TEACHER4', 'CSE'),
('S4 CSE-B TEACHER 5', 'TEACHER5', 'CSE'),
('S4 CSE-B TEACHER 6', 'TEACHER6', 'CSE'),
('S6 CSE-B TEACHER 1', 'TEACHER1', 'CSE'),
('S6 CSE-B TEACHER 2', 'TEACHER2', 'CSE'),
('S6 CSE-B TEACHER 3', 'TEACHER3', 'CSE'),
('S6 CSE-B TEACHER 4', 'TEACHER4', 'CSE'),
('S6 CSE-B TEACHER 5', 'TEACHER5', 'CSE'),
('S6 CSE-B TEACHER 6', 'TEACHER6', 'CSE'),
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
  `class_dept` varchar(5) NOT NULL,
  `overall` int(3) DEFAULT NULL,
  `class_strength` int(3) NOT NULL,
  `feed_applied` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachersinfo`
--

INSERT INTO `teachersinfo` (`info_no`, `te_username`, `class`, `sub_name`, `sub_code`, `class_dept`, `overall`, `class_strength`, `feed_applied`) VALUES
(1, 'ARUN K', 'CSE-A S6', 'Computer Networking', 'CS306', 'CSE', NULL, 39, 0),
(2, 'RESHMI H', 'CSE-A S6', 'Principles of Management', 'HS300', 'CSE', NULL, 39, 0),
(3, 'SRUTHY M R', 'CSE-A S6', 'Design and Analysis of Algorithms', 'CS302', 'CSE', NULL, 39, 0),
(4, 'DEEPTHI', 'CSE-A S6', 'Compiler Design', 'CS304', 'CSE', NULL, 39, 0),
(5, 'BIJI K P', 'CSE-A S6', 'Software Engineering', 'CS308', 'CSE', NULL, 39, 0),
(6, 'ARUN K', 'CSE-A S6', 'Web Technologies', 'CS368', 'CSE', NULL, 39, 0),
(7, 'S6 CSE-B TEACHER 1', 'CSE-B S6', 'Design and Analysis of Algorithms', 'CS302', 'CSE', NULL, 39, 0),
(8, 'S6 CSE-B TEACHER 2', 'CSE-B S6', 'Principles of Management', 'HS300', 'CSE', NULL, 39, 0),
(9, 'S6 CSE-B TEACHER 3', 'CSE-B S6', 'Compiler Design', 'CS304', 'CSE', NULL, 39, 0),
(10, 'S6 CSE-B TEACHER 4', 'CSE-B S6', 'Software Engineering', 'CS308', 'CSE', NULL, 39, 0),
(11, 'S6 CSE-B TEACHER 5', 'CSE-B S6', 'Computer Networking', 'CS306', 'CSE', NULL, 39, 0),
(12, 'S6 CSE-B TEACHER 6', 'CSE-B S6', 'Principles of Management', 'HS300', 'CSE', NULL, 39, 0),
(13, 'S4 CSE-A TEACHER 1', 'CSE-A S4', 'SUBJECT 1', 'CS101', 'CSE', NULL, 58, 0),
(14, 'S4 CSE-A TEACHER 2', 'CSE-A S4', 'SUBJECT 2', 'CS102', 'CSE', NULL, 58, 0),
(15, 'S4 CSE-A TEACHER 3', 'CSE-A S4', 'SUBJECT 3', 'CS103', 'CSE', NULL, 58, 0),
(16, 'S4 CSE-A TEACHER 4', 'CSE-A S4', 'SUBJECT 4', 'CS104', 'CSE', NULL, 58, 0),
(17, 'S4 CSE-A TEACHER 5', 'CSE-A S4', 'SUBJECT 5', 'CS105', 'CSE', NULL, 58, 0),
(18, 'S4 CSE-A TEACHER 6', 'CSE-A S4', 'SUBJECT 6', 'CS106', 'CSE', NULL, 58, 0),
(19, 'S4 CSE-B TEACHER 1', 'CSE-B S4', 'SUBJECT 1', 'CS101', 'CSE', NULL, 57, 0),
(20, 'S4 CSE-B TEACHER 2', 'CSE-B S4', 'SUBJECT 2', 'CS102', 'CSE', NULL, 57, 0),
(21, 'S4 CSE-B TEACHER 3', 'CSE-B S4', 'SUBJECT 3', 'CS103', 'CSE', NULL, 57, 0),
(22, 'S4 CSE-B TEACHER 4', 'CSE-B S4', 'SUBJECT 4', 'CS104', 'CSE', NULL, 57, 0),
(23, 'S4 CSE-B TEACHER 5', 'CSE-B S4', 'SUBJECT 5', 'CS105', 'CSE', NULL, 57, 0),
(24, 'S4 CSE-B TEACHER 6', 'CSE-B S4', 'SUBJECT 6', 'CS106', 'CSE', NULL, 57, 0);

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
-- Indexes for table `maintainers`
--
ALTER TABLE `maintainers`
  ADD UNIQUE KEY `ma_username` (`ma_username`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD UNIQUE KEY `quest_id` (`quest_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`r_no`);

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
  MODIFY `feed_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachersinfo`
--
ALTER TABLE `teachersinfo`
  MODIFY `info_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
