-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2020 a las 21:14:34
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `totalcar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `size` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ruta` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `id_auto`, `nombre`, `tipo`, `size`, `ruta`) VALUES
(1, 96, '58602.png', 'image/png', '9627', 'vistas/img/Autos/2222/58602.png'),
(2, 96, 'Captura.PNG', 'image/png', '34477', 'vistas/img/Autos/2222/Captura.PNG'),
(3, 96, 'compact-disc-disk-storage-hard-drives-clip-art-free-line-art-drawings.jpg', 'image/jpeg', '46689', 'vistas/img/Autos/2222/compact-disc-disk-storage-hard-drives-clip-art-free-line-art-drawings.jpg'),
(4, 96, 'portada.jpg', 'image/jpeg', '139860', 'vistas/img/Autos/2222/portada.jpg'),
(5, 96, 'portada2.jpg', 'image/jpeg', '315309', 'vistas/img/Autos/2222/portada2.jpg'),
(6, 101, '58602.png', 'image/png', '9627', 'vistas/img/Autos/111/58602.png'),
(7, 101, 'Captura.PNG', 'image/png', '34477', 'vistas/img/Autos/111/Captura.PNG'),
(8, 101, 'ijij.jpg', 'image/jpeg', '549384', 'vistas/img/Autos/111/ijij.jpg'),
(9, 101, 'portada.jpg', 'image/jpeg', '139860', 'vistas/img/Autos/111/portada.jpg'),
(10, 101, 'portada2.jpg', 'image/jpeg', '315309', 'vistas/img/Autos/111/portada2.jpg'),
(11, 96, '58602.png', 'image/png', '9627', 'vistas/img/Autos/ABC123DEF/58602.png'),
(12, 96, 'Captura.PNG', 'image/png', '34477', 'vistas/img/Autos/ABC123DEF/Captura.PNG'),
(13, 96, 'compact-disc-disk-storage-hard-drives-clip-art-free-line-art-drawings.jpg', 'image/jpeg', '46689', 'vistas/img/Autos/ABC123DEF/compact-disc-disk-storage-hard-drives-clip-art-free-line-art-drawings.jpg'),
(14, 96, 'data-storage-disk-storage-hard-drives-network-storage-systems-computer-icons-storage-drawing-icon.jpg', 'image/jpeg', '56250', 'vistas/img/Autos/ABC123DEF/data-storage-disk-storage-hard-drives-network-storage-systems-computer-icons-storage-drawing-icon.jpg'),
(15, 103, 'bosal.jpg', 'image/jpeg', '11088', 'vistas/img/Autos/1258746/bosal.jpg'),
(16, 105, 'Chrysanthemum.jpg', 'image/jpeg', '879394', 'vistas/img/Autos/lko1234/Chrysanthemum.jpg'),
(17, 105, 'Desert.jpg', 'image/jpeg', '845941', 'vistas/img/Autos/lko1234/Desert.jpg'),
(18, 105, 'Hydrangeas.jpg', 'image/jpeg', '595284', 'vistas/img/Autos/lko1234/Hydrangeas.jpg'),
(19, 105, 'Jellyfish.jpg', 'image/jpeg', '775702', 'vistas/img/Autos/lko1234/Jellyfish.jpg'),
(20, 145, '58602.png', 'image/png', '9627', 'vistas/img/Autos/22/58602.png'),
(21, 145, 'compact-disc-disk-storage-hard-drives-clip-art-free-line-art-drawings.jpg', 'image/jpeg', '46689', 'vistas/img/Autos/22/compact-disc-disk-storage-hard-drives-clip-art-free-line-art-drawings.jpg'),
(22, 145, 'data-storage-disk-storage-hard-drives-network-storage-systems-computer-icons-storage-drawing-icon.jpg', 'image/jpeg', '56250', 'vistas/img/Autos/22/data-storage-disk-storage-hard-drives-network-storage-systems-computer-icons-storage-drawing-icon.jpg'),
(23, 145, 'compact-disc-disk-storage-hard-drives-clip-art-free-line-art-drawings.jpg', 'image/jpeg', '46689', 'vistas/img/Autos/22/compact-disc-disk-storage-hard-drives-clip-art-free-line-art-drawings.jpg'),
(24, 146, 'dias1.PNG', 'image/png', '76262', 'vistas/img/Autos/598936/dias1.PNG'),
(25, 152, 'IMG_20191101_113133.jpg', 'image/jpeg', '7072320', 'vistas/img/Autos/33333/IMG_20191101_113133.jpg'),
(26, 151, 'adt.PNG', 'image/png', '34170', 'vistas/img/Autos/54d8f89/adt.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `folio` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `temporada` int(11) NOT NULL,
  `color` text NOT NULL,
  `placas` text NOT NULL,
  `tipo_verificacion` text NOT NULL,
  `vigencia_verificacion` text NOT NULL,
  `medida_llantas` text NOT NULL,
  `kilometraje` text NOT NULL,
  `ultimo_servicio` text NOT NULL,
  `proximo_servicio` text NOT NULL,
  `periodo_servicio` text NOT NULL,
  `pasajeros` int(11) NOT NULL,
  `transmision` text NOT NULL,
  `cilindros` int(11) NOT NULL,
  `vestiduras` text NOT NULL,
  `segunda_llave` text NOT NULL,
  `ultima_tenencia` text NOT NULL,
  `combustible` text NOT NULL,
  `id_fotos` text NOT NULL,
  `confirmar` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `folio`, `id_socio`, `id_estado`, `id_marca`, `modelo`, `temporada`, `color`, `placas`, `tipo_verificacion`, `vigencia_verificacion`, `medida_llantas`, `kilometraje`, `ultimo_servicio`, `proximo_servicio`, `periodo_servicio`, `pasajeros`, `transmision`, `cilindros`, `vestiduras`, `segunda_llave`, `ultima_tenencia`, `combustible`, `id_fotos`, `confirmar`, `fecha`) VALUES
