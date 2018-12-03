-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2018 a las 04:47:05
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatar`
--

CREATE TABLE `avatar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `url` varchar(300) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avatar`
--

INSERT INTO `avatar` (`id`, `nombre`, `url`, `updated_at`, `created_at`) VALUES
(4, 'Happy', 'http://127.0.0.1:8000/avatars/u8HUSUkVDcFbb8PyZtesj2sPAIqIh8N7fBrJLF2b.png', '2018-11-30 07:18:05', '2018-11-30 07:18:05'),
(5, 'Ave', 'http://127.0.0.1:8000/avatars/Umt55ggrOEG4TvpoOQGIZdqrkIHCZ3T4PiMIGfhE.png', '2018-12-01 04:13:39', '2018-12-01 04:13:38'),
(6, 'Angry birds rojo', 'http://127.0.0.1:8000/avatars/AmUIHGeK0DOdUfRmRvpdD1uaYXJvXRecqOanullU.png', '2018-12-02 05:35:30', '2018-12-02 05:35:30'),
(7, 'Android', 'http://127.0.0.1:8000/avatars/FkyrbP6Uo29GalWgtwOdycXDgnUn8FZRWUtomj4B.png', '2018-12-02 05:35:49', '2018-12-02 05:35:49'),
(8, 'Angry birds azul', 'http://127.0.0.1:8000/avatars/wkWx5WmQ6f1yojAuFMRXveqD5bWoRXJ9GZ1FUNDs.png', '2018-12-02 05:36:11', '2018-12-02 05:36:11'),
(9, 'Face', 'http://127.0.0.1:8000/avatars/1n20hAkIOIOqUq8BQ63tpCmdfOXJLLEpbZ60XusI.png', '2018-12-02 05:36:57', '2018-12-02 05:36:57'),
(10, 'Flappy bird', 'http://127.0.0.1:8000/avatars/BijiIlCDwULjuy7XUG1pwb8CXKGxSseK51EBLdGb.png', '2018-12-02 05:37:29', '2018-12-02 05:37:29'),
(11, 'Dumbways 1', 'http://127.0.0.1:8000/avatars/MWQ7hFNcBxE5a1ud1X2isfzosKNwTG6OFN5K4WKk.png', '2018-12-02 05:38:09', '2018-12-02 05:38:08'),
(12, 'Cloudy face', 'http://127.0.0.1:8000/avatars/X4bGxJy4Iy4ywcOFCFiC2fj0LdzNmuoPak3AMLLr.png', '2018-12-02 05:39:45', '2018-12-02 05:39:45'),
(13, 'Angry face', 'http://127.0.0.1:8000/avatars/8MQzGOaADhjo5Ogs2PYLcbhz4TKGY7EUmy9Yx9LU.png', '2018-12-02 05:40:23', '2018-12-02 05:40:23'),
(14, 'Kirby', 'http://127.0.0.1:8000/avatars/fHKZnzZRie4m23InFuJWSmplHSmfDjTHt8WCYgy4.png', '2018-12-02 05:40:48', '2018-12-02 05:40:47'),
(15, 'Jetpack', 'http://127.0.0.1:8000/avatars/bMUzgQoodN7bJ81WLCg7pXMcjClVsWB7geSED1H6.png', '2018-12-02 05:41:06', '2018-12-02 05:41:06'),
(16, 'Pou', 'http://127.0.0.1:8000/avatars/tJwxKdkKeyFsvNdOCRGfhuKrvIkAGZGodxlrp9k0.png', '2018-12-02 05:43:51', '2018-12-02 05:43:51'),
(17, 'Totoro', 'http://127.0.0.1:8000/avatars/HxYZrZKummsFo1AFy7g95BeJawo5WYHmoC9KCdft.png', '2018-12-02 05:45:09', '2018-12-02 05:45:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diasasueto`
--

CREATE TABLE `diasasueto` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diasasueto`
--

INSERT INTO `diasasueto` (`id`, `fecha`, `descripcion`, `created_at`, `updated_at`) VALUES
(4, '2018-12-01', 'Primero de diciembre es asueto', '2018-12-01 06:01:54', '2018-12-02 03:49:06');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id` int(11) NOT NULL,
  `codigo_noty` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `cuerpo` text NOT NULL,
  `creador` int(11) NOT NULL,
  `tarea_id` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id`, `codigo_noty`, `titulo`, `cuerpo`, `creador`, `tarea_id`, `created_at`, `updated_at`) VALUES
(1, 'Noty-6mtSG7yIxk-9413789-9355-if107-11781-p75Kca', 'FRANCISCO NAVAS TE ASIGNO UNA NUEVA TAREA', 'Hola muchachos, esta es la tarea nueva que les asigne porfavor trabajarla.', 1, 'Tarea-azBD8NM1pv-2375361-4955-ZRX34-71830-fjytRg', '2018-12-02 06:40:52', '2018-12-02 06:40:52'),
(2, 'Noty-FLr0SnEKJI-9477014-3972-Jg1kj-49723-uIt3RW', 'FRANCISCO NAVAS TE ASIGNO UNA NUEVA TAREA', 'Porfavor revisar esta notificación.', 1, 'Tarea-5t896M0rEw-8728205-8170-Iia8t-50656-UZES74', '2018-12-03 01:39:52', '2018-12-03 01:39:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion_user`
--

