-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2018 at 02:36 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(8) NOT NULL,
  `last_name` varchar(8) NOT NULL,
  `age` smallint(3) NOT NULL,
  `department` varchar(30) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `status` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `first_name`, `last_name`, `age`, `department`, `phone_no`, `status`) VALUES
(1, 'John', 'Rusty', 28, 'Sales', 1112312323, '0'),
(2, 'Russ', 'Doers', 21, 'Sales', 1112312323, '1'),
(3, 'Hanna', 'Betsy', 30, 'HR', 1112312323, '1'),
(4, 'Arnold', 'Swan', 23, 'HR', 1112312323, '1'),
(5, 'Dom', 'Sday', 21, 'WebDev', 1123123233, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
