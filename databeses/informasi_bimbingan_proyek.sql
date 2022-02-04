-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2022 pada 03.07
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `dos_id` int(11) NOT NULL,
  `mhs_id` int(11) NOT NULL,
  `NIK` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tanda_tangan_digital` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `dos_id`, `mhs_id`, `NIK`, `name`, `email`, `tanda_tangan_digital`) VALUES
(3, 12, 0, '103.75.056', 'Dini Hamidin, S.Si.,MBA., M.T.', 'dinihamidin@poltekpos.ac.id', 'Tanda Tangan Dini Hamidin, S.Si.,MBA., M.T.png'),
(4, 13, 0, '103.82.070', 'Muhammad Ruslan Maulani, S.Kom., MT.', 'ruslanmaulani@poltekpos.ac.id', 'Tanda Tangan Muhammad Ruslan Maulani, S.Kom., MT.png'),
(5, 14, 0, '105.76.082', 'Iwan Setiawan, ST., M.T.', 'iwansetiawan@poltekpos.ac.id', 'Tanda Tangan Iwan Setiawan, ST., M.T.png'),
(6, 15, 0, '103.79.068', 'Marwanto Rahmatuloh, S.T., M.T.', 'mrahmatuloh@poltekpos.ac.id ', 'Tanda Tangan Marwanto Rahmatuloh, S.T., M.T.png'),
(8, 17, 0, '102.64.040', 'Santoso, S.Kom., M.Kom.', 'santoso@poltekpos.ac.id', 'Tanda Tangan Santoso, S.Kom., M.Kom.png'),
(9, 18, 0, '102.73.044', 'Supriady, S.T., M.T.', 'supriady@poltekpos.ac.id', 'Tanda Tangan Supriady, S.T., M.T.png'),
(10, 19, 0, '104.79.072', 'Widia Resdiana, S.S., M.Pd.', 'widiaresdiana@poltekpos.ac.id ', 'Tanda Tangan Widia Resdiana, S.S., M.Pd.png'),
(13, 20, 0, '102.73.041', 'Saepudin Nirwan, S.Kom., M.Kom.', 'nirwansaepudin@poltekpos.ac.id ', 'Tanda Tangan Saepudin Nirwan, S.Kom., M.Kom.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_bimbingan`
--

