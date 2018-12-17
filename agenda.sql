-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2018 a las 23:33:40
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
  `tarea_id` varchar(250) DEFAULT NULL,
  `tipo_noti` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id`, `codigo_noty`, `titulo`, `cuerpo`, `creador`, `tarea_id`, `tipo_noti`, `created_at`, `updated_at`) VALUES
(1, 'Noty-TB6yVFUH1Q-1882279-2529-giXQw-47844-GzXVq1', 'Notificación de prueba', 'Hola', 1, NULL, 'propia', '2018-12-15 11:33:50', '2018-12-15 11:33:50'),
(2, 'Noty-nputYFVa8N-4318746-6400-qQ0gK-36099-xBLepJ', 'Notificacion de prueba', 'Hola Karla como estas?', 1, NULL, 'propia', '2018-12-17 08:26:20', '2018-12-17 08:26:20'),
(3, 'Noty-Jjm8FUBYnp-4361062-8851-keoiA-42229-hyZTxc', 'Hola bebe', 'Quieres salir?', 1, NULL, 'propia', '2018-12-17 08:27:21', '2018-12-17 08:27:21'),
(4, 'Noty-QX5f1TS0dh-6075550-6934-1zju5-32439-gx5Rtd', 'Respuesta', 'SI quiero :3', 2, NULL, 'propia', '2018-12-17 08:29:32', '2018-12-17 08:29:32'),
(5, 'Noty-i7MQ3uTWXo-3666725-8837-VwXa6-97558-EAyq5V', 'Hola a todos :3', '>:v me emperra alv', 2, NULL, 'propia', '2018-12-17 16:07:26', '2018-12-17 16:07:26'),
(6, 'Noty-yMKur65qJh-5507979-9899-Qb5hO-89669-ARe4N2', 'responde :(', ':(', 2, NULL, 'propia', '2018-12-17 16:09:30', '2018-12-17 16:09:30'),
(7, 'Noty-cLZa18bSoY-8424743-6170-FplQ3-26870-r54WEy', 'tarea finalizada', 'Hola mundo :v', 2, NULL, 'propia', '2018-12-17 16:22:53', '2018-12-17 16:22:53'),
(8, 'Noty-KPq0xJgBMd-4125712-7803-mwsk5-72293-NCW2ar', 'La tarea se pospuso.', '>:v', 4, NULL, 'propia', '2018-12-17 16:23:55', '2018-12-17 16:23:55'),
(9, 'Noty-Vf9TAQC0a7-9177131-2417-JeBHM-51063-3UZXtC', 'Hola gfe', '>:v', 3, NULL, 'propia', '2018-12-17 16:30:24', '2018-12-17 16:30:24'),
(10, 'Noty-JTonKYav94-8785101-5691-94xac-13684-wFlsxE', 'CAMBIO DE ESTADO EN TAREA', 'Francisco Navas ha cambiado el estado de la tarea ha EN PROCESO.', 1, 'Tarea-TPA10Yxlu8-5672295-7725-HjRp4-84161-4UbFDE', 'cambio\r\n         ', '2018-12-17 16:32:05', '2018-12-17 16:32:05'),
(11, 'Noty-NrsibTzFCu-8923869-3991-d4YDJ-41255-KzUlf4', 'CAMBIO DE ESTADO EN TAREA', 'Francisco Navas ha cambiado el estado de la tarea ha FINALIZADO.', 1, 'Tarea-TPA10Yxlu8-5672295-7725-HjRp4-84161-4UbFDE', 'cambio\r\n         ', '2018-12-17 16:32:30', '2018-12-17 16:32:30');

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
(1, 'Noty-TB6yVFUH1Q-1882279-2529-giXQw-47844-GzXVq1', 1, 'LEIDA', '2018-12-15 11:33:50', '2018-12-15 11:33:50'),
(2, 'Noty-nputYFVa8N-4318746-6400-qQ0gK-36099-xBLepJ', 2, 'LEIDA', '2018-12-17 08:26:20', '2018-12-17 08:26:20'),
(3, 'Noty-Jjm8FUBYnp-4361062-8851-keoiA-42229-hyZTxc', 2, 'LEIDA', '2018-12-17 08:27:21', '2018-12-17 08:27:21'),
(4, 'Noty-QX5f1TS0dh-6075550-6934-1zju5-32439-gx5Rtd', 1, 'LEIDA', '2018-12-17 08:29:32', '2018-12-17 08:29:32'),
(5, 'Noty-i7MQ3uTWXo-3666725-8837-VwXa6-97558-EAyq5V', 1, 'LEIDA', '2018-12-17 16:07:26', '2018-12-17 16:07:26'),
(6, 'Noty-yMKur65qJh-5507979-9899-Qb5hO-89669-ARe4N2', 1, 'SIN LEER', '2018-12-17 16:09:30', '2018-12-17 16:09:30'),
(7, 'Noty-cLZa18bSoY-8424743-6170-FplQ3-26870-r54WEy', 1, 'SIN LEER', '2018-12-17 16:22:53', '2018-12-17 16:22:53'),
(8, 'Noty-KPq0xJgBMd-4125712-7803-mwsk5-72293-NCW2ar', 1, 'SIN LEER', '2018-12-17 16:23:55', '2018-12-17 16:23:55'),
(9, 'Noty-Vf9TAQC0a7-9177131-2417-JeBHM-51063-3UZXtC', 1, 'SIN LEER', '2018-12-17 16:30:24', '2018-12-17 16:30:24'),
(10, 'Noty-JTonKYav94-8785101-5691-94xac-13684-wFlsxE', 2, 'SIN LEER', '2018-12-17 16:32:05', '2018-12-17 16:32:05'),
(11, 'Noty-JTonKYav94-8785101-5691-94xac-13684-wFlsxE', 3, 'LEIDA', '2018-12-17 16:32:05', '2018-12-17 16:32:05'),
(12, 'Noty-NrsibTzFCu-8923869-3991-d4YDJ-41255-KzUlf4', 2, 'SIN LEER', '2018-12-17 16:32:30', '2018-12-17 16:32:30'),
(13, 'Noty-NrsibTzFCu-8923869-3991-d4YDJ-41255-KzUlf4', 3, 'LEIDA', '2018-12-17 16:32:30', '2018-12-17 16:32:30');

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
(1, 'Tarea-TPA10Yxlu8-5672295-7725-HjRp4-84161-4UbFDE', 'Primera tarea', '<p><span style=\"font-family:Comic Sans MS,cursive\">Buen d&iacute;a por este medio les asigno lo que es la primera tarea.</span></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"height:122px; width:787px\">\r\n	<caption><span style=\"font-family:Comic Sans MS,cursive\">Asignaciones</span></caption>\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-family:Comic Sans MS,cursive\">Karla Hern&aacute;ndez</span></td>\r\n			<td><span style=\"font-family:Comic Sans MS,cursive\">David Argueta</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-family:Comic Sans MS,cursive\">1 - Revisar los correos y redes sociales</span></td>\r\n			<td><span style=\"font-family:Comic Sans MS,cursive\">1 - Atender llamadas perdidas en el d&iacute;a</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-family:Comic Sans MS,cursive\">2 - Reporte de likes</span></td>\r\n			<td><span style=\"font-family:Comic Sans MS,cursive\">2 - Reporte de llamadas con exito</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"color:#2980b9\">Cuando finalicen pueden cambiar el estado de la actividad a finalizada.</span></span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Muchas gracias!!<img alt=\"yes\" height=\"23\" src=\"http://127.0.0.1:8000/ckeditor/plugins/smiley/images/thumbs_up.png\" title=\"yes\" width=\"23\" /></span></p>', 'Finalizado', '2018-12-22', 1, '2018-12-03 19:21:40', '2018-12-03 19:21:40'),
(2, 'Tarea-ZN93kTGdRy-7824994-8445-8zn7U-74830-pWGNCo', 'Edición de video', '<p>Esta tarea realizara edici&oacute;n de video para el canal.</p>\r\n\r\n<p>Seria el proximo video que se subira, le anexare los puntos clave.</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"height:132px; width:454px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;1 - Calidad</td>\r\n			<td>&nbsp;50%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;2 - Orden</td>\r\n			<td>10%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;3 - Creatividad</td>\r\n			<td>10%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;4 - Recursos</td>\r\n			<td>10%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;5 - Ortografia</td>\r\n			<td>10%</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Debera utilizar en alguna secci&oacute;n del video el siguiente texto</p>\r\n\r\n<p>&quot; <strong>La vida marina</strong>, <strong>vida</strong> en el mar o <strong>vida</strong> oce&aacute;nica, la conforman las plantas, los animales y otros organismos que viven en el agua salada de los mares y oc&eacute;anos, o el agua salobre de los estuarios costeros. En un nivel fundamental, <strong>la vida marina</strong> ayuda a determinar la naturaleza misma de nuestro planeta. &quot;</p>\r\n\r\n<hr />\r\n<p>Recordar cambiar el estado de la tarea cuando este finalizada.</p>\r\n\r\n<p>Gracias <img alt=\"wink\" height=\"23\" src=\"http://127.0.0.1:8000/ckeditor/plugins/smiley/images/wink_smile.png\" title=\"wink\" width=\"23\" /></p>', 'No terminada', '2018-12-09', 1, '2018-12-03 20:16:43', '2018-12-03 20:16:43'),
(3, 'Tarea-NB1P4qQ8Zd-9983474-9889-qcelz-27839-TxFf2Y', 'Tarea para la proxima semana', '<h1>&nbsp;Actividades</h1>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"height:80px; width:663px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;1- Comprar recursos en linea</td>\r\n			<td>Francisco Navas</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;2 - Diagrama de base de datos</td>\r\n			<td>Diana Argueta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;3 - Dise&ntilde;o</td>\r\n			<td>&nbsp;Franco Zuniga</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;Estas son las actividades.</p>\r\n\r\n<p>Siganlas <img alt=\"enlightened\" height=\"23\" src=\"http://127.0.0.1:8000/ckeditor/plugins/smiley/images/lightbulb.png\" title=\"enlightened\" width=\"23\" /></p>', 'No terminada', '2018-12-09', 1, '2018-12-05 19:26:34', '2018-12-05 19:26:34'),
(4, 'Tarea-zsVYrOitQk-6536495-1866-6QT2c-10093-i3aTM5', 'Descargar canciones', '<p>Descarguen las siguientes canciones</p>\r\n\r\n<ul>\r\n	<li>Bella Wolfine</li>\r\n	<li>More - Zion ft Lenox</li>\r\n	<li>La player - Zion</li>\r\n</ul>\r\n\r\n<p>Con ello deben hacer un mix chidorri <img alt=\"angry\" height=\"23\" src=\"http://127.0.0.1:8000/ckeditor/plugins/smiley/images/angry_smile.png\" title=\"angry\" width=\"23\" /></p>', 'No terminada', '2018-12-07', 1, '2018-12-06 22:19:57', '2018-12-06 22:19:57');

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
(1, 'Tarea-TPA10Yxlu8-5672295-7725-HjRp4-84161-4UbFDE', 2, '2018-12-03 19:21:40', '2018-12-03 19:21:40'),
(2, 'Tarea-TPA10Yxlu8-5672295-7725-HjRp4-84161-4UbFDE', 3, '2018-12-03 19:21:40', '2018-12-03 19:21:40'),
(3, 'Tarea-ZN93kTGdRy-7824994-8445-8zn7U-74830-pWGNCo', 3, '2018-12-03 20:16:43', '2018-12-03 20:16:43'),
(4, 'Tarea-ZN93kTGdRy-7824994-8445-8zn7U-74830-pWGNCo', 1, '2018-12-03 20:16:43', '2018-12-03 20:16:43'),
(5, 'Tarea-NB1P4qQ8Zd-9983474-9889-qcelz-27839-TxFf2Y', 1, '2018-12-05 19:26:34', '2018-12-05 19:26:34'),
(6, 'Tarea-NB1P4qQ8Zd-9983474-9889-qcelz-27839-TxFf2Y', 5, '2018-12-05 19:26:34', '2018-12-05 19:26:34'),
(7, 'Tarea-NB1P4qQ8Zd-9983474-9889-qcelz-27839-TxFf2Y', 6, '2018-12-05 19:26:34', '2018-12-05 19:26:34'),
(8, 'Tarea-zsVYrOitQk-6536495-1866-6QT2c-10093-i3aTM5', 4, '2018-12-06 22:19:57', '2018-12-06 22:19:57'),
(9, 'Tarea-zsVYrOitQk-6536495-1866-6QT2c-10093-i3aTM5', 5, '2018-12-06 22:19:57', '2018-12-06 22:19:57');

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
(1, 'Francisco Navas', 'navasfran98@gmail.com', 'http://127.0.0.1:8000/avatars/8MQzGOaADhjo5Ogs2PYLcbhz4TKGY7EUmy9Yx9LU.png', 'super', '$2y$10$Rx7A9V5YMosh2wQwVh3rKuVkNPATQ/O7QG/wxJ0mXrdDLNqBUiCcW', '45VpDlcnEjGRqQfkGsR7eYF334PojAsFwnbHVDMxREqVu9chNCdH2z4PAn3g', '2018-11-30 17:47:36', '2018-12-04 04:50:03'),
(2, 'Karla Hernández', 'karla@gmail.com', 'http://127.0.0.1:8000/avatars/fHKZnzZRie4m23InFuJWSmplHSmfDjTHt8WCYgy4.png', NULL, '$2y$10$gyWgrEufbKd7D7G4Qhk1/u5OXoK9JrB80yDcgdtwal.eUAQ017ice', 'wDV7QBJl8QBoMWcRJDHJ276MQjubymgpK7xOHFiwyjvE4EgmENDEEHYTHF9V', '2018-12-02 17:29:39', '2018-12-04 02:44:36'),
(3, 'David Argueta', 'argueta@gmail.com', 'http://127.0.0.1:8000/avatars/bMUzgQoodN7bJ81WLCg7pXMcjClVsWB7geSED1H6.png', NULL, '$2y$10$KM2peERuKfCtcNMGJo17z.ZwUsHn/gT8MrJpX5bOJNIhmeVDLj9j6', 'enevh26t7quv9VHMp6uKEOhufxQazobYPppIWfExM9EtuDI1rBNAQatxPTXs', '2018-12-04 01:07:22', '2018-12-17 22:31:29'),
(4, 'Daniela Garcia', 'daniela@gmail.com', 'http://127.0.0.1:8000/avatars/tJwxKdkKeyFsvNdOCRGfhuKrvIkAGZGodxlrp9k0.png', NULL, '$2y$10$VfLdNzb8hFwXXk96cPjjeuxtlqx/3JCqIiah5PmADN8xUVmv7wCV.', 'Q5ShTPTtDvhGFsJY5rbH6WTxsOImKS4MeaKo7dFQCzrihO5SEzqoAYnggJ8i', '2018-12-04 02:02:54', '2018-12-04 02:03:08'),
(5, 'Diana Argueta', 'diana@gmail.com', 'http://127.0.0.1:8000/avatars/jE7SsCFx7o2RgGLctnYD9SMBJRhRpqLhBcnOv2q1.png', NULL, '$2y$10$YyHwkdoNgUig7nQVlfqsDuenu8M31gGCer.m9PNhjNJVMWDoC84wO', 'wc3N4m2uBGtcjbueSAvBtM8DSxK3D8fSI5pj2cDY6wKw5foBvVXT2Ik1feP8', '2018-12-06 01:21:47', '2018-12-06 01:22:10'),
(6, 'Franco Zuniga', 'zuniga12@gmail.com', 'http://127.0.0.1:8000/avatars/abKvopJbdkr9iTXvXDxthtj8LvawaTqOLI9w9fD4.png', NULL, '$2y$10$Rx7A9V5YMosh2wQwVh3rKuVkNPATQ/O7QG/wxJ0mXrdDLNqBUiCcW.Bu', '5UdVJ2Hsq5ZUAy9DxmAHzx5uEggDT60ZU4ODMAnaVJcK1n48CkyjM028dRPH', '2018-12-06 01:22:57', '2018-12-06 01:23:08'),
(7, 'Soporte YETI-TASK', 'yetytask@support.com', 'http://127.0.0.1:8000/avatars/bauzb6ypxBC5j7Svbwq68tnPnvyg7U3u78ou5XoL.png', 'soporte', '$2y$10$JUqcGc/UtOmScDRXm6yhL.JAp8sG3dUtzoqtFz9YOP.8bvCh/fZa6', 'p9ZBZm3XbjH9xk7Pj2vv1GvFjQ3WhwUKNZOI4cuGacJXeFgiKiPJOPuxia8G', '2018-12-07 17:09:06', '2018-12-17 20:36:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
