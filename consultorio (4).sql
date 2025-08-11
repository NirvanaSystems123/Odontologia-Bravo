-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2024 a las 03:46:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellidos` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Servicio` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `MensajeAdicional` text DEFAULT NULL,
  `Estado` varchar(20) NOT NULL,
  `FechaCreacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `FechaModificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`ID`, `Nombre`, `Apellidos`, `Correo`, `Servicio`, `Fecha`, `Hora`, `MensajeAdicional`, `Estado`, `FechaCreacion`, `FechaModificacion`) VALUES
(8, 'Christopher', 'Perez Sotomayor', 'chris@gmail.com', 'ENDODONCIA', '2024-10-15', '11:00:00', '', 'Confirmado', '2024-10-20 23:57:45', '2024-10-21 01:07:17'),
(10, 'causa pe', 'gaaaa pe', 'pe_gaaa@gmail.com', 'ENDODONCIA', '2024-10-24', '15:00:00', 'hola causa gaaaa pe', 'Confirmado', '2024-10-23 01:54:59', '2024-10-23 19:58:45'),
(12, 'pepe', 'pepexd', 'pe@gmail.com', 'IMPLANTOLOGIA ORAL', '2024-10-15', '14:00:00', 'hola causa', 'Cancelado', '2024-10-23 20:09:24', '2024-10-23 20:10:17'),
(13, 'POtolo', 'POLO RODRIgoxd', 'poloxd@gmail.com', 'IMPLANTOLOGIA ORAL', '2024-10-31', '16:00:00', '', 'Confirmado', '2024-10-24 00:09:24', '2024-11-05 16:11:11'),
(14, 'jaime', 'Perez bravo', 'jaime@gmail.com', 'ODONTOPEDRIATRIA', '2024-11-21', '14:00:00', 'hola pe', 'Pendiente', '2024-11-05 16:09:51', '2024-11-05 16:09:51'),
(15, 'christopher', 'Perez Sotomayor', 'perez@gmail.com', 'ODONTOPEDRIATRIA', '2024-11-27', '14:00:00', 'Buenas dias', 'Pendiente', '2024-11-05 21:18:02', '2024-11-05 21:18:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(1, 'chris', 'christopher@gmail.com', 'pedro xd', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(2, 'rodri P', 'rodri@gmail.com', 'rodri', '5aadb45520dcd8726b2822a7a78bb53d794f557199d5d4abdedd2c55a4bd6ca73607605c558de3db80c8e86c3196484566163ed1327e82e8b6757d1932113cb8'),
(3, 'Polo Aña', 'polo@gmail.com', 'polin', 'f20a3948af609ee7d58086bcc2189021b379347123c635fdd7024e211563df29e22de6e17f21ed7ffbe7702abccba4b031bd8b9960724c24b3c2e22456073225');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_a`
--

CREATE TABLE `usuarios_a` (
  `id` int(2) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios_a`
--

INSERT INTO `usuarios_a` (`id`, `nombre`, `username`, `password`, `modificado`) VALUES
(0, 'Christopher', 'Chris', '$2y$10$hvWs.EsBMzWIQKvR65RYYejDpomhqutnytPODD7lFKhgGlCSoPtna', '2024-10-07 23:48:13'),
(0, 'Zaida B.', 'Zaida', '$2y$10$8FLCDyoRI9ae9QuSAsfi2u1mTWQUrvFgp4LocauiLh3NpzN5mmtqS', '2024-10-20 23:05:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
