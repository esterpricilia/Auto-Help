-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2021 pada 14.34
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingsosmed`
--

CREATE TABLE `postingsosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `postingsosmed`
--

INSERT INTO `postingsosmed` (`id`, `name`, `keterangan`, `image`) VALUES
(27, 'car8', 'Auto Help', 'car8.jfif'),
(29, 'car10', 'Maria', 'car10.jfif'),
(30, 'car11', 'Grup wa: 081234567890', 'car11.jfif'),
(31, 'car12', 'Sosial Media Otomotif', 'car12.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `name`, `image`, `keterangan`) VALUES
(1, 'KJS Motor – Spesialis Bengkel Mesin & Transmisi Mobil Jakarta', 'bengkel-mobil-jakarta-kjs-motor.jpg', 'Cengkareng, Jakarta Barat'),
(2, 'Bengkel Mobil BOS Kedoya', 'bengkel-mobil-jakarta-bengkel-bos.jpg', 'Kb.Jeruk, Jakarta Barat'),
(3, 'Dokter Mobil – Bengkel Service AC & Tune Up Mobil', 'bengkel-mobil-jakarta-dokter-mobil.jpg', 'Kelapa Gading, Jakarta Barat'),
(4, 'VARIA 2000 ( Auto Car Workshop )', 'bengkel-mobil-jakarta-varia-2000.jpg', 'Cengkareng, Jakarta Barat'),
(5, 'Kudamas Autoindo', 'bengkel-mobil-jakarta-kudamas-resepsionis.jpg', 'Tj. Priok, Jakarta Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'maria', '263bce650e68ab4e23f28263760b9fa5', 'maria'),
(2, 'nathan', '1404834e52a4c6cac9444f1fb3c62d3c', 'nathan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `postingsosmed`
--
ALTER TABLE `postingsosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `postingsosmed`
--
ALTER TABLE `postingsosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