(145, 1, 15, 1, 1, 'SENDTRA', 2222, 'Verde', '22', 'Estatal', '2019-11', '22', '22', '22', '22', '22', 22, 'Automática', 4, 'Piel', '1', '2020', 'Gasolina', '', 1, '2020-03-27'),
(146, 2, 15, 3, 7, 'Vocho', 2020, 'ROJO', '598936', '00', '2020-12', '6666', '256565', '55', '5555', '5555', 5, 'Automática', 3, 'Piel', '1', '2020', 'Gasolina', '', 1, '2020-03-28'),
(147, 1, 16, 3, 2, '333', 2222, '22', '88888888', '0', '2018-10', '22', '5', '55', '55', '55', 2, 'Automática', 3, 'Piel', '1', '2020', 'Gasolina', '', 0, '2020-03-28'),
(148, 2, 16, 16, 4, 'ILUX', 2020, 'BLANCO', '98766522', '00', '2020-12', '665322', '2236566', '512365', '546553', '566653', 5, 'Estándar', 6, 'Piel', '1', '2019', 'Gasolina', '', 0, '2020-03-30'),
(150, 3, 16, 12, 1, 'Tsuru', 2019, 'rojo', '6945666', 'Estatal', '2019-11', '5555', '55555', '55555', '555555', '55555', 4, 'Estándar', 4, 'Tela', '1', '2019', 'Gasolina', '', 0, '2020-04-07'),
(151, 1, 22, 4, 1, 'SENTRA', 2019, 'Rojo', '54d8f89', 'Estatal', '2020-12', '2255', '565555', '555555', '5555', '555', 5, 'Automática', 3, 'Piel', '1', '2020', 'Gasolina', '', 1, '2020-05-02'),
(152, 2, 21, 3, 1, '32333', 333, '3333', '33333', '0', '2019-10', '22', '6556', '55', '55', '5555', 4, 'Automática', 3, 'Piel', '1', '2020', 'Gasolina', '', 1, '2020-05-11'),
(153, 2, 21, 3, 1, '32333', 333, '3333', '33333', '0', '2019-10', '22', '6556', '55', '55', '5555', 4, 'Automática', 3, 'Piel', '1', '2020', 'Gasolina', '', 0, '2020-05-11'),
(154, 3, 15, 1, 1, '2222', 22, '2222', '26656', '00', '2019-11', '22', '666', '6666', '66666', '6666', 6, 'Automática', 3, 'Piel', '1', '2020', 'Gasolina', '', 0, '2020-06-02'),
(155, 4, 15, 1, 1, '255', 5555, '5555', '5555', 'Estatal', '2020-11', '555', '555', '55', '55', '55', 5, 'Automática', 4, 'Piel', '1', '2020', 'Gasolina', '', 0, '2020-06-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `app` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apm` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rfc` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `app`, `apm`, `correo`, `rfc`) VALUES
(1, 'Jorge', 'Zuñiga', 'Garcia', 'CDCC@hotmail.com', '1234567890123'),
(2, 'Grecia', 'Mariel ', 'Flores', 'd', '5555555555555'),
(15, 'Brayan', 'fernando', 'Nava', 'brayan_nava18@hotmail.com', '555'),
(16, 'ANA', 'HERNANDEZ', 'OROZCO', '', '651651'),
(17, 'Adilene', 'haha', 'ahaha', '', '356'),
(18, 'ANALY', 'GONZALES ', 'XD', '88999', 'analy@hotmail.com'),
(19, 'ANA SONIA', 'BARREDO', 'PEDRAZA', 'BAPA891224N73', 'ana@gmail.com'),
(26, '55', '55', '55', '55', '55'),
(27, 'ijij', 'ijiji', 'jiji', 'jijijij', '8'),
(28, '555', '555', '5555', '5555', '2'),
(29, 'jojojoj', 'joj', 'ojo', 'joj', '999'),
(30, 'ujuuju', 'jujuju', 'jujuujuj', 'ujuuju', '666'),
(33, 'nnn', 'nn', 'nn', 'nnnnn', '33'),
(34, 'mmm', 'mmm', 'mmmm', 'mmm', '333'),
(35, 'bbb', 'bb', 'bb', 'bb', '88'),
(36, 'CESAR', 'TABARES', 'CASTELLANOS', 'ctabares1980@gmail.com', 'TACC8007122D3'),
(37, '', '', '', '', ''),
(38, '666', '66', '66', '66', '66'),
(39, '111', '11', '11', '11', '1111'),
(40, '99999', '9999', '99999', '9999', '99999'),
(41, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion_fiscal`
--

CREATE TABLE `direccion_fiscal` (
  `id` int(11) NOT NULL,
  `id_clientes` int(11) NOT NULL,
  `calle` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_int` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_ext` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `colonia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `municipio` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_estado` int(11) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `tel_1` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tel_2` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `direccion_fiscal`
--

INSERT INTO `direccion_fiscal` (`id`, `id_clientes`, `calle`, `num_int`, `num_ext`, `colonia`, `municipio`, `id_estado`, `codigo_postal`, `tel_1`, `tel_2`) VALUES
(5, 26, '55', '5', '55', '555', '55', 10, 66, '(666) 666-6666', '(555) 555-5555'),
(6, 15, 'isidro burgos', '0', '113', 'magisterio', 'petatlan', 12, 40855, '(758) 107-1309', '(000) 000-0000'),
(7, 36, '', '', '', 'MILENIO', 'QUERETARO', 22, 76060, '(442) 559-4847', ''),
(9, 1, 'avenida', '20', '120', 'centro', 'atoyac', 12, 65899, '(888) 888-8888', '(555) 555-5555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion_particular`
--

CREATE TABLE `direccion_particular` (
  `id` int(11) NOT NULL,
  `id_clientes` int(11) NOT NULL,
  `calle` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_int` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_ext` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `colonia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `municipio` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_estado` int(11) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `tel_1` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tel_2` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `direccion_particular`
--

INSERT INTO `direccion_particular` (`id`, `id_clientes`, `calle`, `num_int`, `num_ext`, `colonia`, `municipio`, `id_estado`, `codigo_postal`, `tel_1`, `tel_2`) VALUES
(1, 1, 'PRINCIPAL', '5', '10', 'OLIVO', 'ATOYAC', 12, 40830, '(111) 111-1111', '(222) 222-2222'),
(2, 2, 'calle venustiano carrnza', '', '8', 'centro', 'Atoyac', 12, 40895, '(755) 220-0331', '(789) 966-6666'),
(7, 17, 'CAMINO REAL DE CSRRETAS', '139', '1', 'MILENIO III', 'QUERETARO', 22, 76060, '(442) 559-7890', '(442) 567-3899'),
(8, 18, 'a', '2', '1', 'c', 'd', 32, 3, '(444) 444-4444', '(555) 555-5555'),
(9, 26, '11', '1111', '1111', '1111', '111', 22, 111, '(111) 111-1111', '(111) 111-1111'),
(11, 15, 'RAUL ISIDRO BUTGOS', '3', '113', 'MAGISTERIO', '5', 12, 40855, '(758) 107-1309', ''),
(12, 33, 'nnn', '33', '33', 'nnnn', 'nnnn', 3, 33, '(333) 333-3333', '(333) 333-3333'),
(13, 34, 'mmmm', '1', '22', 'mmmm', 'mmmm', 4, 2, '(222) 222-2222', '(222) 222-2222'),
(14, 35, '11', '11', '11', 'bbb', 'bbbb', 32, 111, '(111) 111-1111', '(111) 111-1111'),
(15, 16, 'insurgentes', '20', '20', 'morelos', 'petatlan', 12, 408030, '(758) 102-8996', '(788) 569-3322'),
(16, 36, 'CAMINO REAL ', '4425594847', '139', 'MILENIO', 'QUERETARO', 22, 76060, '(442) 559-4847', ''),
(17, 37, '', '', '', '', '', 0, 0, '', ''),
(18, 38, '66', '66', '66', '66', '66', 1, 3333, '(333) 333-3333', '(333) 333-3333'),
(19, 39, '11', '11', '11', '11', '1111', 3, 1111, '(111) 111-1111', '(111) 111-1111'),
(20, 40, '9999', '9999', '9999', '9999', '9999', 2, 99, '(999) 999-9999', '(999) 999-9999'),
(21, 37, '', '', '', '', '', 2, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nom_abr` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`, `nom_abr`) VALUES
(1, 'Aguascalientes', 'Ags.'),
(2, 'Baja California', 'BC'),
(3, 'Baja California Sur', 'BCS'),
(4, 'Campeche', 'Camp.'),
(5, 'Ciudad de México', 'CDMX'),
(6, 'Coahuila de Zaragoza', 'Coah.'),
(7, 'Colima', 'Col.'),
(8, 'Chiapas', 'Chis.'),
(9, 'Chihuahua', 'Chih.'),
(10, 'Durango', 'Dgo.'),
(11, 'Guanajuato', 'Gto.'),
(12, 'Guerrero', 'Gro.'),
(13, 'Hidalgo', 'Hgo.'),
(14, 'Jalisco', 'Jal.'),
(15, 'México', 'Mex.'),
(16, 'Michoacán de Ocampo', 'Mich.'),
(17, 'Morelos', 'Mor.'),
(18, 'Nayarit', 'Nay.'),
(19, 'Nuevo León', 'NL'),
(20, 'Oaxaca', 'Oax.'),
(21, 'Puebla', 'Pue.'),
(22, 'Querétaro', 'Qro.'),
(23, 'Quintana Roo', 'Q. Roo'),
(24, 'San Luis Potosí', 'SLP'),
(25, 'Sinaloa', 'Sin.'),
(26, 'Sonora', 'Son.'),
(27, 'Tabasco', 'Tab.'),
(28, 'Tamaulipas', 'Tamps.'),
(29, 'Tlaxcala', 'Tlax.'),
(30, 'Veracruz de Ignacio de la Llave', 'Ver.'),
(31, 'Yucatán', 'Yuc.'),
(32, 'Zacatecas', 'Zac.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_auto`
--

CREATE TABLE `estatus_auto` (
  `id_estatus` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `rentado` int(11) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estatus_auto`
--

INSERT INTO `estatus_auto` (`id_estatus`, `id_auto`, `rentado`, `activo`) VALUES
(41, 145, 1, 1),
(42, 146, 1, 1),
(43, 147, 1, 1),
(44, 148, 1, 1),
(45, 149, 1, 1),
(46, 150, 1, 1),
(47, 151, 0, 1),
(48, 152, 0, 1),
(49, 152, 0, 1),
(50, 154, 0, 1),
(51, 155, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_renta`
--

CREATE TABLE `factura_renta` (
  `id` int(11) NOT NULL,
  `id_renta` int(11) NOT NULL,
  `tipo_factura` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `datos_factura` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gps`
--

CREATE TABLE `gps` (
  `id` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `gps` float NOT NULL,
  `tipo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `gps`
--

INSERT INTO `gps` (`id`, `id_auto`, `gps`, `tipo`, `monto`) VALUES
(1, 145, 3600, 'Efectivo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `json`
--

CREATE TABLE `json` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direc` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`) VALUES
(1, 'Nissan '),
(2, 'General Motors'),
(3, 'Volkswagen'),
(4, 'Toyota '),
(5, 'KIA '),
(6, 'Honda '),
(7, 'Ford '),
(8, 'Chrysler'),
(9, 'Mazda '),
(10, 'Hyundai '),
(11, 'Renault '),
(12, 'Suzuki '),
(13, 'Chevrolet'),
(14, 'Mercedes-Benz'),
(15, 'BMW '),
(16, 'Audi ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_renta`
--

CREATE TABLE `pagos_renta` (
  `id_pagos` int(11) NOT NULL,
  `id_renta` int(11) NOT NULL,
  `total` float NOT NULL,
  `pagos` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `plazo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `regular` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `minimo` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `id_socio`, `id_auto`, `plazo`, `tipo`, `regular`, `minimo`) VALUES
(259, 15, 145, '1-6', 'A', '22', '22'),
(260, 15, 145, '7-14', 'B', '22', '22'),
(261, 15, 145, '15-30', 'C', '22', '22'),
(262, 15, 146, '1-6', 'A', '1000', '900'),
(263, 15, 146, '7-14', 'B', '800', '700'),
(264, 15, 146, '15-30', 'C', '800', '700'),
(265, 16, 147, '1-6', 'A', '22', '22'),
(266, 16, 147, '7-14', 'B', '22', '2'),
(267, 16, 147, '15-30', 'C', '22', '2'),
(268, 16, 148, '1-6', 'A', '2000', '1900'),
(269, 16, 148, '7-14', 'B', '1800', '1700'),
(270, 16, 148, '15-30', 'C', '1800', '1700'),
(274, 16, 150, '1-6', 'A', '1000', '900'),
(275, 16, 150, '7-14', 'B', '800', '700'),
(276, 16, 150, '15-30', 'C', '800', '700'),
(277, 22, 151, '1-6', 'A', '1200', '1100'),
(278, 22, 151, '7-14', 'B', '1000', '900'),
(279, 22, 151, '15-30', 'C', '1000', '900'),
(280, 21, 152, '1-6', 'A', '2222', '22'),
(281, 21, 152, '7-14', 'B', '22', '22'),
(282, 21, 152, '15-30', 'C', '22', '22'),
(283, 21, 152, '1-6', 'A', '2222', '22'),
(284, 21, 152, '7-14', 'B', '22', '22'),
(285, 21, 152, '15-30', 'C', '22', '22'),
(286, 15, 154, '1-6', 'A', '22', '22'),
(287, 15, 154, '7-14', 'B', '22', '22'),
(288, 15, 154, '15-30', 'C', '22', '22'),
(289, 15, 155, '1-6', 'A', '22', '22'),
(290, 15, 155, '7-14', 'B', '22', '22'),
(291, 15, 155, '15-30', 'C', '22', '22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL,
  `folio` int(11) NOT NULL,
  `carro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id`, `id_socio`, `folio`, `carro`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0),
(3, 2, 2, 0),
(4, 1, 2, 0),
(5, 2, 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renta_autos`
--

CREATE TABLE `renta_autos` (
  `id_renta` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `num_contrato` int(11) NOT NULL,
  `dias` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `fecha_regreso` date NOT NULL,
  `hora_regreso` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_salida` date NOT NULL,
  `hora_salida` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_auto` int(11) NOT NULL,
  `monto` float NOT NULL,
  `plus` float NOT NULL,
  `iva` int(1) NOT NULL,
  `checking` float NOT NULL,
  `factura` int(1) NOT NULL,
  `domicilio_particular` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `hora_extra` int(11) NOT NULL,
  `cobrar` int(11) NOT NULL,
  `cobrar_por` int(11) NOT NULL,
  `precio` float NOT NULL,
  `total_horas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `renta_autos`
--

INSERT INTO `renta_autos` (`id_renta`, `id_vendedor`, `num_contrato`, `dias`, `horas`, `fecha_regreso`, `hora_regreso`, `fecha_salida`, `hora_salida`, `id_auto`, `monto`, `plus`, `iva`, `checking`, `factura`, `domicilio_particular`, `hora_extra`, `cobrar`, `cobrar_por`, `precio`, `total_horas`) VALUES
(113, 2, 1, 5, 6, '2020-04-30', '01:00', '2020-04-24', '18:59', 147, 900, 600, 0, 5000, 0, '[{\"id\":\"15\",\"rfc\":\"555\",\"nombres\":\"Brayan\",\"app\":\"fernando\",\"apm\":\"Nava\",\"correo\":\"brayan_nava18@hotmail.com\",\"calle\":\"RAUL ISIDRO BUTGOS\",\"num_ext\":\"113\",\"num_int\":\"3\",\"colonia\":\"MAGISTERIO\",\"ciudad\":\"5\",\"codigo\":\"40855\",\"id_estado\":\"12\",\"tel_1\":\"(758) 107-1309\",\"tel_2\":\"\"}]', 0, 0, 0, 0, 0),
(114, 2, 2, 12, 12, '2020-05-15', '01:00', '2020-05-02', '12:57', 150, 800, 1200, 0, 4000, 0, '[{\"id\":\"15\",\"rfc\":\"555\",\"nombres\":\"Brayan\",\"app\":\"fernando\",\"apm\":\"Nava\",\"correo\":\"brayan_nava18@hotmail.com\",\"calle\":\"RAUL ISIDRO BUTGOS\",\"num_ext\":\"113\",\"num_int\":\"3\",\"colonia\":\"MAGISTERIO\",\"ciudad\":\"5\",\"codigo\":\"40855\",\"id_estado\":\"12\",\"tel_1\":\"(758) 107-1309\",\"tel_2\":\"\"}]', 0, 0, 0, 0, 0),
(115, 2, 3, 4, 15, '2020-05-17', '01:00', '2020-05-12', '09:46', 145, 700, 200, 1, 0, 0, '[{\"id\":\"15\",\"rfc\":\"555\",\"nombres\":\"Brayan\",\"app\":\"fernando\",\"apm\":\"Nava\",\"correo\":\"brayan_nava18@hotmail.com\",\"calle\":\"RAUL ISIDRO BUTGOS\",\"num_ext\":\"113\",\"num_int\":\"3\",\"colonia\":\"MAGISTERIO\",\"ciudad\":\"5\",\"codigo\":\"40855\",\"id_estado\":\"12\",\"tel_1\":\"(758) 107-1309\",\"tel_2\":\"\"}]', 0, 1, 0, 200, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renta_servicios_adicionales`
--

CREATE TABLE `renta_servicios_adicionales` (
  `id_adisionales` int(11) NOT NULL,
  `id_renta` int(11) NOT NULL,
  `servicios` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `total` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `renta_servicios_adicionales`
--

INSERT INTO `renta_servicios_adicionales` (`id_adisionales`, `id_renta`, `servicios`, `total`) VALUES
(25, 115, '[{\"id\":\"1\",\"servicio\":\"VARIOS CONDUCTORES CON LICENCIA\",\"precio\":\"50\",\"tiempo\":\"1\",\"total\":\"200\"},{\"id\":\"2\",\"servicio\":\"EXT. SEGURO FORANEO\",\"precio\":\"150\",\"tiempo\":\"0\",\"total\":\"150\"}]', '350');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rfc_direccion_moral`
--

CREATE TABLE `rfc_direccion_moral` (
  `id` int(11) NOT NULL,
  `rfc` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_empresa` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calle` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_int` int(11) NOT NULL,
  `num_ext` int(11) NOT NULL,
  `colonia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `municipio` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_estado` int(11) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `tel_1` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tel_2` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rfc_direccion_moral`
--

INSERT INTO `rfc_direccion_moral` (`id`, `rfc`, `nombre_empresa`, `correo`, `calle`, `num_int`, `num_ext`, `colonia`, `municipio`, `id_estado`, `codigo_postal`, `tel_1`, `tel_2`) VALUES
(1, '2222222222222', '222', 'correp.prueba@gmail.com', '22', 222, 22, '222', '222', 3, 222, '(222) 222-2222', '(222) 222-2222'),
(2, '1111111111111', '11', 'nuevo.prueba@gmail.com', '11', 11, 11, '11', '11', 32, 111, '(111) 111-1111', '(111) 111-1111'),
(3, '9999999999999', '9999', 'ferro.prueba@gmail.com', '99', 99, 99, '9', '999', 3, 999, '(999) 999-9999', '(999) 999-9999'),
(4, '7777777777777', 'naruto', 'correp.prueba@gmail.com', 'jejej', 2, 2, 'jjej', '222', 3, 222, '(222) 222-2222', '(222) 222-2222'),
(5, '4444444444444', 'BIMBO', 'bimbo.pan@gmail.com', 'CARRANZA', 444, 4444, 'INDEPENDENCIA', 'CDMX', 5, 444, '(444) 444-4444', '(444) 444-4444'),
(6, '9912351312333', 'SABRITAS', 'sabritas@gmail.com.mx', '5 DE FEBRERO', 1, 20, '5 DE FEBRERO', 'QUERETARO', 22, 40562, '(442) 666-2489', ''),
(7, '8423841236852', 'Coca Cola Refrescos Victoria del Centro, S.A. DE C. V.', 'coca18@gmail.com', 'zaragoza', 1, 52, 'zaragoza', 'QUERETARO', 22, 45321, '(442) 566-3322', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rfc_facturas`
--

CREATE TABLE `rfc_facturas` (
  `id` int(11) NOT NULL,
  `rfc` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calle` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_int` int(11) NOT NULL,
  `num_ext` int(11) NOT NULL,
  `colonia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `municipio` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_estado` int(11) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `tel_1` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tel_2` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rfc_facturas`
--

INSERT INTO `rfc_facturas` (`id`, `rfc`, `calle`, `num_int`, `num_ext`, `colonia`, `municipio`, `id_estado`, `codigo_postal`, `tel_1`, `tel_2`) VALUES
(1, '5555555555555', '1111111111111', 1111, 11111, '1111', '11111', 32, 1111, '(111) 111-1111', '(111) 111-1111'),
(2, '1111111111111', '3333333333', 2228, 2222, '22255', '22', 0, 2288, '(222) 222-2222', '(222) 222-2222'),
(3, 'GMI170524Q87', 'CAMINO REAL DE CARRETAS ', 0, 400, 'MILRENIO III', 'QUERETARO', 22, 76060, '(442) 567-7899', '(443) 555-5555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguro_automovil`
--

CREATE TABLE `seguro_automovil` (
  `id` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `aseguradora` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_poliza` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `vigencia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_emergencia` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `seguro_automovil`
--

INSERT INTO `seguro_automovil` (`id`, `id_auto`, `aseguradora`, `num_poliza`, `vigencia`, `num_emergencia`) VALUES
(49, 105, 'aba', '132168489', '12-02-2021', '8001234569'),
(50, 106, 'Cualitas', '121111', '02-02-2000', '22222'),
(56, 114, '22', '22', '22-02-2022', '222'),
(57, 115, 'Cualitas', '11111', '11-11-2011', '11111'),
(58, 116, 'Cualitas', '11111', '11-11-2011', '11111'),
(63, 121, 'Cualitas', '52555', '05-05-2055', '52231'),
(64, 122, '888', '888', '08-08-2088', '888'),
(65, 123, '222', '22', '22-02-2022', '2222'),
(66, 124, '222', '22', '22-02-2022', '2222'),
(67, 125, '11', '55', '05-05-2055', '555'),
(68, 126, '2222', '222', '05-02-2022', '222'),
(69, 126, '2222', '222', '05-02-2022', '222'),
(70, 126, '2222', '222', '05-02-2022', '222'),
(71, 126, '2222', '222', '05-02-2022', '222'),
(72, 130, '22', '222', '22-02-2022', '2222'),
(73, 131, '2222', '2222', '22-02-2022', '2222'),
(74, 132, '2222', '2222', '22-02-2022', '2222'),
(75, 133, '2222', '2222', '22-02-2022', '2222'),
(76, 134, '2222', '2222', '22-02-2022', '2222'),
(77, 134, '2222', '2222', '22-02-2022', '2222'),
(78, 136, '2222', '2222', '22-02-2022', '2222'),
(79, 137, '55', '55', '05-05-2055', '55'),
(80, 138, '55', '55', '05-05-2055', '55'),
(81, 138, '55', '55', '05-05-2055', '55'),
(82, 140, '99', '999', '09-09-2099', '999999'),
(83, 141, '99', '999', '09-09-2099', '999999'),
(84, 142, '99', '999', '09-09-2099', '999999'),
(85, 143, '22', '22', '22-02-2022', '222'),
(86, 144, '22', '22', '22-02-2022', '22'),
(87, 145, '22', '22', '22-02-2022', '222'),
(88, 146, '2222', '555', '05-05-2055', '55555'),
(89, 147, '22', '22', '22-02-2022', '22'),
(90, 148, 'Cualitas', '89962496', '10-02-2020', '6945621'),
(92, 150, 'Cualitas', '5665233', '22-02-2022', '2665523'),
(93, 151, 'Cualitas', '55554894684', '20-02-2020', '22554556655'),
(94, 152, '22222', '222222', '22-02-2022', '222222222'),
(95, 152, '22222', '222222', '22-02-2022', '222222222'),
(96, 154, '333', '33', '31-12-2022', '222222'),
(97, 155, '222', '222', '22-02-2022', '222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_adicionales`
--

CREATE TABLE `servicios_adicionales` (
  `id_servicios` int(11) NOT NULL,
  `servicio` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tiemp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `servicios_adicionales`
--

INSERT INTO `servicios_adicionales` (`id_servicios`, `servicio`, `tiemp`) VALUES
(1, 'VARIOS CONDUCTORES CON LICENCIA', 1),
(2, 'EXT. SEGURO FORANEO', 0),
(3, 'COASEGURO PARA LLANTAS', 1),
(4, '50% DE DEDUCIBLES', 1),
(5, 'LAVADA INCLUIDA', 0),
(6, 'OUT OF TIME 14', 0),
(7, 'COBERTURA ADICIONAL TOTAL', 1),
(8, 'AUTO SUSTITUTO LOCAL', 1),
(9, 'NO CREDT. CARD', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `id` int(11) NOT NULL,
  `folio` text NOT NULL,
  `nombres` text NOT NULL,
  `apellido_p` text NOT NULL,
  `apellido_m` text NOT NULL,
  `genero` int(2) NOT NULL,
  `nacimiento` text NOT NULL,
  `identificacion` text NOT NULL,
  `num_identificacion` text NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `calle` text NOT NULL,
  `num_ext` text NOT NULL,
  `num_int` text NOT NULL,
  `colonia` text NOT NULL,
  `ciudad_municipio` text NOT NULL,
  `id_estado` int(11) NOT NULL,
  `codigo_postal` varchar(5) NOT NULL,
  `tel_1` text NOT NULL,
  `tel_2` text NOT NULL,
  `correo` text NOT NULL,
  `tipo_socio` varchar(1) NOT NULL,
  `banco` text NOT NULL,
  `cuenta_ban` text NOT NULL,
  `clave_inte` text NOT NULL,
  `foto` text NOT NULL,
  `confirmar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id`, `folio`, `nombres`, `apellido_p`, `apellido_m`, `genero`, `nacimiento`, `identificacion`, `num_identificacion`, `rfc`, `calle`, `num_ext`, `num_int`, `colonia`, `ciudad_municipio`, `id_estado`, `codigo_postal`, `tel_1`, `tel_2`, `correo`, `tipo_socio`, `banco`, `cuenta_ban`, `clave_inte`, `foto`, `confirmar`) VALUES
(15, '1', 'Ana Cristina ', 'Orozco', 'Hernandez', 0, '25-02-2001', 'INE/IFE', '1233666633', '1111111111111', 'nose', '113', '20', 'morelos', 'petatlan', 12, '40862', '(758) 105-9674', '(758) 107-8963', '18302578@utcgg.com.mx', 'B', 'BANCOMER', '1111111111', '2222-2222-2222-2222', '18302578@utcgg.com.mx', 1),
(16, '2', 'Juan', 'Orozco', 'Perez', 0, '08-08-2088', 'INE/IFE', '88', '8888888888888', '888', '88', '888', '888', '888', 2, '88888', '(888) 888-8888', '(888) 888-8888', '16307069@utcgg.com.mx', 'A', 'BANCOMER', '88', '8888-8888-8888-8888', '16307069@utcgg.com.mx', 1),
(17, '3', 'Eduardo', 'Mendoza', 'Peña', 1, '07-07-2077', 'INE/IFE', '77777', '7777777777777', '777', '77', '777', '777', '77', 1, '77777', '(777) 777-7777', '(777) 777-7777', '16307009@utcgg.com.mx', 'B', 'BANCOMER', '7777777777', '7777-7777-7777-7777', '16307009@utcgg.com.mx', 1),
(20, '6', 'Carlos', 'Jaimes', 'Lopez', 0, '31-03-2033', 'PASAPORTE', '3333', '3333333333333', '33', '33', '3333', '3333', '333', 2, '33333', '(333) 333-3333', '(333) 333-3333', '16307069@utcgg.com.mx', 'A', 'BANCOMER', '2333333333', '3333-3333-3333-3333', '16307069@utcgg.com.mx', 1),
(21, '7', 'Rodrigo', 'Gonzales', 'Gerardo', 0, '22-02-2022', 'PASAPORTE', '22222', '2222222222222', '222', '22', '2222', '222', '2222', 3, '22222', '(222) 222-2222', '(222) 222-2222', '18302578@utcgg.com.mx', 'A', 'BANCOMER', '2222222', '2222-2222-2222-2222', '18302578@utcgg.com.mx', 1),
(22, '8', 'Celestino', 'Arroyo', 'Mata', 1, '10-02-2020', 'INE/IFE', '189566666', '1234567890123', 'Av. central', '20', '0', 'Centro', 'Tecpan', 12, '40789', '(742) 110-1126', '(742) 526-9630', '16307069@utcgg.com.mx', 'A', 'BANCOPPEL', '1111111111', '7777-7777-7777-7777', '16307069@utcgg.com.mx', 1),
(23, '9', '5555', '555', '55', 0, '05-05-2055', 'INE/IFE', '555', '9999999999999', '55555', '55555', '55555', '55', '55', 1, '5555', '(555) 555-5555', '(555) 555-5555', '18302578@utcgg.com.mx', 'A', 'BANCOMER', '5555555555', '6666-6666-6666-6666', '18302578@utcgg.com.mx', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `estado`, `ultimo_login`, `fecha`) VALUES
(0, 'Jorge Zuñiga', 'jorge', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'Administrador', 1, '2020-05-10 20:13:26', NULL),
(1, 'Cesar Tabares Castellanos', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 1, '2020-10-22 14:11:42', NULL),
(2, 'Brayan Fernando', 'brayan', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'Vendedor', 1, '2020-05-12 09:36:02', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion_fiscal`
--
ALTER TABLE `direccion_fiscal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion_particular`
--
ALTER TABLE `direccion_particular`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estatus_auto`
--
ALTER TABLE `estatus_auto`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `factura_renta`
--
ALTER TABLE `factura_renta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gps`
--
ALTER TABLE `gps`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `json`
--
ALTER TABLE `json`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos_renta`
--
ALTER TABLE `pagos_renta`
  ADD PRIMARY KEY (`id_pagos`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `renta_autos`
--
ALTER TABLE `renta_autos`
  ADD PRIMARY KEY (`id_renta`);

--
-- Indices de la tabla `renta_servicios_adicionales`
--
ALTER TABLE `renta_servicios_adicionales`
  ADD PRIMARY KEY (`id_adisionales`);

--
-- Indices de la tabla `rfc_direccion_moral`
--
ALTER TABLE `rfc_direccion_moral`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rfc_facturas`
--
ALTER TABLE `rfc_facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguro_automovil`
--
ALTER TABLE `seguro_automovil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios_adicionales`
--
ALTER TABLE `servicios_adicionales`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado` (`id_estado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `direccion_fiscal`
--
ALTER TABLE `direccion_fiscal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `direccion_particular`
--
ALTER TABLE `direccion_particular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `estatus_auto`
--
ALTER TABLE `estatus_auto`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `factura_renta`
--
ALTER TABLE `factura_renta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `gps`
--
ALTER TABLE `gps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `json`
--
ALTER TABLE `json`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pagos_renta`
--
ALTER TABLE `pagos_renta`
  MODIFY `id_pagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `renta_autos`
--
ALTER TABLE `renta_autos`
  MODIFY `id_renta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `renta_servicios_adicionales`
--
ALTER TABLE `renta_servicios_adicionales`
  MODIFY `id_adisionales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `rfc_direccion_moral`
--
ALTER TABLE `rfc_direccion_moral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rfc_facturas`
--
ALTER TABLE `rfc_facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `seguro_automovil`
--
ALTER TABLE `seguro_automovil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `servicios_adicionales`
--
ALTER TABLE `servicios_adicionales`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `autos_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
