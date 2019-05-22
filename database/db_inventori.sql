-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 04:24 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `spesifikasi` varchar(225) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `kondisi` varchar(30) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `sumber_dana` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `spesifikasi`, `lokasi`, `kondisi`, `jml_barang`, `sumber_dana`) VALUES
(1, 'kursi', 'terbuat dari kayu cacat pada bagian kaki kursi', 'smkn1bangsri', 'Kurang Baik', 50, 'kepsek'),
(2, 'Meja', 'terbuat dari kayu', 'smkn1bangsri', 'Kurang Baik', 559, 'Dana BOS'),
(3, 'papan tulis', 'terbuat dari kayu cacat pada bagian kaki kursi', 'Kantor Kepsek', 'Baru', 8, 'kepsek'),
(4, 'Jam Dinding', 'Dengan diameter 300cm', 'Ruang XII RPL 1', 'Baru', 1, 'Dana BOS');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `barang_id` varchar(30) NOT NULL,
  `tgl_keluar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jml_keluar` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `penerima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `barang_id`, `tgl_keluar`, `jml_keluar`, `lokasi`, `penerima`) VALUES
(1, 'kursi', '0000-00-00 00:00:00', 23, 'smkn1bangsri', 'agus'),
(2, '', '0000-00-00 00:00:00', 0, '', ''),
(3, '2', '0000-00-00 00:00:00', 5, 'Kantor Guru', 'agus'),
(4, '1', '2019-04-20 12:24:13', 25, 'Ruang XII RPL 2', 'agus');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `barang_id` varchar(30) NOT NULL,
  `tgl_masuk` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jml_masuk` int(11) NOT NULL,
  `suplier_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `barang_id`, `tgl_masuk`, `jml_masuk`, `suplier_id`) VALUES
(1, '1', '2019-04-15 15:48:16', 20, '1'),
(2, '1', '2019-04-18 14:05:01', 2, '1'),
(3, '2', '2019-04-18 14:49:16', 10, '1'),
(4, '2', '2019-04-22 15:36:38', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id` int(11) NOT NULL,
  `peminjam` varchar(30) NOT NULL,
  `tgl_pinjam` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `barang_id` varchar(30) NOT NULL,
  `jml_barang` int(30) NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `kondisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id`, `peminjam`, `tgl_pinjam`, `barang_id`, `jml_barang`, `tgl_kembali`, `kondisi`) VALUES
(1, 'intan', '2019-04-16 13:56:45', '2', 1, '0000-00-00 00:00:00', 'Baru'),
(2, 'intan', '2019-04-16 13:57:31', '1', 1, '2019-04-22 00:00:00', 'Baru'),
(3, 'ahmad', '2019-04-22 15:37:13', '2', 10, '2019-04-22 00:00:00', 'Layak'),
(4, 'Ahmad Nur Fauzi', '2019-04-23 07:56:54', '2', 1, '0000-00-00 00:00:00', 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `barang_id` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jml_keluar` int(30) NOT NULL,
  `total_barang` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id` int(11) NOT NULL,
  `nama_suplier` varchar(30) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `telp_suplier` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `nama_suplier`, `alamat`, `telp_suplier`) VALUES
(1, 'kiale', 'kedungleper rt 01/06', 82223776),
(2, 'dia', 'Kancilan ', 2147483647),
(3, 'tryam', 'bandung', 2147483647),
(4, 'bejo', 'magelang', 123458);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `pass`, `level`) VALUES
(1, 'Ahmad Nur Fauzi', 'admin', 'admin', 'administrator'),
(2, 'Manajement', 'manajement', 'manajement', 'manajement'),
(3, 'Budi', 'peminjam', 'peminjam', 'peminjam'),
(4, 'mahfud', 'mahfud', 'mahfud', 'peminjam'),
(5, 'yusuf', 'yusuf', 'yusuf', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
