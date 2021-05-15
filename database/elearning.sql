-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2017 at 12:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `school` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`email`, `name`, `username`, `password`, `address`, `school`, `class`) VALUES
('', '', '123', '123', '', '', ''),
('123', '123', '123', '123', '', '', ''),
('', '', '', '', '', '', ''),
('prem@gmail.com', 'prem singh', 'prem', 'prem', '', 'kv', '10'),
('prem@gmail.com', 'prem kumar', 'kprem', '12345', '', 'oxford', '12'),
('premkoyjam@gmail.com', 'k prem kr singh', 'premsingh', 'premk', 'rongpue silchar\r\n					', 'gc', '13'),
('', '', '', '', 'Enter Address...!\r\n					', '', ''),
('', '', '', '', 'Enter Address...!\r\n					', '', ''),
('', '', '', '', 'Enter Address...!\r\n					', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('ghcg@hghg.com', 'hghf', 'jhjh', '123', 'Enter Address...!\r\n					', '', ''),
('jsdhsjh@gmail.com', 'jhsd', '123', '123', 'hsgdshgdjhshhdsa', 'dhsadgsha', 'sahgdshdg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
