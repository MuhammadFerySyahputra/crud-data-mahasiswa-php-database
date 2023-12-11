-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Des 2023 pada 23.59
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_tb`
--

CREATE TABLE `mhs_tb` (
  `id_mhs` int NOT NULL,
  `npm` varchar(15) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `mhs_tb`
--

INSERT INTO `mhs_tb` (`id_mhs`, `npm`, `nama_mhs`, `alamat`) VALUES
(1, '51421616', 'MUHAMMAD FERY SYAHPUTRA', 'JALAN JALAN'),
(3, '51481323', 'daad', 'jalanin aja'),
(24213, '51128461', 'ahmad', 'jalan rin'),
(24215, '11552231', 'dea maharahi', 'jakarta utara');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mhs_tb`
--
ALTER TABLE `mhs_tb`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mhs_tb`
--
ALTER TABLE `mhs_tb`
  MODIFY `id_mhs` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24218;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
