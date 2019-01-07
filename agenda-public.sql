-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2019 a las 23:07:39
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 'Default avatar', 'https://i.ibb.co/P5p1trd/contacts2.png', '2019-01-03 09:00:39', '2019-01-03 09:00:39'),
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
(17, 'Totoro', 'http://127.0.0.1:8000/avatars/HxYZrZKummsFo1AFy7g95BeJawo5WYHmoC9KCdft.png', '2018-12-02 05:45:09', '2018-12-02 05:45:09'),
(18, 'Fanstama', 'http://127.0.0.1:8000/avatars/jE7SsCFx7o2RgGLctnYD9SMBJRhRpqLhBcnOv2q1.png', '2018-12-03 20:03:39', '2018-12-03 20:03:38'),
(19, 'Fox', 'http://127.0.0.1:8000/avatars/43bh4FIBsXxt1AGVYuz2gce4MzQ1y3AvPJ9OxEMz.png', '2018-12-03 20:04:10', '2018-12-03 20:04:10'),
(20, 'Jelly', 'http://127.0.0.1:8000/avatars/WUJHVlm2U0dn0YgqtMixAZlcw52kUreX0RjIfpJc.ico', '2018-12-03 20:05:17', '2018-12-03 20:05:17'),
(21, 'Sonic', 'http://127.0.0.1:8000/avatars/meqIxQmQsoLPGYTuKrBnSCCKnccq24YTwLQ7nZJk.png', '2018-12-03 20:06:42', '2018-12-03 20:06:42'),
(22, 'Homero', 'http://127.0.0.1:8000/avatars/AEtZuVLFzuKDPcqghhvm6K3QNUL3Su3JFqffq8e6.png', '2018-12-03 20:07:03', '2018-12-03 20:07:03'),
(23, 'Cocodrilo', 'http://127.0.0.1:8000/avatars/Nv8slxn25zpZci0FbN1KnMjPjq8SfzXBElujEJAZ.png', '2018-12-03 20:07:53', '2018-12-03 20:07:53'),
(24, 'Angrybirds 3', 'http://127.0.0.1:8000/avatars/aoe8aAbHjsXnOpVvoJtARgehQF7HSZjz9e1Ec2sc.png', '2018-12-03 20:08:42', '2018-12-03 20:08:42'),
(25, 'Zoombie A', 'http://127.0.0.1:8000/avatars/0rJJ5cRqIUblVvs5M4m6IMqwFm6i2WJT35ZbC4DM.png', '2018-12-03 20:09:06', '2018-12-03 20:09:06'),
(26, 'Zombie 4', 'http://127.0.0.1:8000/avatars/abKvopJbdkr9iTXvXDxthtj8LvawaTqOLI9w9fD4.png', '2018-12-03 22:48:25', '2018-12-03 22:48:25'),
(27, 'Boy 1', 'http://127.0.0.1:8000/avatars/VUkLqYtGeiV0kHwwBL8Fnj9gS0Zzn62dh2h7avVs.png', '2018-12-03 22:49:47', '2018-12-03 22:49:47'),
(28, 'Yeti', 'http://127.0.0.1:8000/avatars/bauzb6ypxBC5j7Svbwq68tnPnvyg7U3u78ou5XoL.png', '2018-12-17 14:35:57', '2018-12-17 14:35:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diasasueto`
--

CREATE TABLE `diasasueto` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` text,
  `grupo` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diasasueto`
--

INSERT INTO `diasasueto` (`id`, `fecha`, `descripcion`, `grupo`, `created_at`, `updated_at`) VALUES
(4, '2019-01-31', 'Primero de diciembre es asueto', 'fjpDt559vTyE', '2018-12-01 06:01:54', '2019-01-02 13:41:47'),
(5, '2019-02-01', 'Asueto general', 'fjpDt559vTyE', '2019-01-02 13:57:52', '2019-01-02 13:58:24'),
(6, '2019-02-02', 'Asueto general', 'fjpDt559vTyE', '2019-01-02 14:02:27', '2019-01-02 14:02:44'),
(7, '2019-01-24', 'Vacación de un día', 'FagdL273TwqL', '2019-01-07 11:04:32', '2019-01-07 11:04:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `codigo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `codigo`) VALUES
(3, 'fjpDt559vTyE'),
(4, 'FagdL273TwqL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalacion`
--

CREATE TABLE `instalacion` (
  `id` int(11) NOT NULL,
  `instalacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instalacion`
--

INSERT INTO `instalacion` (`id`, `instalacion`) VALUES
(1, 'no');

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
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `contenido` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `contenido`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '😱 esta nota es con emoji 😌☺️🙈😒👌🐤🐀', 17, '2019-01-07 14:40:07', '2019-01-07 14:40:07'),
(5, '😱', 18, '2019-01-07 14:44:24', '2019-01-07 14:44:24'),
(6, '😔', 18, '2019-01-07 16:07:03', '2019-01-07 16:07:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id` int(11) NOT NULL,
  `codigo_noty` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `cuerpo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `creador` int(11) NOT NULL,
  `tarea_id` varchar(250) DEFAULT NULL,
  `tipo_noti` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id`, `codigo_noty`, `titulo`, `cuerpo`, `creador`, `tarea_id`, `tipo_noti`, `created_at`, `updated_at`) VALUES
(1, 'Noty-TJP5iropSV-7257473-4703-mWPSJ-97625-9Y2dQB', 'FRANCISCO NAVAS TE ASIGNO UNA NUEVA TAREA', 'Nueva tarea 😱 por Francisco 😡', 14, 'Tarea-b1Png7sF5B-2802712-2832-vX8JF-50098-0DNfUL', 'tarea', '2019-01-07 10:35:40', '2019-01-07 10:35:40'),
(2, 'Noty-K6m4la0WcV-8425014-9120-d23AK-44757-kG6Nae', 'DIANA ARGUETA TE ASIGNO UNA NUEVA TAREA', 'Hola Dario, te anexo lo que es la tarea de Enero 😱', 17, 'Tarea-ICqgvT2kEx-5313821-4570-QGjMz-43931-TJudop', 'tarea', '2019-01-07 10:50:11', '2019-01-07 10:50:11'),
(3, 'Noty-s84wQqMdHi-7802150-4087-J5uj3-88840-ewUlR9', 'DIANA ARGUETA HA MODIFICADO LA TAREA', 'La tarea ha sido modificada', 17, 'Tarea-ICqgvT2kEx-5313821-4570-QGjMz-43931-TJudop', 'tarea', '2019-01-07 11:07:27', '2019-01-07 11:07:27'),
(4, 'Noty-ZFeNj7AiO8-2741196-9977-QpDuT-78996-SQ6ZbM', 'CAMBIO DE ESTADO EN TAREA', 'Dario Alvarez ha cambiado el estado de la tarea ha EN PROCESO.', 18, 'Tarea-ICqgvT2kEx-5313821-4570-QGjMz-43931-TJudop', 'cambio\r\n         ', '2019-01-07 14:43:26', '2019-01-07 14:43:26');

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
(41, 'Noty-TJP5iropSV-7257473-4703-mWPSJ-97625-9Y2dQB', 15, 'SIN LEER', '2019-01-07 10:35:40', '2019-01-07 10:35:40'),
(42, 'Noty-TJP5iropSV-7257473-4703-mWPSJ-97625-9Y2dQB', 16, 'SIN LEER', '2019-01-07 10:35:41', '2019-01-07 10:35:41'),
(43, 'Noty-K6m4la0WcV-8425014-9120-d23AK-44757-kG6Nae', 18, 'SIN LEER', '2019-01-07 10:50:11', '2019-01-07 10:50:11'),
(44, 'Noty-s84wQqMdHi-7802150-4087-J5uj3-88840-ewUlR9', 18, 'SIN LEER', '2019-01-07 11:07:27', '2019-01-07 11:07:27'),
(45, 'Noty-ZFeNj7AiO8-2741196-9977-QpDuT-78996-SQ6ZbM', 17, 'SIN LEER', '2019-01-07 14:43:26', '2019-01-07 14:43:26');

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
  `Titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci,
  `Cuerpo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `estado` varchar(200) DEFAULT NULL,
  `fecha_finalizacion` date DEFAULT NULL,
  `creador` int(11) DEFAULT NULL,
  `grupo` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `codigo_tarea`, `Titulo`, `Cuerpo`, `estado`, `fecha_finalizacion`, `creador`, `grupo`, `created_at`, `updated_at`) VALUES
(17, 'Tarea-b1Png7sF5B-2802712-2832-vX8JF-50098-0DNfUL', 'Primera tarea asignada por Francisco 😝', '<ul>\r\n	<li>item 1</li>\r\n	<li>item 2</li>\r\n	<li>item 3</li>\r\n</ul>', 'Inicio', '2019-01-07', 14, 'fjpDt559vTyE', '2019-01-07 10:35:40', '2019-01-07 10:35:40'),
(18, 'Tarea-ICqgvT2kEx-5313821-4570-QGjMz-43931-TJudop', 'Tarea de Enero 😉', '<ol>\r\n	<li>item 1</li>\r\n	<li>item 2</li>\r\n	<li>item 3</li>\r\n</ol>', 'Proceso', '2019-01-07', 17, 'FagdL273TwqL', '2019-01-07 10:50:11', '2019-01-07 10:50:11');

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
(72, 'Tarea-b1Png7sF5B-2802712-2832-vX8JF-50098-0DNfUL', 15, '2019-01-07 10:35:40', '2019-01-07 10:35:40'),
(73, 'Tarea-b1Png7sF5B-2802712-2832-vX8JF-50098-0DNfUL', 16, '2019-01-07 10:35:40', '2019-01-07 10:35:40'),
(75, 'Tarea-ICqgvT2kEx-5313821-4570-QGjMz-43931-TJudop', 17, '2019-01-07 11:07:27', '2019-01-07 11:07:27'),
(76, 'Tarea-ICqgvT2kEx-5313821-4570-QGjMz-43931-TJudop', 18, '2019-01-07 11:07:27', '2019-01-07 11:07:27');

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
  `grupo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar_img`, `rol`, `password`, `grupo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Soporte YETI-TASK', 'support@yetitask.djfrankremixer.com', 'http://127.0.0.1:8000/avatars/bauzb6ypxBC5j7Svbwq68tnPnvyg7U3u78ou5XoL.png', 'soporte', '$2y$10$o8.LYj2e3trTVgVazK0IHeY7l8yg/.ZM7DGNonWnRQovOV5Cm2pT6', NULL, '5diCog0lX42fuEh8CmKqfO5SDNxo7ZYUQ8tT9zR1dWq2sHf8ex5BkoRPIaeE', '2018-12-07 17:09:06', '2019-01-06 01:33:04'),
(14, 'Francisco Navas', 'navasfran98@gmail.com', 'http://127.0.0.1:8000/avatars/bMUzgQoodN7bJ81WLCg7pXMcjClVsWB7geSED1H6.png', 'super', '$2y$10$FgNeR22EtDR48Fh0oSeoK.hdyZf2EUxL/GaGQ9lEGgo7p.fQk.5D2', 'fjpDt559vTyE', 'VT9d8QSwHp6r0xr0FCcXdYAXNytpsk6JfD39OzaEO7k0JhIbG4xrVyspwZ1s', '2019-01-07 15:09:13', '2019-01-07 15:36:21'),
(15, 'Karla Margarita', 'karla@gmail.com', 'http://127.0.0.1:8000/avatars/tJwxKdkKeyFsvNdOCRGfhuKrvIkAGZGodxlrp9k0.png', 'common-user', '$2y$10$DR2SD8osptrxjp.GtntC6OTaNXlPvShCRn9BV42icto2PfnipIIEm', 'fjpDt559vTyE', 'AIwSbEYWCXsBeOVJtIsD2hZtDHTisCQeSpqplMBSjCOpQCxVLP4TpGH2BxBs', '2019-01-07 15:35:47', '2019-01-07 15:36:39'),
(16, 'Rosa Fernandez', 'rosa@gmail.com', 'http://127.0.0.1:8000/avatars/FkyrbP6Uo29GalWgtwOdycXDgnUn8FZRWUtomj4B.png', 'common-user', '$2y$10$iIMbnKoB1jJnPL5FVqsEhO1wLzgNR6gjHxy8zm.1Kg8ZFwU3HpEZ.', 'fjpDt559vTyE', '3Z3qmyRuyVXUFeTJ0iBhPEEoz0LvYf9cWX8n8k93RWHiPfFfQQLIWZjmwWgI', '2019-01-07 15:37:09', '2019-01-07 15:37:43'),
(17, 'Diana Argueta', 'diana@gmail.com', 'http://127.0.0.1:8000/avatars/Umt55ggrOEG4TvpoOQGIZdqrkIHCZ3T4PiMIGfhE.png', 'super', '$2y$10$8JYRXYRS6HQ5XXkDI.kHIOOGUEZPLN3kUKZWU8WurC7y9bUahRz1i', 'FagdL273TwqL', '7rkeeD4XwbjB2PjgSLhhMjUBsFw769fRr0GkEfVzd193kB3nK8qje3oanyyr', '2019-01-07 15:38:10', '2019-01-07 15:38:18'),
(18, 'Dario Alvarez', 'dario@gmail.com', 'https://i.ibb.co/P5p1trd/contacts2.png', 'common-user', '$2y$10$Ml1f9vjS/TgBd8lU95UY2uffA5oenOb43ETvo38LOVGnE1i0pP6hS', 'FagdL273TwqL', 'viCytc9KiFjThTVpSO8i2hf6e6EL9L7FBn2QcjE54jvuK0HyN9Dw9FnkvzoZ', '2019-01-07 16:34:02', '2019-01-07 16:34:02');

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
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instalacion`
--
ALTER TABLE `instalacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `diasasueto`
--
ALTER TABLE `diasasueto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `instalacion`
--
ALTER TABLE `instalacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
