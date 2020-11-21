-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 09:11 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bem`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `ID` int(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `angkatan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`ID`, `nama`, `tgl_lahir`, `agama`, `angkatan`) VALUES
(0, '', '0000-00-00', '', 0),
(22000, 'Hilda', '2000-05-02', 'islam', 2019),
(41998, 'virna', '1998-04-04', 'islam', 2016),
(61998, 'dila', '1998-12-06', 'islam', 2017),
(102000, 'dita', '2000-07-10', 'islam', 2018),
(111999, 'umar', '1999-07-11', 'islam', 2017),
(112000, 'nadzifa', '2000-01-11', 'islam', 2018),
(151998, 'rubel', '1998-04-15', 'kristen', 2017),
(152000, 'ricky', '2000-07-15', 'kristen', 2018),
(161999, 'sarah', '1999-09-16', 'islam', 2018),
(162000, 'nadila', '2000-04-16', 'islam', 2018),
(212000, 'yessica', '2000-05-21', 'islam', 2018),
(222000, 'fera', '2000-05-22', 'islam', 2018),
(251999, 'islam', '1999-04-25', 'islam', 2017),
(281997, 'liana', '1997-08-28', 'islam', 2016),
(291999, 'ramadhan', '1999-11-21', 'islam', 2017),
(311997, 'nadya', '1997-10-31', 'islam', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `Nama` varchar(100) NOT NULL,
  `Kode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`Nama`, `Kode`) VALUES
('Pendidikan', 'BEM12'),
('UKM', 'BEM13'),
('PSDM', 'BEM14'),
('Keuangan', 'BEM15'),
('SosPol', 'BEM16');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `No` int(100) NOT NULL,
  `ID` int(7) NOT NULL,
  `kode_studi` varchar(5) NOT NULL,
  `Kode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`No`, `ID`, `kode_studi`, `Kode`) VALUES
(1, 212000, 'F3-03', 'BEM14'),
(2, 291999, 'F3-01', 'BEM16'),
(3, 111999, 'F4-01', 'BEM16'),
(4, 281997, 'F3-02', 'BEM13'),
(5, 41998, 'F3-01', 'BEM15'),
(6, 112000, 'F1-03', 'BEM16'),
(7, 22000, 'F1-02', 'BEM14'),
(8, 151998, 'F3-02', 'BEM13'),
(9, 162000, 'F1-02', 'BEM13'),
(10, 251999, 'F2-03', 'BEM13'),
(11, 161999, 'F3-01', 'BEM12'),
(12, 222000, 'F3-01', 'BEM12'),
(13, 152000, 'F1-01', 'BEM12'),
(14, 102000, 'F4-01', 'BEM14'),
(15, 22000, 'F3-01', 'BEM12'),
(17, 61998, 'F3-01', 'BEM14'),
(18, 311997, 'F1-04', 'BEM15'),
(19, 311997, 'F1-04', 'BEM15'),
(22, 0, '', ''),
(23, 0, '', ''),
(24, 0, '', ''),
(25, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studi`
--

CREATE TABLE `studi` (
  `kode_studi` varchar(5) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studi`
--

INSERT INTO `studi` (`kode_studi`, `nama_prodi`) VALUES
('F1-01', 'Teknik Infomatika (TI)'),
('F1-02', 'Sistem Infomasi (SI)'),
('F1-03', 'Design Komunikasi Visual (DKV)'),
('F1-04', 'Design Produk (DP)'),
('F2-01', 'Agroteknologi (AET)'),
('F2-02', 'Ilmu teknologi pangan (ITP)'),
('F2-03', 'Agribisnis (AGB)'),
('F3-01', 'Menejemen (MNJ)'),
('F3-02', 'Akuntansi (AK)'),
('F3-03', 'Ekonomi pembangunan (EKP)'),
('F4-01', 'Pedidikan guru SD (PGSD)'),
('F4-02', 'Pedidikan guru PAUD (PGPAUD)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`No`),
  ADD KEY `kode_studi` (`kode_studi`),
  ADD KEY `ID` (`ID`,`Kode`);

--
-- Indexes for table `studi`
--
ALTER TABLE `studi`
  ADD PRIMARY KEY (`kode_studi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
