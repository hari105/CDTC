-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2019 at 05:15 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logins`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `courseID` int(10) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseName`) VALUES
(101, 'Basics of mobile app development'),
(102, 'Machine learning & Artificial Intelligence '),
(103, 'Introduction to Internet of Things(IoT)'),
(104, 'Introduction to IoT : Its Applications'),
(105, 'Static web design'),
(106, 'Dynamic web design'),
(107, 'Blockchain');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `rollNum` varchar(10) NOT NULL,
  `courseID` int(10) NOT NULL,
  `enroll` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rollNum`, `courseID`, `enroll`) VALUES
('16H61A0593', 102, '2019-03-01'),
('16H61A0593', 107, '2019-03-01'),
('16H61A0593', 103, '2019-03-01'),
('16H61A0599', 105, '2019-03-01'),
('16H61A0593', 101, '2019-03-01'),
('16H61A0593', 105, '2019-03-01'),
('16H61A0593', 106, '2019-03-01'),
('16H61A0593', 104, '2019-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(10) NOT NULL,
  `rollNum` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `createdDate` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`rollNum`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `rollNum`, `username`, `email`, `password`, `gender`, `createdDate`, `phone`) VALUES
(0, '16H61A0593', 'mani', 'manideeppasuladi@gmail.com', '07cd55c7b42715ec44c133a6a165e8d2', 'Male', '2019-02-28', '7702922763'),
(0, '16H61A0599', 'sainath', '123@gmail.com', 'f11ce5e30cbce1bbb0349427db3fb4b9', 'Male', '2019-02-28', '9999999999'),
(0, '16H61A0578', 'akhilganti', '123@gmail.com', '857a320f9fbbb5a2e49abb44aef202ce', 'Male', '2019-03-01', '9999999999'),
(0, '16H61A05B0', 'sai', '16h61a05B0@cvsr.ac.in', 'a29bac723ca2d59ed78a2d715e17e92f', 'Male', '2019-03-03', '7702922763');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
