-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-03-2015 a las 18:39:46
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_asignacion`
--

CREATE TABLE IF NOT EXISTS `auth_asignacion` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_asignacion`
--

INSERT INTO `auth_asignacion` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Administrador', 'javio', NULL, 'N;'),
('Cliente', 'enedina', NULL, 'N;'),
('Cliente', 'gerardo', NULL, 'N;'),
('Cliente', 'majo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_items`
--

CREATE TABLE IF NOT EXISTS `auth_items` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_items`
--

INSERT INTO `auth_items` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Administrador', 2, 'Rol de Administrador', NULL, 'N;'),
('Cliente', 2, 'Rol de los clientes', NULL, NULL),
('Usuario', 2, 'Rol de Usuario', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_relacion`
--

CREATE TABLE IF NOT EXISTS `auth_relacion` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nombre`, `descripcion`) VALUES
(1, 'Damas', 'Ropa para damas'),
(2, 'Caballeros', 'Ropa para caballeros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre`, `descripcion`) VALUES
(1, 'Activo', 'usuarios activo'),
(2, 'Inactivo', 'usuario inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Productos_id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `Productos_id_producto` (`Productos_id_producto`),
  KEY `Usuarios_username` (`Usuarios_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `Usuarios_username`, `Productos_id_producto`, `cantidad`) VALUES
(29, 'enedina', 1, 3),
(30, 'enedina', 2, 3),
(31, 'enedina', 2, 3),
(32, 'enedina', 2, 3),
(33, 'enedina', 2, 3),
(34, 'enedina', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_compras`
--

CREATE TABLE IF NOT EXISTS `historial_compras` (
  `idHistorial_Compras` int(11) NOT NULL,
  `Pedido_idpedido` int(11) NOT NULL,
  PRIMARY KEY (`idHistorial_Compras`),
  KEY `fk_Historial_Compras_Pedido1_idx` (`Pedido_idpedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_usuario`
--

CREATE TABLE IF NOT EXISTS `imagen_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `binaryfile` blob,
  `fileName` varchar(100) DEFAULT NULL,
  `fileType` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE IF NOT EXISTS `inventarios` (
  `idInventario` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idInventario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `inventarios`
--

INSERT INTO `inventarios` (`idInventario`, `cantidad`) VALUES
(1, 30),
(2, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodoenvio`
--

CREATE TABLE IF NOT EXISTS `metodoenvio` (
  `idmetodoenvio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`idmetodoenvio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `metodoenvio`
--

INSERT INTO `metodoenvio` (`idmetodoenvio`, `nombre`, `descripcion`) VALUES
(1, 'balija asegurada', 'viaja comodamente en carros blindados'),
(2, 'balija sin asegurar', 'la mercancia que viaja de esta manera NO se encuentra asegurada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE IF NOT EXISTS `metodopago` (
  `idmetodopago` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`idmetodopago`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `metodopago`
--

INSERT INTO `metodopago` (`idmetodopago`, `nombre`, `descripcion`) VALUES
(1, 'tarjetas de credito', 'aceptadas visa y mastercard'),
(2, 'transferencia electronica', 'solo trabajamos con pocos bancos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `numero_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `Usuario_idusuario` int(11) NOT NULL,
  `metodoenvio_idmetodoenvio` int(11) NOT NULL,
  `metodopago_idmetodopago` int(11) NOT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `fk_Pedido_Usuario1_idx` (`Usuario_idusuario`),
  KEY `fk_Pedido_metodoenvio1_idx` (`metodoenvio_idmetodoenvio`),
  KEY `fk_Pedido_metodopago1_idx` (`metodopago_idmetodopago`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `numero_pedido`, `fecha`, `cantidad`, `direccion`, `status`, `Usuario_idusuario`, `metodoenvio_idmetodoenvio`, `metodopago_idmetodopago`) VALUES
(1, 1001, '2014-11-27', 13, 'san cristobal', 'en espera', 37, 1, 1),
(2, 1001, '2014-11-27', 15, 'san cristobal', 'en espera', 37, 1, 1),
(4, 1002, '2014-11-27', 15, 'san cristobal', 'en espera', 37, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `Categoria_idcategoria` int(11) NOT NULL,
  `Inventarios_idInventario` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `fk_Producto_Categoria1_idx` (`Categoria_idcategoria`),
  KEY `Inventario_idinventario` (`Inventarios_idInventario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `nombre`, `descripcion`, `precio`, `Categoria_idcategoria`, `Inventarios_idInventario`, `foto`) VALUES
(1, 'Chemisse', 'Algodon puro importado', 300, 2, 1, 'chemise.jpg'),
(2, 'Zapatos bonitos', 'los mas comodos del mercado', 12000, 1, 2, 'zapatos.jpg'),
(3, 'Swaeter', 'Se usa cuando hace frio o vas en moto', 2800, 1, 1, 'swaeter.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_pedido`
--

CREATE TABLE IF NOT EXISTS `producto_pedido` (
  `idProducto_Pedido` int(11) NOT NULL,
  `Precio_Compra` decimal(6,0) NOT NULL,
  `Pedido_idpedido` int(11) NOT NULL,
  `Producto_idproducto` int(11) NOT NULL,
  PRIMARY KEY (`idProducto_Pedido`),
  KEY `fk_Producto_Pedido_Pedido1_idx` (`Pedido_idpedido`),
  KEY `fk_Producto_Pedido_Producto1_idx` (`Producto_idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE IF NOT EXISTS `reclamo` (
  `idReclamo` int(11) NOT NULL,
  `Descripcion` varchar(150) DEFAULT NULL,
  `Respuesta` varchar(150) DEFAULT NULL,
  `Usuario_idusuario` int(11) NOT NULL,
  `Pedido_idpedido` int(11) NOT NULL,
  PRIMARY KEY (`idReclamo`),
  KEY `fk_Reclamo_Usuario1_idx` (`Usuario_idusuario`),
  KEY `fk_Reclamo_Pedido1_idx` (`Pedido_idpedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', 'Rol de los Administradores'),
(2, 'Cliente', 'Rol de los clientes'),
(3, 'Usuario', 'Rol de usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexos`
--

CREATE TABLE IF NOT EXISTS `sexos` (
  `id_sexo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sexo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `sexos`
--

INSERT INTO `sexos` (`id_sexo`, `nombre`, `descripcion`) VALUES
(1, 'Femenino', 'Sexo de las Mujeres'),
(2, 'Masculino', 'Sexo de los Hombres'),
(3, 'Otro', 'Sexo de los otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `Sexo_idsexo` int(11) NOT NULL,
  `Estado_idestado` int(11) NOT NULL,
  `Rol_idrol` int(11) NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_Usuario_Rol_idx` (`Rol_idrol`),
  KEY `Sexo_idsexo` (`Sexo_idsexo`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre`, `apellido`, `cedula`, `direccion`, `telefono`, `fecha_nacimiento`, `email`, `username`, `password`, `Sexo_idsexo`, `Estado_idestado`, `Rol_idrol`, `fecha_registro`, `foto`) VALUES
(9, 'Alexis Javier', 'Moreno Urbina', '18393355', 'La FLorida', '04264567689', '0000-00-00', 'javiomoreno@gmail.com', 'javio', '2396d5f8cd3b89883d94a39c9e87158b', 1, 1, 1, '2014-11-24', 'javier.png'),
(37, 'Fernando Enrique', 'Medina Andara', '', '', '04247193844', '0000-00-00', 'kique19834@gmail.com', 'nando', '12345', 1, 1, 2, '2014-11-25', 'silueta_hom.png'),
(38, 'Petronilo', 'Zambrano Escalante', '', '', '04264567689', '0000-00-00', 'pedr2o@gmail.com', 'pedroq', 'c20ad4d76fe97759aa27a0c99bff6710', 1, 1, 2, '2014-12-05', 'silueta_hom.png'),
(39, 'Maria Jose', 'Zambrano Escalante', '12345678', 'La Florida', '04264567689', '1995-08-17', 'majozaes17@gmail.com', 'majo', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1, 1, '2014-12-08', 'silueta_muj.png'),
(41, 'Maria Jose', 'Zambrano Escalante', '13122352', 'La Florida', '04264567689', '1995-08-17', 'majozaes1@gmail.com', 'majozaes', 'majo', 1, 1, 2, '2015-02-22', ''),
(43, 'Maria Jose', 'Zambrano Escalante', '12345678', 'La Florida', '04264567689', '1995-08-17', 'majozaes@gmail.com', 'majoza', 'majo', 1, 1, 2, '2015-02-22', ''),
(53, 'Fernando', 'Medina', '12345678', 'Los Cuatro Cuarenta', '04264567689', '2015-02-09', 'fernando@gmail.com', 'fernando', '202cb962ac59075b964b07152d234b70', 1, 2, 2, '2015-02-22', 'silueta.jpg'),
(54, 'Enedina', 'Urbina', '6611832', 'La Florida parte alta', '04164769710', '1960-06-19', 'enedinaurbina@gmail.com', 'enedina', '827ccb0eea8a706c4c34a16891f84e7b', 1, 2, 2, '2015-02-24', 'silueta_muj.png'),
(55, 'Gerardo', 'Moreno Ramirez', '4205369', 'La Florida parte alta', '02773117750', '1943-04-23', 'gerardomoreno@gmail.com', 'gerardo', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, 2, '2015-02-24', 'silueta_hom.png');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_asignacion`
--
ALTER TABLE `auth_asignacion`
  ADD CONSTRAINT `auth_asignacion_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_relacion`
--
ALTER TABLE `auth_relacion`
  ADD CONSTRAINT `auth_relacion_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_relacion_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`Usuarios_username`) REFERENCES `usuarios` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`Productos_id_producto`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial_compras`
--
ALTER TABLE `historial_compras`
  ADD CONSTRAINT `fk_Historial_Compras_Pedido1` FOREIGN KEY (`Pedido_idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_Pedido_metodoenvio1` FOREIGN KEY (`metodoenvio_idmetodoenvio`) REFERENCES `metodoenvio` (`idmetodoenvio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pedido_metodopago1` FOREIGN KEY (`metodopago_idmetodopago`) REFERENCES `metodopago` (`idmetodopago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pedido_Usuario1` FOREIGN KEY (`Usuario_idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Producto_Categoria1` FOREIGN KEY (`Categoria_idcategoria`) REFERENCES `categorias` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Inventarios_idInventario`) REFERENCES `inventarios` (`idInventario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto_pedido`
--
ALTER TABLE `producto_pedido`
  ADD CONSTRAINT `fk_Producto_Pedido_Pedido1` FOREIGN KEY (`Pedido_idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producto_Pedido_Producto1` FOREIGN KEY (`Producto_idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD CONSTRAINT `fk_Reclamo_Pedido1` FOREIGN KEY (`Pedido_idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Reclamo_Usuario1` FOREIGN KEY (`Usuario_idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuario_Rol` FOREIGN KEY (`Rol_idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Sexo_idsexo`) REFERENCES `sexos` (`id_sexo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
