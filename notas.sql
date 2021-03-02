
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2020 a las 21:21:15
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `ID_ESTUDIANTE` SERIAL,
  `NOMBRE` varchar(60) COLLATE utf8_bin NOT NULL,
  `APELLIDO` varchar(60) COLLATE utf8_bin NOT NULL,
  `DOCUMENTO` varchar(12) COLLATE utf8_bin NOT NULL,
  `CORREO` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `MATERIA` varchar(30) COLLATE utf8_bin NOT NULL,
  `DOCENTE` varchar(60) COLLATE utf8_bin NOT NULL,
  `PROMEDIO` int(3) NOT NULL,
  `FECHA_REGISTRO` date NOT NULL,
  PRIMARY KEY (ID_ESTUDIANTE)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID_MATERIA` SERIAL,
  `MATERIA` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (ID_MATERIA)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` SERIAL,
  `NOMBRE` varchar(60) COLLATE utf8_bin NOT NULL,
  `APELLIDO` varchar(60) COLLATE utf8_bin NOT NULL,
  `USUARIO` varchar(40) COLLATE utf8_bin NOT NULL,
  `CONTRASENA` varchar(80) COLLATE utf8_bin NOT NULL,
  `PERFIL` varchar(30) COLLATE utf8_bin NOT NULL,
  `ESTADO` varchar(20) COLLATE utf8_bin NOT NULL,
   PRIMARY KEY (ID_USUARIO)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
