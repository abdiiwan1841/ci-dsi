-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 12:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci_dsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_BARANG` varchar(20) NOT NULL,
  `ID_SATUAN` int(11) DEFAULT NULL,
  `ID_LOKASI` int(11) DEFAULT NULL,
  `ID_KATEGORI` int(11) DEFAULT NULL,
  `NAMA_BARANG` varchar(100) DEFAULT NULL,
  `KETERANGAN_BARANG` text DEFAULT NULL,
  `HARGA_BARANG` decimal(19,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_KATEGORI` int(11) NOT NULL,
  `NAMA_KATEGORI` varchar(30) NOT NULL,
  `PREFIX_KATEGORI` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_pengguna`
--

CREATE TABLE `log_pengguna` (
  `ID_LOG` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_TRANSAKSI` varchar(20) DEFAULT NULL,
  `AKSI_LOG` text NOT NULL,
  `TANGGAL_LOG` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `ID_LOKASI` int(11) NOT NULL,
  `BLOK` varchar(5) DEFAULT NULL,
  `KETERANGAN_LOKASI` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID_USER` int(11) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `JABATAN` varchar(20) DEFAULT NULL COMMENT 'Supervisor, Operator',
  `PHONE` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `ID_SATUAN` int(11) NOT NULL,
  `SATUAN` varchar(50) DEFAULT NULL,
  `NOTASI` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` varchar(20) NOT NULL,
  `ID_BARANG` varchar(20) DEFAULT NULL,
  `ID_VENDOR` int(11) DEFAULT NULL,
  `JUMLAH_BARANG` int(11) DEFAULT NULL,
  `KETERANGAN_TRANSAKSI` text DEFAULT NULL,
  `DATE_IN` date DEFAULT NULL,
  `DATE_OUT` date DEFAULT NULL,
  `TOTAL_HARGA` decimal(19,2) DEFAULT NULL,
  `TIPE_TRANSAKSI` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `ID_VENDOR` int(11) NOT NULL,
  `NAMA_VENDOR` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_BARANG`),
  ADD KEY `FK_KATEGORI_KATEGORI__BARANG` (`ID_KATEGORI`),
  ADD KEY `FK_LOKASI_LOKASI_BA_BARANG` (`ID_LOKASI`),
  ADD KEY `FK_SATUAN_SATUAN_BA_BARANG` (`ID_SATUAN`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indexes for table `log_pengguna`
--
ALTER TABLE `log_pengguna`
  ADD PRIMARY KEY (`ID_LOG`),
  ADD KEY `FK_PENGGUNA_MEMBUAT_T_LOG_PENG` (`ID_USER`),
  ADD KEY `FK_TRANSAKS_MEMILIKI__LOG_PENG` (`ID_TRANSAKSI`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`ID_LOKASI`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`ID_SATUAN`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `FK_BARANG_MEMILIKI__TRANSAKS` (`ID_BARANG`),
  ADD KEY `FK_VENDOR_VENDOR_TR_TRANSAKS` (`ID_VENDOR`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`ID_VENDOR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ID_KATEGORI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `log_pengguna`
--
ALTER TABLE `log_pengguna`
  MODIFY `ID_LOG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `ID_LOKASI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `ID_SATUAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `ID_VENDOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `FK_KATEGORI_KATEGORI__BARANG` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori` (`ID_KATEGORI`),
  ADD CONSTRAINT `FK_LOKASI_LOKASI_BA_BARANG` FOREIGN KEY (`ID_LOKASI`) REFERENCES `lokasi` (`ID_LOKASI`),
  ADD CONSTRAINT `FK_SATUAN_SATUAN_BA_BARANG` FOREIGN KEY (`ID_SATUAN`) REFERENCES `satuan` (`ID_SATUAN`);

--
-- Constraints for table `log_pengguna`
--
ALTER TABLE `log_pengguna`
  ADD CONSTRAINT `FK_PENGGUNA_MEMBUAT_T_LOG_PENG` FOREIGN KEY (`ID_USER`) REFERENCES `pengguna` (`ID_USER`),
  ADD CONSTRAINT `FK_TRANSAKS_MEMILIKI__LOG_PENG` FOREIGN KEY (`ID_TRANSAKSI`) REFERENCES `transaksi` (`ID_TRANSAKSI`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_BARANG_MEMILIKI__TRANSAKS` FOREIGN KEY (`ID_BARANG`) REFERENCES `barang` (`ID_BARANG`),
  ADD CONSTRAINT `FK_VENDOR_VENDOR_TR_TRANSAKS` FOREIGN KEY (`ID_VENDOR`) REFERENCES `vendor` (`ID_VENDOR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
