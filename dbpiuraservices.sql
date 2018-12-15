-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2018 a las 18:46:24
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_piuraservices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `entidadempresa_id` int(10) UNSIGNED NOT NULL,
  `nombreempresa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `tipoatencion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `entidadempresa_id`, `nombreempresa`, `direccion`, `horario`, `telefono`, `tipoatencion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'eps', 'alsda', 'aslda', 93939, 929292, NULL, NULL, NULL),
(2, 2, 'enosa', 'alsda', 'aslda', 93939, 929292, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 'movistar', 'alsda', 'aslda', 93939, 929292, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 'claro', 'alsda', 'aslda', 93939, 929292, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidadempresa`
--

CREATE TABLE `entidadempresa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webentidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entidadempresa`
--

INSERT INTO `entidadempresa` (`id`, `nombre`, `direccion`, `telefono`, `correo`, `horario`, `webentidad`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'eps', 'lima', '393939', 'askdaksd', 'asjdajsd', 'dasdjaskd', NULL, NULL, NULL),
(2, 'enosa', 'piura', 'ieei', 'ldads', 'alsdas', 'dasdjaskd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'movistar', 'piura 3', 'lsdkas', 'askdaksas', 'asjdajsd', 'dasdjaskd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'claro', 'piura933', 'asñdkasa', 'lasdalsd', 'asdmasd', 'dasdjaskd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'entel', 'piura', 'askdla', 'laskd', 'asjdajsd', 'dasdjaskd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inforeclamos`
--

CREATE TABLE `inforeclamos` (
  `id` int(10) UNSIGNED NOT NULL,
  `entidadempresa_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infotramites`
--

CREATE TABLE `infotramites` (
  `id` int(10) UNSIGNED NOT NULL,
  `entidadempresa_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(182, '2014_10_10_000000_create_rolempresa_table', 1),
(183, '2014_10_12_000000_create_users_table', 1),
(184, '2014_10_12_100000_create_password_resets_table', 1),
(185, '2018_09_06_181956_create_entidadempresa_table', 1),
(186, '2018_09_06_182020_create_inforeclamos_table', 1),
(187, '2018_09_06_182134_create_infotramites_table', 1),
(188, '2018_09_06_182209_create_contactos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolempresa`
--

CREATE TABLE `rolempresa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rolempresa`
--

INSERT INTO `rolempresa` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', NULL, NULL, NULL),
(2, 'Admin EPS Grau S.A', NULL, NULL, NULL),
(3, 'Admin Enosa', NULL, NULL, NULL),
(4, 'Admin Movistar', NULL, NULL, NULL),
(5, 'Admin Claro', NULL, NULL, NULL),
(6, 'Admin Entel', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `rol_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `rol_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kevin Quispe', 'kquispe07@gmail.com', '$2y$10$P.CPbIBkq7/badIPmwvvdup1bVkJ/2byezfYyK36k8RgCzGpBVnqu', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contactos_entidadempresa_id_foreign` (`entidadempresa_id`);

--
-- Indices de la tabla `entidadempresa`
--
ALTER TABLE `entidadempresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entidadempresa_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `entidadempresa_telefono_unique` (`telefono`),
  ADD UNIQUE KEY `entidadempresa_correo_unique` (`correo`);

--
-- Indices de la tabla `inforeclamos`
--
ALTER TABLE `inforeclamos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inforeclamos_entidadempresa_id_foreign` (`entidadempresa_id`);

--
-- Indices de la tabla `infotramites`
--
ALTER TABLE `infotramites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infotramites_entidadempresa_id_foreign` (`entidadempresa_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `rolempresa`
--
ALTER TABLE `rolempresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_rol_id_foreign` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `entidadempresa`
--
ALTER TABLE `entidadempresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `inforeclamos`
--
ALTER TABLE `inforeclamos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `infotramites`
--
ALTER TABLE `infotramites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
--
-- AUTO_INCREMENT de la tabla `rolempresa`
--
ALTER TABLE `rolempresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `contactos_entidadempresa_id_foreign` FOREIGN KEY (`entidadempresa_id`) REFERENCES `entidadempresa` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inforeclamos`
--
ALTER TABLE `inforeclamos`
  ADD CONSTRAINT `inforeclamos_entidadempresa_id_foreign` FOREIGN KEY (`entidadempresa_id`) REFERENCES `entidadempresa` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `infotramites`
--
ALTER TABLE `infotramites`
  ADD CONSTRAINT `infotramites_entidadempresa_id_foreign` FOREIGN KEY (`entidadempresa_id`) REFERENCES `entidadempresa` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `rolempresa` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
