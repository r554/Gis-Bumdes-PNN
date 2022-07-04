-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 09:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot_pengukuran_udara`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai_sensor`
--

CREATE TABLE `nilai_sensor` (
  `id_nilai` int(11) NOT NULL,
  `nilai_co` int(5) DEFAULT NULL,
  `nilai_no` varchar(5) DEFAULT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_sensor`
--

INSERT INTO `nilai_sensor` (`id_nilai`, `nilai_co`, `nilai_no`, `tanggal_input`) VALUES
(1, 30, '43', '2022-05-02 15:21:47'),
(2, 39, '22', '2022-05-02 15:21:47'),
(3, 42, '65', '2022-05-03 08:08:33'),
(4, 90, '32', '2022-05-03 08:08:33'),
(5, 21, '27', '2022-05-03 08:08:53'),
(6, 31, '20', '2022-05-03 08:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `telp_admin` varchar(18) NOT NULL,
  `alamat_admin` text NOT NULL,
  `email_admin` varchar(35) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `telp_admin`, `alamat_admin`, `email_admin`, `username`, `password`) VALUES
(1, 'Admin', '085888999000', 'Jl Bandara bwi 12', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_fuzzy`
--

CREATE TABLE `tbl_hasil_fuzzy` (
  `id_hasil` int(11) NOT NULL,
  `rata_nilai_co` varchar(25) NOT NULL,
  `rata_nilai_no` varchar(25) NOT NULL,
  `hasil_fuzzy` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hasil_fuzzy`
--

INSERT INTO `tbl_hasil_fuzzy` (`id_hasil`, `rata_nilai_co`, `rata_nilai_no`, `hasil_fuzzy`) VALUES
(1, '142', '79', '44'),
(2, '142', '79', '44'),
(3, '142', '79', '44'),
(4, '142', '79', '44'),
(5, '142', '79', '44'),
(6, '142', '79', '44'),
(7, '47.33', '26.33', '41.3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(40) NOT NULL,
  `himpunan1` varchar(30) NOT NULL,
  `himpunan2` varchar(30) NOT NULL,
  `himpunan3` varchar(30) NOT NULL,
  `himpunan4` varchar(30) NOT NULL,
  `himpunan5` varchar(30) NOT NULL,
  `batas_rendah` varchar(11) NOT NULL,
  `batas_sedang` varchar(11) NOT NULL,
  `batas_tinggi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `nama_kriteria`, `himpunan1`, `himpunan2`, `himpunan3`, `himpunan4`, `himpunan5`, `batas_rendah`, `batas_sedang`, `batas_tinggi`) VALUES
(1, 'co', 'baik', 'sedang', 'tidak_sehat', 'sangat_tidak_sehat', 'berbahaya', '0', '189', '378'),
(2, 'no', 'baik', 'sedang', 'tidak_sehat', 'sangat_tidak_sehat', 'berbahaya', '0', '1.6', '3.2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_derajat`
--

CREATE TABLE `tbl_nilai_derajat` (
  `id_nilai_derajat` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `co_baik` float NOT NULL,
  `co_sedang` float NOT NULL,
  `co_tidak_sehat` float NOT NULL,
  `co_sangat_tidak_sehat` float NOT NULL,
  `co_berbahaya` float NOT NULL,
  `no_baik` float NOT NULL,
  `no_sedang` float NOT NULL,
  `no_tidak_sehat` float NOT NULL,
  `no_sangat_tidak_sehat` float NOT NULL,
  `no_berbahaya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilai_derajat`
--

INSERT INTO `tbl_nilai_derajat` (`id_nilai_derajat`, `id_admin`, `co_baik`, `co_sedang`, `co_tidak_sehat`, `co_sangat_tidak_sehat`, `co_berbahaya`, `no_baik`, `no_sedang`, `no_tidak_sehat`, `no_sangat_tidak_sehat`, `no_berbahaya`) VALUES
(7, 1, 0, 0, 0.2, 0.8, 0, 0, 0, 0, 0, 1),
(8, 1, 0, 0, 0.2, 0.8, 0, 0, 0, 0, 0, 1),
(9, 1, 0, 0, 0.2, 0.8, 0, 0, 0, 0, 0, 1),
(10, 1, 0, 0, 0.2, 0.8, 0, 0, 0, 0, 0, 1),
(11, 1, 0, 0, 0.2, 0.8, 0, 0, 0, 0, 0, 1),
(12, 1, 0, 0, 0.2, 0.8, 0, 0, 0, 0, 0, 1),
(13, 1, 0, 0, 0.2, 0.8, 0, 0, 0, 0, 0, 1),
(14, 1, 0.13, 0.87, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_rule`
--

CREATE TABLE `tbl_nilai_rule` (
  `id_nilai_rule` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `rule_1` float NOT NULL,
  `rule_2` float NOT NULL,
  `rule_3` float NOT NULL,
  `rule_4` float NOT NULL,
  `rule_5` float NOT NULL,
  `rule_6` float NOT NULL,
  `rule_7` float NOT NULL,
  `rule_8` float NOT NULL,
  `rule_9` float NOT NULL,
  `rule_10` float NOT NULL,
  `rule_11` float NOT NULL,
  `rule_12` float NOT NULL,
  `rule_13` float NOT NULL,
  `rule_14` float NOT NULL,
  `rule_15` float NOT NULL,
  `rule_16` float NOT NULL,
  `rule_17` float NOT NULL,
  `rule_18` float NOT NULL,
  `rule_19` float NOT NULL,
  `rule_20` float NOT NULL,
  `rule_21` float NOT NULL,
  `rule_22` float NOT NULL,
  `rule_23` float NOT NULL,
  `rule_24` float NOT NULL,
  `rule_25` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilai_rule`
--

INSERT INTO `tbl_nilai_rule` (`id_nilai_rule`, `id_admin`, `rule_1`, `rule_2`, `rule_3`, `rule_4`, `rule_5`, `rule_6`, `rule_7`, `rule_8`, `rule_9`, `rule_10`, `rule_11`, `rule_12`, `rule_13`, `rule_14`, `rule_15`, `rule_16`, `rule_17`, `rule_18`, `rule_19`, `rule_20`, `rule_21`, `rule_22`, `rule_23`, `rule_24`, `rule_25`) VALUES
(6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.2, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 0),
(7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.2, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 0),
(8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.2, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 0),
(9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.2, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 0),
(10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.2, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 0),
(11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.2, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 0),
(12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.2, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 0),
(13, 1, 0, 0, 0, 0, 0.13, 0, 0, 0, 0, 0.87, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rule_fuzzy`
--

CREATE TABLE `tbl_rule_fuzzy` (
  `id_rule` int(11) NOT NULL,
  `co` varchar(25) NOT NULL,
  `no` varchar(25) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rule_fuzzy`
--

INSERT INTO `tbl_rule_fuzzy` (`id_rule`, `co`, `no`, `nilai`) VALUES
(1, 'baik', 'baik', '50'),
(2, 'baik', 'sedang', '75'),
(3, 'baik', 'tidak sehat', '125'),
(4, 'baik', 'berbahaya', '225'),
(5, 'sedang', 'baik', '75'),
(6, 'sedang', 'sedang', '100'),
(7, 'sedang', 'tidak sehat', '150'),
(8, 'sedang', 'sangat tidak sehat', '200'),
(9, 'sedang', 'berbahaya', '250'),
(10, 'tidak sehat', 'baik', '125'),
(11, 'tidak sehat', 'sedang', '150'),
(12, 'tidak sehat', 'tidak sehat', '200'),
(13, 'tidak sehat', 'sangat tidak sehat', '250'),
(14, 'tidak sehat', 'berbahaya', '300'),
(15, 'sangat tidak sehat', 'baik', '175'),
(16, 'sangat tidak sehat', 'sedang', '200'),
(17, 'sangat tidak sehat', 'tidak sehat', '250'),
(18, 'sangat tidak sehat', 'sangat tidak sehat', '300'),
(19, 'sangat tidak sehat', 'berbahaya', '350'),
(20, 'berbahaya', 'baik', '225'),
(21, 'berbahaya', 'sedang', '250'),
(22, 'berbahaya', 'tidak sehat', '300'),
(23, 'berbahaya', 'sangat tidak sehat', '350'),
(24, 'berbahaya', 'berbahaya', '400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_sensor`
--
ALTER TABLE `nilai_sensor`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_hasil_fuzzy`
--
ALTER TABLE `tbl_hasil_fuzzy`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_nilai_derajat`
--
ALTER TABLE `tbl_nilai_derajat`
  ADD PRIMARY KEY (`id_nilai_derajat`);

--
-- Indexes for table `tbl_nilai_rule`
--
ALTER TABLE `tbl_nilai_rule`
  ADD PRIMARY KEY (`id_nilai_rule`);

--
-- Indexes for table `tbl_rule_fuzzy`
--
ALTER TABLE `tbl_rule_fuzzy`
  ADD PRIMARY KEY (`id_rule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_sensor`
--
ALTER TABLE `nilai_sensor`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hasil_fuzzy`
--
ALTER TABLE `tbl_hasil_fuzzy`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nilai_derajat`
--
ALTER TABLE `tbl_nilai_derajat`
  MODIFY `id_nilai_derajat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_nilai_rule`
--
ALTER TABLE `tbl_nilai_rule`
  MODIFY `id_nilai_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_rule_fuzzy`
--
ALTER TABLE `tbl_rule_fuzzy`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
