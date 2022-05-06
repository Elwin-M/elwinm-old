-- phpMyAdmin SQL Dump
-- version 4.9.7deb1~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2021 at 12:38 PM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signage`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagegal`
--

CREATE TABLE `imagegal` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) COLLATE utf8_bin NOT NULL,
  `status` int(1) NOT NULL,
  `sort_order` int(11) DEFAULT 0,
  `thumb` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Image gallery';

--
-- Dumping data for table `imagegal`
--

INSERT INTO `imagegal` (`id`, `picture`, `status`, `sort_order`, `thumb`) VALUES
(9, 'RsNZJnw.jpg', 1, 0, NULL),
(10, 'St.Marys_.jpg', 1, 0, NULL),
(11, 'wp522064.jpg', 1, 0, NULL),
(12, 'wp1937227.jpg', 1, 0, NULL),
(13, 'wp2207012.jpg', 1, 0, NULL),
(14, 'wp2207121.jpg', 1, 0, NULL),
(15, 'wp2207122.jpg', 1, 0, NULL),
(16, 'wp2207161.jpg', 1, 0, NULL),
(17, 'wp2318879.jpg', 1, 0, NULL),
(18, 'wp2347717.jpg', 1, 0, NULL),
(19, 'wp2377237.jpg', 1, 0, NULL),
(20, 'wp2482328.jpg', 1, 0, NULL),
(21, 'wp2532542.jpg', 1, 0, NULL),
(22, 'wp2835352.jpg', 1, 0, NULL),
(23, 'wp3357457.jpg', 1, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagegal`
--
ALTER TABLE `imagegal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagegal`
--
ALTER TABLE `imagegal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
