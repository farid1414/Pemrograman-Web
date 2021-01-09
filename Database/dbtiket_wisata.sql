-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2021 pada 10.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtiket_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tiket`
--

CREATE TABLE `data_tiket` (
  `id` int(100) NOT NULL,
  `nama_pesan` varchar(666) DEFAULT NULL,
  `nik` int(100) DEFAULT NULL,
  `email_pesan` varchar(255) DEFAULT NULL,
  `jml` int(100) DEFAULT NULL,
  `objek_wisata` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_tiket`
--

INSERT INTO `data_tiket` (`id`, `nama_pesan`, `nik`, `email_pesan`, `jml`, `objek_wisata`) VALUES
(3, 'ahmad jafar', 2147483647, '0', 4, 'candi borobudur'),
(4, 'ahmad jafar', 2147483647, 'faridputra2205@gmail.com', 3, 'candi borobudur'),
(5, 'ahmad jafar', 2147483647, 'faridputra2205@gmail.com', 3, 'candi borobudur'),
(6, 'ahmad jafar', 2147483647, 'faridputra2205@gmail.com', 3, 'candi borobudur'),
(7, 'ahmad jafar', 2147483647, 'faridputra2205@gmail.com', 3, 'candi borobudur'),
(8, 'ahmad jafar', 2147483647, 'faridputra2205@gmail.com', 4, 'candi borobudur'),
(9, 'Jafar', 2147483647, 'jafar@gmail.com', 10, 'Pantai Kuta Bali'),
(10, 'M Farid ', 2147483647, 'Faridputra13@gmail.com', 3, 'Pura Tanah Lot');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wisata`
--

CREATE TABLE `data_wisata` (
  `id` int(100) NOT NULL,
  `nama_wisata` varchar(500) DEFAULT NULL,
  `gambar_wisata` varchar(500) DEFAULT NULL,
  `caption_wisata` text DEFAULT NULL,
  `alamat_wisata` text DEFAULT NULL,
  `tarif_wisata` varchar(300) DEFAULT NULL,
  `id_admin` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_wisata`
--

INSERT INTO `data_wisata` (`id`, `nama_wisata`, `gambar_wisata`, `caption_wisata`, `alamat_wisata`, `tarif_wisata`, `id_admin`) VALUES
(19, '   Candi Borobudur ', '5ff3502aed19b.jpg', '  Slah satu 7 keajaiban dunia ', '    Magelang', '   Rp 200.000', 1),
(21, '  Pantai Kuta Bali', '5ff4ade833b5a.jpg', '  Pantai kuta berada di bali indonesiba', '  Bali Indonedisa', '    Rp 200.000', 1),
(24, ' Pantai sendang biru', '5ff57cf17501f.jpg', ' memiliki pulau kecil  bernama sempu', ' Tambakrejo,Sumbermanjing Wetan. Malang', ' Rp 30.000', 2),
(25, 'Pantai 3 warna', '5ff57d7a6c497.jpg', 'Memiliki warna air yang berbeda beda', 'Tambakrejo,Sumbermanjing Wetan, Malang', 'Rp 30.000', 2),
(26, 'KBS Surabaya', '5ff57e0b959a1.jpg', 'Kebun Binatang Surabaya', 'Surabaya ', 'Rp 15.000', 1),
(27, ' Pulau Bawean Gresik', '5ff57e73a1413.jpg', ' Pulau kecil berada  di Gresik', ' Kepulauan Bawean Gresik', ' Rp 300.000', 1),
(28, ' Kawah Ijen BWI', '5ff57f64ee7f9.jpg', ' dikenal dengan suhu ekstrim', ' Banyuwangi ', ' Rp 250.000', 1),
(29, 'Pura tanah lot', '5ff57fabd0239.jpg', 'Dikenal dengan adanya ular suci', 'Bali Indonedisa', 'Rp  60.000', 2),
(30, ' Patung GWK Bali', '5ff5808862490.jpg', '   Patung dewa wisnu dengan ukuran besar', '   Bali Indonedisa', '   Rp 50.000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(50) NOT NULL,
  `username_admin` varchar(666) DEFAULT NULL,
  `Nama_admin` varchar(666) DEFAULT NULL,
  `no_telpon` varchar(20) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `email_admin` varchar(250) DEFAULT NULL,
  `password_admin` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id`, `username_admin`, `Nama_admin`, `no_telpon`, `Alamat`, `email_admin`, `password_admin`) VALUES
(1, 'admin1', 'M Faridz Dwi Putra ', '085806048767', 'Kemendng Cerme Gresik', 'admin1@gmail.com', 'admin123'),
(2, 'admin2', 'Ahmad Jafar Ali', '081456738913', 'Lamongan', 'admin2@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi_user`
--

CREATE TABLE `registrasi_user` (
  `id` int(100) NOT NULL,
  `username` varchar(666) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasi_user`
--

INSERT INTO `registrasi_user` (`id`, `username`, `email`, `no_telp`, `foto`, `password`) VALUES
(1, 'biancha', 'faridputra2205@gmail.com', '085806048767', 'yt1.png', '$2y$10$cgVir/o2FcyueR6uEKZkC.CLrV6CsTTuIIIO8kDxrBxJIWs2QBTUW'),
(7, 'jakfar', 'jafar45@gmail.com', '085806048767', 'yt1.png', '$2y$10$5iOtwtX3zL5k95EJMJM4GObRTYGDxtQYQUp/k2fBdcLMtkZeRv61K'),
(8, 'farid', 'mochamad.19043@mhs.unesa.ac.id', '085806048767', 'aku.png', '$2y$10$RtlTaQn4u7TeBMGywjF.NOrOVJRsuvO68ak125o2CN.2gEDkBvPea'),
(9, 'ahmad jafar', 'jafar13@gmail.com', '085617845981', 'jakfar.png', '$2y$10$/AHUK.dVF00DHNK8ovdNZurQ4IxEHCGilC3fjxlx8bl4dmkJ4Y.1i');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_tiket`
--
ALTER TABLE `data_tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_wisata`
--
ALTER TABLE `data_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi_user`
--
ALTER TABLE `registrasi_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_tiket`
--
ALTER TABLE `data_tiket`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_wisata`
--
ALTER TABLE `data_wisata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `registrasi_user`
--
ALTER TABLE `registrasi_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_wisata`
--
ALTER TABLE `data_wisata`
  ADD CONSTRAINT `data_wisata_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `login_admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