CREATE TABLE `berkas_bimbingan` (
  `id` int(11) NOT NULL,
  `berkas_bimbingan_id` int(11) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `materi` varchar(128) NOT NULL,
  `paraf_dosen` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas_bimbingan`
--

INSERT INTO `berkas_bimbingan` (`id`, `berkas_bimbingan_id`, `tanggal`, `materi`, `paraf_dosen`) VALUES
(56, 21, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id` int(11) NOT NULL,
  `dos_id` int(11) NOT NULL,
  `mhs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bimbingan`
--

INSERT INTO `bimbingan` (`id`, `dos_id`, `mhs_id`) VALUES
(50, 19, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Belum terkumpul'),
(2, 'Sudah terkumpul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_proposal`
--

CREATE TABLE `status_proposal` (
  `id` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_proposal`
--

INSERT INTO `status_proposal` (`id`, `status`) VALUES
(1, 'Belum terkumpul'),
(2, 'Sudah terkumpul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_surat`
--

CREATE TABLE `status_surat` (
  `id` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_surat`
--

INSERT INTO `status_surat` (`id`, `status`) VALUES
(1, 'Telah di setujui sidang'),
(2, 'Belum di stujui sidang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `mhs_id` int(11) NOT NULL,
  `dos_id` int(11) NOT NULL,
  `NIK` varchar(128) NOT NULL,
  `tanda_tangan` varchar(128) NOT NULL,
  `status_surat_id` int(2) NOT NULL,
  `data_id` int(11) NOT NULL,
  `name_mhs_1` varchar(128) NOT NULL,
  `npm_mhs_1` varchar(128) NOT NULL,
  `name_mhs_2` varchar(128) NOT NULL,
  `npm_mhs_2` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  `name_cor` varchar(128) NOT NULL,
  `email_cor` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `role_id`, `user_id`, `mhs_id`, `dos_id`, `NIK`, `tanda_tangan`, `status_surat_id`, `data_id`, `name_mhs_1`, `npm_mhs_1`, `name_mhs_2`, `npm_mhs_2`, `kelas`, `password`, `date_created`, `name_cor`, `email_cor`) VALUES
(18, 1, 'koordinator', 0, 0, '105.76.082', '', 0, 4, '', '', '', '', '', '$2y$10$IADRxvZ7AM9Rx1FC6ZqHguuUJIp7I39L5QyAIeP6Njolu8Vv/G4WK', 1641187637, 'Marwanto Rahmatuloh, S.T., M.T.', 'mrahmatuloh@poltekpos.ac.id '),
(31, 2, '103.75.056', 0, 12, '', '', 0, 12, '', '', '', '', '', '$2y$10$9GK.AlGuSb2OlckeqLX8m.q8wd1L2grc58I/PmSPWi.JbMnvRaUSS', 1643018246, '', ''),
(34, 2, '103.82.070', 0, 13, '', '', 0, 13, '', '', '', '', '', '$2y$10$gyjgdsxFjVSm4x4AoaotkOQEG3sqxdvx4YdzSA3KCilNW.CnhJWgu', 1643294218, '', ''),
(35, 2, '105.76.082', 0, 14, '', '', 0, 14, '', '', '', '', '', '$2y$10$2jtTMy6JOqdjyy6VCudg7OsICpSB/gPKDJEWEsawRgyAmZeDzzQzW', 1643294367, '', ''),
(36, 2, '103.79.068', 0, 15, '', '', 0, 15, '', '', '', '', '', '$2y$10$m8VcldQo6gtgk5boy7iy8eBfBcun7LMYxVTUk5dYoA6U6Ug4iqXku', 1643294434, '', ''),
(38, 2, '102.64.040', 0, 17, '', '', 0, 17, '', '', '', '', '', '$2y$10$soTcFAdjgHjSgnUsjLz/uedIE9oa8LkyUuRn4IdIHSLXjRqdllDxe', 1643294549, '', ''),
(39, 2, '102.73.044', 0, 18, '', '', 0, 18, '', '', '', '', '', '$2y$10$KHG7iBebLDy0p/G6s7dFlOT19zhzK6iO23kkDTA/REZC6GrV4MO2K', 1643294695, '', ''),
(40, 2, '104.79.072', 0, 19, '', '', 0, 19, '', '', '', '', '', '$2y$10$r6VD0y.Ew9fbEwOhhd3Y2Oo2XazKPBCvAGM0vd5m3JS45ZMzze.s.', 1643294788, '', ''),
(44, 2, '102.73.041', 0, 20, '', '', 0, 20, '', '', '', '', '', '$2y$10$EjLzVBC0LtWFlcDGyb/RJ.z0aN33QXzE0.d9MRSS8piaKwHLvlY7.', 1643350182, '', ''),
(47, 3, 'Razor01', 21, 0, '', 'Tanda Tangan Widia Resdiana, S.S., M.Pd.png', 1, 21, 'Aldo Dwie Rizky', '1193005', 'Raihan Malikul Mulki', '1193025', 'D3 Teknik Informatika 3A', '$2y$10$2pXKB6LIpSndtOdfeUu9furIIWPg8YsaTC0HJ5ID6Xq2MGg52gpZm', 1643352173, '', '');

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
(2, 1, 0),
(3, 1, 0),
(5, 1, 14),
(6, 1, 16),
(7, 1, 17),
(8, 2, 2),
(9, 2, 8),
(10, 2, 12),
(11, 2, 0),
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
  `judul_proyek` varchar(500) NOT NULL,
  `keterangan_judul` varchar(128) NOT NULL,
  `katagori_proyek` varchar(128) NOT NULL,
  `proposal_proyek` varchar(500) NOT NULL,
  `laporan_proyek` varchar(500) NOT NULL,
  `status_laporan_id` int(2) NOT NULL,
  `status_proposal_id` int(2) NOT NULL,
  `berkas_bimbingan_id` varchar(128) NOT NULL,
  `surat_izin_sidang` varchar(128) NOT NULL,
  `tanggal_pengumpulan_proposal` varchar(128) NOT NULL,
  `data_id` int(11) NOT NULL,
  `cor_id` int(11) NOT NULL,
  `tanggal_pengumpulan_laporan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`id`, `judul_proyek`, `keterangan_judul`, `katagori_proyek`, `proposal_proyek`, `laporan_proyek`, `status_laporan_id`, `status_proposal_id`, `berkas_bimbingan_id`, `surat_izin_sidang`, `tanggal_pengumpulan_proposal`, `data_id`, `cor_id`, `tanggal_pengumpulan_laporan`) VALUES
(17, '', '', '', '', '', 0, 0, '', '', '04-February-2022', 4, 1, ''),
(32, 'Rancang Bangun Aplikasi Pengumpulan Proposal dan Pembagian Dosen Pembimbing Proyek Berbasis Website', ' aplikasi informasi bimbingan ', 'Proyek 2', 'Proposal_Proyek_II_-_1193005_Aldo_Dwie_Rizky_-_1193025_Raihan_Malikul_Mulki2.docx', 'new_Laporan_Proyek_1_Aplikasi_laundryBerbasis_Web_.docx', 2, 2, '21', '', '', 21, 1, NULL);

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
(27, 8, 'Informasi Bimbingan ', 'dosen/informasi_bimbingan_proyek', 1, 'fa fa-fw fa-info'),
(28, 9, 'Informasi Bimbingan ', 'mahasiswa/informasi_bimbingan_proyek', 1, 'fa fa-fw fa-info'),
(29, 8, 'Presensi Bimbingan Proyek', 'dosen/persensi_bimbingan_proyek', 1, 'far fa-fw fa-calendar-check'),
(30, 9, 'Presensi Bimbingan Proyek', 'mahasiswa/Persensi_Bimbingan_Proyek', 1, 'far fa-fw fa-calendar-check'),
(31, 10, 'Proposal', 'cordinator/proposal', 1, 'fas fa-fw fa-align-center'),
(32, 11, 'Proposal', 'mahasiswa/proposal', 1, 'fas fa-fw fa-align-center'),
(33, 10, 'Laporan', 'cordinator/laporan', 1, 'fas fa-fw fa-align-justify'),
(34, 11, 'Laporan', 'mahasiswa/laporan', 1, 'fas fa-fw fa-align-justify'),
(35, 12, 'Surat Izin Sidang', 'dosen/surat_izin_sidang', 1, 'far fa-fw fa-envelope'),
(36, 13, 'Surat Izin Sidang', 'mahasiswa/surat_izin_sidang', 1, 'far fa-fw fa-envelope'),
(37, 14, 'Informasi Dosen ', 'cordinator/informasi_dosen_pembimbing', 1, 'fa fa-fw fa-info'),
(38, 14, 'Informasi Mahasiswa ', 'cordinator/informasi_mahasiswa_pembimbing', 1, 'far fa-fw fa-user-circle'),
(39, 14, 'Pembagian Pembimbing', 'cordinator/pembagian_pembimbing', 1, 'fas fa-fw fa-cubes'),
(40, 15, 'Form Penilaian', 'dosen/form_penilayan', 1, 'fas fa-fw fa-table'),
(41, 16, 'Proposal', 'cordinator/Proposal_hasil', 1, 'fas fa-fw fa-align-center'),
(42, 16, 'Laporan', 'cordinator/laporan_hasil', 1, 'fas fa-fw fa-align-justify'),
(44, 16, 'Presensi Bimbingan', 'cordinator/persensi_bimbingan', 1, 'far fa-fw fa-calendar-check'),
(45, 16, 'setujui sidang', 'cordinator/setujui_sidang', 1, 'far fa-fw fa-envelope-open'),
(46, 17, 'My Profile', 'cordinator/my_profile', 1, 'far fa-fw fa-user'),
(47, 18, 'My Profile', 'dosen/my_profile', 1, 'far fa-fw fa-user'),
(48, 19, 'My Profile', 'mahasiswa/my_profile', 1, 'far fa-fw fa-user'),
(49, 17, 'Edit Profile', 'cordinator/edit_profile', 1, 'far fa-fw fa-address-card'),
(53, 18, 'Edit Profile', 'dosen/edit_profile', 1, 'far fa-fw fa-address-card'),
(54, 19, 'Edit Profile', 'mahasiswa/edit_profile', 1, 'far fa-fw fa-address-card');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_proposal`
--
ALTER TABLE `status_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_surat`
--
ALTER TABLE `status_surat`
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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `status_proposal`
--
ALTER TABLE `status_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `status_surat`
--
ALTER TABLE `status_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
