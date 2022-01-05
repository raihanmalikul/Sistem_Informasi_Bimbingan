-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 06:05 AM
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
-- Table structure for table `berkas_bimbingan`
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
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `user_id`, `data_id`, `name_ds`, `name_mhs_1`, `npm_mhs_1`, `name_mhs_2`, `npm_mhs_2`, `kelas`, `password`, `date_created`) VALUES
(14, 3, 'Razor01', 1, NULL, 'aldo', '1193005', 'raihan', '1193025', 'D3 Teknik Informatika 2c', '$2y$10$VsSLMUkRe2HKWwVnRdL3OOMA8K9VpFCpCxiJypoGl5.S3O.0FNWKS', 1641112954),
(15, 3, 'Ilham01', 2, NULL, 'ilham', '1193019', 'azmi', '1193020', 'D3 Teknik Informatika 2A', '$2y$10$PLd2ZrF5fBMvGDQ5/p38lu.zwlpAxk2PNMUVQGEBhruyBxZ/Mu3hi', 1641187637),
(17, 2, 'dosen', 3, 'Siti', NULL, NULL, NULL, NULL, NULL, '$2y$10$PLd2ZrF5fBMvGDQ5/p38lu.zwlpAxk2PNMUVQGEBhruyBxZ/Mu3hi', 1641187637);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
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
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `judul_proyek`, `katagori_proyek`, `dosen_pembimbing`, `proposal_proyek`, `laporan_proyek`, `berkas_bimbingan_id`, `surat_izin_sidang`, `data_id`) VALUES
(14, NULL, 'Proyek 2', NULL, NULL, NULL, NULL, NULL, 1),
(15, NULL, 'Proyek 1', NULL, NULL, NULL, NULL, NULL, 2),
(16, NULL, 'Proyek 1', NULL, NULL, NULL, NULL, NULL, 3);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
