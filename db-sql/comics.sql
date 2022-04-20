-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 08:23 PM
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
-- Database: `forums`
--

-- --------------------------------------------------------

--
-- Table structure for table `comics`
--

CREATE TABLE `comics` (
  `Date` text NOT NULL,
  `Company` tinytext NOT NULL,
  `Title` tinytext NOT NULL,
  `IssueNumber` int(100) NOT NULL,
  `Grade` char(100) NOT NULL,
  `B/C` text NOT NULL,
  `CoverPrice` double NOT NULL,
  `OversheetPrice` double NOT NULL,
  `SalesPrice` double NOT NULL,
  `Id` int(11) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comics`
--

INSERT INTO `comics` (`Date`, `Company`, `Title`, `IssueNumber`, `Grade`, `B/C`, `CoverPrice`, `OversheetPrice`, `SalesPrice`, `Id`, `Image`) VALUES
('Aug-75\r\n', 'Marvel\r\n', 'Dead of Night: Scarecrow\r\n', 11, 'A\r\n', 'B, C\r\n', 0.25, 75, 35, 1, ''),
('Dec-73', 'Marvel', 'Astonishing Tales: It!', 21, 'A', 'B, C', 0.2, 50, 25, 2, ''),
('Jul-72', 'Marvel', 'Werewolf by Night', 1, 'A', 'B, C', 0.2, 400, 200, 3, ''),
('Jul-74', 'Marvel', 'Giant-Size Creatures', 1, 'A', 'B, C', 0.35, 200, 100, 4, ''),
('Dec-68', 'Marvel', 'The Avengers', 58, 'B', 'B, C', 0.12, 179, 85, 5, ''),
('Dec-70', 'Marvel', 'The Avengers', 83, 'A', 'B, C', 0.15, 325, 160, 6, ''),
('Apr-71', 'Marvel', 'The Avengers', 87, 'A', 'B, C', 0.15, 240, 120, 7, ''),
('Jul-71', 'Marvel', 'The Avengers', 90, 'B', 'B, C', 0.15, 69, 33, 8, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comics`
--
ALTER TABLE `comics`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
