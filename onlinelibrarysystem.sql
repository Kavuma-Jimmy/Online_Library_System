-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 09:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinelibrarysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adminno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`, `adminno`) VALUES
(13, 'Sawyer Maynard', 'rodimigyba', 'sehyjod@mailinator.com', '$2y$10$ydhHTRdVBmCnRRYG8FIfte7epKjto.dpHFveZkRdegDjJjk3p.Iwa', '357'),
(15, 'Kermit Petersen', 'qeqykojub', 'bowa@mailinator.com', '$2y$10$Cscnzi7SEACT8Q.zLSuEw.JP/NHVEm/U9NMEbVatKYavFgypgpmqq', '674'),
(16, 'Steven Patton', 'nuvihoh', 'panda@gmail.com', '$2y$10$IVS9vXSH7lCf7obSIcnBKOIpyEBxXHAvmYCL9tAUtEWh6YXoN6xe.', '12345'),
(17, 'Abas Kiseka', 'Abas', 'panda.abas@hotmail.com', '$2y$10$YY146vg.UR3hzYv0vmRUa.gzzgKxD3A2jxuaKXE306oc/NKgE0/pi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patrons`
--

CREATE TABLE `patrons` (
  `patronID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `patronno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patrons`
--

INSERT INTO `patrons` (`patronID`, `name`, `email`, `username`, `password`, `patronno`) VALUES
(1, 'Christen Velez', 'qycezataga@mailinator.com', 'hufiko', '$2y$10$pYeaUwAtp0sxM1NjWqnWKed8vvTSviJ33CzIpWvHR5HqWtYBYnsnq', ''),
(2, 'Graiden Merrill', 'didul@mailinator.com', 'didawaxyci', '$2y$10$oEbEG9tev0fCpSLG.o.hvO24CUAEvDY5YaLnULyKOGYZrtyNjyhcW', ''),
(3, 'Jolene Sweeney', 'tebyxun@mailinator.com', 'xedizafaq', '$2y$10$QqhWrNiPjDTq0Q5krUs7Q.4f2TUzA8kSHx.hRa9rC3vqmFKqhri2O', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `username`, `email`, `password`) VALUES
(1, 'Aladdin Monroe', 'hydutedeky', 'hukefube@mailinator.com', '$2y$10$YX/zplKc16OqzpE6CUhubeNTCNNsxcTtAtZvwEljl.tmOBhZsLypq'),
(2, 'Lois Snider', 'kokoriru', 'nevimoqa@mailinator.com', '$2y$10$t51MWlRe2H.QTNAiAUDeK.lalNvDn3K45hTdq8292OrsAGwNDFwNO'),
(3, 'Bruno Burgess', 'gajaqoh', 'faze@mailinator.com', '$2y$10$/FtzCPd5CE76C780c4UOdOZevX/qi8mQO7g1.WGWe3hCRkqY.OeI2'),
(4, 'Ulric Donovan', 'wakyr', 'tagotywe@mailinator.com', '$2y$10$qdAOYM5X86eRII/quawKzui.cLZ9Ain19YOQUsrop0EdDRQPo6rxK'),
(5, 'Lacota Alexander', 'tutypyfoko', 'loref@mailinator.com', '$2y$10$aqVtWRcbvjUA5T5J5X4WYOb9bCMg4GQglONd7y7rocQYVXIAxYu0i'),
(6, 'Lance Sellers', 'abas', 'panda.abas@hotmail.com', '$2y$10$Ro0xYw2gOIeH/kkZgFS2f.KB8tvOdfxtfQBiuWOANQMJZnytv5lv2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patrons`
--
ALTER TABLE `patrons`
  ADD PRIMARY KEY (`patronID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patrons`
--
ALTER TABLE `patrons`
  MODIFY `patronID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
