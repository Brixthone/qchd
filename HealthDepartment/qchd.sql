-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 01:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qchd`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE `emp_info` (
  `EmployeeID` int(7) NOT NULL,
  `Firstname` text NOT NULL,
  `Middlename` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Position` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`EmployeeID`, `Firstname`, `Middlename`, `Lastname`, `Address`, `Position`, `username`, `password`) VALUES
(1234567, 'Sherwin', 'Rapiz', 'Naro', '164  San Miguel Extension. Baranggay,Commonwealth ', 'Nurse', 'user', 'user'),
(7654321, 'Jan', 'Patiam', 'Emer', 'Quezon City', 'Nurse', 'Emer', 'emer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccounts`
--

CREATE TABLE `tbl_useraccounts` (
  `EmployeeID` int(7) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_useraccounts`
--

INSERT INTO `tbl_useraccounts` (`EmployeeID`, `username`, `password`) VALUES
(765321, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
