-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2015 at 04:34 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `idapps` int(11) NOT NULL,
  `appname` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pathlogo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`idapps`, `appname`, `description`, `pathlogo`) VALUES
(1, 'peepoo', 'Pee@Poo', NULL),
(2, 'smartq', 'SmartQ', NULL),
(3, 'codify', 'Codify', NULL),
(4, 'askgov', 'AskGov', NULL),
(5, 'moja', 'Jejak Asnaf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `respons`
--

CREATE TABLE `respons` (
  `idrespons` int(11) NOT NULL,
  `idapps` int(11) NOT NULL,
  `q1` varchar(45) NOT NULL,
  `q2` varchar(45) NOT NULL,
  `q3` varchar(45) NOT NULL,
  `q4` varchar(45) DEFAULT NULL,
  `q5` varchar(45) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`idapps`);

--
-- Indexes for table `respons`
--
ALTER TABLE `respons`
  ADD PRIMARY KEY (`idrespons`),
  ADD KEY `fk_respons_apps_idx` (`idapps`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `idapps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `respons`
--
ALTER TABLE `respons`
  MODIFY `idrespons` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `respons`
--
ALTER TABLE `respons`
  ADD CONSTRAINT `fk_respons_apps` FOREIGN KEY (`idapps`) REFERENCES `apps` (`idapps`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
