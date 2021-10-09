-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2021 a las 04:10:30
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

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ps_entrar` (IN `val_email` VARCHAR(50), IN `val_clave` VARCHAR(250))  BEGIN 
SELECT * FROM usuario WHERE email = val_email AND clave = MD5(val_clave);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ps_guardar_usuario` (`val_nombre` VARCHAR(50), `val_apellido` VARCHAR(50), `val_telefono` INT(10), `val_email` VARCHAR(50), `val_clave` VARCHAR(255), `val_rol` INT(11))  BEGIN
 
	INSERT INTO usuario(nombre, apellido, telefono, email, clave,rol)
    values(val_nombre, val_apellido, val_telefono, val_email, md5(val_clave), val_rol);
    
    SELECT last_insert_id() AS nuevoid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ps_modificar_usuario` (IN `val_nombre` VARCHAR(50), IN `val_apellido` VARCHAR(50), IN `val_telefono` INTEGER(10), IN `val_email` VARCHAR(50), IN `val_clave` VARCHAR(255), IN `val_rol` INT, IN `val_idusuario` INT)  BEGIN
	
	update usuario set nombre = val_nombre, apellido = val_apellido, telefono = val_telefono,
						email = val_email, clave = md5(val_clave), rol = rol where idusuario = val_idusuario;
    
    SELECT concat('ID: ', val_idusuario, ' modifcado.') as resultado;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ps_obtener_usuario` (IN `val_idusuario` INT)  BEGIN	
	SELECT * FROM usuario WHERE idusuario = val_idusuario;
END$$

DELIMITER ;

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
  `numero_de_acta` varchar(10) NOT NULL,
  `nombre_ministro` int(10) NOT NULL,
  `hijo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda_bautismo`
--

INSERT INTO `agenda_bautismo` (`idbautismo`, `nombre_parroquia`, `fecha_bautismo`, `nombre_bautizado`, `fecha_nacimiento`, `nombre_hospitaldenacimiento`, `nombre_padre`, `nombre_madre`, `nombre_padrino`, `nombre_madrina`, `nombre_padrino3`, `codigo_folio`, `numero_de_acta`, `nombre_ministro`, `hijo`) VALUES
(2, 1, '2021-11-05', 'Lilian Elizabeth', '2021-10-12', 'hospital', 'papa', 'mama', 'padrino', 'madrina', 'padrino3', '3', '1', 1, 'Hijo Legitimo'),
(5, 1, '2021-10-21', 'Lilian Elizabeth Zabaleta', '2021-10-26', 'hospital', 'papa', 'mama', 'padrino', 'madrina', 'padrino3', '3', '1', 1, 'Hijo Legitimo');

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
  `ministro` int(5) NOT NULL,
  `fecha_confirmacion` date NOT NULL,
  `fecha_bautismo` date NOT NULL,
  `parroquia_bautismo` int(11) NOT NULL,
  `diosesis` varchar(200) NOT NULL,
  `año_bautismo` year(4) NOT NULL,
  `libro` varchar(10) NOT NULL,
  `folio` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_matrimonio`
--

CREATE TABLE `agenda_matrimonio` (
  `idmatrimonio` int(11) NOT NULL,
  `fecha_matrimonio` date NOT NULL,
  `ministro_matrimonio` int(11) NOT NULL,
  `jurisdiccion` varchar(500) NOT NULL,
  `año` year(4) NOT NULL,
  `libro` varchar(11) NOT NULL,
  `folio` varchar(11) NOT NULL,
  `numero` varchar(11) NOT NULL,
  `padre_novio` varchar(200) NOT NULL,
  `madre_novio` varchar(200) NOT NULL,
  `testigo1_novio` varchar(200) NOT NULL,
  `testigo2_novio` varchar(200) NOT NULL,
  `nombrecompleto_novio` varchar(200) NOT NULL,
  `padre_novia` varchar(200) NOT NULL,
  `madre_novia` varchar(200) NOT NULL,
  `testigo1_novia` varchar(200) NOT NULL,
  `testigo2_novia` varchar(200) NOT NULL,
  `nombrecompleto_novia` varchar(200) NOT NULL,
  `parroquia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_primeracomunion`
--

CREATE TABLE `agenda_primeracomunion` (
  `id_primeracomunion` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre_padre` varchar(200) NOT NULL,
  `nombre_madre` varchar(200) NOT NULL,
  `parroquia_bautismo` int(11) NOT NULL,
  `fecha_bautismo` date NOT NULL,
  `libro` varchar(10) NOT NULL,
  `folio` varchar(11) NOT NULL,
  `numero` varchar(11) NOT NULL,
  `fecha_confesion` date NOT NULL,
  `fecha_comunion` date NOT NULL,
  `catequista` varchar(200) NOT NULL,
  `celebrante_comunion` int(11) NOT NULL
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

--
-- Volcado de datos para la tabla `parroquia`
--

INSERT INTO `parroquia` (`id_parroquia`, `nombre_parroquia`, `direccion`, `departamento`, `email`, `telefono`, `encargado`) VALUES
(1, 'San Antonio', 'Direccion', 'Ilobasco', 'liliazavaleta17@gmail.com', 61198765, 'Salvador');

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

--
-- Volcado de datos para la tabla `sacerdote`
--

INSERT INTO `sacerdote` (`idsacerdote`, `nombre`, `apellido`, `cargo`, `fecha_nacimiento`, `dui`, `nacionalidad`, `periodo_desde`, `periodo_hasta`) VALUES
(1, 'Salvador Salvador', 'Candelario', 'Parroco', '1979-01-09', '234567-09', 'El Salvador', 'Enero 2010', 'Actualmente');

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
(1, 'Lilian Elizabeth', 'Zabaleta Ceren', 61198724, 'liliazavaleta17@gmail.com', '31e10abc4f418ed16ed9e646f5c0bee7', 1),
(2, 'Lilian Elizabeth marbella', 'Zabaleta ceren', 61198765, 'liliazavaleta17@gmail.com', '9d5e3ecdeb4cdb7acfd63075ae046672', 1);

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
  ADD KEY `parroquia_bautismo` (`parroquia_bautismo`),
  ADD KEY `parroquia_bautismo_2` (`parroquia_bautismo`);

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
  ADD PRIMARY KEY (`id_primeracomunion`),
  ADD KEY `parroquia_bautismo` (`parroquia_bautismo`),
  ADD KEY `celebrante_comunion` (`celebrante_comunion`),
  ADD KEY `parroquia_bautismo_2` (`parroquia_bautismo`);

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
  MODIFY `idbautismo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_primeracomunion` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parroquia`
--
ALTER TABLE `parroquia`
  MODIFY `id_parroquia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sacerdote`
--
ALTER TABLE `sacerdote`
  MODIFY `idsacerdote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `agenda_confirmacion_ibfk_1` FOREIGN KEY (`ministro`) REFERENCES `sacerdote` (`idsacerdote`),
  ADD CONSTRAINT `agenda_confirmacion_ibfk_2` FOREIGN KEY (`parroquia_bautismo`) REFERENCES `agenda_bautismo` (`idbautismo`);

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
  ADD CONSTRAINT `agenda_primeracomunion_ibfk_1` FOREIGN KEY (`parroquia_bautismo`) REFERENCES `agenda_bautismo` (`idbautismo`),
  ADD CONSTRAINT `agenda_primeracomunion_ibfk_2` FOREIGN KEY (`celebrante_comunion`) REFERENCES `sacerdote` (`idsacerdote`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
