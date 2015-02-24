-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-02-2015 a las 22:07:02
-- Versión del servidor: 10.0.13-MariaDB
-- Versión de PHP: 5.6.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_asignacion`
--

CREATE TABLE IF NOT EXISTS `auth_asignacion` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_asignacion`
--

INSERT INTO `auth_asignacion` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Administrador', 'javio', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_items`
--

CREATE TABLE IF NOT EXISTS `auth_items` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text
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
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE IF NOT EXISTS `Categorias` (
`idcategoria` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`idcategoria`, `nombre`, `descripcion`) VALUES
(1, 'Damas', 'Ropa para damas'),
(2, 'Caballeros', 'Ropa para caballeros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estado`
--

CREATE TABLE IF NOT EXISTS `Estado` (
`id_estado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Estado`
--

INSERT INTO `Estado` (`id_estado`, `nombre`, `descripcion`) VALUES
(1, 'Activo', 'usuarios activo'),
(2, 'Inactivo', 'usuario inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Historial_Compras`
--

CREATE TABLE IF NOT EXISTS `Historial_Compras` (
  `idHistorial_Compras` int(11) NOT NULL,
  `Pedido_idpedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_usuario`
--

CREATE TABLE IF NOT EXISTS `imagen_usuario` (
`id` int(11) NOT NULL,
  `binaryfile` blob,
  `fileName` varchar(100) DEFAULT NULL,
  `fileType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Inventario`
--

CREATE TABLE IF NOT EXISTS `Inventario` (
`idInventario` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `Producto_idproducto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Inventario`
--

INSERT INTO `Inventario` (`idInventario`, `cantidad`, `Producto_idproducto`) VALUES
(2, 30, 1),
(3, 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodoenvio`
--

CREATE TABLE IF NOT EXISTS `metodoenvio` (
`idmetodoenvio` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
`idmetodopago` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `metodopago`
--

INSERT INTO `metodopago` (`idmetodopago`, `nombre`, `descripcion`) VALUES
(1, 'tarjetas de credito', 'aceptadas visa y mastercard'),
(2, 'transferencia electronica', 'solo trabajamos con pocos bancos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

CREATE TABLE IF NOT EXISTS `Pedido` (
`idpedido` int(11) NOT NULL,
  `numero_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `Usuario_idusuario` int(11) NOT NULL,
  `metodoenvio_idmetodoenvio` int(11) NOT NULL,
  `metodopago_idmetodopago` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Pedido`
--

INSERT INTO `Pedido` (`idpedido`, `numero_pedido`, `fecha`, `cantidad`, `direccion`, `status`, `Usuario_idusuario`, `metodoenvio_idmetodoenvio`, `metodopago_idmetodopago`) VALUES
(1, 1001, '2014-11-27', 13, 'san cristobal', 'en espera', 37, 1, 1),
(2, 1001, '2014-11-27', 15, 'san cristobal', 'en espera', 37, 1, 1),
(4, 1002, '2014-11-27', 15, 'san cristobal', 'en espera', 37, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE IF NOT EXISTS `Productos` (
`idproducto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `Categoria_idcategoria` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Productos`
--

INSERT INTO `Productos` (`idproducto`, `nombre`, `descripcion`, `precio`, `Categoria_idcategoria`) VALUES
(1, 'Chemisse', 'Algodon puro importado', 300, 2),
(2, 'Zapatos bonitos', 'los mas comodos del mercado', 12000, 1),
(3, 'Pantalones 2', 'se usan para ponerse', 5000, 2),
(4, 'blusa', 'de esas que se ponen', 2000, 1),
(5, 'Botas', 'unas jodas muy caras', 10000, 2),
(6, 'Pantalones', 'se colocan', 20000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto_Pedido`
--

CREATE TABLE IF NOT EXISTS `Producto_Pedido` (
  `idProducto_Pedido` int(11) NOT NULL,
  `Precio_Compra` decimal(6,0) NOT NULL,
  `Pedido_idpedido` int(11) NOT NULL,
  `Producto_idproducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reclamo`
--

CREATE TABLE IF NOT EXISTS `Reclamo` (
  `idReclamo` int(11) NOT NULL,
  `Descripcion` varchar(150) DEFAULT NULL,
  `Respuesta` varchar(150) DEFAULT NULL,
  `Usuario_idusuario` int(11) NOT NULL,
  `Pedido_idpedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rol`
--

CREATE TABLE IF NOT EXISTS `Rol` (
`idrol` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Rol`
--

INSERT INTO `Rol` (`idrol`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', 'Rol de los Administradores'),
(2, 'Cliente', 'Rol de los clientes'),
(3, 'Usuario', 'Rol de usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sexos`
--

CREATE TABLE IF NOT EXISTS `Sexos` (
`id_sexo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Sexos`
--

INSERT INTO `Sexos` (`id_sexo`, `nombre`, `descripcion`) VALUES
(1, 'Femenino', 'Sexo de las Mujeres'),
(2, 'Masculino', 'Sexo de los Hombres'),
(3, 'Otro', 'Sexo de los otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
`idusuario` int(11) NOT NULL,
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
  `Estado_idestado` varchar(50) NOT NULL,
  `Rol_idrol` int(11) NOT NULL,
  `fecha_registro` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`idusuario`, `nombre`, `apellido`, `cedula`, `direccion`, `telefono`, `fecha_nacimiento`, `email`, `username`, `password`, `Sexo_idsexo`, `Estado_idestado`, `Rol_idrol`, `fecha_registro`) VALUES
(9, 'Alexis Javier', 'Moreno Urbina', '', '', '04264567689', '0000-00-00', 'javiomoreno@gmail.com', 'javio', '2396d5f8cd3b89883d94a39c9e87158b', 0, 'activo', 1, '2014-11-24'),
(37, 'Fernando Enrique', 'Medina Andara', '', '', '04247193844', '0000-00-00', 'kique19834@gmail.com', 'nando', '12345', 0, 'incativo', 2, '2014-11-25'),
(38, 'Petronilo', 'Zambrano Escalante', '', '', '04264567689', '0000-00-00', 'pedr2o@gmail.com', 'pedroq', 'c20ad4d76fe97759aa27a0c99bff6710', 0, 'activo', 2, '2014-12-05'),
(39, 'Maria Jose', 'Zambrano Escalante', '12345678', 'La Florida', '04264567689', '1995-08-17', 'majozaes17@gmail.com', 'majo', '12345', 1, 'activo', 1, '2014-12-08'),
(40, 'Juan Luis', 'Guerra', '13122352', 'Los Cuatro Cuarenta', '20491209420', '1974-12-23', 'juanluisguerra@gmail.com', 'juanluis', '502ff82f7f1f8218dd41201fe4353687', 3, 'activo', 2, '2014-12-08'),
(41, 'Maria Jose', 'Zambrano Escalante', '13122352', 'La Florida', '04264567689', '1995-08-17', 'majozaes1@gmail.com', 'majozaes', 'majo', 1, 'activo', 2, '2015-02-22'),
(43, 'Maria Jose', 'Zambrano Escalante', '12345678', 'La Florida', '04264567689', '1995-08-17', 'majozaes@gmail.com', 'majoza', 'majo', 1, 'activo', 2, '2015-02-22'),
(53, 'Fernando', 'Medina', '12345678', 'Los Cuatro Cuarenta', '04264567689', '2015-02-09', 'fernando@gmail.com', 'fernando', '202cb962ac59075b964b07152d234b70', 1, 'activo', 2, '2015-02-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auth_asignacion`
--
ALTER TABLE `auth_asignacion`
 ADD PRIMARY KEY (`itemname`,`userid`);

--
-- Indices de la tabla `auth_items`
--
ALTER TABLE `auth_items`
 ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `auth_relacion`
--
ALTER TABLE `auth_relacion`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indices de la tabla `Categorias`
--
ALTER TABLE `Categorias`
 ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `Estado`
--
ALTER TABLE `Estado`
 ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `Historial_Compras`
--
ALTER TABLE `Historial_Compras`
 ADD PRIMARY KEY (`idHistorial_Compras`), ADD KEY `fk_Historial_Compras_Pedido1_idx` (`Pedido_idpedido`);

--
-- Indices de la tabla `imagen_usuario`
--
ALTER TABLE `imagen_usuario`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Inventario`
--
ALTER TABLE `Inventario`
 ADD PRIMARY KEY (`idInventario`), ADD KEY `fk_Inventario_Producto1_idx` (`Producto_idproducto`);

--
-- Indices de la tabla `metodoenvio`
--
ALTER TABLE `metodoenvio`
 ADD PRIMARY KEY (`idmetodoenvio`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
 ADD PRIMARY KEY (`idmetodopago`);

--
-- Indices de la tabla `Pedido`
--
ALTER TABLE `Pedido`
 ADD PRIMARY KEY (`idpedido`), ADD KEY `fk_Pedido_Usuario1_idx` (`Usuario_idusuario`), ADD KEY `fk_Pedido_metodoenvio1_idx` (`metodoenvio_idmetodoenvio`), ADD KEY `fk_Pedido_metodopago1_idx` (`metodopago_idmetodopago`);

--
-- Indices de la tabla `Productos`
--
ALTER TABLE `Productos`
 ADD PRIMARY KEY (`idproducto`), ADD KEY `fk_Producto_Categoria1_idx` (`Categoria_idcategoria`);

--
-- Indices de la tabla `Producto_Pedido`
--
ALTER TABLE `Producto_Pedido`
 ADD PRIMARY KEY (`idProducto_Pedido`), ADD KEY `fk_Producto_Pedido_Pedido1_idx` (`Pedido_idpedido`), ADD KEY `fk_Producto_Pedido_Producto1_idx` (`Producto_idproducto`);

--
-- Indices de la tabla `Reclamo`
--
ALTER TABLE `Reclamo`
 ADD PRIMARY KEY (`idReclamo`), ADD KEY `fk_Reclamo_Usuario1_idx` (`Usuario_idusuario`), ADD KEY `fk_Reclamo_Pedido1_idx` (`Pedido_idpedido`);

--
-- Indices de la tabla `Rol`
--
ALTER TABLE `Rol`
 ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `Sexos`
--
ALTER TABLE `Sexos`
 ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
 ADD PRIMARY KEY (`idusuario`), ADD KEY `fk_Usuario_Rol_idx` (`Rol_idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categorias`
--
ALTER TABLE `Categorias`
MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Estado`
--
ALTER TABLE `Estado`
MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `imagen_usuario`
--
ALTER TABLE `imagen_usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Inventario`
--
ALTER TABLE `Inventario`
MODIFY `idInventario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `metodoenvio`
--
ALTER TABLE `metodoenvio`
MODIFY `idmetodoenvio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `metodopago`
--
ALTER TABLE `metodopago`
MODIFY `idmetodopago` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Pedido`
--
ALTER TABLE `Pedido`
MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Productos`
--
ALTER TABLE `Productos`
MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Rol`
--
ALTER TABLE `Rol`
MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `Sexos`
--
ALTER TABLE `Sexos`
MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
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
-- Filtros para la tabla `Historial_Compras`
--
ALTER TABLE `Historial_Compras`
ADD CONSTRAINT `fk_Historial_Compras_Pedido1` FOREIGN KEY (`Pedido_idpedido`) REFERENCES `Pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Inventario`
--
ALTER TABLE `Inventario`
ADD CONSTRAINT `fk_Inventario_Producto1` FOREIGN KEY (`Producto_idproducto`) REFERENCES `Productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Pedido`
--
ALTER TABLE `Pedido`
ADD CONSTRAINT `fk_Pedido_metodoenvio1` FOREIGN KEY (`metodoenvio_idmetodoenvio`) REFERENCES `metodoenvio` (`idmetodoenvio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Pedido_metodopago1` FOREIGN KEY (`metodopago_idmetodopago`) REFERENCES `metodopago` (`idmetodopago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Pedido_Usuario1` FOREIGN KEY (`Usuario_idusuario`) REFERENCES `Usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Productos`
--
ALTER TABLE `Productos`
ADD CONSTRAINT `fk_Producto_Categoria1` FOREIGN KEY (`Categoria_idcategoria`) REFERENCES `Categorias` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Producto_Pedido`
--
ALTER TABLE `Producto_Pedido`
ADD CONSTRAINT `fk_Producto_Pedido_Pedido1` FOREIGN KEY (`Pedido_idpedido`) REFERENCES `Pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Producto_Pedido_Producto1` FOREIGN KEY (`Producto_idproducto`) REFERENCES `Productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Reclamo`
--
ALTER TABLE `Reclamo`
ADD CONSTRAINT `fk_Reclamo_Pedido1` FOREIGN KEY (`Pedido_idpedido`) REFERENCES `Pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Reclamo_Usuario1` FOREIGN KEY (`Usuario_idusuario`) REFERENCES `Usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
ADD CONSTRAINT `fk_Usuario_Rol` FOREIGN KEY (`Rol_idrol`) REFERENCES `Rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
