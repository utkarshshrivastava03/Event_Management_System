-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 03:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `password`, `image`) VALUES
(1, 'utkarsh', '7803024789', 'utkarsh@example.com', 'utkarsh9', ''),
(2, 'amit', '9632587410', 'amit@gmail.com', 'amit@123', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `message` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `city`, `email`, `contact`, `message`) VALUES
(2, 'Ishita Kar', 'Bhilai', 'ishitakar08@gmail.com', '9874563691', 'hello i am looking for an Event planner please respond to me.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `food` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `message` varchar(300) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `sdate`, `edate`, `stime`, `etime`, `food`, `address`, `contact`, `email`, `location`, `message`) VALUES
(2, 'utkarsh', 'birthday party', '2021-07-05', '2021-07-05', '05:00:00', '00:20:21', '', 'raipur', '9874563210', 'utkarsh@example.com', '', 'hello'),
(3, 'utkarsh', 'birthday party', '2021-07-05', '2021-07-05', '05:00:00', '00:20:21', '', 'raipur', '9987456320', 'utkarsh@example.com', 'sayaji', 'hello'),
(4, 'utkarsh', 'birthday party', '2021-07-05', '2021-07-05', '05:00:00', '00:20:21', '', 'raipur', '9987456320', 'utkarsh@example.com', 'sayaji', 'hello'),
(5, 'amit', 'reception', '2021-07-20', '2021-07-20', '05:00:00', '00:20:21', 'on', 'bhilai', '965874125', 'amit@example.com', 'silver spring', 'hello please contact me');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `contact`, `password`) VALUES
(4, 'utkarsh', 'utkarsh@example.com', 2147483647, '12345'),
(6, 'ishita', 'ishita@gmail.com', 2147483647, 'ishita'),
(7, 'amit', 'amit@example.com', 2147483647, 'amit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
