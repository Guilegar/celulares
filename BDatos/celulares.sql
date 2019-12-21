-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2019 a las 20:29:47
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `celulares`
--
CREATE DATABASE IF NOT EXISTS `celulares` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `celulares`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion`
--

DROP TABLE IF EXISTS `accion`;
CREATE TABLE `accion` (
  `acc_cod` int(1) NOT NULL,
  `acc_nom` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `accion`
--

INSERT INTO `accion` (`acc_cod`, `acc_nom`, `created_at`, `updated_at`) VALUES
(1, 'Entrada', '2019-12-18 13:27:45', '2019-12-18 13:27:45'),
(2, 'Salida', '2019-12-18 13:27:45', '2019-12-18 13:27:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

DROP TABLE IF EXISTS `asesores`;
CREATE TABLE `asesores` (
  `ase_cod` int(10) NOT NULL,
  `ase_id` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ase_nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ase_dir` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ase_tel` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `est_cod` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`ase_cod`, `ase_id`, `ase_nom`, `ase_dir`, `ase_tel`, `est_cod`, `created_at`, `updated_at`) VALUES
(1, '16987654', 'Juan Tamaris', 'Carrera 5 # 45-87', '310568972', 1, '2019-12-16 21:54:42', '2019-12-16 21:54:42'),
(2, '31658977', 'Andrea Serna', 'Avenida 4 n # 32-34', '3138974569', 1, '2019-12-16 21:54:42', '2019-12-16 21:54:42'),
(3, '16985302', 'Mauricio Vasquez', 'Calle 103 # 21-34', '55555', 2, '2019-12-16 21:54:42', '2019-12-21 02:02:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

DROP TABLE IF EXISTS `dispositivos`;
CREATE TABLE `dispositivos` (
  `dis_cod` int(10) NOT NULL,
  `imei` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `imei2` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `color` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `prod_cod` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`dis_cod`, `imei`, `imei2`, `color`, `prod_cod`, `created_at`, `updated_at`) VALUES
(1, '123698574589635', '159874563258635', 'Blanco', 1, '2019-12-17 22:53:26', '2019-12-17 22:53:26'),
(2, '65123695689955', '965877456935695', 'Negro', 1, '2019-12-17 22:53:26', '2019-12-17 22:53:26'),
(3, '9685236578541256', '698574853695563', 'Rosa', 2, '2019-12-17 22:53:26', '2019-12-17 22:53:26'),
(4, '986587459985334', '4569874589635452', 'Blanco', 3, '2019-12-17 22:53:26', '2019-12-17 22:53:26'),
(5, '985886689635', '15987456688635', 'Blanco', 4, '2019-12-17 22:53:26', '2019-12-17 22:53:26'),
(6, '222222222222222', '111111111111111', 'Dorado', 1, '2019-12-17 22:53:26', '2019-12-17 22:53:26'),
(7, '888888888888888', NULL, 'Plata', 3, '2019-12-17 22:53:26', '2019-12-17 22:53:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `est_cod` int(2) NOT NULL,
  `est_desc` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`est_cod`, `est_desc`, `created_at`, `updated_at`) VALUES
(1, 'Activo', '2019-12-13 18:30:17', '2019-12-13 18:30:17'),
(2, 'Inactivo', '2019-12-13 18:30:18', '2019-12-13 18:30:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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
-- Estructura de tabla para la tabla `locales`
--

DROP TABLE IF EXISTS `locales`;
CREATE TABLE `locales` (
  `local_cod` int(10) NOT NULL,
  `local_nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `local_dir` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `local_tel` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`local_cod`, `local_nom`, `local_dir`, `local_tel`, `created_at`, `updated_at`) VALUES
