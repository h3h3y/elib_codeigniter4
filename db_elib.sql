-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2023 at 04:14 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elib`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kode_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kode_buku`, `judul_buku`, `pengarang`, `tahun_terbit`, `kategori`, `jumlah_buku`, `sampul`) VALUES
('B001', 'Buku Pertama', 'Iwan', 2023, 'Komik', 450, 'uploads/sampul/1703525168_746a88d8ffdc43a29fbf.png'),
('B002', 'Buku Kenangan', 'Iwan', 2022, 'Komik', 50, 'uploads/sampul/1703525191_fb63f1d7634a20df3cdb.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjam`
--

CREATE TABLE `tb_peminjam` (
  `no_peminjam` varchar(20) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `kode_buku` varchar(20) NOT NULL,
  `tanggal_peminjaman` datetime NOT NULL,
  `tanggal_pengembalian` datetime DEFAULT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `status` enum('dipinjam','dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjam`
--

INSERT INTO `tb_peminjam` (`no_peminjam`, `nama_peminjam`, `kode_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `jumlah_buku`, `status`) VALUES
('KP0001', 'Iwan', 'B001', '2023-12-26 00:27:00', '2023-12-26 00:44:50', 100, 'dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `user_name`, `password`) VALUES
(1, 'admin', '$2y$10$oElxiErROXzdVdEse1V2wOZXE5Pv/MdiFOG38Rz/IKLmsGJWhXxWO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD PRIMARY KEY (`no_peminjam`),
  ADD KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD CONSTRAINT `tb_peminjam_ibfk_1` FOREIGN KEY (`kode_buku`) REFERENCES `tb_buku` (`kode_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
