-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2020 at 04:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Ali Imran', 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `desa_id` int(11) NOT NULL,
  `desa_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`desa_id`, `desa_nama`) VALUES
(1, 'Blang Pulo'),
(5, 'Cunda'),
(6, 'Padang Sakti'),
(7, 'Blang Panyang'),
(10, 'Reuleut');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `dusun_id` int(11) NOT NULL,
  `dusun_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`dusun_id`, `dusun_nama`) VALUES
(1, 'Arongan'),
(3, 'Dusun Tengah'),
(4, 'Paloh Jaya'),
(5, 'Dusun Timu'),
(6, 'Dusun Barat');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `warga_id` int(11) NOT NULL,
  `warga_nama` varchar(50) NOT NULL,
  `warga_ktp` varchar(12) NOT NULL,
  `warga_jk` enum('Laki-laki','Perempuan') NOT NULL,
  `warga_desa` varchar(11) NOT NULL,
  `warga_dusun` varchar(11) NOT NULL,
  `warga_rt` varchar(2) NOT NULL,
  `warga_rw` varchar(2) NOT NULL,
  `warga_status` enum('Menikah','Belum Menikah') NOT NULL,
  `warga_pendidikan` enum('Tidak Sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','D1','D2','D3','D4/S1','S2','S3') NOT NULL,
  `warga_agama` enum('Islam','Protestan','Katholik','Hindu','Budha','Konghucu','Aliran Kepercayaan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`warga_id`, `warga_nama`, `warga_ktp`, `warga_jk`, `warga_desa`, `warga_dusun`, `warga_rt`, `warga_rw`, `warga_status`, `warga_pendidikan`, `warga_agama`) VALUES
(2, 'Putra Siregar', '123456789002', 'Laki-laki', '5', '4', '01', '01', 'Menikah', 'D4/S1', 'Islam'),
(3, 'Muzaffar Riga', '123456789002', 'Laki-laki', '1', '6', '01', '01', 'Belum Menikah', 'D4/S1', 'Islam'),
(5, 'Hadini Basna', '123456789003', 'Laki-laki', '6', '1', '01', '03', 'Menikah', 'SMA/SMK/MA', 'Islam'),
(6, 'Disti ', '123456789009', 'Laki-laki', '1', '1', '01', '01', 'Belum Menikah', 'SMA/SMK/MA', 'Islam'),
(7, 'Habib Maulana', '123456789012', 'Laki-laki', '1', '1', '01', '05', 'Menikah', 'D2', 'Islam'),
(8, 'Reza Alfian', '123456789015', 'Laki-laki', '1', '3', '00', '02', 'Menikah', 'D2', 'Islam'),
(9, 'Mulia Mahendra', '123456789030', 'Laki-laki', '1', '1', '09', '09', 'Menikah', 'SMA/SMK/MA', 'Islam'),
(10, 'Rahmat', '123456789992', 'Laki-laki', '1', '1', '08', '07', 'Belum Menikah', 'SMA/SMK/MA', 'Islam'),
(11, 'Suryadi', '123456789011', 'Laki-laki', '10', '5', '00', '00', 'Menikah', 'D4/S1', 'Islam'),
(12, 'Amir Hasan', '123456789201', 'Laki-laki', '7', '4', '00', '00', 'Belum Menikah', 'D1', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desa_id`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`dusun_id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`warga_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `desa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `dusun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `warga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
