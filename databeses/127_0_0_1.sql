-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2022 pada 04.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `informasi_bimbingan_proyek`
--
CREATE DATABASE IF NOT EXISTS `informasi_bimbingan_proyek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `informasi_bimbingan_proyek`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_bimbingan`
--

CREATE TABLE `berkas_bimbingan` (
  `id` int(11) NOT NULL,
  `berkas_bimbingan_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `materi` varchar(128) NOT NULL,
  `paraf_dosen` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `data_id` int(11) DEFAULT NULL,
  `name_ds` varchar(128) DEFAULT NULL,
  `name_mhs_1` varchar(128) DEFAULT NULL,
  `npm_mhs_1` varchar(128) DEFAULT NULL,
  `name_mhs_2` varchar(128) DEFAULT NULL,
  `npm_mhs_2` varchar(128) DEFAULT NULL,
  `kelas` varchar(128) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `role_id`, `user_id`, `data_id`, `name_ds`, `name_mhs_1`, `npm_mhs_1`, `name_mhs_2`, `npm_mhs_2`, `kelas`, `password`, `date_created`) VALUES
(14, 3, 'Razor01', 1, NULL, 'aldo', '1193005', 'raihan', '1193025', 'D3 Teknik Informatika 2c', '$2y$10$VsSLMUkRe2HKWwVnRdL3OOMA8K9VpFCpCxiJypoGl5.S3O.0FNWKS', 1641112954),
(15, 3, 'Ilham01', 2, NULL, 'ilham', '1193019', 'azmi', '1193020', 'D3 Teknik Informatika 2A', '$2y$10$PLd2ZrF5fBMvGDQ5/p38lu.zwlpAxk2PNMUVQGEBhruyBxZ/Mu3hi', 1641187637),
(17, 2, 'dosen', 3, 'iwan', NULL, NULL, NULL, NULL, NULL, '$2y$10$PLd2ZrF5fBMvGDQ5/p38lu.zwlpAxk2PNMUVQGEBhruyBxZ/Mu3hi', 1641187637),
(18, 1, 'cordinator', 4, 'Admin', NULL, NULL, NULL, NULL, NULL, '$2y$10$PLd2ZrF5fBMvGDQ5/p38lu.zwlpAxk2PNMUVQGEBhruyBxZ/Mu3hi', 1641187637),
(19, 3, 'ferdx', 5, NULL, 'Muhammad Ilham Ferdiansyah', '1193019', 'Muhammad Raihan Nur Azmii', '1193020', 'D3 Teknik Informatika 2c', '$2y$10$gOTObg4rBlKsiPa85NlK6.I.bjnxfYAC6X29QWPKjFlflRLHpqbum', 1641783718);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 6),
(5, 1, 14),
(6, 1, 16),
(7, 1, 17),
(8, 2, 2),
(9, 2, 8),
(10, 2, 12),
(11, 2, 15),
(12, 2, 18),
(13, 3, 3),
(14, 3, 5),
(15, 3, 7),
(16, 3, 9),
(17, 3, 11),
(18, 3, 13),
(19, 3, 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `judul_proyek` varchar(128) DEFAULT NULL,
  `katagori_proyek` varchar(128) NOT NULL,
  `dosen_pembimbing` varchar(128) DEFAULT NULL,
  `proposal_proyek` varchar(128) DEFAULT NULL,
  `laporan_proyek` varchar(128) DEFAULT NULL,
  `berkas_bimbingan_id` varchar(128) DEFAULT NULL,
  `surat_izin_sidang` varchar(128) DEFAULT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`id`, `judul_proyek`, `katagori_proyek`, `dosen_pembimbing`, `proposal_proyek`, `laporan_proyek`, `berkas_bimbingan_id`, `surat_izin_sidang`, `data_id`) VALUES
(14, NULL, 'Proyek 2', NULL, NULL, NULL, NULL, NULL, 1),
(15, NULL, 'Proyek 1', NULL, NULL, NULL, NULL, NULL, 2),
(16, NULL, 'Proyek 1', NULL, NULL, NULL, NULL, NULL, 3),
(17, NULL, 'Proyek 2', NULL, NULL, NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'Dashboard'),
(3, 'Dashboard'),
(4, 'Pedoman'),
(5, 'Pedoman'),
(6, 'Template Laporan'),
(7, 'Template Laporan'),
(8, 'Bimbingan'),
(9, 'Bimbingan'),
(10, 'Form Pengumpulan'),
(11, 'Form Pengumpulan'),
(12, 'Izin Sidang'),
(13, 'Izin Sidang'),
(14, 'Pembimbing'),
(15, 'Penilaian'),
(16, 'Data Master'),
(17, 'Setting'),
(18, 'Setting'),
(19, 'Setting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Cordinator'),
(2, 'Dosen'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `is_active`, `icon`) VALUES
(20, 1, 'Home', 'cordinator', 1, 'fa fa-fw fa-user-circle'),
(21, 2, 'Home', 'dosen', 1, 'fa fa-fw fa-user-circle'),
(22, 3, 'Home', 'mahasiswa', 1, 'fa fa-fw fa-user-circle'),
(23, 4, 'Buku Pedoman', 'cordinator/buku_pedoman', 1, 'fas fa-fw fa-book'),
(24, 5, 'Buku Pedoman', 'mahasiswa/buku_pedoman', 1, 'fas fa-fw fa-book'),
(25, 6, 'Template Laporan Proyek', 'cordinator/templet_laporan_proyek', 1, 'far fa-fw fa-file-pdf'),
(26, 7, 'Template Laporan Proyek', 'mahasiswa/templet_laporan_proyek', 1, 'far fa-fw fa-file-pdf'),
(27, 8, 'Informasi Pembimbing ', 'dosen/informasi_bimbingan_proyek', 1, 'fa fa-fw fa-info'),
(28, 9, 'Informasi Pembimbing ', 'mahasiswa/informasi_bimbingan_proyek', 1, 'fa fa-fw fa-info'),
(29, 8, 'Presensi Bimbingan Proyek', 'dosen/persensi_bimbingan_proyek', 1, 'far fa-fw fa-calendar-check'),
(30, 9, 'Presensi Bimbingan Proyek', 'mahasiswa/Persensi_Bimbingan_Proyek', 1, 'far fa-fw fa-calendar-check'),
(31, 10, 'Proposal', 'cordinator/proposal', 1, 'fas fa-fw fa-align-center'),
(32, 11, 'Proposal', 'mahasiswa/proposal', 1, 'fas fa-fw fa-align-center'),
(33, 10, 'Laporan', 'cordinator/laporan', 1, 'fas fa-fw fa-align-justify'),
(34, 11, 'Laporan', 'mahasiswa/laporan', 1, 'fas fa-fw fa-align-justify'),
(35, 12, 'Surat Izin Sidang', 'dosen/surat_izin_sidang', 1, 'far fa-fw fa-envelope'),
(36, 13, 'Surat Izin Sidang', 'mahasiswa/surat_izin_sidang', 1, 'far fa-fw fa-envelope'),
(37, 14, 'Informasi Dosen ', 'cordinator/informasi_dosen_pembimbing', 1, 'fa fa-fw fa-info'),
(38, 14, 'Pembagian Pembimbing', 'cordinator/pembagian_pembimbing', 1, 'fas fa-fw fa-cubes'),
(39, 15, 'Form Penilaian', 'dosen/form_penilayan', 1, 'fas fa-fw fa-table'),
(40, 16, 'Proposal', 'cordinator/Proposal_hasil', 1, 'fas fa-fw fa-align-center'),
(41, 16, 'Laporan', 'cordinator/laporan_hasil', 1, 'fas fa-fw fa-align-justify'),
(42, 16, 'Presensi Bimbingan', 'cordinator/persensi_bimbingan', 1, 'far fa-fw fa-calendar-check'),
(43, 16, 'Nilai Mahasiswa', 'cordinator/nilai_mahasiswa', 1, 'fas fa-fw fa-table'),
(44, 17, 'My Profile', 'cordinator/my_profile', 1, 'far fa-fw fa-user'),
(45, 18, 'My Profile', 'dosen/my_profile', 1, 'far fa-fw fa-user'),
(46, 19, 'My Profile', 'mahasiswa/my_profile', 1, 'far fa-fw fa-user'),
(47, 17, 'Edit Profile', 'cordinator/edit_profile', 1, 'far fa-fw fa-address-card'),
(48, 18, 'Edit Profile', 'dosen/edit_profile', 1, 'far fa-fw fa-address-card'),
(49, 19, 'Edit Profile', 'mahasiswa/edit_profile', 1, 'far fa-fw fa-address-card');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
