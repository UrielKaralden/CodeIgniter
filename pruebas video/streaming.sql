-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2017 a las 09:17:16
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `streaming`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_videos` int(11) NOT NULL,
  `usuario` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `fecha_publicacion`, `id_videos`, `usuario`) VALUES
(1, 'Se la liaste', '2017-11-28 08:59:57', 1, 'gohan777'),
(2, 'Eres basura', '2017-12-12 08:10:55', 1, 'hater'),
(3, 'TÃ­rate por la ventana', '2017-12-12 08:15:56', 1, 'hater'),
(4, 'Desuscribir', '2017-12-12 08:16:12', 1, 'hater');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miniaturas`
--

CREATE TABLE `miniaturas` (
  `id` int(11) NOT NULL,
  `url_img` text NOT NULL,
  `id_video` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `titulo_video` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `miniaturas`
--

INSERT INTO `miniaturas` (`id`, `url_img`, `id_video`, `usuario`, `titulo_video`) VALUES
(1, './aniviamini.jpg', 2, 'ggnoobs', 'Jugando al lol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_sus_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `url_video` text NOT NULL,
  `usuario` text NOT NULL,
  `titulo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `url_video`, `usuario`, `titulo`) VALUES
(1, './urgod.mp4', 'chaotrynda', 'Urgot bait');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `miniaturas`
--
ALTER TABLE `miniaturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `miniaturas`
--
ALTER TABLE `miniaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