CREATE TABLE `notificacion_user` (
  `id` int(11) NOT NULL,
  `notificacion_id` varchar(250) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `estado` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificacion_user`
--

INSERT INTO `notificacion_user` (`id`, `notificacion_id`, `user_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Noty-6mtSG7yIxk-9413789-9355-if107-11781-p75Kca', 1, 'SIN LEER', '2018-12-02 06:40:52', '2018-12-02 06:40:52'),
(2, 'Noty-6mtSG7yIxk-9413789-9355-if107-11781-p75Kca', 2, 'SIN LEER', '2018-12-02 06:40:53', '2018-12-02 06:40:53'),
(3, 'Noty-FLr0SnEKJI-9477014-3972-Jg1kj-49723-uIt3RW', 1, 'SIN LEER', '2018-12-03 01:39:52', '2018-12-03 01:39:52'),
(4, 'Noty-FLr0SnEKJI-9477014-3972-Jg1kj-49723-uIt3RW', 2, 'SIN LEER', '2018-12-03 01:39:52', '2018-12-03 01:39:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `codigo_tarea` varchar(250) NOT NULL,
  `Titulo` varchar(250) DEFAULT NULL,
  `Cuerpo` text,
  `estado` varchar(200) DEFAULT NULL,
  `fecha_finalizacion` date DEFAULT NULL,
  `creador` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `codigo_tarea`, `Titulo`, `Cuerpo`, `estado`, `fecha_finalizacion`, `creador`, `created_at`, `updated_at`) VALUES
(5, 'Tarea-azBD8NM1pv-2375361-4955-ZRX34-71830-fjytRg', 'Tarea de prueba', '<p><strong><span style=\"font-size:14px\">Tarea de prueba</span></strong></p>', 'Inicio', '2018-12-15', 1, '2018-12-02 06:40:52', '2018-12-02 06:40:52'),
(6, 'Tarea-5t896M0rEw-8728205-8170-Iia8t-50656-UZES74', 'Segunda tarea asignada', '<p><strong><span style=\"font-family:Courier New,Courier,monospace\">Tarea asignada para hoy</span></strong></p>', 'Inicio', '2018-12-02', 1, '2018-12-03 01:39:52', '2018-12-03 01:39:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas_usuarios`
--

CREATE TABLE `tareas_usuarios` (
  `id` int(11) NOT NULL,
  `tarea_id` varchar(250) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas_usuarios`
--

INSERT INTO `tareas_usuarios` (`id`, `tarea_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tarea-azBD8NM1pv-2375361-4955-ZRX34-71830-fjytRg', 1, '2018-12-02 06:40:52', '2018-12-02 06:40:52'),
(2, 'Tarea-azBD8NM1pv-2375361-4955-ZRX34-71830-fjytRg', 2, '2018-12-02 06:40:52', '2018-12-02 06:40:52'),
(3, 'Tarea-5t896M0rEw-8728205-8170-Iia8t-50656-UZES74', 1, '2018-12-03 01:39:52', '2018-12-03 01:39:52'),
(4, 'Tarea-5t896M0rEw-8728205-8170-Iia8t-50656-UZES74', 2, '2018-12-03 01:39:52', '2018-12-03 01:39:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_img` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `rol` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar_img`, `rol`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Francisco Navas', 'navasfran98@gmail.com', 'http://127.0.0.1:8000/avatars/1n20hAkIOIOqUq8BQ63tpCmdfOXJLLEpbZ60XusI.png', 'super', '$2y$10$Rx7A9V5YMosh2wQwVh3rKuVkNPATQ/O7QG/wxJ0mXrdDLNqBUiCcW', 'MCBsgiWQd7nBzNeVUOIv92h2dTZMBEtOXTPHBzjCQ8vDdgAS1z1IAcLfHDHp', '2018-11-30 11:47:36', '2018-12-03 08:00:51'),
(2, 'Karla Hernández', 'karla@gmail.com', 'http://127.0.0.1:8000/avatars/u8HUSUkVDcFbb8PyZtesj2sPAIqIh8N7fBrJLF2b.png', NULL, '$2y$10$gyWgrEufbKd7D7G4Qhk1/u5OXoK9JrB80yDcgdtwal.eUAQ017ice', 'bdKDgq5TcMPt1FbcRkebQRSjT5lxTf2onKW5EBvctSj5DLFbw733FgXslmjJ', '2018-12-02 11:29:39', '2018-12-02 11:29:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indices de la tabla `diasasueto`
--
ALTER TABLE `diasasueto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo_noty` (`codigo_noty`);

--
-- Indices de la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `notificacion_id` (`notificacion_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo_tarea` (`codigo_tarea`),
  ADD KEY `creador` (`creador`);

--
-- Indices de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarea_id` (`tarea_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `avatar_img` (`avatar_img`(191)),
  ADD KEY `avatar_img_2` (`avatar_img`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `diasasueto`
--
ALTER TABLE `diasasueto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  ADD CONSTRAINT `notificacion_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificacion_user_ibfk_2` FOREIGN KEY (`notificacion_id`) REFERENCES `notificacion` (`codigo_noty`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`creador`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  ADD CONSTRAINT `tareas_usuarios_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tareas_usuarios_ibfk_2` FOREIGN KEY (`tarea_id`) REFERENCES `tareas` (`codigo_tarea`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`avatar_img`) REFERENCES `avatar` (`url`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
