-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2025 pada 05.39
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwd_billa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `filosofi`
--

CREATE TABLE `filosofi` (
  `id_filosofi` int(11) NOT NULL,
  `judul_filosofi` varchar(180) NOT NULL,
  `deskripsi_filosofi` text NOT NULL,
  `tanggal_disahkan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `filosofi`
--

INSERT INTO `filosofi` (`id_filosofi`, `judul_filosofi`, `deskripsi_filosofi`, `tanggal_disahkan`) VALUES
(12, 'VISI', 'seryherd6ym sjen46jyqw234asebrty  saertygesryghseryhgsdyrghs n serdyhgseyryghseed  ersyhseyryhseyrh rfyhseryhesryhseyhseryhsedrh  seedryhgseryghsedryhsrsyhdrhserhs', '2025-12-30'),
(13, 'Ea aut quos provident est facere omnis quo consequat Sint magna rerum ut ab', 'Tempor tempore consequat Quo recusandae LaboreEa aut quos provident est facere omnis quo consequat Sint magna rEa aut quos provident est facere omnis quo consequat Sint magna rEa aut quos provident est facere omnis quo consequat Sint magna r', '2018-02-14'),
(14, 'VISI', 'Ea aut quos provident est facere omnis quo consequat Sint magna rEa aut quos provident est facere omnis quo consequat Sint magna rEa aut quos provident est facere omnis quo consequat Sint magna r', '2025-12-30'),
(15, 'Ea aut quos provident est facere omnis quo consequat Sint magna r', 'Ea aut quos provident est facere omnis quo consequat Sint magna rEa aut quos provident est facere omnis quo consequat Sint magna rEa aut quos provident est facere omnis quo consequat Sint magna r', '2025-12-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$y916pEcnHh.kd9MM0Qm8H.7j9jOEhjvfJYfWlS/F.NhXq.N2dJRoi', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `filosofi`
--
ALTER TABLE `filosofi`
  ADD PRIMARY KEY (`id_filosofi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `filosofi`
--
ALTER TABLE `filosofi`
  MODIFY `id_filosofi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
