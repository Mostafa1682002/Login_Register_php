-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql207.byetcluster.com
-- Generation Time: Apr 13, 2023 at 08:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eb2a_33593927_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `country`) VALUES
(1, 'Mostafa Hossam', 'most1682002@gmail.com', '1682002', 'Egypt'),
(2, 'admin', 'ali1234@gmail.com', '456465721567', 'India'),
(3, 'admin2', 'moustafa.hossam160775@ci.menofia.edu.eg', '15893723167', 'Egypt'),
(4, 'Mostafa Hossam Rizk', 'moustafa.hossam160775@ci.menofia.edu.eg', 'most168255', 'United States of America'),
(5, 'admin3', 'moustafa.hossam160775@ci.menofia.edu.eg', '1321654326', 'United Kingdom'),
(6, 'teefa', 'moustafa.yehia160800@ci.menofia.edu.eg', '123456', 'Egypt'),
(7, 'Admin23', 'admin1234@gmail.com', 'mo1236', 'India'),
(8, 'mostafa ', 'mostafa.zahra69320@gmail.com', '123456789', 'Egypt'),
(10, 'Mostafa Hossam2', 'moustafa.hossam160775@ci.menofia.edu.eg', '123456', 'Egypt'),
(11, 'Most', 'mosta@gmail.com', '123456', 'Egypt');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
