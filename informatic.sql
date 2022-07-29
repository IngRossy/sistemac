-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2022 a las 07:26:44
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `informatic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL,
  `idfabrica` int(11) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `valor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `idfabrica`, `nombre`, `existencia`, `descripcion`, `valor`) VALUES
(1, 1, 'Camara', 21, 'Es buena camara', '34.56'),
(2, 3, 'lentes RV', 20, 'full 4k', '35.00'),
(3, 2, 'celular', 85, 'sansungs', '1000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(400) DEFAULT NULL,
  `saldo` varchar(10) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `direccion`, `saldo`, `usuario`, `clave`, `categoria`) VALUES
(1, 'Rosa Suarez', 'Gangotea', '', 'rossy', '2525', 1),
(2, 'Maria Pin', 'Pto Lopez', '2825.88', 'cliente', '23456', 2),
(3, 'Pedro Piguave', 'cdla. la FAE', '10000', 'pedro', '1111', 2),
(5, 'David', 'la fae', '10000', 'david', '8888', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabrica`
--

CREATE TABLE `fabrica` (
  `idfabrica` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fabrica`
--

INSERT INTO `fabrica` (`idfabrica`, `nombre`, `telefono`) VALUES
(1, 'In.SIS', '0955558856'),
(2, 'SystemRAE', '0992293568'),
(3, 'tecnology', '0969855855'),
(4, 'fabricanueva', '555555555'),
(5, 'nuevatec', '478947899');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `fecha` varchar(100) DEFAULT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `idcliente`, `fecha`, `total`) VALUES
(1, 2, '2022-07-21', '69.12'),
(2, 2, '2022-07-14', '105');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablapedido`
--

CREATE TABLE `tablapedido` (
  `idtabla` int(11) NOT NULL,
  `idpedido` int(11) DEFAULT NULL,
  `idarticulo` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tablapedido`
--

INSERT INTO `tablapedido` (`idtabla`, `idpedido`, `idarticulo`, `cantidad`) VALUES
(1, 1, 1, 2),
(2, 2, 2, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`),
  ADD KEY `rel` (`idfabrica`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD PRIMARY KEY (`idfabrica`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `rela` (`idcliente`);

--
-- Indices de la tabla `tablapedido`
--
ALTER TABLE `tablapedido`
  ADD PRIMARY KEY (`idtabla`),
  ADD KEY `rela1` (`idpedido`),
  ADD KEY `rela2` (`idarticulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  MODIFY `idfabrica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tablapedido`
--
ALTER TABLE `tablapedido`
  MODIFY `idtabla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `rel` FOREIGN KEY (`idfabrica`) REFERENCES `fabrica` (`idfabrica`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `rela` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`);

--
-- Filtros para la tabla `tablapedido`
--
ALTER TABLE `tablapedido`
  ADD CONSTRAINT `rela1` FOREIGN KEY (`idpedido`) REFERENCES `pedido` (`idpedido`),
  ADD CONSTRAINT `rela2` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
