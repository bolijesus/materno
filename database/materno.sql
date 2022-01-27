-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 02:00 AM
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
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL COMMENT 'true:asistio a la cita; false:No asistio a la cita',
  `fecha_inicio` datetime NOT NULL,
  `fecha_control` datetime NOT NULL,
  `fecha_proxima` datetime NOT NULL,
  `control_actual` int(10) UNSIGNED NOT NULL,
  `control_proximo` int(10) UNSIGNED NOT NULL,
  `cantidad_cita` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cita_paciente`
--

CREATE TABLE `cita_paciente` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cita_id` bigint(20) UNSIGNED NOT NULL,
  `paciente_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `controls`
--

CREATE TABLE `controls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `controls`
--

INSERT INTO `controls` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'INGRESO', 'DESCRIPCION INGRESO', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(2, 'CONTROL 1', 'DESCRIPCION CONTROL 1', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(3, 'CONTROL 2', 'DESCRIPCION CONTROL 2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(4, 'CONTROL 3', 'DESCRIPCION CONTROL 3', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(5, 'CONTROL 4', 'DESCRIPCION CONTROL 4', '2021-02-22 05:35:08', '2021-02-22 05:35:08'),
(6, 'CONTROL 5', 'DESCRIPCION CONTROL 5', '2021-02-22 05:35:08', '2021-02-22 05:35:08'),
(7, 'CONTROL 6', 'DESCRIPCION CONTROL 6', '2021-02-22 05:35:08', '2021-02-22 05:35:08'),
(8, 'CONTROL 7', 'DESCRIPCION CONTROL 7', '2021-02-22 05:35:08', '2021-02-22 05:35:08'),
(9, 'CONTROL 8', 'DESCRIPCION CONTROL 8', '2021-02-22 05:35:08', '2021-02-22 05:35:08'),
(10, 'CONTROL 9', 'DESCRIPCION CONTROL 9', '2021-02-22 05:35:08', '2021-02-22 05:35:08'),
(11, 'CONTROL 10', 'DESCRIPCION CONTROL 10', '2021-02-22 05:35:08', '2021-02-22 05:35:08'),
(12, 'PURPERIO', 'DESCRIPCION PURPERIO', '2021-02-22 05:35:08', '2021-02-22 05:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `control_paciente`
--

CREATE TABLE `control_paciente` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `control_id` bigint(20) UNSIGNED NOT NULL,
  `paciente_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, 1, 2, '0;0', NULL, NULL),
(4, 1, 3, '0;0', NULL, NULL),
(5, 1, 4, '0;0', NULL, NULL),
(6, 2, 5, '0;0', NULL, NULL),
(7, 2, 11, '0;0', NULL, NULL),
(8, 2, 16, '0;0', NULL, NULL),
(9, 2, 21, '0;0', NULL, NULL),
(10, 2, 26, '0;0', NULL, NULL),
(11, 2, 29, '0;0', NULL, NULL),
(12, 2, 33, '0;0', NULL, NULL),
(13, 2, 36, '0;0', NULL, NULL),
(14, 1, 38, '0;0', NULL, NULL),
(15, 1, 39, '0;0', NULL, NULL),
(16, 1, 40, '0;0', NULL, NULL),
(17, 2, 41, '0;0', NULL, NULL),
(18, 2, 46, '0;0', NULL, NULL),
(19, 2, 50, '0;0', NULL, NULL),
(20, 2, 55, '0;0', NULL, NULL),
(21, 2, 60, '0;0', NULL, NULL),
(22, 2, 63, '0;0', NULL, NULL),
(23, 2, 67, '0;0', NULL, NULL),
(24, 2, 70, '0;0', NULL, NULL),
(25, 3, 6, '0;0', NULL, NULL),
(26, 3, 12, '0;0', NULL, NULL),
(27, 3, 17, '0;0', NULL, NULL),
(28, 3, 21, '0;0', NULL, NULL),
(29, 3, 26, '0;0', NULL, NULL),
(30, 3, 30, '0;0', NULL, NULL),
(31, 3, 34, '0;0', NULL, NULL),
(32, 3, 37, '0;0', NULL, NULL),
(33, 3, 41, '0;0', NULL, NULL),
(34, 3, 46, '0;0', NULL, NULL),
(35, 3, 51, '0;0', NULL, NULL),
(36, 3, 55, '0;0', NULL, NULL),
(37, 3, 60, '0;0', NULL, NULL),
(38, 3, 64, '0;0', NULL, NULL),
(39, 3, 68, '0;0', NULL, NULL),
(40, 3, 71, '0;0', NULL, NULL),
(41, 4, 5, '0;0', NULL, NULL),
(42, 4, 10, '0;0', NULL, NULL),
(43, 4, 13, '0;0', NULL, NULL),
(44, 4, 18, '0;0', NULL, NULL),
(45, 4, 22, '0;0', NULL, NULL),
(46, 4, 27, '0;0', NULL, NULL),
(47, 4, 31, '0;0', NULL, NULL),
(48, 4, 35, '0;0', NULL, NULL),
(49, 4, 41, '0;0', NULL, NULL),
(50, 4, 45, '0;0', NULL, NULL),
(51, 4, 47, '0;0', NULL, NULL),
(52, 4, 52, '0;0', NULL, NULL),
(53, 4, 56, '0;0', NULL, NULL),
(54, 4, 61, '0;0', NULL, NULL),
(55, 4, 65, '0;0', NULL, NULL),
(56, 4, 69, '0;0', NULL, NULL),
(57, 5, 7, '0;0', NULL, NULL),
(58, 5, 10, '0;0', NULL, NULL),
(59, 5, 12, '0;0', NULL, NULL),
(60, 5, 17, '0;0', NULL, NULL),
(61, 5, 23, '0;0', NULL, NULL),
(62, 5, 28, '0;0', NULL, NULL),
(63, 5, 32, '0;0', NULL, NULL),
(64, 5, 42, '0;0', NULL, NULL),
(65, 5, 45, '0;0', NULL, NULL),
(66, 5, 46, '0;0', NULL, NULL),
(67, 5, 51, '0;0', NULL, NULL),
(68, 5, 57, '0;0', NULL, NULL),
(69, 5, 62, '0;0', NULL, NULL),
(70, 5, 66, '0;0', NULL, NULL),
(71, 6, 5, '0;0', NULL, NULL),
(72, 6, 10, '0;0', NULL, NULL),
(73, 6, 11, '0;0', NULL, NULL),
(74, 6, 19, '0;0', NULL, NULL),
(75, 6, 24, '0;0', NULL, NULL),
(76, 6, 41, '0;0', NULL, NULL),
(77, 6, 45, '0;0', NULL, NULL),
(78, 6, 46, '0;0', NULL, NULL),
(79, 6, 53, '0;0', NULL, NULL),
(80, 6, 58, '0;0', NULL, NULL),
(81, 7, 6, '0;0', NULL, NULL),
(82, 7, 14, '0;0', NULL, NULL),
(83, 7, 18, '0;0', NULL, NULL),
(84, 7, 25, '0;0', NULL, NULL),
(85, 7, 41, '0;0', NULL, NULL),
(86, 7, 48, '0;0', NULL, NULL),
(87, 7, 52, '0;0', NULL, NULL),
(88, 7, 59, '0;0', NULL, NULL),
(89, 8, 5, '0;0', NULL, NULL),
(90, 8, 10, '0;0', NULL, NULL),
(91, 8, 15, '0;0', NULL, NULL),
(92, 8, 20, '0;0', NULL, NULL),
(93, 8, 41, '0;0', NULL, NULL),
(94, 8, 45, '0;0', NULL, NULL),
(95, 8, 49, '0;0', NULL, NULL),
(96, 8, 54, '0;0', NULL, NULL),
(97, 9, 8, '0;0', NULL, NULL),
(98, 9, 10, '0;0', NULL, NULL),
(99, 9, 15, '0;0', NULL, NULL),
(100, 9, 43, '0;0', NULL, NULL),
(101, 9, 45, '0;0', NULL, NULL),
(102, 9, 49, '0;0', NULL, NULL),
(103, 10, 9, '0;0', NULL, NULL),
(104, 10, 10, '0;0', NULL, NULL),
(105, 10, 44, '0;0', NULL, NULL),
(106, 10, 45, '0;0', NULL, NULL),
(107, 11, 9, '0;0', NULL, NULL),
(108, 11, 44, '0;0', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `cup_paquete`
--

CREATE TABLE `cup_paquete` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cup_id` bigint(20) UNSIGNED NOT NULL,
  `paquete_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_18_023154_create_statuses_table', 1),
(5, '2021_02_16_020553_create_paquetes_table', 1),
(6, '2021_02_16_234400_create_cups_table', 1),
(7, '2021_02_17_134122_create_cup_paquete_table', 1),
(8, '2021_02_20_132447_create_controls_table', 1),
(9, '2021_02_20_132626_create_control_paquete_table', 1),
(10, '2021_02_20_161612_create_pacientes_table', 1),
(11, '2021_02_21_193637_create_control_paciente_table', 1),
(12, '2021_02_21_203659_create_citas_table', 1),
(13, '2021_02_21_204216_create_cita_paciente_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `primer_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundo_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primer_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundo_apellido` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Numero de documento',
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semanas_embarazo` smallint(6) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `control` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'true: con control, false: sin control',
  `seguimiento` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'true: primera vez, false: en control',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paquetes`
--

CREATE TABLE `paquetes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_control` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1: pacientes con control; 2: pacientes sin control',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paquetes`
--

INSERT INTO `paquetes` (`id`, `nombre`, `descripcion`, `con_control`, `created_at`, `updated_at`) VALUES
(1, 'PAQUETE 1', 'DESCRIPCION PAQUETE 1', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(2, 'PAQUETE 2', 'DESCRIPCION PAQUETE 2', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(3, 'PAQUETE 3', 'DESCRIPCION PAQUETE 3', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(4, 'PAQUETE 4', 'DESCRIPCION PAQUETE 4', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(5, 'PAQUETE 5', 'DESCRIPCION PAQUETE 5', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(6, 'PAQUETE 6', 'DESCRIPCION PAQUETE 6', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(7, 'PAQUETE 7', 'DESCRIPCION PAQUETE 7', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(8, 'PAQUETE 8', 'DESCRIPCION PAQUETE 8', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(9, 'PAQUETE 9', 'DESCRIPCION PAQUETE 9', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(10, 'PAQUETE 10', 'DESCRIPCION PAQUETE 10', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(11, 'PAQUETE 11', 'DESCRIPCION PAQUETE 11', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(12, 'PAQUETE 12', 'DESCRIPCION PAQUETE 12', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(13, 'PAQUETE 13', 'DESCRIPCION PAQUETE 13', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(14, 'PAQUETE 14', 'DESCRIPCION PAQUETE 14', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(15, 'PAQUETE 15', 'DESCRIPCION PAQUETE 15', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(16, 'PAQUETE 16', 'DESCRIPCION PAQUETE 16', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(17, 'PAQUETE 17', 'DESCRIPCION PAQUETE 17', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(18, 'PAQUETE 18', 'DESCRIPCION PAQUETE 18', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(19, 'PAQUETE 19', 'DESCRIPCION PAQUETE 19', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(20, 'PAQUETE 20', 'DESCRIPCION PAQUETE 20', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(21, 'PAQUETE 21', 'DESCRIPCION PAQUETE 21', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(22, 'PAQUETE 22', 'DESCRIPCION PAQUETE 22', '1', '2021-02-22 05:35:05', '2021-02-22 05:35:05'),
(23, 'PAQUETE 23', 'DESCRIPCION PAQUETE 23', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(24, 'PAQUETE 24', 'DESCRIPCION PAQUETE 24', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(25, 'PAQUETE 25', 'DESCRIPCION PAQUETE 25', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(26, 'PAQUETE 26', 'DESCRIPCION PAQUETE 26', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(27, 'PAQUETE 27', 'DESCRIPCION PAQUETE 27', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(28, 'PAQUETE 28', 'DESCRIPCION PAQUETE 28', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(29, 'PAQUETE 29', 'DESCRIPCION PAQUETE 29', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(30, 'PAQUETE 30', 'DESCRIPCION PAQUETE 30', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(31, 'PAQUETE 31', 'DESCRIPCION PAQUETE 31', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(32, 'PAQUETE 32', 'DESCRIPCION PAQUETE 32', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(33, 'PAQUETE 33', 'DESCRIPCION PAQUETE 33', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(34, 'PAQUETE 34', 'DESCRIPCION PAQUETE 34', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(35, 'PAQUETE 35', 'DESCRIPCION PAQUETE 35', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(36, 'PAQUETE 36', 'DESCRIPCION PAQUETE 36', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(37, 'PAQUETE 37', 'DESCRIPCION PAQUETE 37', '1', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(38, 'PAQUETE 38', 'DESCRIPCION PAQUETE 38', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(39, 'PAQUETE 39', 'DESCRIPCION PAQUETE 39', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(40, 'PAQUETE 40', 'DESCRIPCION PAQUETE 40', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(41, 'PAQUETE 41', 'DESCRIPCION PAQUETE 41', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(42, 'PAQUETE 42', 'DESCRIPCION PAQUETE 42', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(43, 'PAQUETE 43', 'DESCRIPCION PAQUETE 43', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(44, 'PAQUETE 44', 'DESCRIPCION PAQUETE 44', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(45, 'PAQUETE 45', 'DESCRIPCION PAQUETE 45', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(46, 'PAQUETE 46', 'DESCRIPCION PAQUETE 46', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(47, 'PAQUETE 47', 'DESCRIPCION PAQUETE 47', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(48, 'PAQUETE 48', 'DESCRIPCION PAQUETE 48', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(49, 'PAQUETE 49', 'DESCRIPCION PAQUETE 49', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(50, 'PAQUETE 50', 'DESCRIPCION PAQUETE 50', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(51, 'PAQUETE 51', 'DESCRIPCION PAQUETE 51', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(52, 'PAQUETE 52', 'DESCRIPCION PAQUETE 52', '2', '2021-02-22 05:35:06', '2021-02-22 05:35:06'),
(53, 'PAQUETE 53', 'DESCRIPCION PAQUETE 53', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(54, 'PAQUETE 54', 'DESCRIPCION PAQUETE 54', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(55, 'PAQUETE 55', 'DESCRIPCION PAQUETE 55', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(56, 'PAQUETE 56', 'DESCRIPCION PAQUETE 56', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(57, 'PAQUETE 57', 'DESCRIPCION PAQUETE 57', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(58, 'PAQUETE 58', 'DESCRIPCION PAQUETE 58', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(59, 'PAQUETE 59', 'DESCRIPCION PAQUETE 59', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(60, 'PAQUETE 60', 'DESCRIPCION PAQUETE 60', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(61, 'PAQUETE 61', 'DESCRIPCION PAQUETE 61', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(62, 'PAQUETE 62', 'DESCRIPCION PAQUETE 62', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(63, 'PAQUETE 63', 'DESCRIPCION PAQUETE 63', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(64, 'PAQUETE 64', 'DESCRIPCION PAQUETE 64', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(65, 'PAQUETE 65', 'DESCRIPCION PAQUETE 65', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(66, 'PAQUETE 66', 'DESCRIPCION PAQUETE 66', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(67, 'PAQUETE 67', 'DESCRIPCION PAQUETE 67', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(68, 'PAQUETE 68', 'DESCRIPCION PAQUETE 68', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(69, 'PAQUETE 69', 'DESCRIPCION PAQUETE 69', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(70, 'PAQUETE 70', 'DESCRIPCION PAQUETE 70', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(71, 'PAQUETE 71', 'DESCRIPCION PAQUETE 71', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(72, 'PAQUETE 72', 'DESCRIPCION PAQUETE 72', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(73, 'PAQUETE 73', 'DESCRIPCION PAQUETE 73', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(74, 'PAQUETE 74', 'DESCRIPCION PAQUETE 74', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(75, 'PAQUETE 75', 'DESCRIPCION PAQUETE 75', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(76, 'PAQUETE 76', 'DESCRIPCION PAQUETE 76', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(77, 'PAQUETE 77', 'DESCRIPCION PAQUETE 77', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(78, 'PAQUETE 78', 'DESCRIPCION PAQUETE 78', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(79, 'PAQUETE 79', 'DESCRIPCION PAQUETE 79', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(80, 'PAQUETE 80', 'DESCRIPCION PAQUETE 80', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(81, 'PAQUETE 81', 'DESCRIPCION PAQUETE 81', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(82, 'PAQUETE 82', 'DESCRIPCION PAQUETE 82', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(83, 'PAQUETE 83', 'DESCRIPCION PAQUETE 83', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(84, 'PAQUETE 84', 'DESCRIPCION PAQUETE 84', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(85, 'PAQUETE 85', 'DESCRIPCION PAQUETE 85', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(86, 'PAQUETE 86', 'DESCRIPCION PAQUETE 86', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(87, 'PAQUETE 87', 'DESCRIPCION PAQUETE 87', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(88, 'PAQUETE 88', 'DESCRIPCION PAQUETE 88', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07'),
(89, 'PAQUETE 89', 'DESCRIPCION PAQUETE 89', '2', '2021-02-22 05:35:07', '2021-02-22 05:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `primer_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundo_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primer_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundo_apellido` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semanas_embarazo` smallint(6) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cita_paciente`
--
ALTER TABLE `cita_paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cita_paciente_cita_id_foreign` (`cita_id`),
  ADD KEY `cita_paciente_paciente_id_foreign` (`paciente_id`);

--
-- Indexes for table `controls`
--
ALTER TABLE `controls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `control_paciente`
--
ALTER TABLE `control_paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `control_paciente_control_id_foreign` (`control_id`),
  ADD KEY `control_paciente_paciente_id_foreign` (`paciente_id`);

--
-- Indexes for table `control_paquete`
--
ALTER TABLE `control_paquete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `control_paquete_control_id_foreign` (`control_id`),
  ADD KEY `control_paquete_paquete_id_foreign` (`paquete_id`);

--
-- Indexes for table `cups`
--
ALTER TABLE `cups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cups_codigo_unique` (`codigo`);

--
-- Indexes for table `cup_paquete`
--
ALTER TABLE `cup_paquete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cup_paquete_cup_id_foreign` (`cup_id`),
  ADD KEY `cup_paquete_paquete_id_foreign` (`paquete_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pacientes_celular_unique` (`celular`);

--
-- Indexes for table `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paquetes_nombre_unique` (`nombre`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_celular_unique` (`celular`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citas`
--
ALTER TABLE `citas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cita_paciente`
--
ALTER TABLE `cita_paciente`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `controls`
--
ALTER TABLE `controls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `control_paciente`
--
ALTER TABLE `control_paciente`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `control_paquete`
--
ALTER TABLE `control_paquete`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `cups`
--
ALTER TABLE `cups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cup_paquete`
--
ALTER TABLE `cup_paquete`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cita_paciente`
--
ALTER TABLE `cita_paciente`
  ADD CONSTRAINT `cita_paciente_cita_id_foreign` FOREIGN KEY (`cita_id`) REFERENCES `citas` (`id`),
  ADD CONSTRAINT `cita_paciente_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);

--
-- Constraints for table `control_paciente`
--
ALTER TABLE `control_paciente`
  ADD CONSTRAINT `control_paciente_control_id_foreign` FOREIGN KEY (`control_id`) REFERENCES `controls` (`id`),
  ADD CONSTRAINT `control_paciente_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);

--
-- Constraints for table `control_paquete`
--
ALTER TABLE `control_paquete`
  ADD CONSTRAINT `control_paquete_control_id_foreign` FOREIGN KEY (`control_id`) REFERENCES `controls` (`id`),
  ADD CONSTRAINT `control_paquete_paquete_id_foreign` FOREIGN KEY (`paquete_id`) REFERENCES `paquetes` (`id`);

--
-- Constraints for table `cup_paquete`
--
ALTER TABLE `cup_paquete`
  ADD CONSTRAINT `cup_paquete_cup_id_foreign` FOREIGN KEY (`cup_id`) REFERENCES `cups` (`id`),
  ADD CONSTRAINT `cup_paquete_paquete_id_foreign` FOREIGN KEY (`paquete_id`) REFERENCES `paquetes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
