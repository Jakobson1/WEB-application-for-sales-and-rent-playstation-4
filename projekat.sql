-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 12:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `narudzbina`
--

CREATE TABLE `narudzbina` (
  `id` int(11) NOT NULL,
  `IDKorisnika` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tip` varchar(50) NOT NULL,
  `Adresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudzbina`
--

INSERT INTO `narudzbina` (`id`, `IDKorisnika`, `Email`, `Tip`, `Adresa`) VALUES
(1, 19, 'Radici1995@yahoo.com', 'ZLATNA', 'Adresa 1'),
(2, 19, 'Radici1995@yahoo.com', 'ZLATNA', 'Adresa 2');

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `ID` int(100) NOT NULL,
  `Ime` varchar(100) NOT NULL,
  `Prezime` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Korisnicko_Ime` varchar(100) NOT NULL,
  `Sifra` varchar(100) NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`ID`, `Ime`, `Prezime`, `Email`, `Korisnicko_Ime`, `Sifra`, `Admin`) VALUES
(16, 'Marko', 'Jakobson', 'marko1215@its.edu.rs', 'Mare', 'fudbal', 1),
(17, 'Slavica', 'Petrovic', 'slavka94@gmail.com', 'Slavicaa', 'ps4team', 0),
(18, 'Milos', 'Jokic', 'milos1995@gmail.com', 'Meelosch', 'proleter', 0),
(19, 'Blagoja', 'Radic', 'Radici1995@yahoo.com', 'Rodja', 'topalko', 0),
(20, 'Toma', 'Putnikovic', 'tomica@hotmail.com', 'Mica', 'ugao45', 0),
(21, 'Milena', 'Dravic', 'milena1312@gmail.rs', 'Lenami', 'sifra', 0),
(22, 'Milovan', 'Milovic', 'milovan1993@gmail.com', 'milovan', '456', 0),
(23, 'Nenad', 'Munisic', 'Nenad@yahoo.com', 'Sone', 'Nenad123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `narudzbina`
--
ALTER TABLE `narudzbina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `narudzbina`
--
ALTER TABLE `narudzbina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
