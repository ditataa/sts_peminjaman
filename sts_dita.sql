-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Mar 2024 pada 14.24
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sts_dita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` varchar(15) NOT NULL,
  `kode_barang` varchar(225) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `merk` varchar(225) NOT NULL,
  `jumlah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `kategori`, `merk`, `jumlah`) VALUES
('02345', '123', 'Baju Tari A', 'Baju ', '-', '2'),
('06789', '16', 'Baju Adat A', 'Baju&Celana', '-', '2'),
('12241', '9', 'Baju Tari B', 'Baju', '-', '6'),
('12445', '12', 'Baju Adat C', 'Baju&Celana', '-', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` varchar(15) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `no_identitas` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `kode_barang` varchar(225) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `jumlah` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tgl_peminjaman`, `tgl_kembali`, `no_identitas`, `nama`, `kode_barang`, `nama_barang`, `jumlah`) VALUES
('0345', '2023-05-21', '2023-05-30', '0072213', 'Siti', '13', 'Baju Tari A', 3),
('3467', '2022-01-03', '2022-01-20', '0689456', 'Afifah', '9', 'Baju Tari B', 6),
('3791', '2024-04-05', '2024-04-16', '0038325', 'Yanti', '11', 'Baju Adat A', 6),
('9721', '2024-03-21', '2024-03-30', '0047115', 'Yanto', '12', 'Baju Adat C', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `no_identitas` varchar(225) DEFAULT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `role` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `no_identitas`, `nama`, `status`, `username`, `password`, `role`) VALUES
(1345, '0047115', 'Yanto', 'Guru', 'yantoo', '2c89109d42178de8a367c0228f169bf8', 'user'),
(1999, '0038325', 'Yanti', 'Guru', 'yantii', '3bf55bbad370a8fcad1d09b005e278c2', 'user'),
(2350, '0689456', 'Afifah', 'Pelajar', 'afifahh', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(3745, '0072213', 'Siti', 'Pelajar', 'sitii', '3a029f04d76d32e79367c4b3255dda4d', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
