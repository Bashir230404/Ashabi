-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2022 pada 12.45
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baju`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah_pembelian`
--

CREATE TABLE `daerah_pembelian` (
  `id_daerah` int(11) NOT NULL,
  `daerah_pembelian` varchar(128) NOT NULL,
  `tahun` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daerah_pembelian`
--

INSERT INTO `daerah_pembelian` (`id_daerah`, `daerah_pembelian`, `tahun`) VALUES
(1, 'Bandung', 2004),
(2, 'Jakarta', 2019),
(3, 'Surabaya', 2022),
(4, 'Yogyakarta', 2017),
(5, 'Aceh', 2022),
(6, 'Medan', 2022),
(7, 'Cirebon', 2022),
(8, 'Bogor', 2020),
(9, 'Denpasar', 2019),
(10, 'Bekasi', 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kain`
--

CREATE TABLE `kain` (
  `id_kain` int(11) NOT NULL,
  `jenis_kain` varchar(128) NOT NULL,
  `id_warna` int(1) NOT NULL,
  `harga_kain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kain`
--

INSERT INTO `kain` (`id_kain`, `jenis_kain`, `id_warna`, `harga_kain`) VALUES
(1, 'kemanggi', 1, 30000),
(2, 'Sutra', 2, 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembelian`
--

CREATE TABLE `metode_pembelian` (
  `id` int(11) NOT NULL,
  `jenis_pembelian` varchar(128) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `metode_pembelian`
--

INSERT INTO `metode_pembelian` (`id`, `jenis_pembelian`, `id_daerah`, `id_pembelian`) VALUES
(1, 'Transfer', 1, 2),
(2, 'Cash On Delivery (COD)', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `motif`
--

CREATE TABLE `motif` (
  `id` int(11) NOT NULL,
  `nama_motif` varchar(64) NOT NULL,
  `harga_motif` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `motif`
--

INSERT INTO `motif` (`id`, `nama_motif`, `harga_motif`, `id_metode`) VALUES
(1, 'Motif Argyle', 3000, 1),
(2, 'Motif Batik', 5000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sablon`
--

CREATE TABLE `sablon` (
  `id` int(11) NOT NULL,
  `jenis_sablon` varchar(128) NOT NULL,
  `harga_sablon` int(11) NOT NULL,
  `id_motif` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sablon`
--

INSERT INTO `sablon` (`id`, `jenis_sablon`, `harga_sablon`, `id_motif`, `id_daerah`) VALUES
(1, 'Sablon DTG', 5000, 1, 1),
(2, 'Sablon Rubber', 5000, 2, 2),
(3, 'Sablon Plastisol', 6000, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna`
--

CREATE TABLE `warna` (
  `id` int(11) NOT NULL,
  `nama_warna` varchar(128) NOT NULL,
  `qty_stock` int(128) NOT NULL,
  `tahun` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warna`
--

INSERT INTO `warna` (`id`, `nama_warna`, `qty_stock`, `tahun`) VALUES
(1, 'merah muda', 2, 2017),
(2, 'hijau muda', 7, 2018),
(3, 'kuning', 6, 2019),
(4, 'biru', 1, 2022),
(5, 'coklat', 2, 2013);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daerah_pembelian`
--
ALTER TABLE `daerah_pembelian`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indeks untuk tabel `kain`
--
ALTER TABLE `kain`
  ADD PRIMARY KEY (`id_kain`),
  ADD KEY `FK_warna` (`id_warna`);

--
-- Indeks untuk tabel `metode_pembelian`
--
ALTER TABLE `metode_pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_daerah_pemeblian` (`id_daerah`);

--
-- Indeks untuk tabel `motif`
--
ALTER TABLE `motif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_metode` (`id_metode`);

--
-- Indeks untuk tabel `sablon`
--
ALTER TABLE `sablon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_motif` (`id_motif`),
  ADD KEY `FK_daerah_pembelian` (`id_daerah`);

--
-- Indeks untuk tabel `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daerah_pembelian`
--
ALTER TABLE `daerah_pembelian`
  MODIFY `id_daerah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kain`
--
ALTER TABLE `kain`
  MODIFY `id_kain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `motif`
--
ALTER TABLE `motif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sablon`
--
ALTER TABLE `sablon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `warna`
--
ALTER TABLE `warna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kain`
--
ALTER TABLE `kain`
  ADD CONSTRAINT `FK_warna` FOREIGN KEY (`id_warna`) REFERENCES `warna` (`id`);

--
-- Ketidakleluasaan untuk tabel `metode_pembelian`
--
ALTER TABLE `metode_pembelian`
  ADD CONSTRAINT `FK_daerah_pemeblian` FOREIGN KEY (`id_daerah`) REFERENCES `daerah_pembelian` (`id_daerah`);

--
-- Ketidakleluasaan untuk tabel `motif`
--
ALTER TABLE `motif`
  ADD CONSTRAINT `FK_metode` FOREIGN KEY (`id_metode`) REFERENCES `metode_pembelian` (`id`);

--
-- Ketidakleluasaan untuk tabel `sablon`
--
ALTER TABLE `sablon`
  ADD CONSTRAINT `FK_daerah_pembelian` FOREIGN KEY (`id_daerah`) REFERENCES `daerah_pembelian` (`id_daerah`),
  ADD CONSTRAINT `FK_motif` FOREIGN KEY (`id_motif`) REFERENCES `motif` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
