-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 11:18 PM
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
-- Table structure for table `cups`
--

CREATE TABLE `cups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cups`
--

INSERT INTO `cups` (`id`, `codigo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, '890350', 'CONSULTA DE CONTROL O DE SEGUIMIENTO POR ESPECIALISTA EN GINECOLOGIA Y OBSTETRICIA', '2021-02-25 02:24:44', '2021-02-25 02:24:44'),
(2, '890301', 'CONSULTA DE CONTROL O DE SEGUIMIENTO POR MEDICINA GENERAL', '2021-02-25 02:32:42', '2021-02-25 02:32:42'),
(3, '890305', 'CONSULTA DE CONTROL O DE SEGUIMIENTO POR ENFERMERÍA', '2021-02-25 02:37:57', '2021-02-25 02:37:57'),
(4, '906129', 'IgM toxoplasma', '2021-02-25 02:43:49', '2021-02-25 02:43:49'),
(5, '906249', 'VIH', '2021-02-25 02:46:32', '2021-02-25 02:46:32'),
(6, '890201', 'Asesoría pre y post Test para VIH', '2021-02-25 02:50:21', '2021-02-25 02:50:21'),
(7, '906915', 'Prueba rapida para sifilis', '2021-02-25 02:52:13', '2021-02-25 02:52:13'),
(8, '901210', 'Tamización para estreptococo del grupo B con cultivo rectal y vaginal.', '2021-02-25 02:53:39', '2021-02-25 02:53:39'),
(9, '881437', 'Ultrasonografia obstetrica transabdominal (de 18 a 23.6 semanas) ECOGRAFIA OBSTETRICA CON DETALLE ANATOMICO .', '2021-02-25 02:56:18', '2021-02-25 02:56:18'),
(10, '890208', 'CONSULTA ASESORIA IVE PSICOLOGIA', '2021-02-25 02:58:11', '2021-02-25 02:58:11'),
(11, '890250', 'CONSULTA DE PRIMERA VEZ POR ESPECIALISTA EN GINECOLOGÍA Y OBSTETRICIA', '2021-02-25 03:00:04', '2021-02-25 03:00:04'),
(12, '890205', 'CONSULTA DE PRIMERA VEZ POR ENFERMERÍA', '2021-02-25 03:01:25', '2021-02-25 03:01:25'),
(13, '890206', 'CONSULTA DE PRIMERA VEZ POR NUTRICIÓN Y DIETÉTICA', '2021-02-25 03:02:55', '2021-02-25 03:02:55'),
(14, '890209', 'CONSULTA DE PRIMERA VEZ POR TRABAJO SOCIAL', '2021-02-25 03:04:19', '2021-02-25 03:04:19'),
(15, '906127', 'IgG toxoplasma', '2021-02-25 03:05:42', '2021-02-25 03:05:42'),
(16, '906317', 'HBsAg', '2021-02-25 03:06:55', '2021-02-25 03:06:55'),
(17, '901235', 'Urocultivo', '2021-02-25 03:08:11', '2021-02-25 03:08:11'),
(18, '881431', 'ECOGRAFIA OBSTETRICA TRANSABDOMINAL. A las usuarias que ingresen despues de la semana 23.6 se les haria una ultrasonografia por control.', '2021-02-25 03:09:20', '2021-02-25 03:09:20'),
(19, '906241', 'IGG Rubeola ANTES DE LA SEMANA 16', '2021-02-25 03:10:26', '2021-02-25 03:10:26'),
(20, '881436', 'Ultrasonografia obstetrica transabdominal (Con 10.6 semanas a 13.6 semanas de gestación). ECOGRAFIA OBSTETRICA CON TRANSLUCENCIA NUCAL.', '2021-02-25 03:12:44', '2021-02-25 03:12:44'),
(21, '902210', 'Hemograma IV', '2021-02-25 03:13:43', '2021-02-25 03:13:43'),
(22, '903841', 'Glucosa', '2021-02-25 03:15:27', '2021-02-25 03:15:27'),
(23, '911015', 'Hemoclasificación', '2021-02-25 03:16:04', '2021-02-25 03:16:04'),
(24, '898001', 'Citologia', '2021-02-25 03:16:48', '2021-02-25 03:16:48'),
(25, '903884', 'Glucosa curva de tolerancia', '2021-02-25 03:17:28', '2021-02-25 03:17:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cups`
--
ALTER TABLE `cups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cups_codigo_unique` (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cups`
--
ALTER TABLE `cups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
