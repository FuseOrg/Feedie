-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 05:43 PM
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
  `quest_content` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quest_id`, `quest_content`) VALUES
(1, 'The teacher covers the entire syllabus'),
(2, 'The teacher discusses topics in detail'),
(3, 'The teacher possesses deep knowledge of the subject taught'),
(4, 'The teacher communicate clearly'),
(5, 'The teacher inspires me by his/her knowledge in the subject'),
(6, 'The teacher is punctual to the class'),
(7, 'The teacher engages the class for the full duration and completes the course in time'),
(8, 'The teacher comes fully prepared for the class'),
(9, 'The teacher provide guidance outside/inside the class'),
(10, 'The teacher was available to answer questions in office hours');

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
('PCE15CS005', 'Jeffi Reji', 'CSE-B S6', 'pce15cs005', 0);

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
('SRUTHY M R', 'sruthy', 'CSE'),
('SILJA', 'silja', 'CSE'),
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
('S6 CSE-B TEACHER 6', 'TEACHER6', 'CSE');

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
  `overall` int(3) DEFAULT NULL,
  `class_strength` int(3) NOT NULL,
  `feed_applied` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachersinfo`
--

INSERT INTO `teachersinfo` (`info_no`, `te_username`, `class`, `sub_name`, `sub_code`, `dept`, `overall`, `class_strength`, `feed_applied`) VALUES
/* S6 CSE-A */
(1, 'ARUN K', 'CSE-A S6', 'Computer Networking', 'CS306', 'CSE', NULL, 39, 0),
(2, 'RESHMI H', 'CSE-A S6', 'Principles of Management', 'HS300', 'ECE', NULL, 39, 0),
(3, 'SRUTHY M R', 'CSE-A S6', 'Design and Analysis of Algorithms', 'CS302', 'CSE', NULL, 39, 0),
(4, 'DEEPTHI', 'CSE-A S6', 'Compiler Design', 'CS304', 'CSE', NULL, 39, 0),
(5, 'BIJI K P', 'CSE-A S6', 'Software Engineering', 'CS308', 'CSE', NULL, 39, 0),
(6, 'ARUN K', 'CSE-A S6', 'Web Technologies', 'CS368', 'CSE', NULL, 39, 0),
/* S6 CSE-B */
(7, 'ARUN K', 'CSE-B S6', 'Design and Analysis of Algorithms', 'CS302', 'CSE', NULL, 39, 0),
(8, 'S6 CSE-B TEACHER 2', 'CSE-B S6', 'Principles of Management', 'HS300', 'ECE', NULL, 39, 0),
(9, 'S6 CSE-B TEACHER 3', 'CSE-B S6', 'Compiler Design', 'CS304', 'CSE', NULL, 39, 0),
(10, 'S6 CSE-B TEACHER 4', 'CSE-B S6', 'Software Engineering', 'CS308', 'CSE', NULL, 39, 0),
(11, 'S6 CSE-B TEACHER 5', 'CSE-B S6', 'Computer Networking', 'CS306', 'CSE', NULL, 39, 0),
(12, 'S6 CSE-B TEACHER 6', 'CSE-B S6', 'Principles of Management', 'HS300', 'ECE', NULL, 39, 0),
/* S4 CSE-B */
(13, 'S4 CSE-A TEACHER 1', 'CSE-A S4', 'SUBJECT 1', 'CS101', 'CSE', NULL, 58, 0),
(14, 'S4 CSE-A TEACHER 2', 'CSE-A S4', 'SUBJECT 2', 'CS102', 'CSE', NULL, 58, 0),
(15, 'S4 CSE-A TEACHER 3', 'CSE-A S4', 'SUBJECT 3', 'CS103', 'CSE', NULL, 58, 0),
(16, 'S4 CSE-A TEACHER 4', 'CSE-A S4', 'SUBJECT 4', 'CS104', 'CSE', NULL, 58, 0),
(17, 'S4 CSE-A TEACHER 5', 'CSE-A S4', 'SUBJECT 5', 'CS105', 'CSE', NULL, 58, 0),
(18, 'S4 CSE-A TEACHER 6', 'CSE-A S4', 'SUBJECT 6', 'CS106', 'CSE', NULL, 58, 0),
/* S4 CSE-B */
(19, 'S4 CSE-B TEACHER 1', 'CSE-B S4', 'SUBJECT 1', 'CS101', 'CSE', NULL, 57, 0),
(20, 'S4 CSE-B TEACHER 2', 'CSE-B S4', 'SUBJECT 2', 'CS102', 'CSE', NULL, 57, 0),
(21, 'S4 CSE-B TEACHER 3', 'CSE-B S4', 'SUBJECT 3', 'CS103', 'CSE', NULL, 57, 0),
(22, 'S4 CSE-B TEACHER 4', 'CSE-B S4', 'SUBJECT 4', 'CS104', 'CSE', NULL, 57, 0),
(23, 'S4 CSE-B TEACHER 5', 'CSE-B S4', 'SUBJECT 5', 'CS105', 'CSE', NULL, 57, 0),
(24, 'S4 CSE-B TEACHER 6', 'CSE-B S4', 'SUBJECT 6', 'CS106', 'CSE', NULL, 57, 0),
/* S2 CSE-A */
(25, 'S2 CSE-A TEACHER 1', 'CSE-A S2', 'SUBJECT 1', 'CS101', 'CSE', NULL, 31, 0),
(26, 'S2 CSE-A TEACHER 2', 'CSE-A S2', 'SUBJECT 2', 'CS102', 'CSE', NULL, 31, 0),
(27, 'S2 CSE-A TEACHER 3', 'CSE-A S2', 'SUBJECT 3', 'CS103', 'CSE', NULL, 31, 0),
(28, 'S2 CSE-A TEACHER 4', 'CSE-A S2', 'SUBJECT 4', 'CS104', 'CSE', NULL, 31, 0),
(29, 'S2 CSE-A TEACHER 5', 'CSE-A S2', 'SUBJECT 5', 'CS105', 'CSE', NULL, 31, 0),
(30, 'S2 CSE-A TEACHER 6', 'CSE-A S2', 'SUBJECT 6', 'CS106', 'CSE', NULL, 31, 0);

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
  MODIFY `feed_no` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachersinfo`
--
ALTER TABLE `teachersinfo`
  MODIFY `info_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
