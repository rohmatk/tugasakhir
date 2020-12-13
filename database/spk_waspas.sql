-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2020 pada 23.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_waspas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_naker`
--

CREATE TABLE `data_naker` (
  `id_naker` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_naker`
--

INSERT INTO `data_naker` (`id_naker`, `nama`, `jabatan`, `status`) VALUES
(8, 'DJI AGRAS T16 ', '', 'aktif'),
(9, 'DJI AGRAS MG-1P', '', 'aktif'),
(10, 'Model M8A PRO', '0', 'aktif'),
(11, 'Ferto – 15 ', '0', 'aktif'),
(12, 'SKYRO MAO1-B', '0', 'aktif'),
(13, 'SKYRO MAO1-A ', '0', 'aktif');

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
(6, 'Tangki Penyimpanan', 'C1', 30, 'Benifit'),
(7, 'harga', 'C2', 20, 'Cost'),
(8, 'Lama Terbang', 'C3', 30, 'Benifit'),
(9, 'Jarak Control', 'C4', 20, 'Benifit');

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
(151, '2020-11-24 07:46:41', 1, '0', 'Login'),
(152, '2020-11-24 07:49:20', 1, '0', 'Login'),
(153, '2020-11-24 07:50:05', 1, '0', 'Login'),
(154, '2020-11-24 07:50:21', 1, '0', 'Login'),
(155, '2020-11-24 07:50:46', 1, '0', 'Login'),
(156, '2020-11-24 07:51:11', 1, '0', 'Login'),
(157, '2020-11-24 07:51:23', 1, '0', 'Login'),
(158, '2020-11-24 07:51:47', 1, '0', 'Login'),
(159, '2020-11-24 07:51:50', 1, '0', 'Login'),
(160, '2020-11-24 07:51:56', 1, '0', 'Login'),
(161, '2020-11-24 07:52:18', 1, '0', 'Login'),
(162, '2020-11-24 07:52:30', 1, '0', 'Login'),
(163, '2020-11-24 07:52:36', 1, '0', 'Login'),
(164, '2020-11-24 07:52:42', 1, '0', 'Login'),
(165, '2020-11-24 07:55:15', 1, '0', 'Login'),
(166, '2020-11-24 07:55:32', 1, '0', 'Login'),
(167, '2020-11-24 07:55:56', 1, '0', 'Login'),
(168, '2020-11-24 07:56:05', 1, '0', 'Login'),
(169, '2020-11-24 07:56:10', 1, '0', 'Login'),
(170, '2020-11-24 07:56:16', 1, '0', 'Login'),
(171, '2020-11-24 07:56:44', 1, '0', 'Login'),
(172, '2020-11-24 07:56:55', 1, '0', 'Login'),
(173, '2020-11-24 07:58:02', 1, '3', 'mengubah data user'),
(174, '2020-11-24 07:58:14', 1, '4', 'menghapus data user'),
(175, '2020-11-24 07:58:18', 1, '4', 'menghapus data user'),
(176, '2020-11-24 07:58:24', 1, '3', 'mengubah data user'),
(177, '2020-11-24 08:01:24', 1, '4', 'menghapus data kriteria'),
(178, '2020-11-24 08:01:33', 1, '4', 'menghapus data kriteria'),
(179, '2020-11-24 08:01:36', 1, '4', 'menghapus data kriteria'),
(180, '2020-11-24 08:01:39', 1, '4', 'menghapus data kriteria'),
(181, '2020-11-24 08:01:42', 1, '4', 'menghapus data kriteria'),
(182, '2020-11-24 08:03:16', 1, '2', 'menambahkan kriteria'),
(183, '2020-11-24 08:03:38', 1, '2', 'menambahkan kriteria'),
(184, '2020-11-24 08:03:55', 1, '2', 'menambahkan kriteria'),
(185, '2020-11-24 08:04:02', 1, '3', 'mengubah data kriteria'),
(186, '2020-11-24 08:04:22', 1, '2', 'menambahkan kriteria'),
(187, '2020-11-24 08:08:30', 1, '2', 'menambahkan sub_kriteria'),
(188, '2020-11-24 08:08:42', 1, '2', 'menambahkan sub_kriteria'),
(189, '2020-11-24 08:08:55', 1, '2', 'menambahkan sub_kriteria'),
(190, '2020-11-24 08:09:06', 1, '2', 'menambahkan sub_kriteria'),
(191, '2020-11-24 08:09:16', 1, '2', 'menambahkan sub_kriteria'),
(192, '2020-11-24 08:09:33', 1, '2', 'menambahkan sub_kriteria'),
(193, '2020-11-24 08:09:52', 1, '2', 'menambahkan sub_kriteria'),
(194, '2020-11-24 08:11:01', 1, '2', 'menambahkan sub_kriteria'),
(195, '2020-11-24 08:11:21', 1, '2', 'menambahkan sub_kriteria'),
(196, '2020-11-24 08:11:34', 1, '2', 'menambahkan sub_kriteria'),
(197, '2020-11-24 08:11:47', 1, '2', 'menambahkan sub_kriteria'),
(198, '2020-11-24 08:11:58', 1, '2', 'menambahkan sub_kriteria'),
(199, '2020-11-24 08:12:13', 1, '2', 'menambahkan sub_kriteria'),
(200, '2020-11-24 08:12:31', 1, '2', 'menambahkan sub_kriteria'),
(201, '2020-11-24 08:12:43', 1, '3', 'mengubah data sub_kriteria'),
(202, '2020-11-24 08:12:53', 1, '3', 'mengubah data sub_kriteria'),
(203, '2020-11-24 08:13:03', 1, '3', 'mengubah data sub_kriteria'),
(204, '2020-11-24 08:13:20', 1, '2', 'menambahkan sub_kriteria'),
(205, '2020-11-24 08:13:35', 1, '2', 'menambahkan sub_kriteria'),
(206, '2020-11-24 08:14:02', 1, '4', 'menghapus data tenaga_kerja'),
(207, '2020-11-24 08:14:06', 1, '4', 'menghapus data tenaga_kerja'),
(208, '2020-11-24 08:14:09', 1, '4', 'menghapus data tenaga_kerja'),
(209, '2020-11-24 08:14:12', 1, '4', 'menghapus data tenaga_kerja'),
(210, '2020-11-24 08:14:14', 1, '4', 'menghapus data tenaga_kerja'),
(211, '2020-11-24 08:27:24', 1, '0', 'Login'),
(212, '2020-11-24 08:38:17', 1, '2', 'menambahkan kriteria'),
(213, '2020-11-24 08:38:36', 1, '2', 'menambahkan sub_kriteria'),
(214, '2020-11-24 08:38:48', 1, '3', 'mengubah data sub_kriteria'),
(215, '2020-11-24 08:39:15', 1, '2', 'menambahkan sub_kriteria'),
(216, '2020-11-24 08:39:27', 1, '2', 'menambahkan sub_kriteria'),
(217, '2020-11-24 08:45:51', 1, '2', 'menambahkan tenaga_kerja'),
(218, '2020-11-24 08:48:06', 1, '4', 'menghapus data tenaga_kerja'),
(219, '2020-11-24 08:48:13', 1, '2', 'menambahkan tenaga_kerja'),
(220, '2020-11-24 08:49:31', 1, '2', 'menambahkan tenaga_kerja'),
(221, '2020-11-24 08:49:48', 1, '3', 'mengubah data tenaga_kerja'),
(222, '2020-11-24 08:50:01', 1, '2', 'menambahkan tenaga_kerja'),
(223, '2020-11-24 08:50:14', 1, '2', 'menambahkan tenaga_kerja'),
(224, '2020-11-24 08:50:29', 1, '2', 'menambahkan tenaga_kerja'),
(225, '2020-11-24 08:50:42', 1, '2', 'menambahkan tenaga_kerja'),
(226, '2020-11-24 08:59:18', 1, '3', 'mengubah data tenaga_kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_naker` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_user`, `id_naker`, `id_kriteria`, `nilai`) VALUES
(72, 1, 8, 6, 22),
(73, 1, 8, 7, 28),
(74, 1, 8, 8, 31),
(75, 1, 8, 9, 33),
(76, 1, 9, 6, 21),
(77, 1, 9, 7, 27),
(78, 1, 9, 8, 30),
(79, 1, 9, 9, 33),
(80, 1, 10, 6, 21),
(81, 1, 10, 7, 28),
(82, 1, 10, 8, 30),
(83, 1, 10, 9, 35),
(84, 1, 11, 6, 21),
(85, 1, 11, 7, 28),
(86, 1, 11, 8, 31),
(87, 1, 11, 9, 34),
(88, 1, 12, 6, 23),
(89, 1, 12, 7, 28),
(90, 1, 12, 8, 32),
(91, 1, 12, 9, 34),
(92, 1, 13, 6, 21),
(93, 1, 13, 7, 28),
(94, 1, 13, 8, 31),
(95, 1, 13, 9, 34);

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
(20, 6, '> 20 Liter', 5),
(21, 6, '15 - 20 Liter', 4),
(22, 6, '10 - 15 Liter', 3),
(23, 6, '5 - 10 Liter', 2),
(24, 6, '< 5 Liter', 1),
(25, 7, '> 500.000.000', 1),
(26, 7, '400.000.000 - 300.000.000', 2),
(27, 7, '300.000.000 - 400.000.000', 3),
(28, 7, '200.000.000 - 300.000.000', 4),
(29, 7, '< 200.000.000', 5),
(30, 8, '30 Menit', 3),
(31, 8, '20 Menit', 2),
(32, 8, '10 Menit', 1),
(33, 9, '3000 Meter', 4),
(34, 9, '2000 Meter', 2),
(35, 9, '1000 Meter', 1);

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
(1, 1, 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 2, 'rohmatkamil@gmail.com', 'peserta', 'c51377707909e084ff1c94595a383bda');

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
-- Indeks untuk tabel `data_naker`
--
ALTER TABLE `data_naker`
  ADD PRIMARY KEY (`id_naker`);

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
  ADD KEY `id_naker` (`id_naker`),
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
-- AUTO_INCREMENT untuk tabel `data_naker`
--
ALTER TABLE `data_naker`
  MODIFY `id_naker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `hasil_keputusan`
--
ALTER TABLE `hasil_keputusan`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `log_histori`
--
ALTER TABLE `log_histori`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `hasil_keputusan_ibfk_2` FOREIGN KEY (`hasil`) REFERENCES `data_naker` (`id_naker`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `log_histori`
--
ALTER TABLE `log_histori`
  ADD CONSTRAINT `log_histori_ibfk_1` FOREIGN KEY (`log_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_naker`) REFERENCES `data_naker` (`id_naker`) ON DELETE CASCADE ON UPDATE CASCADE,
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
