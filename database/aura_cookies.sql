-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 19 Feb 2024 pada 16.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aura_cookies`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `input_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(2, 'Budi', 'budi@gmail.com', 'Secara desain sudah bisa, tetapi sebaiknya dilakukan update secara berkala pada website agar lebih informatif ', '2023-12-18 03:05:51'),
(3, 'Delta', 'delta@yahoo.com', 'Tes saja ', '2023-12-18 03:06:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(3) NOT NULL,
  `nim` char(8) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(9) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `nim`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(3, '2120231', 'Alfa Tanggo', 'Perempuan', 'Jl. Jamin Ginting Medan'),
(4, '231234', '243234', 'Laki-laki', 'fsaf'),
(5, '2341234', 'Delta', 'Laki-laki', 'Medan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_kue` varchar(100) NOT NULL,
  `item_kue` int(5) NOT NULL,
  `harga_kue` int(11) NOT NULL,
  `total_kue` int(30) NOT NULL,
  `alamat_pembeli` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_kue`, `item_kue`, `harga_kue`, `total_kue`, `alamat_pembeli`) VALUES
(0, 'Bolu', 7, 34769, 45, 'bedagai'),
(1, 'coklat mede', 2, 135000, 270000, 'marelan'),
(2, 'Nastar', 4, 125000, 500000, 'Medan'),
(4, 'Kue coklat', 3, 20000, 1, 'Medan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `foto`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'roberto.kakaban@yahoo.com', 'c0e024d9200b5705bc4804722636378a', '1', '2023-12-13-2-15-06.png', '2023-12-18 08:59:58'),
(2, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin@local', '00f453a6842f1883ca3be7b31a6626f0', '1', '-', '2023-12-13 09:30:00'),
(3, 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', 'dsafsdf@sdgsg', 'f', NULL, '', '2023-12-13 10:23:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentar_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mahasiswa_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
