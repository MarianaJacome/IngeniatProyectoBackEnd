-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2021 a las 10:49:24
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
('2d7f1c83-80dd-4467-835e-0a490943be6f', 'Basico', 'permiso de acceso', '/', 1, '2021-09-15 23:47:07', '2021-09-15 23:47:07'),
('779798bd-faa2-4280-a194-a9a4f8338d26', 'Alto', 'Consulta, agregar, actualizar , eliminar', '', 1, '2021-09-16 00:52:30', '2021-09-16 01:18:22'),
('8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'Administrador', 'Encargado del sistema.', '', 1, '2021-09-14 15:15:47', '2021-09-15 14:37:43'),
('8ec7dce5-12cb-4bbc-90e1-6503db9910d4', 'Medio Alto', 'Permiso de acceso y agregar', '', 1, '2021-09-16 00:51:18', '2021-09-16 03:24:31'),
('94819f1d-9ec2-4210-8df8-c14a6851a48f', 'Alto medio', 'Permiso de acceso, consulta , agregar y actualizar', '', 1, '2021-09-16 00:51:55', '2021-09-16 01:17:02'),
('b7181c04-c9a9-414c-9033-a733786c62b4', 'Medio', 'Permiso de acceso y consulta', '', 1, '2021-09-16 00:50:06', '2021-09-16 01:13:56');

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
('03d77d03-b9c1-4580-80c5-7d318317b056', '94819f1d-9ec2-4210-8df8-c14a6851a48f', 'f2bf1271-e704-4695-b1c1-227d16837a79'),
('0d314b58-5581-457d-bff5-ed4709a151eb', '779798bd-faa2-4280-a194-a9a4f8338d26', 'f11f293a-1c97-4f45-8755-5b005f604829'),
('2683a880-e8b8-4b4b-b0a1-da9abb9dbb16', 'b7181c04-c9a9-414c-9033-a733786c62b4', 'f2bf1271-e704-4695-b1c1-227d16837a79'),
('2fc56bd9-dee4-454d-9f0c-542e845cac73', '2d7f1c83-80dd-4467-835e-0a490943be6f', '356c270a-7e01-422a-ad4f-95652f79588a'),
('406599f5-51ad-44d3-a419-766a495f02d5', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '68eff1c0-1a75-4ecf-b7e0-8a927e66bf09'),
('4685b227-47d1-4e0c-826d-b8d078d2fdc6', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '894b9b4e-9699-4413-af59-d2fc611e0b43'),
('4cdfeff3-7a01-4527-95e6-ec62fc67f22f', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '356c270a-7e01-422a-ad4f-95652f79588a'),
('512135f0-9825-4ba4-801b-73c33036645c', 'b7181c04-c9a9-414c-9033-a733786c62b4', 'f11f293a-1c97-4f45-8755-5b005f604829'),
('54f9c9c7-7013-4be1-b15a-94ba970e9720', '779798bd-faa2-4280-a194-a9a4f8338d26', 'f2bf1271-e704-4695-b1c1-227d16837a79'),
('652de684-6eec-4cb7-8d3c-8d86617ca5c3', '8ec7dce5-12cb-4bbc-90e1-6503db9910d4', 'f11f293a-1c97-4f45-8755-5b005f604829'),
('707d3c42-f50a-4835-8077-42bb3c1bf587', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '02241d10-b424-4041-a68b-3334150d63cb'),
('76b407a5-4ddb-4ff9-9c38-8ddaa27c86eb', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'f2bf1271-e704-4695-b1c1-227d16837a79'),
('a7e542be-a583-4510-baa5-ca51be8a7473', '94819f1d-9ec2-4210-8df8-c14a6851a48f', 'f11f293a-1c97-4f45-8755-5b005f604829'),
('aa7f19cf-84a3-4b88-93b5-c1853a07c31e', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', '216d99a6-4cad-4cf9-ac50-3fca7d8ecb76'),
('b93adddb-e8e7-4b87-a35d-e9b76cabc05c', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'e6dc709c-e544-4244-b467-b16779028fb6'),
('b9a9bae9-ac5a-445b-8d5a-7a36339ac10b', '8ec7dce5-12cb-4bbc-90e1-6503db9910d4', '68eff1c0-1a75-4ecf-b7e0-8a927e66bf09'),
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
('38a9c9a7-9fb0-4bbc-8544-6629ef0df0fb', '8c42ea1d-1598-11ec-843f-9cb6d01e9372', 'abaf4e5e-1596-11ec-843f-9cb6d01e9372'),
('3eefff0f-901a-40f6-a4bb-a217f2d57a02', '779798bd-faa2-4280-a194-a9a4f8338d26', 'fb6f470e-6c1f-4cba-b27e-c66a2517862a'),
('467d954b-7bad-48d4-adfa-6105d718aab9', '779798bd-faa2-4280-a194-a9a4f8338d26', 'f0a0c7dc-2198-4e0a-a3fe-d5e755b9a0d3'),
('6ee4bec4-b3fa-427c-87ff-1c9d7f93de3d', '779798bd-faa2-4280-a194-a9a4f8338d26', 'f2e942b2-e448-421b-9159-7c76f212cf18'),
('6f9e7696-cfb8-47c8-a122-52526ed7968e', '94819f1d-9ec2-4210-8df8-c14a6851a48f', '0fd4c407-25fe-4c75-82fb-1573e80f0422'),
('7ab1d4c7-24d8-43ef-8117-88ddb765c2a8', '779798bd-faa2-4280-a194-a9a4f8338d26', 'd8f8171c-65d1-4095-933b-41da8a9ec937'),
('7d5efe34-3fcc-4d9c-9078-6a5ce326f631', '94819f1d-9ec2-4210-8df8-c14a6851a48f', 'f1ad697e-4da2-41ab-b019-d2a90d7aa6a0'),
('835b2a3c-59f4-4ba3-a079-533ff1e6393f', '8ec7dce5-12cb-4bbc-90e1-6503db9910d4', '11816be6-36d4-435e-ae7c-ba2f13694dea'),
('8a0b2ee1-9b2e-40a2-9218-021d72e768da', 'b7181c04-c9a9-414c-9033-a733786c62b4', 'f2e942b2-e448-421b-9159-7c76f212cf18'),
('a06699e0-8ee1-42e6-b974-f5698904b438', '779798bd-faa2-4280-a194-a9a4f8338d26', '72ef0a9e-4139-4232-b57b-89401aa29ea4'),
('aa76bf92-bdbb-4ae9-8923-85d02167576a', '779798bd-faa2-4280-a194-a9a4f8338d26', 'f1ad697e-4da2-41ab-b019-d2a90d7aa6a0'),
('e817b2f5-5feb-427f-885c-bcabcc0b97bf', '779798bd-faa2-4280-a194-a9a4f8338d26', '11816be6-36d4-435e-ae7c-ba2f13694dea'),
('ec5205ec-ff10-4811-a3ab-e4919eccd510', '779798bd-faa2-4280-a194-a9a4f8338d26', '0fd4c407-25fe-4c75-82fb-1573e80f0422'),
('ef543ac9-e864-4a24-9733-d94ab8bda3b7', '94819f1d-9ec2-4210-8df8-c14a6851a48f', '72ef0a9e-4139-4232-b57b-89401aa29ea4');

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
('356c270a-7e01-422a-ad4f-95652f79588a', NULL, 'fas fa-house-user', 'Inicio', '/Dashboard/index', 1, 1, '2021-09-14 16:28:44', '2021-09-15 19:59:50'),
('68eff1c0-1a75-4ecf-b7e0-8a927e66bf09', 'f11f293a-1c97-4f45-8755-5b005f604829', '', 'Nueva Publicacion', '/publicaciones/add', 2, 1, '2021-09-16 00:53:31', '2021-09-16 00:55:36'),
('894b9b4e-9699-4413-af59-d2fc611e0b43', '8ab9ebc6-9acd-48f4-8354-d2be0c11bb0b', 'fas fa-users', 'Usuarios', '/usuarios/index', 2, 1, '2021-09-14 19:21:44', '2021-09-14 19:21:44'),
('8ab9ebc6-9acd-48f4-8354-d2be0c11bb0b', NULL, 'fas fa-cogs', 'Administrar', '#', 3, 1, '2021-09-14 19:13:49', '2021-09-14 19:33:16'),
('e6dc709c-e544-4244-b467-b16779028fb6', '8ab9ebc6-9acd-48f4-8354-d2be0c11bb0b', 'fas fa-cogs', 'Menus', '/menus/index', 1, 1, '2021-09-14 19:20:28', '2021-09-14 19:22:41'),
('f11f293a-1c97-4f45-8755-5b005f604829', NULL, 'fas fa-newspaper', 'Publicaciones', '#', 2, 1, '2021-09-14 19:32:33', '2021-09-16 00:56:04'),
('f2bf1271-e704-4695-b1c1-227d16837a79', 'f11f293a-1c97-4f45-8755-5b005f604829', '', 'Publicaciones', '/publicaciones/index', 1, 1, '2021-09-16 00:57:29', '2021-09-16 00:57:29');

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
('0fd4c407-25fe-4c75-82fb-1573e80f0422', 'agregar ', 'Permiso de acceso y agregar', 'Publicaciones', 'publicacion', 1, '2021-09-16 01:07:19', '2021-09-16 01:15:44'),
('11816be6-36d4-435e-ae7c-ba2f13694dea', 'Permiso de acceso y agregar', 'Permiso de acceso y agregar', 'Publicaciones', 'add', 1, '2021-09-16 00:42:10', '2021-09-16 00:42:10'),
('72ef0a9e-4139-4232-b57b-89401aa29ea4', 'Consulta, agregar y actualizar', 'Consulta, agregar y actualizar', 'Publicaciones', 'getPublicaciones', 1, '2021-09-16 01:05:45', '2021-09-16 01:05:45'),
('abaf4e5e-1596-11ec-843f-9cb6d01e9372', 'Acceso a todos los permisos', 'Tendrá acceso a todos los permisos', 'Dashboard', 'index', 0, '2021-09-14 15:02:21', '2021-09-16 01:10:21'),
('d8f8171c-65d1-4095-933b-41da8a9ec937', 'Permiso de acceso y consulta', 'Permiso de acceso y consulta', 'Publicaciones', 'edit', 1, '2021-09-16 00:26:05', '2021-09-16 01:08:21'),
('f0a0c7dc-2198-4e0a-a3fe-d5e755b9a0d3', 'eliminar', 'Consulta, agregar y actualizar', 'Publicaciones', 'delete', 1, '2021-09-16 00:45:21', '2021-09-16 01:16:15'),
('f1ad697e-4da2-41ab-b019-d2a90d7aa6a0', 'Consulta, agregar y actualizar', 'Consulta, agregar y actualizar', 'Publicaciones', 'getMispublicaciones', 1, '2021-09-16 01:06:15', '2021-09-16 01:06:15'),
('f2e942b2-e448-421b-9159-7c76f212cf18', 'Consulta, agregar, actualizar , eliminar', 'Consulta, agregar, actualizar , eliminar', 'Publicaciones', 'index', 1, '2021-09-16 00:46:07', '2021-09-16 00:46:07'),
('fb6f470e-6c1f-4cba-b27e-c66a2517862a', 'Permiso de acceso', 'permiso de acceso', 'Dashboard', 'index', 1, '2021-09-16 00:24:43', '2021-09-16 00:24:43');

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
('60ce9e81-3cf5-4701-8e84-335879954cec', 'fffe7621-1598-11ec-843f-9cb6d01e9372', 'd1ef0720-61c0-4608-b65b-9b04892f40a6', 'otra', 'algo', NULL, '2021-09-16 01:55:26', '2021-09-16 03:03:11'),
('69b678dd-3904-40ab-b04b-02e1c74253e0', '2f6ca970-4233-4f5d-918b-fa4a3897ac4d', '10714ce4-816d-4df3-8417-282d1e3565dc', 'Mira', 'mira', NULL, '2021-09-15 21:32:18', '2021-09-15 21:32:18'),
('7449c991-8f6b-4ed0-b237-d9a2bee13a97', 'fffe7621-1598-11ec-843f-9cb6d01e9372', 'd1ef0720-61c0-4608-b65b-9b04892f40a6', 'mariana', 'jacome', NULL, '2021-09-16 01:53:59', '2021-09-16 03:09:56'),
('8b1d0242-3e7e-4254-b287-0e543c83207b', '2f6ca970-4233-4f5d-918b-fa4a3897ac4d', '10714ce4-816d-4df3-8417-282d1e3565dc', 'Noticia', 'Viva Mexico', NULL, '2021-09-15 21:28:07', '2021-09-15 21:28:07'),
('93a55093-cb30-4068-b712-0b78ba453135', 'fffe7621-1598-11ec-843f-9cb6d01e9372', '10714ce4-816d-4df3-8417-282d1e3565dc', 'prueba', 'prueba', NULL, '2021-09-15 16:58:04', '2021-09-15 16:58:04'),
('a1170fae-4129-48ba-946b-ca32185e663b', '75f685bb-6656-41d4-8a9c-072fa80119fe', '10714ce4-816d-4df3-8417-282d1e3565dc', 'prueba', 'medioalto', NULL, '2021-09-16 03:25:03', '2021-09-16 03:25:03'),
('b9ce5410-eed4-41ff-ad43-e44edfddb890', 'fffe7621-1598-11ec-843f-9cb6d01e9372', '10714ce4-816d-4df3-8417-282d1e3565dc', 'hola', 'mundo', NULL, '2021-09-15 21:57:38', '2021-09-15 21:57:38');

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
('34652546-606f-49f4-b783-37ba001db11d', '2d7f1c83-80dd-4467-835e-0a490943be6f', 'Basico', 'Basico', 'basico@gmail.com', 'basico', '$2y$10$Tn3ffklac3UY67lvR/eUNu016stVcmaeVwOOoqicrX7.Y7oYiooPe', '', 1, '2021-09-16 03:12:39', '2021-09-16 03:12:39'),
('40c2443e-4402-4ebc-8452-f1d8d60a7acd', '779798bd-faa2-4280-a194-a9a4f8338d26', 'Alto', 'Alto', 'alto@gmail.com', 'alto', '$2y$10$.YJn6DhnDR1QebLKLiyAa.nkWqXZORHE/ogyifBUb/fOP4sSXcMZa', '', 1, '2021-09-16 03:19:25', '2021-09-16 03:19:25'),
('75f685bb-6656-41d4-8a9c-072fa80119fe', '8ec7dce5-12cb-4bbc-90e1-6503db9910d4', 'Medio', ' Alto', 'medioalto@gmail.com', 'medioalto', '$2y$10$nDYUe1T0IoxL8g.OEI2mJO/srHiSOyGwlu8Ebi9qq37sgY2rMzMK.', '', 1, '2021-09-16 03:17:28', '2021-09-16 03:17:28'),
('76b589cb-c892-4b3b-a64d-c2ca24b25e13', 'b7181c04-c9a9-414c-9033-a733786c62b4', 'Medio', 'Medio', 'medio@gmail.com', 'medio', '$2y$10$O5M3NCQDm/UZXm5wvx2hQ.PeXGu7TAPjUcYBYSfT1UudmoX2wLE2q', '', 1, '2021-09-16 03:16:33', '2021-09-16 03:16:33'),
('dea91670-d33e-453a-8fad-0c3fa055da4f', '94819f1d-9ec2-4210-8df8-c14a6851a48f', 'Alto', 'Medio', 'altomedio@gmail.com', 'altomedio', '$2y$10$cTx0m8kdRBvzNdYb7H1o7u/3yedM1IZYNPt1NB5bsu.14RyoThJNC', '', 1, '2021-09-16 03:18:38', '2021-09-16 03:18:38'),
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
