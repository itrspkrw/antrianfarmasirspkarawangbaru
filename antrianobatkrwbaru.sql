-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2024 pada 15.13
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrianobatkrwbaru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrianbpjs_obat_jadi`
--

CREATE TABLE `antrianbpjs_obat_jadi` (
  `id_transaksi` int(11) NOT NULL,
  `no_antrian` int(20) DEFAULT NULL,
  `status` int(20) DEFAULT 0,
  `date_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrianbpjs_obat_jadi`
--

INSERT INTO `antrianbpjs_obat_jadi` (`id_transaksi`, `no_antrian`, `status`, `date_time`) VALUES
(1, 999, 1, 23022021),
(2, 610, 1, 23022021),
(3, 611, 1, 23022021),
(4, 300, 1, 24022021),
(5, 301, 0, 24022021),
(6, 302, 0, 24022021),
(7, 303, 0, 24022021),
(8, 304, 0, 24022021),
(9, 1, 1, 25022021),
(10, 2, 1, 25022021),
(11, 3, 1, 25022021),
(12, 4, 1, 25022021),
(13, 5, 1, 25022021),
(14, 6, 1, 25022021),
(15, 7, 1, 25022021),
(16, 8, 1, 25022021),
(17, 9, 1, 25022021),
(18, 10, 1, 25022021),
(19, 11, 1, 25022021),
(20, 12, 1, 25022021),
(21, 13, 1, 25022021),
(22, 14, 1, 25022021),
(23, 15, 1, 25022021),
(24, 16, 1, 25022021),
(25, 17, 1, 25022021),
(26, 18, 1, 25022021),
(27, 299, 1, 25022021),
(28, 20, 0, 25022021),
(29, 21, 0, 25022021),
(30, 22, 0, 25022021),
(31, 23, 0, 25022021),
(32, 24, 0, 25022021),
(33, 25, 0, 25022021),
(34, 26, 0, 25022021),
(35, 27, 0, 25022021),
(36, 28, 0, 25022021),
(37, 29, 0, 25022021),
(38, 30, 0, 25022021),
(39, 31, 0, 25022021),
(40, 32, 0, 25022021),
(41, 33, 0, 25022021),
(42, 34, 0, 25022021),
(43, 35, 0, 25022021),
(44, 36, 0, 25022021),
(45, 37, 0, 25022021),
(46, 38, 0, 25022021),
(47, 39, 0, 25022021),
(48, 40, 0, 25022021),
(49, 41, 0, 25022021),
(50, 42, 0, 25022021),
(51, 43, 0, 25022021),
(52, 44, 0, 25022021),
(53, 45, 0, 25022021),
(54, 46, 0, 25022021),
(55, 47, 0, 25022021),
(56, 48, 0, 25022021),
(57, 49, 0, 25022021),
(58, 50, 0, 25022021),
(59, 51, 0, 25022021),
(60, 52, 0, 25022021),
(61, 53, 0, 25022021),
(62, 54, 0, 25022021),
(63, 55, 0, 25022021),
(64, 56, 0, 25022021),
(65, 57, 0, 25022021),
(66, 58, 0, 25022021),
(67, 59, 0, 25022021),
(68, 60, 0, 25022021),
(69, 61, 0, 25022021),
(70, 62, 0, 25022021),
(71, 63, 0, 25022021),
(72, 64, 0, 25022021),
(73, 65, 0, 25022021),
(74, 66, 0, 25022021),
(75, 67, 0, 25022021),
(76, 299, 0, 25022021),
(77, 1, 1, 27022021),
(78, 2, 1, 27022021),
(79, 3, 1, 27022021),
(80, 4, 1, 27022021),
(81, 5, 1, 27022021),
(82, 6, 1, 27022021),
(83, 7, 0, 27022021),
(84, 8, 0, 27022021),
(85, 9, 0, 27022021),
(86, 10, 0, 27022021),
(87, 1, 1, 22012024),
(88, 1, 0, 5022024),
(89, 2, 0, 5022024),
(90, 3, 0, 5022024),
(91, 4, 0, 5022024),
(92, 5, 0, 5022024),
(93, 6, 0, 5022024),
(94, 7, 0, 5022024),
(95, 8, 0, 5022024),
(96, 9, 0, 5022024),
(97, 10, 0, 5022024),
(98, 11, 0, 5022024),
(99, 12, 0, 5022024),
(100, 1, 1, 6022024),
(101, 2, 1, 6022024),
(102, 3, 1, 6022024),
(103, 1, 1, 7022024),
(104, 1, 0, 13052024),
(105, 1, 1, 16052024),
(106, 2, 1, 16052024),
(107, 1, 1, 20052024),
(108, 2, 1, 20052024),
(109, 3, 1, 20052024),
(110, 4, 1, 20052024),
(111, 1, 1, 21052024),
(112, 2, 1, 21052024),
(113, 3, 1, 21052024),
(114, 4, 1, 21052024),
(115, 1, 1, 22052024),
(116, 2, 1, 22052024),
(117, 3, 1, 22052024),
(118, 4, 0, 22052024),
(119, 5, 0, 22052024),
(120, 6, 0, 22052024),
(121, 7, 0, 22052024),
(122, 1, 1, 31052024),
(123, 1, 1, 3062024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrianbpjs_obat_racikan`
--

