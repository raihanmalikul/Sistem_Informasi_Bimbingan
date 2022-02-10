-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2022 pada 04.31
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
  `no_telpon` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tanda_tangan_digital` varchar(128) NOT NULL,
  `research_interest` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `dos_id`, `mhs_id`, `NIK`, `name`, `no_telpon`, `email`, `tanda_tangan_digital`, `research_interest`) VALUES
(3, 12, 0, '103.75.056', 'Dini Hamidin, S.Si.,MBA., M.T.', '6281320490787', 'dinihamidin@poltekpos.ac.id ', 'Tanda Tangan Dini Hamidin, S.Si.,MBA., M.T.png', ''),
(4, 13, 0, '103.82.070', 'Muhammad Ruslan Maulani, S.Kom., MT.', '6281289065967', 'ruslanmaulani@poltekpos.ac.id', 'Tanda Tangan Muhammad Ruslan Maulani, S.Kom., MT.png', ''),
(5, 14, 0, '105.76.082', 'Iwan Setiawan, ST., M.T.', '6287821164262', 'iwansetiawan@poltekpos.ac.id', 'Tanda Tangan Iwan Setiawan, ST., M.T.png', ''),
(6, 15, 0, '103.79.068', 'Marwanto Rahmatuloh, S.T., M.T.', '6281221306116', 'mrahmatuloh@poltekpos.ac.id ', 'Tanda Tangan Marwanto Rahmatuloh, S.T., M.T.png', ''),
(8, 17, 0, '102.64.040', 'Santoso, S.Kom., M.Kom.', '6281314550006', 'santoso@poltekpos.ac.id ', 'Tanda Tangan Santoso, S.Kom., M.Kom.png', ''),
(9, 18, 0, '102.73.044', 'Supriady, S.T., M.T.', '6282120581473', 'supriady@poltekpos.ac.id ', 'Tanda Tangan Supriady, S.T., M.T.png', ''),
(10, 19, 0, '104.79.072', 'Widia Resdiana, S.S., M.Pd.', '6281802279837', 'widiaresdiana@poltekpos.ac.id', 'Tanda Tangan Widia Resdiana, S.S., M.Pd.png', ''),
(13, 20, 0, '102.73.041', 'Saepudin Nirwan, S.Kom., M.Kom.', '6281321977217', 'nirwansaepudin@poltekpos.ac.id', 'Tanda Tangan Saepudin Nirwan, S.Kom., M.Kom.png', '');

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
(60, 21, '', '', ''),
(61, 22, '', '', ''),
(62, 23, '', '', ''),
(63, 24, '', '', ''),
(64, 25, '', '', ''),
(65, 26, '', '', ''),
(66, 27, '', '', ''),
(67, 28, '', '', ''),
(68, 22, '11-February-2022', 'Bab 1', 'Tanda Tangan Muhammad Ruslan Maulani, S.Kom., MT.png'),
(69, 28, '16-February-2022', 'Bab 1', 'Tanda Tangan Muhammad Ruslan Maulani, S.Kom., MT.png');

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
(57, 19, 21),
(58, 13, 22),
(59, 15, 23),
(60, 19, 24),
(61, 20, 25),
(62, 14, 26),
(63, 18, 27),
(64, 13, 28);

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
(1, 'Belum disetujui'),
(2, 'Sudah disetujui');

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
  `tanggal_surat` varchar(128) NOT NULL,
  `persentase_laporan` varchar(128) NOT NULL,
  `persentase_apliksai` varchar(128) NOT NULL,
  `data_id` int(11) NOT NULL,
  `name_mhs_1` varchar(128) NOT NULL,
  `npm_mhs_1` varchar(128) NOT NULL,
  `name_mhs_2` varchar(128) NOT NULL,
  `npm_mhs_2` varchar(128) NOT NULL,
  `kelas_mhs_1` varchar(128) NOT NULL,
  `kelas_mhs_2` varchar(128) DEFAULT NULL,
  `no_telpon_mhs_1` varchar(128) NOT NULL,
  `no_telpon_mhs_2` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  `name_cor` varchar(128) NOT NULL,
  `email_cor` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `role_id`, `user_id`, `mhs_id`, `dos_id`, `NIK`, `tanda_tangan`, `status_surat_id`, `tanggal_surat`, `persentase_laporan`, `persentase_apliksai`, `data_id`, `name_mhs_1`, `npm_mhs_1`, `name_mhs_2`, `npm_mhs_2`, `kelas_mhs_1`, `kelas_mhs_2`, `no_telpon_mhs_1`, `no_telpon_mhs_2`, `password`, `date_created`, `name_cor`, `email_cor`) VALUES
(18, 1, 'koordinator', 0, 0, '105.76.082', '', 0, '', '', '', 4, '', '', '', '', '', '', '', '', '$2y$10$IADRxvZ7AM9Rx1FC6ZqHguuUJIp7I39L5QyAIeP6Njolu8Vv/G4WK', 1641187637, 'Marwanto Rahmatuloh, S.T., M.T.', 'mrahmatuloh@poltekpos.ac.id '),
(31, 2, '103.75.056', 0, 12, '', '', 0, '', '', '', 12, '', '', '', '', '', '', '', '', '$2y$10$8xi.HkBHhXcA0XLjvVJkQOz74cDy99bZIEtMaxADPEmjbhjhj5Ysq', 1643018246, '', ''),
(34, 2, '103.82.070', 0, 13, '', '', 0, '', '', '', 13, '', '', '', '', '', '', '', '', '$2y$10$gyjgdsxFjVSm4x4AoaotkOQEG3sqxdvx4YdzSA3KCilNW.CnhJWgu', 1643294218, '', ''),
(35, 2, '105.76.082', 0, 14, '', '', 0, '', '', '', 14, '', '', '', '', '', '', '', '', '$2y$10$2jtTMy6JOqdjyy6VCudg7OsICpSB/gPKDJEWEsawRgyAmZeDzzQzW', 1643294367, '', ''),
(36, 2, '103.79.068', 0, 15, '', '', 0, '', '', '', 15, '', '', '', '', '', '', '', '', '$2y$10$m8VcldQo6gtgk5boy7iy8eBfBcun7LMYxVTUk5dYoA6U6Ug4iqXku', 1643294434, '', ''),
(38, 2, '102.64.040', 0, 17, '', '', 0, '', '', '', 17, '', '', '', '', '', '', '', '', '$2y$10$soTcFAdjgHjSgnUsjLz/uedIE9oa8LkyUuRn4IdIHSLXjRqdllDxe', 1643294549, '', ''),
(39, 2, '102.73.044', 0, 18, '', '', 0, '', '', '', 18, '', '', '', '', '', '', '', '', '$2y$10$KHG7iBebLDy0p/G6s7dFlOT19zhzK6iO23kkDTA/REZC6GrV4MO2K', 1643294695, '', ''),
(40, 2, '104.79.072', 0, 19, '', '', 0, '', '', '', 19, '', '', '', '', '', '', '', '', '$2y$10$r6VD0y.Ew9fbEwOhhd3Y2Oo2XazKPBCvAGM0vd5m3JS45ZMzze.s.', 1643294788, '', ''),
(44, 2, '102.73.041', 0, 20, '', '', 0, '', '', '', 20, '', '', '', '', '', '', '', '', '$2y$10$EjLzVBC0LtWFlcDGyb/RJ.z0aN33QXzE0.d9MRSS8piaKwHLvlY7.', 1643350182, '', ''),
(49, 3, 'Razor01', 21, 0, '', 'Tanda Tangan Widia Resdiana, S.S., M.Pd.png', 2, '09-February-2022', '100', '100', 21, 'Aldo Dwie Rizky', '1193005', 'Raihan Malikul Mulki', '1193025', 'D3 Teknik Informatika 3A', 'D3 Teknik Informatika 3A', '28428642', '734424', '$2y$10$ZNIKJZP/d/buyTKjPU798.mgu4PVZbirDrhQRzdB2GHja1skfooxe', 1644273616, '', ''),
(50, 3, 'fiki01', 22, 0, '', 'Tanda Tangan Muhammad Ruslan Maulani, S.Kom., MT.png', 2, '', '', '', 22, 'Fiki Henizar', '1193011', 'Salsa Anisa Zakiyah Darojat', '1193027', 'D3 Teknik Informatika 3A', 'D3 Teknik Informatika 3A', '', '', '$2y$10$8wcyV4guzcz4IFtrfybWn.12mlJq4sz9nE9xNpg05.yXdqF3D347.', 1644273682, '', ''),
(51, 3, 'febri01', 23, 0, '', '', 1, '', '', '', 23, 'Febri Muhamad', '1193010', 'Nadia Rahma Rivai', '1193022', 'D3 Teknik Informatika 3A', 'D3 Teknik Informatika 3A', '', '', '$2y$10$urBZvNP2Jvnm8Hq3jm/AwOx9lE352oPKuqVBb2EnaQqYPesIEhq22', 1644273747, '', ''),
(52, 3, 'alisa01', 24, 0, '', '', 1, '', '', '', 24, 'Alissa Nina Munawaroh', '1193006', 'Mahfud Fauzi', '1193014', 'D3 Teknik Informatika 3A', 'D3 Teknik Informatika 3A', '', '', '$2y$10$cA4XqYWS3LAQsZ0LZRjy2eWb4.z03R45ksYcrNHySOhtw3hGUoPxq', 1644273806, '', ''),
(53, 3, 'ilahm01', 25, 0, '', '', 1, '', '', '', 25, 'Muhammad Ilham Ferdiansyah', '1193019', 'Muhammad Raihan Nur Azmii', '1193020', 'D3 Teknik Informatika 2A', 'D3 Teknik Informatika 2A', '', '', '$2y$10$dB8Uueh7pZ8BVP9SXfPrA.ZgdMU1BgaACcbiFnWQ2s7tF.YD9JQrK', 1644273929, '', ''),
(54, 3, 'aldo01', 26, 0, '', '', 1, '', '', '', 26, 'aldo', '119302573', '', '', 'D3 Teknik Informatika 2A', '', '', '', '$2y$10$qa5YwVrvHBcbQgxMxLp1U./AD/KRlAcvVOR1mb6LtcseEEwj8BDaq', 1644301463, '', ''),
(55, 3, 'raihan01', 27, 0, '', '', 1, '', '', '', 27, 'raihan malik', '11930255', '', '', 'D3 Teknik Informatika 2A', NULL, '', '', '$2y$10$VoHMthd2l9PS1quj0IeY.uxiApXnWBCCbemj/xyJKm1lZS6phXfki', 1644301881, '', ''),
(56, 3, 'dewisanti01', 28, 0, '', 'Tanda Tangan Muhammad Ruslan Maulani, S.Kom., MT.png', 2, '', '', '', 28, 'Dewi', '1193456', 'Santi', '11934526', 'D3 Teknik Informatika 2A', 'D3 Teknik Informatika 2B', '', '', '$2y$10$IKd0HGM.4ro9cswMKeJ8Le.LGBJp7clqBYfcPZLvZvXFLIxGwU0gq', 1644306049, '', '');

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
  `tanggal_pengumpulan_laporan` varchar(128) DEFAULT NULL,
  `batas_tanggal_bimbingan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`id`, `judul_proyek`, `keterangan_judul`, `katagori_proyek`, `proposal_proyek`, `laporan_proyek`, `status_laporan_id`, `status_proposal_id`, `berkas_bimbingan_id`, `surat_izin_sidang`, `tanggal_pengumpulan_proposal`, `data_id`, `cor_id`, `tanggal_pengumpulan_laporan`, `batas_tanggal_bimbingan`) VALUES
