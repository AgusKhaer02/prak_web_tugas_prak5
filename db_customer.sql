-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 05:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_customer`
--
CREATE DATABASE IF NOT EXISTS `db_customer` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_customer`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kdBarang` varchar(5) NOT NULL,
  `nmBarang` varchar(20) NOT NULL,
  `stok` decimal(3,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kdBarang`, `nmBarang`, `stok`) VALUES
('B-120', 'NIC D-Link', '15'),
('B-121', 'Monitor 17\"', '15'),
('B-122', 'Memory 512', '20'),
('B-123', 'Keyboard Ps2', '50'),
('B-124', 'Mouse Ps2', '5');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `kdCustomer` varchar(5) NOT NULL,
  `nmCustomer` varchar(25) NOT NULL,
  `kota` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`kdCustomer`, `nmCustomer`, `kota`) VALUES
('C-003', 'PT. Maju Terus', 'Jakarta'),
('C-034', 'CV. Komala', 'Bandung'),
('C-065', 'Toko Delapan', 'Bandung'),
('C-109', 'PT. Samudra', 'Garut');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `noFaktur` varchar(5) NOT NULL,
  `tglFaktur` date NOT NULL,
  `kdCustomer` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`noFaktur`, `tglFaktur`, `kdCustomer`) VALUES
('P-001', '2006-05-10', 'C-109'),
('P-002', '2006-05-11', 'C-003'),
('P-003', '2006-05-11', 'C-065'),
('P-004', '2006-05-12', 'C-109');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `nofaktur` varchar(5) NOT NULL,
  `kdBarang` varchar(5) NOT NULL,
  `jumlah` decimal(3,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`nofaktur`, `kdBarang`, `jumlah`) VALUES
('P-001', 'B-123', '5'),
('P-001', 'B-122', '12'),
('P-002', 'B-124', '25'),
('P-003', 'B-120', '10'),
('P-003', 'B-122', '15'),
('P-003', 'B-124', '10'),
('P-004', 'B-120', '24'),
('P-004', 'B-123', '26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kdBarang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kdCustomer`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`noFaktur`),
  ADD KEY `kdCustomer` (`kdCustomer`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD KEY `kdBarang` (`kdBarang`),
  ADD KEY `nofaktur` (`nofaktur`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`kdCustomer`) REFERENCES `customer` (`kdCustomer`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kdBarang`) REFERENCES `barang` (`kdBarang`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`nofaktur`) REFERENCES `penjualan` (`nofaktur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
