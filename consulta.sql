-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2023 a las 04:51:43
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29
CREATE DATABASE IF NOT EXISTS `consulta`;
USE`consulta`;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consulta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentesgineco`
--

CREATE TABLE `antecedentesgineco` (
  `codGineco` int(11) NOT NULL,
  `menarquia` int(3) NOT NULL,
  `sexarquia` int(3) NOT NULL,
  `nps` int(3) NOT NULL,
  `citologia` date NOT NULL,
  `descripCitologia` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `mamografia` date NOT NULL,
  `descripMamografia` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `gestas` varchar(5000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `paras` varchar(5000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `abortos` varchar(5000) CHARACTER SET latin1 NOT NULL,
  `status` bit(1) NOT NULL,
  `numHistoriaMedica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentespatologicos`
--

CREATE TABLE `antecedentespatologicos` (
  `codPatologia` int(11) NOT NULL,
  `descripcionPatologia` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionHabPsico` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionAntFam` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `numHistoriaMedica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `codCita` int(11) NOT NULL,
  `fechaCita` date NOT NULL,
  `horaCita` time NOT NULL,
  `motivoCita` text COLLATE utf8_spanish2_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `numHistoriaMedica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `numConsulta` int(11) NOT NULL,
  `fechaConsulta` date NOT NULL,
  `horaConsulta` time NOT NULL,
  `status` bit(1) NOT NULL,
  `numHistoriaMedica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `numDiagnostico` int(11) NOT NULL,
  `descripcionDiagnostico` varchar(5000) CHARACTER SET latin1 NOT NULL,
  `status` bit(1) NOT NULL,
  `numConsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenesprevios`
--

