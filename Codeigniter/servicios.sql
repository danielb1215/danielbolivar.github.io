-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2017 a las 04:29:47
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercicios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratantes`
--

CREATE TABLE `contratantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `cedula` int(100) NOT NULL,
  `telefono` int(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `telefono` int(100) NOT NULL,
  `cedula` int(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ciudad` varchar(50) NOT NULL,
  `telefono2` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estatus` int(11) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `habilidades` varchar(500) NOT NULL,
  `experiencia` varchar(500) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `clave`, `telefono`, `cedula`, `fecha_nacimiento`, `fecha_registro`, `ciudad`, `telefono2`, `foto`, `estatus`, `cargo`, `descripcion`, `habilidades`, `experiencia`, `file`) VALUES
(11, 'Admin', 'Admin', 'Admin@proyecto.com', '12345', 6565736, 1019145307, '1998-12-12', '2017-04-03 18:27:38', 'Bogota', 2147483647, 'avatar5.png', 1, 'Enfermera', 'Suspendisse in ipsum ac felis varius faucibus. Fusce sodales vestibulum augue sed consectetur. Duis laoreet, velit quis consequat viverra, augue neque dapibus mauris, in cursus tortor lorem ac odio. Morbi viverra lorem vel posuere accumsan. Morbi et pharetra nibh. Donec convallis tincidunt augue, sed fermentum velit tristique quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse porta et turpis eget aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae mattis tellus, non hendrerit nunc.', 'Suspendisse in ipsum ac felis varius faucibus. Fusce sodales vestibulum augue sed consectetur. Duis laoreet, velit quis consequat viverra, augue neque dapibus mauris, in cursus tortor lorem ac odio. Morbi viverra lorem vel posuere accumsan. Morbi et pharetra nibh. Donec convallis tincidunt augue, sed fermentum velit tristique quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse porta et turpis eget aliquam. Lorem ipsum dolor sit amet, consecte', ' Suspendisse in ipsum ac felis varius faucibus. Fusce sodales vestibulum augue sed consectetur. Duis laoreet, velit quis consequat viverra, augue neque dapibus mauris, in cursus tortor lorem ac odio. Morbi viverra lorem vel posuere accumsan. Morbi et pharetra nibh. Donec convallis tincidunt augue, sed fermentum velit tristique quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse porta et turpis eget aliquam. Lorem ipsum dolor sit amet, consect', 'Hoja_de_vida7.pdf'),
(12, 'Operario', 'Operario', 'operario@proyecto.com', '12345', 3016589, 19991998, '1998-05-25', '2017-04-03 18:28:59', 'Medellin', 5698785, 'avatar5.png', 0, '1', 'Inserte aca una descripcion para tener mayores posibilidades de ser escogido', 'Inserte aca sus habilidades para tener mayores posibilidades de ser escogido', 'Inserte aca su experiencia laboral para tener mayores posibilidades de ser escogido', 'Inserte un Archivo..'),
(13, 'Usuario', 'usuario', 'usuario@proyecto.com', '12345', 5586972, 100002657, '1965-05-25', '2017-04-03 18:30:02', 'Bucaramanga', 783098, 'avatar5.png', 0, '1', 'Inserte aca una descripcion para tener mayores posibilidades de ser escogido', 'Inserte aca sus habilidades para tener mayores posibilidades de ser escogido', 'Inserte aca su experiencia laboral para tener mayores posibilidades de ser escogido', 'Inserte un Archivo..');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contratantes`
--
ALTER TABLE `contratantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contratantes`
--
ALTER TABLE `contratantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
