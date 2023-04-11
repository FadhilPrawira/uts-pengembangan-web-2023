-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2023 pada 18.01
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
  `level_fadhil` int(1) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_fadhil`
--

INSERT INTO `user_fadhil` (`id_fadhil`, `nama_fadhil`, `username_fadhil`, `password_fadhil`, `level_fadhil`, `last_login`) VALUES
(5, 'ALIF RAHMAT', 'alifrahmat', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 2, '2023-04-10 15:23:56'),
(6, 'FADHIL PRAWIRA', 'fadhilprawira', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30', 2, '2023-04-10 15:24:17'),
(7, 'Marwan', 'marwan_elektro', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 0, '2023-04-10 15:23:47'),
(8, 'Maman Somantri', 'mmsomantri', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 1, '2023-04-10 15:23:31'),
(9, 'Yosua Alvin', 'yosua', '5e96ee8f9c9efe8b0c7dc16098436c8b4a58d753', 1, '2023-04-10 15:25:05'),
(10, 'Aghus Sofwan', 'aghuss', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 1, '2023-04-10 15:26:44'),
(12, 'M. Arfan', 'marfan', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30', 1, '2023-04-10 15:41:01'),
(15, 'Arya brama', 'pace', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 2, '2023-04-10 16:01:24');

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
  MODIFY `id_fadhil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
