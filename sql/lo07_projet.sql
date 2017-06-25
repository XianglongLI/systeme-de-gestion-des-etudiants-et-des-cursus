-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-06 08:34:56
-- MySQL Version 5.7.17
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE `lo07_projet`;

--
-- Database: `lo07_projet`
--

USE `lo07_projet`;

-- --------------------------------------------------------

--
-- table `etu`
--

CREATE TABLE `etu` (
  `NoCarte` int(5) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Admission` char(4) NOT NULL,
  `Filiere` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- table `formation`
--

CREATE TABLE `formation` (
  `NoCarte` int(5) NOT NULL,
  `sem_seq` int(2) NOT NULL,
  `sem_label` char(5) NOT NULL,
  `sigle` char(10) NOT NULL,
  `categorie` char(6) NOT NULL,
  `affectation` char(5) NOT NULL,
  `UTT` char(2) NOT NULL,
  `profil` char(2) NOT NULL,
  `credit` int(3) NOT NULL,
  `resultat` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etu`
--
ALTER TABLE `etu`
  ADD PRIMARY KEY (`NoCarte`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`NoCarte`,`sigle`);

ALTER TABLE `formation`
  ADD CONSTRAINT FK_NoCarte FOREIGN KEY (`NoCarte`) references etu(NoCarte);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
