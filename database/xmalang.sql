-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 01:40 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xmalang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`, `alamat`) VALUES
(2, 'Bimo Adiparwa', 'bimoadiparwa98@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Bekasi Barat'),
(4, 'Hafiz Arrahman', 'hafiz@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `jk_dokter` enum('L','P') NOT NULL,
  `ttl_dokter` date NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `spesialis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_poli`, `nama_dokter`, `jk_dokter`, `ttl_dokter`, `no_telp`, `alamat`, `spesialis`) VALUES
(13, 12, 'dr. Dave Anderson, Sp.A', 'L', '2018-11-15', '081112331213', 'Bekasi', 'Gigi'),
(15, 1, 'dr. Ardita Puspitadewi, Sp.A', 'P', '1988-06-19', '085888889999', 'Bekasi Barat', 'Anak'),
(16, 1, 'dr. Dave Anderson, Sp.A', 'L', '1980-06-16', '081311112222', 'Bekasi Barat', 'Anak'),
(17, 1, 'dr. Ackni Hartati, Sp.A', 'P', '2018-11-20', '085566661111', 'Jakarta', 'Anak'),
(18, 2, 'dr. Himawan Wicaksono, Sp.JP', 'L', '1981-07-17', '08123456789', 'Depok', 'Jantung'),
(19, 2, 'dr. Liliek Murtiningsih, Sp. JP', 'P', '1970-11-20', '08111222333', 'Bekasi', 'Jantung'),
(20, 2, 'dr. M. Djamal A. Hasan, Sp.JP', 'L', '1970-01-01', '081212345678', 'Bekasi', 'Jantung'),
(21, 3, 'dr. Selfiyanti Bimantara, Sp.THT-KL', 'P', '1980-02-02', '085745687894', 'Bekasi', 'THT'),
(22, 3, 'dr. Dendy Hamdali, Sp.THT-KL', 'L', '1969-01-16', '088812345678', 'Bekasi', 'THT'),
(23, 3, 'dr. Sesanti Hayuning Tyas, Sp.THT-KL', 'P', '1981-03-03', '08588888444', 'Jakarta', 'THT'),
(24, 5, 'dr. Aladin S Johan, Sp.B', 'L', '1970-05-04', '085741235689', 'Jakarta', 'Bedah'),
(25, 5, 'dr. Meky Tanjung, Sp.B', 'L', '1979-01-02', '082212345678', 'Jakarta', 'Bedah'),
(27, 5, 'dr. Ferdy Limengka, Sp.B, FINACS', 'L', '1969-05-05', '085369871234', 'Jakarta', 'Bedah'),
(28, 7, 'dr. Nina Manggiasih, Sp.M', 'P', '1975-08-08', '085745691236', 'Jakarta', 'Mata'),
(29, 6, 'dr. Antonius Dwi Juniarto, Sp.M', 'L', '1980-03-12', '08123456789', 'Jakarta', 'Mata'),
(30, 6, 'dr. Antonius Dwi Juniarto, Sp.M', 'L', '1980-03-12', '08123456789', 'Jakarta', 'Mata'),
(31, 7, 'dr. Dewi Astrid Lestari, Sp.PD', 'P', '1980-07-07', '085761237894', 'Bekasi', 'Penyakit Dalam'),
(32, 7, 'dr. Andrian Hok Halim, Sp.PD', 'L', '1979-02-01', '085321456987', 'Jakarta', 'Penyakit Dalam'),
(33, 8, 'dr. Harminayanti, MARS', 'P', '1975-04-06', '087745612378', 'Jakarta', 'Umum'),
(34, 8, 'dr. Vika Roosiana Lindrati', 'P', '1980-02-01', '085698743214', 'Jakarta', 'Umum'),
(35, 9, 'dr. Bastian, Sp.S', 'L', '1969-01-01', '085812369874', 'Bekasi', 'Saraf'),
(36, 9, 'dr. G.A Putu Yunihati, Sp.S', 'P', '1982-05-05', '081236987456', 'Bekasi', 'Saraf'),
(37, 19, 'drg. Benardi Catur Into, Sp.Prostho', 'L', '1970-03-03', '08882223334', 'Jakarta', 'Gigi'),
(38, 19, 'drg. Yusi Heptorina, Sp.KG', 'P', '1980-02-04', '087845612389', 'Bekasi', 'Gigi'),
(39, 1, 'DR. dr. Nita Ratna Dewanti, Sp.A', 'L', '1983-01-01', '085890951080', 'Bekasi', 'Anak');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `ttl_pasien` date NOT NULL,
  `jk_pasien` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `ttl_pasien`, `jk_pasien`, `alamat`, `no_telp`, `email`, `password`) VALUES
(1, 'jibril', '2018-11-02', 'L', 'manggarai', '08129039385', 'jibrilhp@outlook.com', 'f5c25a0082eb0748faedca1ecdcfb131'),
(7, 'Bimo Adiparwa', '2018-11-15', 'L', 'Bekasi', '081122223333', 'bimbim@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'Jibril Hartri Putra', '2018-11-01', 'L', 'Manggarai', '081381079161', 'jibrilhp@gmail.com', 'f5c25a0082eb0748faedca1ecdcfb131'),
(9, 'Hartri', '1997-01-22', 'L', 'Manggarai', '08129039385', 'jibrilhp@student.gunadarma.ac.id', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Atiqoturrahman', '1998-01-01', 'P', 'Jl. Suka Maju No. 1, Kec. Suka Mundur, Kel. Suka Masuk', '081322228888', 'atiq@gmail.com', 'f5c25a0082eb0748faedca1ecdcfb131'),
(11, 'Yotayo', '1998-06-19', 'L', 'Bekasi Barat', '08999196298', 'yota@gmail.com', 'f5c25a0082eb0748faedca1ecdcfb131');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pasien`, `id_poli`, `id_dokter`, `id_waktu`, `tanggal`) VALUES
(29, 1, 2, 19, 8, '2018-11-24'),
(31, 8, 2, 18, 4, '2018-11-26'),
(32, 8, 1, 15, 9, '2018-11-26'),
(33, 8, 1, 17, 9, '2018-11-26'),
(37, 1, 1, 15, 6, '2018-11-28'),
(38, 1, 1, 15, 2, '2018-11-24'),
(39, 9, 1, 16, 2, '2018-11-26'),
(40, 10, 1, 15, 8, '2018-11-26'),
(41, 10, 1, 16, 8, '2018-11-29'),
(42, 10, 8, 34, 3, '2018-11-30'),
(43, 11, 1, 15, 1, '2018-12-01'),
(44, 10, 3, 23, 1, '2018-12-03'),
(45, 0, 9, 36, 8, '2018-12-06'),
(46, 10, 2, 20, 2, '2018-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `lokasi_poli` varchar(10) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `lokasi_poli`, `gambar`) VALUES
(1, 'Anak', 'J11', 'baby.png'),
(2, 'Jantung', 'J12', 'heart.png'),
(3, 'THT', 'J13', 'nasal_(2).png'),
(5, 'Bedah', 'J15', 'scalpel.png'),
(6, 'Mata', 'J16', 'eye.svg'),
(7, 'Penyakit Dalam', 'J17', 'default.jpg'),
(8, 'Umum', 'J18', 'stethoscope.png'),
(9, 'Saraf', 'J19', 'brain.png'),
(19, 'Gigi', 'J114', 'tooth_(2).png');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `waktu`) VALUES
(1, '08:00:00'),
(2, '09:00:00'),
(3, '10:00:00'),
(4, '11:00:00'),
(5, '12:00:00'),
(6, '14:00:00'),
(7, '15:00:00'),
(8, '16:00:00'),
(9, '18:30:00'),
(10, '19:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_poli` (`id_poli`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
