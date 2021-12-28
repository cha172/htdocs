-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 02:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tera`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `t2` double NOT NULL,
  `t4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `aktifitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `user_name`, `aktifitas`) VALUES
(1, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 1'),
(2, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 1'),
(3, 'operator', 'Mengajukan Request Edit id 1'),
(4, 'operator', 'Mengajukan Request Hapus id 1'),
(5, 'operator', 'Mengajukan Request Edit id 1'),
(6, 'operator', 'Mengajukan Request Hapus id 1'),
(7, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 2'),
(8, 'operator', 'Mengajukan Request Edit id 2'),
(9, 'operator', 'Mengajukan Request Hapus id 2'),
(10, 'admin', 'Menyetujui Request Edit id 2'),
(11, 'admin', 'Menyetujui Request Edit id 2'),
(12, 'admin', 'Menyetujui Request Hapus id 2'),
(13, 'admin', 'Menyetujui Request Hapus id 2'),
(14, 'admin', 'Menolak Request Edit id 2'),
(15, 'operator', 'Mengajukan Request Edit id 2'),
(16, 'operator', 'Mengajukan Request Hapus id 2'),
(17, 'operator', 'Mengajukan Request Edit id 2'),
(18, 'operator', 'Mengajukan Request Hapus id 2'),
(19, 'admin', 'Menyetujui Request Edit id 2'),
(20, 'admin', 'Menyetujui Request Hapus id 2'),
(21, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 2'),
(22, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 2'),
(23, 'operator', 'Mendownload Sertifikat id identias 2'),
(24, 'operator', 'Mengajukan Request Edit id 2'),
(25, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 2'),
(26, 'operator', 'Mengajukan Request Edit id 2'),
(27, 'operator', 'Mendownload Sertifikat id identias 2'),
(28, 'admin', 'Menolak Request Edit id 2'),
(29, 'operator', 'Mengajukan Request Edit id 2'),
(30, 'operator', 'Mengajukan Request Hapus id 2'),
(31, 'admin', 'Menyetujui Request Edit id 2'),
(32, 'admin', 'Menyetujui Request Hapus id 2'),
(33, 'operator', 'Melakukan Update id 2'),
(34, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 2'),
(35, 'operator', 'Mendownload Sertifikat id identias 2');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `uttp` varchar(5) NOT NULL,
  `merk_buatan` varchar(10) NOT NULL,
  `model` varchar(10) NOT NULL,
  `volume_nominal` int(11) NOT NULL,
  `jml_kompartemen` int(11) NOT NULL,
  `merk_kendaraan` varchar(10) NOT NULL,
  `no_polis` varchar(8) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `nip_pemeriksa` varchar(21) NOT NULL,
  `nip_penguji` varchar(21) NOT NULL,
  `nip_kepala` varchar(21) NOT NULL,
  `tahun` int(4) NOT NULL,
  `surat` int(1) NOT NULL,
  `lob_jarum` int(1) NOT NULL,
  `lob_kawat_indeks` int(1) NOT NULL,
  `lob_kawat_manhole` int(1) NOT NULL,
  `lob_kawat_chasis` int(1) NOT NULL,
  `benda_tum` int(1) NOT NULL,
  `sertifikat` int(1) NOT NULL DEFAULT 0,
  `tgl_sertifikat` datetime DEFAULT NULL,
  `nama_file` varchar(30) DEFAULT NULL,
  `suhu_dasar` int(10) DEFAULT 0,
  `diajukan` int(11) NOT NULL DEFAULT 0,
  `edit` int(11) DEFAULT 1,
  `request_edit` int(11) DEFAULT 0,
  `hapus` int(11) DEFAULT 1,
  `request_hapus` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kepala_upt`
--

CREATE TABLE `kepala_upt` (
  `nip_kepala_upt` varchar(21) NOT NULL,
  `nama` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepala_upt`
--

INSERT INTO `kepala_upt` (`nip_kepala_upt`, `nama`) VALUES
('123121', 'Kepala 1');

-- --------------------------------------------------------

--
-- Table structure for table `kompartemen`
--

CREATE TABLE `kompartemen` (
  `id_kompartemen` int(11) NOT NULL,
  `t1` double NOT NULL,
  `t2` int(11) NOT NULL,
  `t3` double NOT NULL,
  `t4` int(11) NOT NULL,
  `T` double NOT NULL,
  `D` double NOT NULL,
  `P` double NOT NULL,
  `Q` double NOT NULL,
  `S` double NOT NULL,
  `R` double NOT NULL,
  `L` double NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `id_identitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `metode`
--

CREATE TABLE `metode` (
  `id_metode` int(11) NOT NULL,
  `metode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metode`
--

INSERT INTO `metode` (`id_metode`, `metode`) VALUES
(1, 'satu');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksa`
--

CREATE TABLE `pemeriksa` (
  `nip_pemeriksa` varchar(21) NOT NULL,
  `nama` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksa`
--

INSERT INTO `pemeriksa` (`nip_pemeriksa`, `nama`) VALUES
('112', 'Win2'),
('1123', 'Win');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama`) VALUES
(1, 'Andi'),
(2, 'Budi');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 9,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nm_pd` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'cama',
  `kd_pt` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '101029'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `nm_pd`, `role`, `kd_pt`) VALUES
(3, 'admin', '_LKrHhhQnEcXmQUE9CGSNlDIjnkTUxw3', '$2y$13$Bcix9uGETKgwWPx7YAPuD.TCTcma3gdCL/dp7QK12AxKRSzi.HIIu', NULL, 'winardi84@gmail.com', 10, 1553613624, 1553613624, 'ZVSEX9DwCICEj4vdh4vfk_aeQ8-Xuvhc_1553613623', 'Winardi', 'admin', '101029'),
(4, 'test', '', '$2y$13$B2uCNf9NwII88fcPgpLmNO0RkL8ZjQGiVAG39y0EdvGPxGGIZVeQ6', NULL, 'test@gmail.com', 10, 0, 0, NULL, 'test', 'admin', '101029'),
(5, 'operator', '', '$2y$13$1VO0f2YU9Yxw3wUmN/9.B.l7TZarXLUO6w4ooME4IzI4R4MpszQ0C', NULL, 'operator@gmail.com', 10, 0, 0, NULL, 'operator', 'operator', '101029');

-- --------------------------------------------------------

--
-- Table structure for table `penguji`
--

CREATE TABLE `penguji` (
  `nip_penguji` varchar(21) NOT NULL,
  `nama` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penguji`
--

INSERT INTO `penguji` (`nip_penguji`, `nama`) VALUES
('34343', 'adi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `kepala_upt`
--
ALTER TABLE `kepala_upt`
  ADD PRIMARY KEY (`nip_kepala_upt`);

--
-- Indexes for table `kompartemen`
--
ALTER TABLE `kompartemen`
  ADD PRIMARY KEY (`id_kompartemen`);

--
-- Indexes for table `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `pemeriksa`
--
ALTER TABLE `pemeriksa`
  ADD PRIMARY KEY (`nip_pemeriksa`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `penguji`
--
ALTER TABLE `penguji`
  ADD PRIMARY KEY (`nip_penguji`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kompartemen`
--
ALTER TABLE `kompartemen`
  MODIFY `id_kompartemen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metode`
--
ALTER TABLE `metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
