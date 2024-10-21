-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2024 pada 02.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'raihandailham03@gmial.com', 1, '2023-06-07 23:16:08', 1),
(2, '::1', 'admin', NULL, '2023-06-07 23:16:55', 0),
(3, '::1', 'raihandailham03@gmial.com', 1, '2023-06-07 23:17:09', 1),
(4, '::1', 'raihandailham03@gmial.com', 1, '2023-06-07 23:29:56', 1),
(5, '::1', 'raihandailham03@gmial.com', 1, '2023-06-08 00:09:47', 1),
(6, '::1', 'raihandailham03@gmial.com', 1, '2023-06-11 18:23:59', 1),
(7, '::1', 'raihandailham03@gmial.com', 1, '2023-06-11 19:23:04', 1),
(8, '::1', 'admin', NULL, '2023-06-11 19:23:39', 0),
(9, '::1', 'DWADAD', NULL, '2023-06-11 19:28:37', 0),
(10, '::1', 'admin', NULL, '2023-06-11 19:40:33', 0),
(11, '::1', 'admin', NULL, '2023-06-11 19:43:36', 0),
(12, '::1', 'raihandailham03@gmial.com', 1, '2023-06-11 19:58:03', 1),
(13, '::1', 'admin', NULL, '2023-06-11 20:06:54', 0),
(14, '::1', 'admin', NULL, '2023-06-11 20:25:17', 0),
(15, '::1', 'admin', NULL, '2023-06-11 20:52:31', 0),
(16, '::1', 'raihandailham03@gmial.com', 1, '2023-06-11 20:52:54', 1),
(17, '::1', 'admin', NULL, '2023-06-11 20:53:06', 0),
(18, '::1', 'admin', NULL, '2023-06-11 20:53:19', 0),
(19, '::1', 'admin', NULL, '2023-06-11 20:54:05', 0),
(20, '::1', 'admin', NULL, '2023-06-11 21:15:00', 0),
(21, '::1', 'admin', NULL, '2023-06-11 21:15:28', 0),
(22, '::1', 'admin@mail.com', 2, '2023-06-11 21:16:18', 1),
(23, '::1', 'raihandailham03@gmial.com', 1, '2023-06-11 21:16:44', 1),
(24, '::1', 'raihandailham03@gmial.com', 1, '2023-06-11 21:25:14', 1),
(25, '::1', 'raihandailham03@gmial.com', 1, '2023-06-12 06:01:03', 1),
(26, '::1', 'raihandailham03@gmial.com', 1, '2023-06-12 06:02:10', 1),
(27, '::1', 'raihanda', NULL, '2023-07-07 03:28:58', 0),
(28, '::1', 'admin', NULL, '2023-07-08 01:14:11', 0),
(29, '::1', 'raihanda', NULL, '2023-07-08 01:14:20', 0),
(30, '::1', 'raihanda', NULL, '2023-07-08 01:14:28', 0),
(31, '::1', 'raihandailham03@gmial.com', 1, '2023-07-08 01:14:50', 1),
(32, '::1', 'raihandailham03@gmial.com', 1, '2023-07-08 01:34:36', 1),
(33, '::1', 'raihandailham03@gmial.com', 1, '2023-07-08 01:43:35', 1),
(34, '::1', 'raihandailham03@gmial.com', 1, '2023-07-08 01:52:08', 1),
(35, '::1', 'raihandailham03@gmial.com', 1, '2023-07-08 01:55:00', 1),
(36, '::1', 'raihanda', NULL, '2024-02-28 22:19:03', 0),
(37, '::1', 'admin', NULL, '2024-02-28 22:27:15', 0),
(38, '::1', 'raihanda', NULL, '2024-02-28 22:27:31', 0),
(39, '::1', 'admin', NULL, '2024-02-28 22:27:40', 0),
(40, '::1', 'raihanda', NULL, '2024-02-28 22:27:49', 0),
(41, '::1', 'raihanda', NULL, '2024-02-28 22:27:50', 0),
(42, '::1', 'admin', NULL, '2024-02-28 22:28:00', 0),
(43, '::1', 'admin', NULL, '2024-02-28 22:28:08', 0),
(44, '::1', 'admin', NULL, '2024-02-28 22:28:25', 0),
(45, '::1', 'admin', NULL, '2024-02-28 22:29:58', 0),
(46, '::1', 'admin', NULL, '2024-02-28 22:30:13', 0),
(47, '::1', 'admin', NULL, '2024-02-28 22:30:30', 0),
(48, '::1', 'admin', NULL, '2024-02-28 22:30:43', 0),
(49, '::1', 'admin', NULL, '2024-02-28 22:30:53', 0),
(50, '::1', 'admin', NULL, '2024-02-28 22:31:03', 0),
(51, '::1', 'admin', NULL, '2024-02-28 22:31:36', 0),
(52, '::1', 'admin', NULL, '2024-02-28 22:31:45', 0),
(53, '::1', 'admin', NULL, '2024-02-28 22:31:53', 0),
(54, '::1', 'raihanda', NULL, '2024-02-28 22:32:45', 0),
(55, '::1', 'raihanda', NULL, '2024-02-28 22:32:59', 0),
(56, '::1', 'raihanda', NULL, '2024-02-28 22:33:10', 0),
(57, '::1', 'admin', NULL, '2024-02-28 22:33:56', 0),
(58, '::1', 'raihandailham03@gmial.com', 1, '2024-02-28 22:34:07', 1),
(59, '::1', 'admin', NULL, '2024-06-03 10:02:07', 0),
(60, '::1', 'admin', NULL, '2024-06-03 10:02:18', 0),
(61, '::1', 'admin', NULL, '2024-06-03 10:02:30', 0),
(62, '::1', 'admin', NULL, '2024-06-03 10:02:41', 0),
(63, '::1', 'admin@mail.com', 3, '2024-06-03 10:06:33', 1),
(64, '::1', 'ssss', NULL, '2024-06-03 10:35:07', 0),
(65, '::1', 'sss', NULL, '2024-06-03 10:35:23', 0),
(66, '::1', 'admin@mail.com', 3, '2024-06-04 16:03:53', 1),
(67, '::1', 'admin@mail.com', 3, '2024-06-04 22:45:34', 1),
(68, '::1', 'raihan@mail.com', 4, '2024-06-04 23:46:14', 1),
(69, '::1', 'admin@mail.com', 3, '2024-06-04 23:59:47', 1),
(70, '::1', 'admin@mail.com', 3, '2024-06-05 01:16:24', 1),
(71, '::1', 'admin1', NULL, '2024-06-05 01:31:58', 0),
(72, '::1', 'admin@mail.com', 3, '2024-06-05 01:34:16', 1),
(73, '::1', 'admin@mail.com', 3, '2024-06-05 01:36:59', 1),
(74, '::1', 'admin@mail.com', 3, '2024-06-05 01:37:17', 1),
(75, '::1', 'admin@mail.com', 3, '2024-06-05 01:38:34', 1),
(76, '::1', 'raihan@mail.com', 4, '2024-06-05 01:39:16', 1),
(77, '::1', 'raihan@mail.com', 4, '2024-06-05 01:42:38', 1),
(78, '::1', 'admin@mail.com', 3, '2024-06-05 01:42:56', 1),
(79, '::1', 'raihan@mail.com', 4, '2024-06-05 01:45:42', 1),
(80, '::1', 'admin@mail.com', 3, '2024-06-06 23:17:56', 1),
(81, '::1', 'raihanda', NULL, '2024-06-06 23:25:22', 0),
(82, '::1', 'raihan@mail.com', 4, '2024-06-06 23:25:39', 1),
(83, '::1', 'raihan@mail.com', 4, '2024-06-20 13:20:20', 1),
(84, '::1', 'admin@mail.com', 3, '2024-06-20 13:21:06', 1),
(85, '::1', 'raihan@mail.com', 4, '2024-06-20 14:04:58', 1),
(86, '::1', 'raihan@mail.com', 4, '2024-06-20 16:47:32', 1),
(87, '::1', 'admin@mail.com', 3, '2024-06-20 16:57:47', 1),
(88, '::1', 'admin@mail.com', 3, '2024-06-20 17:02:42', 1),
(89, '::1', 'raihan@mail.com', 4, '2024-06-20 17:03:18', 1),
(90, '::1', 'admin@mail.com', 3, '2024-06-20 17:03:42', 1),
(91, '::1', 'raihan@mail.com', 4, '2024-06-20 17:22:54', 1),
(92, '::1', 'admin@mail.com', 3, '2024-06-20 17:23:14', 1),
(93, '::1', 'admin@mail.com', 3, '2024-06-22 00:28:45', 1),
(94, '::1', 'admin@mail.com', 3, '2024-06-22 00:29:18', 1),
(95, '::1', 'admin@mail.com', 3, '2024-06-22 00:34:36', 1),
(96, '::1', 'admin@mail.com', 3, '2024-06-22 00:35:04', 1),
(97, '::1', 'admin@mail.com', 3, '2024-06-22 00:36:41', 1),
(98, '::1', 'admin@mail.com', 3, '2024-06-22 00:56:47', 1),
(99, '::1', 'admin@mail.com', 3, '2024-06-23 01:05:23', 1),
(100, '::1', 'raihan@mail.com', 4, '2024-06-23 01:07:18', 1),
(101, '::1', 'raihan@mail.com', 4, '2024-06-23 01:22:39', 1),
(102, '::1', 'admin@mail.com', 3, '2024-06-23 01:24:50', 1),
(103, '::1', 'raihan@mail.com', 4, '2024-06-23 01:25:03', 1),
(104, '::1', 'admin@mail.com', 3, '2024-06-23 01:26:31', 1),
(105, '::1', 'raihan@mail.com', 4, '2024-06-23 01:26:55', 1),
(106, '::1', 'admin@mail.com', 3, '2024-06-23 01:30:35', 1),
(107, '::1', 'admin', NULL, '2024-06-23 01:38:47', 0),
(108, '::1', 'admin', NULL, '2024-06-23 01:38:59', 0),
(109, '::1', 'admin', NULL, '2024-06-23 01:39:15', 0),
(110, '::1', 'admin', NULL, '2024-06-23 01:39:29', 0),
(111, '::1', 'admin', NULL, '2024-06-23 01:39:39', 0),
(112, '::1', 'admin', NULL, '2024-06-23 01:39:40', 0),
(113, '::1', 'admin', NULL, '2024-06-23 01:39:51', 0),
(114, '::1', 'admin@mail.com', 3, '2024-06-23 01:40:54', 1),
(115, '::1', 'admin@mail.com', 3, '2024-06-23 01:53:13', 1),
(116, '::1', 'raihan@mail.com', 4, '2024-06-23 01:53:34', 1),
(117, '::1', 'admin@mail.com', 3, '2024-06-23 01:59:20', 1),
(118, '::1', 'admin@mail.com', 3, '2024-06-23 02:03:21', 1),
(119, '::1', 'admin@mail.com', 3, '2024-06-23 02:08:11', 1),
(120, '::1', 'admin@mail.com', 3, '2024-06-23 02:08:48', 1),
(121, '::1', 'admin', NULL, '2024-09-02 13:45:03', 0),
(122, '::1', 'admin', NULL, '2024-09-02 13:45:10', 0),
(123, '::1', 'admin', NULL, '2024-09-02 13:46:23', 0),
(124, '::1', 'raihan', NULL, '2024-09-02 13:47:43', 0),
(125, '::1', 'admin', NULL, '2024-09-25 14:20:47', 0),
(126, '::1', 'admin', NULL, '2024-09-25 14:20:53', 0),
(127, '::1', 'admin', NULL, '2024-09-25 14:21:01', 0),
(128, '::1', 'admin', NULL, '2024-09-25 14:21:17', 0),
(129, '::1', 'admin@mail.com', 3, '2024-09-25 14:21:28', 1),
(130, '::1', 'admin@mail.com', 3, '2024-09-25 21:22:54', 1),
(131, '::1', 'admin@mail.com', 3, '2024-09-30 10:21:42', 1),
(132, '::1', 'admin@mail.com', 3, '2024-10-08 13:50:08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-jadwal', 'manage all jadwal praktikum'),
(2, 'pengajuan-jadwal', 'mengajukan jadwal pemakaian laboratorium');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_tokens`
--

INSERT INTO `auth_tokens` (`id`, `selector`, `hashedValidator`, `user_id`, `expires`) VALUES
(13, '50862ebac42a7edf8da61273', '0c1fec81e9e3cb0a772a3e1b31a1054829e04653c3e56b148bf841e3e5e92e97', 3, '2024-07-03 02:08:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `kode_dosen` varchar(256) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `kode_dosen`, `nama_dosen`, `created_at`, `updated_at`) VALUES
(1, 'MKS23W', 'Sumanto', '2024-09-25 23:44:22', '2024-09-25 23:44:22'),
(2, 'GFGAU32D', 'Markinah', '2024-09-25 23:44:29', '2024-09-25 23:44:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(15) NOT NULL,
  `ruang` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'TF3A1', '2024-09-25 23:44:52', '2024-09-25 23:44:52'),
(2, 'TF3A2', '2024-09-25 23:45:00', '2024-09-25 23:45:00'),
(3, 'TF3A3', '2024-09-25 23:45:08', '2024-09-25 23:45:08'),
(4, 'TF3A4', '2024-09-25 23:45:18', '2024-09-25 23:45:18'),
(5, 'TF3A5', '2024-09-25 23:45:30', '2024-09-25 23:45:30'),
(6, 'TF3A6', '2024-09-25 23:45:43', '2024-09-25 23:45:43'),
(7, 'TF3A7', '2024-09-25 23:45:51', '2024-09-25 23:45:51'),
(8, 'TF3A8', '2024-09-25 23:46:01', '2024-09-25 23:46:01'),
(10, 'TF3A9', '2024-09-25 23:46:25', '2024-09-25 23:46:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id`, `nama_matkul`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa Sunda', '2024-09-25 23:46:52', '2024-09-25 23:46:52'),
(2, 'Bahasa Arab', '2024-09-25 23:46:58', '2024-09-25 23:46:58'),
(3, 'Bahasa Semut', '2024-09-25 23:47:12', '2024-09-25 23:47:12'),
(4, 'Bahasa Kasar', '2024-09-25 23:47:26', '2024-09-25 23:47:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1686149851, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id` int(11) NOT NULL,
  `nama_ruang` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id`, `nama_ruang`, `created_at`, `updated_at`) VALUES
(1, 'Lab Lantai 1', '2024-09-25 23:50:01', '2024-09-25 23:50:01'),
(2, 'Lab Lantai 2', '2024-09-25 23:50:09', '2024-09-25 23:50:09'),
(3, 'Lab Lantai 3', '2024-09-25 23:50:16', '2024-09-25 23:50:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sesi`
--

CREATE TABLE `sesi` (
  `id` int(11) NOT NULL,
  `sesi` int(11) NOT NULL,
  `waktu` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sesi`
--

INSERT INTO `sesi` (`id`, `sesi`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 1, '08:00 - 10:00', '2024-09-25 22:31:05', '2024-09-25 23:49:15'),
(2, 2, '10:30 - 13:30', '2024-09-25 23:49:25', '2024-09-25 23:49:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'admin@mail.com', 'admin', '$2y$10$1Jg7U3vbTAoPW9BzibuuMOBy561OCqSWehQ9m6Dd9XmCHtQ/JkzsG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-06-03 10:06:23', '2024-06-03 10:06:23', NULL),
(4, 'raihan@mail.com', 'raihan', '$2y$10$folntObv/OPFlRbVaSwrbuM4oyqSvWSVa1LqpwjgMraBb4mwe3m16', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-06-03 10:50:11', '2024-06-03 10:50:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_dosen` (`nama_dosen`) USING BTREE;

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matkul` (`matkul`),
  ADD KEY `ruang` (`ruang`),
  ADD KEY `waktu` (`waktu`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `nama_dosen` (`nama_dosen`) USING BTREE;

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_kelas` (`nama_kelas`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_matkul` (`nama_matkul`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_ruang` (`nama_ruang`);

--
-- Indeks untuk tabel `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `waktu` (`waktu`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `modul`
--
ALTER TABLE `modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sesi`
--
ALTER TABLE `sesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`ruang`) REFERENCES `ruang` (`nama_ruang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`waktu`) REFERENCES `sesi` (`waktu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_5` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`nama_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_6` FOREIGN KEY (`nama_dosen`) REFERENCES `dosen` (`nama_dosen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jadwal_ibfk_7` FOREIGN KEY (`matkul`) REFERENCES `matkul` (`nama_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
