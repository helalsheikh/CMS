-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 04:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khan`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `picture`, `username`, `password`, `email`, `age`, `address`, `date_time`) VALUES
(113, 'pic (1).jpg', 'khan', '25825800', 'national@gmail.com', 25, 'Chadpur', '2022-09-27 07:07:36'),
(115, 'pic (47).jpg', 'national', 'H10203040h#', 'dulal@gmail.com', 70, 'Tangail', '2022-09-27 07:18:59'),
(116, 'pic (13).PNG', 'flower', 'H10203040h#', 'flower@gmail.com', 60, 'India', '2022-09-27 07:20:07'),
(117, 'pic (41).jpg', 'flower', 'H10203040h#', 'flower@gmail.com', 60, 'India', '2022-09-27 07:20:23'),
(118, 'pic (41).jpg', 'flower', 'H10203040h#', 'flower@gmail.com', 60, 'India', '2022-09-27 07:24:29'),
(120, 'pic (2).jpg', 'khan', 'H1233000h#', 'normal@gmail.com', 60, 'Chadpur', '2022-09-27 07:33:40'),
(121, 'pic (2).PNG', 'canada', 'H10203040h#', 'dulal@gmail.com', 70, 'Jhawgora', '2022-09-27 09:23:21'),
(122, 'pic (36).jpg', 'national', 'H2231000h#', 'fashion@gmail.com', 80, 'Melandha', '2022-09-27 11:58:45'),
(123, 'pic (36).jpg', 'national', 'H2231000h#', 'fashion@gmail.com', 80, 'Melandha', '2022-09-27 12:03:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
