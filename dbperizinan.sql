-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 06:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; START TRANSACTION; SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperizinan`
-perizinan-perizinan

-- --------------------------------------------------------

--
-- Table structure for table `detail_perizinan`
--
CREATE TABLE `detail_perizinan` (
 `id` INT(11) NOT NULL,
 `mhs_id` INT(11) NOT NULL,
 `tanggal_keluar` DATE NOT NULL,
 `jam_keluar` TIME(2) NOT NULL,
 `tanggal_masuk` DATE NOT NULL,
 `jam_masuk` TIME(2) NOT NULL,
 `keterangan` TINYINT(1) NOT NULL,
 `created_at` TIMESTAMP NULL DEFAULT NULL,
 `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasantri`
--
CREATE TABLE `mahasantri` (
 `id` INT(11) NOT NULL,
 `nama` VARCHAR(255) NOT NULL,
 `email` VARCHAR(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
 `password` VARCHAR(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
 `kelas` VARCHAR(225) NOT NULL,
 `angkatan` VARCHAR(225) NOT NULL,
 `kamar` VARCHAR(225) NOT NULL,
 `format_photo` ENUM('png','jpeg') NOT NULL,
 `photo` VARCHAR(255) DEFAULT NULL,
 `created_at` TIMESTAMP NULL DEFAULT NULL,
 `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasantri`
--
INSERT INTO `mahasantri` (`id`, `nama`, `email`, `password`, `kelas`, `angkatan`, `kamar`, `format_photo`, `photo`, `created_at`, `updated_at`) VALUES
(4, 'Jaya', 'jaya@gmail.com', '$2y$10$dpps9rCNnWC1zU90sRf/tOsk5Opcbyo28evVgaIbPQcng..53f3a.', 'PPL', '2023', '2', 'png', 'Andika ALIFIAN(2).png', '2023-06-17 13:55:57', '2024-01-05 07:45:31'),
(5, 'Kaylo Ardian Arkanda', 'ardian.kay3@gmail.com', 'ardikay333', 'PPL', '2021', '3', 'jpeg', 'foto.jpeg-1688120846.jpg', '2023-06-30 03:45:50', '2023-06-30 10:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
CREATE TABLE `migrations` (
 `id` INT(10) UNSIGNED NOT NULL,
 `migration` VARCHAR(255) NOT NULL,
 `batch` INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perizinan`
--
CREATE TABLE `perizinan` (
 `id` INT(11) NOT NULL,
 `tgl_keluar` DATE NOT NULL,
 `jam_keluar` TIME(2) NOT NULL,
 `tgl_masuk` DATE NOT NULL,
 `jam_masuk` TIME(2) NOT NULL,
 `status` VARCHAR(225) NOT NULL,
 `created_at` TIMESTAMP NULL DEFAULT NULL,
 `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perizinan`
--
INSERT INTO `perizinan` (`id`, `tgl_keluar`, `jam_keluar`, `tgl_masuk`, `jam_masuk`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-01-08', '04:00:00.00', '2024-01-09', '08:00:00.00', 'Aktif', '2024-01-09 10:51:58', '2024-01-09 10:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
CREATE TABLE `users` (
 `id` INT(10) UNSIGNED NOT NULL,
 `nama` VARCHAR(255) NOT NULL,
 `username` VARCHAR(255) NOT NULL,
 `email` VARCHAR(255) NOT NULL,
 `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
 `password` VARCHAR(255) NOT NULL,
 `remember_token` VARCHAR(100) DEFAULT NULL,
 `role` VARCHAR(255) NOT NULL,
 `photo` VARCHAR(255) DEFAULT NULL,
 `created_at` TIMESTAMP NULL DEFAULT NULL,
 `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--
INSERT INTO `users` (`id`, `nama`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'PeTIKJombang', 'petik_jombang', 'p3t1kj0mbang@gmail.com', NULL, '$2y$10$WFGeIm5aEk4hCj6415JkwObP0yYD2sTArgDbZ9GsypC00M2FE0oKW', NULL, 'Administrator', 'no-photo.png-1676942648.png', '2023-01-18 09:45:34', '2023-02-20 18:24:08'),
(4, 'Reza A', 'arez57', 'rezaA@gmail.com', NULL, '$2y$10$8864RqDnx1fRb.sXIbXRZOTCEszlF/BVVLJrTvtyDp5ed4WquNkVO', NULL, 'Security', NULL, '2023-01-18 09:45:37', '2023-06-30 14:11:34'),
(13, 'Kaylo Ardian Arkanda', 'ardi354', 'ardian.kay3@gmail.com', NULL, '$2y$10$pJLn5f4FYVoqj9aSl6VPeePNBHKNMZjGZYNMj/BKqi6Zw08joqlh.', NULL, 'Mahasantri', 'foto.jpeg-1688120846.jpg', '2023-06-30 03:45:51', '2023-06-30 10:27:27'),
(15, 'Jaya', 'jaya67', 'jaya@gmail.com', NULL, '$2y$10$VkP7Sz9CzvFAVKFAp3cnheMlkczU0mSofcuculquItHxrHHgtK3s6', NULL, 'Mahasantri', 'Andika ALIFIAN(2).png', '2023-06-30 10:17:12', '2024-01-05 07:45:31'),
(26, 'Fiannnnnnnnnnnnnn', 'fiannnn23', 'fiannnnnnn23@gmail.com', NULL, '$2y$10$jhTU0QqVfF9hoJkvQBGsWeva.9wN.Cd6YQndsnQaev1/L4EEz4thO', NULL, 'Administrator', 'fiannnn23-1704470126.png', '2024-01-05 08:55:26', '2024-01-05 08:55:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_perizinan`
--
ALTER TABLE `detail_perizinan` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasantri`
--
ALTER TABLE `mahasantri` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perizinan`
--
ALTER TABLE `perizinan` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_username_unique` (`username`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_perizinan`
--
ALTER TABLE `detail_perizinan` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasantri`
--
ALTER TABLE `mahasantri` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations` MODIFY `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perizinan`
--
ALTER TABLE `perizinan` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users` MODIFY `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27; COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
perizinan