(1, 'Centro', 'carrera 6 # 3-25', '311598855', '2019-12-13 18:34:02', '2019-12-16 09:43:48'),
(2, 'sur', 'calle 5 # 44-25', '314987632', '2019-12-13 18:34:02', '2019-12-13 18:34:02'),
(3, 'norte', 'Avenida 6 # 23-88', '306898462', '2019-12-13 18:34:02', '2019-12-13 18:34:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

DROP TABLE IF EXISTS `movimientos`;
CREATE TABLE `movimientos` (
  `movi_cod` int(10) NOT NULL,
  `dis_cod` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `acc_cod` int(1) NOT NULL,
  `local_cod` int(10) NOT NULL,
  `ase_cod` int(10) NOT NULL,
  `obs_mov` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`movi_cod`, `dis_cod`, `fecha`, `acc_cod`, `local_cod`, `ase_cod`, `obs_mov`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-12-21', 1, 3, 3, 'ee', '2019-12-21 18:11:01', '2019-12-21 18:11:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `prod_cod` int(10) NOT NULL,
  `prod_nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `prod_desc` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `prod_valor` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `prov_cod` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`prod_cod`, `prod_nom`, `prod_desc`, `prod_valor`, `stock`, `prov_cod`, `created_at`, `updated_at`) VALUES
(1, 'Samsung A20', 'Samsung A20 4GbRam', 750000, 10, 1, '2019-12-16 16:04:31', '2019-12-16 16:04:31'),
(2, 'Samsung A20', 'Samsung A20 16GbRam', 1250000, 5, 2, '2019-12-16 16:04:31', '2019-12-16 16:04:31'),
(3, 'Mototola M2', 'Moto GH10 4GbRam', 700000, 20, 5, '2019-12-16 16:04:32', '2019-12-16 16:04:32'),
(4, 'Xiaomi X20', 'X20 32GbRam', 1500000, 3, 2, '2019-12-16 16:04:32', '2019-12-16 16:04:32'),
(6, 'Asus AT10', 'Asus At 32GB', 9500000, 10, 1, '2019-12-21 09:58:48', '2019-12-21 09:58:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `prov_cod` int(10) NOT NULL,
  `prov_id` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `prov_nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `prov_dir` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `prov_tel` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`prov_cod`, `prov_id`, `prov_nom`, `prov_dir`, `prov_tel`, `created_at`, `updated_at`) VALUES
(1, '890635489', 'Tecnicelular', 'Cll 5 # 13-15', '032698745', '2019-12-16 04:01:40', '2019-12-17 01:37:17'),
(2, '890632452', 'Worldcelular', 'Cll 78 # 15-15', '315986741', '2019-12-16 04:01:41', '2019-12-17 01:37:36'),
(5, '16583541', 'Andres Lopez Gomez', 'Calle 8 # 65-89', '311896325', '2019-12-16 10:05:56', '2019-12-17 01:36:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `rol_cod` int(2) NOT NULL,
  `rol_desc` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_cod`, `rol_desc`, `created_at`, `updated_at`) VALUES
(1, 'administrador', '2019-12-13 18:28:21', '2019-12-13 18:28:21'),
(2, 'agente', '2019-12-13 18:29:07', '2019-12-13 18:29:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_x_usu`
--

DROP TABLE IF EXISTS `rol_x_usu`;
CREATE TABLE `rol_x_usu` (
  `rxu_id` int(10) NOT NULL,
  `usu_cod` int(10) NOT NULL,
  `rol_cod` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `api_token`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Guilegar Mambuscay', 'mambuscay_og@hotmail.com', NULL, NULL, '$2y$10$MyKMrZNx2jQpX95UEZsnjOoybdZQV2AG2M04tTp99hAIuncojpGia', NULL, '2019-12-21 20:30:53', '2019-12-21 20:30:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usu_cod` int(10) NOT NULL,
  `usu_id` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_alias` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_dir` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_tel` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `est_cod` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_cod`, `usu_id`, `usu_nom`, `usu_alias`, `usu_dir`, `usu_tel`, `est_cod`, `created_at`, `updated_at`) VALUES
(1, '6136933', 'Guille', 'Guille', 'dvsd', '43434', 1, '2019-12-18 19:15:09', '2019-12-18 19:15:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accion`
--
ALTER TABLE `accion`
  ADD PRIMARY KEY (`acc_cod`);

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`ase_cod`),
  ADD KEY `fk_estase` (`est_cod`);

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`dis_cod`),
  ADD KEY `fk_deprod` (`prod_cod`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`est_cod`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`local_cod`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`movi_cod`),
  ADD KEY `fk_acc` (`acc_cod`),
  ADD KEY `fk_mov_dis` (`dis_cod`),
  ADD KEY `fk_mov_ase` (`ase_cod`),
  ADD KEY `fk_mov_loc` (`local_cod`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`prod_cod`),
  ADD KEY `fk_prov_cod` (`prov_cod`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`prov_cod`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_cod`);

--
-- Indices de la tabla `rol_x_usu`
--
ALTER TABLE `rol_x_usu`
  ADD PRIMARY KEY (`rxu_id`),
  ADD KEY `fk_rxu_usu` (`usu_cod`),
  ADD KEY `fk_rxu_rol` (`rol_cod`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_cod`),
  ADD KEY `fk_estusu` (`est_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accion`
--
ALTER TABLE `accion`
  MODIFY `acc_cod` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `ase_cod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `dis_cod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `est_cod` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `local_cod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `movi_cod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `prod_cod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `prov_cod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_cod` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol_x_usu`
--
ALTER TABLE `rol_x_usu`
  MODIFY `rxu_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_cod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD CONSTRAINT `fk_estase` FOREIGN KEY (`est_cod`) REFERENCES `estados` (`est_cod`);

--
-- Filtros para la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD CONSTRAINT `fk_deprod` FOREIGN KEY (`prod_cod`) REFERENCES `productos` (`prod_cod`);

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `fk_acc` FOREIGN KEY (`acc_cod`) REFERENCES `accion` (`acc_cod`),
  ADD CONSTRAINT `fk_mov_ase` FOREIGN KEY (`ase_cod`) REFERENCES `asesores` (`ase_cod`),
  ADD CONSTRAINT `fk_mov_dis` FOREIGN KEY (`dis_cod`) REFERENCES `dispositivos` (`dis_cod`),
  ADD CONSTRAINT `fk_mov_loc` FOREIGN KEY (`local_cod`) REFERENCES `locales` (`local_cod`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_prov_cod` FOREIGN KEY (`prov_cod`) REFERENCES `proveedores` (`prov_cod`);

--
-- Filtros para la tabla `rol_x_usu`
--
ALTER TABLE `rol_x_usu`
  ADD CONSTRAINT `fk_rxu_rol` FOREIGN KEY (`rol_cod`) REFERENCES `roles` (`rol_cod`),
  ADD CONSTRAINT `fk_rxu_usu` FOREIGN KEY (`usu_cod`) REFERENCES `usuarios` (`usu_cod`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_estusu` FOREIGN KEY (`est_cod`) REFERENCES `estados` (`est_cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
