-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 10:36 AM
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
(17, 'admin', 'Menyetujui Request Edit id 2'),
(18, 'admin', 'Menyetujui Request Hapus id 2'),
(19, 'operator', 'Melakukan Update id 3'),
(20, 'operator', 'Melakukan Update id 4'),
(21, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(22, 'operator', 'Mendownload Sertifikat id identias 4'),
(23, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(24, 'operator', 'Mendownload Sertifikat id identias 4'),
(25, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(26, 'operator', 'Mendownload Sertifikat id identias 4'),
(27, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 5'),
(28, 'operator', 'Mendownload Sertifikat id identias 5'),
(29, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 5'),
(30, 'operator', 'Mendownload Sertifikat id identias 5'),
(31, 'operator', 'Mengajukan Request Edit id 5'),
(32, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 5'),
(33, 'admin', 'Menyetujui Request Edit id 5'),
(34, 'operator', 'Melakukan Update id 5'),
(35, 'operator', 'Mengajukan Request Edit id 2'),
(36, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 2'),
(37, 'admin', 'Menyetujui Request Edit id 2'),
(38, 'operator', 'Melakukan Update id 2'),
(39, 'operator', 'Mendownload Sertifikat id identias 2'),
(40, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(41, 'operator', 'Mendownload Sertifikat id identias 3'),
(42, 'operator', 'Mengajukan Request Edit id 2'),
(43, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 2'),
(44, 'admin', 'Menyetujui Request Edit id 2'),
(45, 'operator', 'Melakukan Update id 2'),
(46, 'operator', 'Mengajukan Request Hapus id 2'),
(47, 'operator', 'Mendownload Sertifikat id identias 2'),
(48, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 2'),
(49, 'admin', 'Menyetujui Request Hapus id 2'),
(50, 'operator', 'Melakukan Delete id 2'),
(51, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(52, 'operator', 'Mengajukan Request Edit id 3'),
(53, 'operator', 'Mengajukan Request Hapus id 3'),
(54, 'admin', 'Menyetujui Request Edit id 3'),
(55, 'admin', 'Menyetujui Request Hapus id 3'),
(56, 'operator', 'Mendownload Sertifikat id identias 3'),
(57, 'operator', 'Melakukan Update id 3'),
(58, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(59, 'operator', 'Mendownload Sertifikat id identias 3'),
(60, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(61, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(62, 'operator', 'Mengajukan Request Edit id 3'),
(63, 'operator', 'Mendownload Sertifikat id identias 3'),
(64, 'operator', 'Mendownload Sertifikat id identias 3'),
(65, 'operator', 'Mendownload Sertifikat id identias 3'),
(66, 'operator', 'Mendownload Sertifikat id identias 3'),
(67, 'operator', 'Mendownload Sertifikat id identias 3'),
(68, 'operator', 'Mendownload Sertifikat id identias 3'),
(69, 'operator', 'Mendownload Sertifikat id identias 5'),
(70, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(71, 'operator', 'Mendownload Sertifikat id identias 3'),
(72, 'operator', 'Mendownload Sertifikat id identias 3'),
(73, 'operator', 'Mendownload Sertifikat id identias 3'),
(74, 'operator', 'Mendownload Sertifikat id identias 3'),
(75, 'operator', 'Mendownload Sertifikat id identias 3'),
(76, 'operator', 'Mendownload Sertifikat id identias 3'),
(77, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(78, 'admin', 'Menolak Request Edit id 3'),
(79, 'operator', 'Mendownload Sertifikat id identias 3'),
(80, 'operator', 'Mendownload Sertifikat id identias 3'),
(81, 'operator', 'Mendownload Sertifikat id identias 3'),
(82, 'operator', 'Mendownload Sertifikat id identias 3'),
(83, 'operator', 'Mendownload Sertifikat id identias 3'),
(84, 'operator', 'Mendownload Sertifikat id identias 3'),
(85, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(86, 'operator', 'Mengajukan Request Edit id 3'),
(87, 'operator', 'Mengajukan Request Hapus id 3'),
(88, 'admin', 'Menyetujui Request Edit id 3'),
(89, 'admin', 'Menyetujui Request Hapus id 3'),
(90, 'operator', 'Melakukan Update id 3'),
(91, 'operator', 'Mengajukan Request Edit id 3'),
(92, 'operator', 'Mendownload Sertifikat id identias 3'),
(93, 'operator', 'Mendownload Sertifikat id identias 3'),
(94, 'operator', 'Mendownload Sertifikat id identias 3'),
(95, 'operator', 'Mendownload Sertifikat id identias 3'),
(96, 'operator', 'Mendownload Sertifikat id identias 3'),
(97, 'operator', 'Mendownload Sertifikat id identias 3'),
(98, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(99, 'admin', 'Menyetujui Request Edit id 3'),
(100, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(101, 'operator', 'Mendownload Sertifikat id identias 3'),
(102, 'operator', 'Mendownload Sertifikat id identias 3'),
(103, 'operator', 'Mendownload Sertifikat id identias 3'),
(104, 'operator', 'Mendownload Sertifikat id identias 3'),
(105, 'operator', 'Mendownload Sertifikat id identias 3'),
(106, 'operator', 'Mendownload Sertifikat id identias 3'),
(107, 'operator', 'Mendownload Sertifikat id identias 3'),
(108, 'operator', 'Mendownload Sertifikat id identias 3'),
(109, 'operator', 'Mendownload Sertifikat id identias 3'),
(110, 'operator', 'Mendownload Sertifikat id identias 3'),
(111, 'operator', 'Mendownload Sertifikat id identias 3'),
(112, 'operator', 'Mendownload Sertifikat id identias 3'),
(113, 'operator', 'Mendownload Sertifikat id identias 3'),
(114, 'operator', 'Mendownload Sertifikat id identias 3'),
(115, 'operator', 'Mendownload Sertifikat id identias 3'),
(116, 'operator', 'Mendownload Sertifikat id identias 3'),
(117, 'operator', 'Mendownload Sertifikat id identias 3'),
(118, 'operator', 'Mendownload Sertifikat id identias 3'),
(119, 'operator', 'Mendownload Sertifikat id identias 3'),
(120, 'operator', 'Mendownload Sertifikat id identias 3'),
(121, 'operator', 'Mendownload Sertifikat id identias 3'),
(122, 'operator', 'Mendownload Sertifikat id identias 3'),
(123, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(124, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 5'),
(125, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 5'),
(126, 'operator', 'Mendownload Sertifikat id identias 3'),
(127, 'operator', 'Mendownload Sertifikat id identias 5'),
(128, 'operator', 'Mendownload Sertifikat id identias 5'),
(129, 'operator', 'Mendownload Sertifikat id identias 5'),
(130, 'operator', 'Mendownload Sertifikat id identias 5'),
(131, 'operator', 'Mendownload Sertifikat id identias 5'),
(132, 'operator', 'Mendownload Sertifikat id identias 5'),
(133, 'operator', 'Mendownload Sertifikat id identias 4'),
(134, 'operator', 'Mendownload Sertifikat id identias 4'),
(135, 'operator', 'Mendownload Sertifikat id identias 4'),
(136, 'operator', 'Mendownload Sertifikat id identias 4'),
(137, 'operator', 'Mendownload Sertifikat id identias 4'),
(138, 'operator', 'Mendownload Sertifikat id identias 4'),
(139, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 5'),
(140, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(141, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(142, 'operator', 'Mendownload Sertifikat id identias 3'),
(143, 'operator', 'Mendownload Sertifikat id identias 3'),
(144, 'operator', 'Mendownload Sertifikat id identias 3'),
(145, 'operator', 'Mendownload Sertifikat id identias 3'),
(146, 'operator', 'Mendownload Sertifikat id identias 3'),
(147, 'operator', 'Mendownload Sertifikat id identias 3'),
(148, 'operator', 'Mendownload Sertifikat id identias 3'),
(149, 'operator', 'Mendownload Sertifikat id identias 4'),
(150, 'operator', 'Mendownload Sertifikat id identias 4'),
(151, 'operator', 'Mendownload Sertifikat id identias 4'),
(152, 'operator', 'Mendownload Sertifikat id identias 4'),
(153, 'operator', 'Mendownload Sertifikat id identias 4'),
(154, 'operator', 'Mendownload Sertifikat id identias 4'),
(155, 'operator', 'Mendownload Sertifikat id identias 4'),
(156, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 3'),
(157, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(158, 'operator', 'Mendownload Sertifikat id identias 4'),
(159, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(160, 'operator', 'Mendownload Sertifikat id identias 4'),
(161, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(162, 'operator', 'Mendownload Sertifikat id identias 4'),
(163, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(164, 'operator', 'Mendownload Sertifikat id identias 4'),
(165, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(166, 'operator', 'Mendownload Sertifikat id identias 4'),
(167, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(168, 'operator', 'Mendownload Sertifikat id identias 4'),
(169, 'operator', 'Mendownload Sertifikat id identias 4'),
(170, 'operator', 'Mendownload Sertifikat id identias 4'),
(171, 'operator', 'Mendownload Sertifikat id identias 4'),
(172, 'operator', 'Mendownload Sertifikat id identias 4'),
(173, 'operator', 'Mendownload Sertifikat id identias 4'),
(174, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(175, 'operator', 'Mendownload Sertifikat id identias 4'),
(176, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(177, 'operator', 'Mendownload Sertifikat id identias 4'),
(178, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(179, 'operator', 'Mendownload Sertifikat id identias 4'),
(180, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(181, 'operator', 'Mendownload Sertifikat id identias 4'),
(182, 'operator', 'Mendownload Sertifikat id identias 4'),
(183, 'operator', 'Mendownload Sertifikat id identias 4'),
(184, 'operator', 'Mendownload Sertifikat id identias 4'),
(185, 'operator', 'Mendownload Sertifikat id identias 4'),
(186, 'operator', 'Mendownload Sertifikat id identias 4'),
(187, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(188, 'operator', 'Mendownload Sertifikat id identias 4'),
(189, 'operator', 'Mendownload Sertifikat id identias 4'),
(190, 'operator', 'Mendownload Sertifikat id identias 4'),
(191, 'operator', 'Mendownload Sertifikat id identias 4'),
(192, 'operator', 'Mendownload Sertifikat id identias 4'),
(193, 'operator', 'Mendownload Sertifikat id identias 4'),
(194, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(195, 'operator', 'Mendownload Sertifikat id identias 4'),
(196, 'operator', 'Mendownload Sertifikat id identias 4'),
(197, 'operator', 'Mendownload Sertifikat id identias 4'),
(198, 'operator', 'Mendownload Sertifikat id identias 4'),
(199, 'operator', 'Mendownload Sertifikat id identias 4'),
(200, 'operator', 'Mendownload Sertifikat id identias 4'),
(201, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(202, 'operator', 'Mendownload Sertifikat id identias 4'),
(203, 'operator', 'Mendownload Sertifikat id identias 4'),
(204, 'operator', 'Mendownload Sertifikat id identias 4'),
(205, 'operator', 'Mendownload Sertifikat id identias 4'),
(206, 'operator', 'Mendownload Sertifikat id identias 4'),
(207, 'operator', 'Mendownload Sertifikat id identias 4'),
(208, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(209, 'operator', 'Mendownload Sertifikat id identias 4'),
(210, 'operator', 'Mendownload Sertifikat id identias 4'),
(211, 'operator', 'Mendownload Sertifikat id identias 4'),
(212, 'operator', 'Mendownload Sertifikat id identias 4'),
(213, 'operator', 'Mendownload Sertifikat id identias 4'),
(214, 'operator', 'Mendownload Sertifikat id identias 4'),
(215, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(216, 'operator', 'Mendownload Sertifikat id identias 4'),
(217, 'operator', 'Mendownload Sertifikat id identias 4'),
(218, 'operator', 'Mendownload Sertifikat id identias 4'),
(219, 'operator', 'Mendownload Sertifikat id identias 4'),
(220, 'operator', 'Mendownload Sertifikat id identias 4'),
(221, 'operator', 'Mendownload Sertifikat id identias 4'),
(222, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(223, 'operator', 'Mendownload Sertifikat id identias 4'),
(224, 'operator', 'Mendownload Sertifikat id identias 4'),
(225, 'operator', 'Mendownload Sertifikat id identias 4'),
(226, 'operator', 'Mendownload Sertifikat id identias 4'),
(227, 'operator', 'Mendownload Sertifikat id identias 4'),
(228, 'operator', 'Mendownload Sertifikat id identias 4'),
(229, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(230, 'operator', 'Mendownload Sertifikat id identias 4'),
(231, 'operator', 'Mendownload Sertifikat id identias 4'),
(232, 'operator', 'Mendownload Sertifikat id identias 4'),
(233, 'operator', 'Mendownload Sertifikat id identias 4'),
(234, 'operator', 'Mendownload Sertifikat id identias 4'),
(235, 'operator', 'Mendownload Sertifikat id identias 4'),
(236, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(237, 'operator', 'Mendownload Sertifikat id identias 4'),
(238, 'operator', 'Mendownload Sertifikat id identias 4'),
(239, 'operator', 'Mendownload Sertifikat id identias 4'),
(240, 'operator', 'Mendownload Sertifikat id identias 4'),
(241, 'operator', 'Mendownload Sertifikat id identias 4'),
(242, 'operator', 'Mendownload Sertifikat id identias 4'),
(243, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(244, 'operator', 'Mendownload Sertifikat id identias 4'),
(245, 'operator', 'Mendownload Sertifikat id identias 4'),
(246, 'operator', 'Mendownload Sertifikat id identias 4'),
(247, 'operator', 'Mendownload Sertifikat id identias 4'),
(248, 'operator', 'Mendownload Sertifikat id identias 4'),
(249, 'operator', 'Mendownload Sertifikat id identias 4'),
(250, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(251, 'operator', 'Mendownload Sertifikat id identias 4'),
(252, 'operator', 'Mendownload Sertifikat id identias 4'),
(253, 'operator', 'Mendownload Sertifikat id identias 4'),
(254, 'operator', 'Mendownload Sertifikat id identias 4'),
(255, 'operator', 'Mendownload Sertifikat id identias 4'),
(256, 'operator', 'Mendownload Sertifikat id identias 4'),
(257, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(258, 'operator', 'Mendownload Sertifikat id identias 4'),
(259, 'operator', 'Mendownload Sertifikat id identias 4'),
(260, 'operator', 'Mendownload Sertifikat id identias 4'),
(261, 'operator', 'Mendownload Sertifikat id identias 4'),
(262, 'operator', 'Mendownload Sertifikat id identias 4'),
(263, 'operator', 'Mendownload Sertifikat id identias 4'),
(264, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(265, 'operator', 'Mendownload Sertifikat id identias 4'),
(266, 'operator', 'Mendownload Sertifikat id identias 4'),
(267, 'operator', 'Mendownload Sertifikat id identias 4'),
(268, 'operator', 'Mendownload Sertifikat id identias 4'),
(269, 'operator', 'Mendownload Sertifikat id identias 4'),
(270, 'operator', 'Mendownload Sertifikat id identias 4'),
(271, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(272, 'operator', 'Mendownload Sertifikat id identias 4'),
(273, 'operator', 'Mendownload Sertifikat id identias 4'),
(274, 'operator', 'Mendownload Sertifikat id identias 4'),
(275, 'operator', 'Mendownload Sertifikat id identias 4'),
(276, 'operator', 'Mendownload Sertifikat id identias 4'),
(277, 'operator', 'Mendownload Sertifikat id identias 4'),
(278, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(279, 'operator', 'Mendownload Sertifikat id identias 4'),
(280, 'operator', 'Mendownload Sertifikat id identias 4'),
(281, 'operator', 'Mendownload Sertifikat id identias 4'),
(282, 'operator', 'Mendownload Sertifikat id identias 4'),
(283, 'operator', 'Mendownload Sertifikat id identias 4'),
(284, 'operator', 'Mendownload Sertifikat id identias 4'),
(285, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(286, 'operator', 'Mendownload Sertifikat id identias 4'),
(287, 'operator', 'Mendownload Sertifikat id identias 4'),
(288, 'operator', 'Mendownload Sertifikat id identias 4'),
(289, 'operator', 'Mendownload Sertifikat id identias 4'),
(290, 'operator', 'Mendownload Sertifikat id identias 4'),
(291, 'operator', 'Mendownload Sertifikat id identias 4'),
(292, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 4'),
(293, 'operator', 'Mendownload Sertifikat id identias 4'),
(294, 'operator', 'Mendownload Sertifikat id identias 4'),
(295, 'operator', 'Mendownload Sertifikat id identias 4'),
(296, 'operator', 'Mendownload Sertifikat id identias 4'),
(297, 'operator', 'Mendownload Sertifikat id identias 4'),
(298, 'operator', 'Mendownload Sertifikat id identias 4'),
(299, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 6'),
(300, 'operator', 'Mengajukan Request Edit id 6'),
(301, 'operator', 'Mendownload Sertifikat id identias 6'),
(302, 'operator', 'Mendownload Sertifikat id identias 6'),
(303, 'operator', 'Mendownload Sertifikat id identias 6'),
(304, 'operator', 'Mendownload Sertifikat id identias 6'),
(305, 'operator', 'Mendownload Sertifikat id identias 6'),
(306, 'operator', 'Mendownload Sertifikat id identias 6'),
(307, 'operator', 'Mendownload Sertifikat id identias 5'),
(308, 'operator', 'Mendownload Sertifikat id identias 5'),
(309, 'admin', 'Menolak Request Edit id 6'),
(310, 'operator', 'Mengajukan Persetujuan Penerbitan Sertifikat id 6'),
(311, 'operator', 'Mendownload Sertifikat id identias 6'),
(312, 'operator', 'Mendownload Sertifikat id identias 6'),
(313, 'operator', 'Mendownload Sertifikat id identias 6'),
(314, 'operator', 'Mendownload Sertifikat id identias 6'),
(315, 'operator', 'Mendownload Sertifikat id identias 6'),
(316, 'operator', 'Mendownload Sertifikat id identias 6'),
(317, 'kom1', 'Mendownload Sertifikat id identias 3'),
(318, 'kom1', 'Mengajukan Persetujuan Penerbitan Sertifikat id 6'),
(319, 'kom1', 'Mendownload Sertifikat id identias 6'),
(320, 'kom1', 'Mengajukan Persetujuan Penerbitan Sertifikat id 6'),
(321, 'AMRIZALMI', 'Mendownload Sertifikat id identias 6'),
(322, 'AMRIZALMI', 'Mengajukan Persetujuan Penerbitan Sertifikat id 5'),
(323, 'AMRIZALMI', 'Mendownload Sertifikat id identias 5'),
(324, 'AMRIZALMI', 'Mengajukan Request Edit id 5');

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

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `uttp`, `merk_buatan`, `model`, `volume_nominal`, `jml_kompartemen`, `merk_kendaraan`, `no_polis`, `tgl_pemeriksaan`, `id_pemilik`, `id_metode`, `nip_pemeriksa`, `nip_penguji`, `nip_kepala`, `tahun`, `surat`, `lob_jarum`, `lob_kawat_indeks`, `lob_kawat_manhole`, `lob_kawat_chasis`, `benda_tum`, `sertifikat`, `tgl_sertifikat`, `nama_file`, `suhu_dasar`, `diajukan`, `edit`, `request_edit`, `hapus`, `request_hapus`) VALUES
(3, 'BBM', 'AWDAWDAWDA', 'DAWDAWDAWD', 20000, 3, 'KEPALA', 'BM 12121', '2020-12-16', 1, 1, '112', '34343', '123121', 2020, 1, 0, 0, 0, 0, 0, 0, '2021-09-23 12:21:54', 'Surat Keterangan Hasil Penguji', 80, 0, 0, 0, 0, 0),
(4, 'bbm', 'wewe', 'wewe', 20000, 3, 'wewe', 'BM 12121', '2021-01-01', 1, 1, '112', '34343', '123121', 2021, 0, 1, 1, 1, 0, 1, 0, '2021-09-14 15:19:03', 'Surat Keterangan Hasil Penguji', 80, 0, 0, 0, 0, 0),
(5, 'weew', 'wewe', 'wewewe', 2000, 4, 'wewewe', 'bm rtrtr', '2021-01-02', 1, 1, '112', '34343', '123121', 2021, 1, 1, 1, 1, 0, 1, 0, '2021-12-28 15:03:37', 'Surat Keterangan Hasil Penguji', 80, 0, 0, 1, 0, 0),
(6, 'BBM', 'BLABLA', 'BLABLA', 10000, 4, 'HYLOS', 'BM 13333', '2021-09-22', 1, 1, '112', '34343', '123121', 3131, 1, 1, 1, 1, 0, 1, 0, '2021-10-14 10:34:14', 'Surat Keterangan Hasil Penguji', 13, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kepala_upt`
--

CREATE TABLE `kepala_upt` (
  `nip_kepala_upt` varchar(21) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepala_upt`
--

INSERT INTO `kepala_upt` (`nip_kepala_upt`, `nama`) VALUES
('19680714 200801 1 016', 'AMRIZALMI,ST');

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

--
-- Dumping data for table `kompartemen`
--

INSERT INTO `kompartemen` (`id_kompartemen`, `t1`, `t2`, `t3`, `t4`, `T`, `D`, `P`, `Q`, `S`, `R`, `L`, `jenis`, `id_identitas`) VALUES
(7, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Komp. I', 1),
(8, 10, 20, 23, 7, 30, 12, 12, 12, 12, 12, 0, 'Komp. I', 3),
(9, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 4, 'Komp. I', 6),
(10, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 4, 'Komp. II', 6),
(11, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 4, 'Komp. III', 6),
(12, 4, 0, 4, 0, 4, 4, 4, 4, 4, 4, 4, 'Komp. IV', 6);

-- --------------------------------------------------------

--
-- Table structure for table `metode`
--

CREATE TABLE `metode` (
  `id_metode` int(11) NOT NULL,
  `metode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metode`
--

INSERT INTO `metode` (`id_metode`, `metode`) VALUES
(1, 'Penakaran Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksa`
--

CREATE TABLE `pemeriksa` (
  `nip_pemeriksa` varchar(21) NOT NULL,
  `nama` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksa`
--

INSERT INTO `pemeriksa` (`nip_pemeriksa`, `nama`) VALUES
('19810602 200903 1 002', 'M RIZAL A. MD'),
('19820420 200901 2 005', 'ADEK PURNAMA, ST., MT');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama`) VALUES
(1, 'PT. RESTU IBU JAYA BERSAMA'),
(2, 'PT. ABDI BINA KARYA SEMBADA'),
(3, 'PT. SULUNG SEJAHTERA'),
(4, 'PT. MARTHA TEHNIK'),
(5, 'PT. PERTA ENERGI NUSANTARA');

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
(3, 'Drs. Hariyandi M.Si', '_LKrHhhQnEcXmQUE9CGSNlDIjnkTUxw3', '$2y$13$kvEsMZ/A1Je5G8WzRJ/zOuLfwHtQWcj0/P.uWYTZkNBitldoRr5DO', NULL, '00000', 10, 1553613624, 1553613624, 'ZVSEX9DwCICEj4vdh4vfk_aeQ8-Xuvhc_1553613623', 'AMRIZALMI', 'operator', '101029'),
(4, 'kom1', '', '$2y$13$5dN8IJprfeUzqYy3VlSX3..BA2W0MdJGjXqBbDBQoinWsv1XVv6dS', NULL, 'test@gmail.com', 10, 0, 0, NULL, 'kom1', 'operator', '101029'),
(5, 'kom2', '', '$2y$13$H5ZHzH00W2uW5oWItRNoju8vdKO8EM6edqda4Zoy8qlWAt0k1M7nm', NULL, '00000', 10, 0, 0, NULL, 'kom2', 'operator', '101029');

-- --------------------------------------------------------

--
-- Table structure for table `penguji`
--

CREATE TABLE `penguji` (
  `nip_penguji` varchar(21) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penguji`
--

INSERT INTO `penguji` (`nip_penguji`, `nama`) VALUES
('	19820420 200901 2 00', 'ADEK PURNAMA, ST., MT'),
('19810602 200903 1 002', 'M RIZAL A. MD');

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
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kompartemen`
--
ALTER TABLE `kompartemen`
  MODIFY `id_kompartemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `metode`
--
ALTER TABLE `metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
