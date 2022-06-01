-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2022 a las 00:25:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_medico_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `obra_social` varchar(20) NOT NULL,
  `especialidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_medico`, `nombre`, `apellido`, `obra_social`, `especialidad`) VALUES
(1, 'Thurstan', 'Parvin', 'IOMA', 'Dermatologo'),
(2, 'Alexandr', 'Hansel', 'IOMA', 'Dermatologo'),
(3, 'Roderigo', 'Sheere', 'PAMI', 'Dermatologo'),
(4, 'Mei', 'Dewer', 'PAMI', 'Cardiologo'),
(5, 'Hansiain', 'Grinikhinov', 'PAMI', 'Cardiologo'),
(6, 'Kirby', 'Cowill', 'UNION PERSONAL', 'Cardiologo'),
(7, 'Ramonda', 'Humbatch', 'UNION PERSONAL', 'Cardiologo'),
(8, 'Cody', 'Crippin', 'OSDE', 'Pediatra'),
(9, 'Jo-anne', 'Durie', 'OSDE', 'Pediatra'),
(10, 'Tiebold', 'Le Provest', 'OSDE', 'Pediatra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `dni` int(11) NOT NULL,
  `nro_afiliado` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `obra_social` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`dni`, `nro_afiliado`, `nombre`, `apellido`, `telefono`, `email`, `direccion`, `obra_social`) VALUES
(21362591, 2147483647, 'Rollin', 'Damrell', '+967-923-606-1661', 'rdamrell1@bizjournals.com', '698 Corben Drive', 'PAMI'),
(22956227, 1992566847, 'Ezechiel', 'de Mendoza', '+996-510-380-4212', 'edemendoza8@dropbox.com', '188 Bultman Parkway', 'OSDE'),
(36703090, 2147483647, 'Der', 'Bruneau', '+420-648-949-5676', 'dbruneau5@ifeng.com', '3 Mosinee Terrace', 'IOMA'),
(42411291, 2147483647, 'Sydney', 'Spellecy', '+51-595-319-6687', 'sspellecy0@comcast.net', '1651 Goodland Crossing', 'PAMI'),
(62368455, 2147483647, 'Dom', 'Lesaunier', '+92-976-413-5727', 'dlesaunier9@vkontakte.ru', '24046 Fordem Trail', 'OSDE'),
(63061087, 2147483647, 'Floyd', 'Elcocks', '+33-571-427-9989', 'felcocks7@latimes.com', '5425 Rockefeller Avenue', 'IOMA'),
(65829008, 1635238096, 'Lolita', 'Juorio', '+86-188-107-7961', 'ljuorio3@diigo.com', '785 Sugar Drive', 'PAMI'),
(67667277, 2147483647, 'Ivor', 'Burgyn', '+62-131-606-2368', 'iburgyn6@paginegialle.it', '25287 Mitchell Avenue', 'IOMA'),
(84252921, 2147483647, 'Felike', 'McQuaid', '+86-510-935-1485', 'fmcquaid2@shinystat.com', '0 Maple Wood Center', 'PAMI'),
(94934131, 2147483647, 'Daniela', 'Curcher', '+55-447-125-3557', 'dcurcher4@eepurl.com', '28 Superior Avenue', 'IOMA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` bigint(20) UNSIGNED NOT NULL,
  `tipo_de_turno` char(1) NOT NULL,
  `horario` time NOT NULL,
  `fecha` date NOT NULL,
  `id_medico` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nro_afiliado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `tipo_de_turno`, `horario`, `fecha`, `id_medico`, `dni`, `nro_afiliado`) VALUES
(2, 'm', '21:00:00', '2022-06-29', 5, 22956227, 1992566847),
(4, 't', '22:30:00', '2022-06-24', 3, 84252921, 2147483647),
(5, 'm', '10:33:00', '2022-06-13', 3, 94934131, 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`dni`,`nro_afiliado`),
  ADD KEY `nro_afiliado` (`nro_afiliado`) USING BTREE;

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`),
  ADD UNIQUE KEY `id_turno` (`id_turno`),
  ADD KEY `id_medico` (`id_medico`) USING BTREE,
  ADD KEY `dni` (`dni`) USING BTREE,
  ADD KEY `nro_afiliado` (`nro_afiliado`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `nro_afiliado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `turno`
--
ALTER TABLE `turno`
  ADD CONSTRAINT `turno_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `turno_ibfk_2` FOREIGN KEY (`dni`) REFERENCES `paciente` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `turno_ibfk_3` FOREIGN KEY (`nro_afiliado`) REFERENCES `paciente` (`nro_afiliado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
