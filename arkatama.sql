-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2022 pada 06.33
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkatama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel`
--

CREATE TABLE `tabel` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `usia` int(11) NOT NULL,
  `kota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel`
--

INSERT INTO `tabel` (`id`, `nama`, `usia`, `kota`) VALUES
(38, 'Asep Saefuddin', 22, 'Cirebon'),
(39, 'STMIK IKMI CIREBON', 22, 'Cirebon'),
(40, 'Arkatama', 4, 'Malang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel`
--
ALTER TABLE `tabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel`
--
ALTER TABLE `tabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
