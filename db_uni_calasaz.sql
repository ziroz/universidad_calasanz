-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2015 a las 15:49:44
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_uni_calasaz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_carreras`
--

CREATE TABLE IF NOT EXISTS `tbl_carreras` (
  `car_codigoP` varchar(20) NOT NULL,
  `car_nombre` varchar(100) DEFAULT NULL,
  `car_valor_semestre` double DEFAULT NULL,
  `car_numero_semestres` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_carreras`
--

INSERT INTO `tbl_carreras` (`car_codigoP`, `car_nombre`, `car_valor_semestre`, `car_numero_semestres`) VALUES
('001', 'Sistemas ', 400000, 12),
('002', 'ComunicaciÃ³n Social', 200000, 12),
('003', 'Industrial', 2300, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_carreras_materias`
--

CREATE TABLE IF NOT EXISTS `tbl_carreras_materias` (
  `carmat_consecutivoP` varchar(20) NOT NULL,
  `carmat_mat_codigo` varchar(20) DEFAULT NULL,
  `carmat_car_codigo` varchar(20) DEFAULT NULL,
  `carmat_ciclo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_docentes`
--

CREATE TABLE IF NOT EXISTS `tbl_docentes` (
  `doc_per_consecutivoP` int(11) NOT NULL,
  `doc_oficina` varchar(150) DEFAULT NULL,
  `doc_telefono_oficina` varchar(30) DEFAULT NULL,
  `doc_categoria` int(11) DEFAULT NULL,
  `doc_valor_hora` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estudiantes`
--

CREATE TABLE IF NOT EXISTS `tbl_estudiantes` (
  `est_per_consecutivoP` int(11) NOT NULL,
  `est_apodo` varchar(100) DEFAULT NULL,
  `est_car_codigo` varchar(20) DEFAULT NULL,
  `est_fecha_matricula` datetime DEFAULT NULL,
  `est_peri_consecutivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_estudiantes`
--

INSERT INTO `tbl_estudiantes` (`est_per_consecutivoP`, `est_apodo`, `est_car_codigo`, `est_fecha_matricula`, `est_peri_consecutivo`) VALUES
(6, 'Gusano', '002', '2015-07-03 00:00:00', 1),
(11, 'Pineda', '002', '2015-05-28 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materias`
--

CREATE TABLE IF NOT EXISTS `tbl_materias` (
  `mat_codigoP` varchar(20) NOT NULL,
  `mat_nombre` varchar(100) DEFAULT NULL,
  `mat_descripcion` varchar(500) DEFAULT NULL,
  `mat_cupos_maximo` int(11) DEFAULT NULL,
  `mat_horas_semanales` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_materias`
--

INSERT INTO `tbl_materias` (`mat_codigoP`, `mat_nombre`, `mat_descripcion`, `mat_cupos_maximo`, `mat_horas_semanales`) VALUES
('004', 'EspaÃ±ol', 'Muy buena materia', 30, 3),
('243', 'Objetos', 'Es la de los sabados Ã‘@--345345Ãº', 15, 4),
('35', 'Matematicas', 'rwer', 34, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_matriculas_materias`
--

CREATE TABLE IF NOT EXISTS `tbl_matriculas_materias` (
  `matmat_consecutivoP` int(11) NOT NULL,
  `matmat_per_consecutivo` int(11) DEFAULT NULL,
  `matmat_mat_codigo` varchar(20) DEFAULT NULL,
  `matmat_per_consecutivo_docente` int(11) DEFAULT NULL,
  `matmat_aula` varchar(60) DEFAULT NULL,
  `matmat_peri_consecutivo` int(11) DEFAULT NULL,
  `matmat_eva_nota_corte_1` double DEFAULT NULL,
  `matmat_eva_nota_corte_2` double DEFAULT NULL,
  `matmat_eva_nota_corte_3` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_matriculas_materias`
--

INSERT INTO `tbl_matriculas_materias` (`matmat_consecutivoP`, `matmat_per_consecutivo`, `matmat_mat_codigo`, `matmat_per_consecutivo_docente`, `matmat_aula`, `matmat_peri_consecutivo`, `matmat_eva_nota_corte_1`, `matmat_eva_nota_corte_2`, `matmat_eva_nota_corte_3`) VALUES
(1, 6, '35', NULL, '4', 1, 1, 6, 4),
(2, 6, '004', NULL, '5', 1, 5, 9, 5),
(3, 6, '004', NULL, '12', 2, 1, 4, 6),
(4, 6, '004', 10, '', 1, NULL, 9, 6),
(5, 11, '243', NULL, '10', 1, 2, 6, 1),
(6, 11, '35', NULL, '14', 1, 12, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_periodos`
--

CREATE TABLE IF NOT EXISTS `tbl_periodos` (
  `peri_consecutivoP` int(11) NOT NULL,
  `peri_nombre` varchar(100) DEFAULT NULL,
  `peri_fecha_inicio` datetime DEFAULT NULL,
  `peri_fecha_fin` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_periodos`
--

INSERT INTO `tbl_periodos` (`peri_consecutivoP`, `peri_nombre`, `peri_fecha_inicio`, `peri_fecha_fin`) VALUES
(1, 'Periodo 1', '2015-05-15 00:00:00', '2015-05-28 00:00:00'),
(2, 'Periodo 2', '2015-04-23 00:00:00', '1970-01-28 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personas`
--

CREATE TABLE IF NOT EXISTS `tbl_personas` (
  `per_consecutivoP` int(11) NOT NULL,
  `per_nombre_completo` varchar(150) DEFAULT NULL,
  `per_fecha_nacimiento` datetime DEFAULT NULL,
  `per_email` varchar(100) DEFAULT NULL,
  `per_estado` bit(1) DEFAULT NULL,
  `per_usu_nombre` varchar(100) DEFAULT NULL,
  `per_usu_contrasena` varchar(60) DEFAULT NULL,
  `per_identificacion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_personas`
--

INSERT INTO `tbl_personas` (`per_consecutivoP`, `per_nombre_completo`, `per_fecha_nacimiento`, `per_email`, `per_estado`, `per_usu_nombre`, `per_usu_contrasena`, `per_identificacion`) VALUES
(6, 'Carlos Rodriguez', '2015-06-09 00:00:00', 'cpinda@q10soluciones.com', b'1', NULL, NULL, '353423'),
(10, 'Pedro', '2015-05-08 00:00:00', '435@fdg.dfg', b'1', NULL, NULL, '345'),
(11, 'Andres Pineda', '2015-05-06 00:00:00', 'anrdres@df.dfg', b'1', NULL, NULL, '1038575');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_carreras`
--
ALTER TABLE `tbl_carreras`
  ADD PRIMARY KEY (`car_codigoP`);

--
-- Indices de la tabla `tbl_carreras_materias`
--
ALTER TABLE `tbl_carreras_materias`
  ADD PRIMARY KEY (`carmat_consecutivoP`), ADD KEY `carmat_mat_codigo` (`carmat_mat_codigo`), ADD KEY `carmat_car_codigo` (`carmat_car_codigo`);

--
-- Indices de la tabla `tbl_docentes`
--
ALTER TABLE `tbl_docentes`
  ADD PRIMARY KEY (`doc_per_consecutivoP`), ADD KEY `doc_per_consecutivoP` (`doc_per_consecutivoP`);

--
-- Indices de la tabla `tbl_estudiantes`
--
ALTER TABLE `tbl_estudiantes`
  ADD PRIMARY KEY (`est_per_consecutivoP`), ADD KEY `est_peri_consecutivo` (`est_peri_consecutivo`), ADD KEY `est_car_codigo` (`est_car_codigo`), ADD KEY `est_per_consecutivoP` (`est_per_consecutivoP`);

--
-- Indices de la tabla `tbl_materias`
--
ALTER TABLE `tbl_materias`
  ADD PRIMARY KEY (`mat_codigoP`);

--
-- Indices de la tabla `tbl_matriculas_materias`
--
ALTER TABLE `tbl_matriculas_materias`
  ADD PRIMARY KEY (`matmat_consecutivoP`), ADD KEY `matmat_per_consecutivo` (`matmat_per_consecutivo`), ADD KEY `matmat_mat_codigo` (`matmat_mat_codigo`), ADD KEY `matmat_peri_consecutivo` (`matmat_peri_consecutivo`), ADD KEY `matmat_per_consecutivo_docente` (`matmat_per_consecutivo_docente`);

--
-- Indices de la tabla `tbl_periodos`
--
ALTER TABLE `tbl_periodos`
  ADD PRIMARY KEY (`peri_consecutivoP`);

--
-- Indices de la tabla `tbl_personas`
--
ALTER TABLE `tbl_personas`
  ADD PRIMARY KEY (`per_consecutivoP`), ADD UNIQUE KEY `per_identificacion` (`per_identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_matriculas_materias`
--
ALTER TABLE `tbl_matriculas_materias`
  MODIFY `matmat_consecutivoP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tbl_periodos`
--
ALTER TABLE `tbl_periodos`
  MODIFY `peri_consecutivoP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_personas`
--
ALTER TABLE `tbl_personas`
  MODIFY `per_consecutivoP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_carreras_materias`
--
ALTER TABLE `tbl_carreras_materias`
ADD CONSTRAINT `tbl_carreras_materias_ibfk_1` FOREIGN KEY (`carmat_mat_codigo`) REFERENCES `tbl_materias` (`mat_codigoP`),
ADD CONSTRAINT `tbl_carreras_materias_ibfk_2` FOREIGN KEY (`carmat_car_codigo`) REFERENCES `tbl_carreras` (`car_codigoP`);

--
-- Filtros para la tabla `tbl_docentes`
--
ALTER TABLE `tbl_docentes`
ADD CONSTRAINT `tbl_docentes_ibfk_1` FOREIGN KEY (`doc_per_consecutivoP`) REFERENCES `tbl_personas` (`per_consecutivoP`);

--
-- Filtros para la tabla `tbl_estudiantes`
--
ALTER TABLE `tbl_estudiantes`
ADD CONSTRAINT `tbl_estudiantes_ibfk_1` FOREIGN KEY (`est_per_consecutivoP`) REFERENCES `tbl_personas` (`per_consecutivoP`),
ADD CONSTRAINT `tbl_estudiantes_ibfk_2` FOREIGN KEY (`est_peri_consecutivo`) REFERENCES `tbl_periodos` (`peri_consecutivoP`),
ADD CONSTRAINT `tbl_estudiantes_ibfk_3` FOREIGN KEY (`est_car_codigo`) REFERENCES `tbl_carreras` (`car_codigoP`);

--
-- Filtros para la tabla `tbl_matriculas_materias`
--
ALTER TABLE `tbl_matriculas_materias`
ADD CONSTRAINT `tbl_matriculas_materias_ibfk_1` FOREIGN KEY (`matmat_mat_codigo`) REFERENCES `tbl_materias` (`mat_codigoP`),
ADD CONSTRAINT `tbl_matriculas_materias_ibfk_2` FOREIGN KEY (`matmat_per_consecutivo_docente`) REFERENCES `tbl_personas` (`per_consecutivoP`),
ADD CONSTRAINT `tbl_matriculas_materias_ibfk_3` FOREIGN KEY (`matmat_per_consecutivo`) REFERENCES `tbl_personas` (`per_consecutivoP`),
ADD CONSTRAINT `tbl_matriculas_materias_ibfk_4` FOREIGN KEY (`matmat_peri_consecutivo`) REFERENCES `tbl_periodos` (`peri_consecutivoP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
