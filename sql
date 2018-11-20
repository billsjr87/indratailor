-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 12:10 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_indratailor`
--
DROP DATABASE IF EXISTS `db_indratailor`;
CREATE DATABASE IF NOT EXISTS `db_indratailor` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_indratailor`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_accrs`
--

CREATE TABLE `tb_accrs` (
  `accr_nmbr` int(11) NOT NULL,
  `ordr_nmbr` varchar(8) NOT NULL,
  `accr_amnt` int(11) NOT NULL DEFAULT '0',
  `accr_stat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_orders`
--

CREATE TABLE `tb_orders` (
  `ordr_nmbr` varchar(8) NOT NULL,
  `trax_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ordr_date` date DEFAULT NULL,
  `ordr_fndt` date DEFAULT NULL,
  `ordr_detl` text,
  `cust_indx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profiles`
--

CREATE TABLE `tb_profiles` (
  `stor_indx` int(11) NOT NULL,
  `stor_name` varchar(256) NOT NULL,
  `stor_addr` varchar(512) NOT NULL,
  `stor_phnn` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pymts`
--

CREATE TABLE `tb_pymts` (
  `__id` int(11) NOT NULL,
  `accr_nmbr` int(11) NOT NULL,
  `pymt_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pymt_amnt` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_accrs`
--
ALTER TABLE `tb_accrs`
  ADD PRIMARY KEY (`accr_nmbr`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`ordr_nmbr`);

--
-- Indexes for table `tb_profiles`
--
ALTER TABLE `tb_profiles`
  ADD PRIMARY KEY (`stor_indx`);

--
-- Indexes for table `tb_pymts`
--
ALTER TABLE `tb_pymts`
  ADD PRIMARY KEY (`__id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_accrs`
--
ALTER TABLE `tb_accrs`
  MODIFY `accr_nmbr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_profiles`
--
ALTER TABLE `tb_profiles`
  MODIFY `stor_indx` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pymts`
--
ALTER TABLE `tb_pymts`
  MODIFY `__id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;