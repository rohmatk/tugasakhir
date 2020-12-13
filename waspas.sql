-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2020 pada 09.14
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waspas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_daron`
--

CREATE TABLE `data_daron` (
  `id_daron` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_daron`
--

INSERT INTO `data_daron` (`id_daron`, `nama`, `type`, `status`) VALUES
(9, 'DJI AGRAS MP-1P', '', 'aktif'),
(10, 'DJI AGRAS T16', '', 'aktif'),
(11, 'FERTO 15', '--Harga--', 'aktif'),
(12, 'MODEL M8A PRO', '--Harga--', 'aktif'),
(13, 'SKYRO MA01-A', '--Harga--', 'aktif'),
(14, 'SKYRO MA01-B', '', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_keputusan`
--

CREATE TABLE `hasil_keputusan` (
  `id_hasil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kode_kriteria` varchar(100) NOT NULL,
  `bobot` int(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `keterangan`, `kode_kriteria`, `bobot`, `jenis`) VALUES
(8, 'Harga', 'C1', 20, 'Cost'),
(9, 'Volume tangki', 'C2', 30, 'Benifit'),
(10, 'Lama terbang ', 'C3', 30, 'Benifit'),
(11, 'Jarak kontrol', 'C4', 20, 'Benifit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_histori`
--

CREATE TABLE `log_histori` (
  `log_id` int(11) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `log_user` int(11) NOT NULL,
  `log_tipe` varchar(100) NOT NULL,
  `log_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_histori`
--

INSERT INTO `log_histori` (`log_id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
(1, '2020-04-21 05:12:15', 1, '0', 'Login'),
(2, '2020-04-21 05:23:46', 1, '0', 'Login'),
(3, '2020-04-21 05:24:37', 1, '0', 'Login'),
(4, '2020-04-21 05:25:53', 1, '0', 'Login'),
(5, '2020-04-21 05:31:26', 1, '2', 'menambahkan user'),
(6, '2020-04-21 05:33:08', 1, '3', 'mengubah data user'),
(7, '2020-04-21 05:33:16', 1, '4', 'menghapus data user'),
(8, '2020-04-21 05:36:56', 1, '1', 'Logout'),
(9, '2020-04-21 05:44:52', 1, '0', 'Login'),
(10, '2020-04-21 05:44:57', 1, '1', 'Logout'),
(13, '2020-04-21 05:53:16', 1, '0', 'Login'),
(14, '2020-04-21 05:53:26', 1, '4', 'menghapus data user'),
(15, '2020-04-21 05:55:19', 1, '1', 'Logout'),
(42, '2020-04-21 16:46:46', 1, '0', 'Login'),
(43, '2020-04-26 13:55:37', 1, '0', 'Login'),
(44, '2020-04-26 14:34:52', 1, '0', 'Login'),
(45, '2020-04-26 14:36:45', 1, '1', 'Logout'),
(46, '2020-04-26 14:36:52', 1, '0', 'Login'),
(47, '2020-04-26 14:39:07', 1, '1', 'Logout'),
(48, '2020-04-26 15:12:10', 1, '0', 'Login'),
(49, '2020-04-26 15:43:10', 1, '2', 'menambahkan kriteria'),
(50, '2020-04-26 16:14:33', 1, '3', 'mengubah data kriteria'),
(51, '2020-04-26 16:14:40', 1, '4', 'menghapus data kriteria'),
(52, '2020-04-26 16:35:58', 1, '3', 'mengubah data kriteria'),
(53, '2020-04-26 16:36:36', 1, '2', 'menambahkan tenaga_kerja'),
(54, '2020-04-26 16:39:13', 1, '3', 'mengubah data tenaga_kerja'),
(55, '2020-04-26 16:39:21', 1, '4', 'menghapus data tenaga_kerja'),
(56, '2020-04-26 16:42:24', 1, '2', 'menambahkan tenaga_kerja'),
(57, '2020-04-26 16:42:38', 1, '1', 'Logout'),
(60, '2020-04-26 16:50:20', 1, '0', 'Login'),
(61, '2020-04-26 17:06:19', 1, '1', 'Logout'),
(62, '2020-04-26 17:06:24', 1, '0', 'Login'),
(63, '2020-04-30 13:54:12', 1, '0', 'Login'),
(64, '2020-04-30 14:27:01', 1, '2', 'menambahkan sub_kriteria'),
(65, '2020-04-30 14:27:16', 1, '3', 'mengubah data sub_kriteria'),
(66, '2020-04-30 14:27:30', 1, '2', 'menambahkan sub_kriteria'),
(67, '2020-04-30 14:27:37', 1, '4', 'menghapus data sub_kriteria'),
(68, '2020-04-30 14:29:36', 1, '2', 'menambahkan kriteria'),
(69, '2020-04-30 14:29:59', 1, '3', 'mengubah data kriteria'),
(70, '2020-04-30 14:30:24', 1, '2', 'menambahkan kriteria'),
(71, '2020-04-30 14:30:44', 1, '2', 'menambahkan kriteria'),
(72, '2020-04-30 14:30:59', 1, '2', 'menambahkan kriteria'),
(73, '2020-04-30 15:58:14', 1, '2', 'menambahkan sub_kriteria'),
(74, '2020-04-30 16:24:27', 1, '3', 'mengubah data sub_kriteria'),
(75, '2020-04-30 16:29:15', 1, '3', 'mengubah data sub_kriteria'),
(76, '2020-04-30 16:31:10', 1, '3', 'mengubah data sub_kriteria'),
(77, '2020-04-30 16:31:25', 1, '3', 'mengubah data sub_kriteria'),
(78, '2020-04-30 16:39:19', 1, '2', 'menambahkan sub_kriteria'),
(79, '2020-04-30 16:39:48', 1, '4', 'menghapus data sub_kriteria'),
(80, '2020-04-30 16:40:07', 1, '3', 'mengubah data sub_kriteria'),
(81, '2020-04-30 16:44:15', 1, '3', 'mengubah data sub_kriteria'),
(82, '2020-04-30 16:45:11', 1, '3', 'mengubah data sub_kriteria'),
(83, '2020-04-30 16:45:43', 1, '3', 'mengubah data sub_kriteria'),
(84, '2020-04-30 16:45:50', 1, '3', 'mengubah data sub_kriteria'),
(85, '2020-04-30 16:45:56', 1, '3', 'mengubah data sub_kriteria'),
(86, '2020-04-30 16:46:03', 1, '3', 'mengubah data sub_kriteria'),
(87, '2020-04-30 17:53:12', 1, '0', 'Login'),
(88, '2020-04-30 18:49:02', 1, '2', 'menambahkan sub_kriteria'),
(89, '2020-05-01 07:43:06', 1, '0', 'Login'),
(90, '2020-05-01 08:10:41', 1, '2', 'menambahkan tenaga_kerja'),
(91, '2020-05-01 09:04:20', 1, '2', 'menambahkan tenaga_kerja'),
(92, '2020-05-01 13:17:07', 1, '0', 'Login'),
(93, '2020-05-01 14:53:17', 1, '2', 'menambahkan sub_kriteria'),
(94, '2020-05-01 14:53:34', 1, '2', 'menambahkan sub_kriteria'),
(95, '2020-05-01 14:53:48', 1, '2', 'menambahkan sub_kriteria'),
(96, '2020-05-01 15:03:46', 1, '0', 'Login'),
(97, '2020-05-02 05:18:32', 1, '0', 'Login'),
(98, '2020-05-02 13:00:00', 1, '0', 'Login'),
(99, '2020-05-02 14:36:37', 1, '1', 'Logout'),
(102, '2020-05-02 14:37:01', 1, '0', 'Login'),
(103, '2020-05-02 15:34:25', 1, '1', 'Logout'),
(106, '2020-05-02 15:35:46', 1, '0', 'Login'),
(107, '2020-05-02 16:12:32', 1, '1', 'Logout'),
(109, '2020-05-04 05:18:02', 1, '0', 'Login'),
(110, '2020-05-04 15:28:29', 1, '0', 'Login'),
(111, '2020-05-04 15:45:01', 1, '3', 'menambahkan data keputusan'),
(112, '2020-05-04 16:11:10', 1, '1', 'Logout'),
(115, '2020-05-04 16:11:45', 1, '0', 'Login'),
(116, '2020-05-04 16:13:14', 1, '3', 'mengubah data keputusan'),
(117, '2020-05-04 16:14:24', 1, '3', 'mengubah data keputusan'),
(118, '2020-05-04 16:16:41', 1, '3', 'mengubah data keputusan'),
(119, '2020-05-04 16:17:29', 1, '3', 'mengubah data keputusan'),
(120, '2020-05-04 16:18:14', 1, '3', 'mengubah data keputusan'),
(121, '2020-05-04 16:35:25', 1, '3', 'mengubah data tenaga_kerja'),
(122, '2020-05-04 16:36:20', 1, '3', 'mengubah data tenaga_kerja'),
(123, '2020-05-04 16:36:41', 1, '2', 'menambahkan tenaga_kerja'),
(124, '2020-05-04 16:37:17', 1, '4', 'menghapus data tenaga_kerja'),
(125, '2020-05-04 21:50:46', 1, '0', 'Login'),
(126, '2020-05-04 21:52:40', 1, '2', 'menambahkan tenaga_kerja'),
(127, '2020-05-04 21:53:11', 1, '3', 'mengubah data tenaga_kerja'),
(128, '2020-05-04 21:54:58', 1, '3', 'mengubah data tenaga_kerja'),
(129, '2020-05-04 22:09:26', 1, '3', 'mengubah data sub_kriteria'),
(130, '2020-05-04 22:15:04', 1, '2', 'menambahkan sub_kriteria'),
(131, '2020-05-04 22:20:03', 1, '2', 'menambahkan sub_kriteria'),
(132, '2020-05-04 22:20:23', 1, '2', 'menambahkan sub_kriteria'),
(133, '2020-05-04 22:21:02', 1, '2', 'menambahkan sub_kriteria'),
(134, '2020-05-04 22:21:18', 1, '2', 'menambahkan sub_kriteria'),
(135, '2020-05-04 22:22:57', 1, '2', 'menambahkan sub_kriteria'),
(136, '2020-05-04 22:23:35', 1, '2', 'menambahkan sub_kriteria'),
(137, '2020-05-04 23:58:17', 1, '3', 'mengubah data tenaga_kerja'),
(138, '2020-05-05 00:00:31', 1, '3', 'mengubah data tenaga_kerja'),
(139, '2020-05-05 00:00:41', 1, '3', 'mengubah data tenaga_kerja'),
(140, '2020-05-05 00:26:08', 1, '1', 'Logout'),
(143, '2020-05-05 00:31:17', 1, '0', 'Login'),
(144, '2020-05-05 00:31:26', 1, '3', 'mengubah data tenaga_kerja'),
(145, '2020-05-05 00:31:33', 1, '3', 'mengubah data tenaga_kerja'),
(146, '2020-05-05 00:31:40', 1, '3', 'mengubah data tenaga_kerja'),
(147, '2020-05-05 00:36:16', 1, '1', 'Logout'),
(150, '2020-05-05 00:46:06', 1, '0', 'Login'),
(151, '2020-12-06 04:43:55', 1, '0', 'Login'),
(152, '2020-12-06 05:29:20', 1, '0', 'Login'),
(153, '2020-12-06 05:29:27', 1, '0', 'Login'),
(154, '2020-12-06 05:33:03', 1, '0', 'Login'),
(155, '2020-12-06 05:33:24', 1, '0', 'Login'),
(156, '2020-12-06 05:33:29', 1, '0', 'Login'),
(157, '2020-12-06 05:46:06', 1, '2', 'menambahkan alternatif'),
(158, '2020-12-06 07:46:04', 1, '0', 'Login'),
(159, '2020-12-06 07:46:19', 1, '4', 'menghapus data sub_kriteria'),
(160, '2020-12-06 07:46:21', 1, '4', 'menghapus data sub_kriteria'),
(161, '2020-12-06 07:46:22', 1, '4', 'menghapus data sub_kriteria'),
(162, '2020-12-06 07:46:24', 1, '4', 'menghapus data sub_kriteria'),
(163, '2020-12-06 07:46:25', 1, '4', 'menghapus data sub_kriteria'),
(164, '2020-12-06 07:46:26', 1, '4', 'menghapus data sub_kriteria'),
(165, '2020-12-06 07:46:27', 1, '4', 'menghapus data sub_kriteria'),
(166, '2020-12-06 07:46:28', 1, '4', 'menghapus data sub_kriteria'),
(167, '2020-12-06 07:46:29', 1, '4', 'menghapus data sub_kriteria'),
(168, '2020-12-06 07:46:58', 1, '4', 'menghapus data kriteria'),
(169, '2020-12-06 07:47:00', 1, '4', 'menghapus data kriteria'),
(170, '2020-12-06 07:47:02', 1, '4', 'menghapus data kriteria'),
(171, '2020-12-06 07:47:03', 1, '4', 'menghapus data kriteria'),
(172, '2020-12-06 07:47:04', 1, '4', 'menghapus data kriteria'),
(173, '2020-12-06 07:47:11', 1, '4', 'menghapus data alternatif'),
(174, '2020-12-06 07:47:13', 1, '4', 'menghapus data alternatif'),
(175, '2020-12-06 07:47:14', 1, '4', 'menghapus data alternatif'),
(176, '2020-12-06 07:47:16', 1, '4', 'menghapus data alternatif'),
(177, '2020-12-06 07:47:18', 1, '4', 'menghapus data alternatif'),
(178, '2020-12-06 07:47:19', 1, '4', 'menghapus data alternatif'),
(179, '2020-12-06 07:47:41', 1, '2', 'menambahkan alternatif'),
(180, '2020-12-06 07:48:16', 1, '2', 'menambahkan kriteria'),
(181, '2020-12-06 08:19:35', 1, '0', 'Login'),
(182, '2020-12-06 08:19:49', 1, '4', 'menghapus data kriteria'),
(183, '2020-12-06 08:24:06', 1, '2', 'menambahkan kriteria'),
(184, '2020-12-06 08:24:18', 1, '2', 'menambahkan alternatif'),
(185, '2020-12-06 08:30:47', 1, '0', 'Login'),
(186, '2020-12-06 08:31:49', 1, '0', 'Login'),
(187, '2020-12-07 06:58:45', 1, '0', 'Login'),
(188, '2020-12-08 04:08:56', 1, '0', 'Login'),
(189, '2020-12-08 04:10:03', 1, '4', 'menghapus data kriteria'),
(190, '2020-12-08 04:11:14', 1, '2', 'menambahkan kriteria'),
(191, '2020-12-08 04:11:37', 1, '2', 'menambahkan kriteria'),
(192, '2020-12-08 04:12:43', 1, '2', 'menambahkan kriteria'),
(193, '2020-12-08 04:12:55', 1, '2', 'menambahkan alternatif'),
(194, '2020-12-08 04:13:55', 1, '2', 'menambahkan kriteria'),
(195, '2020-12-08 04:15:58', 1, '2', 'menambahkan sub_kriteria'),
(196, '2020-12-08 04:16:08', 1, '2', 'menambahkan sub_kriteria'),
(197, '2020-12-08 04:16:16', 1, '2', 'menambahkan sub_kriteria'),
(198, '2020-12-08 04:16:25', 1, '2', 'menambahkan sub_kriteria'),
(199, '2020-12-08 04:16:31', 1, '2', 'menambahkan sub_kriteria'),
(200, '2020-12-08 04:16:42', 1, '2', 'menambahkan sub_kriteria'),
(201, '2020-12-08 04:17:07', 1, '2', 'menambahkan sub_kriteria'),
(202, '2020-12-08 04:17:34', 1, '2', 'menambahkan sub_kriteria'),
(203, '2020-12-08 04:18:00', 1, '2', 'menambahkan sub_kriteria'),
(204, '2020-12-08 04:18:19', 1, '2', 'menambahkan sub_kriteria'),
(205, '2020-12-08 04:18:32', 1, '2', 'menambahkan sub_kriteria'),
(206, '2020-12-08 04:18:54', 1, '2', 'menambahkan sub_kriteria'),
(207, '2020-12-08 04:19:34', 1, '2', 'menambahkan sub_kriteria'),
(208, '2020-12-08 04:20:03', 1, '2', 'menambahkan sub_kriteria'),
(209, '2020-12-08 04:20:42', 1, '2', 'menambahkan sub_kriteria'),
(210, '2020-12-08 04:20:54', 1, '2', 'menambahkan sub_kriteria'),
(211, '2020-12-08 04:20:54', 1, '2', 'menambahkan sub_kriteria'),
(212, '2020-12-08 04:21:21', 1, '3', 'mengubah data sub_kriteria'),
(213, '2020-12-08 04:22:35', 1, '2', 'menambahkan sub_kriteria'),
(214, '2020-12-08 04:22:41', 1, '3', 'mengubah data sub_kriteria'),
(215, '2020-12-08 04:23:06', 1, '2', 'menambahkan sub_kriteria'),
(216, '2020-12-08 04:23:33', 1, '2', 'menambahkan sub_kriteria'),
(217, '2020-12-08 04:23:48', 1, '2', 'menambahkan sub_kriteria'),
(218, '2020-12-08 04:25:57', 1, '3', 'mengubah data alternatif'),
(219, '2020-12-08 04:26:40', 1, '3', 'mengubah data alternatif'),
(220, '2020-12-08 04:26:57', 1, '2', 'menambahkan alternatif'),
(221, '2020-12-08 04:27:20', 1, '2', 'menambahkan alternatif'),
(222, '2020-12-08 04:27:38', 1, '2', 'menambahkan alternatif'),
(223, '2020-12-08 04:27:46', 1, '2', 'menambahkan alternatif'),
(224, '2020-12-08 04:43:46', 1, '4', 'menghapus data sub_kriteria'),
(225, '2020-12-08 04:45:52', 1, '3', 'mengubah data keputusan'),
(226, '2020-12-08 05:31:15', 1, '3', 'mengubah data alternatif'),
(227, '2020-12-08 07:15:03', 1, '1', 'Logout'),
(228, '2020-12-08 14:16:31', 1, '0', 'Login'),
(229, '2020-12-08 14:19:38', 1, '0', 'Login'),
(230, '2020-12-08 14:19:43', 1, '0', 'Login'),
(231, '2020-12-08 14:21:36', 1, '0', 'Login'),
(232, '2020-12-08 15:02:10', 1, '0', 'Login'),
(233, '2020-12-08 15:02:28', 1, '0', 'Login'),
(234, '2020-12-08 15:03:06', 1, '0', 'Login'),
(235, '2020-12-08 15:04:21', 1, '0', 'Login'),
(236, '2020-12-08 15:04:31', 1, '0', 'Login'),
(237, '2020-12-08 15:36:29', 1, '1', 'Logout'),
(238, '2020-12-08 15:36:37', 1, '0', 'Login'),
(239, '2020-12-08 15:36:47', 1, '4', 'menghapus data user'),
(240, '2020-12-08 15:36:56', 1, '4', 'menghapus data user'),
(241, '2020-12-08 15:37:00', 1, '4', 'menghapus data user'),
(242, '2020-12-08 15:37:29', 1, '2', 'menambahkan user'),
(243, '2020-12-08 15:37:41', 1, '1', 'Logout'),
(244, '2020-12-08 15:37:42', 7, '0', 'Login'),
(245, '2020-12-08 15:37:58', 7, '1', 'Logout'),
(246, '2020-12-08 15:38:13', 1, '0', 'Login'),
(247, '2020-12-08 15:39:17', 1, '0', 'Login'),
(248, '2020-12-08 15:39:31', 1, '3', 'mengubah data keputusan'),
(249, '2020-12-08 15:39:33', 1, '3', 'mengubah data keputusan'),
(250, '2020-12-08 15:39:47', 1, '0', 'Login'),
(251, '2020-12-08 15:41:22', 1, '0', 'Login'),
(252, '2020-12-08 15:41:53', 1, '0', 'Login'),
(253, '2020-12-08 15:44:55', 1, '0', 'Login'),
(254, '2020-12-08 15:45:23', 1, '3', 'mengubah data keputusan'),
(255, '2020-12-08 15:45:46', 1, '1', 'Logout'),
(256, '2020-12-08 15:53:31', 7, '0', 'Login'),
(257, '2020-12-08 15:53:45', 7, '1', 'Logout'),
(258, '2020-12-08 15:53:51', 1, '0', 'Login'),
(259, '2020-12-08 15:54:42', 1, '0', 'Login'),
(260, '2020-12-08 16:05:18', 1, '0', 'Login'),
(261, '2020-12-08 16:06:15', 1, '0', 'Login'),
(262, '2020-12-08 16:06:23', 1, '1', 'Logout'),
(263, '2020-12-08 16:12:27', 1, '0', 'Login'),
(264, '2020-12-08 16:12:40', 1, '1', 'Logout'),
(265, '2020-12-08 16:13:13', 8, '0', 'Login'),
(266, '2020-12-08 16:14:55', 7, '0', 'Login'),
(267, '2020-12-08 16:14:59', 7, '1', 'Logout'),
(268, '2020-12-08 16:15:05', 1, '0', 'Login'),
(269, '2020-12-08 16:16:27', 1, '1', 'Logout'),
(270, '2020-12-08 16:17:08', 1, '0', 'Login'),
(271, '2020-12-09 02:27:29', 1, '0', 'Login'),
(272, '2020-12-09 02:27:42', 1, '0', 'Login'),
(273, '2020-12-09 02:28:23', 1, '0', 'Login'),
(274, '2020-12-09 02:28:56', 1, '0', 'Login'),
(275, '2020-12-09 02:30:42', 1, '0', 'Login'),
(276, '2020-12-09 02:31:02', 1, '0', 'Login'),
(277, '2020-12-09 02:31:26', 1, '0', 'Login'),
(278, '2020-12-09 02:31:33', 1, '0', 'Login'),
(279, '2020-12-09 02:31:57', 1, '0', 'Login'),
(280, '2020-12-09 04:04:06', 1, '2', 'menambahkan alternatif'),
(281, '2020-12-09 04:04:14', 1, '3', 'mengubah data alternatif'),
(282, '2020-12-09 05:44:00', 1, '4', 'menghapus data alternatif'),
(283, '2020-12-09 06:25:29', 1, '3', 'mengubah data sub_kriteria'),
(284, '2020-12-09 06:25:35', 1, '3', 'mengubah data sub_kriteria'),
(285, '2020-12-09 06:25:40', 1, '3', 'mengubah data sub_kriteria'),
(286, '2020-12-09 06:25:47', 1, '3', 'mengubah data sub_kriteria'),
(287, '2020-12-09 06:25:52', 1, '3', 'mengubah data sub_kriteria'),
(288, '2020-12-09 06:26:01', 1, '3', 'mengubah data sub_kriteria'),
(289, '2020-12-09 06:26:33', 1, '3', 'mengubah data keputusan'),
(290, '2020-12-09 06:27:20', 1, '3', 'mengubah data sub_kriteria'),
(291, '2020-12-09 06:27:24', 1, '3', 'mengubah data sub_kriteria'),
(292, '2020-12-09 06:27:31', 1, '3', 'mengubah data sub_kriteria'),
(293, '2020-12-09 06:27:38', 1, '3', 'mengubah data sub_kriteria'),
(294, '2020-12-09 06:28:25', 1, '3', 'mengubah data sub_kriteria'),
(295, '2020-12-09 06:28:35', 1, '3', 'mengubah data sub_kriteria'),
(296, '2020-12-09 06:28:41', 1, '3', 'mengubah data sub_kriteria'),
(297, '2020-12-09 06:28:55', 1, '3', 'mengubah data sub_kriteria'),
(298, '2020-12-09 06:29:03', 1, '3', 'mengubah data sub_kriteria'),
(299, '2020-12-09 06:29:11', 1, '3', 'mengubah data sub_kriteria'),
(300, '2020-12-09 06:29:24', 1, '3', 'mengubah data sub_kriteria'),
(301, '2020-12-09 06:29:34', 1, '3', 'mengubah data sub_kriteria'),
(302, '2020-12-09 06:29:40', 1, '3', 'mengubah data sub_kriteria'),
(303, '2020-12-09 06:29:44', 1, '3', 'mengubah data sub_kriteria'),
(304, '2020-12-09 06:30:17', 1, '3', 'mengubah data sub_kriteria'),
(305, '2020-12-09 06:30:42', 1, '3', 'mengubah data sub_kriteria'),
(306, '2020-12-09 06:34:01', 1, '3', 'mengubah data sub_kriteria'),
(307, '2020-12-09 06:34:37', 1, '3', 'mengubah data sub_kriteria'),
(308, '2020-12-09 06:34:46', 1, '3', 'mengubah data sub_kriteria'),
(309, '2020-12-09 06:34:51', 1, '3', 'mengubah data sub_kriteria'),
(310, '2020-12-09 06:34:57', 1, '3', 'mengubah data sub_kriteria'),
(311, '2020-12-09 06:35:01', 1, '3', 'mengubah data sub_kriteria'),
(312, '2020-12-09 08:59:57', 7, '0', 'Login'),
(313, '2020-12-09 09:00:01', 7, '1', 'Logout'),
(314, '2020-12-09 09:00:05', 7, '0', 'Login'),
(315, '2020-12-09 09:01:17', 7, '1', 'Logout'),
(316, '2020-12-09 09:01:24', 1, '0', 'Login'),
(317, '2020-12-10 02:30:05', 1, '0', 'Login'),
(318, '2020-12-10 03:04:54', 1, '3', 'mengubah data keputusan'),
(319, '2020-12-10 08:53:41', 1, '0', 'Login'),
(320, '2020-12-10 10:31:19', 1, '1', 'Logout'),
(321, '2020-12-10 10:31:25', 7, '0', 'Login'),
(322, '2020-12-10 11:29:05', 7, '1', 'Logout'),
(323, '2020-12-10 11:29:11', 1, '0', 'Login'),
(324, '2020-12-10 11:30:02', 1, '0', 'Login'),
(325, '2020-12-10 11:30:08', 1, '0', 'Login'),
(326, '2020-12-10 11:30:35', 1, '0', 'Login'),
(327, '2020-12-10 11:30:42', 1, '1', 'Logout'),
(328, '2020-12-10 11:30:48', 7, '0', 'Login'),
(329, '2020-12-10 11:31:01', 7, '2', 'menambahkan kriteria'),
(330, '2020-12-10 11:31:07', 7, '1', 'Logout'),
(331, '2020-12-10 11:31:13', 1, '0', 'Login'),
(332, '2020-12-10 11:31:20', 1, '4', 'menghapus data kriteria'),
(333, '2020-12-10 11:31:23', 1, '1', 'Logout'),
(334, '2020-12-10 11:32:45', 1, '0', 'Login'),
(335, '2020-12-10 11:34:21', 1, '3', 'mengubah data alternatif'),
(336, '2020-12-10 11:36:18', 1, '1', 'Logout'),
(337, '2020-12-10 11:36:23', 7, '0', 'Login'),
(338, '2020-12-10 13:31:50', 7, '1', 'Logout'),
(339, '2020-12-10 13:31:56', 1, '0', 'Login'),
(340, '2020-12-10 13:44:49', 1, '1', 'Logout'),
(341, '2020-12-10 13:52:55', 1, '0', 'Login'),
(342, '2020-12-11 04:19:30', 1, '0', 'Login'),
(343, '2020-12-11 06:34:49', 1, '1', 'Logout'),
(344, '2020-12-11 06:34:51', 1, '0', 'Login');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_daron` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_user`, `id_daron`, `id_kriteria`, `nilai`) VALUES
(72, 1, 10, 8, 23),
(73, 1, 10, 9, 32),
(74, 1, 10, 10, 26),
(75, 1, 10, 11, 22),
(76, 1, 9, 8, 39),
(77, 1, 9, 9, 32),
(78, 1, 9, 10, 28),
(79, 1, 9, 11, 22),
(80, 1, 11, 8, 37),
(81, 1, 11, 9, 33),
(82, 1, 11, 10, 26),
(83, 1, 11, 11, 20),
(84, 1, 12, 8, 37),
(85, 1, 12, 9, 32),
(86, 1, 12, 10, 27),
(87, 1, 12, 11, 21),
(88, 1, 13, 8, 38),
(89, 1, 13, 9, 32),
(90, 1, 13, 10, 29),
(91, 1, 13, 11, 21),
(92, 1, 14, 8, 37),
(93, 1, 14, 9, 33),
(94, 1, 14, 10, 29),
(95, 1, 14, 11, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `nilai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `id_kriteria`, `deskripsi`, `nilai`) VALUES
(20, 11, '1 km', 1),
(21, 11, '2 km', 2),
(22, 11, '3 km', 3),
(23, 8, 'lebih dari 250.000.000', 5),
(24, 11, '5 km', 5),
(25, 11, '4 km', 4),
(26, 10, 'Lebih dari 25 menit', 5),
(27, 10, 'lebih dari 20 sampai dengan 25 menit', 4),
(28, 10, 'lebih dari 15 sampai dengan 20 menit', 3),
(29, 10, 'lebih dari 10 sampai dengan 15 menit', 2),
(30, 10, 'kurang dari 10 menit', 1),
(31, 9, 'kurang dari 10liter', 1),
(32, 9, 'lebih dari 10 sampai dengan 15liter', 2),
(33, 9, 'lebih dari 15 sampai dengan 20liter', 3),
(34, 9, 'lebih dari 20 sampai dengan 25 liter', 4),
(36, 9, 'lebih dari 25 liter', 5),
(37, 8, 'lebih dari 200.000.000 sampai dengan 250.000.000', 4),
(38, 8, 'lebih dari 150.000.000 sampai dengan 200.000.000', 3),
(39, 8, 'lebih dari 100.000.000 sampai dengan 150.000.000', 2),
(40, 8, 'kurang dari 100.000.000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_user_level`, `email`, `username`, `password`) VALUES
(1, 1, 'admin000@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(7, 2, 'user@user.user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(8, 2, 'kamil', 'kamil', '11d462a4a1b14b00580d8020d6f64998');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_daron`
--
ALTER TABLE `data_daron`
  ADD PRIMARY KEY (`id_daron`);

--
-- Indeks untuk tabel `hasil_keputusan`
--
ALTER TABLE `hasil_keputusan`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `hasil` (`hasil`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `log_histori`
--
ALTER TABLE `log_histori`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_user` (`log_user`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_naker` (`id_daron`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `nilai` (`nilai`);

--
-- Indeks untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_level` (`id_user_level`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_daron`
--
ALTER TABLE `data_daron`
  MODIFY `id_daron` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `hasil_keputusan`
--
ALTER TABLE `hasil_keputusan`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `log_histori`
--
ALTER TABLE `log_histori`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil_keputusan`
--
ALTER TABLE `hasil_keputusan`
  ADD CONSTRAINT `hasil_keputusan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_keputusan_ibfk_2` FOREIGN KEY (`hasil`) REFERENCES `data_daron` (`id_daron`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `log_histori`
--
ALTER TABLE `log_histori`
  ADD CONSTRAINT `log_histori_ibfk_1` FOREIGN KEY (`log_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_daron`) REFERENCES `data_daron` (`id_daron`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_3` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_4` FOREIGN KEY (`nilai`) REFERENCES `sub_kriteria` (`id_sub_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user_level`) REFERENCES `user_level` (`id_user_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
