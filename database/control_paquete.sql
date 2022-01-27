-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 03:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `materno`
--

-- --------------------------------------------------------

--
-- Table structure for table `control_paquete`
--

CREATE TABLE `control_paquete` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `control_id` bigint(20) UNSIGNED NOT NULL,
  `paquete_id` bigint(20) UNSIGNED NOT NULL,
  `rango_semana_embarazo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0;0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `control_paquete`
--

INSERT INTO `control_paquete` (`id`, `control_id`, `paquete_id`, `rango_semana_embarazo`, `created_at`, `updated_at`) VALUES
(1, 12, 10, '5;9', NULL, NULL),
(2, 12, 45, '5;9', NULL, NULL),
(3, 1, 2, '5;13.6', NULL, NULL),
(4, 1, 3, '13.7;23.5', NULL, NULL),
(5, 1, 4, '23.6;35.1', NULL, NULL),
(6, 2, 5, '5;9', NULL, NULL),
(7, 2, 11, '9.1;13.1', NULL, NULL),
(8, 2, 16, '13.2;17.2', NULL, NULL),
(9, 2, 21, '17.3;21', NULL, NULL),
(10, 2, 26, '21.1;25', NULL, NULL),
(11, 2, 29, '25.1;29.1', NULL, NULL),
(12, 2, 33, '29.2;33', NULL, NULL),
(13, 2, 36, '33.1;35.1', NULL, NULL),
(14, 1, 38, '5;13.6', NULL, NULL),
(15, 1, 39, '13.7;23.5', NULL, NULL),
(16, 1, 40, '23.6;35.1', NULL, NULL),
(17, 2, 41, '5;9', NULL, NULL),
(18, 2, 46, '9.1;13.1', NULL, NULL),
(19, 2, 50, '13.2;17.2', NULL, NULL),
(20, 2, 55, '17.3;21', NULL, NULL),
(21, 2, 60, '21.1;25', NULL, NULL),
(22, 2, 63, '25.1;29.1', NULL, NULL),
(23, 2, 67, '29.2;33', NULL, NULL),
(24, 2, 70, '33.1;35.1', NULL, NULL),
(25, 3, 6, '5;9', NULL, NULL),
(26, 3, 12, '9.1;13.1', NULL, NULL),
(27, 3, 17, '13.2;17.2', NULL, NULL),
(28, 3, 21, '17.3;21', NULL, NULL),
(29, 3, 26, '21.1;25', NULL, NULL),
(30, 3, 30, '25.1;29.1', NULL, NULL),
(31, 3, 34, '29.2;33', NULL, NULL),
(32, 3, 37, '33.1;35.1', NULL, NULL),
(33, 3, 41, '5;9', NULL, NULL),
(34, 3, 46, '9.1;13.1', NULL, NULL),
(35, 3, 51, '13.2;17.2', NULL, NULL),
(36, 3, 55, '17.3;21', NULL, NULL),
(37, 3, 60, '21.1;25', NULL, NULL),
(38, 3, 64, '25.1;29.1', NULL, NULL),
(39, 3, 68, '29.2;33', NULL, NULL),
(40, 3, 71, '33.1;35.1', NULL, NULL),
(41, 4, 5, '5;9', NULL, NULL),
(42, 4, 10, '33.1;35.1', NULL, NULL),
(43, 4, 13, '9.1;13.1', NULL, NULL),
(44, 4, 18, '13.2;17.2', NULL, NULL),
(45, 4, 22, '17.3;21', NULL, NULL),
(46, 4, 27, '21.1;25', NULL, NULL),
(47, 4, 31, '25.1;29.1', NULL, NULL),
(48, 4, 35, '29.2;33', NULL, NULL),
(49, 4, 41, '5;9', NULL, NULL),
(50, 4, 45, '33.1;35.1', NULL, NULL),
(51, 4, 47, '9.1;13.1', NULL, NULL),
(52, 4, 52, '13.2;17.2', NULL, NULL),
(53, 4, 56, '17.3;21', NULL, NULL),
(54, 4, 61, '21.1;25', NULL, NULL),
(55, 4, 65, '25.1;29.1', NULL, NULL),
(56, 4, 69, '29.2;33', NULL, NULL),
(57, 5, 7, '5;9', NULL, NULL),
(58, 5, 10, '33.1;35.1', NULL, NULL),
(59, 5, 12, '9.1;13.1', NULL, NULL),
(60, 5, 17, '13.2;17.2', NULL, NULL),
(61, 5, 23, '17.3;21', NULL, NULL),
(62, 5, 28, '21.1;25', NULL, NULL),
(63, 5, 32, '25.1;29.1', NULL, NULL),
(64, 5, 42, '5;9', NULL, NULL),
(65, 5, 45, '33.1;35.1', NULL, NULL),
(66, 5, 46, '9.1;13.1', NULL, NULL),
(67, 5, 51, '13.2;17.2', NULL, NULL),
(68, 5, 57, '17.3;21', NULL, NULL),
(69, 5, 62, '21.1;25', NULL, NULL),
(70, 5, 66, '25.1;29.1', NULL, NULL),
(71, 6, 5, '5;9', NULL, NULL),
(72, 6, 10, '21.1;29.1', NULL, NULL),
(73, 6, 11, '9.1;13.1', NULL, NULL),
(74, 6, 19, '13.2;17.2', NULL, NULL),
(75, 6, 24, '17.3;21', NULL, NULL),
(76, 6, 41, '5;9', NULL, NULL),
(77, 6, 45, '21.1;29.1', NULL, NULL),
(78, 6, 46, '9.1;13.1', NULL, NULL),
(79, 6, 53, '13.2;17.2', NULL, NULL),
(80, 6, 58, '17.3;21', NULL, NULL),
(81, 7, 6, '5;9', NULL, NULL),
(82, 7, 14, '9.1;13.1', NULL, NULL),
(83, 7, 18, '13.2;17.2', NULL, NULL),
(84, 7, 25, '17.3;21', NULL, NULL),
(85, 7, 41, '5;9', NULL, NULL),
(86, 7, 48, '9.1;13.1', NULL, NULL),
(87, 7, 52, '13.2;17.2', NULL, NULL),
(88, 7, 59, '17.3;21', NULL, NULL),
(89, 8, 5, '5;9', NULL, NULL),
(90, 8, 10, '17.3;21', NULL, NULL),
(91, 8, 15, '9.1;13.1', NULL, NULL),
(92, 8, 20, '13.2;17.2', NULL, NULL),
(93, 8, 41, '5;9', NULL, NULL),
(94, 8, 45, '17.3;21', NULL, NULL),
(95, 8, 49, '9.1;13.1', NULL, NULL),
(96, 8, 54, '13.2;17.2', NULL, NULL),
(97, 9, 8, '5;9', NULL, NULL),
(98, 9, 10, '13.2;17.2', NULL, NULL),
(99, 9, 15, '9.1;13.1', NULL, NULL),
(100, 9, 43, '5;9', NULL, NULL),
(101, 9, 45, '13.2;17.2', NULL, NULL),
(102, 9, 49, '9.1;13.1', NULL, NULL),
(103, 10, 9, '5;9', NULL, NULL),
(104, 10, 10, '9.1;13.1', NULL, NULL),
(105, 10, 44, '5;9', NULL, NULL),
(106, 10, 45, '9.1;13.1', NULL, NULL),
(107, 11, 9, '5;9', NULL, NULL),
(108, 11, 44, '5;9', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control_paquete`
--
ALTER TABLE `control_paquete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `control_paquete_control_id_foreign` (`control_id`),
  ADD KEY `control_paquete_paquete_id_foreign` (`paquete_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control_paquete`
--
ALTER TABLE `control_paquete`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `control_paquete`
--
ALTER TABLE `control_paquete`
  ADD CONSTRAINT `control_paquete_control_id_foreign` FOREIGN KEY (`control_id`) REFERENCES `controls` (`id`),
  ADD CONSTRAINT `control_paquete_paquete_id_foreign` FOREIGN KEY (`paquete_id`) REFERENCES `paquetes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
