-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 07:38 AM
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

--
-- Dumping data for table `tb_accrs`
--

INSERT INTO `tb_accrs` (`accr_nmbr`, `ordr_nmbr`, `accr_amnt`, `accr_stat`) VALUES
(2, 'AA000001', 500000, 0),
(3, 'AA000002', 500000, 0),
(4, 'AA000003', 2500000, 0),
(5, 'AA000004', 350000, 0),
(6, 'AA000005', 800000, 0),
(7, 'AA000006', 400000, 1),
(8, 'AA000007', 500000, 1),
(9, 'AA000008', 400000, 0),
(10, 'AA000009', 600000, 0),
(11, 'AA000010', 120000, 0),
(12, 'AA000011', 1000000, 0),
(13, 'AA000012', 500000, 0),
(14, 'AA000013', 300000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cate`
--

CREATE TABLE `tb_cate` (
  `cate_indx` int(11) NOT NULL,
  `cate_name` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_cate`
--

INSERT INTO `tb_cate` (`cate_indx`, `cate_name`) VALUES
(1, 'Kemeja'),
(2, 'Jas'),
(3, 'Celana'),
(4, 'Rok'),
(5, 'Rompi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_custs`
--

CREATE TABLE `tb_custs` (
  `cust_indx` int(11) NOT NULL,
  `cust_titl` tinyint(4) NOT NULL DEFAULT '1',
  `cust_name` varchar(64) NOT NULL,
  `cust_phnn` varchar(32) NOT NULL,
  `cust_addr` text,
  `cust_rgdt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_custs`
--

INSERT INTO `tb_custs` (`cust_indx`, `cust_titl`, `cust_name`, `cust_phnn`, `cust_addr`, `cust_rgdt`) VALUES
(1, 1, 'Rusly Paramon', '0721-269633', '', '2018-12-08 15:07:00'),
(2, 1, 'Hardi Paramon', '269633', '', '2018-12-08 15:07:00'),
(3, 1, 'Erik Paramon', '', '', '2018-12-08 15:07:00'),
(4, 1, 'Iwan Paramon', '', '', '2018-12-08 15:07:00'),
(5, 1, 'Ridwan', '', '', '2018-12-08 15:07:00'),
(6, 1, 'Abdul Sukur', '', '', '2018-12-08 15:07:00'),
(7, 1, 'fahrudin', '', '', '2018-12-08 15:07:00'),
(8, 1, 'Darul Kutni DPR Lamsel', '082185970000', '', '2018-12-08 15:07:00'),
(9, 1, 'Nurafifah DPR Lamsel', '', '', '2018-12-08 15:07:00'),
(10, 2, 'Farida Aryani DPR Lamsel', '', '', '2018-12-08 15:07:00'),
(11, 1, 'Malik Ibrahim DPR Lamsel', '', '', '2018-12-08 15:07:00'),
(12, 1, 'Sutan Agus DPR Lamsel', '', '', '2018-12-08 15:07:00'),
(13, 1, 'Achmad Johani DPR Lamsel', '', '', '2018-12-08 15:07:00'),
(14, 1, 'Lukman DPR Lamsel', '', '', '2018-12-08 15:07:00'),
(15, 1, 'Sukardi DPR Lamsel', '', '', '2018-12-08 15:07:00'),
(16, 1, 'Dr Saragih', '', '', '2018-12-08 15:07:00'),
(17, 1, 'Frando', '', '', '2018-12-08 15:07:00'),
(18, 1, 'Piter (Klg Dr Seragih)', '', '', '2018-12-08 15:07:00'),
(19, 1, 'N.Girsang (klg Dr saragih)', '', '', '2018-12-08 15:07:00'),
(20, 1, 'Roy (klg Dr Saragih)', '', '', '2018-12-08 15:07:00'),
(21, 1, 'umcum (sopir feri)', '', '', '2018-12-08 15:07:00'),
(22, 1, 'Hj M.alipir', '08127246332', '', '2018-12-08 15:07:00'),
(23, 1, 'Riyan / Hidayat Ismet', '', '', '2018-12-08 15:07:00'),
(24, 1, 'Abdul Hamid / Hidayat Ismet', '', '', '2018-12-08 15:07:00'),
(25, 1, 'Farosil Bupati Lambar', '085369086222', '', '2018-12-08 15:07:00'),
(26, 1, 'Irfan (yr. Farosil)', '', '', '2018-12-08 15:07:00'),
(27, 1, 'Saka (yr. Farosil)', '545412', '', '2018-12-08 15:07:00'),
(28, 1, 'Andri Cina', '08127203318', '', '2018-12-08 15:07:00'),
(29, 1, 'Nazarudin', '', '', '2018-12-08 15:07:00'),
(30, 1, 'Yanto', '082178686976', '', '2018-12-08 15:07:00'),
(31, 1, 'Usman', '081279074982', '', '2018-12-08 15:07:00'),
(32, 1, 'Gani Primadani/sonia textile', '', '', '2018-12-08 15:07:00'),
(33, 1, 'Rudi Akuan', '085279412455', '', '2018-12-08 15:07:00'),
(34, 1, 'Bachtiar Basri', '', '', '2018-12-08 15:07:00'),
(35, 1, 'Okta', '', '', '2018-12-08 15:07:00'),
(36, 1, 'Zainal Arifin Pesawaran', '081272466222', '', '2018-12-08 15:07:00'),
(37, 1, 'Eduard', '081272535467', '', '2018-12-08 15:07:00'),
(38, 1, 'Subandri', '082176355296', '', '2018-12-08 15:07:00'),
(39, 1, 'Iwan', '0811727007', '', '2018-12-08 15:07:00'),
(40, 1, 'Alvian', '081279369111', '', '2018-12-08 15:07:00'),
(41, 1, 'Syahlani', '082280565558', '', '2018-12-08 15:07:00'),
(42, 1, 'Pendi Polisi', '081272244474', '', '2018-12-08 15:07:00'),
(43, 1, 'Zam Zam', '082186455522', '', '2018-12-08 15:07:00'),
(44, 2, 'Aris Rayusman', '08127915132', '', '2018-12-08 15:07:00'),
(45, 2, 'Dicky (yr.', '', '', '2018-12-08 15:07:00'),
(46, 1, 'arsyad', '089620307874', '', '2018-12-08 15:07:00'),
(47, 1, 'Feri Buah', '0811722194', '', '2018-12-08 15:07:00'),
(48, 1, 'Noval (yr. feri buah)', '', '', '2018-12-08 15:07:00'),
(49, 1, 'M. Gastari (yr.feri buah)', '287411', '', '2018-12-08 15:07:00'),
(50, 1, 'Habib', '', '', '2018-12-08 15:07:00'),
(51, 1, 'Madani', '082175192863', '', '2018-12-08 15:07:00'),
(52, 1, 'H. M. Alipir', '124553', '', '2018-12-08 15:07:00'),
(53, 1, 'Nurhasan', '254535', '', '2018-12-08 15:07:00'),
(54, 1, 'Asaw', '', '', '2018-12-08 15:07:00'),
(55, 1, 'Abdurrahman DPR Lamsel', '081272883300', '', '2018-12-08 15:07:00'),
(56, 1, 'Andar Dano S', '08127917375', '', '2018-12-08 15:07:00'),
(57, 1, 'Beni', '0811727668', '', '2018-12-08 15:07:00'),
(58, 1, 'M.Akyas DPR Lamsel', '081316871971 / 082281191970', '', '2018-12-08 15:07:00'),
(59, 1, 'Hasan Metro', '085327797000', '', '2018-12-08 15:07:00'),
(60, 1, 'Dwi Indra', '', '', '2018-12-08 15:07:00'),
(61, 1, 'Maradona', '082186667704/1925/2152', '', '2018-12-08 15:07:00'),
(62, 1, 'Hartono', '', '', '2018-12-08 15:07:00'),
(63, 1, 'Idris', '', '', '2018-12-08 15:07:00'),
(64, 1, 'Hamin', '082231983271', '', '2018-12-08 15:07:00'),
(65, 1, 'Suyatno', '', '', '2018-12-08 15:07:00'),
(66, 1, 'kinloy paramount', '', '', '2018-12-08 15:07:00'),
(67, 1, 'iqbal fuad', '', '', '2018-12-08 15:07:00'),
(68, 1, 'suami ida', '', '', '2018-12-08 15:07:00'),
(69, 1, 'Feri wagub', '', '', '2018-12-08 15:07:00'),
(70, 1, 'Feabo (feri buah)', '', '', '2018-12-08 15:07:00'),
(71, 1, 'Sidik yr Alipir', '', '', '2018-12-08 15:07:00'),
(72, 1, 'Tia yr Madani', '', '', '2018-12-08 15:07:00'),
(73, 1, 'Afi Semen Padang', '', '', '2018-12-08 15:07:00'),
(74, 1, 'Zainal Abidin', '085269697596 (2180)', '', '2018-12-08 15:07:00'),
(75, 1, 'Joko Biro Umum', '081379790817/2175', '', '2018-12-08 15:07:00'),
(76, 1, 'roni', '', '', '2018-12-08 15:07:00'),
(77, 1, 'Syaifullah', '08127154447/2182', '', '2018-12-08 15:07:00'),
(78, 1, 'Madian Azhar', '', '', '2018-12-08 15:07:00'),
(79, 1, 'Suryadi BPN', '', '', '2018-12-08 15:07:00'),
(80, 1, 'Dina', '', '', '2018-12-08 15:07:00'),
(81, 1, 'Kusuma', '', '', '2018-12-08 15:07:00'),
(82, 1, 'Handoko', '081279721456/2155', '', '2018-12-08 15:07:00'),
(83, 1, 'jahri', '0811729745  /2213', '', '2018-12-08 15:07:00'),
(84, 1, 'Samsurizalari', '08127966444 /2217', '', '2018-12-08 15:07:00'),
(85, 1, 'Rio yr samsurizal', '', '', '2018-12-08 15:07:00'),
(86, 1, 'Iyal (sdr feri buah)', '081279559993 /2219', '', '2018-12-08 15:07:00'),
(87, 1, 'Aulia (sdr feri buah)', '', '', '2018-12-08 15:07:00'),
(88, 1, 'Ace (sdr feri buah)', '', '', '2018-12-08 15:07:00'),
(89, 1, 'Vio (sr feri buah)', '', '', '2018-12-08 15:07:00'),
(90, 1, 'Hendra kantor agama', '', '', '2018-12-08 15:07:00'),
(91, 1, 'Chiko C.H Bukko', '081375314728', '', '2018-12-08 15:07:00'),
(92, 1, 'Zulfuad', '08127917686', '', '2018-12-08 15:07:00'),
(93, 1, 'Mulyadi TBB', '081368286333', '', '2018-12-08 15:07:00'),
(94, 1, 'Robi TBB', '', '', '2018-12-08 15:07:00'),
(95, 1, 'Andi Irawan (TBB)', '085357946921/082177261022', '', '2018-12-08 15:07:00'),
(96, 1, 'Mirwan (TBB)', '', '', '2018-12-08 15:07:00'),
(97, 1, 'Mulyadi Salon', '', '', '2018-12-08 15:07:00'),
(98, 1, 'Koharudin ajudan PLT GB', '', '', '2018-12-08 15:07:00'),
(99, 1, 'Indra ajudan PLT GB', '081310660891', '', '2018-12-08 15:07:00'),
(100, 1, 'Yusuf Kohar', '081316340111', '', '2018-12-08 15:07:00'),
(101, 1, 'Heri (bu ratna)', '', '', '2018-12-08 15:07:00'),
(102, 1, 'Ratna DPR Lamsel', '081279949005 / 2230', '', '2018-12-08 15:07:00'),
(103, 1, 'Ata', '', '', '2018-12-08 15:07:00'),
(104, 1, 'Amar', '', '', '2018-12-08 15:07:00'),
(105, 1, 'Alano', '', '', '2018-12-08 15:07:00'),
(106, 1, 'Vina', '085279241897', '', '2018-12-08 15:07:00'),
(107, 1, 'Puncak (suami vina)', '', '', '2018-12-08 15:07:00'),
(108, 2, 'Pida Achmad', '087780212611', '', '2018-12-08 15:07:00'),
(109, 1, 'Putu', '081322141972', '', '2018-12-08 15:07:00'),
(110, 1, 'Eki (yr sugiharto)', '08117233702 / 2242', '', '2018-12-08 15:07:00'),
(111, 1, 'Fauzan', '081271416339 / 2237', '', '2018-12-08 15:07:00'),
(112, 1, 'yr fauzan', '', '', '2018-12-08 15:07:00'),
(113, 1, 'Reza ramadani arifin', '', '', '2018-12-08 15:07:00'),
(114, 1, 'Kadafi', '', '', '2018-12-08 15:07:00'),
(115, 1, 'Ginting', '', '', '2018-12-08 15:07:00'),
(116, 1, 'Hafiz yr Aris Rayusman', '', '', '2018-12-08 15:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_items`
--

CREATE TABLE `tb_items` (
  `item_indx` int(11) NOT NULL,
  `item_name` varchar(32) NOT NULL,
  `item_pict` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_items`
--

INSERT INTO `tb_items` (`item_indx`, `item_name`, `item_pict`) VALUES
(1, 'Batik', 'Batik.png'),
(2, 'Lengan Panjang', 'LenganPanjang.png'),
(3, 'Lengan Pendek', 'LenganPendek.png'),
(4, 'Koko', 'Koko.png'),
(5, 'Panjang', 'Panjang.png'),
(6, 'Rok', 'Rok.png'),
(7, 'Rompi', 'Rompi.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_cate`
--

CREATE TABLE `tb_item_cate` (
  `item_cate_indx` int(11) NOT NULL,
  `item_indx` int(11) NOT NULL,
  `cate_indx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_item_cate`
--

INSERT INTO `tb_item_cate` (`item_cate_indx`, `item_indx`, `cate_indx`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_measures`
--

CREATE TABLE `tb_measures` (
  `mssr_indx` int(11) NOT NULL,
  `cust_indx` int(11) NOT NULL,
  `cate_indx` int(11) NOT NULL,
  `mssr_size` varchar(64) NOT NULL,
  `mssr_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_measures`
--

INSERT INTO `tb_measures` (`mssr_indx`, `cust_indx`, `cate_indx`, `mssr_size`, `mssr_date`) VALUES
(1, 1, 1, '71-46-59-21.5-17-0-25-17.5-21.5-29-28.5-40', '2018-12-08'),
(2, 2, 1, '72-47.5-0-0-0-0-25-17.5-22.5-29-27.5-41', '2018-12-08'),
(3, 3, 1, '70-46-0--0-0-23.5-17-21-29-27.5-40', '2018-12-08'),
(4, 4, 1, '86-55-0-0-0-0-30-22-26-37-36-46', '2018-12-08'),
(5, 5, 1, '73-48-57-23.5-18-0-0-0-22.5-32-30.5-45', '2018-12-08'),
(6, 6, 1, '69-45-55-20.5-17-0-0-0-21-29-27-39', '2018-12-08'),
(7, 7, 1, '72-47-56-22.5-17.5-0-0-0-22-30-29-42', '2018-12-08'),
(8, 8, 1, '74-47-58-23.5-18-0-26-19-23-33-32.5-43', '2018-12-08'),
(9, 11, 1, '73-48-58-23.5-18.5-0-0-0-23-31.5-30.5-45', '2018-12-08'),
(10, 13, 1, '69-48-0-0-0-0-25-19-23-30.5-29-41', '2018-12-08'),
(11, 14, 1, '69-46-57-21.5-17-0-26-19-21-29.5-28-41', '2018-12-08'),
(12, 15, 1, '74-51-64-25.5-18-0-0-0-24-34-32.5-45', '2018-12-08'),
(13, 16, 1, '72-46.5-0-0-0-0-25-17.5-21.5-30-28.5-41', '2018-12-08'),
(14, 17, 1, '75-49.5-59-22-17-0-0-0-23-32.5-31.5-43', '2018-12-08'),
(15, 18, 1, '73-48.5-57-21.5-14-0-26-18.5-22.5-32-30.5-41', '2018-12-08'),
(16, 19, 1, '76-54-58-25-20-0-26-18-24-31.5-31.5-41', '2018-12-08'),
(17, 21, 1, '71-48-58-21.5-17.5-0-0-0-22-29.5-28-42', '2018-12-08'),
(18, 22, 1, '72-45.5-60-21-17-0-0-0-21.5-29.5-28-40', '2018-12-08'),
(19, 23, 1, '71-46.5-59-22.5-18-0-0-0-22-29-28-39', '2018-12-08'),
(20, 24, 1, '72-47-57-22-17-0-0-0-21.5-29.5-28-42', '2018-12-08'),
(21, 25, 1, '72-46-58-20.5-17-0-0-0-21.5-28-26-40', '2018-12-08'),
(22, 26, 1, '67-44-56-18.5-15.5-0-0-0-20-26.5-25-37', '2018-12-08'),
(23, 27, 1, '51-34-44-15-11-0-0-0-17-24-23-34', '2018-12-08'),
(24, 28, 1, '72-48-62-21-17-0-26-18.5-22-29-27-41', '2018-12-08'),
(25, 30, 1, '68-48-0-0-0-0-23.5-18-22.5-29-28.5-40', '2018-12-08'),
(26, 31, 1, '68-43-57-19-16.5-0-0-0-20-27.5-25.5-38', '2018-12-08'),
(27, 32, 1, '67-46-0-0-0-0-23-17.5-21-28.5-26.5-39', '2018-12-08'),
(28, 33, 1, '77-51-62-23-18.5-0-26-20-23-33.5-33-44', '2018-12-08'),
(29, 34, 1, '76-47.5-58-22-17.5-0-0-0-22-31.5-30-44', '2018-12-08'),
(30, 35, 1, '80-54-0-26.5-0-0-30-22.5-26-38.5-38.5-45', '2018-12-08'),
(31, 36, 1, '73-45-57-20-16-0-24-17.5-21-29.5-27-40', '2018-12-08'),
(32, 37, 1, '74-51-58-23.5-18-0-25-20-23.5-33.5-32.5-42', '2018-12-08'),
(33, 38, 1, '69-45-51-20-0-16.5-25-17.5-21.5-28-26-40', '2018-12-08'),
(34, 39, 1, '81-60-0-0-0-0-27-21.5-27-39-38-50', '2018-12-08'),
(35, 40, 1, '71-46-54-20-0-14.5-0-0-21-28.5-26-0', '2018-12-08'),
(36, 41, 1, '72-46-57-21.5-17-0-0-0-21-30-28-39', '2018-12-08'),
(37, 42, 1, '76-480-60-22.5-17.5-0-27-19.5-22-33-34-43', '2018-12-08'),
(38, 43, 1, '71-46-58-21-17-0-0-0-21-28-26-38', '2018-12-08'),
(39, 44, 1, '73-46-57-22-18-0-24-18-22-30-28-41', '2018-12-08'),
(40, 45, 1, '73-47-0-0-0-0-26-18-21.5-28.5-26.5-40', '2018-12-08'),
(41, 46, 1, '71-48-59-21.5-16.5-0-24-19-22-30.5-29-41', '2018-12-08'),
(42, 47, 1, '73-47-58-21-17-0-0-0-21.5-32.5-32-42', '2018-12-08'),
(43, 48, 1, '73-46-62-18-15.5-0-0-0-21-27-24.5-38', '2018-12-08'),
(44, 51, 1, '73.72-47.46-60-21.5-17-0-25-17.5-22.21.5-30.29.5-29.28.5-42', '2018-12-08'),
(45, 52, 1, '72-45.5-60-21-17-0-0-0-21.5-29.5-28-40', '2018-12-08'),
(46, 53, 1, '73-46-0-0-0-0-25-18-22-29.5-27.5-40', '2018-12-08'),
(47, 55, 1, '71-47.5-56-20.5-16.5-0-20-16-22-30-29-42', '2018-12-08'),
(48, 56, 1, '75-50-61-23.5-18-0-0-0-23.5-33-32-43', '2018-12-08'),
(49, 57, 1, '76-51-0-0-0-0-26-19-23.5-32-30-45', '2018-12-08'),
(50, 58, 1, '73-49-59-23-18.5-0-26-19-23-32.5-31.5-46', '2018-12-08'),
(51, 59, 1, '75-49-60-23.5-19-0-25-19.5-24-33-31.5-46', '2018-12-08'),
(52, 60, 1, '71-46-0-0-0-0-24-16.5-21-27-25-39', '2018-12-08'),
(53, 61, 1, '77-49-62-26-20-16-24-22-24-36-37.5-45', '2018-12-08'),
(54, 62, 1, '69-42-59-19-16-0-24-16.5-20-27-26.5-38', '2018-12-08'),
(55, 63, 1, '73-48.5-60-21.5-17-0-0-0-22-30-28-40', '2018-12-08'),
(56, 65, 1, '76-51-58-22.5-18-0-26-24.20-24-31.5-31-44', '2018-12-08'),
(57, 67, 1, '74-52-0-0-0-0-26-21-25.5-33-32-43', '2018-12-08'),
(58, 69, 1, '71-48-58-20.5-16.5-0-25-17-21-28.5-26.5-40', '2018-12-08'),
(59, 70, 1, '74-48-62-22-17.5-0-0-0-22.5-30-28.5-41', '2018-12-08'),
(60, 71, 1, '74-48-63-19.5-16.5-0-0-0-21-28-26-40', '2018-12-08'),
(61, 72, 1, '66-38-51-19-12-0--0-34-95-82-100', '2018-12-08'),
(62, 74, 1, '68-45-56-20-17-0-0-0-21-27-26-40', '2018-12-08'),
(63, 75, 1, '71-45-62-21-16.5-0-0-0-21-29-27-40', '2018-12-08'),
(64, 76, 1, '72-47-0-0-0-0-25-18-21.5-29.5-27.5-40', '2018-12-08'),
(65, 79, 1, '74-48-60-21.5-17.5-0-0-0-22.5-30-28-41', '2018-12-08'),
(66, 81, 1, '82-59-64-25.5-20-0-30-23-27-42.5-41.43-54', '2018-12-08'),
(67, 82, 1, '74-50-0-0-0-0-25-18-22-29.5-27.5-43', '2018-12-08'),
(68, 83, 1, '70-48-56-22-17.5-0-25-18.5-22-30-29-41', '2018-12-08'),
(69, 84, 1, '76-49-63-23-17-0-0-0-22-31-29.5.30-41', '2018-12-08'),
(70, 85, 1, '72-46-62-22-17-0-24-17.5-21-29-27.5-39', '2018-12-08'),
(71, 86, 1, '74-53-58.60-24-19-16-0-0-25.5-33-32.5-42', '2018-12-08'),
(72, 87, 1, '76-47-60.62-22-17.5-15-0-0-22-29-28.5-40', '2018-12-08'),
(73, 88, 1, '75-53-63-23.5-18-16-0-0-23-31-30-42', '2018-12-08'),
(74, 89, 1, '65-45-58-20.5-16.5-0-0-0-21-28.5-27.5-39', '2018-12-08'),
(75, 90, 1, '73-51-59-23-18-0-25-19-24.5-32.5-31-42', '2018-12-08'),
(76, 92, 1, '76-49-0-0-0-0-27-19.5-22.5-32-31-42', '2018-12-08'),
(77, 93, 1, '72-48-60-21.5-17-0-25-18.5-22.5-31-30-42', '2018-12-08'),
(78, 94, 1, '67-45-57-19.5-16-0-24-16.5-21-27.5-25.5-38', '2018-12-08'),
(79, 95, 1, '72-47-61-21-17-0-25-17.5-21.5-29-27.5-40', '2018-12-08'),
(80, 96, 1, '72-46-59-20.5-16.5-0-0-0-21-27.5-25.5-38', '2018-12-08'),
(81, 98, 1, '75-49-63-22.5-18.5-0--0-22.5-30-28.5-41', '2018-12-08'),
(82, 99, 1, '73-49-60-22-17.5--0-0-22.5-30-27.5-42', '2018-12-08'),
(83, 100, 1, '80-50-64-23.5-18.5-0-28-21-23-34.5-34.5-44', '2018-12-08'),
(84, 101, 1, '75-47-0-0-0-0-28-18.5-22.5-30.5-29.5-42', '2018-12-08'),
(85, 102, 1, '67-39-55-20-0-13-0-0-35-29.5.25.5-27.23-30.26', '2018-12-08'),
(86, 103, 1, '55-39-0-0-0-0-19.5-15.5-0-25-24-34', '2018-12-08'),
(87, 104, 1, '47-32-0-0-0-0-17-12.5-0-20-19-31', '2018-12-08'),
(88, 105, 1, '55-35-0-0-0-0-19-14-17-23.5-22.5-34', '2018-12-08'),
(89, 106, 1, '65-41-55-19-12.5-0-0-0-34-97-88.107-38', '2018-12-08'),
(90, 107, 1, '70-47-0-0-0-0-24-17-21-29.5-27-40', '2018-12-08'),
(91, 108, 1, '60-37-53-17.5-0-12-0-0-33-87-71-91', '2018-12-08'),
(92, 109, 1, '73-49-62-22-18-0-0-0-22.5-30-28-44', '2018-12-08'),
(93, 110, 1, '79-52-66-25.5-20-0-0-0-24-34-32-45', '2018-12-08'),
(94, 113, 1, '78-50-63-23.5-18.5-0-0-0-23.5-33.5-32.5-43', '2018-12-08'),
(95, 114, 1, '75-48-63-22-17.5-0-0-0-21.5-30.5-30-42', '2018-12-08'),
(96, 115, 1, '75-52-60-23.5-18.5-0-0-0-24.5-33.5-32.5-46', '2018-12-08'),
(97, 116, 1, '73-47-0-0-0-0-24-18.5-21-28-26-40', '2018-12-08'),
(98, 8, 2, '74-46-59-22.5-14.5-0-0-43-110-112-118-43', '2018-12-08'),
(99, 9, 2, '64-39-53-18-12-0-0-33-92-80-94-0', '2018-12-08'),
(100, 10, 2, '74-41-58-19-12-0-0-36-102-95-107-0', '2018-12-08'),
(101, 12, 2, '71-45-57-19.5-14-0-0-38-92-90-94-40', '2018-12-08'),
(102, 13, 2, '71-49-58-23-15-0-0-42-102-99-109-42', '2018-12-08'),
(103, 16, 2, '71-45-57-20-14-0-0-40-95-90-100-0', '2018-12-08'),
(104, 17, 2, '75-51-60-22-14-0-0-42-107-104-115-0', '2018-12-08'),
(105, 18, 2, '72-50-57-21.5-14-0-0-39-101-99-108-0', '2018-12-08'),
(106, 21, 2, '73-48-58-21-14-0-0-38-99-95-105-0', '2018-12-08'),
(107, 25, 2, '73-46.5-59-20.5-14.5-27-17.5-38-92-84-102-40', '2018-12-08'),
(108, 29, 2, '75-50-62-22.5-14.5-27-19.5-41-104-99-110-44', '2018-12-08'),
(109, 34, 2, '76-48-59-22-14.5-28-19-40-103-103-112-44', '2018-12-08'),
(110, 37, 2, '77-52-60-23.5-15-0-0-43-112-105-115-0', '2018-12-08'),
(111, 39, 2, '88-59-61-25.5-16-0-0-50-123-130-134-0', '2018-12-08'),
(112, 43, 2, '72-46-57-21-14-0-0-38-94-86-103-0', '2018-12-08'),
(113, 47, 2, '74-48-57-21-14-0-0-42-101-103-110-0', '2018-12-08'),
(114, 48, 2, '73-47-62-19-13-0-0-37-82-72-96-39', '2018-12-08'),
(115, 49, 2, '72-47-61-19.5-13.5-0-0-39-99-87-102-40', '2018-12-08'),
(116, 50, 2, '57-36-45-17-12-0-0-30-76-78-87-0', '2018-12-08'),
(117, 56, 2, '78-53-62-24-15.5-0-0-43-112-114-121-0', '2018-12-08'),
(118, 61, 2, '83-53-61-25-16-0-0-45-119-131-134-0', '2018-12-08'),
(119, 64, 2, '68-42-52-19-14-0-0-36-91-90-101-0', '2018-12-08'),
(120, 70, 2, '75-48-63-21.5-14.5-0-0-40-100-94-112-40', '2018-12-08'),
(121, 74, 2, '70-45.5-57-19.5-14-0-0-34-92-88-98-0', '2018-12-08'),
(122, 77, 2, '65-44-58-18.5-13.5-0-0-34-78-69-91-0', '2018-12-08'),
(123, 78, 2, '66-44-57-18.5-13.5-0-0-34-77-68-92-0', '2018-12-08'),
(124, 90, 2, '75-50-60-22-14.5-0-0-41.43-59.5.43-56-61.5-0', '2018-12-08'),
(125, 91, 2, '69-46-59-19-13.5-0-0-35-88-78-97-0', '2018-12-08'),
(126, 93, 2, '69-49-59-22-14.5-0-0-42-111-109-113-42', '2018-12-08'),
(127, 95, 2, '71-47-61-21-14-0-0-40-98-96-106-0', '2018-12-08'),
(128, 100, 2, '81-50-62-23.5-15-29-20-43-116-125-126-44', '2018-12-08'),
(129, 102, 2, '67-39-55-20-13-0-0-35-29.5.25.5-27.23-30.26-0', '2018-12-08'),
(130, 106, 2, '68-41-55-19-12.5-0-0-34-97-88-107-38', '2018-12-08'),
(131, 108, 2, '60-37-53-17.5-12-0-0-33-87-71-91-37', '2018-12-08'),
(132, 1, 3, '100-85.5-67-107-34.5-27.5-24', '2018-12-08'),
(133, 5, 3, '95-98-73-114-36-38-22', '2018-12-08'),
(134, 8, 3, '95-98-73-113-36-28.5-24', '2018-12-08'),
(135, 10, 3, '97-89-106-70-33-24-20', '2018-12-08'),
(136, 12, 3, '98-86-93-68-31.5-25-20', '2018-12-08'),
(137, 13, 3, '90-92-112-71-34.5-26-21', '2018-12-08'),
(138, 16, 3, '92-85-70-103-34-28-23', '2018-12-08'),
(139, 17, 3, '98-99.5-74-118-37.5-29-23', '2018-12-08'),
(140, 18, 3, '93-94-69-107-34-26.5-22', '2018-12-08'),
(141, 20, 3, '101-98-116-73-36.5-28-22', '2018-12-08'),
(142, 21, 3, '95-92-106-68-33.5-26-20', '2018-12-08'),
(143, 22, 3, '100-84-68-110-35-27-21', '2018-12-08'),
(144, 25, 3, '98-83-66-105-32.5-24-20', '2018-12-08'),
(145, 26, 3, '94-69-63-91-28.5-21-18', '2018-12-08'),
(146, 27, 3, '77-62-46-74-24-19-15', '2018-12-08'),
(147, 29, 3, '100-95-73-110-35-27-21', '2018-12-08'),
(148, 32, 3, '85-90-65-108-34-23-19', '2018-12-08'),
(149, 34, 3, '102-98.5-76-113-36.5-29-23', '2018-12-08'),
(150, 37, 3, '94-103-73-115-36.5-26-20', '2018-12-08'),
(151, 38, 3, '95-88-66-106-33-23-19', '2018-12-08'),
(152, 39, 3, '106-129-85-133-41-31-23', '2018-12-08'),
(153, 40, 3, '93-86-68-102-33-24-19', '2018-12-08'),
(154, 43, 3, '96-81-72-106-34-26.5-23', '2018-12-08'),
(155, 44, 3, '94-93-70-106-34-25-20', '2018-12-08'),
(156, 45, 3, '97-86-68-104-32.5-25-20', '2018-12-08'),
(157, 46, 3, '91-95.5-66-113-36-25-20', '2018-12-08'),
(158, 47, 3, '94-96-71-106-33.5-24-20', '2018-12-08'),
(159, 48, 3, '102-79-65-95-29.5-23-19', '2018-12-08'),
(160, 49, 3, '98-86-68-104-33-24-19', '2018-12-08'),
(161, 50, 3, '72-77-58-89-28.5-20-15', '2018-12-08'),
(162, 51, 3, '103-94-73-109-35-27-20', '2018-12-08'),
(163, 52, 3, '100-84-68-110-35-27-21', '2018-12-08'),
(164, 53, 3, '96-91-68-106-33.5-25-20', '2018-12-08'),
(165, 54, 3, '92-85-62-98-30.5-22-20', '2018-12-08'),
(166, 55, 3, '96-96-71-105-33.5-26.5-22', '2018-12-08'),
(167, 56, 3, '103-106-77-119-38-29-23', '2018-12-08'),
(168, 60, 3, '96-78-66-99-31.5-22-20', '2018-12-08'),
(169, 61, 3, '95-114-74-133-42-31-24', '2018-12-08'),
(170, 63, 3, '102-83.5-73-109-35-27-20', '2018-12-08'),
(171, 64, 3, '93-85-74-102-33.5-26-21', '2018-12-08'),
(172, 65, 3, '98-100-73-115-36.5-27.5-22', '2018-12-08'),
(173, 66, 3, '99-94-73-118-37.5-28.5-25', '2018-12-08'),
(174, 68, 3, '99-89-69-105-34-27-21', '2018-12-08'),
(175, 70, 3, '100-88-72-108-34-24-20', '2018-12-08'),
(176, 73, 3, '93-91-70-105-34-27-22', '2018-12-08'),
(177, 74, 3, '89-87-64-102-30.5-23-19', '2018-12-08'),
(178, 75, 3, '100-85-63-102-32-24-22', '2018-12-08'),
(179, 77, 3, '92-73-59-89-28.5-20-16', '2018-12-08'),
(180, 78, 3, '88-72-59-88-28.5-20-16', '2018-12-08'),
(181, 80, 3, '96-94-68-115-34-22-18', '2018-12-08'),
(182, 81, 3, '106-132-86.33-148-48-34-24', '2018-12-08'),
(183, 83, 3, '92-89-67-104-33.5-26-20', '2018-12-08'),
(184, 86, 3, '100-101-74-119-38-30-23', '2018-12-08'),
(185, 87, 3, '104-81-69-107-36-26-22', '2018-12-08'),
(186, 88, 3, '105-87.5-66-102-33-22.5-20', '2018-12-08'),
(187, 90, 3, '98-100-74-120-38-28.5-22.5', '2018-12-08'),
(188, 91, 3, '95-77-62-97-29.5-21-18', '2018-12-08'),
(189, 92, 3, '103-101-78-117-38-29-23', '2018-12-08'),
(190, 95, 3, '100-92-70-106-33.5-24-20', '2018-12-08'),
(191, 97, 3, '101-86-77-110-36-30-21', '2018-12-08'),
(192, 98, 3, '104-92-112-71-35-27-21', '2018-12-08'),
(193, 99, 3, '101-89-72-107-34-26.5-22', '2018-12-08'),
(194, 100, 3, '101-110-81-120-39-29-22', '2018-12-08'),
(195, 101, 3, '102-91-73-108-34-28-23', '2018-12-08'),
(196, 106, 3, '94-85-68-103-32-20-17', '2018-12-08'),
(197, 108, 3, '100-79-65-100-32-21-22', '2018-12-08'),
(198, 111, 3, '99-94-73-116-36-27-22', '2018-12-08'),
(199, 112, 3, '88-79-63-92-28.5-20-16', '2018-12-08'),
(200, 113, 3, '100-105-118-74-36.5-29-22', '2018-12-08'),
(201, 115, 3, '105-106-84.32.5-130-42-32-23', '2018-12-08'),
(202, 9, 4, '93-74-92', '2018-12-08'),
(203, 10, 4, '97-90-105', '2018-12-08'),
(204, 65, 4, '33-32-0', '2018-12-08'),
(205, 72, 4, '88-79-102', '2018-12-08'),
(206, 102, 4, '93-91-104', '2018-12-08'),
(207, 17, 5, '65-107-104', '2018-12-08'),
(208, 70, 5, '60-100-94', '2018-12-08'),
(209, 77, 5, '57-78-69', '2018-12-08'),
(210, 78, 5, '56-77-68', '2018-12-08'),
(211, 90, 5, '62-59.5.43-56', '2018-12-08');

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

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`ordr_nmbr`, `trax_date`, `ordr_date`, `ordr_fndt`, `ordr_detl`, `cust_indx`) VALUES
('AA000001', '2018-12-04 12:06:19', '2018-12-04', '2018-12-18', '', 3),
('AA000002', '2018-12-04 12:11:19', '2018-12-04', '2018-12-18', '', 6),
('AA000003', '2018-12-04 12:15:23', '2018-12-04', '2018-12-18', '', 14),
('AA000004', '2018-12-04 12:26:35', '2018-12-04', '2018-12-18', '', 2),
('AA000005', '2018-12-04 12:49:36', '2018-12-04', '2018-12-18', 'This is test comment', 14),
('AA000006', '2018-12-04 14:21:02', '2018-12-04', '2018-12-18', '', 8),
('AA000007', '2018-12-04 14:23:27', '2018-12-04', '2018-12-18', '', 14),
('AA000008', '2018-12-04 14:24:36', '2018-12-04', '2018-12-18', '', 7),
('AA000009', '2018-12-04 14:28:44', '2018-12-04', '2018-12-18', '', 6),
('AA000010', '2018-12-05 09:49:38', '2018-12-05', '2018-12-19', '', 7),
('AA000011', '2018-12-05 11:30:13', '2018-12-05', '2018-12-19', '', 6),
('AA000012', '2018-12-06 13:15:15', '2018-12-06', '2018-12-20', '', 13),
('AA000013', '2018-12-06 13:16:53', '2018-12-06', '2018-12-20', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `detl_indx` int(11) NOT NULL,
  `ordr_nmbr` varchar(8) NOT NULL,
  `item_qtty` int(11) NOT NULL,
  `caty_indx` int(11) NOT NULL,
  `item_pric` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`detl_indx`, `ordr_nmbr`, `item_qtty`, `caty_indx`, `item_pric`) VALUES
(2, 'AA000001', 1, 1, 500000),
(3, 'AA000002', 1, 2, 500000),
(4, 'AA000003', 2, 4, 1000000),
(5, 'AA000003', 1, 1, 500000),
(6, 'AA000004', 1, 2, 150000),
(7, 'AA000004', 2, 3, 100000),
(8, 'AA000005', 1, 2, 800000),
(9, 'AA000006', 1, 1, 400000),
(10, 'AA000007', 1, 2, 500000),
(11, 'AA000008', 1, 2, 400000),
(12, 'AA000009', 1, 3, 600000),
(13, 'AA000010', 1, 3, 120000),
(14, 'AA000011', 1, 1, 1000000),
(15, 'AA000012', 1, 2, 500000),
(16, 'AA000013', 1, 3, 300000);

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

--
-- Dumping data for table `tb_profiles`
--

INSERT INTO `tb_profiles` (`stor_indx`, `stor_name`, `stor_addr`, `stor_phnn`) VALUES
(1, 'Indra Tailor', 'Jl. Jend. Suprapto no.121 Bandar Lampung', '0721-5600045');

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
-- Dumping data for table `tb_pymts`
--

INSERT INTO `tb_pymts` (`__id`, `accr_nmbr`, `pymt_date`, `pymt_amnt`) VALUES
(1, 5, '2018-12-04 00:00:00', 150000),
(2, 6, '2018-12-04 00:00:00', 500000),
(3, 7, '2018-12-04 00:00:00', 400000),
(4, 8, '2018-12-04 00:00:00', 500000),
(5, 10, '2018-12-04 00:00:00', 300000),
(6, 11, '2018-12-05 09:49:38', 100000),
(7, 13, '2018-12-06 13:15:15', 400000),
(8, 14, '2018-12-06 13:16:53', 300000),
(9, 10, '2018-12-10 14:11:10', 100000),
(10, 10, '2018-12-10 14:30:05', 100000),
(11, 10, '2018-12-10 14:35:15', 50000),
(12, 10, '2018-12-10 14:47:52', 25000),
(13, 10, '2018-12-10 14:51:03', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_indx` int(11) NOT NULL,
  `user_name` varchar(16) NOT NULL,
  `user_pass` varchar(32) NOT NULL,
  `user_ctrl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_indx`, `user_name`, `user_pass`, `user_ctrl`) VALUES
(1, 'rottenapple', 'e571670135caa28408c7d6e7abe02e51', 0),
(2, 'indra', '25c9de4c3eecd5e9ae93374a96b2257c', 1);

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
-- Indexes for table `tb_items`
--
ALTER TABLE `tb_items`
  ADD PRIMARY KEY (`item_indx`);

--
-- Indexes for table `tb_item_cate`
--
ALTER TABLE `tb_item_cate`
  ADD PRIMARY KEY (`item_cate_indx`),
  ADD KEY `cate_indx` (`cate_indx`),
  ADD KEY `item_indx` (`item_indx`);

--
-- Indexes for table `tb_measures`
--
ALTER TABLE `tb_measures`
  ADD PRIMARY KEY (`mssr_indx`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`ordr_nmbr`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`detl_indx`);

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
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_indx`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_accrs`
--
ALTER TABLE `tb_accrs`
  MODIFY `accr_nmbr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_cate`
--
ALTER TABLE `tb_cate`
  MODIFY `cate_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_custs`
--
ALTER TABLE `tb_custs`
  MODIFY `cust_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tb_items`
--
ALTER TABLE `tb_items`
  MODIFY `item_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_item_cate`
--
ALTER TABLE `tb_item_cate`
  MODIFY `item_cate_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_measures`
--
ALTER TABLE `tb_measures`
  MODIFY `mssr_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  MODIFY `detl_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_profiles`
--
ALTER TABLE `tb_profiles`
  MODIFY `stor_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pymts`
--
ALTER TABLE `tb_pymts`
  MODIFY `__id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_item_cate`
--
ALTER TABLE `tb_item_cate`
  ADD CONSTRAINT `tb_item_cate_ibfk_1` FOREIGN KEY (`cate_indx`) REFERENCES `tb_cate` (`cate_indx`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_item_cate_ibfk_2` FOREIGN KEY (`item_indx`) REFERENCES `tb_items` (`item_indx`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
