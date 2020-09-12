-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 07:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `accions`
--

CREATE TABLE `accions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ejecucionid` int(11) NOT NULL,
  `personaid` int(11) NOT NULL,
  `controlid` int(11) NOT NULL,
  `fec_ini` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fec_fin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conexions`
--

CREATE TABLE `conexions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regulationid` int(11) NOT NULL,
  `requisitoid` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `controls`
--

CREATE TABLE `controls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resourses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastupdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impact` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `dashboard`
-- (See below for the actual view)
--
CREATE TABLE `dashboard` (
`regulaciones` bigint(21)
,`requisitos` bigint(21)
,`entidades` bigint(21)
,`evaluaciones` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `ejecucions`
--

CREATE TABLE `ejecucions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evaluacionid` int(11) NOT NULL,
  `conexionid` int(11) NOT NULL,
  `madurez` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entidads`
--

CREATE TABLE `entidads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluacions`
--

CREATE TABLE `evaluacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entidadid` int(11) NOT NULL,
  `regulationid` int(11) NOT NULL,
  `porcentaje` int(11) NOT NULL,
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
-- Stand-in structure for view `indicadores`
-- (See below for the actual view)
--
CREATE TABLE `indicadores` (
`evaluacion` int(11)
,`item` varchar(255)
,`procesos` bigint(21)
,`madurez` decimal(33,0)
,`completado` decimal(26,0)
);

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
(4, '2020_09_04_022421_create_regulacions_table', 1),
(5, '2020_09_04_023102_create_entidads_table', 1),
(6, '2020_09_04_211234_create_requisitos_table', 1),
(7, '2020_09_05_033304_create_personas_table', 1),
(8, '2020_09_05_050939_create_controls_table', 1),
(9, '2020_09_10_014420_create_conexions_table', 1),
(10, '2020_09_10_171033_create_evaluacions_table', 1),
(11, '2020_09_10_171140_create_ejecucions_table', 1),
(12, '2020_09_12_012452_create_accions_table', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `oportunidades`
-- (See below for the actual view)
--
CREATE TABLE `oportunidades` (
`ejecucion` bigint(20) unsigned
,`evaluacion` bigint(20) unsigned
,`regulacion` varchar(255)
,`entidad` varchar(255)
,`requisito` varchar(255)
,`pregunta` text
,`madurez` int(11)
,`accion` decimal(20,0)
);

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
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entidadid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `plan`
-- (See below for the actual view)
--
CREATE TABLE `plan` (
`id` bigint(20) unsigned
,`fec_ini` varchar(255)
,`fec_fin` varchar(255)
,`estado` varchar(255)
,`persona` varchar(255)
,`code` varchar(255)
,`control` varchar(255)
,`resourses` varchar(255)
,`budget` varchar(255)
,`hours` varchar(255)
,`question` text
,`regulacion` varchar(255)
,`item` varchar(255)
,`entidad` varchar(255)
,`ejecucionid` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Table structure for table `regulacions`
--

CREATE TABLE `regulacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requisitos`
--

CREATE TABLE `requisitos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regulationid` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure for view `dashboard`
--
DROP TABLE IF EXISTS `dashboard`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dashboard`  AS  (select (select count(0) from `regulacions`) AS `regulaciones`,(select count(0) from `requisitos`) AS `requisitos`,(select count(0) from `entidads`) AS `entidades`,(select count(0) from `evaluacions`) AS `evaluaciones`) ;

-- --------------------------------------------------------

--
-- Structure for view `indicadores`
--
DROP TABLE IF EXISTS `indicadores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `indicadores`  AS  (select `ej`.`evaluacionid` AS `evaluacion`,`re`.`item` AS `item`,count(`re`.`id`) AS `procesos`,round(sum(`ej`.`madurez`) / count(`ej`.`madurez`),0) AS `madurez`,round(sum(case when `ej`.`madurez` > 2 then 1 else 0 end) / count(`ej`.`madurez`) * 100,0) AS `completado` from ((`ejecucions` `ej` join `conexions` `co` on(`ej`.`conexionid` = `co`.`id`)) join `requisitos` `re` on(`co`.`requisitoid` = `re`.`id`)) group by `ej`.`evaluacionid`,`re`.`item`) ;

-- --------------------------------------------------------

--
-- Structure for view `oportunidades`
--
DROP TABLE IF EXISTS `oportunidades`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `oportunidades`  AS  (select `ej`.`id` AS `ejecucion`,`ev`.`id` AS `evaluacion`,`re`.`name` AS `regulacion`,`en`.`name` AS `entidad`,`rq`.`item` AS `requisito`,`co`.`question` AS `pregunta`,`ej`.`madurez` AS `madurez`,ifnull(`ac`.`id`,0) AS `accion` from ((((((`ejecucions` `ej` join `evaluacions` `ev` on(`ej`.`evaluacionid` = `ev`.`id`)) join `conexions` `co` on(`ej`.`conexionid` = `co`.`id`)) join `regulacions` `re` on(`co`.`regulationid` = `re`.`id`)) join `requisitos` `rq` on(`co`.`requisitoid` = `rq`.`id`)) join `entidads` `en` on(`ev`.`entidadid` = `en`.`id`)) left join `accions` `ac` on(`ej`.`id` = `ac`.`ejecucionid`)) where `ej`.`madurez` < 3) ;

-- --------------------------------------------------------

--
-- Structure for view `plan`
--
DROP TABLE IF EXISTS `plan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `plan`  AS  (select `ac`.`id` AS `id`,`ac`.`fec_ini` AS `fec_ini`,`ac`.`fec_fin` AS `fec_fin`,`ac`.`estado` AS `estado`,`pe`.`name` AS `persona`,`co`.`code` AS `code`,`co`.`name` AS `control`,`co`.`resourses` AS `resourses`,`co`.`budget` AS `budget`,`co`.`hours` AS `hours`,`cx`.`question` AS `question`,`re`.`name` AS `regulacion`,`rq`.`item` AS `item`,`en`.`name` AS `entidad`,`ej`.`id` AS `ejecucionid` from ((((((((`accions` `ac` join `personas` `pe` on(`ac`.`personaid` = `pe`.`id`)) join `controls` `co` on(`ac`.`controlid` = `co`.`id`)) join `ejecucions` `ej` on(`ac`.`ejecucionid` = `ej`.`id`)) join `evaluacions` `ev` on(`ej`.`evaluacionid` = `ev`.`id`)) join `conexions` `cx` on(`ej`.`conexionid` = `cx`.`id`)) join `regulacions` `re` on(`cx`.`regulationid` = `re`.`id`)) join `requisitos` `rq` on(`cx`.`requisitoid` = `rq`.`id`)) join `entidads` `en` on(`ev`.`entidadid` = `en`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accions`
--
ALTER TABLE `accions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conexions`
--
ALTER TABLE `conexions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controls`
--
ALTER TABLE `controls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ejecucions`
--
ALTER TABLE `ejecucions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entidads`
--
ALTER TABLE `entidads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluacions`
--
ALTER TABLE `evaluacions`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regulacions`
--
ALTER TABLE `regulacions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisitos`
--
ALTER TABLE `requisitos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accions`
--
ALTER TABLE `accions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conexions`
--
ALTER TABLE `conexions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `controls`
--
ALTER TABLE `controls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ejecucions`
--
ALTER TABLE `ejecucions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entidads`
--
ALTER TABLE `entidads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluacions`
--
ALTER TABLE `evaluacions`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regulacions`
--
ALTER TABLE `regulacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requisitos`
--
ALTER TABLE `requisitos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
