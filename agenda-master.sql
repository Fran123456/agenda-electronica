-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2019 a las 06:18:58
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diasasueto`
--

INSERT INTO `diasasueto` (`id`, `fecha`, `descripcion`, `created_at`, `updated_at`) VALUES
(4, '2019-01-31', 'Primero de diciembre es asueto', '2018-12-01 06:01:54', '2019-01-02 13:41:47'),
(5, '2019-02-01', 'Asueto general', '2019-01-02 13:57:52', '2019-01-02 13:58:24'),
(6, '2019-02-02', 'Asueto general', '2019-01-02 14:02:27', '2019-01-02 14:02:44');

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
(4, 'Noty-sIgKWr2Xhd-5882381-6648-NUKlX-11456-Lmb3uA', 'FRANCISCO NAVAS HA MODIFICADO LA TAREA', 'Se ha reprogramado la tarea.', 7, 'Tarea-sycxSeVChM-5633251-4128-P97LD-25211-Rdv8lC', 'tarea', '2019-01-04 14:10:47', '2019-01-04 14:10:47'),
(5, 'Noty-CcbjpkZAta-5310094-5610-I5Aye-96828-uEaIiZ', 'CAMBIO DE ESTADO EN TAREA', 'Vladimir Molina ha cambiado el estado de la tarea ha EN PROCESO.', 3, 'Tarea-sycxSeVChM-5633251-4128-P97LD-25211-Rdv8lC', 'cambio\r\n         ', '2019-01-04 14:11:48', '2019-01-04 14:11:48'),
(6, 'Noty-iT2twgZrL7-2612053-8156-oK4U5-46822-CSEy3L', 'CAMBIO DE ESTADO EN TAREA', 'Vladimir Molina ha cambiado el estado de la tarea ha FINALIZADO.', 3, 'Tarea-sycxSeVChM-5633251-4128-P97LD-25211-Rdv8lC', 'cambio\r\n         ', '2019-01-04 14:12:14', '2019-01-04 14:12:14'),
(9, 'Noty-8Q31dIMTiq-7963348-4476-xpshN-25537-ocLQBp', 'FRANCISCO NAVAS TE ASIGNO UNA NUEVA TAREA', 'Tarea  2 asignada', 7, 'Tarea-37b8mc0UiY-3802926-7095-v9ogN-26556-4PTUpK', 'tarea', '2019-01-04 14:21:12', '2019-01-04 14:21:12'),
(10, 'Noty-GpagVPfxeR-4445355-1865-hrlCR-51308-hYaDyn', 'FRANCISCO NAVAS TE ASIGNO UNA NUEVA TAREA', 'Asignaci?n de tarea 3', 7, 'Tarea-Zy9WVnsEXr-5166075-7136-Z4mwR-75152-cLbzsa', 'tarea', '2019-01-04 14:22:03', '2019-01-04 14:22:03'),
(11, 'Noty-AtcWgU3QkE-4261978-7554-qF1Cv-94123-4gbMye', 'FRANCISCO NAVAS HA MODIFICADO LA TAREA', 'La tarea ha sido modificada: Se edito el contenido', 7, 'Tarea-Zy9WVnsEXr-5166075-7136-Z4mwR-75152-cLbzsa', 'tarea', '2019-01-04 14:24:34', '2019-01-04 14:24:34'),
(12, 'Noty-vkDbsWyL3K-5043096-3860-ZhLSp-67308-DzTV6w', 'FRANCISCO NAVAS HA MODIFICADO LA TAREA', 'La tarea ha sido modificada', 7, 'Tarea-37b8mc0UiY-3802926-7095-v9ogN-26556-4PTUpK', 'tarea', '2019-01-04 14:25:21', '2019-01-04 14:25:21'),
(13, 'Noty-YFlkdsXHW1-6362604-6635-1hwZX-37349-02laL3', 'FRANCISCO NAVAS HA MODIFICADO LA TAREA', 'La tarea ha sido modificada', 7, 'Tarea-37b8mc0UiY-3802926-7095-v9ogN-26556-4PTUpK', 'tarea', '2019-01-04 14:25:30', '2019-01-04 14:25:30'),
(14, 'Noty-QCTvVjXJkK-3958877-2038-7c0hR-38912-JAFjVP', 'FRANCISCO NAVAS TE ASIGNO UNA NUEVA TAREA', 'Nueva tarea asignada ☺️🙈', 7, 'Tarea-LuN1qFod8V-5796547-5161-AHtCx-74207-4ofv6s', 'tarea', '2019-01-04 16:35:28', '2019-01-04 16:35:28'),
(15, 'Noty-pFEHSJz2wo-4602081-5047-6nA3i-59671-1l3ItE', 'LA TAREA NO HA SIDO FINALIZADA', 'LA TAREA NO HA PODIDO SER FINALIZADA, SE LES NOTIFICARA CUANDO SEA NUEVAMENTE PROGRAMADA A LOS USUARIOS QUE SE LES ASIGNE. <br><br> Feliz Día.', 1, 'Tarea-ArvG6Lp9ZS-7963353-3036-zl5Jh-97634-qhWU63', 'generada-users', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(16, 'Noty-i2aresEP5x-6215726-8504-81dmz-67831-kfZrL4', 'LA TAREA NO SE FINALIZO, PUEDE REPROGRAMARLA.', 'La tarea no ha podido ser finalizada en la fecha estipulada, de ser necesario puede volver a reprogramar la tarea con los mismos colaboradores o diferentes. <br><br> Feliz día.', 1, 'Tarea-ArvG6Lp9ZS-7963353-3036-zl5Jh-97634-qhWU63', 'generada', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(17, 'Noty-Jo7mAbjUZi-8287371-3299-WdewV-75879-sOrJXA', 'LA TAREA NO HA SIDO FINALIZADA', 'LA TAREA NO HA PODIDO SER FINALIZADA, SE LES NOTIFICARA CUANDO SEA NUEVAMENTE PROGRAMADA A LOS USUARIOS QUE SE LES ASIGNE. <br><br> Feliz Día.', 1, 'Tarea-Gm9caz8Yd3-3981260-2313-0DOki-33261-i5ewJp', 'generada-users', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(18, 'Noty-ks1wyTDAj5-3730286-5505-OQyd7-67342-NWXmug', 'LA TAREA NO SE FINALIZO, PUEDE REPROGRAMARLA.', 'La tarea no ha podido ser finalizada en la fecha estipulada, de ser necesario puede volver a reprogramar la tarea con los mismos colaboradores o diferentes. <br><br> Feliz día.', 1, 'Tarea-Gm9caz8Yd3-3981260-2313-0DOki-33261-i5ewJp', 'generada', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(19, 'Noty-p6FAi7vhJl-7355495-4195-6wDx2-60044-lxV40n', 'LA TAREA NO HA SIDO FINALIZADA', 'LA TAREA NO HA PODIDO SER FINALIZADA, SE LES NOTIFICARA CUANDO SEA NUEVAMENTE PROGRAMADA A LOS USUARIOS QUE SE LES ASIGNE. <br><br> Feliz Día.', 1, 'Tarea-LuN1qFod8V-5796547-5161-AHtCx-74207-4ofv6s', 'generada-users', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(20, 'Noty-zmdXs9rDeH-7433236-8657-fsKGl-86712-KWGE6t', 'LA TAREA NO SE FINALIZO, PUEDE REPROGRAMARLA.', 'La tarea no ha podido ser finalizada en la fecha estipulada, de ser necesario puede volver a reprogramar la tarea con los mismos colaboradores o diferentes. <br><br> Feliz día.', 1, 'Tarea-LuN1qFod8V-5796547-5161-AHtCx-74207-4ofv6s', 'generada', '2019-01-05 17:00:34', '2019-01-05 17:00:34');

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
(5, 'Noty-sIgKWr2Xhd-5882381-6648-NUKlX-11456-Lmb3uA', 3, 'LEIDA', '2019-01-04 14:10:47', '2019-01-04 14:10:47'),
(6, 'Noty-CcbjpkZAta-5310094-5610-I5Aye-96828-uEaIiZ', 7, 'SIN LEER', '2019-01-04 14:11:48', '2019-01-04 14:11:48'),
(7, 'Noty-iT2twgZrL7-2612053-8156-oK4U5-46822-CSEy3L', 7, 'SIN LEER', '2019-01-04 14:12:14', '2019-01-04 14:12:14'),
(11, 'Noty-8Q31dIMTiq-7963348-4476-xpshN-25537-ocLQBp', 2, 'SIN LEER', '2019-01-04 14:21:12', '2019-01-04 14:21:12'),
(12, 'Noty-8Q31dIMTiq-7963348-4476-xpshN-25537-ocLQBp', 4, 'SIN LEER', '2019-01-04 14:21:12', '2019-01-04 14:21:12'),
(13, 'Noty-8Q31dIMTiq-7963348-4476-xpshN-25537-ocLQBp', 5, 'SIN LEER', '2019-01-04 14:21:12', '2019-01-04 14:21:12'),
(14, 'Noty-GpagVPfxeR-4445355-1865-hrlCR-51308-hYaDyn', 2, 'SIN LEER', '2019-01-04 14:22:03', '2019-01-04 14:22:03'),
(15, 'Noty-GpagVPfxeR-4445355-1865-hrlCR-51308-hYaDyn', 3, 'LEIDA', '2019-01-04 14:22:03', '2019-01-04 14:22:03'),
(16, 'Noty-GpagVPfxeR-4445355-1865-hrlCR-51308-hYaDyn', 4, 'SIN LEER', '2019-01-04 14:22:03', '2019-01-04 14:22:03'),
(17, 'Noty-GpagVPfxeR-4445355-1865-hrlCR-51308-hYaDyn', 5, 'SIN LEER', '2019-01-04 14:22:03', '2019-01-04 14:22:03'),
(18, 'Noty-AtcWgU3QkE-4261978-7554-qF1Cv-94123-4gbMye', 2, 'SIN LEER', '2019-01-04 14:24:34', '2019-01-04 14:24:34'),
(19, 'Noty-AtcWgU3QkE-4261978-7554-qF1Cv-94123-4gbMye', 3, 'LEIDA', '2019-01-04 14:24:34', '2019-01-04 14:24:34'),
(20, 'Noty-AtcWgU3QkE-4261978-7554-qF1Cv-94123-4gbMye', 4, 'SIN LEER', '2019-01-04 14:24:34', '2019-01-04 14:24:34'),
(21, 'Noty-AtcWgU3QkE-4261978-7554-qF1Cv-94123-4gbMye', 5, 'SIN LEER', '2019-01-04 14:24:34', '2019-01-04 14:24:34'),
(22, 'Noty-vkDbsWyL3K-5043096-3860-ZhLSp-67308-DzTV6w', 2, 'SIN LEER', '2019-01-04 14:25:21', '2019-01-04 14:25:21'),
(23, 'Noty-vkDbsWyL3K-5043096-3860-ZhLSp-67308-DzTV6w', 4, 'SIN LEER', '2019-01-04 14:25:21', '2019-01-04 14:25:21'),
(24, 'Noty-vkDbsWyL3K-5043096-3860-ZhLSp-67308-DzTV6w', 5, 'SIN LEER', '2019-01-04 14:25:21', '2019-01-04 14:25:21'),
(25, 'Noty-YFlkdsXHW1-6362604-6635-1hwZX-37349-02laL3', 2, 'SIN LEER', '2019-01-04 14:25:30', '2019-01-04 14:25:30'),
(26, 'Noty-YFlkdsXHW1-6362604-6635-1hwZX-37349-02laL3', 4, 'SIN LEER', '2019-01-04 14:25:30', '2019-01-04 14:25:30'),
(27, 'Noty-YFlkdsXHW1-6362604-6635-1hwZX-37349-02laL3', 5, 'SIN LEER', '2019-01-04 14:25:30', '2019-01-04 14:25:30'),
(28, 'Noty-QCTvVjXJkK-3958877-2038-7c0hR-38912-JAFjVP', 6, 'SIN LEER', '2019-01-04 16:35:28', '2019-01-04 16:35:28'),
(29, 'Noty-QCTvVjXJkK-3958877-2038-7c0hR-38912-JAFjVP', 7, 'SIN LEER', '2019-01-04 16:35:34', '2019-01-04 16:35:34'),
(30, 'Noty-pFEHSJz2wo-4602081-5047-6nA3i-59671-1l3ItE', 6, 'SIN LEER', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(31, 'Noty-pFEHSJz2wo-4602081-5047-6nA3i-59671-1l3ItE', 7, 'SIN LEER', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(32, 'Noty-i2aresEP5x-6215726-8504-81dmz-67831-kfZrL4', 7, 'SIN LEER', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(33, 'Noty-Jo7mAbjUZi-8287371-3299-WdewV-75879-sOrJXA', 6, 'SIN LEER', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(34, 'Noty-Jo7mAbjUZi-8287371-3299-WdewV-75879-sOrJXA', 7, 'SIN LEER', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(35, 'Noty-ks1wyTDAj5-3730286-5505-OQyd7-67342-NWXmug', 7, 'LEIDA', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(36, 'Noty-p6FAi7vhJl-7355495-4195-6wDx2-60044-lxV40n', 6, 'SIN LEER', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(37, 'Noty-p6FAi7vhJl-7355495-4195-6wDx2-60044-lxV40n', 7, 'LEIDA', '2019-01-05 17:00:34', '2019-01-05 17:00:34'),
(38, 'Noty-zmdXs9rDeH-7433236-8657-fsKGl-86712-KWGE6t', 7, 'LEIDA', '2019-01-05 17:00:34', '2019-01-05 17:00:34');

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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `codigo_tarea`, `Titulo`, `Cuerpo`, `estado`, `fecha_finalizacion`, `creador`, `created_at`, `updated_at`) VALUES
(13, 'Tarea-Gm9caz8Yd3-3981260-2313-0DOki-33261-i5ewJp', 'Tarea nueva 😱', '<h1><strong>Tareas</strong></h1>\r\n\r\n<ol>\r\n	<li>Item 1</li>\r\n	<li>Item 2</li>\r\n	<li>Item 3</li>\r\n</ol>', 'No terminada', '2019-01-04', 7, '2019-01-04 16:34:23', '2019-01-04 16:34:23'),
(14, 'Tarea-LuN1qFod8V-5796547-5161-AHtCx-74207-4ofv6s', 'Tarea nueva 😱', '<h1><strong>Tareas</strong></h1>\r\n\r\n<ol>\r\n	<li>Item 1</li>\r\n	<li>Item 2</li>\r\n	<li>Item 3</li>\r\n</ol>', 'No terminada', '2019-01-04', 7, '2019-01-04 16:35:27', '2019-01-04 16:35:27');

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
(65, 'Tarea-Gm9caz8Yd3-3981260-2313-0DOki-33261-i5ewJp', 6, '2019-01-04 16:34:23', '2019-01-04 16:34:23'),
(66, 'Tarea-Gm9caz8Yd3-3981260-2313-0DOki-33261-i5ewJp', 7, '2019-01-04 16:34:23', '2019-01-04 16:34:23'),
(67, 'Tarea-LuN1qFod8V-5796547-5161-AHtCx-74207-4ofv6s', 6, '2019-01-04 16:35:27', '2019-01-04 16:35:27'),
(68, 'Tarea-LuN1qFod8V-5796547-5161-AHtCx-74207-4ofv6s', 7, '2019-01-04 16:35:28', '2019-01-04 16:35:28');

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
(1, 'Soporte YETI-TASK', 'support@yetitask.djfrankremixer.com', 'http://127.0.0.1:8000/avatars/bauzb6ypxBC5j7Svbwq68tnPnvyg7U3u78ou5XoL.png', 'soporte', '$2y$10$o8.LYj2e3trTVgVazK0IHeY7l8yg/.ZM7DGNonWnRQovOV5Cm2pT6', '5diCog0lX42fuEh8CmKqfO5SDNxo7ZYUQ8tT9zR1dWq2sHf8ex5BkoRPIaeE', '2018-12-07 17:09:06', '2019-01-06 01:33:04'),
(2, 'Karla Hernández', 'karla@gmail.com', 'http://127.0.0.1:8000/avatars/fHKZnzZRie4m23InFuJWSmplHSmfDjTHt8WCYgy4.png', 'common-user', '$2y$10$Kq0vU4j5RPFV5Gnfm0bXS.5Y.5w.09pML3YqSD7DcrFuJu.EN/px6', 'wECotVSPcDYgdNg02Oo3e5HQ3Rm9wvVXemQAkgaQDEs8XVYE0IrhuQdGmvte', '2018-12-02 17:29:39', '2019-01-05 23:49:24'),
(3, 'Vladimir Molina', 'vladimir1996amz@gmail.com', 'http://127.0.0.1:8000/avatars/bMUzgQoodN7bJ81WLCg7pXMcjClVsWB7geSED1H6.png', 'common-user', '$2y$10$KM2peERuKfCtcNMGJo17z.ZwUsHn/gT8MrJpX5bOJNIhmeVDLj9j6', 'b86vWRx836gwIPKA7ezdbrBboo2RBypQT0g7HH8TshXelDFxKIIHam5d5rWJ', '2018-12-04 01:07:22', '2019-01-04 20:11:37'),
(4, 'Daniela Garcia', 'daniela@gmail.com', 'http://127.0.0.1:8000/avatars/tJwxKdkKeyFsvNdOCRGfhuKrvIkAGZGodxlrp9k0.png', 'common-user', '$2y$10$VfLdNzb8hFwXXk96cPjjeuxtlqx/3JCqIiah5PmADN8xUVmv7wCV.', 'Q5ShTPTtDvhGFsJY5rbH6WTxsOImKS4MeaKo7dFQCzrihO5SEzqoAYnggJ8i', '2018-12-04 02:02:54', '2018-12-04 02:03:08'),
(5, 'Diana Argueta', 'diana@gmail.com', 'http://127.0.0.1:8000/avatars/jE7SsCFx7o2RgGLctnYD9SMBJRhRpqLhBcnOv2q1.png', 'common-user', '$2y$10$YyHwkdoNgUig7nQVlfqsDuenu8M31gGCer.m9PNhjNJVMWDoC84wO', 'wc3N4m2uBGtcjbueSAvBtM8DSxK3D8fSI5pj2cDY6wKw5foBvVXT2Ik1feP8', '2018-12-06 01:21:47', '2018-12-06 01:22:10'),
(6, 'Franco Zuniga', 'zuniga12@gmail.com', 'http://127.0.0.1:8000/avatars/abKvopJbdkr9iTXvXDxthtj8LvawaTqOLI9w9fD4.png', 'common-user', '$2y$10$Rx7A9V5YMosh2wQwVh3rKuVkNPATQ/O7QG/wxJ0mXrdDLNqBUiCcW.Bu', '5UdVJ2Hsq5ZUAy9DxmAHzx5uEggDT60ZU4ODMAnaVJcK1n48CkyjM028dRPH', '2018-12-06 01:22:57', '2018-12-06 01:23:08'),
(7, 'Francisco Navas', 'navasfran98@gmail.com', 'http://127.0.0.1:8000/avatars/1n20hAkIOIOqUq8BQ63tpCmdfOXJLLEpbZ60XusI.png', 'super', '$2y$10$Rx7A9V5YMosh2wQwVh3rKuVkNPATQ/O7QG/wxJ0mXrdDLNqBUiCcW', 'cyLaEVfERgVs57YCSckPsw7JeC9sYGih1ACbSCgHzMIkfHcDP8jGzs6qG64P', '2018-11-30 17:47:36', '2019-01-03 22:55:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
