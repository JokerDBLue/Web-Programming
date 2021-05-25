-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 02:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `articol`
--

CREATE TABLE `articol` (
  `idArticol` int(11) NOT NULL,
  `titlu` varchar(50) NOT NULL,
  `continut` varchar(600) NOT NULL,
  `dateSuplimentare` varchar(100) DEFAULT NULL,
  `idUtilizator` int(11) NOT NULL,
  `imagine` varchar(100) DEFAULT NULL,
  `tipContinut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articol`
--

INSERT INTO `articol` (`idArticol`, `titlu`, `continut`, `dateSuplimentare`, `idUtilizator`, `imagine`, `tipContinut`) VALUES
(1, 'Copil in spatiu', 'Copilul a inebunit si a mers in spatiu! multi oameni nu pot sa creada asa ceva! WOWx2', NULL, 2, 'images/space-kid.jpg', 'amuzante'),
(2, 'CAFEA IN SPATIU. WOOOOO', 'ACUUMA AVEM CAFEA IN SPATIU! WOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO', NULL, 2, 'images/spaceCoffee.jpg', 'false'),
(3, '10 OAMENI NU MAI DORESC IMAGINI LA ARTICOLE', 'mAI PUTINA MUNCA PENTRU MINE :D', NULL, 2, NULL, 'politica'),
(4, 'Mihai mai incearca', 'Loghin Mihai Adrian incearca pentru a inca o mia oara sa faca aceasta functionalitate sa functioneze.\nOare o sa reuseasca sau o sa fie invins de inimicul suprem numit php!?!?', NULL, 2, NULL, 'amuzante'),
(5, 'Testăm și diacritice', 'Această știre e doar a testa diacriticile.\nșțȘȚĂăÎîÂâ\n!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', NULL, 2, NULL, 'false'),
(6, 'dddddddddddddddddddd', 'dddddddddddddddddddddddddddddddddddddd', NULL, 2, NULL, 'sport');

-- --------------------------------------------------------

--
-- Table structure for table `comentariu`
--

CREATE TABLE `comentariu` (
  `continut` varchar(60) NOT NULL,
  `idArticol` int(11) NOT NULL,
  `idUtilizator` int(11) NOT NULL,
  `dataPostarii` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `parola` varchar(128) NOT NULL,
  `nrTelefon` varchar(17) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tipUtilizator` varchar(25) NOT NULL,
  `despre` varchar(500) DEFAULT NULL,
  `dataNasterii` varchar(30) NOT NULL,
  `aprobat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `firstName`, `lastName`, `parola`, `nrTelefon`, `email`, `tipUtilizator`, `despre`, `dataNasterii`, `aprobat`) VALUES
(2, 'aaa', 'nbaa', '$2y$10$Uk9LizlwyQBiU5qKGOqwrO8uIYSuDuJpYySEe8ZhWVXmu2Jhe6dga', '(+40)749 015 323', 'mihai99loghin@yahoo.com', '1', 'Sunt mihai', '04/03/1999', 1),
(3, 'aaa', 'bbbb', '$2y$10$DlkYo8gqWPf9Kp0drmPiF.sxipzlb7IqDUpkayvlyx0oLolkGwWoS', '(+40)749 015 323', 'mihaitheromanian@yahoo.com', '2', '', '03/04/2020', 1),
(5, 'mihai', 'loghin', '$2y$10$RE.csrlltc7GGUJ6/mHYQeXmBZ/.MiCsChyxme7abeNipX.G7wtOi', '(+40)749 015 323', 'mihaitheromanian@gmail.com', '0', 'Sunt Mihai', '02/01/1990', 1),
(7, 'smith', 'john', '$2y$10$NPMdXnzvnZaOyjGWlqWQ8u.KgVsrA2OuFY4NZHxRTGczzyY4FTQ5S', '(+40)555 015 222', 'john@smith.com', '0', 'sadffsdvsdcvsd', '03/04/2021', 1),
(8, 'asdas', 'asda', '$2y$10$3oXr43hYtF1PIEvFwd6msuBb0j1nM.6Us2wmWnbnKd2KLqETJ/L0.', '(+40)749 015 323', 'p@p.com', '1', 'sadsa', '03/04/1999', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articol`
--
ALTER TABLE `articol`
  ADD PRIMARY KEY (`idArticol`),
  ADD KEY `autor` (`idUtilizator`);

--
-- Indexes for table `comentariu`
--
ALTER TABLE `comentariu`
  ADD KEY `articolul` (`idArticol`),
  ADD KEY `utilizatorul` (`idUtilizator`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articol`
--
ALTER TABLE `articol`
  MODIFY `idArticol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articol`
--
ALTER TABLE `articol`
  ADD CONSTRAINT `autor` FOREIGN KEY (`idUtilizator`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comentariu`
--
ALTER TABLE `comentariu`
  ADD CONSTRAINT `articolul` FOREIGN KEY (`idArticol`) REFERENCES `articol` (`idArticol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizatorul` FOREIGN KEY (`idUtilizator`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
