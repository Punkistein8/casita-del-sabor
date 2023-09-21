-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-09-2023 a las 00:03:06
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `frle_casita_del_sabor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alcohol`
--

DROP TABLE IF EXISTS `alcohol`;
CREATE TABLE IF NOT EXISTS `alcohol` (
  `id_alc` int NOT NULL AUTO_INCREMENT,
  `nombre_alc` varchar(100) NOT NULL,
  `precio_alc` double NOT NULL,
  `foto_alc` varchar(200) NOT NULL,
  PRIMARY KEY (`id_alc`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `alcohol`
--

INSERT INTO `alcohol` (`id_alc`, `nombre_alc`, `precio_alc`, `foto_alc`) VALUES
(1, 'Johnnie Walker - Black Label', 85.9, 'https://images.unsplash.com/photo-1569529465841-dfecdab7503b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80'),
(3, 'Remy Martin - Ultra Fine Champagne', 90.99, 'https://cdn.pixabay.com/photo/2011/03/25/08/27/liquor-5884_960_720.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda-hombre`
--

DROP TABLE IF EXISTS `prenda-hombre`;
CREATE TABLE IF NOT EXISTS `prenda-hombre` (
  `id_ph` int NOT NULL AUTO_INCREMENT,
  `nombre_ph` varchar(40) NOT NULL,
  `precio_ph` double NOT NULL,
  `tipo_ph` varchar(25) NOT NULL,
  `foto_ph` varchar(250) NOT NULL,
  `descripcion_ph` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ph`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prenda-hombre`
--

INSERT INTO `prenda-hombre` (`id_ph`, `nombre_ph`, `precio_ph`, `tipo_ph`, `foto_ph`, `descripcion_ph`) VALUES
(1, 'Camarones', 4.5, 'Entrada', 'https://th.bing.com/th/id/OIP.Ns2LYZ7KBu3g_bxaS5IgmwHaFj?pid=ImgDet&rs=1', 'Pequeña cazuela de camarones con verduras'),
(19, 'Crevette', 15.85, 'Chaqueta', 'https://i.pinimg.com/originals/4f/1e/d9/4f1ed914549ec3858b87206f2de9912f.jpg', 'Gambas decoradas en un rico platillo de entrada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda-mujer`
--

DROP TABLE IF EXISTS `prenda-mujer`;
CREATE TABLE IF NOT EXISTS `prenda-mujer` (
  `id_pm` int NOT NULL AUTO_INCREMENT,
  `nombre_pm` varchar(40) NOT NULL,
  `precio_pm` double NOT NULL,
  `tipo_pm` varchar(25) NOT NULL,
  `foto_pm` varchar(250) NOT NULL,
  `descripcion_pm` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pm`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prenda-mujer`
--

INSERT INTO `prenda-mujer` (`id_pm`, `nombre_pm`, `precio_pm`, `tipo_pm`, `foto_pm`, `descripcion_pm`) VALUES
(13, 'Whiskey GOT', 45.5, 'Whiskey', 'https://images.unsplash.com/photo-1602166242292-93a00e63e8e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80', 'Whiskey escocés representativo de Game Of Thrones, 9 años de añejamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudcompra`
--

DROP TABLE IF EXISTS `solicitudcompra`;
CREATE TABLE IF NOT EXISTS `solicitudcompra` (
  `id_soC` int NOT NULL AUTO_INCREMENT,
  `listaProds_soC` varchar(200) DEFAULT NULL,
  `fechaCreac_soC` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombre_soC` varchar(20) NOT NULL,
  `apellidos_soC` varchar(20) NOT NULL,
  `cedula_soC` int NOT NULL,
  `tipoProd_soC` varchar(20) NOT NULL,
  `fk_id_usuario` int NOT NULL,
  PRIMARY KEY (`id_soC`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologia`
--

DROP TABLE IF EXISTS `tecnologia`;
CREATE TABLE IF NOT EXISTS `tecnologia` (
  `id_tec` int NOT NULL AUTO_INCREMENT,
  `nombre_tec` varchar(200) NOT NULL,
  `marca_tec` varchar(200) NOT NULL,
  `precio_tec` double NOT NULL,
  `foto_tec` varchar(200) NOT NULL,
  PRIMARY KEY (`id_tec`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tecnologia`
--

INSERT INTO `tecnologia` (`id_tec`, `nombre_tec`, `marca_tec`, `precio_tec`, `foto_tec`) VALUES
(9, 'Brochetas', 'Barato', 55, 'https://images.unsplash.com/photo-1603360946369-dc9bb6258143?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usu` int NOT NULL AUTO_INCREMENT,
  `nombre_usu` varchar(50) NOT NULL,
  `user_usu` varchar(50) NOT NULL,
  `pass_usu` varchar(50) NOT NULL,
  `tipo_usu` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nombre_usu`, `user_usu`, `pass_usu`, `tipo_usu`) VALUES
(1, 'Administrador 1', 'admin', 'admin', 'admin'),
(2, 'Juan', 'juan', '123', 'user'),
(6, 'Saul', 'saul@gmail.com', 'Saulero123!', 'user'),
(7, 'Henry', 'henry@gmail.com', '12345678', 'user'),
(8, 'Prueba', 'prueba@gmail.com', '12345678', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
