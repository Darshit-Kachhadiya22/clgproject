-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2024 at 07:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safar`
--

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `id` int(11) NOT NULL,
  `nooftravelers` int(20) NOT NULL,
  `traveldate` date NOT NULL,
  `starcategory` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`id`, `nooftravelers`, `traveldate`, `starcategory`, `city`, `name`, `phoneno`, `email`, `destination`, `password`) VALUES
(1, 2, '2023-10-24', '4star', 'df', 'fd', '34', 'f@gmail.com', 'df', 'fef'),
(2, 1, '2023-10-11', '5satr', 'kalsari', 'darshit', '9898989898', 'darshitkachhadiya795@gmail.com', 'jnd', 'dwf44'),
(3, 1, '2023-10-11', '5satr', 'kalsari', 'darshit', '9898989898', 'darshitkachhadiya795@gmail.com', 'jnd', 'dwf44'),
(4, 2, '2023-10-26', '5satr', 'q', 'e', '98', 'd@gmail.com', 'kj', 'k'),
(5, 1, '2023-10-10', '4star', 'cds', 'cs', '333', 'fe@gmail.com', 'fece', 'ef'),
(6, 2, '2023-10-10', '4star', 'cvd', 'vd', '34', 'd@gmail.comf', 'v', 'c'),
(7, 2, '2023-10-10', '4star', 'cvd', 'vd', '34', 'd@gmail.comf', 'v', 'c'),
(8, 1, '2023-10-17', '4star', 'ds', 'ds', '23', 'd@gmail.com', 'df', 'fe'),
(9, 2, '2023-10-09', '3star', 'd', 'd', '33', 'd@gmail.com', 'diu', 'dkjfoj4j34'),
(10, 1, '2023-10-09', '5satr', 'aa', 'aa', '11', 'aa@gmail.com', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `contctus`
--

CREATE TABLE `contctus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contctus`
--

INSERT INTO `contctus` (`id`, `name`, `email`, `message`) VALUES
(8, 'demo', 'demo@gmail.com', 'this is amazing website.'),
(11, 'a', 'a@gmail.comd', 'f'),
(12, 'a', 'a@gmail.comd', 'f'),
(13, 'd', 'd@gmail.com', 'dfs'),
(14, 'd', 'd@gmail.com', 'dfs'),
(15, 'e', 'd@gmail.comd', 's'),
(16, 'hello', 'hello@gmail.com', 'hello'),
(17, 'hi', 'h@gmail.com', 'hii\r\n'),
(18, 'hooh', 'ho@gmail.com', 'jo'),
(19, 'sd', 'd@gmail.com', 'ds'),
(20, 'd', 'd@gmail.com', 'dfddf'),
(21, 'sd', 'd@gmail.com', 'dfs'),
(22, 'hello', 'hello@gmail.con', 'onina');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fullname`, `username`, `email`, `password`, `confirmpassword`) VALUES
(11, 'd', 'd', 'd@gmail.com', 'd', 'd'),
(12, 'dd', 'dd', 'd@gmail.com', 'd', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contctus`
--
ALTER TABLE `contctus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booknow`
--
ALTER TABLE `booknow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contctus`
--
ALTER TABLE `contctus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
