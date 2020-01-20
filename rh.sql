-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2020 a las 10:03:58
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siglas`
--

CREATE TABLE `siglas` (
  `id` int(2) NOT NULL,
  `siglas` varchar(4) NOT NULL,
  `descrpcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(3) NOT NULL,
  `nac` varchar(1) DEFAULT NULL,
  `cedulat` int(8) NOT NULL,
  `nombret` varchar(50) NOT NULL,
  `telefonot` varchar(12) NOT NULL,
  `celulart` varchar(12) DEFAULT NULL,
  `emailt` varchar(50) DEFAULT NULL,
  `direcciont` varchar(250) NOT NULL,
  `f_nacimientot` date NOT NULL,
  `generot` tinyint(1) NOT NULL,
  `fotot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `nac`, `cedulat`, `nombret`, `telefonot`, `celulart`, `emailt`, `direcciont`, `f_nacimientot`, `generot`, `fotot`) VALUES
(1, 'v', 13004755, 'jimmy gregory quintero paz', '0261-7314814', '04269224888', 'jimmygquinterop@gmail.com', 'el silencio', '1978-03-06', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cedulau` int(8) NOT NULL,
  `nombreu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `celularu` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `emailu` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `cedulau`, `nombreu`, `celularu`, `emailu`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 0, '', '', ''),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 0, '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `siglas`
--
ALTER TABLE `siglas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`cedulat`),
  ADD UNIQUE KEY `Unico` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `siglas`
--
ALTER TABLE `siglas`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