(17, '', '', '', '', '', 0, 0, '', '', '', 4, 1, '', ''),
(34, '', '', 'Proyek 2', '', '', 1, 1, '21', '', '', 21, 1, NULL, ''),
(35, '', '', 'Proyek 2', '', '', 1, 1, '22', '', '', 22, 1, NULL, ''),
(36, '', '', 'Proyek 2', '', '', 1, 1, '23', '', '', 23, 1, NULL, ''),
(37, '', '', 'Proyek 2', '', '', 1, 1, '24', '', '', 24, 1, NULL, ''),
(38, '', '', 'Proyek 2', '', '', 1, 1, '25', '', '', 25, 1, NULL, ''),
(39, '', '', 'Proyek 2', '', '', 1, 1, '26', '', '', 26, 1, NULL, ''),
(40, '', '', 'Proyek 2', '', '', 1, 1, '27', '', '', 27, 1, NULL, ''),
(41, 'Rancang Bangun Aplikasi Pengumpulan Proposal dan Pembagian Dosen Pembimbing Proyek Berbasis Website', ' aplikasi pengumpulan proposal dan pembagian dosen', 'Proyek 2', '006_Rekomendasi.pdf', '', 1, 2, '28', '', '', 28, 1, NULL, '');

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
(14, 'Data Master'),
(15, 'Penilaian'),
(16, 'Data Sub Master'),
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
(1, 'Koordinator'),
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
(38, 14, 'Informasi Mahasiswa ', 'cordinator/informasi_mahasiswa_pembimbing', 1, 'fas fa-fw fa-info-circle'),
(39, 16, 'Akun Mahasiswa ', 'cordinator/akun_mahasiswa', 1, 'far fa-fw fa-user-circle'),
(40, 14, 'Pembagian Pembimbing', 'cordinator/pembagian_pembimbing', 1, 'fas fa-fw fa-cubes'),
(41, 15, 'Form Penilaian', 'dosen/form_penilayan', 1, 'fas fa-fw fa-table'),
(42, 16, 'Proposal', 'cordinator/Proposal_hasil', 1, 'fas fa-fw fa-align-center'),
(44, 16, 'Laporan', 'cordinator/laporan_hasil', 1, 'fas fa-fw fa-align-justify'),
(45, 16, 'Presensi Bimbingan', 'cordinator/persensi_bimbingan', 1, 'far fa-fw fa-calendar-check'),
(46, 16, 'Persetujuan Sidang', 'cordinator/setujui_sidang', 1, 'far fa-fw fa-envelope-open'),
(47, 17, 'My Profile', 'cordinator/my_profile', 1, 'far fa-fw fa-user'),
(48, 18, 'My Profile', 'dosen/my_profile', 1, 'far fa-fw fa-user'),
(49, 19, 'My Profile', 'mahasiswa/my_profile', 1, 'far fa-fw fa-user'),
(53, 17, 'Edit Profile', 'cordinator/edit_profile', 1, 'far fa-fw fa-address-card'),
(54, 19, 'Edit Profile', 'dosen/edit_profile', 1, 'far fa-fw fa-address-card'),
(55, 19, 'Edit Profile', 'mahasiswa/edit_profile', 1, 'far fa-fw fa-address-card');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
