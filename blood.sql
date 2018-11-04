-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 05:45 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `blood` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `name`, `email`, `address`, `city`, `phone`, `password`, `gender`, `blood`) VALUES
(5, 'Karurbalamathi@gmail.com', 'Karurbalamathi@gmail.com', '89,c, South Narasimmapuram', 'KARUR', '9566711894', '$2y$12$Nxek6LrtSnn6hch/d7rPZupNZVtbpom9qbKQAUqhDpERxvp9HVUh6', 'male', 'O-Positive'),
(6, 'Karurbalamathi@gmail.com', 'Karurbalamathi@gmail.com', '89,c, South Narasimmapuram', 'KARUR', '9566711894', '$2y$12$yIFmk8LZktTFwDx1u8Xl5.mMKoSfST23JIqvXFcLRw9n9IevWagDK', 'male', 'A-Positive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
