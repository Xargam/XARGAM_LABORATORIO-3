-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 10:17 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productos`
--
CREATE DATABASE IF NOT EXISTS `productos` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `productos`;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo_barra` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `path_foto` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `codigo_barra`, `nombre`, `path_foto`) VALUES
(1, 111, 'Avioncito', '2017-09-08_000000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `clave` varchar(8) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `clave`, `nombre`, `apellido`, `perfil`) VALUES
(5, 'da@gg.com', '454', 'Mario', 'Sanchez', 5),
(6, 'dd@gmail.com', '4567', 'Ema', 'Peralta', 3),
(8, 'modificado@gmail.com', '98999', 'Nombre(modificado)', 'Apellido(modificado)', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
