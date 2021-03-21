-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2020 at 10:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id`, `nama`, `tlp`, `alamat`) VALUES
(1, 'Indomaret', '78332428', 'Pemalang'),
(2, 'Alfamart', '9849402', 'Brebes'),
(4, 'Rita Mall', '712738829103', 'Purwokerto'),
(5, 'Allfamidi', '187239123', 'Purwokerto'),
(7, 'Rita Mall', '7812831', 'PWT');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `jumlah`, `harga`, `image`) VALUES
(12, 'Sandal', '12', '12.000', '5f0d53e79fa30.jpeg'),
(13, 'Kemeja', '50', '90.000', '5f0d540a2dcec.jpeg'),
(14, 'Sepatu', '21', '150.000', '5f0d542659d7b.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'fajar', 'test@test.com', 'fajar', '$2y$10$fi9GXEqBHondpyNDlKONzOAso9dxVHfHsk8JjKSdlzIAfysQ65sd2'),
(2, 'galih', 'test@test.com', 'galih', '$2y$10$FKTsBzgc2TDR5PHNnyL9.uGiEm4g/cOLn0riJlFrj38VMC1LGlNCW'),
(3, 'Mendi', 'test@test.com', 'mendi', '$2y$10$eSPjl8MEbfVNSbUX29gHue5T2yfl58y1VbClt3.4lLBt0ZGBTleJi'),
(4, 'Mendi', 'test@test.com', 'admin', '$2y$10$NWWWgl9/1yzaNQJPjViCzuF31tfkDiGB1IilnJo5CNxTo3t81RSYm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
