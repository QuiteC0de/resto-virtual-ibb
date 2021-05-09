-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2021 at 06:56 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restovirtual`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(55) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `jenis`, `tgl_dibuat`, `gambar`, `keterangan`, `harga`) VALUES
(1, 'Ayam Goreng Rica Rica', 'makanan', '2019-02-14', 'FK1K73_ayam goreng rica rica.jpg', 'asam pedas & lada pisan', 15000),
(2, 'Ikan Bakar Banyumas', 'makanan', '2019-03-03', '6ouQaB_ikn bakar.jpg', 'biasa & special', 15000),
(3, 'lemon tea', 'minuman', '2019-03-28', '84UXzy_lemontea.jpg', 'habis minum langsung seger', 6000),
(6, 'Bandrek', 'minuman', '2019-03-23', 'GIZQSG_bandrek.jpg', 'varian : biasa, special with ciu, extremly seger', 6000),
(7, 'Es Campur Seger', 'makanan', '2019-03-03', 'giUok7_escampur.jpg', 'varian : biasa, special, special marjan', 12000),
(8, 'Paket Gurame Goreng/Bakar Banyumas', 'paket', '2019-03-27', 'X2ikpY_ikn bakar.jpg', 'Gurame bakar/goreng,\r\nnasi,\r\nteh tawar,\r\nkol goreng,\r\nsambel dadak', 27500),
(9, 'Ikan Gurame Bakar', 'makanan', '2019-03-30', 'B2al0A_Gurame Bakar.jpg', 'varian : Sambal Pedas, sambal tomat, sambal extra pedas', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('arditohilman29@gmail.com', '$2y$10$38bczsnlqrV9Jb6j4Ur96uwy/JXKaxHw8N8HFFsrRtYSvtZqFA7Ku', '2019-03-30 21:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesanan` int(4) NOT NULL,
  `kd_pesanan` varchar(6) NOT NULL,
  `id_pelanggan` varchar(4) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jml_menu` int(7) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `jenis_pesan` varchar(15) NOT NULL,
  `harga_satuan` int(10) NOT NULL,
  `total_bayar` int(10) NOT NULL,
  `stat` varchar(10) DEFAULT 'mengantri'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesanan`, `kd_pesanan`, `id_pelanggan`, `id_menu`, `jml_menu`, `tgl_pesan`, `ket`, `jenis_pesan`, `harga_satuan`, `total_bayar`, `stat`) VALUES