CREATE TABLE `antrianbpjs_obat_racikan` (
  `id_transaksi` int(11) NOT NULL,
  `no_antrian` int(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0,
  `date_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrianbpjs_obat_racikan`
--

INSERT INTO `antrianbpjs_obat_racikan` (`id_transaksi`, `no_antrian`, `status`, `date_time`) VALUES
(1, 1, 1, 22022021),
(2, 2, 0, 22022021),
(3, 3, 0, 22022021),
(4, 4, 0, 22022021),
(5, 5, 0, 22022021),
(6, 6, 0, 22022021),
(7, 7, 0, 22022021),
(8, 1, 1, 23022021),
(9, 2, 0, 23022021),
(10, 3, 0, 23022021),
(11, 4, 0, 23022021),
(12, 22, 1, 24022021),
(13, 299, 1, 24022021),
(14, 102, 1, 24022021),
(15, 999, 1, 24022021),
(16, 1, 1, 25022021),
(17, 2, 1, 25022021),
(18, 3, 1, 25022021),
(19, 4, 1, 25022021),
(20, 5, 1, 25022021),
(21, 6, 1, 25022021),
(22, 7, 1, 25022021),
(23, 8, 1, 25022021),
(24, 9, 1, 25022021),
(25, 10, 1, 25022021),
(26, 11, 1, 25022021),
(27, 12, 1, 25022021),
(28, 13, 0, 25022021),
(29, 14, 0, 25022021),
(30, 15, 0, 25022021),
(31, 16, 0, 25022021),
(32, 17, 0, 25022021),
(33, 18, 0, 25022021),
(34, 19, 0, 25022021),
(35, 20, 0, 25022021),
(36, 21, 0, 25022021),
(37, 22, 0, 25022021),
(38, 23, 0, 25022021),
(39, 24, 0, 25022021),
(40, 25, 0, 25022021),
(41, 26, 0, 25022021),
(42, 27, 0, 25022021),
(43, 28, 0, 25022021),
(44, 29, 0, 25022021),
(45, 30, 0, 25022021),
(46, 31, 0, 25022021),
(47, 1, 1, 27022021),
(48, 2, 1, 27022021),
(49, 3, 1, 27022021),
(50, 4, 1, 27022021),
(51, 5, 0, 27022021),
(52, 6, 0, 27022021),
(53, 7, 0, 27022021),
(54, 8, 0, 27022021),
(55, 9, 0, 27022021),
(56, 10, 0, 27022021),
(57, 1, 0, 22012024),
(58, 1, 0, 3022024),
(59, 1, 0, 5022024),
(60, 2, 0, 5022024),
(61, 3, 0, 5022024),
(62, 4, 0, 5022024),
(63, 5, 0, 5022024),
(64, 6, 0, 5022024),
(65, 7, 0, 5022024),
(66, 8, 0, 5022024),
(67, 9, 0, 5022024),
(68, 10, 0, 5022024),
(69, 11, 0, 5022024),
(70, 12, 0, 5022024),
(71, 13, 0, 5022024),
(72, 14, 0, 5022024),
(73, 15, 0, 5022024),
(74, 16, 0, 5022024),
(75, 1, 1, 6022024),
(76, 2, 1, 6022024),
(77, 3, 0, 6022024),
(78, 1, 1, 7022024),
(79, 1, 1, 13052024),
(80, 1, 1, 16052024),
(81, 2, 1, 16052024),
(82, 1, 1, 20052024),
(83, 2, 1, 20052024),
(84, 3, 1, 20052024),
(85, 1, 1, 21052024),
(86, 2, 1, 21052024),
(87, 3, 1, 21052024),
(88, 4, 1, 21052024),
(89, 5, 1, 21052024),
(90, 1, 1, 22052024),
(91, 2, 1, 22052024),
(92, 3, 1, 22052024),
(93, 4, 1, 22052024),
(94, 5, 1, 22052024),
(95, 6, 0, 22052024),
(96, 7, 0, 22052024),
(97, 1, 1, 31052024),
(98, 1, 1, 3062024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_obat_jadi`
--

CREATE TABLE `antrian_obat_jadi` (
  `id_transaksi` int(11) NOT NULL,
  `no_antrian` int(20) DEFAULT NULL,
  `status` int(20) DEFAULT 0,
  `date_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian_obat_jadi`
--

INSERT INTO `antrian_obat_jadi` (`id_transaksi`, `no_antrian`, `status`, `date_time`) VALUES
(1, 999, 1, 23022021),
(2, 610, 1, 23022021),
(3, 611, 1, 23022021),
(4, 300, 1, 24022021),
(5, 301, 0, 24022021),
(6, 302, 0, 24022021),
(7, 303, 0, 24022021),
(8, 304, 0, 24022021),
(9, 1, 1, 25022021),
(10, 2, 1, 25022021),
(11, 3, 1, 25022021),
(12, 4, 1, 25022021),
(13, 5, 1, 25022021),
(14, 6, 1, 25022021),
(15, 7, 1, 25022021),
(16, 8, 1, 25022021),
(17, 9, 1, 25022021),
(18, 10, 1, 25022021),
(19, 11, 1, 25022021),
(20, 12, 1, 25022021),
(21, 13, 1, 25022021),
(22, 14, 1, 25022021),
(23, 15, 1, 25022021),
(24, 16, 1, 25022021),
(25, 17, 1, 25022021),
(26, 18, 1, 25022021),
(27, 299, 1, 25022021),
(28, 20, 0, 25022021),
(29, 21, 0, 25022021),
(30, 22, 0, 25022021),
(31, 23, 0, 25022021),
(32, 24, 0, 25022021),
(33, 25, 0, 25022021),
(34, 26, 0, 25022021),
(35, 27, 0, 25022021),
(36, 28, 0, 25022021),
(37, 29, 0, 25022021),
(38, 30, 0, 25022021),
(39, 31, 0, 25022021),
(40, 32, 0, 25022021),
(41, 33, 0, 25022021),
(42, 34, 0, 25022021),
(43, 35, 0, 25022021),
(44, 36, 0, 25022021),
(45, 37, 0, 25022021),
(46, 38, 0, 25022021),
(47, 39, 0, 25022021),
(48, 40, 0, 25022021),
(49, 41, 0, 25022021),
(50, 42, 0, 25022021),
(51, 43, 0, 25022021),
(52, 44, 0, 25022021),
(53, 45, 0, 25022021),
(54, 46, 0, 25022021),
(55, 47, 0, 25022021),
(56, 48, 0, 25022021),
(57, 49, 0, 25022021),
(58, 50, 0, 25022021),
(59, 51, 0, 25022021),
(60, 52, 0, 25022021),
(61, 53, 0, 25022021),
(62, 54, 0, 25022021),
(63, 55, 0, 25022021),
(64, 56, 0, 25022021),
(65, 57, 0, 25022021),
(66, 58, 0, 25022021),
(67, 59, 0, 25022021),
(68, 60, 0, 25022021),
(69, 61, 0, 25022021),
(70, 62, 0, 25022021),
(71, 63, 0, 25022021),
(72, 64, 0, 25022021),
(73, 65, 0, 25022021),
(74, 66, 0, 25022021),
(75, 67, 0, 25022021),
(76, 299, 0, 25022021),
(77, 1, 1, 27022021),
(78, 2, 1, 27022021),
(79, 3, 1, 27022021),
(80, 4, 1, 27022021),
(81, 5, 1, 27022021),
(82, 6, 1, 27022021),
(83, 7, 0, 27022021),
(84, 8, 0, 27022021),
(85, 9, 0, 27022021),
(86, 10, 0, 27022021),
(87, 1, 1, 22012024),
(88, 1, 0, 5022024),
(89, 2, 0, 5022024),
(90, 3, 0, 5022024),
(91, 4, 0, 5022024),
(92, 5, 0, 5022024),
(93, 6, 0, 5022024),
(94, 7, 0, 5022024),
(95, 8, 0, 5022024),
(96, 9, 0, 5022024),
(97, 10, 0, 5022024),
(98, 11, 0, 5022024),
(99, 12, 0, 5022024),
(100, 1, 1, 6022024),
(101, 2, 1, 6022024),
(102, 3, 1, 6022024),
(103, 1, 1, 7022024),
(104, 2, 1, 7022024),
(105, 3, 0, 7022024),
(106, 1, 1, 16052024),
(107, 2, 1, 16052024),
(108, 1, 1, 20052024),
(109, 2, 1, 20052024),
(110, 1, 1, 21052024),
(111, 2, 1, 21052024),
(112, 1, 1, 22052024),
(113, 2, 1, 22052024),
(114, 3, 1, 22052024),
(115, 4, 1, 22052024),
(116, 5, 1, 22052024),
(117, 6, 0, 22052024),
(118, 7, 0, 22052024),
(119, 8, 0, 22052024),
(120, 9, 0, 22052024),
(121, 10, 0, 22052024),
(122, 11, 0, 22052024),
(123, 12, 0, 22052024),
(124, 13, 0, 22052024),
(125, 14, 0, 22052024),
(126, 15, 0, 22052024),
(127, 16, 0, 22052024),
(128, 17, 0, 22052024),
(129, 18, 0, 22052024),
(130, 19, 0, 22052024),
(131, 20, 0, 22052024),
(132, 21, 0, 22052024),
(133, 1, 1, 29052024),
(134, 1, 1, 31052024),
(135, 1, 1, 3062024),
(136, 2, 1, 3062024),
(137, 3, 0, 3062024),
(138, 4, 0, 3062024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_obat_racikan`
--

CREATE TABLE `antrian_obat_racikan` (
  `id_transaksi` int(11) NOT NULL,
  `no_antrian` int(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0,
  `date_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian_obat_racikan`
--

INSERT INTO `antrian_obat_racikan` (`id_transaksi`, `no_antrian`, `status`, `date_time`) VALUES
(1, 1, 1, 22022021),
(2, 2, 0, 22022021),
(3, 3, 0, 22022021),
(4, 4, 0, 22022021),
(5, 5, 0, 22022021),
(6, 6, 0, 22022021),
(7, 7, 0, 22022021),
(8, 1, 1, 23022021),
(9, 2, 0, 23022021),
(10, 3, 0, 23022021),
(11, 4, 0, 23022021),
(12, 22, 1, 24022021),
(13, 299, 1, 24022021),
(14, 102, 1, 24022021),
(15, 999, 1, 24022021),
(16, 1, 1, 25022021),
(17, 2, 1, 25022021),
(18, 3, 1, 25022021),
(19, 4, 1, 25022021),
(20, 5, 1, 25022021),
(21, 6, 1, 25022021),
(22, 7, 1, 25022021),
(23, 8, 1, 25022021),
(24, 9, 1, 25022021),
(25, 10, 1, 25022021),
(26, 11, 1, 25022021),
(27, 12, 1, 25022021),
(28, 13, 0, 25022021),
(29, 14, 0, 25022021),
(30, 15, 0, 25022021),
(31, 16, 0, 25022021),
(32, 17, 0, 25022021),
(33, 18, 0, 25022021),
(34, 19, 0, 25022021),
(35, 20, 0, 25022021),
(36, 21, 0, 25022021),
(37, 22, 0, 25022021),
(38, 23, 0, 25022021),
(39, 24, 0, 25022021),
(40, 25, 0, 25022021),
(41, 26, 0, 25022021),
(42, 27, 0, 25022021),
(43, 28, 0, 25022021),
(44, 29, 0, 25022021),
(45, 30, 0, 25022021),
(46, 31, 0, 25022021),
(47, 1, 1, 27022021),
(48, 2, 1, 27022021),
(49, 3, 1, 27022021),
(50, 4, 1, 27022021),
(51, 5, 0, 27022021),
(52, 6, 0, 27022021),
(53, 7, 0, 27022021),
(54, 8, 0, 27022021),
(55, 9, 0, 27022021),
(56, 10, 0, 27022021),
(57, 1, 0, 22012024),
(58, 1, 0, 3022024),
(59, 1, 0, 5022024),
(60, 2, 0, 5022024),
(61, 3, 0, 5022024),
(62, 4, 0, 5022024),
(63, 5, 0, 5022024),
(64, 6, 0, 5022024),
(65, 7, 0, 5022024),
(66, 8, 0, 5022024),
(67, 9, 0, 5022024),
(68, 10, 0, 5022024),
(69, 11, 0, 5022024),
(70, 12, 0, 5022024),
(71, 13, 0, 5022024),
(72, 14, 0, 5022024),
(73, 15, 0, 5022024),
(74, 16, 0, 5022024),
(75, 1, 1, 6022024),
(76, 2, 1, 6022024),
(77, 3, 0, 6022024),
(78, 1, 1, 7022024),
(79, 1, 1, 16052024),
(80, 2, 1, 16052024),
(81, 1, 1, 20052024),
(82, 1, 1, 21052024),
(83, 2, 1, 21052024),
(84, 3, 1, 21052024),
(85, 1, 1, 22052024),
(86, 2, 1, 22052024),
(87, 3, 0, 22052024),
(88, 4, 0, 22052024),
(89, 1, 1, 31052024),
(90, 2, 1, 31052024),
(91, 1, 1, 3062024),
(92, 2, 0, 3062024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `image_slide`
--

CREATE TABLE `image_slide` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` varchar(256) NOT NULL,
  `img_slide` varchar(256) NOT NULL,
  `active` int(2) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `image_slide`
--

INSERT INTO `image_slide` (`id`, `title`, `content`, `img_slide`, `active`, `date_created`) VALUES
(7, '', '', 'F10000211.JPG', 1, 1614390180),
(10, '', '', 'F10000092.JPG', 0, 1614391721),
(11, '', '', 'F1000015.JPG', 0, 1614391726),
(12, '', '', 'F1020006.JPG', 0, 1614393200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(7, 1, 2),
(14, 1, 4),
(15, 2, 4),
(19, 2, 2),
(20, 1, 3),
(21, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Page');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(10, 2, 'My Profile', 'user', 'fas fa-fw fa-user-circle', 1),
(13, 4, 'New Slide', 'page/new_slide', 'fas fa-fw fa-plus-circle', 1),
(14, 1, 'Dashboard', 'admin', 'fa fa-fw fa-tachometer-alt', 1),
(15, 1, 'Role', 'admin/role', 'fa fa-fw fa-user-tag', 1),
(16, 1, 'Account', 'admin/account_user', 'fa fa-fw fa-users', 1),
(17, 1, 'Add User', 'auth/registration', 'fas fa-fw fa-user-plus', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrianbpjs_obat_jadi`
--
ALTER TABLE `antrianbpjs_obat_jadi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `antrianbpjs_obat_racikan`
--
ALTER TABLE `antrianbpjs_obat_racikan`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `antrian_obat_jadi`
--
ALTER TABLE `antrian_obat_jadi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `antrian_obat_racikan`
--
ALTER TABLE `antrian_obat_racikan`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `image_slide`
--
ALTER TABLE `image_slide`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `role_id` (`role_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menu` (`menu_id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrianbpjs_obat_jadi`
--
ALTER TABLE `antrianbpjs_obat_jadi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT untuk tabel `antrianbpjs_obat_racikan`
--
ALTER TABLE `antrianbpjs_obat_racikan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `antrian_obat_jadi`
--
ALTER TABLE `antrian_obat_jadi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT untuk tabel `antrian_obat_racikan`
--
ALTER TABLE `antrian_obat_racikan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `image_slide`
--
ALTER TABLE `image_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `menu_id` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `sub_menu` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
