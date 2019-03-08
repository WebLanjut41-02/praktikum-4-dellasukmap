-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2019 pada 05.32
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbimbel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL,
  `alamat_sekolah` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `asal_sekolah`, `alamat_sekolah`, `jurusan`, `email`) VALUES
(1, 'dela', 'purworejo', '2019-03-04', 'sukapura', 'sma 6 purworejo', 'purworejo', '12ipa', 'dellla@gmail.com'),
(3, 'fiya', 'bogor', '2019-03-08', 'stelkom', 'sam bogor', 'bogor', '12bahasa', 'fiya@gmail.com'),
(4, 'farel', 'vgf', '2019-03-08', 'sddfc', 'sdf', 'sdf', '12ipa', 'dfdf'),
(5, 'ucup', 'zxcz', '2019-03-07', 'xcz', 'cxz', 'xc', '12ips', 'zxc'),
(6, 'budi', 'xcvc', '2019-03-04', 'vcx', 'gh', 'adf', '12ipa', 'njhj'),
(7, 'fbhgbh', 'fgdf', '2019-03-08', 'f', 'fg', 'k', '12ips', 'sdsd'),
(8, 'yusuf', 'sdf', '2019-03-08', 'fd', 'df', 'd', '12ips', 'dgf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
