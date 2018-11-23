-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Nov 2018 pada 16.56
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `tb_accrs`
--

DROP TABLE IF EXISTS `tb_accrs`;
CREATE TABLE `tb_accrs` (
  `accr_nmbr` int(11) NOT NULL,
  `ordr_nmbr` varchar(8) NOT NULL,
  `accr_amnt` int(11) NOT NULL DEFAULT '0',
  `accr_stat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cate`
--

DROP TABLE IF EXISTS `tb_cate`;
CREATE TABLE `tb_cate` (
  `cate_indx` int(11) NOT NULL,
  `cate_name` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_cate`
--

INSERT INTO `tb_cate` (`cate_indx`, `cate_name`) VALUES
(1, 'Kemeja'),
(2, 'Jas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_custs`
--

DROP TABLE IF EXISTS `tb_custs`;
CREATE TABLE `tb_custs` (
  `cust_indx` int(11) NOT NULL,
  `cust_titl` tinyint(4) NOT NULL DEFAULT '1',
  `cust_name` varchar(64) NOT NULL,
  `cust_phnn` varchar(32) NOT NULL,
  `cust_addr` text,
  `cust_rgdt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detl_ordr`
--

DROP TABLE IF EXISTS `tb_detl_ordr`;
CREATE TABLE `tb_detl_ordr` (
  `detl_indx` int(11) NOT NULL,
  `ordr_nmbr` varchar(8) NOT NULL,
  `item_qtty` int(11) NOT NULL,
  `caty_indx` int(11) NOT NULL,
  `item_pric` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_item_cate`
--

DROP TABLE IF EXISTS `tb_item_cate`;
CREATE TABLE `tb_item_cate` (
  `item_cate_indx` int(11) NOT NULL,
  `item_indx` int(11) NOT NULL,
  `cate_indx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_item_cate`
--

INSERT INTO `tb_item_cate` (`item_cate_indx`, `item_indx`, `cate_indx`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_items`
--

DROP TABLE IF EXISTS `tb_items`;
CREATE TABLE `tb_items` (
  `item_indx` int(11) NOT NULL,
  `item_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_items`
--

INSERT INTO `tb_items` (`item_indx`, `item_name`) VALUES
(1, 'Batik'),
(2, 'Lengan Panjang'),
(3, 'Lengan Pendek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_orders`
--

DROP TABLE IF EXISTS `tb_orders`;
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
-- Struktur dari tabel `tb_profiles`
--

DROP TABLE IF EXISTS `tb_profiles`;
CREATE TABLE `tb_profiles` (
  `stor_indx` int(11) NOT NULL,
  `stor_name` varchar(256) NOT NULL,
  `stor_addr` varchar(512) NOT NULL,
  `stor_phnn` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_profiles`
--

INSERT INTO `tb_profiles` (`stor_indx`, `stor_name`, `stor_addr`, `stor_phnn`) VALUES
(1, 'Indra Tailor', 'Jl. Nama Jalan No. 00 Kota Bandar Lampung', '0721-000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pymts`
--

DROP TABLE IF EXISTS `tb_pymts`;
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
-- Indexes for table `tb_cate`
--
ALTER TABLE `tb_cate`
  ADD PRIMARY KEY (`cate_indx`);

--
-- Indexes for table `tb_custs`
--
ALTER TABLE `tb_custs`
  ADD PRIMARY KEY (`cust_indx`);

--
-- Indexes for table `tb_detl_ordr`
--
ALTER TABLE `tb_detl_ordr`
  ADD PRIMARY KEY (`detl_indx`);

--
-- Indexes for table `tb_item_cate`
--
ALTER TABLE `tb_item_cate`
  ADD PRIMARY KEY (`item_cate_indx`),
  ADD KEY `cate_indx` (`cate_indx`),
  ADD KEY `item_indx` (`item_indx`);

--
-- Indexes for table `tb_items`
--
ALTER TABLE `tb_items`
  ADD PRIMARY KEY (`item_indx`);

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
-- AUTO_INCREMENT for table `tb_cate`
--
ALTER TABLE `tb_cate`
  MODIFY `cate_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_custs`
--
ALTER TABLE `tb_custs`
  MODIFY `cust_indx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_detl_ordr`
--
ALTER TABLE `tb_detl_ordr`
  MODIFY `detl_indx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_item_cate`
--
ALTER TABLE `tb_item_cate`
  MODIFY `item_cate_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_items`
--
ALTER TABLE `tb_items`
  MODIFY `item_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_profiles`
--
ALTER TABLE `tb_profiles`
  MODIFY `stor_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pymts`
--
ALTER TABLE `tb_pymts`
  MODIFY `__id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_item_cate`
--
ALTER TABLE `tb_item_cate`
  ADD CONSTRAINT `tb_item_cate_ibfk_1` FOREIGN KEY (`cate_indx`) REFERENCES `tb_cate` (`cate_indx`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_item_cate_ibfk_2` FOREIGN KEY (`item_indx`) REFERENCES `tb_items` (`item_indx`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
