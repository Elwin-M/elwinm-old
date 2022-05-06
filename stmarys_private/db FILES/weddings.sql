-- phpMyAdmin SQL Dump
-- version 4.9.7deb1~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2021 at 12:39 PM
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
-- Table structure for table `weddings`
--

CREATE TABLE `weddings` (
  `id` int(11) NOT NULL,
  `husband` varchar(100) COLLATE utf8_bin NOT NULL,
  `wife` varchar(100) COLLATE utf8_bin NOT NULL,
  `house_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `picture` varchar(100) COLLATE utf8_bin NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `thumb` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `weddings`
--

INSERT INTO `weddings` (`id`, `husband`, `wife`, `house_name`, `dob`, `picture`, `status`, `thumb`) VALUES
(88, 'Alex T. Mathew ', 'Mareen', '', '2010-12-31', '', 1, NULL),
(89, 'Babby Thariath ', 'Aswathy', '', '2010-12-26', '', 1, NULL),
(90, 'Baby K. Simon ', 'Binz', '', '2010-12-26', '', 1, NULL),
(91, 'Binu P. Mathew ', 'Asha', '', '2010-12-28', '', 1, NULL),
(92, 'Johnson N U', 'Aniciah', '', '2010-12-28', '', 1, NULL),
(93, 'Rijie Mathews ', 'Ann', '', '2010-12-26', '', 1, NULL),
(94, 'Roy Itty ', 'Sara', '', '2010-12-25', '', 1, NULL),
(95, 'Varghese Tharayil ', 'Vineetha', '', '2010-12-31', '', 1, NULL),
(96, 'Rity Pappachan ', 'Jeeba', '', '2010-11-23', '', 1, NULL),
(97, 'Sijo Pokkattu Varghese ', 'Josmi', '', '2010-11-23', '', 1, NULL),
(98, 'Aneesh Abraham ', 'Soniya', '', '2010-11-28', '', 1, NULL),
(99, 'James Varghese ', 'Anu', '', '2010-11-11', '', 1, NULL),
(100, 'Jinto Andrews ', 'Elmy', '', '2010-11-06', '', 1, NULL),
(101, 'Baiju V. Pattasseril ', 'Jijimol', '', '2010-10-08', '', 1, NULL),
(102, 'Mathai K. Kurian ', 'Sarakutty', '', '2010-10-31', '', 1, NULL),
(103, 'Ray Kurian ', 'Julie', '', '2010-10-25', '', 1, NULL),
(104, 'Harish Alex Planthanthu ', 'Shoby', '', '2010-09-14', '', 1, NULL),
(105, 'Thelappillil', '', '', '2010-09-01', '', 1, NULL),
(106, 'Jacob John ', 'Tara', '', '2010-09-12', '', 1, NULL),
(107, 'Korah Paul ', 'Rachel', '', '2010-09-24', '', 1, NULL),
(108, 'Raju Varghese ', 'Sarah', '', '2010-09-05', '', 1, NULL),
(109, 'Rogi Varghese ', 'Melda', '', '2010-09-14', '', 1, NULL),
(110, 'Fr.Abey Mathew', 'Soumya', '', '2010-08-17', '', 1, NULL),
(111, 'Abey Joseph ', 'Smitha', '', '2010-08-07', '', 1, NULL),
(112, 'Anish Peter ', 'Jolly', '', '2010-08-29', '', 1, NULL),
(113, 'Delip Thomas ', 'Nithaya', '', '2010-08-17', '', 1, NULL),
(114, 'Dinoob Abraham ', 'Marydas', '', '2010-08-06', '', 1, NULL),
(115, 'Sunil Sam Mathew ', 'Manju', '', '2010-08-15', '', 1, NULL),
(116, 'Varghese Kottapurathu ', 'Neethu', '', '2010-08-29', '', 1, NULL),
(117, 'Zachariah Mathew ', 'Tatia', '', '2010-08-15', '', 1, NULL),
(118, 'Ajoy John ', 'Reena', '', '2010-07-19', '', 1, NULL),
(119, ' Benny Mathew ', 'Mareena', '', '2010-07-01', '', 1, NULL),
(120, ' Eldose K. Jose ', 'Avril', '', '2010-07-31', '', 1, NULL),
(121, ' George Tharayil ', 'Mishel', '', '2010-07-29', '', 1, NULL),
(122, ' George Varghese ', 'Sarakutty', '', '2010-07-21', '', 1, NULL),
(123, ' Jacob Elavathil ', 'Leelamma', '', '2010-07-15', '', 1, NULL),
(124, ' Jobin Joy', 'Blessy', '', '2010-07-16', '', 1, NULL),
(125, ' Michael Anter ', 'Priyanka', '', '2010-07-10', '', 1, NULL),
(126, 'Victor Palal ', 'Leela', '', '2010-07-13', '', 1, NULL),
(127, 'Willy Moolakkattu ', 'Liya', '', '2010-07-16', '', 1, NULL),
(128, 'Andrew Thozhuppdan ', 'Tiny', '', '2010-06-08', '', 1, NULL),
(129, 'Atlar Kurian ', 'Linu', '', '2010-06-25', '', 1, NULL),
(130, 'Mathew ', 'Gikku', '', '2010-06-03', '', 1, NULL),
(131, 'Jean Joseph ', 'Nisha', '', '2010-06-29', '', 1, NULL),
(132, 'John Vavolickal ', 'Jomini', '', '2010-06-04', '', 1, NULL),
(133, 'Paul Thadiyan George', 'Suchita', '', '2010-06-21', '', 1, NULL),
(134, 'Thomas Kurian ', 'Lissy', '', '2010-06-23', '', 1, NULL),
(135, 'Alex E. Thomas ', 'Maya', '', '2010-01-10', '', 1, NULL),
(136, 'Alexander Kurien ', 'Beena', '', '2010-01-26', '', 1, NULL),
(137, 'Bino P. Thomas ', 'Sini', '', '2010-01-22', '', 1, NULL),
(138, 'Geo P. Kunju ', 'Nitha', '', '2010-01-25', '', 1, NULL),
(139, 'Jacob Kuzhikkatil ', 'Aleyamma', '', '2010-01-18', '', 1, NULL),
(140, 'Jebin Uthup ', 'Sneeha', '', '2010-01-22', '', 1, NULL),
(141, 'Joy Mandothil ', 'Meena', '', '2010-01-17', '', 1, NULL),
(142, 'Joy Mathai ', 'Jinu', '', '2010-01-19', '', 1, NULL),
(143, 'Joy Olangad ', 'Vini', '', '2010-01-02', '', 1, NULL),
(144, 'Joy TK ', 'Molly', '', '2010-01-20', '', 1, NULL),
(145, 'Prasanth Joy ', 'Ancy', '', '2010-01-09', '', 1, NULL),
(146, 'Roy Paulose ', 'Sherly', '', '2010-01-12', '', 1, NULL),
(147, 'Thomas Thomas ', 'Valsa', '', '2010-01-18', '', 1, NULL),
(148, 'Yeldho Mathai', 'Sali', '', '2010-01-22', '', 1, NULL),
(149, 'Jacob John ', 'Lisha', '', '2010-02-16', '', 1, NULL),
(150, 'Jacob Thomas ', 'Sosamma', '', '2010-02-08', '', 1, NULL),
(151, 'Jacob Zachariah ', 'Sheeba', '', '2010-02-09', '', 1, NULL),
(152, 'Joy Kuriyan ', 'Reeja', '', '2010-02-16', '', 1, NULL),
(153, 'Paulose K. Varghese ', 'Mercy', '', '2010-02-06', '', 1, NULL),
(154, 'Shijo Johnson ', 'Divya', '', '2010-02-08', '', 1, NULL),
(155, 'Bejoy Joseph ', 'Divya', '', '2010-04-14', '', 1, NULL),
(156, 'Joby Peter', 'Bhavani', '', '2010-04-30', '', 1, NULL),
(157, 'Ramsaran', 'Rajeena', '', '2010-04-03', '', 1, NULL),
(158, 'Thomas Mathew ', 'Susan', '', '2010-04-23', '', 1, NULL),
(159, 'Nibu Mathew ', 'Deepthy', '', '2010-05-16', '', 1, NULL),
(160, 'Nishad Eldhose ', 'Dimy', '', '2010-05-02', '', 1, NULL),
(161, 'Renjith John Thariath ', 'Blessy', '', '2010-05-03', '', 1, NULL),
(162, 'Thambi Chacko ', 'Achamma', '', '2010-05-21', '', 1, NULL),
(163, 'Ebin John ', 'Ria Renjith', '', '2010-05-27', '', 1, NULL),
(164, 'Eldhose John ', 'Praseetha', '', '2010-05-22', '', 1, NULL),
(165, 'Filji Korala ', 'Jaya', '', '2010-05-25', '', 1, NULL),
(166, 'Medhun Mathews ', 'Sherin', '', '2010-05-12', '', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weddings`
--
ALTER TABLE `weddings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weddings`
--
ALTER TABLE `weddings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
