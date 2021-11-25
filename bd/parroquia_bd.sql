-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 05:44:28
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parroquia_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_bautismo`
--

CREATE TABLE `agenda_bautismo` (
  `idbautismo` int(4) NOT NULL,
  `nombre_parroquia` int(11) NOT NULL,
  `fecha_bautismo` date NOT NULL,
  `nombre_bautizado` varchar(200) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nombre_hospitaldenacimiento` varchar(500) NOT NULL,
  `nombre_padre` varchar(200) NOT NULL,
  `nombre_madre` varchar(200) NOT NULL,
  `nombre_padrino` varchar(200) NOT NULL,
  `nombre_madrina` varchar(200) NOT NULL,
  `nombre_padrino3` varchar(200) NOT NULL,
  `codigo_folio` varchar(10) NOT NULL,
  `nombre_ministro` int(10) NOT NULL,
  `hijo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_confirmacion`
--

CREATE TABLE `agenda_confirmacion` (
  `idconfirmacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `confirmado_otro_lugar` varchar(200) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nombre_padre` varchar(200) NOT NULL,
  `nombre_madre` varchar(200) NOT NULL,
  `nombre_padrino` varchar(200) NOT NULL,
  `nombre_madrina` varchar(200) NOT NULL,
  `ministro` int(11) NOT NULL,
  `obispo` int(11) NOT NULL,
  `fecha_confirmacion` date NOT NULL,
  `fecha_bautismo` date NOT NULL,
  `parroquia_bautismo` int(11) NOT NULL,
  `diosesis` varchar(200) NOT NULL,
  `folio` varchar(10) NOT NULL,
  `edad` int(5) NOT NULL,
  `hijo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_matrimonio`
--

CREATE TABLE `agenda_matrimonio` (
  `idmatrimonio` int(11) NOT NULL,
  `hora_matrimonio` varchar(25) NOT NULL,
  `fecha_matrimonio` date NOT NULL,
  `ministro_matrimonio` int(11) NOT NULL,
  `jurisdiccion` varchar(500) NOT NULL,
  `diocesis` varchar(25) NOT NULL,
  `folio` varchar(11) NOT NULL,
  `padre_novio` varchar(200) NOT NULL,
  `madre_novio` varchar(200) NOT NULL,
  `nombrecompleto_novio` varchar(200) NOT NULL,
  `padre_novia` varchar(200) NOT NULL,
  `madre_novia` varchar(200) NOT NULL,
  `nombrecompleto_novia` varchar(200) NOT NULL,
  `parroquia` int(11) NOT NULL,
  `padrino_boda` varchar(70) NOT NULL,
  `madrina_boda` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_primeracomunion`
--

CREATE TABLE `agenda_primeracomunion` (
  `idprimeracomunion` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `nombre_padre` varchar(200) NOT NULL,
  `nombre_madre` varchar(200) NOT NULL,
  `parroquia_bautismo` int(11) NOT NULL,
  `fecha_bautismo` date NOT NULL,
  `folio` varchar(11) NOT NULL,
  `fecha_confesion` date NOT NULL,
  `fecha_comunion` date NOT NULL,
  `catequista` varchar(200) NOT NULL,
  `celebrante_comunion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obispo`
--

CREATE TABLE `obispo` (
  `idobispo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cargo` varchar(60) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `periodo_desde` varchar(70) NOT NULL,
  `periodo_hasta` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquia`
--

CREATE TABLE `parroquia` (
  `id_parroquia` int(11) NOT NULL,
  `nombre_parroquia` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `encargado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sacerdote`
--

CREATE TABLE `sacerdote` (
  `idsacerdote` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dui` varchar(15) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL,
  `periodo_desde` varchar(200) NOT NULL,
  `periodo_hasta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `telefono`, `email`, `clave`, `rol`) VALUES
(1, 'administrador', 'administrador', 61196764, 'administrador@gmail.com', '91f5167c34c400758115c2a6826ec2e3', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda_bautismo`
--
ALTER TABLE `agenda_bautismo`
  ADD PRIMARY KEY (`idbautismo`),
  ADD KEY `nombre_parroquia` (`nombre_parroquia`),
  ADD KEY `nombre_ministro` (`nombre_ministro`);

--
-- Indices de la tabla `agenda_confirmacion`
--
ALTER TABLE `agenda_confirmacion`
  ADD PRIMARY KEY (`idconfirmacion`),
  ADD KEY `ministro` (`ministro`),
  ADD KEY `obispo` (`obispo`),
  ADD KEY `parroquia_bautismo` (`parroquia_bautismo`);

--
-- Indices de la tabla `agenda_matrimonio`
--
ALTER TABLE `agenda_matrimonio`
  ADD PRIMARY KEY (`idmatrimonio`),
  ADD KEY `parroquia` (`parroquia`),
  ADD KEY `celebrante_matrimonio` (`ministro_matrimonio`);

--
-- Indices de la tabla `agenda_primeracomunion`
--
ALTER TABLE `agenda_primeracomunion`
  ADD PRIMARY KEY (`idprimeracomunion`),
  ADD KEY `parroquia_bautismo` (`parroquia_bautismo`),
  ADD KEY `celebrante_comunion` (`celebrante_comunion`),
  ADD KEY `parroquia_bautismo_2` (`parroquia_bautismo`);

--
-- Indices de la tabla `obispo`
--
ALTER TABLE `obispo`
  ADD PRIMARY KEY (`idobispo`);

--
-- Indices de la tabla `parroquia`
--
ALTER TABLE `parroquia`
  ADD PRIMARY KEY (`id_parroquia`);

--
-- Indices de la tabla `sacerdote`
--
ALTER TABLE `sacerdote`
  ADD PRIMARY KEY (`idsacerdote`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda_bautismo`
--
ALTER TABLE `agenda_bautismo`
  MODIFY `idbautismo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agenda_confirmacion`
--
ALTER TABLE `agenda_confirmacion`
  MODIFY `idconfirmacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agenda_matrimonio`
--
ALTER TABLE `agenda_matrimonio`
  MODIFY `idmatrimonio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agenda_primeracomunion`
--
ALTER TABLE `agenda_primeracomunion`
  MODIFY `idprimeracomunion` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `obispo`
--
ALTER TABLE `obispo`
  MODIFY `idobispo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parroquia`
--
ALTER TABLE `parroquia`
  MODIFY `id_parroquia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sacerdote`
--
ALTER TABLE `sacerdote`
  MODIFY `idsacerdote` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda_bautismo`
--
ALTER TABLE `agenda_bautismo`
  ADD CONSTRAINT `agenda_bautismo_ibfk_1` FOREIGN KEY (`nombre_parroquia`) REFERENCES `parroquia` (`id_parroquia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agenda_bautismo_ibfk_2` FOREIGN KEY (`nombre_ministro`) REFERENCES `sacerdote` (`idsacerdote`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `agenda_confirmacion`
--
ALTER TABLE `agenda_confirmacion`
  ADD CONSTRAINT `agenda_confirmacion_ibfk_1` FOREIGN KEY (`ministro`) REFERENCES `sacerdote` (`idsacerdote`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agenda_confirmacion_ibfk_2` FOREIGN KEY (`obispo`) REFERENCES `obispo` (`idobispo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agenda_confirmacion_ibfk_3` FOREIGN KEY (`parroquia_bautismo`) REFERENCES `parroquia` (`id_parroquia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `agenda_matrimonio`
--
ALTER TABLE `agenda_matrimonio`
  ADD CONSTRAINT `agenda_matrimonio_ibfk_1` FOREIGN KEY (`ministro_matrimonio`) REFERENCES `sacerdote` (`idsacerdote`),
  ADD CONSTRAINT `agenda_matrimonio_ibfk_2` FOREIGN KEY (`parroquia`) REFERENCES `parroquia` (`id_parroquia`);

--
-- Filtros para la tabla `agenda_primeracomunion`
--
ALTER TABLE `agenda_primeracomunion`
  ADD CONSTRAINT `agenda_primeracomunion_ibfk_1` FOREIGN KEY (`parroquia_bautismo`) REFERENCES `parroquia` (`id_parroquia`),
  ADD CONSTRAINT `agenda_primeracomunion_ibfk_2` FOREIGN KEY (`celebrante_comunion`) REFERENCES `sacerdote` (`idsacerdote`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