CREATE TABLE `examenesprevios` (
  `codExaPrevio` int(11) NOT NULL,
  `descripcionExamenPrevios` varchar(10000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `numHistoriaMedica` int(11) NOT NULL,
  `numConsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenfisico`
--

CREATE TABLE `examenfisico` (
  `codExamenFisico` int(11) NOT NULL,
  `descripcionExamenFisico` varchar(10000) COLLATE utf8_spanish2_ci NOT NULL,
  `signoDecubito` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `signoSedente` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `signoBidepestacion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `frecuenciaRespiratoria` float NOT NULL,
  `frecuenciaCardiaca` float NOT NULL,
  `peso` float NOT NULL,
  `talla` float NOT NULL,
  `IMC` float NOT NULL,
  `temperatura` float NOT NULL,
  `presionArterial` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `numConsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenfuncional`
--

CREATE TABLE `examenfuncional` (
  `codExamenFuncional` int(11) NOT NULL,
  `descripcionExamenFuncional` varchar(10000) COLLATE utf8_spanish2_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `numConsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `numHistoriaMedica` int(11) NOT NULL,
  `cedulaPaciente` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombrePaciente` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `segundoNombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoPaciente` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `segundoApellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `edadPaciente` int(3) DEFAULT NULL,
  `sexoPaciente` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaNacimientoPaciente` date DEFAULT NULL,
  `lugarNacimientoPaciente` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccionPaciente` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correoPaciente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefonoPaciente` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contactoEmergencia` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `codRol` int(11) NOT NULL,
  `nombreRol` varchar(20) NOT NULL,
  `nivelRol` bit(1) NOT NULL,
  `codUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoexamen`
--

CREATE TABLE `tipoexamen` (
  `codTipoExamen` int(11) NOT NULL,
  `nombreTipoExamen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionTipoExamen` varchar(10000) COLLATE utf8_spanish2_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `codExamenFuncional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `numTratamiento` int(11) NOT NULL,
  `indicacionesTratamiento` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `medicamentosTratamiento` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `numDiagnostico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codUser` int(11) NOT NULL,
  `nombreApellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `nombreUser` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codUser`, `nombreApellido`, `correo`, `nombreUser`, `password`, `status`) VALUES
(1, 'samuel', 'marianny@gamil.com', 'samu', '123', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentesgineco`
--
ALTER TABLE `antecedentesgineco`
  ADD PRIMARY KEY (`codGineco`),
  ADD KEY `numHistoriaMedica` (`numHistoriaMedica`);

--
-- Indices de la tabla `antecedentespatologicos`
--
ALTER TABLE `antecedentespatologicos`
  ADD PRIMARY KEY (`codPatologia`),
  ADD KEY `numHistoriaMedica` (`numHistoriaMedica`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`codCita`),
  ADD KEY `numHistoriaMedica` (`numHistoriaMedica`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`numConsulta`),
  ADD KEY `numHistoriaMedica` (`numHistoriaMedica`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`numDiagnostico`),
  ADD KEY `numConsulta` (`numConsulta`);

--
-- Indices de la tabla `examenesprevios`
--
ALTER TABLE `examenesprevios`
  ADD PRIMARY KEY (`codExaPrevio`),
  ADD KEY `numHistoriaMedica` (`numHistoriaMedica`),
  ADD KEY `numConsulta` (`numConsulta`);

--
-- Indices de la tabla `examenfisico`
--
ALTER TABLE `examenfisico`
  ADD PRIMARY KEY (`codExamenFisico`),
  ADD KEY `numConsulta` (`numConsulta`);

--
-- Indices de la tabla `examenfuncional`
--
ALTER TABLE `examenfuncional`
  ADD PRIMARY KEY (`codExamenFuncional`),
  ADD KEY `numConsulta` (`numConsulta`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`numHistoriaMedica`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`codRol`),
  ADD KEY `codUser` (`codUser`);

--
-- Indices de la tabla `tipoexamen`
--
ALTER TABLE `tipoexamen`
  ADD PRIMARY KEY (`codTipoExamen`),
  ADD KEY `codExamenFuncional` (`codExamenFuncional`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`numTratamiento`),
  ADD KEY `numDiagnostico` (`numDiagnostico`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentespatologicos`
--
ALTER TABLE `antecedentespatologicos`
  MODIFY `codPatologia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `codCita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `numConsulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `numDiagnostico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `examenesprevios`
--
ALTER TABLE `examenesprevios`
  MODIFY `codExaPrevio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `examenfisico`
--
ALTER TABLE `examenfisico`
  MODIFY `codExamenFisico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `examenfuncional`
--
ALTER TABLE `examenfuncional`
  MODIFY `codExamenFuncional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `numHistoriaMedica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoexamen`
--
ALTER TABLE `tipoexamen`
  MODIFY `codTipoExamen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `numTratamiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentesgineco`
--
ALTER TABLE `antecedentesgineco`
  ADD CONSTRAINT `antecedentesgineco_ibfk_1` FOREIGN KEY (`numHistoriaMedica`) REFERENCES `paciente` (`numHistoriaMedica`);

--
-- Filtros para la tabla `antecedentespatologicos`
--
ALTER TABLE `antecedentespatologicos`
  ADD CONSTRAINT `antecedentespatologicos_ibfk_1` FOREIGN KEY (`numHistoriaMedica`) REFERENCES `paciente` (`numHistoriaMedica`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`numHistoriaMedica`) REFERENCES `paciente` (`numHistoriaMedica`);

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`numHistoriaMedica`) REFERENCES `paciente` (`numHistoriaMedica`);

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `diagnostico_ibfk_1` FOREIGN KEY (`numConsulta`) REFERENCES `consulta` (`numConsulta`);

--
-- Filtros para la tabla `examenesprevios`
--
ALTER TABLE `examenesprevios`
  ADD CONSTRAINT `examenesprevios_ibfk_1` FOREIGN KEY (`numHistoriaMedica`) REFERENCES `paciente` (`numHistoriaMedica`),
  ADD CONSTRAINT `examenesprevios_ibfk_2` FOREIGN KEY (`numConsulta`) REFERENCES `consulta` (`numConsulta`);

--
-- Filtros para la tabla `examenfisico`
--
ALTER TABLE `examenfisico`
  ADD CONSTRAINT `examenfisico_ibfk_1` FOREIGN KEY (`numConsulta`) REFERENCES `consulta` (`numConsulta`);

--
-- Filtros para la tabla `examenfuncional`
--
ALTER TABLE `examenfuncional`
  ADD CONSTRAINT `examenfuncional_ibfk_1` FOREIGN KEY (`numConsulta`) REFERENCES `consulta` (`numConsulta`);

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `rol_ibfk_1` FOREIGN KEY (`codUser`) REFERENCES `usuario` (`codUser`);

--
-- Filtros para la tabla `tipoexamen`
--
ALTER TABLE `tipoexamen`
  ADD CONSTRAINT `tipoexamen_ibfk_1` FOREIGN KEY (`codExamenFuncional`) REFERENCES `examenfuncional` (`codExamenFuncional`);

--
-- Filtros para la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD CONSTRAINT `tratamiento_ibfk_1` FOREIGN KEY (`numDiagnostico`) REFERENCES `diagnostico` (`numDiagnostico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
