-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2018 a las 20:04:20
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cbb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comics`
--

CREATE TABLE `comics` (
  `id` int(100) NOT NULL,
  `title` varchar(25) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `universe` varchar(25) NOT NULL,
  `edition` varchar(25) NOT NULL,
  `rating` int(1) NOT NULL,
  `author` varchar(25) NOT NULL,
  `illustrator` varchar(25) NOT NULL,
  `genre` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comics`
--

INSERT INTO `comics` (`id`, `title`, `cover`, `release_date`, `universe`, `edition`, `rating`, `author`, `illustrator`, `genre`, `description`, `price`) VALUES
(1, 'SpiderMan meets Deadpool', 'images/cover-1.jpg', '2012-05-12', 'Marvel', 'ISSUE #310', 5, 'George Perez', 'George Pere', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '45'),
(2, 'Wonder Woman', 'images/cover-2.jpg', '2011-04-09', 'DC', 'ISSUE #1', 4, 'Cosme Fulanito', 'Cosme Fulanito', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '443');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nombre_completo` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `pais_nacimiento` varchar(100) COLLATE utf8_bin NOT NULL,
  `img_avatar` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `pass_usuario` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre_completo`, `nombre_usuario`, `email_usuario`, `pais_nacimiento`, `img_avatar`, `pass_usuario`) VALUES
(1, 'stefania', 'stefi', 'stefi@stefi.com', 'Vietnam', NULL, '$2y$10$yqROxTg.nb8lyOUwLjlhGeTX6pSdkqPjYiDVxnEy3YgWOenhvbvDK'),
(2, 'marcos', 'marquitos', 'marcos@marcos.com', 'TurkmenistÃ¡n', NULL, '$2y$10$rRU7M9g6Oi1JsN6Uct5QV.UillXFCKpb7zsTeP1z3SPcfs34krK82'),
(3, 'Clack Kent', 'Superman', 'super@super.com', 'Yemen', NULL, '$2y$10$DesNDKeSfbQHY9jTm.jEdeROVA.PvvwrXsiNvDq0YhGiojlg.AO6e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD UNIQUE KEY `nombreusuario_UNIQUE` (`nombre_usuario`),
  ADD UNIQUE KEY `email_UNIQUE` (`email_usuario`),
  ADD UNIQUE KEY `idusuarios_UNIQUE` (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
