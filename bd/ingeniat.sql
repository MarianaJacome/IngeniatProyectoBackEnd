-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2021 a las 23:59:46
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ingeniat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_estatus`
--

CREATE TABLE `cat_estatus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cat_estatus`
--

INSERT INTO `cat_estatus` (`id`, `nombre`, `descripcion`, `activo`, `created`, `modified`) VALUES
('10714ce4-816d-4df3-8417-282d1e3565dc', 'Publicada', 'Notas publicadas', 1, '2021-09-15 00:54:12', '2021-09-15 00:54:12'),
('45ef8408-4080-49c6-84d9-896c3de8400d', 'Papelera', 'Cuando la publicación se descarta.', 1, '2021-09-15 00:56:16', '2021-09-15 00:56:16'),
('d1ef0720-61c0-4608-b65b-9b04892f40a6', 'Eliminada', 'cuando la publicación se a eliminado', 1, '2021-09-15 00:54:48', '2021-09-15 00:56:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `pagina` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `descripcion`, `pagina`, `activo`, `created`, `modified`) VALUES
('8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'Administrador', 'Encargado del sistema.', '', 1, '2021-09-14 15:15:47', '2021-09-15 14:37:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_menus`
--

CREATE TABLE `grupos_menus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `grupo_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `menu_id` char(36) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos_menus`
--

INSERT INTO `grupos_menus` (`id`, `grupo_id`, `menu_id`) VALUES
('4685b227-47d1-4e0c-826d-b8d078d2fdc6', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '894b9b4e-9699-4413-af59-d2fc611e0b43'),
('4cdfeff3-7a01-4527-95e6-ec62fc67f22f', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '356c270a-7e01-422a-ad4f-95652f79588a'),
('707d3c42-f50a-4835-8077-42bb3c1bf587', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '02241d10-b424-4041-a68b-3334150d63cb'),
('aa7f19cf-84a3-4b88-93b5-c1853a07c31e', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '216d99a6-4cad-4cf9-ac50-3fca7d8ecb76'),
('b93adddb-e8e7-4b87-a35d-e9b76cabc05c', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'e6dc709c-e544-4244-b467-b16779028fb6'),
('ed047576-f3fb-48fc-8b8c-84040f69cc12', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'f11f293a-1c97-4f45-8755-5b005f604829'),
('fca8f7e6-f384-44e0-8c32-177bfac4be82', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '8ab9ebc6-9acd-48f4-8354-d2be0c11bb0b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_permisos`
--

