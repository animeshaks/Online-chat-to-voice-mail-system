-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 09:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

CREATE TABLE `logintbl` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `mobileno` bigint(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`uname`, `password`, `branch`, `mobileno`, `address`, `image`) VALUES
('ani', 'ani', 'cse', 9144585044, 'New Khursipar', 'IMG-20190718-WA0015.jpg'),
('anki', 'anki', 'cse', 9406133944, 'RUNGTA GIRLS HOSTLE', 'IMG-20190726-WA0014.jpg'),
('Ankita', '12345', 'cs', 6576543234, 'bhilai', 'IMG_20190813_193538.JPG.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `voiechat`
--

CREATE TABLE `voiechat` (
  `id` int(11) NOT NULL,
  `mailto` varchar(50) NOT NULL,
  `sendby` varchar(50) NOT NULL,
  `mail` varchar(10000) NOT NULL,
  `date` varchar(50) NOT NULL,
  `subject` varchar(10000) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voiechat`
--

INSERT INTO `voiechat` (`id`, `mailto`, `sendby`, `mail`, `date`, `subject`, `description`) VALUES
(1, '', 'ani', '', '19:10:10', '', ''),
(2, 'ani', 'anki', '', '19:10:10', '', ''),
(3, 'ani', 'anki', 'hello', '19:10:10', 'animesh', 'Hello Bhai '),
(4, '', 'ani', '', '19:10:10', '', ''),
(5, '', 'ani', '', '19:10:10', '', ''),
(6, 'anki', 'ani', 'hello', '19:10:10', '', 'Hello Ankita Verma 14'),
(7, 'ani', 'anki', 'hello bhai', '19:10:11', 'nsfdkj', 'I am bhindii'),
(8, 'sanchita', 'ani', 'message', '19:10:12', 'nsfdkj', 'I am ankita'),
(9, 'ani', 'Ankita', 'Nothing', '20:07:29', 'I am getting bored', 'deg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logintbl`
--
ALTER TABLE `logintbl`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `voiechat`
--
ALTER TABLE `voiechat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voiechat`
--
ALTER TABLE `voiechat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
