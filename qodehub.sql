-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 05:00 PM
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
  `name` varchar(10) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qhbooking`
--

INSERT INTO `qhbooking` (`id`, `name`, `reason`, `start`, `end`) VALUES
(8, 'Melissa', 'Interview', '10:00:00', '12:00:00'),
(9, 'Emmanuel', 'Developers Forum', '12:00:00', '14:00:00'),
(10, 'Sena Amevo', 'Company Policies', '14:00:00', '16:00:00'),
(11, 'Patrick', 'Developers Forum', '09:00:00', '11:00:00'),
(12, 'Benjamin N', 'meeting', '12:00:00', '10:30:00'),
(13, 'Benjamin N', 'Meeting', '12:00:00', '13:00:00'),
(14, 'Kingsley', 'To make some App Brainstorming', '08:00:00', '10:00:00'),
(15, 'kofi adicl', 'something I want to put here', '08:30:00', '09:30:00'),
(16, 'Kingsley', 'To make some App Brainstorming', '08:00:00', '10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qhbooking`
--
ALTER TABLE `qhbooking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qhbooking`
--
ALTER TABLE `qhbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
