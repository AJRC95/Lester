-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2022 a las 03:42:29
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_dw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agente`
--

CREATE TABLE `agente` (
  `idAgente` int NOT NULL,
  `nombre` varchar(12) NOT NULL,
  `apellido` varchar(12) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `cargo` varchar(10) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `contrasenia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idCiudad` int NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `provincia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `idPropiedad` int NOT NULL,
  `nombre` varchar(12) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `imagen` blob NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `ciudad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento`
--

CREATE TABLE `requerimiento` (
  `idRequerimiento` int NOT NULL,
  `nombrePersona` varchar(25) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  `terminosCondiciones` int NOT NULL,
  `ofertas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agente`
--
ALTER TABLE `agente`
  ADD PRIMARY KEY (`idAgente`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idCiudad`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`idPropiedad`);

--
-- Indices de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD PRIMARY KEY (`idRequerimiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agente`
--
ALTER TABLE `agente`
  MODIFY `idAgente` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idCiudad` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `idPropiedad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  MODIFY `idRequerimiento` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;