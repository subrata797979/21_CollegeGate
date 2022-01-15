-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 02, 2021 at 11:54 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
CREATE TABLE IF NOT EXISTS `college` (
  `college_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(60) DEFAULT NULL,
  `university` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `name`, `address`, `email`, `website`, `university`, `phone`) VALUES
(1, 'BARRACKPORE RASTRAGURU SURENDR', '85, Middle Road & 6, Riverside Road, Kolkata 700120', 'brsc1953@gmail.com', 'www.brsnc.in', 'WEST BENGAL STATE UNIVERSITY', '033 2592 0603'),
(2, 'Rishi Bankim Chandra College', 'East Kantalpara,  Naihati, North 24 Parganas,  West Bengal, PIN- 743165', 'contact@rbccollege.ac.in', 'www.rbccollege.ac.in', 'WEST BENGAL STATE UNIVERSITY', '(91) (33) 25812099');

-- --------------------------------------------------------

--
-- Table structure for table `college_subject`
--

DROP TABLE IF EXISTS `college_subject`;
CREATE TABLE IF NOT EXISTS `college_subject` (
  `college_id` int NOT NULL,
  `subject` varchar(30) NOT NULL,
  `cutoff` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college_subject`
--

INSERT INTO `college_subject` (`college_id`, `subject`, `cutoff`) VALUES
(1, 'a', 70),
(1, 'b', 60),
(1, 'c', 50),
(2, 'a', 60),
(2, 'b', 50),
(2, 'c', 40);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `college_id` int DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `college_id`) VALUES
(2, 'subu', 'subrata797979@gmail.com', '1', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