CREATE TABLE `grupos_permisos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `grupo_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `permiso_id` char(36) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos_permisos`
--

INSERT INTO `grupos_permisos` (`id`, `grupo_id`, `permiso_id`) VALUES
('38a9c9a7-9fb0-4bbc-8544-6629ef0df0fb', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'abaf4e5e-1596-11ec-843f-9cb6d01e9372');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `menu_id` char(36) COLLATE utf8_spanish_ci DEFAULT NULL,
  `icon` varchar(150) COLLATE utf8_spanish_ci DEFAULT 'icon-circle',
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `href` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `position` tinyint(4) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `menu_id`, `icon`, `nombre`, `href`, `position`, `activo`, `created`, `modified`) VALUES
('02241d10-b424-4041-a68b-3334150d63cb', '8ab9ebc6-9acd-48f4-8354-d2be0c11bb0b', '', 'Permisos', '/permisos/index', 4, 1, '2021-09-14 19:26:58', '2021-09-15 10:48:47'),
('216d99a6-4cad-4cf9-ac50-3fca7d8ecb76', '8ab9ebc6-9acd-48f4-8354-d2be0c11bb0b', '', 'Roles', '/grupos/index', 3, 1, '2021-09-14 19:26:21', '2021-09-14 19:26:21'),
('356c270a-7e01-422a-ad4f-95652f79588a', NULL, 'fas fa-tachometer-alt', 'Dashboard', '/Dashboard/index', 1, 1, '2021-09-14 16:28:44', '2021-09-14 16:28:44'),
('894b9b4e-9699-4413-af59-d2fc611e0b43', '8ab9ebc6-9acd-48f4-8354-d2be0c11bb0b', 'fas fa-users', 'Usuarios', '/usuarios/index', 2, 1, '2021-09-14 19:21:44', '2021-09-14 19:21:44'),
('8ab9ebc6-9acd-48f4-8354-d2be0c11bb0b', NULL, 'fas fa-cogs', 'Administrar', '#', 3, 1, '2021-09-14 19:13:49', '2021-09-14 19:33:16'),
('e6dc709c-e544-4244-b467-b16779028fb6', '8ab9ebc6-9acd-48f4-8354-d2be0c11bb0b', 'fas fa-cogs', 'Menus', '/menus/index', 1, 1, '2021-09-14 19:20:28', '2021-09-14 19:22:41'),
('f11f293a-1c97-4f45-8755-5b005f604829', NULL, 'fas fa-newspaper', 'Publicaciones', '/publicaciones/index', 2, 1, '2021-09-14 19:32:33', '2021-09-14 19:32:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `controller` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `action` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `nombre`, `descripcion`, `controller`, `action`, `activo`, `created`, `modified`) VALUES
('abaf4e5e-1596-11ec-843f-9cb6d01e9372', 'Acceso a todos los permisos', 'Tendrá acceso a todos los permisos', 'Dashboard', 'index', 1, '2021-09-14 15:02:21', '2021-09-14 21:59:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `cat_estatu_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `usuario_id`, `cat_estatu_id`, `titulo`, `descripcion`, `imagen`, `created`, `modified`) VALUES
('93a55093-cb30-4068-b712-0b78ba453135', 'fffe7621-1598-11ec-843f-9cb6d01e9372', '10714ce4-816d-4df3-8417-282d1e3565dc', 'prueba', 'prueba', NULL, '2021-09-15 16:58:04', '2021-09-15 16:58:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `grupo_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `grupo_id`, `nombre`, `apellido`, `correo`, `usuario`, `password`, `imagen`, `activo`, `created`, `modified`) VALUES
('2f6ca970-4233-4f5d-918b-fa4a3897ac4d', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'Super', 'Usuario', 'superusuario@gmail.com', 'root', '$2y$10$iDPhMlqSjL1tu6tY8O1RtOZxnk/2zOw2YXZA2xjjK4YA5Oqt1NYR2', '', 1, '2021-09-15 13:00:44', '2021-09-15 13:00:44'),
('fffe7621-1598-11ec-843f-9cb6d01e9372', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'Mariana Fernanda', 'Jacome Ruiz', 'marianajacome98@gmail.com', 'admin', '$2y$10$EJ.QRFNxRxDVXhgAMO47Eeg1e3cKzeI4rSey0KoyEPfqk448PlXN.', '', 1, '2021-09-14 15:19:01', '2021-09-14 22:16:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_estatus`
--
ALTER TABLE `cat_estatus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos_menus`
--
ALTER TABLE `grupos_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_group_id` (`grupo_id`),
  ADD KEY `co_menu_id` (`menu_id`);

--
-- Indices de la tabla `grupos_permisos`
--
ALTER TABLE `grupos_permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_group_id` (`grupo_id`),
  ADD KEY `co_permission_id` (`permiso_id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `cat_estatu_id` (`cat_estatu_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_group_id` (`grupo_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grupos_menus`
--
ALTER TABLE `grupos_menus`
  ADD CONSTRAINT `grupos_menus_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `grupos_menus_ibfk_2` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`);

--
-- Filtros para la tabla `grupos_permisos`
--
ALTER TABLE `grupos_permisos`
  ADD CONSTRAINT `grupos_permisos_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`),
  ADD CONSTRAINT `grupos_permisos_ibfk_2` FOREIGN KEY (`permiso_id`) REFERENCES `permisos` (`id`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `publicaciones_ibfk_2` FOREIGN KEY (`cat_estatu_id`) REFERENCES `cat_estatus` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
