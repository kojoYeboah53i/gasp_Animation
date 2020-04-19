-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 08:29 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `salesperson_id` int(11) NOT NULL,
  `time_loged_in` time NOT NULL DEFAULT current_timestamp(),
  `time_loged_out` time NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `salesperson_id`, `time_loged_in`, `time_loged_out`, `date`) VALUES
(13, 3, '15:18:40', '01:23:38', '2020-01-08'),
(14, 0, '15:42:36', '15:42:36', '2020-01-08'),
(15, 5, '15:43:14', '08:27:58', '2020-01-08'),
(16, 5, '15:43:16', '08:27:58', '2020-01-08'),
(17, 5, '15:43:49', '08:27:58', '2020-01-08'),
(18, 6, '15:50:58', '08:24:50', '2020-01-08'),
(19, 5, '15:52:58', '08:27:58', '2020-01-08'),
(20, 6, '16:05:05', '08:24:50', '2020-01-08'),
(21, 5, '16:06:48', '08:27:58', '2020-01-08'),
(22, 5, '16:09:15', '08:27:58', '2020-01-08'),
(23, 3, '16:46:48', '01:23:38', '2020-01-08'),
(24, 3, '22:13:28', '01:23:38', '2020-01-08'),
(25, 3, '22:14:34', '01:23:38', '2020-01-08'),
(26, 3, '22:22:21', '01:23:38', '2020-01-08'),
(27, 6, '22:59:21', '08:24:50', '2020-01-08'),
(28, 5, '23:18:30', '08:27:58', '2020-01-08'),
(29, 5, '23:22:21', '08:27:58', '2020-01-08'),
(30, 5, '00:08:10', '08:27:58', '2020-01-09'),
(31, 5, '00:19:35', '08:27:58', '2020-01-09'),
(32, 3, '00:20:29', '01:23:38', '2020-01-09'),
(33, 3, '00:22:45', '01:23:38', '2020-01-09'),
(34, 6, '07:23:17', '08:24:50', '2020-01-09'),
(35, 5, '07:25:21', '08:27:58', '2020-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` int(11) NOT NULL,
  `cus_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pho_num` int(11) NOT NULL,
  `item` varchar(11) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `cus_id`, `name`, `location`, `pho_num`, `item`, `order_name`, `price`, `date`) VALUES
(1, 'kofi123434', 'Kofi babu', 'Ayensu', 23456786, 'phone', 'techno Phantom', 300, '2020-01-08'),
(2, 'James4455', 'James Brown', 'Accra', 234563455, 'fridge', 'Nasco', 400, '2020-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE `stuff` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(100) NOT NULL,
  `usr_pass` varchar(100) NOT NULL,
  `date_registered` date NOT NULL,
  `salesperson` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`usr_id`, `usr_name`, `usr_pass`, `date_registered`, `salesperson`) VALUES
(3, 'ama badu', '952626', '2020-01-08', 'collectors'),
(5, 'yaw manu', '749556', '2020-01-08', 'signups'),
(6, 'kofi sam', '332301', '2020-01-08', 'collectors');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stuff`
--
ALTER TABLE `stuff`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
