-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2023 a las 19:39:56
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--
CREATE DATABASE IF NOT EXISTS `veterinaria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `veterinaria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `dniAdmin` int(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`dniAdmin`, `nombre`, `psw`) VALUES
(123123, 'lud', '1231333'),
(42155646, 'bren', '123'),
(45145343, 'fran', '2345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(50) NOT NULL,
  `dniD` int(9) NOT NULL,
  `nombred` varchar(100) NOT NULL,
  `nombrep` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `sexop` char(1) NOT NULL,
  `tipop` varchar(3) NOT NULL,
  `castrado` varchar(2) NOT NULL,
  `anioNac` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `dniD`, `nombred`, `nombrep`, `domicilio`, `sexop`, `tipop`, `castrado`, `anioNac`) VALUES
(1, 465465, 'Emilio', 'Buddy', 'Avenida Mariano Acosta 2500, Riestra', 'M', 'Can', 'no', 2010),
(2, 3424, 'fRAN', 'Buddy', 'casa 123', 'H', 'can', 'si', 2004),
(3, 212131, 'bren', 'chanchi', 'hola123', 'H', 'can', 'si', 2021),
(4, 1123, 'Jessica', 'bony', 'san pedrito 2625', 'H', 'Fel', 'si', 2012);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`dniAdmin`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
