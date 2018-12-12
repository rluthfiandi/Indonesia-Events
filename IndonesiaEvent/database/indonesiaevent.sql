-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 11:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indonesiaevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(20) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `id_jadwal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `kelas`, `harga`, `id_jadwal`) VALUES
(1, 'Ekonomi', '65000', 1),
(2, 'Patas Non AC', '100000', 2),
(3, 'Ekonomi AC', '85000', 0),
(4, 'AC Non Toilet', '100000', 0),
(5, 'AC Toilet', '120000', 0),
(6, 'Ekonomi', '85000', 0),
(7, 'Patas Non AC', '125000', 0),
(8, 'Ekonomi AC', '100000', 0),
(9, 'AC Non Toilet', '135000', 0),
(10, 'AC Toilet', '160000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(20) NOT NULL,
  `event` varchar(40) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jadwal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `event`, `lokasi`, `jadwal`) VALUES
(1, 'Purwokerto', 'Bekasi - Purwokerto', '12 agustus'),
(2, 'Purwokerto', 'Bekasi - Purwokerto', ''),
(8, 'Purwokerto', 'Bekasi - Purwokerto', ''),
(9, 'Purwokerto', 'Bekasi - Purwokerto', ''),
(10, 'Purwokerto', 'Bekasi - Purwokerto', ''),
(11, 'Yogyakarta', 'Bekasi - Gombong - Kebumen - Kutoarjo - Purworejo - Yogyakarta', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(10) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `nmr_rekening` varchar(30) NOT NULL,
  `atas_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesan` int(20) NOT NULL,
  `id_event` int(20) NOT NULL,
  `id_jadwal` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pesan` date NOT NULL,
  `qty` int(20) NOT NULL,
  `total` varchar(30) NOT NULL,
  `fixed` int(2) NOT NULL,
  `invoice` int(20) NOT NULL,
  `konfirm` int(11) NOT NULL,
  `respons` varchar(50) NOT NULL,
  `pembayaran` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `id_event`, `id_jadwal`, `nama`, `alamat`, `tgl_pesan`, `qty`, `total`, `fixed`, `invoice`, `konfirm`, `respons`, `pembayaran`) VALUES
(15, 1, 1, 'a', 'jakarta', '2017-07-18', 2, '130000', 0, 206, 0, 'uploads/img51-1314949032.jpg', 0),
(18, 1, 1, 'dian', 'kayuringin', '2017-07-18', 3, '195000', 1, 41, 1, 'uploads/img52-1314949172.jpg', 1),
(31, 1, 1, 'andi', 'bekasi', '2017-07-20', 3, '195000', 1, 937, 0, '', 0),
(32, 1, 1, 'diana', 'cikarang', '2017-07-20', 3, '195000', 1, 970, 0, '', 0),
(33, 1, 1, 'ari', 'dimana', '2017-07-22', 3, '195000', 1, 108, 0, '', 0),
(34, 1, 1, 'andri', 'cakung', '2017-07-22', 3, '195000', 1, 33, 0, '', 0),
(35, 1, 1, 'yudi', 'alamat', '2017-07-22', 1, '65000', 1, 226, 0, '', 0),
(36, 1, 1, 'dini', 'alamat', '2017-07-22', 2, '130000', 1, 909, 1, '', 0),
(37, 1, 1, 'NADIA SALSABIL', 'JAKARTA', '2017-07-24', 2, '130000', 1, 982, 1, 'uploads/53e60625e9a45c248f14c27d3990b23f.jpg', 0),
(38, 1, 1, 'hilmy', 'rawa bebek', '2017-07-26', 4, '260000', 0, 430, 0, '', 0),
(39, 1, 1, 'diana', 'bekasi', '2017-08-03', 2, '130000', 0, 636, 0, '', 0),
(40, 1, 1, 'sasa', 'cakung', '2017-08-03', 3, '195000', 0, 351, 0, '', 0),
(41, 1, 1, 'sasa', 'bintara', '2017-08-04', 2, '130000', 1, 914, 0, '', 0),
(42, 2, 2, 'jhgjhg', 'dflsadj', '2017-08-04', 3, '300000', 0, 279, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`,`id_jadwal`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
