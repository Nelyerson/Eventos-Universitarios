-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-07-2024 a las 13:22:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyedos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronologia`
--

CREATE TABLE `cronologia` (
  `id` int(255) NOT NULL,
  `accion1` varchar(255) NOT NULL,
  `accion2` varchar(255) NOT NULL,
  `accion3` varchar(255) NOT NULL,
  `accion4` varchar(255) NOT NULL,
  `accion5` varchar(255) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `disp` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cronologia`
--

INSERT INTO `cronologia` (`id`, `accion1`, `accion2`, `accion3`, `accion4`, `accion5`, `nombre`, `disp`) VALUES
(1, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', '', 0),
(2, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(3, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(4, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(5, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(6, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(7, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(8, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(9, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(10, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(11, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(12, 'creo un estudiante llamado', 'nestor', 'El usuario', '', '', 'user', 0),
(13, 'creo un estudiante llamado', 'nestor', 'El usuario', '', '', 'user', 0),
(14, 'creo un estudiante llamado', 'nestor', 'El usuario', '', '', 'user', 0),
(15, 'creo un estudiante llamado', 'nestor', 'El usuario', '', '', 'user', 0),
(16, 'creo un estudiante llamado', 'nelyerson', 'El usuario', '', '', 'user', 0),
(17, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(18, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(19, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(20, 'agrego un proximo evento llamado', 'super', 'El usuario', '', '', 'user', 0),
(21, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(22, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(23, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(24, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(25, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(26, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(27, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(28, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(29, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(30, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(31, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(32, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(33, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(34, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(35, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(36, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(37, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0),
(38, 'agrego una lista llamado', 'super', 'El usuario', '', '', 'user', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(10) NOT NULL,
  `ide` int(20) NOT NULL,
  `nombres` varchar(90) NOT NULL,
  `apellidos` varchar(90) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `documento` varchar(1) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `pnf` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `discapacidad` varchar(60) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `disp` int(2) NOT NULL,
  `graduando` int(2) NOT NULL,
  `firma` varchar(10) NOT NULL,
  `paquete` varchar(11) NOT NULL,
  `acto` varchar(11) NOT NULL,
  `medalla` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `ide`, `nombres`, `apellidos`, `telefono`, `documento`, `dni`, `pnf`, `foto`, `discapacidad`, `direccion`, `disp`, `graduando`, `firma`, `paquete`, `acto`, `medalla`) VALUES
(1, 2, 'nestor', 'montiel', '0412665844', '', '30460082', 'Informatica', 'files/30460082/6694448d58714foto.png', 'ninguna', 'cumare', 0, 1, 'Si', 'No', 'Acto', 'Representan'),
(2, 2, 'nelyerson', 'velazques', '0412665848', '', '11598145', 'Electronica', 'files/11598145/6694482ead2cafoto.jpg', 'ninguna', 'cumana', 0, 0, '', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fechai` date NOT NULL,
  `fechac` date NOT NULL,
  `espacio` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ide` int(100) NOT NULL,
  `disp` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `fechai`, `fechac`, `espacio`, `foto`, `ide`, `disp`) VALUES
(4, 'super', '2024-07-01', '2024-07-16', 'El Salon de Reuniones', 'files/super/668329eee50effoto.jpeg', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graduando`
--

CREATE TABLE `graduando` (
  `id` int(11) NOT NULL,
  `ide` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pnf` varchar(50) NOT NULL,
  `cupos` varchar(5) NOT NULL,
  `disp` int(2) NOT NULL,
  `cantidad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `graduando`
--

INSERT INTO `graduando` (`id`, `ide`, `nombre`, `pnf`, `cupos`, `disp`, `cantidad`) VALUES
(2, 2, 'evento', 'Informatica', '35', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `Id_cargo` int(11) NOT NULL,
  `tutorial` int(11) NOT NULL,
  `activo` int(11) NOT NULL,
  `privilegio` int(11) NOT NULL,
  `disp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `email`, `phone`, `Id_cargo`, `tutorial`, `activo`, `privilegio`, `disp`) VALUES
(2, 'nestor', '$2y$10$qAXBrqfZ5M1Ing.vujWSEuXch.uP0LjrBtHu9Zf.8po.nbAdmTwye', 'nestorgabriel011@hotmail.com', '04125665', 0, 1, 1, 1, 0),
(3, 'nelyer', '$2y$10$B5gQpwM49uK1goWU9EOWy.WxenfW8zTBG7Q57IiPx3BzVuf8lzVci', 'nelyer@hotmail.com', '123123333131313', 0, 1, 1, 0, 0),
(4, 'debora', '$2y$10$XIiyh/iv3CtUQUnT.qfJe.I7L0cS0hCtyI/yuld9UAoJXqr1wjXqS', 'debora@gmail.com', '123123333131313', 0, 1, 1, 0, 0),
(6, 'testt', '$2y$10$WfwUtK55MWjrq2KJKU0YJ.1Y1X4vQh1QkFbQP9PjeouRSG1lzF4re', 'test@gmail.com', '', 0, 1, 1, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cronologia`
--
ALTER TABLE `cronologia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `graduando`
--
ALTER TABLE `graduando`
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
-- AUTO_INCREMENT de la tabla `cronologia`
--
ALTER TABLE `cronologia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `graduando`
--
ALTER TABLE `graduando`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
