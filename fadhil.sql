-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2023 pada 10.52
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fadhil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_fadhil`
--

CREATE TABLE `user_fadhil` (
  `id_fadhil` int(3) NOT NULL,
  `nama_fadhil` varchar(50) NOT NULL,
  `username_fadhil` varchar(50) NOT NULL,
  `password_fadhil` varchar(255) NOT NULL,
  `level_fadhil` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_fadhil`
--

INSERT INTO `user_fadhil` (`id_fadhil`, `nama_fadhil`, `username_fadhil`, `password_fadhil`, `level_fadhil`) VALUES
(2, 'Arya ppp', 'pace', 'adcd7048512e64b48da55b027577886ee5a36350', 2),
(4, 'yosua alvin', 'yos', '123', 1),
(5, 'alif rah', 'ipsum', '123', 0),
(6, 'FADHIL PRAWIRA', 'fadhilp', 'adcd7048512e64b48da55b027577886ee5a36350', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user_fadhil`
--
ALTER TABLE `user_fadhil`
  ADD PRIMARY KEY (`id_fadhil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_fadhil`
--
ALTER TABLE `user_fadhil`
  MODIFY `id_fadhil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
