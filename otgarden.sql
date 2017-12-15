-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2017 at 06:02 PM
-- Server version: 10.1.29-MariaDB-1~xenial
-- PHP Version: 7.0.25-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otgarden`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(10) NOT NULL,
  `barang` text NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `biaya` int(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `konfirmasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `barang`, `nama_depan`, `nama_belakang`, `email`, `telepon`, `alamat`, `biaya`, `tanggal`, `konfirmasi`) VALUES
('8BlDvCQPbr', 'Tanaman x3,Matlab x4', 'Andre', 'Simamora', 'andre_p71@rocketmail.com', '7520797', 'Alamat', 105000000, '2017-11-12 13:25:16', 1),
('ZIEjO5ikMg', 'Matlab x4,Tes x3', 'Andre', 'Simamora', 'andre_p71@rocketmail.com', '7520797', 'Tes', 187272693, '2017-12-07 20:43:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `gambar` varchar(140) NOT NULL,
  `slug` varchar(140) NOT NULL,
  `nama` varchar(140) NOT NULL,
  `harga` int(8) NOT NULL,
  `stok` int(4) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`gambar`, `slug`, `nama`, `harga`, `stok`, `deskripsi`) VALUES
('logo_panasonic.jpg', 'slug-sma', 'Tanaman', 15000000, 2, 'T'),
('Sertifikat.png', 'tanaman', 'Tanaman', 10000000, 2, 'Tes'),
('pweb.png', 'tes-kesekian', 'Matlab', 15000000, 5, 'Tes'),
('logo_matlab.jpg', 'tes-lagi-aja', 'Tanaman', 5000000, 4, 'Tes'),
('logo_cv_dhia_nailah.jpg', 'test-lagi-aja', 'Tes', 42424231, 5, 'Tes'),
('CV.jpeg', 'test-ya', 'Tanaman', 125000, 7, 'Des');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
