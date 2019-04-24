-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-04-2019 a las 08:13:39
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `UTN`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Envios`
--

CREATE TABLE `Envios` (
  `Numero` int(10) UNSIGNED NOT NULL,
  `pNumero` int(10) UNSIGNED NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `Envios`
--

INSERT INTO `Envios` (`Numero`, `pNumero`, `Cantidad`) VALUES
(100, 1, 500),
(100, 2, 1500),
(100, 3, 100),
(101, 2, 55),
(101, 3, 225),
(102, 1, 600),
(102, 3, 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE `Productos` (
  `pNumero` int(10) UNSIGNED NOT NULL,
  `pNombre` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Tamaño` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `Productos`
--

INSERT INTO `Productos` (`pNumero`, `pNombre`, `Precio`, `Tamaño`) VALUES
(2, 'Cigarrillos', 45.89, 'Mediano'),
(3, 'Gaseosa', 97.5, 'Grande'),
(4, 'Chocolate', 25.35, 'Chico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proveedores`
--

CREATE TABLE `Proveedores` (
  `Numero` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Domicilio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Localidad` varchar(80) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `Proveedores`
--

INSERT INTO `Proveedores` (`Numero`, `Nombre`, `Domicilio`, `Localidad`) VALUES
(100, 'Perez', 'Perón 876', 'Quilmes'),
(101, 'Gimenez', 'Mitre 750', 'Avellaneda'),
(102, 'Aguirre', 'Boedo 634', 'Bernal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Envios`
--
ALTER TABLE `Envios`
  ADD PRIMARY KEY (`Numero`,`pNumero`);

--
-- Indices de la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`pNumero`);

--
-- Indices de la tabla `Proveedores`
--
ALTER TABLE `Proveedores`
  ADD PRIMARY KEY (`Numero`);


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para la tabla Envios
--

--
-- Metadatos para la tabla Productos
--

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'UTN', 'Productos', '{\"sorted_col\":\"pNombre ASC ,Tama\\u00f1o ASC\"}', '2019-04-23 05:10:05');

--
-- Metadatos para la tabla Proveedores
--

--
-- Metadatos para la base de datos UTN
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
