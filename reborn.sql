-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2017 a las 07:29:28
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reborn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` int(10) NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `bloque` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `foto` longblob NOT NULL,
  `dato` text COLLATE utf8_spanish_ci NOT NULL,
  `fec_nac` date NOT NULL,
  `sexo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellido1`, `apellido2`, `correo`, `codigo`, `clave`, `bloque`, `foto`, `dato`, `fec_nac`, `sexo`, `rol`) VALUES
(2, 'Roussy JesÃºs', 'Aguilar', 'MorÃ¡n', '1014599@senati.pe', 1014599, '1998-04-10', 'FB_01', 0x666f746f2e706e67, 'Estudiante del Senati', '1998-04-10', 'M', 2),
(3, 'Aaron Arantes', 'Basaldua', 'Barrenechea', '1012385@senati.pe', 1012385, '1234567', 'FB_02', 0x433a78616d7070096d70706870344644362e746d70, 'Estudiante del Senati', '1997-06-30', 'M', 2),
(4, 'Marlon Junior', 'Barreto', 'Huaman', '991051@senati.pe', 991051, '1998-10-10', 'FB_01', 0x666f746f2e706e67, 'Estudiante del Senati', '1998-10-10', 'M', 2),
(5, 'Carlos Aaron', 'Rosales', 'Chalco', '1012932@senati.pe', 1012932, '1998-08-31', 'FB_02', 0x666f746f2e706e67, 'Estudiante del Senati', '1998-08-31', 'M', 2),
(6, 'Jhosselyn Juliette', 'Laos', 'Llana', '1012944@senati.pe', 1012944, '250399', 'FB_02', '', 'Estudiante del Senati', '1999-03-25', 'F', 2),
(7, 'Ever Ruben', 'Toribio', 'Julca', '917359@senati.pe', 917359, '19996-08-25', 'FB_02', 0x666f746f2e706e67, 'Estudiante del Senati', '0000-00-00', 'M', 2),
(8, 'Alvaro Daniel', 'Lara', 'Cisneros', '1014558@senati.pe', 1014558, '1998-08-16', 'FB_02', 0x666f746f2e706e67, 'Estudiante del Senati', '1998-08-16', 'M', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque`
--

CREATE TABLE `bloque` (
  `id` int(11) NOT NULL,
  `carrera` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bloque`
--

INSERT INTO `bloque` (`id`, `carrera`, `nombre`, `codigo`) VALUES
(1, 'Desarrollo de Software', 'FB_01', 10001),
(2, 'Desarrollo de Software', 'FB_02', 10002),
(3, '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificar`
--

CREATE TABLE `calificar` (
  `id` int(11) NOT NULL,
  `alumno` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `curso1` int(2) DEFAULT NULL,
  `curso2` int(2) DEFAULT NULL,
  `curso3` int(2) DEFAULT NULL,
  `curso4` int(2) DEFAULT NULL,
  `curso5` int(2) DEFAULT NULL,
  `curso6` int(2) DEFAULT NULL,
  `promedio` decimal(10,0) DEFAULT NULL,
  `codigo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calificar`
--

INSERT INTO `calificar` (`id`, `alumno`, `curso1`, `curso2`, `curso3`, `curso4`, `curso5`, `curso6`, `promedio`, `codigo`) VALUES
(1, 'Chalco Rosales Carlos Aaron', 16, 14, 18, 20, 12, 14, '16', 1012932),
(2, 'Llana Laos Jhosselyn Juliette', 14, 18, 18, 18, 14, 18, '17', 1012944);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre4` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre5` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre6` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `nombre2`, `nombre3`, `nombre4`, `nombre5`, `nombre6`) VALUES
(3, 'Software Aplicativo', 'Arquitectura de Computadoras', 'Fundamentos de ProgramaciÃ³n', 'TecnologÃ­as Web ', 'Base de Datos I', 'Lenguaje de ProgramaciÃ³n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` int(11) NOT NULL,
  `clave_prof` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dato` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(3) NOT NULL,
  `bloque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `nombre`, `apellido1`, `apellido2`, `correo`, `codigo`, `clave_prof`, `dato`, `foto`, `rol`, `bloque`) VALUES
(0, 'Simon', 'Choque', 'del Pozo', 'Elias.Choque.20015@gmail.com', 1234567, 'admin', 'Profesor', 'foto.png', 1, 1001);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bloque`
--
ALTER TABLE `bloque`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificar`
--
ALTER TABLE `calificar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `bloque`
--
ALTER TABLE `bloque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `calificar`
--
ALTER TABLE `calificar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
