-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 05:51 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `ID` int(12) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `slika` varchar(255) DEFAULT NULL,
  `cena` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`ID`, `ime`, `slika`, `cena`) VALUES
(1, 'Sony PlayStation 4(PS4) 1TB PRO Fortnite Bundle', '1.jpg', 415.00),
(2, 'Sony PlayStation 4(PS4) 500GB + Horizon Zero Dawn + Uncharted 4 And God of War III:Remastered', '2.jpeg', 435.00),
(3, 'Sony PlayStation 4(PS4) 1TB+StarWars Battlefront 2 limited edt', '3.jpg', 450.00),
(4, 'Sony PlayStation 4(PS4) 1TB+Gran Tourismo Sport Limited Edition', '4.jpg', 330.00),
(5, 'Sony PlayStation 4(PS4) 1TB PRO', '5.jpg', 410.00),
(6, 'Sony PlayStation 4(PS4) 1TB PRO White', '6.png', 430.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
