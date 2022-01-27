-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 11:19 PM
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
-- Table structure for table `cup_paquete`
--

CREATE TABLE `cup_paquete` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cup_id` bigint(20) UNSIGNED NOT NULL,
  `paquete_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cup_paquete`
--

INSERT INTO `cup_paquete` (`id`, `cup_id`, `paquete_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 7, NULL, NULL),
(6, 1, 8, NULL, NULL),
(7, 1, 13, NULL, NULL),
(8, 1, 14, NULL, NULL),
(9, 1, 18, NULL, NULL),
(10, 1, 22, NULL, NULL),
(11, 1, 31, NULL, NULL),
(12, 1, 34, NULL, NULL),
(13, 1, 42, NULL, NULL),
(14, 1, 43, NULL, NULL),
(15, 1, 44, NULL, NULL),
(16, 1, 47, NULL, NULL),
(17, 1, 48, NULL, NULL),
(18, 1, 49, NULL, NULL),
(19, 1, 52, NULL, NULL),
(20, 1, 54, NULL, NULL),
(21, 1, 56, NULL, NULL),
(22, 1, 58, NULL, NULL),
(23, 1, 59, NULL, NULL),
(24, 1, 62, NULL, NULL),
(25, 1, 65, NULL, NULL),
(26, 1, 66, NULL, NULL),
(27, 1, 68, NULL, NULL),
(28, 1, 69, NULL, NULL),
(29, 1, 70, NULL, NULL),
(30, 1, 71, NULL, NULL),
(31, 2, 5, NULL, NULL),
(32, 2, 6, NULL, NULL),
(33, 2, 7, NULL, NULL),
(34, 2, 8, NULL, NULL),
(35, 2, 10, NULL, NULL),
(36, 2, 11, NULL, NULL),
(37, 2, 12, NULL, NULL),
(38, 2, 13, NULL, NULL),
(39, 2, 14, NULL, NULL),
(40, 2, 16, NULL, NULL),
(41, 2, 17, NULL, NULL),
(42, 2, 18, NULL, NULL),
(43, 2, 19, NULL, NULL),
(44, 2, 21, NULL, NULL),
(45, 2, 23, NULL, NULL),
(46, 2, 24, NULL, NULL),
(47, 2, 26, NULL, NULL),
(48, 2, 27, NULL, NULL),
(49, 2, 29, NULL, NULL),
(50, 2, 30, NULL, NULL),
(51, 2, 31, NULL, NULL),
(52, 2, 33, NULL, NULL),
(53, 2, 34, NULL, NULL),
(54, 2, 36, NULL, NULL),
(55, 2, 41, NULL, NULL),
(56, 2, 42, NULL, NULL),
(57, 2, 43, NULL, NULL),
(58, 2, 45, NULL, NULL),
(59, 2, 46, NULL, NULL),
(60, 2, 47, NULL, NULL),
(61, 2, 48, NULL, NULL),
(62, 2, 50, NULL, NULL),
(63, 2, 51, NULL, NULL),
(64, 2, 52, NULL, NULL),
(65, 2, 53, NULL, NULL),
(66, 2, 55, NULL, NULL),
(67, 2, 56, NULL, NULL),
(68, 2, 57, NULL, NULL),
(69, 2, 58, NULL, NULL),
(70, 2, 60, NULL, NULL),
(71, 2, 61, NULL, NULL),
(72, 2, 63, NULL, NULL),
(73, 2, 64, NULL, NULL),
(74, 2, 65, NULL, NULL),
(75, 2, 67, NULL, NULL),
(76, 2, 68, NULL, NULL),
(77, 2, 70, NULL, NULL),
(78, 3, 5, NULL, NULL),
(79, 3, 6, NULL, NULL),
(80, 3, 7, NULL, NULL),
(81, 3, 8, NULL, NULL),
(82, 3, 11, NULL, NULL),
(83, 3, 12, NULL, NULL),
(84, 3, 13, NULL, NULL),
(85, 3, 14, NULL, NULL),
(86, 3, 16, NULL, NULL),
(87, 3, 17, NULL, NULL),
(88, 3, 18, NULL, NULL),
(89, 3, 19, NULL, NULL),
(90, 3, 21, NULL, NULL),
(91, 3, 22, NULL, NULL),
(92, 3, 23, NULL, NULL),
(93, 3, 24, NULL, NULL),
(94, 3, 26, NULL, NULL),
(95, 3, 27, NULL, NULL),
(96, 3, 29, NULL, NULL),
(97, 3, 30, NULL, NULL),
(98, 3, 31, NULL, NULL),
(99, 3, 33, NULL, NULL),
(100, 3, 34, NULL, NULL),
(101, 3, 36, NULL, NULL),
(102, 3, 41, NULL, NULL),
(103, 3, 42, NULL, NULL),
(104, 3, 43, NULL, NULL),
(105, 3, 46, NULL, NULL),
(106, 3, 47, NULL, NULL),
(107, 3, 48, NULL, NULL),
(108, 3, 50, NULL, NULL),
(109, 3, 51, NULL, NULL),
(110, 3, 52, NULL, NULL),
(111, 3, 53, NULL, NULL),
(112, 3, 55, NULL, NULL),
(113, 3, 56, NULL, NULL),
(114, 3, 57, NULL, NULL),
(115, 3, 58, NULL, NULL),
(116, 3, 60, NULL, NULL),
(117, 3, 61, NULL, NULL),
(118, 3, 63, NULL, NULL),
(119, 3, 64, NULL, NULL),
(120, 3, 65, NULL, NULL),
(121, 3, 67, NULL, NULL),
(122, 3, 68, NULL, NULL),
(123, 3, 70, NULL, NULL),
(124, 4, 2, NULL, NULL),
(125, 4, 3, NULL, NULL),
(126, 4, 4, NULL, NULL),
(127, 4, 5, NULL, NULL),
(128, 4, 6, NULL, NULL),
(129, 4, 7, NULL, NULL),
(130, 4, 8, NULL, NULL),
(131, 4, 11, NULL, NULL),
(132, 4, 12, NULL, NULL),
(133, 4, 13, NULL, NULL),
(134, 4, 14, NULL, NULL),
(135, 4, 16, NULL, NULL),
(136, 4, 17, NULL, NULL),
(137, 4, 18, NULL, NULL),
(138, 4, 19, NULL, NULL),
(139, 4, 21, NULL, NULL),
(140, 4, 22, NULL, NULL),
(141, 4, 23, NULL, NULL),
(142, 4, 24, NULL, NULL),
(143, 4, 26, NULL, NULL),
(144, 4, 27, NULL, NULL),
(145, 4, 30, NULL, NULL),
(146, 4, 31, NULL, NULL),
(147, 4, 33, NULL, NULL),
(148, 4, 34, NULL, NULL),
(149, 4, 36, NULL, NULL),
(150, 4, 38, NULL, NULL),
(151, 4, 39, NULL, NULL),
(152, 4, 40, NULL, NULL),
(153, 4, 41, NULL, NULL),
(154, 4, 42, NULL, NULL),
(155, 4, 43, NULL, NULL),
(156, 4, 46, NULL, NULL),
(157, 4, 47, NULL, NULL),
(158, 4, 48, NULL, NULL),
(159, 4, 50, NULL, NULL),
(160, 4, 51, NULL, NULL),
(161, 4, 52, NULL, NULL),
(162, 4, 53, NULL, NULL),
(163, 4, 55, NULL, NULL),
(164, 4, 56, NULL, NULL),
(165, 4, 57, NULL, NULL),
(166, 4, 58, NULL, NULL),
(167, 4, 60, NULL, NULL),
(168, 4, 61, NULL, NULL),
(169, 4, 64, NULL, NULL),
(170, 4, 65, NULL, NULL),
(171, 4, 67, NULL, NULL),
(172, 4, 68, NULL, NULL),
(173, 4, 70, NULL, NULL),
(174, 5, 2, NULL, NULL),
(175, 5, 3, NULL, NULL),
(176, 5, 4, NULL, NULL),
(177, 5, 7, NULL, NULL),
(178, 5, 8, NULL, NULL),
(179, 5, 13, NULL, NULL),
(180, 5, 14, NULL, NULL),
(181, 5, 18, NULL, NULL),
(182, 5, 22, NULL, NULL),
(183, 5, 31, NULL, NULL),
(184, 5, 34, NULL, NULL),
(185, 5, 38, NULL, NULL),
(186, 5, 39, NULL, NULL),
(187, 5, 40, NULL, NULL),
(188, 5, 42, NULL, NULL),
(189, 5, 43, NULL, NULL),
(190, 5, 47, NULL, NULL),
(191, 5, 48, NULL, NULL),
(192, 5, 52, NULL, NULL),
(193, 5, 56, NULL, NULL),
(194, 5, 65, NULL, NULL),
(195, 5, 68, NULL, NULL),
(196, 6, 1, NULL, NULL),
(197, 6, 2, NULL, NULL),
(198, 6, 3, NULL, NULL),
(199, 6, 4, NULL, NULL),
(200, 6, 7, NULL, NULL),
(201, 6, 8, NULL, NULL),
(202, 6, 13, NULL, NULL),
(203, 6, 14, NULL, NULL),
(204, 6, 18, NULL, NULL),
(205, 6, 22, NULL, NULL),
(206, 6, 31, NULL, NULL),
(207, 6, 34, NULL, NULL),
(208, 6, 38, NULL, NULL),
(209, 6, 39, NULL, NULL),
(210, 6, 40, NULL, NULL),
(211, 6, 42, NULL, NULL),
(212, 6, 43, NULL, NULL),
(213, 6, 47, NULL, NULL),
(214, 6, 48, NULL, NULL),
(215, 6, 52, NULL, NULL),
(216, 6, 56, NULL, NULL),
(217, 6, 65, NULL, NULL),
(218, 6, 68, NULL, NULL),
(219, 7, 2, NULL, NULL),
(220, 7, 3, NULL, NULL),
(221, 7, 4, NULL, NULL),
(222, 7, 7, NULL, NULL),
(223, 7, 8, NULL, NULL),
(224, 7, 13, NULL, NULL),
(225, 7, 14, NULL, NULL),
(226, 7, 18, NULL, NULL),
(227, 7, 22, NULL, NULL),
(228, 7, 31, NULL, NULL),
(229, 7, 34, NULL, NULL),
(230, 7, 38, NULL, NULL),
(231, 7, 39, NULL, NULL),
(232, 7, 40, NULL, NULL),
(233, 7, 42, NULL, NULL),
(234, 7, 43, NULL, NULL),
(235, 7, 47, NULL, NULL),
(236, 7, 48, NULL, NULL),
(237, 7, 52, NULL, NULL),
(238, 7, 56, NULL, NULL),
(239, 7, 65, NULL, NULL),
(240, 7, 68, NULL, NULL),
(241, 8, 4, NULL, NULL),
(242, 8, 19, NULL, NULL),
(243, 8, 23, NULL, NULL),
(244, 8, 27, NULL, NULL),
(245, 8, 30, NULL, NULL),
(246, 8, 33, NULL, NULL),
(247, 8, 40, NULL, NULL),
(248, 8, 53, NULL, NULL),
(249, 8, 57, NULL, NULL),
(250, 8, 61, NULL, NULL),
(251, 8, 64, NULL, NULL),
(252, 8, 67, NULL, NULL),
(253, 9, 3, NULL, NULL),
(254, 9, 7, NULL, NULL),
(255, 9, 13, NULL, NULL),
(256, 9, 16, NULL, NULL),
(257, 9, 39, NULL, NULL),
(258, 9, 42, NULL, NULL),
(259, 9, 47, NULL, NULL),
(260, 9, 50, NULL, NULL),
(261, 10, 1, NULL, NULL),
(262, 10, 2, NULL, NULL),
(263, 10, 3, NULL, NULL),
(264, 10, 4, NULL, NULL),
(265, 10, 10, NULL, NULL),
(266, 10, 38, NULL, NULL),
(267, 10, 39, NULL, NULL),
(268, 10, 40, NULL, NULL),
(269, 10, 45, NULL, NULL),
(270, 11, 2, NULL, NULL),
(271, 11, 3, NULL, NULL),
(272, 11, 4, NULL, NULL),
(273, 11, 38, NULL, NULL),
(274, 11, 39, NULL, NULL),
(275, 11, 40, NULL, NULL),
(276, 12, 2, NULL, NULL),
(277, 12, 3, NULL, NULL),
(278, 12, 4, NULL, NULL),
(279, 12, 38, NULL, NULL),
(280, 12, 39, NULL, NULL),
(281, 12, 40, NULL, NULL),
(282, 13, 2, NULL, NULL),
(283, 13, 3, NULL, NULL),
(284, 13, 4, NULL, NULL),
(285, 13, 38, NULL, NULL),
(286, 13, 39, NULL, NULL),
(287, 13, 40, NULL, NULL),
(288, 14, 2, NULL, NULL),
(289, 14, 3, NULL, NULL),
(290, 14, 4, NULL, NULL),
(291, 14, 38, NULL, NULL),
(292, 14, 39, NULL, NULL),
(293, 14, 40, NULL, NULL),
(294, 15, 2, NULL, NULL),
(295, 15, 3, NULL, NULL),
(296, 15, 4, NULL, NULL),
(297, 15, 38, NULL, NULL),
(298, 15, 39, NULL, NULL),
(299, 15, 40, NULL, NULL),
(300, 16, 2, NULL, NULL),
(301, 16, 3, NULL, NULL),
(302, 16, 4, NULL, NULL),
(303, 16, 38, NULL, NULL),
(304, 16, 39, NULL, NULL),
(305, 16, 40, NULL, NULL),
(306, 17, 2, NULL, NULL),
(307, 17, 3, NULL, NULL),
(308, 17, 4, NULL, NULL),
(309, 17, 38, NULL, NULL),
(310, 17, 39, NULL, NULL),
(311, 17, 40, NULL, NULL),
(312, 18, 4, NULL, NULL),
(313, 18, 40, NULL, NULL),
(314, 19, 2, NULL, NULL),
(315, 19, 38, NULL, NULL),
(316, 20, 2, NULL, NULL),
(317, 20, 38, NULL, NULL),
(318, 21, 38, NULL, NULL),
(319, 21, 39, NULL, NULL),
(320, 21, 40, NULL, NULL),
(321, 21, 42, NULL, NULL),
(322, 22, 38, NULL, NULL),
(323, 22, 39, NULL, NULL),
(324, 22, 40, NULL, NULL),
(325, 23, 38, NULL, NULL),
(326, 23, 39, NULL, NULL),
(327, 23, 40, NULL, NULL),
(328, 24, 38, NULL, NULL),
(329, 24, 39, NULL, NULL),
(330, 24, 40, NULL, NULL),
(331, 25, 40, NULL, NULL),
(332, 25, 42, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cup_paquete`
--
ALTER TABLE `cup_paquete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cup_paquete_cup_id_foreign` (`cup_id`),
  ADD KEY `cup_paquete_paquete_id_foreign` (`paquete_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cup_paquete`
--
ALTER TABLE `cup_paquete`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- Constraints for dumped tables
--

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
