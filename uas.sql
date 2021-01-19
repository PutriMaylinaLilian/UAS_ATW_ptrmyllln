-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2021 pada 06.28
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `keranjang`
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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_produk`, `no_hp_penjual`, `username_penjual`, `no_hp_pembeli`, `username_pembeli`, `ukuran`, `harga`, `status`, `poto`, `jumlah`, `total`, `created_at`, `updated_at`) VALUES
(4, 4, '081295153234', 'ptrmyllln', '085390719305', 'sheries', 'Sedang', '20000', 5, '16110306332UCve.jpg', '2', '40000', '2021-01-19 12:17:23', '2021-01-19 12:34:09'),
(5, 3, '081295153234', 'ptrmyllln', '085390719305', 'sheries', 'Sedang', '15000', 1, NULL, NULL, NULL, '2021-01-19 12:17:31', '2021-01-19 12:17:31'),
(6, 4, '081295153234', 'ptrmyllln', '085390719305', 'sheries', 'Sedang', '20000', 1, NULL, NULL, NULL, '2021-01-19 12:39:44', '2021-01-19 12:39:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`no_hp_pembeli`, `id_user`, `nama_lengkap`, `username`, `password`, `alamat`, `poto`, `created_at`, `updated_at`) VALUES
('085390719305', 9, 'Sheries Meylian', 'sheries', 'sheries', 'Jl. Rahadi Usman Desa Sungai PelangRT. 006 RW. 003', '1611028861tFDUL.jpg', '2021-01-19 12:01:01', '2021-01-19 12:01:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjual`
--

INSERT INTO `penjual` (`no_hp`, `id_user`, `nama_lengkap`, `nama_toko`, `username`, `password`, `poto`, `alamat`, `created_at`, `updated_at`) VALUES
('081295153234', 8, 'Putri Meylina Lilian', 'Rumah Roti', 'ptrmyllln', 'ptrmyllln', '16110273674hqwN.jpeg', 'Jl. Rahadi Usman Desa Sungai Jawi RT. 006 RW. 003', '2021-01-19 11:36:07', '2021-01-19 11:36:07'),
('0812951532342', 13, 'Wiwik Anggraini', 'Wiwik Store Bakery', 'wiwik', 'wiwik', '1611031878jwf24.jpeg', 'Jl. Rahadi Usman Desa Sungai Pelang RT. 006 RW. 003', '2021-01-19 12:51:18', '2021-01-19 12:51:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `no_hp_penjual`, `username_penjual`, `nama_produk`, `ukuran`, `harga`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(3, '081295153234', 'ptrmyllln', 'Pie Strawberry', 'Sedang', '15000', 20, '161102768079WFi.jpg', '2021-01-19 11:41:20', '2021-01-19 11:41:20'),
(4, '081295153234', 'ptrmyllln', 'Pie Blueberry', 'Sedang', '20000', 30, '1611027973Afgw1.jpg', '2021-01-19 11:46:13', '2021-01-19 11:46:13'),
(5, '081295153234', 'ptrmyllln', 'Croissant', 'Sedang', '17000', 17, '1611028152CogiX.jpg', '2021-01-19 11:49:12', '2021-01-19 11:49:12'),
(6, '081295153234', 'ptrmyllln', 'Baguette', 'Besar', '25000', 12, '1611028756igWfq.jpg', '2021-01-19 11:59:16', '2021-01-19 11:59:16'),
(7, '0812951532342', 'wiwik', 'Roti Enak', 'Kecil', '5000', 129, '16110319414Ka6b.jpg', '2021-01-19 12:52:21', '2021-01-19 05:09:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(6) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '$2y$10$UzEKEsS/cCQkCtrOh9/cD.GkcrwvqMc0OyLgFYMb0LmBTqwQfINuu', 1, NULL, '2021-01-17 10:58:57', '2021-01-17 10:58:57'),
(8, 'ptrmyllln', 'Putri Meylina Lilian', '$2y$10$49Lihjvnv0UGgIsFBu9fTOHWtXQz6IkxuVttENCWeRMAsvX79/G62', 2, NULL, '2021-01-19 11:36:07', '2021-01-19 11:36:07'),
(9, 'sheries', 'Sheries Meylian', '$2y$10$e7HVR29ynJY2nj55BmVqC.srlUNx9ImK9BmYV94UrhqM80r06fRpu', 3, NULL, '2021-01-19 12:01:01', '2021-01-19 12:01:01'),
(13, 'wiwik', 'Wiwik Anggraini', '$2y$10$UV4JHhEEl61.BtjtnWpQHumRkHn0C5Qwbga/skI6HxrpCK4nuR1R.', 2, NULL, '2021-01-19 12:51:18', '2021-01-19 12:51:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`no_hp_pembeli`);

--
-- Indeks untuk tabel `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`no_hp`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
