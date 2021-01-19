-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 12:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(6) NOT NULL,
  `id_produk` int(6) NOT NULL,
  `no_hp_penjual` varchar(255) NOT NULL,
  `username_penjual` varchar(255) NOT NULL,
  `no_hp_pembeli` varchar(255) NOT NULL,
  `username_pembeli` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `status` int(6) NOT NULL,
  `poto` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_produk`, `no_hp_penjual`, `username_penjual`, `no_hp_pembeli`, `username_pembeli`, `ukuran`, `harga`, `status`, `poto`, `jumlah`, `total`, `created_at`, `updated_at`) VALUES
(1, 2, '0895701868604', 'weni', '089696963222', 'oca', '10 mm', '10000000', 4, NULL, '2', '20000000', '2021-01-17 13:34:43', '2021-01-17 15:05:49'),
(2, 2, '0895701868604', 'weni', '089696963222', 'oca', '10 mm', '10000000', 4, '1610924273gW9ly.png', '5', '50000000', '2021-01-17 13:35:18', '2021-01-17 16:00:51'),
(3, 2, '0895701868604', 'weni', '089696963222', 'oca', '10 mm', '10000000', 1, NULL, NULL, NULL, '2021-01-17 13:35:22', '2021-01-17 13:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `no_hp_pembeli` varchar(14) NOT NULL,
  `id_user` int(6) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`no_hp_pembeli`, `id_user`, `nama_lengkap`, `username`, `password`, `alamat`, `poto`, `created_at`, `updated_at`) VALUES
('089696963222', 7, 'Oca', 'oca', 'oca', 'Jl. Imam Bonjol', '1610907626xIxbJ.jpg', '2021-01-17 11:20:26', '2021-01-17 11:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `no_hp` varchar(14) NOT NULL,
  `id_user` int(6) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`no_hp`, `id_user`, `nama_lengkap`, `nama_toko`, `username`, `password`, `poto`, `alamat`, `created_at`, `updated_at`) VALUES
('0895701868604', 6, 'Weni', 'Weni Shoop', 'weni', 'weni', '1610907413iTysQ.png', 'Jl.Rahadi Usman', '2021-01-17 11:16:53', '2021-01-17 11:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(6) NOT NULL,
  `no_hp_penjual` varchar(14) NOT NULL,
  `username_penjual` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` int(6) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `no_hp_penjual`, `username_penjual`, `nama_produk`, `ukuran`, `harga`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(2, '0895701868604', 'weni', 'Alexsander', '10 mm', '10000000', 20, '1610914070s8OEr.png', '2021-01-17 13:07:50', '2021-01-17 13:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(6) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '$2y$10$UzEKEsS/cCQkCtrOh9/cD.GkcrwvqMc0OyLgFYMb0LmBTqwQfINuu', 1, NULL, '2021-01-17 10:58:57', '2021-01-17 10:58:57'),
(6, 'weni', 'Weni', '$2y$10$rYduQBYR/oLTWQdMlyXCuOaiLymeXMoqKGOveq0Ed0CcT76qeIMbG', 2, NULL, '2021-01-17 11:16:53', '2021-01-17 11:16:53'),
(7, 'oca', 'Oca', '$2y$10$aAYFLVC4Lj5hO1nWaunTAOnCiT9oATHn2trcqkwCj.1XzYQ2iDVnu', 3, NULL, '2021-01-17 11:20:26', '2021-01-17 18:26:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`no_hp_pembeli`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`no_hp`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
