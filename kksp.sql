-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2016 at 10:01 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kksp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `table_id` int(11) NOT NULL,
  `no_ic` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`table_id`, `no_ic`, `password`) VALUES
(1, '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `file_hadir`
--

CREATE TABLE IF NOT EXISTS `file_hadir` (
  `table_id` int(11) NOT NULL,
  `upload` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_hadir`
--

INSERT INTO `file_hadir` (`table_id`, `upload`) VALUES
(3, '1451533590_Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `file_hotelnhomestay`
--

CREATE TABLE IF NOT EXISTS `file_hotelnhomestay` (
  `table_id` int(11) NOT NULL,
  `upload` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_hotelnhomestay`
--

INSERT INTO `file_hotelnhomestay` (`table_id`, `upload`) VALUES
(1, '1451533576_Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `file_map`
--

CREATE TABLE IF NOT EXISTS `file_map` (
  `table_id` int(11) NOT NULL,
  `upload` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_map`
--

INSERT INTO `file_map` (`table_id`, `upload`) VALUES
(1, '1451533192_13123.png');

-- --------------------------------------------------------

--
-- Table structure for table `file_surat_jemputan`
--

CREATE TABLE IF NOT EXISTS `file_surat_jemputan` (
  `table_id` int(11) NOT NULL,
  `upload` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_surat_jemputan`
--

INSERT INTO `file_surat_jemputan` (`table_id`, `upload`) VALUES
(1, '1451533834_Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `file_tentatif`
--

CREATE TABLE IF NOT EXISTS `file_tentatif` (
  `table_id` int(11) NOT NULL,
  `upload` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_tentatif`
--

INSERT INTO `file_tentatif` (`table_id`, `upload`) VALUES
(1, '1451304019_Movie_Themes_-_James_Bond.mid');

-- --------------------------------------------------------

--
-- Table structure for table `file_tidakhadir`
--

CREATE TABLE IF NOT EXISTS `file_tidakhadir` (
  `table_id` int(11) NOT NULL,
  `upload` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_tidakhadir`
--

INSERT INTO `file_tidakhadir` (`table_id`, `upload`) VALUES
(1, '1451303759_ResumeHelp.html');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE IF NOT EXISTS `kehadiran` (
  `table_id` int(11) NOT NULL,
  `nama` longtext NOT NULL,
  `no_kp` longtext NOT NULL,
  `no_matrik` longtext NOT NULL,
  `unit` longtext NOT NULL,
  `sesi` longtext NOT NULL,
  `sidang` longtext NOT NULL,
  `status_kehadiran` longtext NOT NULL,
  `saiz_jubah` longtext NOT NULL,
  `no_resit` longtext NOT NULL,
  `alamat` longtext NOT NULL,
  `email` longtext NOT NULL,
  `status` longtext NOT NULL,
  `upload` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`table_id`, `nama`, `no_kp`, `no_matrik`, `unit`, `sesi`, `sidang`, `status_kehadiran`, `saiz_jubah`, `no_resit`, `alamat`, `email`, `status`, `upload`) VALUES
(4, 'Moganess', '10', '10', 'Sijil Kulnuri', 'DISEMBER 2015', '2016', 'Hadir', 'M', '38293482934', 'Sejati', 'moniz@gmail.com', 'Belum Diperiksa', '10_1453762113_Lighthouse.jpg'),
(5, 'Kanges', '50', '50', 'Sijil Kulnuri', 'JUN 2013', '2014', 'Hadir', 'XXL', '10230104', 'Sri Wand', 'sdf@gmiI.com', 'Belum Diperiksa', '50_1453764576_Penguins.jpg'),
(6, 'Yuvanath', '60', '60', 'Sijil Asas Pastri', 'DISEMBER 2015', '2016', 'Hadir', 'XXL', '234234234', 'Semarah', 'sdf@sdf.com', 'Belum Diperiksa', '60_1453764817_Hydrangeas.jpg'),
(7, 'Ganesh', '70', '70', 'Sijil Asas Pastri', 'DISEMBER 2014', '2016', 'Hadir', 'XL', '2390420934', 'Sejati', 'smfdkim@sfdmkg.com', 'Belum Diperiksa', '70_1453765413_Desert.jpg'),
(8, 'Kalai', '20', '20', 'Diploma Terapi Kecantikan(WBL)', 'JUN 2014', '2016', 'Hadir', 'XXL', '2342342666', 'Permai', 'sfdg@sfds.com', 'Belum Diperiksa', '20_1453765651_Hydrangeas.jpg'),
(9, 'Nathan', '40', '40', 'Sijil Terapi Kecantikan dan Spa', 'JUN 2015', '2017', 'Hadir', 'L', '23400452023', 'Sejati', 'sdff@sdfs.com', 'Belum Diperiksa', '40_1453765683_Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `table_id` int(11) NOT NULL,
  `nama` longtext NOT NULL,
  `no_kp` longtext NOT NULL,
  `unit` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`table_id`, `nama`, `no_kp`, `unit`, `password`) VALUES
(3, 'Ram', '101', 'Sijil Kulnuri', '101'),
(4, 'Raj', '202', 'Diploma Terapi Kecantikan(WBL)', '202'),
(5, 'Ronnie', '301', 'Sijil Terapi Kecantikan dan Spa', '303');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `table_id` int(11) NOT NULL,
  `nama` longtext NOT NULL,
  `no_kp` longtext NOT NULL,
  `no_matrik` longtext NOT NULL,
  `unit` longtext NOT NULL,
  `sesi` longtext NOT NULL,
  `sidang` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`table_id`, `nama`, `no_kp`, `no_matrik`, `unit`, `sesi`, `sidang`, `password`) VALUES
(3, 'Moganess', '10', '10', 'Sijil Kulnuri', 'DISEMBER 2015', '2016', '10'),
(5, 'Sathis', '30', '30', 'Sijil Asas Pastri', 'JUN 2016', '2018', '30'),
(6, 'Nathan', '40', '40', 'Sijil Terapi Kecantikan dan Spa', 'JUN 2015', '2017', '40'),
(7, 'Kalai', '20', '20', 'Diploma Terapi Kecantikan(WBL)', 'JUN 2014', '2016', '20'),
(8, 'Kanges', '50', '50', 'Sijil Kulnuri', 'JUN 2013', '2014', '50'),
(9, 'Yuvanath', '60', '60', 'Sijil Asas Pastri', 'DISEMBER 2015', '2016', '60'),
(10, 'Ganesh', '70', '70', 'Sijil Asas Pastri', 'DISEMBER 2014', '2016', '70'),
(11, 'Kirthi', '80', '80', 'Unit Operasi Perhotelan', 'DISEMBER 2015', '2018', '80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `file_hadir`
--
ALTER TABLE `file_hadir`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `file_hotelnhomestay`
--
ALTER TABLE `file_hotelnhomestay`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `file_map`
--
ALTER TABLE `file_map`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `file_surat_jemputan`
--
ALTER TABLE `file_surat_jemputan`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `file_tentatif`
--
ALTER TABLE `file_tentatif`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `file_tidakhadir`
--
ALTER TABLE `file_tidakhadir`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `file_hadir`
--
ALTER TABLE `file_hadir`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `file_hotelnhomestay`
--
ALTER TABLE `file_hotelnhomestay`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `file_map`
--
ALTER TABLE `file_map`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `file_surat_jemputan`
--
ALTER TABLE `file_surat_jemputan`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `file_tentatif`
--
ALTER TABLE `file_tentatif`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `file_tidakhadir`
--
ALTER TABLE `file_tidakhadir`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
