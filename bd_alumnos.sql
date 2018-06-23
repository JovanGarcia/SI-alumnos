-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-06-2018 a las 00:27:33
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `Numero` int(35) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) NOT NULL,
  `apellidos` varchar(35) NOT NULL,
  `matricula` int(35) NOT NULL,
  `carrera` varchar(35) NOT NULL,
  `grupo` varchar(35) NOT NULL,
  `correo` varchar(35) NOT NULL,
  `nacionalidad` varchar(35) NOT NULL,
  `telefono` int(35) NOT NULL,
  PRIMARY KEY (`Numero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Numero`, `nombre`, `apellidos`, `matricula`, `carrera`, `grupo`, `correo`, `nacionalidad`, `telefono`) VALUES
(1, 'Jovan', 'Garcia Gonzalez', 1730381, 'ITI', '3-1', 'jovan_loki@hotmail.com', 'Mexicano', 2147483647),
(2, 'Paco', 'España', 1630111, 'PyMES', '6-2', 'Pacoelc@gmail.com', 'Mexicano', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
