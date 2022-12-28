-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2022 a las 06:00:06
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pcdoctor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `email`, `telefono`, `descripcion`) VALUES
('Smith Adan', 'smithad@gmail.com', 2147483647, 'quisiera saber si es posible cambiar el procesador de mi pc lenovo g5'),
('Smith Adan', 'smithad@gmail.com', 2147483647, 'quisiera saber si es posible cambiar el procesador de mi pc lenovo g5'),
('will', 'malia@gmial.com', 2147483647, 'quisiera saber si es posible cambiar el procesador de mi pc lenovo g5'),
('will', 'malia@gmial.com', 2147483647, 'quisiera saber si es posible cambiar el procesador de mi pc lenovo g5'),
('ratona', 'malia@gmial.com', 2147483647, 'quisiera saber si es posible cambiar el procesador de mi pc lenovo g5'),
('ratona', 'malia@gmial.com', 2147483647, 'quisiera saber si es posible cambiar el procesador de mi pc lenovo g5'),
('ratona', 'malia@gmial.com', 2147483647, 'quisiera saber si es posible cambiar el procesador de mi pc lenovo g5'),
('brayan', 'brayan@gmail.com', 310245, 'es que no nos sirve las alertas en php que podemos solucionar espero que me den una pronta respuesta muchas gracias muy amables'),
('ratona', 'ratona@gmail.com', 3123456, 'aSFDGHFJG'),
('Yeison', 'arboledabrayan02@gmail.com', 234567, 'klhrsdtyuioiuytr'),
('fbdjdj', 'skjhdgf@gmsd', 234, 'zsdfg'),
('ratona', 'er@gmail.com', 3102455, 'es que no nos sirve las alertas en php que podemos solucionar espero que me den una pronta respuesta muchas gracias muy amables'),
('ratona', 'smithad@gmail.com', 2147483647, 'quiere');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
