-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 02:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `gender`, `date`, `mobile`, `address`, `country`, `state`, `city`, `pincode`, `password`, `password2`) VALUES
(1, 'harmik', 'lathiya', 'lathiyaharmik50@gmail.com', 'male', '2020-09-17', 2147483647, '', 'india', 'gujarat', 'surat', 395006, 'harmik', 'harmik'),
(2, 'jayom', 'maniya', 'jayommaniya@gmail.com', 'male', '2020-09-24', 2147483647, 'mata vadi ', 'india', 'gujarat', 'surat', 395006, 'harmik', 'harmik'),
(3, 'jayom', 'maniya', 'jayommaniya@gmail.com', 'male', '2020-09-24', 2147483647, 'mata vadi ', 'india', 'gujarat', 'surat', 395006, 'harmik', 'harmik'),
(4, 'jayom', 'maniya', 'jayommaniya@gmail.com', 'male', '2020-09-24', 2147483647, 'mata vadi ', 'india', 'gujarat', 'surat', 395006, 'harmik', 'harmik'),
(5, 'jayom', 'maniya', 'lathiyaharmik@gmail.com', 'male', '2020-09-25', 2147483647, 'mota varachha', 'india', 'gujarat', 'surat', 395006, 'harmik', 'harmik'),
(6, 'jayom', 'maniya', 'lathiyaharmik@gmail.com', 'male', '2020-09-25', 2147483647, 'mota varachha', 'india', 'gujarat', 'surat', 395006, 'harmik', 'harmik'),
(7, 'jayom', 'maniya', 'lathiyaharmik@gmail.com', 'male', '2020-09-25', 2147483647, 'mota varachha', 'india', 'gujarat', 'surat', 395006, 'harmik', 'harmik'),
(8, 'jayom', 'maniya', 'lathiyaharmik@gmail.com', 'male', '2020-09-25', 2147483647, 'mota varachha', 'india', 'gujarat', 'surat', 395006, 'harmik', 'harmik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
