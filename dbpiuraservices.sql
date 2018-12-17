-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2018 a las 17:00:05
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbpiuraservices`
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
  `horario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoatencion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `entidadempresa_id`, `nombreempresa`, `direccion`, `horario`, `telefono`, `tipoatencion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'eps', 'aslda', 'alsda', '93939', 'todo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'enosa', 'aslda', 'alsda', '93939', 'todo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'movistar', 'aslda', 'alsda', '93939', 'todo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 'claro', 'aslda', 'alsda', '93939', 'todo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, 'entel', 'aslda', 'alsda', '93939', 'todo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'Eps Grau SA', 'piura', '939393', 'eps@gmail.com', '4:3pm', 'epsgrau.com', '0000-00-00 00:00:00', '2018-12-17 18:41:18', '0000-00-00 00:00:00'),
(2, 'enosa', 'piura', 'ieei', 'ldads', 'alsdas', 'dasdjaskd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'movistar', 'piura ', 'lsdkas', 'askdaksas', 'asjdajsd', 'dasdjaskd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'claro', 'piura', 'asñdkasa', 'lasdalsd', 'asdmasd', 'dasdjaskd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'entel', 'piura', 'askdla', 'laskd', 'asjdajsd', 'dasdjaskd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'asldk', 'ldksld', 'aksdlka', 'sdflksdl', 'lsdkalsd', 'sldkasld', '2018-12-17 19:27:00', '2018-12-17 19:27:00', NULL);

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

--
-- Volcado de datos para la tabla `inforeclamos`
--

INSERT INTO `inforeclamos` (`id`, `entidadempresa_id`, `nombre`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'reclamo 1', 'desc reclamo 1', '2018-12-15 03:37:44', '2018-12-15 03:37:44', '0000-00-00 00:00:00'),
(2, 2, 'reclamo 2', 'des reclamo 2', '2018-12-15 03:37:44', '2018-12-15 03:37:44', '0000-00-00 00:00:00'),
(3, 3, 'reclamo 3', 'des reclamo 3', '2018-12-15 03:37:44', '2018-12-15 03:37:44', '0000-00-00 00:00:00'),
(4, 4, 'reclamo 4', 'des reclamo 4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, 'reclamo 5', 'des reclamo 5', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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

--
-- Volcado de datos para la tabla `infotramites`
--

INSERT INTO `infotramites` (`id`, `entidadempresa_id`, `nombre`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'tramite 1', 'desc tramite 1', '2018-12-15 03:36:27', '2018-12-15 03:36:27', '0000-00-00 00:00:00'),
(2, 2, 'tramite 2', 'desc tramite 2', '2018-12-15 03:36:27', '2018-12-15 03:36:27', '0000-00-00 00:00:00'),
(3, 3, 'tramite 3', 'desc tramite 3', '2018-12-15 03:36:27', '2018-12-15 03:36:27', '0000-00-00 00:00:00'),
(4, 4, 'tramite 4', 'desc tramite 4', '2018-12-15 03:36:27', '2018-12-15 03:36:27', '0000-00-00 00:00:00'),
(5, 5, 'tramite 5', 'desc tramite 5', '2018-12-15 03:36:27', '2018-12-15 03:36:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 1, 'Kevin Quispe', 'kquispe07@gmail.com', '$2y$10$bXybc/3ilDhdWrPV/Tfqh.H9Reuk.l1TBlaAawDmlWYnY/pWBJvRu', 'zDkD0sZFYHqo4mWZtBOeGsk3sReHEJhRw7gxtQyMlMgR3h7EMGWKzhYF0EBF', NULL, NULL),
(2, 4, 'Javier', 'javierromualdo@hotmail.com', '$2y$10$f5pwFVq70Ost/oyvVbgGY.I90qQPLdS9W7zPT3KqslI/5.kLoTH7C', 'Rh4XvSZHsmN4bn6K9mLyNbM5MPAQwDy9Oa2Owsmpc7muiN0bK9blwzQk61yP', '2018-12-17 03:44:55', '2018-12-17 03:45:29'),
(3, 6, 'pedro', 'pedroquispe@gmail.com', '$2y$10$r75mnBoLqPiZUWRtbZAKN.85wl7xvPXGcsofaa/y/MiUV4jzje4D.', 'GasdGdJ30NzazWdxkyFZlabVs5pzKAolDHPA5qSiRQ0DG6LXoBaQZS7Qcg1b', '2018-12-17 04:03:09', '2018-12-17 04:03:09');

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
  ADD UNIQUE KEY `entidadempresa_telefono_unique` (`telefono`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `entidadempresa`
--
ALTER TABLE `entidadempresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `inforeclamos`
--
ALTER TABLE `inforeclamos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `infotramites`
--
ALTER TABLE `infotramites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `rolempresa`
--
ALTER TABLE `rolempresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
