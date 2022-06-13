-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 11:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `pname`
--

CREATE TABLE `pname` (
  `pname_id` int(11) NOT NULL,
  `pname_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tool`
--

CREATE TABLE `tool` (
  `tool_id` int(11) NOT NULL,
  `tool_name` varchar(255) NOT NULL,
  `tool_price` float NOT NULL,
  `tool_type` varchar(255) NOT NULL,
  `tool_qty` int(11) NOT NULL,
  `tool_date_import` date NOT NULL,
  `tool_time_import` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tool_type`
--

CREATE TABLE `tool_type` (
  `tool_type_id` int(11) NOT NULL,
  `tool_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `cid` varchar(13) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `ulevel` varchar(255) NOT NULL,
  `txtoffice` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `pname`, `fname`, `lname`, `cid`, `tel`, `ulevel`, `txtoffice`, `position`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'นาย', 'testfname', 'testlname', '1234567891234', '0912345678', 'admin', 'ไอที', 'นวก.คอม'),
(2, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'นาย', 'fnameuser', 'lnameuser', '1234567891234', '0912345678', 'member', 'it', 'computer'),
(3, 'user2', 'e10adc3949ba59abbe56e057f20f883e', 'นาย', 'fnameuser', 'lnameuser', '1234567891234', '0912345678', 'member', 'it', 'computer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pname`
--
ALTER TABLE `pname`
  ADD PRIMARY KEY (`pname_id`);

--
-- Indexes for table `tool`
--
ALTER TABLE `tool`
  ADD PRIMARY KEY (`tool_id`);

--
-- Indexes for table `tool_type`
--
ALTER TABLE `tool_type`
  ADD PRIMARY KEY (`tool_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
