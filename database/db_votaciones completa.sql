-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-05-2018 a las 01:33:49
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_votaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `id` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id`, `numero`, `foto`, `organo_id`, `created_at`, `updated_at`) VALUES
('1000', 'BLANCO', 'voto_en_blanco.jpg', 1, '2018-05-06 10:45:33', '2018-05-06 10:45:33'),
('2000', 'BLANCO', 'voto_en_blanco.jpg', 2, '2018-05-06 10:45:33', '2018-05-06 10:45:33'),
('2012102030', '02', 'candidato_2012102030.jpg', 1, '2018-05-06 10:43:02', '2018-05-06 10:43:02'),
('2013102030', '03', 'candidato_2013102030.jpg', 2, '2018-05-06 10:44:01', '2018-05-06 10:44:01'),
('2014102030', '01', 'candidato_2014102030.jpg', 1, '2018-05-06 10:40:24', '2018-05-06 10:40:24'),
('2015113040', '07', 'candidato_2015113040.jpg', 4, '2018-05-06 10:46:17', '2018-05-06 10:46:17'),
('2016114010', '04', 'candidato_2016114010.jpg', 2, '2018-05-06 10:44:39', '2018-05-06 10:44:39'),
('2016123040', '08', 'candidato_2016123040.jpg', 4, '2018-05-06 10:50:22', '2018-05-06 10:50:22'),
('2017114020', '06', 'candidato_2017114020.jpg', 3, '2018-05-06 10:48:45', '2018-05-06 10:48:45'),
('2018114030', '05', 'candidato_2018114030.jpg', 3, '2018-05-06 10:45:33', '2018-05-06 10:45:33'),
('3000', 'BLANCO', 'voto_en_blanco.jpg', 3, '2018-05-06 10:45:33', '2018-05-06 10:45:33'),
('4000', 'BLANCO', 'voto_en_blanco.jpg', 4, '2018-05-06 10:45:33', '2018-05-06 10:45:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'No ha votado', 'No puede votar sin autorizacion', '2018-05-04 11:01:51', '2018-05-04 11:01:51'),
(2, 'Autorizado', 'Puede votar', '2018-05-04 11:01:51', '2018-05-04 11:01:51'),
(3, 'Votando', 'Puede votar', '2018-05-04 11:01:51', '2018-05-04 11:01:51'),
(4, 'Voto', 'Ya realizo el proceso de votacion', '2018-05-04 11:01:51', '2018-05-04 11:01:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Ingenieria', '2018-05-04 08:58:05', '2018-05-04 08:58:05'),
(2, 'Ciencias de la Educación', '2018-05-04 08:58:05', '2018-05-04 08:58:05'),
(3, 'Ciencias de la Salud', '2018-05-04 08:58:05', '2018-05-04 08:58:05'),
(4, 'Humanidades', '2018-05-04 08:58:05', '2018-05-04 08:58:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Lugar N1', '2018-05-04 09:06:14', '2018-05-04 09:06:14'),
(2, 'Lugar N2', '2018-05-04 09:06:14', '2018-05-04 09:06:14'),
(3, 'Lugar N3', '2018-05-04 09:06:14', '2018-05-04 09:06:14'),
(4, 'Lugar N4', '2018-05-04 09:06:14', '2018-05-04 09:06:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugar_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id`, `nombre`, `lugar_id`, `created_at`, `updated_at`) VALUES
(1, 'Mesa M01', 1, '2018-05-04 09:07:06', '2018-05-04 09:07:06'),
(2, 'Mesa M02', 2, '2018-05-04 09:07:06', '2018-05-04 09:07:06'),
(3, 'Mesa M03', 3, '2018-05-04 09:07:06', '2018-05-04 09:07:06'),
(4, 'Mesa M04', 4, '2018-05-04 09:07:06', '2018-05-04 09:07:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2018_05_03_000001_create_rol_table', 1),
(18, '2018_05_03_000002_create_facultad_table', 1),
(19, '2018_05_03_000003_create_programa_table', 1),
(20, '2018_05_03_120811_create_lugar_table', 1),
(21, '2018_05_03_120819_create_mesa_table', 1),
(22, '2018_05_03_121523_create_organo_table', 1),
(23, '2018_05_07_164427_create_estado_table', 1),
(24, '2018_05_07_164442_create_tipo_table', 1),
(25, '2019_10_12_000000_create_users_table', 1),
(26, '2019_10_12_100000_create_password_resets_table', 1),
(27, '2020_05_03_000002_create_candidato_table', 1),
(28, '2020_05_03_000003_create_voto_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organo`
--

CREATE TABLE `organo` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `organo`
--

INSERT INTO `organo` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Consejo Superior', 'Sin descripcion', '2018-05-06 10:35:15', '2018-05-06 10:35:15'),
(2, 'Consejo Academico', 'Sin descripcion', '2018-05-06 10:35:45', '2018-05-06 10:35:45'),
(3, 'Consejo del IDEA', 'Sin descripcion', '2018-05-06 10:36:04', '2018-05-06 10:36:04'),
(4, 'Consejo de Facultad', 'Sin descripcion', '2018-05-06 10:36:20', '2018-05-06 10:36:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facultad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id`, `nombre`, `facultad_id`, `created_at`, `updated_at`) VALUES
(1, 'Ingenieria de Sistemas', 1, '2018-05-04 08:59:01', '2018-05-04 08:59:01'),
(2, 'Ingeniería Electronica', 1, '2018-05-04 08:59:01', '2018-05-04 08:59:01'),
(3, 'Medicina', 3, '2018-05-04 08:59:01', '2018-05-04 08:59:01'),
(4, 'Derecho', 4, '2018-05-04 08:59:01', '2018-05-04 08:59:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
('A', 'Administrador', 'Es quien como su nombre lo indica administra el sitio', '2018-05-04 09:02:21', '2018-05-04 09:02:21'),
('V', 'Votante', 'Es quien tiene la facultad de ejercer el voto', '2018-05-04 11:01:51', '2018-05-04 11:01:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
('DOC', 'Docente', 'Descripcion del Docente', '2018-05-04 11:01:51', '2018-05-04 11:01:51'),
('EGR', 'Egresado', 'Descripcion del Egresado', '2018-05-04 11:01:51', '2018-05-04 11:01:51'),
('EST', 'Estudiante', 'Descripcion del Estudiante', '2018-05-04 11:01:51', '2018-05-04 11:01:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `codigo` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_id` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programa_id` int(10) UNSIGNED DEFAULT NULL,
  `mesa_id` int(10) UNSIGNED DEFAULT NULL,
  `estado_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`codigo`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `email`, `password`, `rol_id`, `tipo_id`, `programa_id`, `mesa_id`, `estado_id`, `remember_token`, `created_at`, `updated_at`) VALUES
('1000', 'Voto', '-', 'en Blanco', '-', 'blanco1@gmal.com', '-', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-04 11:01:51', '2018-05-04 11:01:51'),
('2000', 'Voto', '-', 'en Blanco', '-', 'blanco2@gmal.com', '-', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-04 11:01:51', '2018-05-04 11:01:51'),
('2012102030', 'Pedro', 'Jose', 'Pineda', 'Palaez', '2012102030@gmail.com', '$2y$10$DWIsaWSMhyddxtN8xQ310eyrM4kcqkzWH2Vb270CWE/g2vcB.xiD2', 'V', 'DOC', 3, 2, 2, NULL, '2018-05-06 10:20:33', '2018-05-06 10:20:33'),
('2013102030', 'Mariana', 'Lucia', 'Herrera', 'Gil', '2013102030@gmail.com', '$2y$10$k/WrasETksDtyGdwVQPDK.V3Q/s3iz6wxG3Xu1vVXiNy3tANdd9MG', 'V', 'EST', 2, 1, 2, NULL, '2018-05-06 10:19:30', '2018-05-06 10:27:13'),
('2014102030', 'Nicolas', 'Jose', 'Ariza', 'Nieto', '2014102030@gmail.com', '$2y$10$PvUyrRK3J684WU1j554vdOChxKRYaSp7Nrp6JVVWccFGhx4JQek/2', 'V', 'EGR', 4, 3, 2, NULL, '2018-05-06 10:15:48', '2018-05-06 10:15:48'),
('2015110010', 'Admin', 'A', 'Nis', 'Trador', 'admin@gmail.com', '$2y$10$gep6e5nZIlfdxc8PwWVmxOCmnjIk/SDNnXEjoJheRBYKy1Z10Ciae', 'A', NULL, NULL, NULL, NULL, NULL, '2018-05-04 14:07:06', '2018-05-04 14:07:06'),
('2015110020', 'Juan', 'Jose', 'Meza', 'Gamarra', 'admin2@gmail.com', '$2y$10$apxivIWBt4POzh2gDhoebe02J62OHTzC11bFAByaJkc4Hsyeb4RT.', 'A', NULL, NULL, NULL, NULL, NULL, '2018-05-04 14:07:06', '2018-05-04 14:07:06'),
('2015113040', 'Laura', 'Marcela', 'Perez', 'Lopez', '2015113040@gmail.com', '$2y$10$nkG7Wxi25IK2WpTeisyGc..vzpKa2g12O6MR78pjbwfZa6Sr7LlDq', 'V', 'EST', 4, 4, 1, NULL, '2018-05-06 10:23:39', '2018-05-06 10:28:04'),
('2016114010', 'Andrea', 'Maria', 'Lopez', 'Martinez', 'correo@gmail.com', '$2y$10$CwOZcQvLdXtVZcF9Sbd6FOeKJrzurbajmXihEOecks6/Akjmp3Hky', 'V', 'DOC', 3, 1, 1, NULL, '2018-05-04 14:07:06', '2018-05-06 10:26:30'),
('2016123040', 'Ana', 'Gabriella', 'Diaz', 'Anaya', '2016123040@gmail.com', '$2y$10$KdEhTwa7LrjIMdnwuyqM9eXbrv99qfn1HjlIMF8ZAw5.UA1phmwd6', 'V', 'EST', 3, 1, 2, NULL, '2018-05-06 10:24:42', '2018-05-06 10:24:42'),
('2017114020', 'Luis', 'Fernando', 'Hernadez', 'Gamarra', '2017114020@gmail.com', '$2y$10$4aTUWiBMpLFFi2GyQKFyHeWKttKH8QnflG6189n4SFU5H.jlzdapC', 'V', 'DOC', 2, 2, 4, NULL, '2018-05-04 14:07:06', '2018-05-06 10:09:46'),
('2018114030', 'Jorge', 'Luis', 'Suarez', 'Bula', '2018114030@gmail.com', '$2y$10$x.b7HkcnxddLtT2CV0dPe.WrDsupLmIqzLgexYxTqTmqt3YanAo6y', 'V', 'EGR', 3, 4, 2, NULL, '2018-05-04 14:07:06', '2018-05-04 14:07:06'),
('3000', 'Voto', '-', 'en Blanco', '-', 'blanco3@gmal.com', '-', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-04 11:01:51', '2018-05-04 11:01:51'),
('4000', 'Voto', '-', 'en Blanco', '-', 'blanco4@gmal.com', '-', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-04 11:01:51', '2018-05-04 11:01:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto`
--

CREATE TABLE `voto` (
  `id` int(10) UNSIGNED NOT NULL,
  `mesa_id` int(10) UNSIGNED NOT NULL,
  `candidato_id` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidato_organo_id_foreign` (`organo_id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mesa_lugar_id_foreign` (`lugar_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organo`
--
ALTER TABLE `organo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programa_facultad_id_foreign` (`facultad_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `users_codigo_unique` (`codigo`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_rol_id_foreign` (`rol_id`),
  ADD KEY `users_tipo_id_foreign` (`tipo_id`),
  ADD KEY `users_programa_id_foreign` (`programa_id`),
  ADD KEY `users_mesa_id_foreign` (`mesa_id`),
  ADD KEY `users_estado_id_foreign` (`estado_id`);

--
-- Indices de la tabla `voto`
--
ALTER TABLE `voto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voto_mesa_id_foreign` (`mesa_id`),
  ADD KEY `voto_candidato_id_foreign` (`candidato_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `organo`
--
ALTER TABLE `organo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `voto`
--
ALTER TABLE `voto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `candidato_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`codigo`) ON DELETE CASCADE,
  ADD CONSTRAINT `candidato_organo_id_foreign` FOREIGN KEY (`organo_id`) REFERENCES `organo` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD CONSTRAINT `mesa_lugar_id_foreign` FOREIGN KEY (`lugar_id`) REFERENCES `lugar` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_facultad_id_foreign` FOREIGN KEY (`facultad_id`) REFERENCES `facultad` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_mesa_id_foreign` FOREIGN KEY (`mesa_id`) REFERENCES `mesa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `voto`
--
ALTER TABLE `voto`
  ADD CONSTRAINT `voto_candidato_id_foreign` FOREIGN KEY (`candidato_id`) REFERENCES `candidato` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `voto_mesa_id_foreign` FOREIGN KEY (`mesa_id`) REFERENCES `mesa` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
