-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 08:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qodehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `qhbooking`
--

CREATE TABLE `qhbooking` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `start` text NOT NULL,
  `end` text NOT NULL,
  `room` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qhbooking`
--

INSERT INTO `qhbooking` (`id`, `user_id`, `name`, `reason`, `start`, `end`, `room`) VALUES
(8, 0, 'Melissa', 'Interview', '10:00:00', '12:00:00', 'Conference Room'),
(70, 1, 'Comfort Owusu', 'Eat', '9:00', '10:00 Aug 11, 2018', 'Living'),
(71, 1, 'Stephanie Owusu', 'Sleep', '9:00', '9:30 Aug 11, 2018', 'Living'),
(72, 1, 'Isaac Annan', 'pray', '9:00', '10:30 Sep 10, 2018', 'Living');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `description`) VALUES
(1, 'conference room', 'a place to have formal discussions'),
(2, 'kitchen', 'food'),
(3, 'living area', 'sirt and relax');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `reset` tinyint(1) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `reset`, `token`) VALUES
(1, 'Admin', 'qodehub', 'Emilia', '.', 0, '5b6c92a8332ff'),
(2, 'android', '123456', 'android', 'android', 0, ''),
(4, 'react', 'react', 'react', 'react', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qhbooking`
--
ALTER TABLE `qhbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qhbooking`
--
ALTER TABLE `qhbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
