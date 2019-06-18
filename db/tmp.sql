-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 05:27 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datab1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE `tmp` (
  `name` varchar(50) NOT NULL,
  `trust` varchar(50) NOT NULL,
  `estd` int(11) NOT NULL,
  `postaladdress` varchar(80) NOT NULL,
  `typeofcollege` varchar(50) NOT NULL,
  `affiliatedby` varchar(50) NOT NULL,
  `approvedby` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `events` varchar(50) NOT NULL,
  `pic` longblob NOT NULL,
  `inputEmail` varchar(50) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `entranceexam` varchar(50) NOT NULL,
  `coursetype` varchar(50) NOT NULL,
  `typeofcourse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`name`, `trust`, `estd`, `postaladdress`, `typeofcollege`, `affiliatedby`, `approvedby`, `specialization`, `events`, `pic`, `inputEmail`, `zipcode`, `entranceexam`, `coursetype`, `typeofcourse`) VALUES
('hgh', 'dsgd', 2222, 'fdsf', 'private', 'gdfg', 'AICTEE', 'ggge', 'dgdfg', 0x57494e5f32303137313130335f32315f34385f35325f50726f2e6a7067, 'dfsd@fg.com', 232444, 'GATE', 'degree', 'fulltime'),
('dfdf', 'gfdg', 2222, 'hjhj', 'private', 'kjkj', 'AICTEE', 'jkjk', 'jkj', 0x57494e5f32303137313130335f32315f34385f35325f50726f2e6a7067, 'hjhj@ghg.com', 565656, 'GATE', 'diploma', 'fulltime');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
