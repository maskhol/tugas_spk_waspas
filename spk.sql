-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2022 pada 18.59
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_alternatif`
--

CREATE TABLE `tabel_alternatif` (
  `id_alternatif` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_desa` int(11) NOT NULL,
  `tinggi_lokasi` int(11) NOT NULL,
  `luas_sawah` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_alternatif`
--

-- INSERT INTO `tabel_alternatif` (`id_alternatif`, `nama`, `c1`, `c2`, `c3`, `c4`) VALUES
-- (1, 'Bukit Hijau', 5, 4, 6, 4),
-- (2, 'Jaya Abadi', 4, 6, 6, 4),
-- (3, 'Karya Tani', 4, 4, 6, 4),
-- (4, 'Seruni', 5, 5, 6, 3),
-- (5, 'Tekad', 4, 5, 6, 5),
-- (6, 'KWT Nusa Indah', 2, 2, 4, 3),
-- (7, 'Malta Jaya', 4, 4, 6, 4),
-- (8, 'Huyulali', 3, 3, 6, 4),
-- (9, 'Sumber Rezeki A', 4, 4, 6, 4),
-- (10, 'Kayu Putih', 3, 3, 4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_bobot`
--

CREATE TABLE `tabel_bobot` (
  `id_bobot` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `w1` double NOT NULL,
  `w2` double NOT NULL,
  `w3` double NOT NULL,
  `w4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id_bobot`, `w1`, `w2`, `w3`, `w4`) VALUES
(1, 0.35, 0.15, 0.3, 0.2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_alternatif`
--
-- ALTER TABLE `tabel_alternatif`
--   ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tabel_bobot`
--
-- ALTER TABLE `tabel_bobot`
--   ADD PRIMARY KEY (`id_bobot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_alternatif`
--
-- ALTER TABLE `tabel_alternatif`
--   MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_bobot`
--
-- ALTER TABLE `tabel_bobot`
--   MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
