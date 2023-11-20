-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 16:24:06
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

----------------------------------------------------------
-- DROP TABLE usuarios, encuesta;
-- SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'usuarios';
-- ALTER TABLE usuarios RENAME TO usuarios_new;
-- CREATE SCHEMA IF NOT EXISTS `login_register_db` DEFAULT CHARACTER SET utf8mb4;
USE `login_register_db` ;
-- --------------------------------------------------------

-- Base de datos: `login_register_db`

-- Estructura de tabla para la tabla `usuarios`

CREATE TABLE IF NOT EXISTS `login_register_db`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

CREATE TABLE IF NOT EXISTS `login_register_db`.`encuesta` (
  `encuesta_id` INT NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `calificacion` INT(1) NOT NULL,
  `personaje` varchar(50) NOT NULL,
  `recomienda` varchar(250) NOT NULL,
  PRIMARY KEY (`encuesta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(1, 'santiago', 'portacantante14@gmail.com', 'porta', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');

INSERT INTO `encuesta` (`encuesta_id`, `nombre`, `telefono`, `email`, `calificacion`, `personaje`, `recomienda`) VALUES
(1, 'Michell Klinger', '3014062595', 'michellklinger@gmail.com', '5', 'Daryl Dixon', 'Si, es muy entretenida');
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
