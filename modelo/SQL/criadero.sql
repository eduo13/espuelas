-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2024 a las 17:11:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `criadero`
--
CREATE DATABASE IF NOT EXISTS `criadero` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `criadero`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `id_animal` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `fech_nacimiento` date NOT NULL,
  `sexo` varchar(6) NOT NULL,
  `esterilizado` varchar(2) DEFAULT NULL,
  `objetivo` varchar(20) NOT NULL,
  `id_familia` int(10) UNSIGNED NOT NULL,
  `id_ubicacion` int(10) UNSIGNED NOT NULL,
  `id_criador` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `animal`:
--   `id_familia`
--       `familia` -> `id_familia`
--   `id_ubicacion`
--       `ubicacion` -> `id_ubicacion`
--   `id_criador`
--       `criador` -> `id_criador`
--

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id_animal`, `nombre`, `raza`, `fech_nacimiento`, `sexo`, `esterilizado`, `objetivo`, `id_familia`, `id_ubicacion`, `id_criador`) VALUES
(1, 'El Refugio', 'Chileno', '2021-08-08', 'macho', 'no', 'rodeo', 1, 1, 1),
(2, 'El Furia', 'Chileno', '2018-05-20', 'macho', 'no', 'rodeo', 1, 2, 1),
(3, 'Vaca01', 'Hereford', '2022-10-20', 'hembra', 'no', 'carne', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal_vacunas`
--

CREATE TABLE `animal_vacunas` (
  `id_aniva` int(10) UNSIGNED NOT NULL,
  `fech_vacunacion` date NOT NULL,
  `id_animal` int(10) UNSIGNED NOT NULL,
  `id_vacunas` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `animal_vacunas`:
--   `id_animal`
--       `animal` -> `id_animal`
--   `id_vacunas`
--       `vacuna` -> `id_vacunas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criador`
--

CREATE TABLE `criador` (
  `id_criador` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `criador`:
--

--
-- Volcado de datos para la tabla `criador`
--

INSERT INTO `criador` (`id_criador`, `nombre`, `primer_apellido`, `segundo_apellido`, `dni`, `ciudad`, `password`, `imagen`) VALUES
(1, 'Gabriel', 'Morales', 'Cordova', '06601829R', 'Los Angeles', '$2y$10$jEAeT6DOsOf9R\\/6lim7gCOdXDg1ygnfCXrm9q9BQHh', NULL),
(2, 'eduardo', 'ruiz', 'conde', '43402731y', 'madrid', '$2y$10$Kv2TjYYiyT.h6b.RrMnS7eId2jJlYjCS1PPP6ImdjZxde/W///fyW', 'vista/img/sinfoto.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `id_familia` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `familia`:
--

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`id_familia`, `nombre`) VALUES
(1, 'Equino'),
(2, 'Bovino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_criador` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `ubicacion`:
--   `id_criador`
--       `criador` -> `id_criador`
--

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `nombre`, `id_criador`) VALUES
(1, 'Parcela', 1),
(2, 'El Porvenir ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `id_vacunas` int(10) UNSIGNED NOT NULL,
  `fech_vacunacion` date NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `vacuna`:
--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_animal`),
  ADD KEY `id_familia` (`id_familia`),
  ADD KEY `id_ubicacion` (`id_ubicacion`),
  ADD KEY `id_criador` (`id_criador`);

--
-- Indices de la tabla `animal_vacunas`
--
ALTER TABLE `animal_vacunas`
  ADD PRIMARY KEY (`id_aniva`),
  ADD KEY `id_animal` (`id_animal`),
  ADD KEY `id_vacunas` (`id_vacunas`);

--
-- Indices de la tabla `criador`
--
ALTER TABLE `criador`
  ADD PRIMARY KEY (`id_criador`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id_familia`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`),
  ADD KEY `id_criador` (`id_criador`);

--
-- Indices de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD PRIMARY KEY (`id_vacunas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `id_animal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `animal_vacunas`
--
ALTER TABLE `animal_vacunas`
  MODIFY `id_aniva` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `criador`
--
ALTER TABLE `criador`
  MODIFY `id_criador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `familia`
--
ALTER TABLE `familia`
  MODIFY `id_familia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_ubicacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  MODIFY `id_vacunas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`id_familia`) REFERENCES `familia` (`id_familia`),
  ADD CONSTRAINT `animal_ibfk_2` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`),
  ADD CONSTRAINT `animal_ibfk_3` FOREIGN KEY (`id_criador`) REFERENCES `criador` (`id_criador`);

--
-- Filtros para la tabla `animal_vacunas`
--
ALTER TABLE `animal_vacunas`
  ADD CONSTRAINT `animal_vacunas_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`),
  ADD CONSTRAINT `animal_vacunas_ibfk_2` FOREIGN KEY (`id_vacunas`) REFERENCES `vacuna` (`id_vacunas`);

--
-- Filtros para la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`id_criador`) REFERENCES `criador` (`id_criador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
