-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 02:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
-- Table structure for table `admin`
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
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `dos_id`, `mhs_id`, `NIK`, `name`, `email`, `tanda_tangan_digital`) VALUES
(1, 1, 0, '103.79.06', 'Marwanto Rahmatuloh, S.T., M.T.', 'mrahmatuloh@poltekpos.ac.id ', 'Tanda Tangan Marwanto Rahmatuloh, S.T., M.T.png'),
(2, 10, 0, '102.73.041', 'Saepudin Nirwan, S.Kom., M.Kom.', 'nirwansaepudin@poltekpos.ac.id ', 'Tanda Tangan Saepudin Nirwan, S.Kom., M.Kom.png'),
(3, 12, 0, '103.75.056', 'Dini Hamidin, S.Si.,MBA., M.T.', 'dinihamidin@poltekpos.ac.id', 'Tanda Tangan Dini Hamidin, S.Si.,MBA., M.T.png');

-- --------------------------------------------------------

--
-- Table structure for table `berkas_bimbingan`
--

CREATE TABLE `berkas_bimbingan` (
  `id` int(11) NOT NULL,
  `berkas_bimbingan_id` int(11) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `materi` varchar(128) NOT NULL,
  `paraf_dosen` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas_bimbingan`
--

INSERT INTO `berkas_bimbingan` (`id`, `berkas_bimbingan_id`, `tanggal`, `materi`, `paraf_dosen`) VALUES
(19, 0, '', '', ''),
(20, 0, '', '', ''),
(21, 0, '', '', ''),
(23, 0, '', '', ''),
(24, 0, '', '', ''),
(25, 1, '20-January-2022', 'Revisi Bab 2', 'Tanda Tangan Marwanto Rahmatuloh, S.T., M.T.png'),
(26, 1, '17-January-2022', 'bab 3', 'Tanda Tangan Marwanto Rahmatuloh, S.T., M.T.png');

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id` int(11) NOT NULL,
  `dos_id` int(11) NOT NULL,
  `mhs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bimbingan`
--

INSERT INTO `bimbingan` (`id`, `dos_id`, `mhs_id`) VALUES
(15, 1, 1),
(16, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Belum terkumpul'),
(2, 'Sudah Terkumpul');

-- --------------------------------------------------------

--
-- Table structure for table `status_proposal`
--

CREATE TABLE `status_proposal` (
  `id` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_proposal`
--

INSERT INTO `status_proposal` (`id`, `status`) VALUES
(1, 'Belum terkumpul'),
(2, 'Sudah Terkumpul');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `mhs_id` int(11) NOT NULL,
  `dos_id` int(11) NOT NULL,
  `NIK` varchar(128) NOT NULL,
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `user_id`, `mhs_id`, `dos_id`, `NIK`, `data_id`, `name_mhs_1`, `npm_mhs_1`, `name_mhs_2`, `npm_mhs_2`, `kelas`, `password`, `date_created`, `name_cor`, `email_cor`) VALUES
(14, 3, 'Razor01', 1, 0, '', 1, 'Aldo', '1193025', 'Razor', '1193025', 'D3 Teknik Informatika 3c', '$2y$10$6lqSSKUkkJ9QfegJUKoHM.n/g/ZMvOqMnf5RK8yyxREapQkaoLWnK', 1641112954, '', ''),
(18, 1, '105.76.082', 0, 0, '105.76.082', 4, '', '', '', '', '', '$2y$10$IADRxvZ7AM9Rx1FC6ZqHguuUJIp7I39L5QyAIeP6Njolu8Vv/G4WK', 1641187637, 'Iwan Setiawan, ST., M.T.', 'iwansetiawan@poltekpos.ac.id'),
(26, 3, 'Ilham01', 9, 0, '', 9, 'ilham', '1193019', 'azmi', '1193020', 'D3 Teknik Informatika 2A', '$2y$10$O9WtwoC2ToQFZ.1KZKXKqO9OKu0Ll1sBXzEZAcKbR1We9/ysIwcE6', 1642904901, '', ''),
(27, 2, '103.79.068', 0, 1, '', 1, '', '', '', '', '', '$2y$10$L0e1MvEp0iyDLy/8erdDLeaow1mCo/cliD7OQPy68clH/U7D3Tpm6', 1642915775, '', ''),
(28, 2, '102.73.041', 0, 10, '', 10, '', '', '', '', '', '$2y$10$Co1VwnHDbPPpmc2A0sxtyuZ3fB/myaiRK8hlVAznWXbzwnPVM05DO', 1642921573, '', ''),
(30, 3, 'dedi01', 11, 0, '', 11, 'Mahfud Fauzi', '1193014', 'Dedi Kobotak', '1193008', 'D3 Teknik Informatika 2c', '$2y$10$ecKGiXKlLeibLoxwnqPNE.EPC7Ur5Q.nT3quMgXmqpVwT6HGQjizq', 1643016882, '', ''),
(31, 2, '103.75.056', 0, 12, '', 12, '', '', '', '', '', '$2y$10$9GK.AlGuSb2OlckeqLX8m.q8wd1L2grc58I/PmSPWi.JbMnvRaUSS', 1643018246, '', ''),
(32, 3, '12345', 13, 0, '', 13, 'andi', '141525', 'aldo', '214253', 'D3 Teknik Informatika 2b', '$2y$10$UZXPhsO8hestn1yiElc/3OlWcE7OYZ2mo.HlnE/74iDn0042NfKqa', 1643018492, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
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
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `judul_proyek` varchar(128) NOT NULL,
  `keterangan_judul` varchar(128) NOT NULL,
  `katagori_proyek` varchar(128) NOT NULL,
  `proposal_proyek` varchar(128) NOT NULL,
  `laporan_proyek` varchar(128) NOT NULL,
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
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `judul_proyek`, `keterangan_judul`, `katagori_proyek`, `proposal_proyek`, `laporan_proyek`, `status_laporan_id`, `status_proposal_id`, `berkas_bimbingan_id`, `surat_izin_sidang`, `tanggal_pengumpulan_proposal`, `data_id`, `cor_id`, `tanggal_pengumpulan_laporan`) VALUES
(14, 'Game ', 'dd', 'Proyek 2', 'Real_CV_Muhammad_Raihan_Nur_Azmii.docx', 'Pembuata_aplikasi_data_akademik_pada_android_studio.docx', 2, 1, '1', '', '', 1, 1, NULL),
(16, '', '', '', '', '', 0, 0, '', '', '', 3, 1, NULL),
(17, '', '', '', '', '', 0, 0, '', '', '04-February-2022', 4, 1, '26-January-2022'),
(23, '', '', '', '', '', 0, 0, '', '', '', 8, 1, NULL),
(24, '', '', 'Proyek 2', '', '', 1, 1, '9', '', '', 9, 1, NULL),
(25, '', '', 'Proyek 2', '', '', 1, 1, '11', '', '', 11, 1, NULL),
(26, 'Game aadjdajb', 'gud', 'Proyek 2', 'KAPSEL-API-Raihan_Malikul_Mulki.docx', '', 1, 2, '13', '', '', 13, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
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
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Cordinator'),
(2, 'Dosen'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
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
-- Dumping data for table `user_sub_menu`
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
(38, 14, 'Pembagian Pembimbing', 'cordinator/pembagian_pembimbing', 1, 'fas fa-fw fa-cubes'),
(39, 15, 'Form Penilaian', 'dosen/form_penilayan', 1, 'fas fa-fw fa-table'),
(40, 16, 'Proposal', 'cordinator/Proposal_hasil', 1, 'fas fa-fw fa-align-center'),
(41, 16, 'Laporan', 'cordinator/laporan_hasil', 1, 'fas fa-fw fa-align-justify'),
(42, 16, 'Presensi Bimbingan', 'cordinator/persensi_bimbingan', 1, 'far fa-fw fa-calendar-check'),
(43, 0, 'Nilai Mahasiswa', 'cordinator/nilai_mahasiswa', 1, 'fas fa-fw fa-table'),
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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_proposal`
--
ALTER TABLE `status_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_proposal`
--
ALTER TABLE `status_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