(1, 'iffG', '2', 1, 4, '2019-03-03', '[]', 'meja 3', 15000, 60000, 'dibayar'),
(2, 'iffG', '2', 3, 4, '2019-03-03', '[\"jangan pake es\"]', 'meja 3', 7000, 28000, 'dibayar'),
(3, 'qcha', '4', 1, 2, '2019-03-18', '[\"jangan pake sambel\"]', 'meja 3', 15000, 30000, 'dibayar'),
(4, 'qcha', '4', 7, 2, '2019-03-18', '[\"es nya yang banyak\"]', 'meja 3', 12000, 24000, 'dibayar'),
(5, 'dUlP', '4', 1, 4, '2019-03-19', '[\"jangan pake merica\"]', 'meja 1', 15000, 60000, 'dibayar'),
(6, 'RYAY', '9', 2, 4, '2019-03-20', '[\"special, sambelnya di pisah\"]', 'meja 3', 15000, 60000, 'dibayar'),
(7, 'g5hh', '9', 2, 4, '2019-03-20', '[\"special, sambelnya dipisah\"]', 'meja 3', 15000, 60000, 'dibayar'),
(8, 'SXFT', '9', 2, 4, '2019-03-20', '[\"special, sambelnya di pisah\"]', 'meja 2', 15000, 60000, 'dibayar'),
(9, 'SXFT', '9', 6, 2, '2019-03-20', '[]', 'meja 2', 6000, 12000, 'dibayar'),
(10, 'DWS6', '10', 2, 4, '2019-03-23', '[\"jangan pake sambel\"]', 'meja 4', 15000, 60000, 'dibayar'),
(11, 'DWS6', '10', 1, 4, '2019-03-23', '[]', 'meja 4', 15000, 60000, 'dibayar'),
(12, 'DWS6', '10', 3, 6, '2019-03-23', '[]', 'meja 4', 7000, 42000, 'dibayar'),
(13, '5Y5U', '4', 1, 3, '2019-03-23', '[]', 'Dibungkus', 15000, 45000, 'dibayar'),
(14, '5Y5U', '4', 2, 1, '2019-03-23', '[]', 'Dibungkus', 15000, 15000, 'dibayar'),
(15, '5Y5U', '4', 6, 4, '2019-03-23', '[]', 'Dibungkus', 6000, 24000, 'dibayar'),
(16, 'fRsm', '11', 1, 2, '2019-03-30', '[\"asam pedas\"]', 'Dibungkus', 15000, 30000, 'dibayar'),
(17, 'fRsm', '11', 3, 2, '2019-03-30', '[\"es nya sedikit aja\"]', 'Dibungkus', 6000, 12000, 'dibayar'),
(18, 'hkzm', '11', 9, 4, '2019-03-30', '[\"sambal tomat\"]', 'meja 3', 15000, 60000, 'dibayar'),
(19, 'hkzm', '11', 3, 2, '2019-03-30', '[]', 'meja 3', 6000, 12000, 'dibayar'),
(20, 'hkzm', '11', 6, 2, '2019-03-30', '[]', 'meja 3', 6000, 12000, 'dibayar'),
(21, 'TMBS', '9', 1, 2, '2019-03-30', '[]', 'meja 2', 15000, 30000, 'dibayar'),
(22, 'TMBS', '9', 9, 2, '2019-03-30', '[]', 'meja 2', 15000, 30000, 'dibayar'),
(23, 'TMBS', '9', 7, 2, '2019-03-30', '[]', 'meja 2', 12000, 24000, 'dibayar'),
(24, 'TMBS', '9', 6, 3, '2019-03-30', '[]', 'meja 2', 6000, 18000, 'dibayar'),
(25, 'XD9Q', '4', 1, 2, '2019-03-31', '[\"bumbu asam pedas\"]', 'Dibungkus', 15000, 30000, 'dibayar'),
(26, 'ZND0PL', '11', 1, 2, '2019-03-31', '[]', 'meja 2', 15000, 30000, 'dibayar'),
(27, 'ZND0PL', '11', 3, 2, '2019-03-31', '[]', 'meja 2', 6000, 12000, 'dibayar'),
(28, 'ZND0PL', '11', 2, 1, '2019-03-31', '[\"special\"]', 'meja 2', 15000, 15000, 'dibayar'),
(29, 'NHQVNO', '11', 2, 2, '2019-03-31', '[\"special\"]', 'meja 1', 15000, 30000, 'dibayar'),
(30, 'UD8YMT', '11', 2, 2, '2019-03-31', '[\"special\"]', 'Dibungkus', 15000, 30000, 'dibayar'),
(31, 'UD8YMT', '11', 3, 3, '2019-03-31', '[]', 'Dibungkus', 6000, 18000, 'dibayar'),
(32, 'PWYWWG', '11', 9, 1, '2019-03-31', '[\"sambel di pisah\"]', 'meja 2', 15000, 15000, 'dibayar'),
(33, 'PWYWWG', '11', 3, 1, '2019-03-31', '[]', 'meja 2', 6000, 6000, 'dibayar'),
(34, 'LZLLWG', '11', 8, 4, '2019-03-31', '[]', 'meja 4', 27500, 110000, 'dibayar'),
(35, 'MK34TP', '11', 3, 2, '2019-03-31', '[]', 'Dibungkus', 6000, 12000, 'dibayar'),
(36, 'MK34TP', '11', 6, 2, '2019-03-31', '[]', 'Dibungkus', 6000, 12000, 'dibayar'),
(37, 'MK34TP', '11', 7, 1, '2019-03-31', '[]', 'Dibungkus', 12000, 12000, 'dibayar'),
(38, 'PZORXP', '11', 9, 2, '2019-03-31', '[\"pakai sambel tomat\"]', 'meja 2', 15000, 30000, 'dibayar'),
(39, 'PZORXP', '11', 3, 2, '2019-03-31', '[]', 'meja 2', 6000, 12000, 'dibayar'),
(40, '4NPRZ6', '11', 3, 2, '2019-03-31', '[]', 'Dibungkus', 6000, 12000, 'dibayar'),
(41, 'OKNHBN', '11', 2, 2, '2019-04-01', '[]', 'meja 2', 15000, 30000, 'dibayar'),
(42, 'JJHCEJ', '11', 1, 4, '2019-04-14', '[]', 'meja 2', 15000, 60000, 'mengantri'),
(43, 'JJHCEJ', '11', 3, 5, '2019-04-14', '[]', 'meja 2', 6000, 30000, 'mengantri'),
(44, '0DCKYF', '17', 1, 6, '2021-05-07', '[]', 'null', 15000, 90000, 'dibayar'),
(45, '0DCKYF', '17', 2, 6, '2021-05-07', '[]', 'null', 15000, 90000, 'dibayar'),
(46, '0DCKYF', '17', 3, 12, '2021-05-07', '[]', 'null', 6000, 72000, 'dibayar'),
(47, '0DCKYF', '17', 7, 12, '2021-05-07', '[]', 'null', 12000, 144000, 'dibayar'),
(48, '0DCKYF', '17', 8, 3, '2021-05-07', '[]', 'null', 27500, 82500, 'dibayar'),
(49, 'VZUL47', '17', 9, 5, '2021-05-08', '[]', 'meja 4', 15000, 75000, 'dibayar'),
(50, 'VZUL47', '17', 3, 3, '2021-05-08', '[]', 'meja 4', 6000, 18000, 'dibayar'),
(51, 'VZUL47', '17', 7, 2, '2021-05-08', '[]', 'meja 4', 12000, 24000, 'dibayar'),
(52, 'UREJE2', '18', 1, 2, '2021-05-08', '[]', 'meja 1', 15000, 30000, 'dibayar'),
(53, 'UREJE2', '18', 3, 2, '2021-05-08', '[]', 'meja 1', 6000, 12000, 'dibayar'),
(54, '7CGAJQ', '19', 2, 2, '2021-05-08', '[]', 'Dibungkus', 15000, 30000, 'dibayar'),
(55, '7CGAJQ', '19', 6, 2, '2021-05-08', '[]', 'Dibungkus', 6000, 12000, 'dibayar'),
(56, 'CEYDBT', '3', 9, 4, '2021-05-08', '[]', 'Dibungkus', 15000, 60000, 'dibayar'),
(57, 'CEYDBT', '3', 7, 4, '2021-05-08', '[]', 'Dibungkus', 12000, 48000, 'dibayar'),
(58, 'CEYDBT', '3', 6, 2, '2021-05-08', '[]', 'Dibungkus', 6000, 12000, 'dibayar'),
(59, 'OSQQNP', '3', 7, 5, '2021-05-09', '[]', 'meja 2', 12000, 60000, 'dibayar'),
(60, 'OSQQNP', '3', 3, 2, '2021-05-09', '[]', 'meja 2', 6000, 12000, 'dibayar'),
(61, 'OSQQNP', '3', 6, 2, '2021-05-09', '[]', 'meja 2', 6000, 12000, 'dibayar'),
(62, 'OSQQNP', '3', 1, 3, '2021-05-09', '[\"asam pedas\"]', 'meja 2', 15000, 45000, 'dibayar'),
(63, 'OSQQNP', '3', 8, 3, '2021-05-09', '[\"gurame goreng\"]', 'meja 2', 27500, 82500, 'dibayar'),
(64, 'OSQQNP', '3', 2, 2, '2021-05-09', '[]', 'meja 2', 15000, 30000, 'dibayar'),
(65, 'IOTX7Y', '20', 1, 2, '2021-05-09', '[]', 'meja 1', 15000, 30000, 'dibayar'),
(66, 'IOTX7Y', '20', 3, 2, '2021-05-09', '[]', 'meja 1', 6000, 12000, 'dibayar'),
(67, '7D27QM', '20', 8, 2, '2021-05-09', '[]', 'meja 4', 27500, 55000, 'dibayar'),
(68, '7D27QM', '20', 3, 1, '2021-05-09', '[]', 'meja 4', 6000, 6000, 'dibayar'),
(69, '7D27QM', '20', 1, 2, '2021-05-09', '[]', 'meja 4', 15000, 30000, 'dibayar'),
(70, 'V29B3P', '20', 1, 1, '2021-05-09', '[]', 'Dibungkus', 15000, 15000, 'dibayar'),
(71, 'V29B3P', '20', 2, 4, '2021-05-09', '[]', 'Dibungkus', 15000, 60000, 'dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'udin penyok', 'udinlalala@gmail.com', 'user', NULL, '$2y$10$n.rT.bzzaFk2aWncFNGdBerIHUzZiI7G9qVihHAgZ3OG7bUxQGNZi', '', '', 'KncezlfmzL4V5LyHYmSe5K9YX08mVOJoESZxUEwCjHGYFYlwSsUY8ayhtSv7', '2019-02-20 20:41:06', '2019-02-20 20:41:06'),
(2, 'Ardito Hilman', 'arditohilman@gmail.com', 'owner', NULL, '$2y$10$NZDklEUBrvN65L0zdl18qOYvgjKjdSAr1TK2prZcU//X9bzC32kWa', '', '', 'YiPuVM7aHk7562lcRMIEVdX3jNemMzFPF9gpYJlYnSZBQmombxvJkTihaKBi', '2019-03-01 19:14:34', '2021-05-06 19:30:12'),
(3, 'Yayan Taryana', 'yayan@gmail.com', 'user', NULL, '$2y$10$rzwYqHbnTEJKXZCXNJzt2uClUrc2Iq0uWKmxPhr4SrRxMCq54s8MW', '', '', '4zaWFoK1uLu2HbWVjE7LU3Ly04WSu4Uiun3hPG6K8ANzh7h0ge209WPNSR8w', '2019-03-04 02:44:04', '2019-03-04 02:44:04'),
(4, 'Riva Putri Aulia', 'rivaaulia@gmail.com', 'admin', NULL, '$2y$10$3tqLplfHSe0Ih9uBaCheY.oevFZsI7FpBBDaQBkiy8zeVkN1zvA5K', '', '', '7KCB9o8Xo9UbVyLdzdFOO6Kn2zXi9fOafoXBC5tOcaytmd62EdHP1C2yqVXl', '2019-03-18 15:22:55', '2019-03-30 19:29:19'),
(5, 'Wawa Kuswara', 'wawan@gmail.com', 'user', NULL, '$2y$10$PmhpoanP1nwXWGmquucnbu21J4Nvqroe29qMb9HFNARbEish5MT5S', '', '', 'FHX510PRXVgV5XPBA1DdyWadtnfKhhqrSvS55YK5GCtZ1514Puoa601D3oo5', '2019-03-18 18:57:49', '2019-03-18 18:57:49'),
(8, 'Maman Suratman', 'Maman@gmail.com', 'admin', NULL, '$2y$10$Bu8.zQwlmADXn.X3YiZv1ubqGJjvW/n5TzjQyF0BkXF9fS0nl0RG6', '', '', 'vmEkQh5x29vgmgbjQvkQQKeKNPrUaje3umy1BXRx865m8kdfhwNXhvYbyuns', '2019-03-19 19:47:55', '2019-03-19 19:47:55'),
(9, 'Dadang komara', 'dang@gmail.com', 'user', NULL, '$2y$10$juzTmY2l3FVcCOq0UCsXQufi1roIyGWhAohb2CrwSqXzNrb.t.VSW', '', '', 'xQFZSLh0ekC0KOXSGQdOmKgMjMGJJ2J4GrNQjz27BVG4YiJ0m3XUhOlbBsL8', '2019-03-19 19:49:33', '2019-03-19 19:49:33'),
(10, 'Ujang Sukmara', 'Ujang@gmail.com', 'user', NULL, '$2y$10$QN0bnMsBeIWgDaCnhkZwd.FUENuMKg1W3mbPkZKlGEZKzl0bF16eG', '', '', 'YdxF0YhLeO80gu7PlKmAwLNwmOMHxcoe7ptcHLdQEaBxPlcDX69MihUkBM2v', '2019-03-23 01:43:25', '2019-03-23 01:43:25'),
(11, 'Junaedi', 'juna@gmail.com', 'user', NULL, '$2y$10$mOxulkpW5M6C3YMty6Mamu2qbLVin4AlHihCkELj1d44j.5s//Y6q', '', '', 'jjN3sXo2a1Szp7aKPzCIXbQc8h7RCm4kaKDKH7BzC78Wsw8Ow0slVJgm46DO', '2019-03-27 00:24:33', '2019-03-30 20:49:36'),
(13, 'Ardito Hilman', 'arditohilman@gmail.com', 'user', NULL, '$2y$10$UMm.1wOjFEGsbTESPveLNeuEzveBcgS0X11835C/kZVNy4727xWsK', NULL, NULL, '8yR3iqxQiSz5Pb342aFSuX22beuuKUi82Cl3VTATXJ0KwUg3dJsNKkt0Oq9x', '2019-03-31 01:25:28', '2019-03-31 01:25:28'),
(14, 'Ardito Hilman', 'arditohilman@gmail.com', 'user', NULL, '$2y$10$OIdJg0fwU1e9v3jI/UiUOOiosME606TjKACHfBpV/seXAu1SLTcUe', NULL, NULL, 'E6NSuuXWEsj3fXm7YcxH69wjDt4hTUjIuBMPUYsZpmlwlFhN6OqGvVJsPDtI', '2019-03-31 01:29:44', '2019-03-31 01:29:44'),
(15, 'Baru aja', 'barujuga@gmail.com', 'owner', NULL, '$2y$10$emEKBmapT9RnAteWhrFbK.s/cIYjKkUgubVllf3EdDCu6tP.3GCii', NULL, NULL, 'R9oC3lvb1nrfMK3IgVyChRQF3RirHf4J0tuTslEolRqD2q9c6SDtvtkx3tqe', '2019-03-31 20:01:33', '2019-03-31 20:01:33'),
(16, 'Admin', 'admin@mail.com', 'admin', NULL, '$2y$10$rzwYqHbnTEJKXZCXNJzt2uClUrc2Iq0uWKmxPhr4SrRxMCq54s8MW', NULL, NULL, NULL, '2021-05-06 19:33:43', '2021-05-06 19:33:43'),
(17, 'Vincenzo cassano', 'vincenzo.c@gmail.com', 'user', NULL, '$2y$10$Oc3mwNVFVLgJUNQJMGT6heTR5TpLSaNzNRsd7.6dWMVhb6s.t7QCW', NULL, NULL, 'tWiC6VcColERPgJt5DhLs9EuyOpdDz449gozhN53bagcLiWIbka6PgQhJn1S', '2021-05-06 19:36:00', '2021-05-06 19:36:00'),
(18, 'Najwa Syihab', 'nun.najwa@gmail.com', 'user', NULL, '$2y$10$l./FEvHVJwgMhoiuYq74sOqtcAvrsk8HEWyM4008E4Q2Oe0dsvuou', NULL, NULL, 'DRgP6H5KJ25RY4geWHmRl6DlOG3YeYOHZu12ogeR2wL15HepXmiwitQHwEWE', '2021-05-07 23:05:30', '2021-05-07 23:05:30'),
(19, 'Budi dudi', 'budi@gmail.com', 'user', NULL, '$2y$10$tA.E8AVb611HbDa71dGLbOz66DTMXrTldnwhFxOY0jnTLI5sXD3JG', NULL, NULL, 'ufHJHedPCqKGstnNN1edVgVfxX9W0gdKnenGNWWsdepu5pST4kLKdV2jvH2L', '2021-05-07 23:07:52', '2021-05-07 23:07:52'),
(20, 'Angelya Natasya', 'Angel@mail.com', 'user', NULL, '$2y$10$WtvSP2IN9vORa4KkQHqoVO09xJ.YVHgOt2kgKYTqBhS0MXMEP8tdK', NULL, NULL, '9ycIDgGSqKI8zW4H4TDlZvmCjqPDaCM8wy33wwhI2pBJrHpGKTKhXIrzFPWE', '2021-05-08 20:28:33', '2021-05-08 20:28:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesanan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
