-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-06-2017 a las 00:09:42
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `f1History`
--
CREATE DATABASE IF NOT EXISTS `f1History` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `f1History`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `nom_carrera` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_carrera` date DEFAULT NULL,
  `circuit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `nom_carrera`, `data_carrera`, `circuit_id`) VALUES
(1, 'GP Australia 2017', '2017-03-26', 1),
(2, 'GP China 2017', '2017-04-09', 2),
(3, 'GP Bahréin 2017', '2017-04-16', 3),
(4, 'GP Rusia 2017', '2017-04-30', 4),
(5, 'GP España 2017', '2017-05-14', 5),
(6, 'GP de Mónaco 2017', '2017-05-28', 6),
(7, 'GP de Canadá 2017', '2017-06-11', 7),
(8, 'GP de Europa 2017', '2017-06-25', 8),
(9, 'GP de Austria 2017', '2017-07-09', 9),
(10, 'GP de Gran Bretaña 2017', '2017-07-16', 10),
(11, 'GP de Hungría 2017', '2017-07-30', 11),
(12, 'GP de Bélgica 2017', '2017-08-27', 13),
(13, 'GP de Italia 2017', '2017-09-03', 14),
(14, 'GP de Singapur 2017', '2017-09-17', 15),
(15, 'GP de Malasia 2017', '2017-10-01', 16),
(16, 'GP de Japón 2017', '2017-10-08', 17),
(17, 'GP de Estados Unidos 2017', '2017-10-22', 18),
(18, 'GP de México 2017', '2017-10-29', 19),
(19, 'GP de Brasil 2017', '2017-11-12', 20),
(20, 'GP de Abu Dhabi 2017', '2017-11-26', 21),
(21, 'GP de Australia 2016', '2016-03-20', 1),
(22, 'GP de Banhréin 2016', '2016-04-03', 3),
(23, 'GP de China 2016', '2016-04-17', 2),
(24, 'GP de Rusia 2016', '2016-05-01', 4),
(25, 'GP de España 2016', '2016-05-15', 5),
(26, 'GP de Mónaco 2016', '2016-05-29', 6),
(27, 'GP de Canadá 2016', '2016-06-12', 7),
(28, 'GP de Europa 2016', '2016-06-19', 8),
(29, 'GP de Austria 2016', '2016-07-03', 9),
(30, 'GP de Gran Bretaña 2016', '2016-07-10', 10),
(31, 'GP de Hungría 2016', '2016-07-24', 11),
(32, 'GP de Alemania 2016', '2016-07-31', 12),
(33, 'Gp de Bélgica 2016', '2016-08-28', 13),
(34, 'GP de Italia 2016', '2016-09-04', 14),
(35, 'GP de Singapur 2016', '2016-09-18', 15),
(36, 'GP de Malasia 2016', '2016-10-02', 16),
(37, 'GP de Japón 2016', '2016-10-09', 17),
(38, 'GP de Estados Unidos 2016', '2016-10-23', 18),
(39, 'GP de México 2016', '2016-10-30', 19),
(40, 'Gp de Brasil 2016', '2016-11-13', 20),
(41, 'GP de Abu Dhabi 2016', '2016-11-27', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `log_user_id` int(11) NOT NULL,
  `preuTotal` decimal(5,2) DEFAULT NULL,
  `dataCompra` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_has_products`
--

CREATE TABLE `carrito_has_products` (
  `carrito_id` int(11) NOT NULL,
  `producte_id` int(11) NOT NULL,
  `quantitat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circuit`
--

CREATE TABLE `circuit` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pais` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciutat` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitud` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `curves` int(11) DEFAULT NULL,
  `zones_activacio_DRS` int(11) DEFAULT NULL,
  `zones_deteccio_DRS` int(11) DEFAULT NULL,
  `voltes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `circuit`
--

INSERT INTO `circuit` (`id`, `nom`, `pais`, `ciutat`, `longitud`, `curves`, `zones_activacio_DRS`, `zones_deteccio_DRS`, `voltes`) VALUES
(1, 'Circuito Albert Park', 'Australia', 'Melbourne', '5,303 km', 16, 2, 1, 58),
(2, 'Shanghai International Circuit', 'China', 'Shanghai', '5,451 km', 16, 2, 2, 56),
(3, 'Circuito de Sakhir', 'Bahréin', 'Baehrin', '5,412 km', 15, 2, 2, 57),
(4, 'Sochi Autodrom', 'Rusia', 'Sochi', '5,872 km', 19, 2, 2, 52),
(5, 'Circuit de Montmeló', 'España', 'Barcelona', '4,655 km', 16, 2, 2, 66),
(6, 'Circuito de Montecarlo', 'Mónaco', 'Montecarlo', '3,340 km', 19, 1, 1, 78),
(7, 'Circuito Gilles-Villeneuve', 'Canadá', 'Montreal', '4,361', 12, 2, 1, 70),
(8, 'Baku City Circuit', 'Azerbaijan', 'Baku', '6,003 km', 20, 2, 1, 51),
(9, 'Red Bull Ring', 'Austria', 'Spielberg', '4,326', 10, 2, 2, 71),
(10, 'Silverstone Circuit', 'Gran Bretaña', 'Silverstone', '5,891 km', 18, 2, 2, 52),
(11, 'Circuito Hungaroring', 'Hungría', 'Budapest', '4,381', 14, 2, 1, 70),
(12, 'Hockenheimring', 'Alemania', 'Hockenheim', '4,574 km', 13, 2, 2, 67),
(13, 'Spa-Francorchamps', 'Bélgica', 'Francorchamps', '7,004 km', 19, 2, 2, 44),
(14, 'Autodromo di Monza', 'Italia', 'Monza', '5,793 km', 11, 2, 2, 53),
(15, 'Marina Bay', 'Singapur', 'Singapur', '5,073 km', 23, 2, 2, 61),
(16, 'Sepang', 'Malasia', 'Sepang', '5,543 km', 15, 2, 2, 56),
(17, 'Suzuka', 'Japón', 'Suzuka', '5,807 km', 18, 1, 1, 53),
(18, 'Austin', 'Estados Unidos', 'Austin', '5,513 km', 20, 2, 2, 56),
(19, 'Autódromo Hermanos Rodriguez', 'México', 'Ciudad de México', '4,304 km', 16, 2, 1, 71),
(20, 'Autódromo José Carlos Pace - Interlagos', 'Brasil', 'Sao Paulo', '4,309', 15, 2, 2, 71),
(21, 'Yas Marina', 'Emiratos Arabes Unidos', 'Abu Dhabi', '5,554', 21, 2, 2, 55),
(22, 'Nürburgring', 'Alemania', 'Nurburg', '4,574 km', 13, 2, 2, 67),
(23, 'Korean international circuit', 'Corea', 'Seul', '5,615 km', 18, 2, 2, 55),
(24, 'Buddh international Circuit', 'India ', 'Nueva Dheli', '5,125 km', 16, 2, 2, 60),
(25, 'Valencia Street Circuit', 'España', 'Valencia', '5,419 km', 26, 1, 1, 58),
(26, 'Istanbul Park', 'Turquía', 'Estambul', '5,338 km', 14, NULL, NULL, 58),
(27, 'Indianápolis', 'Estados Unidos', 'Indiana', '4,192 km', 13, NULL, NULL, 73),
(28, 'Nevers Magny-Cours', 'Francia', 'Nevers', '4,411 km', 17, NULL, NULL, 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacio`
--

CREATE TABLE `clasificacio` (
  `id` int(11) NOT NULL,
  `pilot_id` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `punts` int(11) DEFAULT NULL COMMENT 'Esta tabla representa la clasificación de cada piloto por cada carrera de cada temporada\nLa información que se mostrará serán el ID del piloto, el ID de la carrera y los puntos obtenidos por parte del piloto',
  `sancions` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clasificacio`
--

INSERT INTO `clasificacio` (`id`, `pilot_id`, `carrera_id`, `punts`, `sancions`) VALUES
(1, 1, 1, 25, NULL),
(2, 1, 2, 18, NULL),
(3, 1, 3, 25, NULL),
(4, 1, 4, 18, NULL),
(5, 1, 5, 18, NULL),
(6, 2, 1, 18, NULL),
(7, 2, 2, 25, NULL),
(8, 2, 3, 18, NULL),
(9, 2, 4, 12, NULL),
(10, 2, 5, 25, NULL),
(11, 3, 1, 15, NULL),
(12, 3, 2, 8, NULL),
(13, 3, 3, 15, NULL),
(14, 3, 4, 25, NULL),
(15, 3, 5, 0, NULL),
(16, 4, 1, 12, NULL),
(17, 4, 2, 10, NULL),
(18, 4, 3, 12, NULL),
(19, 4, 4, 15, NULL),
(20, 4, 5, 0, NULL),
(21, 6, 1, 0, NULL),
(22, 6, 2, 12, NULL),
(23, 6, 3, 10, NULL),
(24, 6, 4, 0, NULL),
(25, 6, 5, 15, NULL),
(26, 5, 1, 10, NULL),
(27, 5, 2, 15, NULL),
(28, 5, 3, 0, NULL),
(29, 5, 4, 10, NULL),
(30, 5, 5, 0, NULL),
(31, 7, 1, 6, NULL),
(32, 7, 2, 2, NULL),
(33, 7, 3, 6, NULL),
(34, 7, 4, 8, NULL),
(35, 7, 5, 12, NULL),
(36, 10, 1, 1, NULL),
(37, 10, 2, 1, NULL),
(38, 10, 3, 1, NULL),
(39, 10, 4, 6, NULL),
(40, 10, 5, 10, NULL),
(41, 8, 1, 8, NULL),
(42, 8, 2, 0, NULL),
(43, 8, 3, 8, NULL),
(44, 8, 4, 2, NULL),
(45, 8, 5, 0, NULL),
(46, 9, 1, 4, NULL),
(47, 9, 2, 6, NULL),
(48, 9, 3, 0, NULL),
(49, 9, 4, 1, NULL),
(50, 9, 5, 6, NULL),
(51, 11, 1, 0, NULL),
(52, 11, 2, 0, NULL),
(53, 11, 3, 2, NULL),
(54, 11, 4, 4, NULL),
(55, 11, 5, 8, NULL),
(56, 12, 1, 0, NULL),
(57, 12, 2, 0, NULL),
(58, 12, 3, 4, NULL),
(59, 12, 4, 0, NULL),
(60, 12, 5, 1, NULL),
(61, 15, 1, NULL, 'Carrera no disputada'),
(62, 15, 2, NULL, 'Carrera no disputada'),
(63, 15, 3, 0, NULL),
(64, 15, 4, 0, NULL),
(65, 15, 5, 4, NULL),
(66, 13, 1, 0, NULL),
(67, 13, 2, 4, NULL),
(68, 13, 3, 0, NULL),
(69, 13, 4, 0, NULL),
(70, 13, 5, 0, NULL),
(71, 14, 1, 2, NULL),
(72, 14, 2, 0, NULL),
(73, 14, 3, 0, NULL),
(74, 14, 4, 0, NULL),
(75, 14, 5, 2, NULL),
(76, 21, 1, 0, NULL),
(77, 21, 2, 0, NULL),
(78, 21, 3, 0, NULL),
(79, 21, 4, 0, NULL),
(80, 21, 5, 0, NULL),
(81, 16, 1, 0, NULL),
(82, 16, 2, 0, NULL),
(83, 16, 3, 0, NULL),
(84, 16, 4, 0, NULL),
(85, 16, 5, 0, NULL),
(86, 20, 1, 0, NULL),
(87, 20, 2, 0, NULL),
(88, 20, 3, 0, NULL),
(89, 20, 4, 0, NULL),
(90, 20, 5, 0, NULL),
(91, 17, 1, 0, NULL),
(92, 17, 2, 0, NULL),
(93, 17, 3, NULL, 'Carrera no disputada'),
(94, 17, 4, NULL, 'Carrera no disputada'),
(95, 17, 5, NULL, 'Carrera no disputada'),
(96, 18, 1, 0, NULL),
(97, 18, 2, 0, NULL),
(98, 18, 3, 0, NULL),
(99, 18, 4, 0, NULL),
(100, 18, 5, 0, NULL),
(101, 19, 1, 0, NULL),
(102, 19, 2, 0, NULL),
(103, 19, 3, 0, NULL),
(104, 19, 4, 0, NULL),
(105, 19, 5, 0, NULL),
(106, 1, 6, 25, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacionMundial`
--

CREATE TABLE `clasificacionMundial` (
  `id` int(11) NOT NULL,
  `temporada_any` year(4) NOT NULL,
  `pilot_id` int(11) NOT NULL,
  `AU` int(11) DEFAULT NULL,
  `CH` int(11) DEFAULT NULL,
  `BA` int(11) DEFAULT NULL,
  `RU` int(11) DEFAULT NULL,
  `ES` int(11) DEFAULT NULL,
  `MO` int(11) DEFAULT NULL,
  `CA` int(11) DEFAULT NULL,
  `VL` int(11) DEFAULT NULL,
  `AZ` int(11) DEFAULT NULL,
  `AT` int(11) DEFAULT NULL,
  `GR` int(11) DEFAULT NULL,
  `HU` int(11) DEFAULT NULL,
  `AL` int(11) DEFAULT NULL,
  `BE` int(11) DEFAULT NULL,
  `IT` int(11) DEFAULT NULL,
  `SG` int(11) DEFAULT NULL,
  `MA` int(11) DEFAULT NULL,
  `KO` int(11) DEFAULT NULL,
  `JA` int(11) DEFAULT NULL,
  `ND` int(11) DEFAULT NULL,
  `USA` int(11) DEFAULT NULL,
  `ME` int(11) DEFAULT NULL,
  `BR` int(11) DEFAULT NULL,
  `AB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clasificacionMundial`
--

INSERT INTO `clasificacionMundial` (`id`, `temporada_any`, `pilot_id`, `AU`, `CH`, `BA`, `RU`, `ES`, `MO`, `CA`, `VL`, `AZ`, `AT`, `GR`, `HU`, `AL`, `BE`, `IT`, `SG`, `MA`, `KO`, `JA`, `ND`, `USA`, `ME`, `BR`, `AB`) VALUES
(1, 2017, 1, 25, 18, 25, 18, 18, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2017, 2, 18, 25, 18, 12, 25, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2017, 3, 15, 8, 15, 25, 0, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2017, 4, 12, 10, 12, 15, 0, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 2017, 6, 0, 12, 10, 0, 15, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2017, 5, 10, 15, 0, 10, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2017, 7, 6, 2, 6, 8, 12, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2017, 10, 1, 1, 1, 6, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 2017, 8, 8, 0, 8, 2, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2017, 9, 4, 6, 0, 0, 6, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2017, 11, 0, 0, 2, 4, 8, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 2017, 12, 0, 0, 4, 0, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 2017, 15, NULL, NULL, 0, 0, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 2017, 13, 0, 4, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 2017, 14, 2, 0, 0, 0, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 2017, 21, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 2017, 16, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 2017, 20, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 2017, 17, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 2017, 18, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 2017, 19, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 2017, 30, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuderia_usuari`
--

CREATE TABLE `escuderia_usuari` (
  `scuderia_id` int(11) NOT NULL,
  `log_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `missatge` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moderat` enum('Si','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_user_id` int(11) NOT NULL COMMENT 'Tabla que almacenará los comentarios de cada usuario en el foro, Si en la columna moderated el valor es Y los comentarios serán mostrados en el foro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_user`
--

CREATE TABLE `log_user` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cognom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Datos del usuario y datos para iniciar sesión en el sistema, con ciertos privilegios dependiendo de su rol',
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_naixement` date DEFAULT NULL,
  `rol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `log_user`
--

INSERT INTO `log_user` (`id`, `nom`, `cognom`, `mail`, `password`, `data_naixement`, `rol`) VALUES
(1, 'Fernando', 'Duran', 'fduranruiz@gmail.com', 'e5d08a87b22bf55fd50d0a742ce36dc5', '1989-10-15', 'super'),
(2, 'Carlos', 'Garcia', 'cgarciagelabert@gmail.com', '1fc7886e841b9fbe48823181a563eee0', '1990-05-27', 'admin'),
(3, 'Alex', 'Duran', 'alexdan@gmail.com', 'e61af72e7b78fb54f193a8eca87dbe40', '0000-00-00', 'registrado'),
(4, 'Jose', 'Lloret', 'pacopecos23@gmail.com', '074cf0c1b40a9c24307aa5c7c9f92a3c', '0000-00-00', 'registrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mundial`
--

CREATE TABLE `mundial` (
  `any` int(11) NOT NULL,
  `pilot_id` int(11) NOT NULL,
  `scuderia_id` int(11) NOT NULL,
  `puntsPilot` int(11) DEFAULT NULL,
  `puntsScuderia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mundial`
--

INSERT INTO `mundial` (`any`, `pilot_id`, `scuderia_id`, `puntsPilot`, `puntsScuderia`) VALUES
(2007, 4, 2, 110, 205),
(2008, 2, 2, 98, 172),
(2009, 30, 3, 95, 153),
(2010, 1, 3, 256, 498),
(2011, 1, 3, 392, 650),
(2012, 1, 3, 281, 460),
(2013, 1, 3, 397, 596),
(2014, 2, 1, 384, 701),
(2015, 2, 1, 381, 703),
(2016, 22, 1, 385, 765);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilot`
--

CREATE TABLE `pilot` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `sigles` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `data_naixement` date DEFAULT NULL,
  `pes` int(11) DEFAULT NULL,
  `altura` int(11) DEFAULT NULL,
  `punts_totals` int(11) DEFAULT NULL,
  `carreres_totals` int(11) DEFAULT NULL,
  `primera_escuderia` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nacionalitat` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `any_debut` int(11) DEFAULT NULL,
  `total_voltes_rapides` int(11) DEFAULT NULL,
  `victories` int(11) NOT NULL,
  `titols` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `pilot`
--

INSERT INTO `pilot` (`id`, `nom`, `sigles`, `data_naixement`, `pes`, `altura`, `punts_totals`, `carreres_totals`, `primera_escuderia`, `nacionalitat`, `any_debut`, `total_voltes_rapides`, `victories`, `titols`) VALUES
(1, 'Sebastian Vettel', 'VET', '1987-07-03', 64, 175, 2108, 179, 'BMW Sauber', 'Alemania', 2007, 28, 42, 4),
(2, 'Lewis Hamilton', 'HAM', '1985-01-07', 66, 174, 2247, 188, 'McLaren', 'Gran Bretaña', 2007, 31, 53, 3),
(3, 'Valtteri Bottas', 'BOT', '1989-08-28', 70, 173, 411, 78, 'Williams', 'Finlandia', 2013, 1, 0, 0),
(4, 'Kimi Räikkönen', 'RAI', '1979-10-05', 62, 175, 1360, 253, 'Sauber', 'Finlandia', 2001, 43, 20, 1),
(5, 'Max Verstappen', 'VES', '1997-09-30', 67, 180, 253, 40, 'Toro Rosso', 'Bélgica', 2015, 1, 1, 0),
(6, 'Daniel Ricciardo', 'RIC', '1989-07-01', 64, 175, 616, 109, 'HRT', 'Australia', 2011, 8, 4, 0),
(7, 'Sergio Pérez', 'PER', '1990-01-26', 63, 173, 367, 116, 'Sauber', 'México', 2011, 2, 0, 0),
(8, 'Felipe Massa', 'MAS', '1981-04-25', 59, 166, 1124, 252, 'Sauber', 'Brasil', 2002, 15, 11, 0),
(9, 'Carlos Sainz', 'SAI', '1994-09-01', 72, 178, 64, 40, 'Toro Rosso', 'España', 2015, 0, 0, 0),
(10, 'Esteban Ocon', 'OCO', '1996-09-17', 66, 186, 0, 9, 'Manor', 'Francia', 2016, 0, 0, 0),
(11, 'Nico Hülkenberg', 'HUL', '1987-08-19', 74, 184, 362, 117, 'Williams', 'Alemania', 2010, 2, 0, 0),
(12, 'Romain Grosjean', 'GRO', '1986-04-17', 71, 180, 316, 105, 'Renault', 'Francia', 2009, 1, 0, 0),
(13, 'Kevin Magnussen', 'MAG', '1992-10-05', 68, 174, 62, 41, 'McLaren', 'Dinamarca', 2014, 0, 0, 0),
(14, 'Daniil Kvyat', 'KVY', '1994-04-26', 58, 175, 128, 59, 'Toro Rosso', 'Rusia', 2014, 0, 0, 0),
(15, 'Pascal Wehrlein', 'WEH', '1994-10-18', 70, 175, 1, 21, 'Manor', 'Alemania', 2016, 0, 0, 0),
(16, 'Lance Stroll', 'STR', '1998-10-29', 70, 182, 0, 6, 'Williams', 'Canadá', 2017, 0, 0, 0),
(17, 'Antonio Giovinazzi', 'GIO', '1993-12-14', 70, 183, 0, 2, 'Sauber', 'Italia', 2017, 0, 0, 0),
(18, 'Jolyon Palmer', 'PAL', '1991-01-20', 78, 183, 1, 25, 'Renault', 'Gran Bretaña', 2015, 0, 0, 0),
(19, 'Stoffel Vandoorne', 'VAN', '1992-03-26', 67, 177, 1, 5, 'McLaren', 'Bélgica', 2016, 0, 0, 0),
(20, 'Fernando Alonso', 'ALO', '1981-07-29', 68, 171, 1832, 273, 'Minardi', 'España', 2001, 22, 32, 2),
(21, 'Marcus Ericcson', 'ERI', '1990-09-02', 63, 180, 9, 56, 'Caterham', 'Suecia', 2014, 0, 0, 0),
(22, 'Nico Rosberg', 'ROS', '1985-06-27', 71, 178, 1594, 206, 'Williams', 'Alemania', 2006, 20, 23, 1),
(23, 'Felipe Nasr', 'NAS', '1992-08-21', 68, 175, 29, 40, 'Sauber', 'Brasil', 2015, 0, 0, 0),
(24, 'Esteban Gutiérrez', 'GUT', '1991-08-05', 61, 180, 6, 59, 'Sauber', 'México', 2013, 0, 0, 0),
(25, 'Rio Haryanto', 'HAR', '1993-01-22', 58, 170, 0, 12, 'Manor', 'Indonesia', 2016, 0, 0, 0),
(26, 'Alexander Rossi', 'RSI', '1991-09-25', 70, 187, 0, 5, 'Manor', 'Estados Unidos', 2015, 0, 0, 0),
(27, 'Will Stevens', 'STE', '1991-06-28', 63, 171, 0, 18, 'Caterham', 'Gran Bretaña', 2014, 0, 0, 0),
(28, 'Roberto Merhi', 'MER', '1991-03-22', 76, 179, 0, 13, 'Manor', 'España', 2015, 0, 0, 0),
(29, 'Pastor Maldonado', 'MAL', '1985-03-10', 63, 173, 49, 77, 'Williams', 'Venezuela', 2011, 0, 1, 0),
(30, 'Jenson Button', 'BUT', '1980-01-19', 70, 182, 1235, 307, 'Williams', 'Gran Bretaña', 2000, 8, 15, 1),
(31, 'jean-Eric Vergne', 'VER', '1990-04-25', 69, 182, 51, 58, 'Toro Rosso', 'Francia', 2012, 0, 0, 0),
(32, 'Jules Bianchi', 'BIA', '1989-08-03', 68, 179, 2, 34, 'Marussia', 'Francia', 2013, 0, 0, 0),
(33, 'Adrian Sutil', 'SUT', '1983-01-11', 75, 183, 124, 128, 'Spyker', 'Alemania', 2001, 1, 0, 0),
(34, 'Max Chilton', 'CHI', '1991-04-21', 64, 181, 0, 35, 'Marussia', 'Gran Bretaña', 2013, 0, 0, 0),
(35, 'Kamui Kobayashi', 'KOB', '1986-09-13', 58, 168, 125, 76, 'Toyota', 'Japón', 2009, 1, 0, 0),
(36, 'André Lotterer', 'LOT', '1981-11-19', 70, 185, 0, 1, 'Caterham', 'Alemania', 2014, 0, 0, 0),
(37, 'Mark Webber', 'WEB', '1976-08-23', 75, 184, 1047, 216, 'Minardi', 'Australia', 2002, 19, 9, 0),
(38, 'Paul Di Resta', 'DIR', '1986-04-16', 74, 186, 121, 58, 'Force India', 'Gran Bretaña', 2011, 0, 0, 0),
(39, 'Charles Pic', 'PIC', '1990-02-15', 64, 178, 0, 39, 'Marussia', 'Francia', 2012, 0, 0, 0),
(40, 'Heikki Kovalainen', 'KOV', '1981-10-07', 66, 172, 115, 110, 'Renault', 'Finlandia', 2007, 1, 1, 0),
(41, 'Giedo Van Der Garde', 'VDG', '1985-04-25', 73, 182, 0, 19, 'Caterham', 'Holanda', 2013, 0, 0, 0),
(42, 'Michael Shucaher', 'MSC', '1969-01-03', 75, 174, 1369, 250, 'Jordan', 'Alemania', 1991, 77, 91, 7),
(43, 'Bruno Senna', 'SEN', '1983-10-15', 69, 180, 33, 46, 'HRT ', 'Brasil', 2010, 1, 0, 0),
(44, 'Vitaly Pretov', 'PET', '1984-09-18', 74, 185, 64, 58, 'Renault', 'Rusia', 2010, 1, 0, 0),
(45, 'Timo Glock', 'GLO', '1982-03-18', 64, 169, 51, 92, 'Jordan', 'Alemania', 2004, 1, 0, 0),
(46, 'Jérome d\'Ambrosio', 'DAM', '1985-12-27', 62, 172, 0, 19, 'Virgin', 'Bélgica', 2011, 0, 0, 0),
(47, 'Pedro De La Rosa', 'DLR', '1971-02-24', 74, 177, 35, 104, 'Arrows', 'España', 1999, 1, 0, 0),
(48, 'Narai Karthikeyan', 'KAR', '1977-01-14', 60, 168, 5, 46, 'Jordan', 'India', 2005, 0, 0, 0),
(49, 'Nick Heifeld', 'HEI', '1977-05-06', 58, 167, 259, 184, 'Prost', 'Alemania', 2000, 2, 0, 0),
(50, 'Jaime Alguersuari', 'ALG', '1990-03-23', 70, 181, 31, 46, 'Toro Rosso', 'España', 2009, 0, 0, 0),
(51, 'Sébastien Buemi', 'BUE', '1998-10-31', 69, 177, 29, 55, 'Toro Rosso', 'Suiza', 2009, 0, 0, 0),
(52, 'Rubens Barrichello', 'BAR', '1972-05-15', 68, 172, 658, 322, 'Jordan', 'Brasil', 1993, 17, 11, 0),
(53, 'Jarno Trulli', 'TRU', '1974-07-13', 60, 173, 246, 255, 'Minardi', 'Italia', 1997, 1, 1, 0),
(54, 'Vitantonio Liuzzi', 'LIU', '1981-08-06', 68, 169, 26, 80, 'Red Bull', 'Italia', 2005, 0, 0, 0),
(55, 'Karun Chandhok', 'CHD', '1984-01-19', 67, 173, 0, 11, 'HRT', 'India', 2010, 0, 0, 0),
(56, 'Robert Kubica', 'KUB', '1984-12-07', 73, 184, 273, 80, 'BMW Sauber', 'Polonia', 2006, 1, 1, 0),
(57, 'Lucas Di Grassi', 'DIG', '1984-08-11', 75, 180, 0, 19, 'Virgin', 'Brasil', 2010, 0, 0, 0),
(58, 'Sakon Yamamoto', 'YAM', '1982-07-09', 63, 172, 0, 15, 'Super Auguri', 'Japón', 2006, 0, 0, 0),
(59, 'Christian Klien', 'KLI', '1983-02-07', 69, 168, 14, 51, 'Jaguar', 'Austria', 2004, 0, 0, 0),
(60, 'Luca Badoer', 'BAD', '1971-01-25', 58, 170, 0, 58, 'BMS Scuderia', 'Italia', 1993, 0, 0, 0),
(61, 'Giancarlo Fisichella', 'FIS', '1973-01-14', 66, 172, 226, 174, 'Minardi', 'Italia', 1996, 1, 3, 0),
(62, 'Nelson Piquet Jr.', 'PIQ', '1985-07-25', 70, 178, 19, 28, 'Renault', 'Brasil', 2008, 0, 0, 0),
(63, 'Kazuki Nakajima', 'NAK', '1985-01-11', 62, 175, 9, 36, 'Williams', 'Japón', 2007, 0, 0, 0),
(64, 'Sebastien Bourdais', 'BOU', '1979-02-24', 72, 178, 6, 27, 'Toro Rosso', 'Francia', 2008, 0, 0, 0),
(65, 'David Coulthard', 'COU', '1971-03-27', 73, 182, 535, 247, 'Williams', 'Gran Bretaña', 1994, 17, 13, 0),
(66, 'Takuma Sato', 'SAT', '1977-01-28', 60, 163, 44, 94, 'Jordan', 'Japón', 2002, 0, 0, 0),
(67, 'Anthony Davidson', 'DAV', '1979-04-18', 56, 165, 0, 24, 'Minardi', 'Gran Bretaña', 2002, 0, 0, 0),
(68, 'Alexander Wurz', 'WUR', '1974-02-15', 72, 184, 45, 69, 'Benetton', 'Austria', 1997, 0, 0, 0),
(69, 'Scott Speed', 'SPE', '1983-01-24', 69, 177, 0, 28, 'Toro Rosso', 'Estados Unidos', 2006, 0, 0, 0),
(70, 'Christijan Albers', 'ALB', '1979-04-16', 68, 173, 4, 46, 'Minardi', 'Países Bajos', 2005, 0, 0, 0),
(71, 'Markus Winkelhock', 'WIN', '1980-06-13', 70, 180, 0, 1, 'Spyker', 'Alemania', 2007, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilot_usuari`
--

CREATE TABLE `pilot_usuari` (
  `pilot_id` int(11) NOT NULL,
  `log_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producte`
--

CREATE TABLE `producte` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcio` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preu` decimal(5,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scuderia`
--

CREATE TABLE `scuderia` (
  `id` int(11) NOT NULL,
  `nomEscuderia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seu` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `debut` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `scuderia`
--

INSERT INTO `scuderia` (`id`, `nomEscuderia`, `seu`, `debut`) VALUES
(1, 'Mercedes AMG Petronas F1 Team', 'Brackley, Gran Bretaña', 1954),
(2, 'Scuderia Ferrari', 'Maranello. Italia', 1950),
(3, 'Red Bull Racing', 'Milton Keynes, Gran Bretaña', 2005),
(4, 'Sahara Force India F1 Team', 'Silverstona, Gran Bretaña', 2008),
(5, 'Scuderia Toro Rosso', 'Faenza, Italia', 2006),
(6, 'Williams Martini Racing', 'Grove, Gran Bretaña', 1975),
(7, 'Renault Sport F1 Team', 'Estone, Gran Bretaña', 1977),
(8, 'Haas F1 Team', 'Kannapolis, Estados Unidos', 2016),
(9, 'Sauber F1 Team', 'Hinwil, Suiza', 1993),
(10, 'McLaren Honda', 'Woking, Gran Bretaña', 1966),
(11, 'HRT F1 Team', 'Madrid, España', 2010),
(12, 'Manor Racing', 'Banbury, Gran Bretaña', 2012),
(13, 'Caterham F1 Team', 'Leafield, Gran Bretaña', 2012),
(14, 'Honda Racing F1', 'Brackley, Reino Unido', 1964),
(15, 'Super Aguri F1 Team', 'Tokio, Japón y Leafield, Reino Unido', 2006),
(16, 'Toyota Racing', 'Colonia, Renania del Norte-Westfalia, Alemania y Toyota, Aichi, Japón', 2002),
(17, 'Spyker F1 Team', 'Silverstone, Northamtonshire, Reino Unido', 2007);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporada`
--

CREATE TABLE `temporada` (
  `any` year(4) NOT NULL,
  `reglametn` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `temporada`
--

INSERT INTO `temporada` (`any`, `reglametn`) VALUES
(2007, 'REGLAMENTO DEPORTIVO\r\n\r\nArtículo 19: Tercer piloto, pero no tercer auto. \"Cada escudería podrá hacer rodar a un tercer piloto en los P1 y P2 (ensayos libres 1 y 2)\". No habrá por lo tanto un tercer auto para ninguna de las escuderías inscritas y el tercer piloto deberá utilizar uno de los dos autos que participarán en la prueba el fin de semana. El papel de este tercer piloto se verá reducido ya que las escuderías preferirán aparentemente dejar a los titulaires afinar su puesta a punto personal y familiarizarse con la pista.\r\n\r\nArtículo 25: Marca única de neumáticos. \"La marca (Bridgestone) debe equipar al 100% de las escuderías inscritas (...) y suministrar a todos estos equipos neumáticos en cantidad y calidad iguales durante todo el año\". Cada piloto abordará el fin de semana de carrera con 14 trenes de neumáticos de seco, 5 de lluvia y 4 de lluvia extrema. En cada fin de semana de gran premio, Bridgestone suministrará dos especificidades de goma para seco: una goma dura y otra blanda. Cada una de estas dos especificidades retenidas por gran premio debe además ser \"fácilmente distinguida la una de la otra cuando el auto esté en pista\". La FIA quiere de este modo que Bridgestone marque los neumáticos con el fin de que los espectadores y telespectadores puedan en todo momento conocer la estrategia del equipo en materia de neumáticos. El viernes, al término del P1 y P2, cada piloto deberá devolver dos trenes de cada especificidad \"seco\". Y abordará el P3 (ensayos libres 3) el sábado con 10 trenes \"seco\" pero deberá todavía devolver \"un tren de cada especificidad +seco+ antes del inicio de las calificaciones\". Aunque cada piloto sólo tendrá a su disposición cuatro trenes de neumáticos \"blandos para seco\" y cuatro trenes de neumáticos \"duros para seco\" para las calificaciones y el gran premio. Y durante la carrera, \"cada piloto debe utilizar al menos un tren de cada una de las dos especificidades +seco+.\" Esta última medida conlleva una dosis de azar, ya que los monoplazas serán puestos a punto con el fin de funcionar lo mejor posible con uno de los tipos de gomas y su funcionamiento con el segundo será por lo tanto más aleatorio.\r\n\r\nArtículo 28: Un motor para dos fines de semana... acortados. Como en 2006, los motores deberán aguantar durante dos fines de semana de gran premio. Pero contrariamente al año pasado, la jornada del viernes no contará en \"el fin de semana de carrera\" y será por tanto una verdadera jornada de ensayos privados.\r\n\r\nArtículo 32: Ampliación de P1 y P2. Cada una de las dos primeras sesiones de ensayos libres del viernes pasa de 60 a 90 minutos. La duración de P3 sigue siendo de 60 minutos.\r\n\r\nApéndice 4: Motor con las características de finales de 2006. Para las temporadas 2007 a 2010 incluidas, los motores utilizados por las escuderías serán aquellos cuyas especificidades existieron en el Gran Premio de China de 2006. Sólo las modificaciones periféricas en bloque podrán ser aportadas durante el período 2007-2010, salvo acuerdo de la FIA para roturas crónicas.\r\n\r\nREGLAMENTO TECNICO\r\n\r\nArtículo 4: Peso mínimo aumentado en 5 kg. \"El peso mínimo del auto no debe ser inferior a 605 kg en todo momento de la prueba (P1, P2, P3, Q y GP)\". Antes, el peso mínimo era de 600 kg, con excepción de las calificaciones, donde era de 605 kg.\r\n\r\nArtículo 5: Motor limitado. Los motores homologados por la FIA en su última versión serán limitados a 19.000 revoluciones por minuto, lo que equivale a un pérdida de 900 revoluciones por minuto para los mejores.'),
(2008, 'Reglamento Técnico, artículo 5; Reglamento Deportivo, artículo 28.5:\r\n“Al igual que en 2007, sólo podrán ser utilizados los motores homologados en el campeonato 2008. Para la nueva temporada, la homologación se ha ampliado para incluir todos los elementos descritos en los artículos 5.4 y 5.17 del Reglamento Técnico. Piezas incluidas en el artículo 5.17 pueden ser cambiadas sin penalización alguna, pero sólo por componentes de diseño idéntico. La duración del período de homologación del motor es probable que sea de cinco años y los competidores podrán hacer ahora un único cambio de motor durante la temporada sin que se les imponga sanción en la parrilla. Sin embargo, este cambio sólo se podrá hacer en caso de auténtico fracaso”.\r\n\r\nIMPACTO: La extensión de la cobertura de homologación es un paso lógico a partir de la etapa de homologación que se inició en 2007. La homologación de motores auxiliares, además de los propios V8 impide a los equipos desviar demasiados recursos a esta característica del coche, aunque si se puede trabajar sobre determinadas piezas, tales como el desarrollo en la mejora de las bombas de combustible. El primer cambio de motor libre de penalización es un cambio significativo en las normas, pero no pueden ser explotados como un “comodín” debido al hecho de que debe ser el resultado de un verdadero fallo técnico.\r\n\r\n\r\nReglamento Técnico, artículo 8.2:\r\n“8.2 Control de la electrónica:\r\n8.2.1. Todos los componentes del motor y caja de cambios, incluyendo el embrague, diferencial y todas las piezas asociadas deben ser controladas por una Unidad de Control Electrónico (ECU), que ha sido fabricado por un proveedor designado por la FIA y con una especificación determinada por la FIA. El ECU sólo se podrá utilizar con software aprobado por la FIA y sólo podrá ser conectados al sistema de control de red, cuyo cableado, sensores y componentes están especificados por la FIA.”\r\n\r\nIMPACTO: La introducción del Microsoft-MES SECU (Unidad de Control Electrónico Estándar) marca un cambio significativo para el ING Renault F1 Team, que anteriormente utilizaban el Magneti-Marelli Versión 11. En términos técnicos, la SECU es tan potente como el sistema de salida, con una cuarta parte de la memoria. El equipo SECU está compuesto de seis unidades, con un aumento de peso de más del 35 por ciento con respecto al sistema anterior. La introducción del SECU elimina una serie de sistemas de control, incluyendo el control de tracción y el EBS (sistema de frenado de motor). En total, la pérdida de estos sistemas tendrá un coste de hasta 0.4s por vuelta.\r\n\r\nReglamento Técnico, artículo 13.1.1:\r\n“Una revisión de la parte superior del cockpit que da acceso a los pilotos para 2008 da una mayor protección lateral a la cabeza de los pilotos en comparación con el diseño usado en 2007. El borde superior del chasis se encuentra ahora 655mm por encima del plano de referencia (aproximadamente 20 mm por encima del punto más alto en 2007) y mantiene esta altura máxima a lo largo de una longitud de 270mm. La protección de la cabeza resultante es mayor que la de los años anteriores”.\r\n\r\nIMPACTO: El nuevo componente de protección fue introducido para reducir el riesgo de lesiones al conductor en caso de que un coche pase sobre otro, a raíz del incidente en el Gran Premio de Australia 2007. Este cambio ha llevado al equipo a prestar una atención especial en la colocación de los espejos retrovisores para garantizar la máxima visibilidad. Esta modificación de las normas es un ejemplo más de la filosofía de la FIA por mantener la Fórmula 1 a la cabeza de los deportes de motor y seguridad automotriz.\r\n\r\nReglamento Técnico, artículo 15.1:\r\n“El listado de los materiales permitidos pueden encontrarse en el Apéndice de este reglamento.”\r\n\r\nIMPACTO: La restricción de materiales en vigor a partir de 2008 significa que los coches se deben construir a partir de una lista de materiales aprobados. Esto elimina algunos de los más exóticos y caros materiales que se están utilizando en pequeñas cantidades por algunos equipos, sin obligar a los constructores a tener que retroceder en la tecnología. Esta restricción ha sido diseñada para prevenir la desviación de gastos en áreas que cuentan con poco retorno económico, al igual que el resto de las restricciones impuestas en dicha normativa.\r\n\r\nReglamento Técnico, artículo 19.4.5:\r\n“Un mínimo de 5,75 por ciento (m/m) del combustible debe estar compuesto por derivados de fuentes biológicas. El porcentaje por el que cada componente está considerado de provenir por una fuente biológica es calculado desde la proporción relativa de peso molecular contribuido por el material biológico inicial”.\r\n\r\nIMPACTO: El combustible de la Fórmula 1 ha sido estrictamente regulado desde 1993, cuando la FIA impuso combustible sin plomo en cumplimiento de la norma Euro 95 que se aplica a la bomba de combustible para los coches normales de carretera. Antes de 1992, la Fórmula 1 venía utilizando combustible con plomo con puntuaciones de muy alto octanaje para obtener la máxima potencia. Desde que se especificó el uso de “bombas de combustible”, la FIA se ha asegurado que las carreras de Fórmula 1 operen con antelación a las normas en vigor para la producción de automóviles de calle. La introducción de un pequeño porcentaje de biocombustibles anticipa la norma que a partir de 2010 los coches normales de carretera deberán cumplir.'),
(2009, 'Neumáticos Tras diez temporadas con neumáticos rayados, la Fórmula 1 recupera los clásicos slicks (lisos) para mejorar el agarre de los monoplazas. De esta forma, se logrará incrementar la adherencia al asfalto en un 20%. Sin embargo, esa ventaja contratasta con la reducción de algunos elementos aerodinámicos que se deberán aplicar a partir de esta temporada. En general, estos cambios tendrán mayor importancia en la velocidad durante las curvas, que será menor. Sistema de Recuperación de Energía Cinética (KERS) Los equipos de la parrilla tendrán la opción de utilizar el denominado KERS para mejorar el comportamiento de los monoplazas. El KERS acumula la energía cinética generada en las frenadas y la pone a disposición del piloto para aumentar hasta un máximo de 80 c.v. la potencia de los monoplazas durante siete segundos. Esto podría suponer varias décimas por vuelta, aunque también será importante evaluar el peso adicional que supone el KERS para un coche. Motores Una de las principales novedades en los motores es que serán limitados a un máximo de 18.000 r.p.m. (1.000 menos que la pasada temporada). Además, las escuderías sólo podrán usar ocho motores por temporada más otros cuatro para entrenamientos y pruebas. Cualquier cambio al margen de esta norma supondrá una penalización de diez puestos en la parrilla de salida o bien una salida desde boxes si el cambio se produce durante la clasificación. Aerodinámica Al margen de la novedad de los slicks, los cambios aerodinámicos protagonizan la nueva normativa para 2009. La reducción de la carga aerodinámica se verá reducida de modo que habrá más igualdad entre coches y será más fácil adelantar. Algo que dotará de mayor espectáculo a la competición. Pruebas Durante todo 2009 estarán prohibidas las pruebas privadas (desde una semana antes del primer Gran Premio hasta el 31 de diciembre). Además, en las oficiales no se podrán exceder los 15.000 kilómetros por monoplaza. Safety car (coche de seguridad) El pit lane permanecerá abierto siempre que el coche de seguridad esté en pista, de modo que cualquier piloto podrá entrar a repostar cuando quiera y sin penalización. Sin embargo, para evitar que los equipos se aprovechen de está circunstancia, todos los monoplazas que estén en pista tendrán que activar el modo \'coche de seguridad\' y serán avisados a través de la centralita del tiempo que les queda para poder entrar en boxes. Si un piloto entra más tarde, será penalizado.\r\n\r\nVer más en: http://www.20minutos.es/deportes/noticia/normativa-formula-1-2009-459001/0/#xtor=AD-15&xts=467263'),
(2010, 'TOPE DE PRESUPUESTO VOLUNTARIO DE 40 MILLONES DE LIBRAS\n\nLa medida más polémica y peligrosa es el límite voluntario de presupuesto. Revisado de los 30 millones de libras de la idea inicial a 40 (44,4 millones de Euros), en este presupuesto no entrarían los gastos en motores, el sueldo de los pilotos, las acciones de marketing, los hospitalities, las multas de la FIA y lo que los equipos demuestren que no tiene efecto en el rendimiento del coche en pista.\n\nLos equipos que acepten este límite presupuestario tendrán ventajas técnicas como aerodinámica ajustable y no tener límite de revoluciones en el motor. Tampoco tendrán restricciones en el uso del túnel de viento y podrán entrenar sin límite fuera de la temporada de competición.\n\nTambién se ha anunciado que el número máximo de coches admitidos en el campeonato pasará de 24 a 26.\n\nSi, como hemos visto esta temporada, la FIA es incapaz de gestionar un campeonato con un reglamento igual para todos, no quiero ni pensar lo que puede pasar con dos reglamentos diferentes. Por ello, muchos equipos se han manifestado en contra de esta medida. Por no decir que los equipos grandes no pueden desprenderse de la mayoría de sus empleados de un año para otro.\n\nPROHIBICIÓN DE REPOSTAR GASOLINA EN CARRERA Y DE CALENTADORES DE NEUMÁTICOS\n\nCon la intención de recortar gastos e incentivar que los motoristas de los equipos se esfuercen en bajar el consumo de sus coches (para comenzar la carrera con menos peso), repostar gasolina estará prohibido en carrera.\n\nLos calentadores de neumáticos y cualquier dispositivo para mantener o aumentar la temperatura de los mismos también estarán prohibidos. En los tests de pretemporada algunos equipos probaron esta norma y el agarre en la primera vuelta tras salir de boxes con los neumáticos fríos era muy bajo, casi temerario, realizando tiempos 8 o 10 segundos más lentos que con los neumáticos en temperatura correcta.\n\nAUMENTO DEL PESO MÍNIMO DE 605 a 620 KG.\n\nCon el fin de reducir la desventaja de los pilotos más altos, como Robert Kubica, que al montar el Kers no pueden jugar con el lastre del coche para mejorar su equilibrio, la FIA ha decidido aumentar el peso mínimo de los coches de los 605 actuales a 620Kg.'),
(2011, 'KERS\r\n\r\nDespués de la tímida aparición en el año 2009, el KERS vuelve con fuerza y parece que gran parte de las escuderías van a equiparlo. En cuanto a su reglamentación no hay muchos cambios. La potencia de éste es de 60 KW (81,5 cv) y la energía liberada en una vuelta no deberá superar los 400 KJ. Suponiendo que funcione al máximo, liberará esta energía en 6,67s.\r\n\r\nALERÓN TRASERO MÓVIL\r\n\r\nCómo ya sabemos, el F-Duct desaparece. El artículo 3.9.1 prohíbe que la aleta de tiburón llegue a contactar con el alerón trasero y por otro lado también se prohíbe que el ala trasera pueda tener ranuras, elemento básico para el funcionamiento del F-Duct que conocemos.\r\n\r\nAun hay más del alerón trasero, la FIA ha querido limitar el espesor de los dos soportes laterales que aguantan al alerón en 25 mm cada uno y también su situación.\r\n\r\nFinalmente, también se incluye la normativa que hará referencia a los nuevos alerones traseros ajustables. El perfil principal (el inferior) debe mantenerse fijo, mientras el que va a moverse es el superior. Va a moverse respecto a un eje horizontal situado como máximo a 20 mm de la parte alta y a no más de 20 mm de la parte trasera del alerón. De este modo se consigue que la separación entre ambos perfiles sea de 10 mm a 50 mm, según si está en configuración normal o en configuración de adelantamiento.\r\n\r\nPara describir el funcionamiento del DRS (siglas del inglés: Drag Reduction System) debemos diferenciar entre situación de carrera y las otras situaciones. En el caso de la carrera, es como ya habíamos avanzado: se podrá activar una vez el coche esté a un segundo del de delante y se va a desactivar automáticamente al pisar el freno. No podrá ser usado en las dos primeras vueltas ni tras un período de Safety-Car. Para controlar cuando puede utilizarse, se instalara un sistema electrónico que lo gestionará.\r\n\r\nEn calificación y entrenamientos el sistema podrá ser usado libremente por el piloto con el objetivo de conseguir una buena adaptación.\r\n\r\nNEUMÁTICOS\r\n\r\nOtro punto importante es la entrada de Pirelli como único suministrador de neumáticos de la categoría. Con esto también llega una distribución de peso obligatoria de 45,5% del peso delante y de 54,5% detrás. Explicado con detalle en el artículo 4.2 que hace referencia a la distribución de pesos. Además del cambio de distribución, también se ha aumentado el peso mínimo hasta los 640 kg con motivo del KERS.\r\n\r\nCada piloto dispondrá de 11 juegos de neumáticos para todo el fin de semana. Los pilotos que disputen la Q3 deberán empezar la carrera con los neumáticos con los que hayan logrado su mejor tiempo. Durante la carrera todos los pilotos deberán utilizar, como mínimo, una vez los diferentes compuestos que Pirelli ponga a su disposición. Como vemos, esto no ha cambiado respecto el año pasado.\r\n\r\nPOSICIÓN DE LOS ESPEJOS\r\n\r\nDespués de que algunos coches colocaran sus espejos retrovisores fuera de la carrocería (el motivo de esta posición es que interferían menos en la aerodinámica general del monoplaza) la FIA decidió modificar la normativa al considerar insegura esa posición de los espejos.\r\n\r\nTal y como dice el artículo 14.3.3: todas las partes del retrovisor deben estar situadas entre 250 mm y 500 mm de la línea central del coche y entre 550 mm y 750 mm de la parte trasera del cockpit. De esta forma se eliminan los retrovisores exteriores.\r\n\r\nPROHIBICIÓN DE LOS DOBLES DIFUSORES\r\n\r\nEl reglamento del año pasado ya definía las dimensiones máximas de dicho elemento. A pesar de eso, se consiguió diseñar e implementar difusores dobles. Red Bull dio otro paso e invento los difusores soplados, aquellos en que las dos salidas de escape iban enfocadas al difusor para maximizar su rendimiento.\r\n\r\nEn esta campaña esto se ha acabado. Se han restringido más las dimensiones y también la forma con el objetivo de que sólo existan difusores simples. Para terminar, se aclara que ningún elemento de la suspensión debe ejercer ninguna función aerodinámica.\r\n\r\nREGLAMENTACIÓN MÁS PRECISA DEL AGUJERO DE ARRANQUE MOTOR\r\n\r\nDespués de ver que algunos equipos hacían unos agujeros arranque motor de medidas desproporcionadas y lo usaban para complementar el difusor, la FIA ha decidido aclarar las cosas. Ha aclarado las dimensiones que debe tener dicho agujero para que pueda cumplir la función por la que fue diseñado originalmente: arrancar el motor.\r\n\r\nPROHIBICIÓN DE LAS ESTRUCTURAS DELGADAS EN LA TOMA DE ADMISIÓN\r\n\r\nEl año pasado Mercedes GP sorprendió a gran parte de la gente presentando una toma de admisión muy innovadora. Estaba dividida en dos partes, la parte izquierda y derecha. Como bien sabemos, dicha estructura está originalmente pensada para que, en caso de vuelco, proteja al piloto. La FIA consideró que la estructura de Mercedes GP era demasiado delgada para cumplir esta función y ha modificado el reglamento técnico en el apartado 15.2.4 diciendo que: la estructura antivuelco debe tener una sección cerrada mínima de 10000 mm2 en una proyección vertical, usando un plano horizontal a 50 mm de su punto más alto.\r\n\r\nLIMITACIONES EN LA ALTURA DEL MORRO DEL COCHE\r\n\r\nLa tendencia actual es diseñar morros muy altos. Tanto, que algunos pilotos han expresado que tienen una visibilidad bastante reducida. Sin contemplaciones con los diseños aerodinámicos, la FIA ha regulado la altura máxima de las diferentes partes (aunque la altura del cockpit ya estaba limitada a 550 mm). Es un tema del que se ha hablado bastante y según parece, de cara al 2013 (sino antes) habrá una modificación de dicho reglamento para reducir más estas alturas.\r\n\r\nDOBLE SUJECIÓN DE LAS RUEDAS\r\n\r\nPara mejorar la seguridad de pilotos, mecánicos y público, se ha modificado la normativa que hace referencia a la sujeción de las ruedas. Ahora serán necesarias dos cadenas entre la rueda y el chasis, que deberán pasar por dos brazos diferentes y ser un poco más resistentes.\r\n\r\nVIDA DE LAS CAJAS DE CAMBIOS\r\n\r\nApostando por la fiabilidad, se ha vuelto a endurecer la duración de las cajas de cambios que pasan de tener que aguantar cuatro carreras a cinco consecutivas. Traducido en kilómetros, en la temporada pasada debían aguantar unos 2100 km y ahora deberán aguantar unos 2600 km.\r\n\r\n¿Cuáles son las penalizaciones al cambiarla de manera no programada? La primera caja de cambios cambiada de manera no programada no va a penalizar. A partir de ahí, cada vez que se cambie otra caja el piloto verá retrasada su posición en la parrilla de salida en cinco posiciones.\r\n\r\nREGLA DEL 107%\r\n\r\nEsta regla es válida durante la Q1. Todo piloto cuyo tiempo de su mejor vuelta sea superior al 107% del tiempo más rápido de dicha sesión, no podrá disputar la carrera. Es posible aplicar excepciones a esta regla según dice la normativa: \"en circunstancias excepcionales\".\r\n\r\nÓRDENES DE EQUIPO\r\n\r\nPara esta temporada vuelven a ser legales las órdenes de equipo. A pesar de eso, existe el artículo 151 del código deportivo que protege al deporte: cualquier acción que pueda desacreditar el deporte podrá ser penalizada.\r\n\r\nENDURECIMIENTO DE LAS NORMAS DE CONDUCCIÓN\r\n\r\nA razón de la peligrosa acción de Michael Schumacher contra Rubens Barrichello en el Gran Premio de Hungría del año pasado, este año se han endurecido las normas de conducción.\r\n\r\nQueda explícitamente prohibido realizar más de un cambio de dirección, realizar cambios anormales de dirección e intentar sacar a un coche de la pista.\r\n\r\nSE ACABÓ TRABAJAR DE NOCHE\r\n\r\nMuchas veces hemos visto que algunos mecánicos han estado trabajando hasta altas horas de la madrugada para reparar el monoplaza y tenerlo listo para disputar la carrera. Esto se ha acabado, la FIA ha decidido regular un tiempo en el que el garaje debe permanecer cerrado. Hay dos posibles casos y son los siguientes:\r\n\r\n-Si los entrenamientos del día siguiente empiezan a las 10:00 AM, entonces el garaje debe permanecer cerrado desde las 00:00 AM hasta las 6:00 AM.\r\n\r\n-Si los entrenamientos del día siguiente empiezan a las 11:00 AM, entonces el garaje debe permanecer cerrado desde la 01:00 AM hasta las 07:00 AM.\r\n\r\nAunque, como es costumbre, hay excepciones, y cada piloto tendrá cuatro excepciones individuales para poder hacer trabajar a sus mecánicos por la noche.\r\n\r\nNUEVAS SANCIONES\r\n\r\nEn esta temporada 2011, los comisarios tendrán más poder y más variedad de sanciones. Cuatro nuevas penalizaciones se introducen y son las siguientes: suspender la participación a la próxima carrera, invalidar el resultado obtenido, una amonestación y una penalización en tiempo.\r\n\r\nRecordemos que, hasta la temporada pasada, las sanciones que podían aplicar los comisarios eran tres: un drive-through (pasar por la calle de boxes sin parase), un stop & go (penalización de 10 segundos) o perder cierto número de posiciones en la parrilla de la siguiente prueba.\r\n\r\nCon esto se consigue poder penalizar a quienes lo merezcan de una forma más justa. Probablemente esta modificación se haya hecho por la infracción cometida por Lewis Hamilton en Valencia, cuando adelantó al coche de seguridad y su penalización no se vio reflejada en ninguna pérdida de posiciones.'),
(2012, 'Cambios Reglamento Deportivo\r\n\r\n- Artículo 20.2: Un piloto no podrá salir deliberadamente de la pista sin una razón justificable.\r\n\r\n- Artículo 20.3: No se permite más de un cambio de dirección para defender la posición. Un piloto que quiera entrar en la trazada habiendo defendido su posición fuera de ella, debe dejar, al menos, la anchura de un coche entre el suyo propio y el bordillo al llegar a la curva.\r\n\r\n- Artículo 22.4: No pueden llevarse a cabo tests:\r\n\r\nMientras un gran premio está en marcha\r\n\r\nDurante el mes de agosto\r\n\r\nEntre el comienzo de la primera semana anterior a la primera cita del Campeonato y el 31 de diciembre del mismo año con una excepción: tres días de test en un lugar aprobado por la FIA para coches de F-1.\r\n\r\n- Artículo 25.2: Número de neumáticos durante un gran premio: Tras una recomendación del proveedor de neumáticos a la FIA, todos los pilotos tendrán disponible un juego adicional de \'prime\' u \'option\'. Se informará a los equipos de este juego adicional al menos una semana antes del comienzo del evento.\r\n\r\na) El delegado técnico de la FIA asignará once juegos de neumáticos de seco a cada piloto, seis del compuesto más duro y cinco del compuesto más blando.\r\n\r\nc) De los neumáticos de seco restantes, se debe devolver al proveedor (Pirelli) un juego de cada compuesto antes del inicio de la sesión de calificación.\r\n\r\ng) Se penalizará bajo el Artículo 16.3(b) al piloto que no utilice neumáticos de lluvia cuando el safety car esté en pista bajo dichas condiciones.\r\n\r\n- Artículo 38.11 a) El arranque desde la parrilla para completar la vuelta de formación debe realizarse a la velocidad permitida en el pit lane hasta que se supere la posición de la Pole.\r\n\r\n- Artículo 40.12: Si el director de carrera considera que es seguro hacerlo y el mensaje \'Los coches doblados pueden adelantar ahora\' se muestra en los monitores de tiempos, todo coche que haya sido doblado por el líder de carrera deberá adelantar a los coches de la cabeza y al safety car. Esto sólo se aplicará a los coches que han sido doblados cuando habían cruzado la línea al final de la vuelta durante la cual habían cruzado la primera línea de safety car por segunda vez, una vez el coche de seguridad había salido a pista.\r\n\r\nUna vez adelantados los coches de la cabeza y el safety car, estos coches deben ir por la pista con una velocidad apropiada, sin adelantar y tomar la posición al final de la fila de coches tras el safety car. Mientras adelantan (pare recuperar su posición), y a fin de garantizar que pueda llevarse a cabo con seguridad, los coches en vuelta deben mantenerse siempre en la trazada a menos que desviarse de ella sea inevitable.\r\n\r\nSi el comisario de carrera considera que las condiciones de la pista no son adecuadas para adelantar, el mensaje \'Adelantar no está permitido\' se mostrará en los monitores de tiempos.\r\n\r\nCambios Reglamento Técnico\r\n\r\n- Artículo 3.7.9: Ninguna pieza del chasis situada 1960mm (1,9 metros) por delante de la parte posterior del cockpit podrá estar más de 550mm por arriba del plano de referencia.\r\n\r\n- Artículo 3.8.5: Una vez la superficie del chasis cumple con el Artículo 3.8.4, las aperturas en el chasis solo podrán servir para la siguiente función:\r\n\r\nAberturas a ambos lados del coche para el sistema de escapes. Juntas, esas aperturas no podrán superar una área de 50.000 milímetros cuadrados. Las aperturas no podrán situarse a menos de 350mm la una de la otra.\r\n\r\n- Artículo 4.2, distribución de pesos: Sólo para 2012 y 2013, el peso aplicado a los neumáticos delanteros y traseros no debe ser menor a 291 y 342 kilogramos respectivamente, durante toda la sesión de calificación. Si cuando sea necesario para la comprobación, el coche no está equipado con neumáticos de seco, se pesará con un juego de gomas de seco seleccionado por el delegado técnico de la FIA.\r\n\r\n- Artículo 5.8.1: Con la excepción de las fugas accidentales, no podrán emerger o introducirse en el sistema de escapes líquidos de ningún tipo a excepción de aquellos que emergen del propio motor.\r\n\r\n- Artículo 5.8.2: Los sistemas de escapes no podrán tener más de dos salidas. Ambas deberán estar orientadas hacia atrás y todos los gases deberán pasar por ellas. Los últimos 100mm de las salidas de los escapes deberán sobresalir del chasis.\r\n\r\n- Artículo 9.8.1: El cambio de marchas automático es considerado una ayuda para el piloto y no está permitido. A la hora de cambiar de marchas, el embrague y el acelerador no necesitan estar bajo el control del piloto.\r\n\r\n- Artículo 9.8.2: El cambio de marchas está restrictivo en el siguiente periodo:\r\n\r\nInicio de la carrera: Solo se permite realizar un cambio de marchas en la salida antes de que el coche haya superado los 100km/h. De este modo, cualquier marcha debe ser capaz de acelerar de 0 a 100km/h a 18.000 revoluciones por minuto.'),
(2013, 'Normas modificadas en el reglamento de F1 2013:\r\n\r\n\r\n\r\nEl doble DRS que se venía usando en el 2012 no se podrá usar en 2013.\r\nDurante la pole de los sábados no se podrá utilizar el DRS.\r\nEl peso mínimo de cada coche será 2 kg mayor; es decir, 642 kg.\r\nSe introduce un nuevo punto de medición de la flexión del alerón delantero, en un lugar más adelantado del morro.\r\nSi algún piloto se detiene antes de cruzar la línea de meta en la calificación, la FIA medirá el nivel de gasolina del coche. Si no hay 1 litro, se sancionará al piloto hasta la última posición en la parrilla de salida. Se elimina la justificación de parada.\r\nEn el caso de que HRT no compita finalmente en la F1, se eliminarán 6 monoplazas en la Q1 y Q2.'),
(2014, 'Motor\r\n\r\nSe dejan atrás los motores V8 atmosféricos de 2,4 litros para montar los nuevos motores V6 turbo de 1,6 litros  acelerando hasta un máximo de 15.000 rpm. Tendrán más volumen que los de ahora, por eso el diseño de los monoplazas variará perceptiblemente. El sonido del motor también será diferente, sobre todo a la hora de reducir marchas (ver vídeo). Los motores del 2014 alcanzarán entre los 550 y 600 CV, pudiendo llegar a los 750 CV gracias al ERS.\r\n\r\nEl próximo año, los equipos tendrán 5 motores en lugar de 8 como era este año. Si usan un sexto motor - y cada vez que pongan uno nuevo - el piloto saldrá esa carrera desde el pit lane. Si en vez del sexto motor completo, se cambian algunas piezas; se perderán 10 posiciones.\r\n\r\nKERS, Sistema de Recuperación de Energía\r\n\r\nEl KERS que conocíamos pasará a ser tan solo ERS. Además de la generación de energía en la frenada (MGU K en la imagen), el nuevo ERS también generará energía usando el calor residual del turbocompresor del nuevo motor (MGU H). \r\n\r\nA diferencia de los actuales KERS - que dan a los pilotos 60 kw adicionales durante 6 segundos por vuelta - en 2014 el ERS dará alrededor de 120 kw durante 33 segundos por vuelta. \r\n\r\nPara compensar la potencia extra que se genera en la frenada por el ERS, a los equipos se les permitirá utilizar un sistema de control electrónico del freno trasero.\r\n\r\nCaja de cambios\r\n\r\nLas cajas de cambios para el año 2014 deberán de tener 8 marchas en vez de 7 como era hasta ahora y deberán durar 6 carreras.\r\n\r\nCombustible\r\n\r\nPara fomentar la eficiencia en el gasto de gasolina, el combustible se limitará a 100 kg por carrera. Ahora mismo, la cantidad autorizada de combustible es ilimitada, pero los equipos suelen utilizar alrededor de 160 kg por carrera. Por lo tanto, el piloto que tenga el motor que más consuma, estará condenado a reducir su ritmo en carrera.\r\n\r\nPeso mínimo del coche\r\n\r\nEl peso mínimo se incrementado desde el actual 642kg a 690kg. Por tanto, al bajar el tamaño y la potencia de los motores y subir el peso, se espera que no se alcancen las velocidades máximas de este año.\r\n\r\nEscapes\r\n\r\nA diferencia de estos últimos años donde se utilizaban dos tubos de escape, en el 2014 será obligatorio el uso de un solo tubo de escape  que estará en el centro (ver imagen) y que tendrá un ángulo de 5º para evitar que los monoplazas se beneficien del flujo de gases que se utiliza para el efecto aerodinámico. Además, no se podrá colocar carrocería detrás del tubo de escape.\r\n\r\nAltura del morro\r\n\r\nPor razones de seguridad se reduce la altura del morro en el 2014. La altura máxima es actualmente 550mm, mientras que el próximo año será de 185 mm.\r\n\r\nAlerón delantero\r\n\r\nEl alerón delantero será un poco más estrecho el próximo año. Se reduce su anchura de 1.800 mm a 1650mm.\r\n\r\nAlerón trasero\r\n\r\nEl alerón trasero también será un poco diferente en el 2014 en comparación con los modelos de este año. El ala inferior se va a prohibir y la aleta principal será ligeramente menos profunda.'),
(2015, 'Cambios en el Reglamento Deportivo de 2015\r\n\r\nSe centra sobre todo en la reducción de horas en el túnel de viento, de jornadas de test y de unidades de propulsión para reducir los costes de la actual Fórmula 1.\r\n\r\n-Bloques de alimentación\r\n\r\nA partir de 2015 cada equipo podrá usar cuatro durante la temporada, salvo si el calendario supera las veinte carreras, que pasarán a poder utilizar cinco. Además, el castigo por un cambio completo de la unidad de potencia no será partir desde pit-lane sino desde el último puesto de parrilla.\r\n\r\n-Ensayos aerodinámicos\r\n\r\nEl número de horas de trabajo en el túnel de viento se reducirá de 80 a 65 horas semanales.\r\n\r\nEl funcionamiento de horas en las que puede estar funcionando el tunel de viento pasará de las 30 actuales a 25 horas por semana.\r\n\r\nSe permitirán dos periodos de ocupación del túnel de viento al día en lugar de uno solo.\r\n\r\nLos equipos de viento solo podrán designar un túnel de viento por año.\r\n\r\n-Test\r\n\r\nHabrá tres pruebas de pretemporada de cuatro días de duración, todas ellas realizadas en Europa en 2015. En 2016 solo habrá dos test de cuatro días durante la pretemporada.\r\n\r\nLos equipos dispondrán de dos test de dos días durante la temporada, realizados en Europa. Dos de los cuatro días totales deben reservarse para los jóvenes pilotos del equipo.\r\n\r\n-Especificación del coche en un evento\r\n\r\nLas actuales restricciones de parque cerrado pasarán a aplicarse desde el inicio de los entrenamientos libres 3 en lugar de desde que empiece la clasificación como hasta ahora.\r\n\r\n-Neumáticos\r\n\r\nNo habrá prohibición de las mantas calentadores para los neumáticos en 2015. Esto se debatirá en el futuro si el diámetro de la llanta y la rueda aumenta.\r\n\r\n-Toque de queda\r\n\r\nEl toque de queda de los equipos pasará de las seis horas habituales del viernes a siete durante 2015 y a ocho horas para 2016.\r\n\r\n-Reanudación de carrera tras Safety Car\r\n\r\nEn principio, el relanzamiento de carrera tras la aparición en pista del coche de seguridad y su marcha se llevaría a cabo desde la parrilla de salida. Sin embargo, se trataba de una medida que no convencía a los pilotos, y finalmente Bernie Ecclestone descartó las resalidas tras Safety Car.\r\n\r\nCambios en el Reglamento Técnico de 2015\r\n\r\nEl objetivo prioritario es mejorar la seguridad, y en base a ella están enfocados todos los cambios en este apartado del reglamento para el próximo año.\r\n\r\n-Se establecerán una serie de regulaciones para los morros de los monoplazas, con el objetivo de aumentar la seguridad y que las estructuras sean visualmente más estéticas.\r\n\r\n-Se implantarán nuevas regulaciones con respecto a los bloques deslizantes para confirmar y asegurar que estén hechos de un material más ligero (titanio) y están mejor contenidos.\r\n\r\nHabrá nuevas regulaciones para asegurar que los discos de freno giran a la misma velocidad que las ruedas.\r\n\r\n-Un sistema de retención y sujeción del neumático con cremallera será obligatorio.'),
(2016, 'CAMBIOS EN EL REGLAMENTO DEPORTIVO\r\nHomologación motores: el 28 de febrero será la fecha máxima para homologar la especificación de la unidad de potencia. En caso de querer modificar la especificación en cuestión, los fabricantes deberán seguir el apéndice 4 del reglamento técnico. Esto significa que durante el año no se podrá re-homologar ningún motor.\r\nEspecificaciones de los motores para los equipos: no podrá competir en la F1 cualquier especificación previa a la homologada por el fabricante. O lo que es lo mismo, todos los equipos tendrán a su disposición un motor de última generación. \r\nComunicaciones Dirección de Carrera - Equipos: casi la totalidad de mensajes que sean emitidos por dirección de carrera serán enviados por el sistema oficial de mensajes a todos los equipos, con excepción\r\nSalidas: Todo piloto que provoque una salida abortada y pueda continuar deberá entrar al pit-lane y empezar la carrera desde el final del mismo. En caso de no hacerlo, se le aplicará la sanción correspondiente.\r\nModificaciones de setup por efectos meteorológicos: Los equipos no podrán modificar los elementos permitidos hasta que dirección de carrera no haga llegar el siguiente mensaje: \"Change in climatic conditions\" (\"Cambio en condiciones climáticas\").\r\nTiempos en clasificación: los comisarios pueden eliminar tiempos en cualquier Gran Premio si ellos consideran que se ha sobrepasado el reglamento.\r\nLímites de la pista: los pilotos deben intentar por todos los medios no abandonar la pista sin razones justificables. Esto significa que en caso de repetición es probable que se sancione al piloto, aumentando así la mano dura en dichas maniobras.\r\nCierre de fábricas por vacaciones: en caso que dos eventos estén separados por veinticuatro días durante Julio o Agosto, las instalaciones de los equipos deberán cerrar durante catorce días consecutivos. En caso que sean diecisiete días los que separen los eventos durante los meses mencionados, las fábricas deberán cerrar trece días. consecutivos.\r\nToque de queda: los mecánicos del equipo no podrán trabajar en el coche durante un intervalo de ocho horas que dará comienzo once horas antes de la primera sesión de libres del viernes y del sábado. O lo que es lo mismo, los mecánicos empezarán a trabajar el viernes y el sábado tres horas antes del arranque de los respectivos entrenamientos libres.\r\nReanudación de la carrera: los pilotos que tengan problemas tras una bandera roja deberán apartarse del fast-lane. Esto significa que están dando indicaciones para que el resto pueda adelantar. No podrán reincorporarse a la fila hasta que el último vehículo que la forma les haya superado.\r\nCámara permanente en el coche: la FIA dispondrá de cámaras propias en cada uno de los coches y que éstos deberán incorporar en todas las sesiones. No confundir con las cámaras de la realización. Estas cámaras de alta velocidad servirán para revisar los datos en caso de accidente o de incidente. Los equipos deben cerciorarse que siempre están en funcionamiento.\r\nSistema de medición de las Fuerzas G: todos los pilotos llevarán un sistema conectado a la telemetría de la FIA en sus auriculares para medir las Fuerzas G que se den como resultado de un accidente.\r\nTest con coches de años pasados: las exhibiciones y/o test deberán ser llevadas a cabo por coches que cumplan el reglamento de 2011. En caso de ser posterior, el equipo deberá informar a la FIA de qué piloto estará en la exhibición, la especificación de motor y chasis correspondiente, lugar en el que se celebrará dicho test/exhibición y la naturaleza e intención del mismo.\r\nModificaciones en el reglamento: debe haber decisión unánime por parte de todos los equipos para llevar a cabo cambios en el reglamento deportivo con la excepción que si la FIA considera peligroso alguno de los puntos se podrá modificar sin previo aviso.\r\n \r\nCAMBIOS EN EL REGLAMENTO TÉCNICO\r\nArranque del monoplaza: el motor sólo podrá ser arrancado en el garaje, en el pit-lane y en la parrilla de salida.\r\nCámaras onboard de la FOM: se regulará la instalación de la misma y los soportes en cuestión para que no sean considerados elementos aerodinámicos. Dichas cámaras tendrán sus lugares específicos que se señalan en los respectivos apéndices del reglamento.\r\nSistemas de escape: aparición de un segundo tubo de escape que deberá ser direccionado hacia el centro del monoplaza (tal y como está ahora). No puede haber ningún tipo de carrocería cubriéndolo por completo y ambos tubos de escape deben ocupar el mismo área, siendo gemelos entre sí. A su vez, el turbo sólo podrá tener una salida de residuos.\r\nModificaciones de reglamento: debe haber decisión unánime por parte de todos los equipos para llevar a cabo cambios en el reglamento técnico con la excepción que si la FIA considera peligroso alguno de los puntos.'),
(2017, 'IGUALDAD DE MOTORES\r\nLa introducción de los motores V6 Turbo en 2014 ha aumentado la eficiencia del motor de combustión interna desde un 29% de aprovechamiento en el año 2013 hasta casi un un 50% en los monoplazas actuales. Además, el hecho de que los sistemas de recuperacón de energía aún no hayan sido exprimidos a sus máximas prestaciones tiende a mejorar la reputación de la filosofía híbrida desde un punto de vista técnico, aunque su falta de atractivo para los aficionados es un punto clave para iniciar algunas modificaciones de cara a la próxima temporada.\r\nSu principal detractor, Bernie Ecclestone, ha cargado en numerosas ocasiones contra la falta de igualdad entre el rendimiento del motor Mercedes y el resto de fabricantes que completan la parrilla. Pero más allá de las prestaciones puras, circunstancia que estuvo cerca de motivar la llegada de motores independientes más baratos, el dirigente británico ha impulsado un nuevo plan de financiación acorde a las limitaciones económicas de las escuderías independientes, cuya supervivencia en la parrilla parece cada día más inviable bajo el reparto presupuestario actual.\r\nDado que la Fórmula 1 no podrá introducir una configuración económica más equitativa hasta la firma de un nuevo Pacto de la Condordia en 2020, sus máximos dirigentes planean los siguientes cambios en busca de una mayor competencia por las victorias.\r\n1) Reducción de los costes. Se aplicará una rebaja de un millón de euros a la manutención de las unidades de potencia, cuyo precio oscila entre los 18 y los 23 millones para los equipos privados. Red Bull ha señalado abiertamente su escepticismo ante este acuerdo, pero los fabricantes se habrían comprometido a flexibilizar sus exigencias para garantizar la sostenibilidad del deporte. Además, el menor gasto podría conllevar la obligación de utilizar un máximo de tres recambios por temporada. Actualmente, el límite está fijado en cinco.\r\n2) Igualdad de rendimiento. Los equipos se han marcado el objetivo de asegurar una diferencia por vuelta menor al 2% entre los cuatro motores de la parrilla. Aunque la ventaja de Mercedes sobre Ferrari ya esté fijada sobre un baremo similar, el constante desarrollo de los sistemas híbridos debería dilatar la ventaja de unos fabricantes sobre otros. Por ello, los equipos han utilizado un sistema de medición específico para fijar en \"tres décimas\" la diferencia aproximada entre los distintas unidades de potencia. De cumplirse esta teoría en el Gran Premio inaugural del 2017, los cambios habrían surgido el efecto deseado.\r\n3) Más sonido. El aprovechamiento natural que ejercen los motores híbridos sobre la energía térmica es totalmente contraproducente con la voluntad de aumentar el sonido de los coches. No obstante, las voces internas de la F1 sugieren a la BBC que \"se está produciendo un trabajo interesante\" para incrementar los decibelios y tapar así uno de los grandes vacíos emocionales en la afición desde la llegada de los V6 Turbo.\r\n4) Obligación a suministrar motores. La situación de Red Bull en 2015 ha supuesto un importante punto de inflexión para que la Fórmula 1 evite mayores controversias en el suministro de las unidades de potencia. Los fabricantes podrán seguir reservándose el derecho a fijar su lista deseada de equipos independientes, aunque existe un compromiso firme sobre la mesa para garantizar un motor a cualquier equipo que desee un propulsor, siempre y cuando cumpla con las respectivas condiciones económicas.\r\n \r\n2) NEUMÁTICOS MÁS AGRESIVOS\r\nPirelli ha estado en el punto de mira frente a la opinión pública desde su entrada a la F1 en 2011. Ya sea por aplicar una configuración demasiado conservadora o incluso introducir neumáticos con una degradación excesiva, la marca milanesa busca de forma desesperada un equilibrio de prestaciones que logre satisfacer a los actores relevantes de la categoría. El Grupo de Estrategia ha exigido cambios que permitan a los pilotos exprimir los límites del monoplaza, rompiendo así con la tendencia actual de cuidar constantemente la degradación en las ruedas traseras.\r\nDe esta forma, la F1 ha asignado dos tareas a Pirelli de cara al 2017: aplicar una degradación proporcional al rendimiento de los monoplazas y evitar el desgaste excesivo que se produce generalmente cuando un coche rueda detrás de otro. Esta situación rompe con la ventana óptima de rendimiento en los PZero hasta reducir el número de adelantamientos, limitando así el espectáculo en las carreras. La FIA pretende que estas soluciones permitan explotar el talento innato de los pilotos sin que la degradación oculte su verdadero potencial al volante.\r\nAunque los equipos también pidieran una regulación más sensata de las presiones mínimas acorde al rendimiento del neumático, la Federación cree que existen otros asuntos más relevantes donde Pirelli debería centrar sus esfuerzos para reavivar la competición.\r\n \r\nCOCHES MÁS RÁPIDOS\r\nLa necesidad de aumentar la velocidad de los monoplazas se basa en que la naturaleza de los V6 Turbo ocultó la genialidad aerodinámica de los antiguos coches en favor de unos niveles de potencia más ambiciosos en las rectas. Las dos primeras temporadas registraron tiempos más lentos respecto al reglamento de los V8 atmosféricos, pero la llegada de compuestos más blandos en 2016 ha revertido la situación hasta situar los coches actuales como los más rápidos en la última década. \r\nNo obstante, la falta de agarre en las curvas sigue siendo uno de los asuntos pendientes de mejora en la Fórmula 1 actual. Para ello, la categoría prepara cinco modificaciones esenciales. \r\n1) Chasis más anchos, con una distancia de 2 metros entre sus extremos. Se repetirían así las medidas de los coches utilizados hasta el año 1997.\r\n2) Un alerón trasero más ancho con un eje de gravedad más bajo, emulando así el clásico concepto de la década de los 90 y principio de los 2000.\r\n3) Más carga aerodinámica generada a través del suelo, lo cual reduciría la importancia del alerón delantero como elemento diferenciador en el rendimiento de los monoplazas.\r\n4) Neumáticos más anchos para aumentar el agarre mecánico en las curvas. Este cambio sería clave para materializar la reducción de tres segundos por vuelta que barajan en Pirelli.\r\nLa apariencia más agresiva de los monoplazas es uno de los temas que más inquieta a Mercedes. Su posición en el asunto de motores parece más flexible de la esperada, aunque nadie niega que en la marca de la estrella existe el temor a perder su supremacía en la parrilla si finalmente se aplicaran los cambios discutidos en el Grupo de Estrategia. Toto Wolff ya reiteró la pasada temporada que el diseño de los coches actuales ya era suficientemente parecido a las décadas \'de oro\' de la categoría reina, de tal forma que cualquier modificación importante en el apartado técnico carecería de sentido para mejorar la imagen del deporte.\r\nTras el Gran Premio de China, el propio Wolff reiteró su escepticismo al destacar que la nueva filosofía aerodinámica podría generar el efecto contrario al deseado y reducir el número de adelantamientos sobre la pista. En cualquier caso, los planes de la Federación parecen suficientemente avanzados hacia una revolución drástica en el funcionamiento del deporte. Desde el punto de vista operativo, la FOM trabaja en acoplar el contenido de Fórmula 1 a las nuevas tecnologías con herramientas más accesibles en los portales web y las redes sociales, mientras que el futuro gubernamental de la categoría debería decirise próximamente con un anuncio relevante desde CVC Capital Partners.\r\nEl \'Gran Circo\' ultima una transformación clave para mantenerse como un escaparate relevante en el plantel deportivo a nivel mundial. Sólo el tiempo dirá si los esfuerzos por recuperar el espíritu de las carreras antiguas surgen el efecto deseado por sus máximos responsables. Sea como sea, nadie duda de que supone un movimiento arriesgado y aparentemente pertinente antes de modificar las estructuras de poder a partir del año 2020. Fiel a su esencia característica, la Fórmula 1 se prepara para seguir evolucionando hacia el futuro.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporada_pilot_escuderia`
--

CREATE TABLE `temporada_pilot_escuderia` (
  `temporada_any` year(4) NOT NULL,
  `pilot_id` int(11) NOT NULL,
  `scuderia_id` int(11) NOT NULL,
  `xasis` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `motor` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero_pilot` int(11) DEFAULT NULL,
  `jefeEquip` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `director` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `temporada_pilot_escuderia`
--

INSERT INTO `temporada_pilot_escuderia` (`temporada_any`, `pilot_id`, `scuderia_id`, `xasis`, `motor`, `numero_pilot`, `jefeEquip`, `director`) VALUES
(2007, 2, 10, 'MP4-22', 'Mercedes', 2, 'Ron Dennis', 'Jonathan Neale'),
(2007, 4, 2, 'F2007', 'Ferrari', 6, 'Nicolas Tomabzis', 'Aldo Costa'),
(2007, 8, 2, 'F2007', 'Ferrari', 5, 'Nicolas Tomabzis', 'Aldo Costa'),
(2008, 2, 10, 'MP4-23', 'Mercedes', 22, 'Ron Dennis', 'Jonathan Neale'),
(2008, 4, 2, 'F2008', 'Ferrari', 1, 'Nicolas Tomabzis', 'Aldo Costa'),
(2008, 8, 2, 'F2008', 'Ferrari', 2, 'Nicolas Tomabzis', 'Aldo Costa'),
(2009, 2, 10, 'MP4-24', 'Mercedes', 1, 'Eric Boullier', 'Jonathan Neale'),
(2009, 4, 2, 'F60', 'Ferrari', 3, 'Nicolas Tomabzis', 'Aldo Costa'),
(2009, 8, 2, 'F60', 'Ferrari', 4, 'Nicolas Tomabzis', 'Aldo Costa'),
(2010, 2, 10, 'MP4-25', 'Mercedes', 2, 'Eric Boullier', 'Jonathan Neale'),
(2010, 8, 2, 'F10', 'Ferrari', 7, 'Nicolas Tomabzis', 'Aldo Costa'),
(2010, 20, 2, 'F10', 'Ferrari', 8, 'Nicolas TomabzisNicolas Tomabzis', 'Aldo Costa'),
(2010, 42, 1, 'MGP W01', 'Mercedes', 3, 'Ross Brawn', 'Ross Brawn'),
(2011, 2, 10, 'MP4-26', 'Mercedes', 3, 'Eric Boullier', 'Jonathan Neale'),
(2011, 8, 2, '150ª Italia', 'Ferrari', 6, 'Nicolas Tomabzis', 'Aldo Costa'),
(2011, 20, 2, '150ª Italia', 'Ferrari', 5, 'Nicolas Tomabzis', 'Aldo Costa'),
(2011, 42, 1, 'MGP W02', 'Mercedes', 7, 'Geoff Willis', 'Aldo Costa'),
(2012, 2, 10, 'MP4-27', 'Mercedes', 4, 'Eric Boullier', 'Jonathan Neale'),
(2012, 8, 2, 'F2012', 'Ferrari', 6, 'Nicolas Tomabzis', 'Pat Fry'),
(2012, 20, 2, 'F1012', 'Ferrari', 5, 'Nicolas Tomabzis', 'Pat Fry'),
(2012, 42, 1, 'W03', 'Mercedes', 7, 'Niki Lauda', 'Aldo Costa'),
(2013, 2, 1, 'W03', 'Mercedes', 44, 'Toto Wolff', 'Niki Lauda'),
(2013, 8, 2, 'F138', 'Ferrari', 4, 'Sergio Machionne', 'Luca Cordero di Montezemolo'),
(2013, 20, 2, 'F138', 'Ferrari', 3, 'Sergio Machionne', 'Luca Cordero di Montezemolo'),
(2014, 2, 1, 'W05', 'Mercedes', 44, 'Toto Wolff', 'Niki Lauda'),
(2014, 4, 2, 'F14T', 'Ferrari', 7, 'Mauricio Arrivabene', 'Marco Mattiacci'),
(2014, 20, 2, 'F14T', 'Ferrari', 14, 'Mauricio Arrivabene', 'Marco Mattiacci'),
(2015, 1, 2, 'SF15T', 'Ferrari', 5, 'Mattia Binotto', 'Maurizio Arribavene'),
(2015, 2, 1, 'W06', 'Mercedes', 44, 'Toto Wolff', 'Niki Lauda'),
(2015, 4, 2, '', 'Ferrari', 7, 'Mattia Binotto', 'Maurizio Arribavene'),
(2016, 1, 2, 'SF16-H', 'Ferrari', 5, 'Mattia Binotto', 'Maurizio Arribavene'),
(2016, 2, 1, 'W07', 'Mercedes PU106C V6 Turbo Hybrid', 2, 'Toto Wolff', 'Paddy Lowe y Toto Wolff'),
(2016, 4, 2, 'SF16-H', 'Ferrari', 7, 'Mattia Binotto', 'Maurizio Arribavene'),
(2016, 5, 3, 'RB12', 'Renault', 33, 'Christian Horner', 'Dietrich Mateschitz'),
(2016, 6, 3, 'RB12', 'Renault', 3, 'Christian Horner', 'Dietrich Mateschitz'),
(2016, 22, 1, 'W07', 'Mercedes PU106C V6 Turbo Hybrid', 6, 'Toto Wolff', 'Paddy Lowe y Toto Wolff'),
(2017, 1, 2, 'SF70H', 'Ferrari', 5, 'Mattia Binotto', 'Maurizio Arribavene'),
(2017, 2, 1, 'F1 W08 EQ Power+', 'Mercedes PU106D Hybrid', 44, 'Toto Wolff', 'Paddy Lowe y Toto Wolff'),
(2017, 3, 1, 'F1 W08 EQ Power+', 'Mercedes PU106D Hybrid', 77, 'Toto Wolff', 'Paddy Lowe y Toto Wolff'),
(2017, 4, 2, 'SF70H', 'Ferrari', 7, 'Mattia Binotto', 'Maurizio Arribavene'),
(2017, 5, 3, 'RB13', 'Tag Heuer', 33, 'Christian Horner', 'Dietrich Mateschitz'),
(2017, 6, 3, 'RB13', 'Tag Heuer', 3, 'Christian Horner', 'Dietrich Mateschitz'),
(2017, 7, 4, 'VJM010', 'Mercedes PU106D Hybrid', 11, 'Bob Fernley', 'Vjay Mallya'),
(2017, 8, 8, 'FW40', 'Mercedes PU106D Hybrid', 19, 'Peter Vale', 'Sir Frank Williams'),
(2017, 9, 5, 'STR12', 'Renault Energy 17 V6', 55, 'Graham Watson', 'Franz Tost'),
(2017, 10, 4, 'VJM010', 'Mercedes PU106D Hybrid', 31, 'Bob Fernley', 'Vjay Mallya'),
(2017, 11, 7, 'RS17', 'Renault Energy 17 V6', 27, 'Frédéric Vasseur', 'Remi Taffin'),
(2017, 12, 8, 'VF-17', 'Ferrari 059/6 1.6L V6 Turbo', 8, 'Günther Steiner', 'Dave O\'Neill'),
(2017, 13, 8, 'VF-17', 'Ferrari 059/6 1.6L V6 Turbo', 20, 'Günther Steiner', 'Dave O\'Neill'),
(2017, 14, 5, 'STR12', 'Renault Energy 17 V6', 26, 'Graham Watson', 'Franz Tost'),
(2017, 15, 9, 'C36', 'Ferrari 059/6 1.6L V6 Turbo', 94, 'Monisha Kaltenborn', 'Peter Sauber'),
(2017, 16, 6, 'FW40', 'Mercedes PU106D Hybrid', 18, 'Peter Vale', 'Sir Frank Williams'),
(2017, 17, 2, 'SF70H', 'Ferrari', 16, 'Mattia Binotto', 'Maurizio Arribavene'),
(2017, 18, 7, 'RS17', 'Renault Energy 17 V6', 30, 'Frédéric Vasseur', 'Remi Taffin'),
(2017, 19, 10, 'MCL32', 'Honda RA617H', 2, 'Eric Boullier', 'Jonathan Neale'),
(2017, 20, 10, 'MCL32', 'Honda RA617H', 14, 'Eric Boullier', 'Jonathan Neale'),
(2017, 21, 9, 'C36', 'Ferrari 059/6 1.6L V6 Turbo', 9, 'Monisha Kaltenborn', 'Peter Sauber');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_carrera_circuit1_idx` (`circuit_id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_log_user1_idx` (`log_user_id`);

--
-- Indices de la tabla `carrito_has_products`
--
ALTER TABLE `carrito_has_products`
  ADD PRIMARY KEY (`carrito_id`,`producte_id`),
  ADD KEY `fk_carrito_has_products_products1_idx` (`producte_id`),
  ADD KEY `fk_carrito_has_products_carrito1_idx` (`carrito_id`);

--
-- Indices de la tabla `circuit`
--
ALTER TABLE `circuit`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clasificacio`
--
ALTER TABLE `clasificacio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clasificacio_pilot1_idx` (`pilot_id`),
  ADD KEY `fk_clasificacio_carrera1_idx` (`carrera_id`);

--
-- Indices de la tabla `clasificacionMundial`
--
ALTER TABLE `clasificacionMundial`
  ADD PRIMARY KEY (`id`,`temporada_any`,`pilot_id`),
  ADD KEY `fk_clasificacionMundial_temporada1_idx` (`temporada_any`),
  ADD KEY `fk_clasificacionMundial_pilot1_idx` (`pilot_id`);

--
-- Indices de la tabla `escuderia_usuari`
--
ALTER TABLE `escuderia_usuari`
  ADD PRIMARY KEY (`scuderia_id`,`log_user_id`),
  ADD KEY `fk_scuderia_has_log_user_log_user1_idx` (`log_user_id`),
  ADD KEY `fk_scuderia_has_log_user_scuderia1_idx` (`scuderia_id`);

--
-- Indices de la tabla `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_forum_log_user1_idx` (`log_user_id`);

--
-- Indices de la tabla `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mundial`
--
ALTER TABLE `mundial`
  ADD PRIMARY KEY (`any`,`pilot_id`,`scuderia_id`),
  ADD KEY `fk_mundial_pilot1_idx` (`pilot_id`),
  ADD KEY `fk_mundial_scuderia1_idx` (`scuderia_id`);

--
-- Indices de la tabla `pilot`
--
ALTER TABLE `pilot`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pilot_usuari`
--
ALTER TABLE `pilot_usuari`
  ADD PRIMARY KEY (`pilot_id`,`log_user_id`),
  ADD KEY `fk_pilots_has_log_user_log_user1_idx` (`log_user_id`),
  ADD KEY `fk_pilots_has_log_user_pilots1_idx` (`pilot_id`);

--
-- Indices de la tabla `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `scuderia`
--
ALTER TABLE `scuderia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`any`);

--
-- Indices de la tabla `temporada_pilot_escuderia`
--
ALTER TABLE `temporada_pilot_escuderia`
  ADD PRIMARY KEY (`temporada_any`,`pilot_id`,`scuderia_id`),
  ADD KEY `fk_temporada_pilot_escuderia_pilot1_idx` (`pilot_id`),
  ADD KEY `fk_temporada_pilot_escuderia_scuderia1_idx` (`scuderia_id`),
  ADD KEY `fk_temporada_pilot_escuderia_temporada1_idx` (`temporada_any`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `circuit`
--
ALTER TABLE `circuit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `clasificacio`
--
ALTER TABLE `clasificacio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT de la tabla `clasificacionMundial`
--
ALTER TABLE `clasificacionMundial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `pilot`
--
ALTER TABLE `pilot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT de la tabla `producte`
--
ALTER TABLE `producte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `scuderia`
--
ALTER TABLE `scuderia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `fk_carrera_circuit1` FOREIGN KEY (`circuit_id`) REFERENCES `circuit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fk_cart_log_user1` FOREIGN KEY (`log_user_id`) REFERENCES `log_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `carrito_has_products`
--
ALTER TABLE `carrito_has_products`
  ADD CONSTRAINT `fk_carrito_has_products_carrito1` FOREIGN KEY (`carrito_id`) REFERENCES `carrito` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_carrito_has_products_products1` FOREIGN KEY (`producte_id`) REFERENCES `producte` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clasificacio`
--
ALTER TABLE `clasificacio`
  ADD CONSTRAINT `fk_clasificacio_carrera1` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clasificacio_pilot1` FOREIGN KEY (`pilot_id`) REFERENCES `pilot` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escuderia_usuari`
--
ALTER TABLE `escuderia_usuari`
  ADD CONSTRAINT `fk_scuderia_has_log_user_log_user1` FOREIGN KEY (`log_user_id`) REFERENCES `log_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_scuderia_has_log_user_scuderia1` FOREIGN KEY (`scuderia_id`) REFERENCES `scuderia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `fk_forum_log_user1` FOREIGN KEY (`log_user_id`) REFERENCES `log_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mundial`
--
ALTER TABLE `mundial`
  ADD CONSTRAINT `fk_mundial_pilot1` FOREIGN KEY (`pilot_id`) REFERENCES `pilot` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mundial_scuderia1` FOREIGN KEY (`scuderia_id`) REFERENCES `scuderia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pilot_usuari`
--
ALTER TABLE `pilot_usuari`
  ADD CONSTRAINT `fk_pilots_has_log_user_log_user1` FOREIGN KEY (`log_user_id`) REFERENCES `log_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pilots_has_log_user_pilots1` FOREIGN KEY (`pilot_id`) REFERENCES `pilot` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `temporada_pilot_escuderia`
--
ALTER TABLE `temporada_pilot_escuderia`
  ADD CONSTRAINT `fk_temporada_pilot_escuderia_pilot1` FOREIGN KEY (`pilot_id`) REFERENCES `pilot` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_temporada_pilot_escuderia_scuderia1` FOREIGN KEY (`scuderia_id`) REFERENCES `scuderia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_temporada_pilot_escuderia_temporada1` FOREIGN KEY (`temporada_any`) REFERENCES `temporada` (`any`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
