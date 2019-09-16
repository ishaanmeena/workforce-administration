-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 14, 2019 at 06:08 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocate`
--

DROP TABLE IF EXISTS `allocate`;
CREATE TABLE IF NOT EXISTS `allocate` (
  `asset` varchar(100) NOT NULL,
  `task` varchar(100) NOT NULL,
  `worker` varchar(100) NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `dtime` varchar(100) NOT NULL,
  `adate` varchar(100) NOT NULL,
  `atime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocate`
--

INSERT INTO `allocate` (`asset`, `task`, `worker`, `frequency`, `ddate`, `dtime`, `adate`, `atime`) VALUES
('5d2b6298dde40', '5d2b62b0539f8,', '5d2b62c5ccf1c,', 'Every Day,', '2019-07-25,', '14:22,', '07/14/19,', '07/14/19,'),
('5d2b66890e331', '5d2b6694ae865,', '5d2b669a30b68,', 'Once A Month,', '2019-07-19,', '17:05,', '07/14/19,', '07/14/19,'),
('5d2b6d59bf20e', '', '', '', '', '', '', ''),
('5d2b6efe6793f', '5d2b6694ae865,5d2b6f03e1564,', '5d2b669a30b68,5d2b6f09098cb,', 'Every Week,Every Day,', '51997-04-10,2019-07-26,', '17:45,15:45,', '07/14/19,07/14/19,', '07/14/19,07/14/19,');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

DROP TABLE IF EXISTS `asset`;
CREATE TABLE IF NOT EXISTS `asset` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id`, `name`) VALUES
('5d2b6298dde40', 'Chair'),
('5d2b66890e331', 'Kishore'),
('5d2b6d59bf20e', 'Rahul'),
('5d2b6efe6793f', 'floor');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` varchar(100) NOT NULL,
  `task` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task`) VALUES
('5d2b62b0539f8', 'Cleaning'),
('5d2b6694ae865', 'Haircut'),
('5d2b6d62443f1', 'Floor Cleaning'),
('5d2b6f03e1564', 'mopping');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

DROP TABLE IF EXISTS `worker`;
CREATE TABLE IF NOT EXISTS `worker` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `task` longtext NOT NULL,
  `asset` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `name`, `task`, `asset`) VALUES
('5d2b62c5ccf1c', 'Ishaan', '5d2b62b0539f8,', '5d2b6298dde40,'),
('5d2b669a30b68', 'PT', '5d2b6694ae865,5d2b6694ae865,', '5d2b6efe6793f,5d2b66890e331,'),
('5d2b6d66ba2a1', 'Ramu', '', ''),
('5d2b6f09098cb', 'ramu', '5d2b6f03e1564,', '5d2b6efe6793f,');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
