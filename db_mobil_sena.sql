-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2023 a las 08:52:59
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
-- Base de datos: `db_mobil_sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `cod_ciudad` int(11) NOT NULL,
  `ciudad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`cod_ciudad`, `ciudad`) VALUES
(1, 'Bogota'),
(12, 'IBAGUE'),
(18, 'CALI'),
(24, 'ESPINAL');

--
-- Disparadores `ciudad`
--
DELIMITER $$
CREATE TRIGGER `actualizarCiudad` AFTER UPDATE ON `ciudad` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se actualizo la ciudad ', old.ciudad, 'a ', new.ciudad );
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `borrarCiudad` AFTER DELETE ON `ciudad` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); -- Puedes ajustar la longitud según tus necesidades
    SET mensaje = CONCAT('Se eliminó la ciudad "', old.ciudad, '"');
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertarCiudad` AFTER INSERT ON `ciudad` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se inserto la ciudad ', new.ciudad );
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo`
--

CREATE TABLE `correo` (
  `Documento` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `correo`
--

INSERT INTO `correo` (`Documento`, `Email`) VALUES
(1234, 'Didilva@msn.com'),
(1234, 'diegosilva@hot.es'),
(3466, 'Andreaa@jj.com'),
(8896, 'milozano@hot.es'),
(4345, 'dlozano@yah.es'),
(4345, 'diegolozano@gml.com');

--
-- Disparadores `correo`
--
DELIMITER $$
CREATE TRIGGER `actualizarCorreo` AFTER UPDATE ON `correo` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se actualizo el correo ', old.Email, ' a ' , new.Email );
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `eliminarCorreo` BEFORE DELETE ON `correo` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se elimino el correo ', old.Email );
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertarCorreo` AFTER INSERT ON `correo` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se inserto el correo ', new.Email );
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `informe`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `informe` (
`documento` int(11)
,`nombres` varchar(15)
,`apellidos` varchar(15)
,`sexo` char(1)
,`nombre_profesion` varchar(15)
,`telefono` varchar(10)
,`nombre_ciudad` varchar(15)
,`correo` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movil`
--

CREATE TABLE `movil` (
  `Documento` int(11) NOT NULL,
  `Telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `movil`
--

INSERT INTO `movil` (`Documento`, `Telefono`) VALUES
(1234, '31234567'),
(3466, '31345678'),
(3466, '31678990'),
(8896, '31845678'),
(4345, '30023567'),
(4345, '31234578');

--
-- Disparadores `movil`
--
DELIMITER $$
CREATE TRIGGER `actualizarMovil` AFTER UPDATE ON `movil` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se actualizo el movil ', old.Telefono, ' a ' , new.Telefono );
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `eliminarMovil` BEFORE DELETE ON `movil` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se elimino el movil ', old.Telefono);
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertarMovil` AFTER INSERT ON `movil` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se inserto el movil ', new.Telefono);
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `Documento` int(11) NOT NULL,
  `CodCiudad` int(11) NOT NULL,
  `Nombres` varchar(15) NOT NULL,
  `Apellidos` varchar(15) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `CodProfesion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`Documento`, `CodCiudad`, `Nombres`, `Apellidos`, `Sexo`, `CodProfesion`) VALUES
(1212, 24, 'Sebastian', 'Segura', 'F', 8),
(1234, 12, 'Diego', 'Silva', 'M', 10),
(3466, 24, 'Andrea', 'Amaya', 'F', 1),
(4345, 12, 'Diego', 'Lozano', 'M', 20),
(8896, 18, 'Milena', 'Lozano', 'F', 8),
(77777, 24, 'emilio', 'SILVA', 'M', 20),
(19191919, 12, 'ahasd', 'asdygad', 'a', 1);

--
-- Disparadores `personas`
--
DELIMITER $$
CREATE TRIGGER `actualizarPersonas` AFTER UPDATE ON `personas` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se actualizo un campo de la tabla personas');
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `eliminarPersona` BEFORE DELETE ON `personas` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se elimino el usuario ', old.Nombres);
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertarPersona` AFTER INSERT ON `personas` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se registro el usuario ', new.Nombres,'  ', new.Apellidos);
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesiones`
--

CREATE TABLE `profesiones` (
  `CodProfesion` int(11) NOT NULL,
  `Profesion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesiones`
--

INSERT INTO `profesiones` (`CodProfesion`, `Profesion`) VALUES
(1, 'ARQUITECTO'),
(8, 'ABOGADO'),
(10, 'INGENIERO'),
(20, 'OBRERO');

--
-- Disparadores `profesiones`
--
DELIMITER $$
CREATE TRIGGER `actualizarProfesion` AFTER UPDATE ON `profesiones` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se actualizo la profesion ', old.Profesion, ' a ', new.Profesion);
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `eliminarProfesion` BEFORE DELETE ON `profesiones` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se elimino la profesion ', old.Profesion);
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertarProfesion` AFTER INSERT ON `profesiones` FOR EACH ROW BEGIN
    DECLARE mensaje VARCHAR(200); 
    SET mensaje = CONCAT('Se registro la profesion ', new.Profesion);
    INSERT INTO repartidor_vigilante (registro) VALUES (mensaje);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repartidor_vigilante`
--

CREATE TABLE `repartidor_vigilante` (
  `id_vigilante` int(11) NOT NULL,
  `registro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `repartidor_vigilante`
--

INSERT INTO `repartidor_vigilante` (`id_vigilante`, `registro`) VALUES
(49, 'Se registro la profesion ARQUITECTO'),
(50, 'Se registro la profesion ABOGADO'),
(51, 'Se registro la profesion INGENIERO'),
(52, 'Se registro la profesion OBRERO'),
(53, 'Se inserto la ciudad Bogota'),
(54, 'Se inserto la ciudad IBAGUE'),
(55, 'Se inserto la ciudad CALI'),
(56, 'Se inserto la ciudad ESPINAL'),
(57, 'Se registro el usuario Sebastian  Segura'),
(58, 'Se registro el usuario Diego  Silva'),
(59, 'Se registro el usuario Andrea  Amaya'),
(60, 'Se registro el usuario Diego  Lozano'),
(61, 'Se registro el usuario Milena  Lozano'),
(62, 'Se registro el usuario emilio  SILVA'),
(63, 'Se registro el usuario ahasd  asdygad'),
(64, 'Se inserto el movil 31234567'),
(65, 'Se inserto el movil 31345678'),
(66, 'Se inserto el movil 31678990'),
(67, 'Se inserto el movil 31845678'),
(68, 'Se inserto el movil 30023567'),
(69, 'Se inserto el movil 31234578'),
(70, 'Se inserto el correo Didilva@msn.com'),
(71, 'Se inserto el correo diegosilva@hot.es'),
(72, 'Se inserto el correo Andreaa@jj.com'),
(73, 'Se inserto el correo milozano@hot.es'),
(74, 'Se inserto el correo dlozano@yah.es'),
(75, 'Se inserto el correo diegolozano@gml.com');

-- --------------------------------------------------------

--
-- Estructura para la vista `informe`
--
DROP TABLE IF EXISTS `informe`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `informe`  AS SELECT `p`.`Documento` AS `documento`, `p`.`Nombres` AS `nombres`, `p`.`Apellidos` AS `apellidos`, `p`.`Sexo` AS `sexo`, `pro`.`Profesion` AS `nombre_profesion`, `m`.`Telefono` AS `telefono`, `c`.`ciudad` AS `nombre_ciudad`, `co`.`Email` AS `correo` FROM ((((`personas` `p` join `profesiones` `pro` on(`p`.`CodProfesion` = `pro`.`CodProfesion`)) join `movil` `m` on(`m`.`Documento` = `p`.`Documento`)) join `ciudad` `c` on(`c`.`cod_ciudad` = `p`.`CodCiudad`)) join `correo` `co` on(`co`.`Documento` = `p`.`Documento`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`cod_ciudad`);

--
-- Indices de la tabla `correo`
--
ALTER TABLE `correo`
  ADD KEY `Documento` (`Documento`);

--
-- Indices de la tabla `movil`
--
ALTER TABLE `movil`
  ADD KEY `Documento` (`Documento`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`Documento`),
  ADD KEY `CodCiudad` (`CodCiudad`),
  ADD KEY `CodProfesion` (`CodProfesion`);

--
-- Indices de la tabla `profesiones`
--
ALTER TABLE `profesiones`
  ADD PRIMARY KEY (`CodProfesion`);

--
-- Indices de la tabla `repartidor_vigilante`
--
ALTER TABLE `repartidor_vigilante`
  ADD PRIMARY KEY (`id_vigilante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `repartidor_vigilante`
--
ALTER TABLE `repartidor_vigilante`
  MODIFY `id_vigilante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `correo`
--
ALTER TABLE `correo`
  ADD CONSTRAINT `correo_ibfk_1` FOREIGN KEY (`Documento`) REFERENCES `personas` (`Documento`);

--
-- Filtros para la tabla `movil`
--
ALTER TABLE `movil`
  ADD CONSTRAINT `movil_ibfk_1` FOREIGN KEY (`Documento`) REFERENCES `personas` (`Documento`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`CodCiudad`) REFERENCES `ciudad` (`cod_ciudad`),
  ADD CONSTRAINT `personas_ibfk_2` FOREIGN KEY (`CodProfesion`) REFERENCES `profesiones` (`CodProfesion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
