-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2022 a las 10:13:53
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dentista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `idProfesional` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `Comentarios` int(11) NOT NULL,
  `fechaCreación` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `idProfesional`, `idUsuario`, `fecha`, `Comentarios`, `fechaCreación`) VALUES
(22, 1, 3, '2022-11-18 14:47:00', 2147483647, '2022-11-24 11:44:15'),
(24, 1, 3, '2022-11-22 16:09:00', 2147483647, '2022-11-24 12:05:29'),
(29, 2, 3, '2022-11-25 15:00:00', 2147483647, '2022-11-24 13:13:59'),
(33, 2, 3, '2022-11-26 16:19:00', 2147483647, '2022-11-24 13:16:51'),
(35, 1, 3, '2022-11-25 17:59:00', 2147483647, '2022-11-24 13:39:09'),
(42, 3, 12, '2022-11-29 12:10:00', 2147483647, '2022-11-25 09:07:12'),
(43, 1, 12, '2022-12-08 10:08:00', 2147483647, '2022-11-25 09:07:20'),
(44, 2, 12, '2022-12-20 13:11:00', 2147483647, '2022-11-25 09:07:40'),
(45, 3, 13, '2022-11-25 13:11:00', 2147483647, '2022-11-25 09:07:55'),
(46, 1, 13, '2022-12-13 11:09:00', 2147483647, '2022-11-25 09:08:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `ultimaActualizacion` datetime NOT NULL,
  `fechaCreacicion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `nombre`, `foto`, `estado`, `ultimaActualizacion`, `fechaCreacicion`) VALUES
(1, 'Christian', '[value-3]', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'David', '[value-3]', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'juan', 'pro.png', 0, '2022-11-25 09:00:08', '2022-11-25 09:00:08'),
(5, 'antonio', 'pro.png', 0, '2022-11-25 09:08:17', '2022-11-25 09:08:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(32) DEFAULT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `foto` varchar(32) NOT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT 0,
  `estado` int(11) NOT NULL DEFAULT 1,
  `ultimaModificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaCreacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `pass`, `email`, `foto`, `administrador`, `estado`, `ultimaModificacion`, `fechaCreacion`) VALUES
(3, 'miguel', '123', '1@gmail.com', 'user.png', 1, 1, '2022-11-25 08:06:08', '2022-11-17 11:01:34'),
(10, 'administrador', '123', 'admin@admin.com', 'user.png', 1, 1, '2022-11-24 08:53:09', '2022-11-24 08:53:09'),
(12, 'juan', '123', 'juan@juan.com', 'user.png', 1, 1, '2022-11-25 08:06:36', '2022-11-25 08:06:36'),
(13, 'christian', '123', '2@gmail.com', 'user.png', 1, 1, '2022-11-25 08:06:54', '2022-11-25 08:06:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cita_idProfesional` (`idProfesional`),
  ADD KEY `Cita_idUsuario` (`idUsuario`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `Cita_idProfesional` FOREIGN KEY (`idProfesional`) REFERENCES `trabajadores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Cita_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
