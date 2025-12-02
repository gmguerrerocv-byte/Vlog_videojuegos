-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2025 a las 21:47:33
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vlog_videojueos_los_frikis`
--
CREATE DATABASE IF NOT EXISTS `vlog_videojueos_los_frikis` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vlog_videojueos_los_frikis`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'ARCADE'),
(2, 'AVENTURA'),
(3, 'BEAT \'EM UP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `developers`
--

CREATE TABLE `developers` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `email` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `developers`
--

INSERT INTO `developers` (`id`, `nombre`, `img1`, `email`) VALUES
(1, 'Odila', 'odila.png', 'odilabalbi1992@gmail.com'),
(2, 'Gonzalo', 'gonzalo.png', 'gmguerrerocv@gmail.com'),
(3, 'Diego ', 'diego.png', 'diego.sebasmassaro@gmail.com'),
(4, 'Ruan', 'erwan.png', 'ruan.dlv.46@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `nombre_completo` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre_usuario`, `nombre_completo`, `password`) VALUES
(1, 'tumama@gmail.com', 'Gonzalo', 'Gonzalo Guerrero', '$2y$10$DerWoQLy8msGfvNrE2MxU.NOh4emX23mihJVaSjbVblBQB8ae5.a2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `id_categoria` int(11) UNSIGNED NOT NULL,
  `compania` varchar(150) NOT NULL,
  `lanzamiento` varchar(150) NOT NULL,
  `plataforma` varchar(150) NOT NULL,
  `bajada` text NOT NULL,
  `img1` varchar(150) NOT NULL,
  `link` varchar(250) NOT NULL,
  `tiene` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `nombre`, `id_categoria`, `compania`, `lanzamiento`, `plataforma`, `bajada`, `img1`, `link`, `tiene`) VALUES
(1, 'PAC MAN', 1, 'Namco', '1980', 'Arcade', 'El protagonista de Pac-man es un círculo amarillo al que le falta una porción y que asemeja a una boca, que debe ir comiendo todos los puntos del tablero, sin ser cazado por los fantasmas. Existen unos puntos más visibles que, al comerlos, dan poderes a Pac-man, que le permitirán devorar durante unos segundos a los fantasmas, que regresarán a su guarida. También aparecerán durante el juego algunos elementos (cerezas, fresas, manzanas...) que al comerlos darán a Pac-man un extra de puntos.', 'pacman.jpg', 'https://www.pacmangratis.net', 'Jugar'),
(2, 'Donkey Kong', 1, 'Nintendo', '1981', 'Arcade', 'Donkey Kong trata sobre un gorila gigante que secuestra a una joven llamada Pauline, y un carpintero llamado Jumpman debe rescatarla.,', 'donkeykong.webp', 'https://www.minijuegos.com/juego/donkey-kong', 'Jugar'),
(3, 'TETRIS', 1, 'Tetris Holding', '1984', 'Game Boy, Super Nintendo, Mega Drive, Atari, Play Station,', 'Tetris es un juego sencillo: la pantalla se compone de un espacio rectangular en el que van cayendo figuras geométricas hechas de cubos. Las piezas van cayendo desde la parte de arriba de la pantalla y se van acumulando en la parte de abajo. El jugador puede mover cada una de ellas de manera que cada fila completa de cubos desaparece, dando puntos al jugador.,', 'tetris.png', 'https://tetrismania.net', 'Jugar'),
(4, 'PINBALL 3D', 1, 'Microsoft', '1995', 'Windows_NT_4.0', 'Pinball 3D es una versión digital de una máquina de pinball con gráficos 3D pre-renderizados y tres mesas diferentes: Space Cadet, Skullduggery y Dragon\'s Keep. El objetivo principal es, como en cualquier juego de pinball, obtener la mayor puntuación posible haciendo rebotar la bola con las paletas y evitando que caiga.,', 'pinball3d.jpg', 'https://holajuegos.com/game/3d-pinball-for-windows-space-cadet', 'Jugar'),
(5, 'SNAKE,', 1, 'Gremlin Industries', '1976', 'Arcade', 'Snake presenta una mecánica simple: un jugador controla una «serpiente» que crece al recoger elementos en pantalla, mientras evita colisionar consigo misma o con las paredes. Este concepto inspiró varias versiones y adaptaciones a lo largo de los años, incluyendo una versión notable para computadoras llamada Worm. Sin embargo, fue en 1997 cuando Snake se inmortalizó en la cultura popular al ser preinstalado en los teléfonos móviles Nokia 6110.,', 'snakegame.png', '#', 'Juego No disponible'),
(6, 'The legend of zelda: Ocarina of time,', 2, 'Nintendo', '1998', 'Nintendo 64', 'La épica aventura de Link para evitar que Ganondorf obtenga la Trifuerza y conquiste Hyrule. El juego combina exploración, combates, acertijos y viajes en el tiempo, utilizando la Ocarina del Tiempo para manipular el tiempo y acceder a diferentes áreas y templos. ,', 'zeldaocarina.jpg', '#', 'Juego no disponible'),
(7, 'Prince of Persia,', 2, 'Broderbund', '1998', 'Apple II', 'Un joven que debe rescatar a la princesa de las garras del malvado visir Jaffar, quien la ha encarcelado y le ha dado una hora para casarse con él o morir.,', 'princeofpersia.jpg', 'https://www-retrogames-cz.translate.goog/play_102-DOS.php?_x_tr_sl=en&_x_tr_tl=es&_x_tr_hl=es&_x_tr_pto=tc', 'Jugar'),
(8, 'Super Mario Bros.,', 2, 'Nintendo', '1895', 'Nes/Famicon', 'El jugador controla al personaje Mario, quien debe rescatar a la Princesa Peach del malvado Bowser, rey de los Koopas, en el Reino Champiñón.,', 'supermariobros.jpg', 'https://supermarioplay.com/es', 'Jugar'),
(9, 'Spyro,', 2, 'Insomniac Games', '1998', 'PlayStation', 'Spyro, quien debe liberar a sus amigos dragones que han sido convertidos en estatuas de cristal por Gnasty Gnorc.,', 'spyro.jpg', '#', 'Juego no disponible'),
(10, 'Sonic the hedgehog,', 2, 'Sega', '1991', 'Sega_Genesis', 'Robotnik está convirtiendo animales en robots y buscando las poderosas Esmeraldas del Caos para sus planes malvados. Sonic debe recorrer seis zonas, recolectando anillos para salud y enfrentando a Robotnik y sus secuaces para liberar a los animales y recuperar las Esmeraldas del Caos.,', 'sonic.webp', 'https://www.minijuegos.com/juego/sonic-the-hedgehog-sega', 'Jugar'),
(11, 'Final Fantasy VII,', 2, 'Square', '1997', 'PlayStation', 'Robotnik está convirtiendo animales en robots y buscando las poderosas Esmeraldas del Caos para sus planes malvados. Sonic debe recorrer seis zonas, recolectando anillos para salud y enfrentando a Robotnik y sus secuaces para liberar a los animales y recuperar las Esmeraldas del Caos.,', 'ffvll.webp', 'https://store.steampowered.com/app/39140/FINAL_FANTASY_VII/?l=spanish', 'Comprar'),
(12, 'Teenage Mutant Ninja Turtles,', 3, '', '1989', 'Nintendo, Sega', 'El videojuego arcade de las Tortugas Ninja Adolescentes Mutantes, lanzado en 1989, es un juego de acción y aventura tipo Beat\'em up. En él, cuatro jugadores pueden controlar a Leonardo, Michelangelo, Donatello o Raphael para rescatar a April O\'Neil y al Maestro Splinter de las garras de Shredder y el Clan del Pie,', 'tortugas.webp', 'https://www.retrogames.cc/arcade-games/teenage-mutant-ninja-turtles-world-4-players.html', 'Jugar'),
(13, 'Street of Rage,', 3, '', '1991', 'Sega', 'El primero de los juegos, Streets of Rage, nos introduce en la historia de tres jóvenes policías (Axel, Blaze y Adam) que intentan librar su ciudad de la influencia del líder del crimen organizado,', 'streetsofrage.jpg', 'https://www-retrogames-cz.translate.goog/play_389-Genesis.php?_x_tr_sl=en&_x_tr_tl=es&_x_tr_hl=es&_x_tr_pto=tc', 'Jugar'),
(14, 'Double Dragon,', 3, '', '1987', 'Nintendo', 'En el año 19XX la mitad del mundo ha sido devastado tras una guerra nuclear y la violencia impera en las calles de América. Una de las bandas más violentas en América se llama Black Warriors, y domina las calles sin piedad. Pero dos gemelos llamados Billy y Jimmy, entrenados en las artes de Sousetsuken y propietarios del Dojo Sousetsuken, eran lo suficientemente valientes como para enfrentarse a los Black Warriors.,', 'doubledragon.jpg', 'https://oldgameshelf.com/es/games/nes/double-dragon-jap-269', 'Jugar'),
(15, 'Battletoads,', 3, '', '1991', 'Nintendo', 'Pimple y la princesa Angelica son raptados por Dark Queen mientras paseaban juntos.,', 'battletoads.jpg', 'https://oldgameshelf.com/es/games/nes/battletoads-104', 'Jugar'),
(16, 'Golden Axe,', 3, '', '1989', 'Sega', 'El videojuego se ambienta en una Edad Media fantástica en la que un villano llamado Death Adder aterroriza a los lugareños del reino de Yuria y ha raptado a la princesa y al rey.,', 'goldenaxe.jpg', 'https://www.minijuegos.com/juego/golden-axe-online', 'Jugar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `developers`
--
ALTER TABLE `developers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD CONSTRAINT `videojuegos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
