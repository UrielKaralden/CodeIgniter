-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-01-2018 a las 07:42:57
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
  `id_videos` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `fecha_publicacion` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `id_videos`, `usuario`, `fecha_publicacion`) VALUES
(1, 'Se la liaste', 1, 'gohan777', '2018-01-08 18:43:38'),
(2, 'Eres basura', 1, 'hater', '2018-01-07 07:33:28'),
(3, 'TÃ­rate por la ventana', 1, 'hater', '2018-01-06 17:26:37'),
(4, 'Desuscribir', 1, 'hater', '2017-12-28 13:25:43'),
(16, 'puta vida\r\n', 1, 'pepe', '2017-12-14 13:31:29'),
(17, 'hola', 1, 'pepe', '2018-01-14 13:30:50'),
(18, 'que', 1, 'amijo', '2017-12-07 07:20:00');

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
  `usuario` varchar(25) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `conectado` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `password`, `conectado`) VALUES
(1, 'amijo', 'amijo@amijo.es', 'amijo', 0),
(5, 'Uriel', 'Uriel@uriel.com', 'Uriel', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `url_video` text NOT NULL,
  `usuario` text NOT NULL,
  `titulo` text NOT NULL,
  `Fecha` timestamp NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `url_video`, `usuario`, `titulo`, `Fecha`, `descripcion`) VALUES
(1, 'urgod.mp4', 'chaotrynda', 'Urgotbait', '2017-12-19 08:04:33', 'Liándola con Urgot');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
