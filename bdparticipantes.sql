-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2022 a las 23:41:10
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdparticipantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganadores`
--

CREATE TABLE `ganadores` (
  `cedula` int(13) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ganadores`
--

INSERT INTO `ganadores` (`cedula`, `nombre`, `apellido`, `edad`, `email`) VALUES
(1222, 'juliana', 'soto rodriguez', 22, 'marcelita_1654@hotmail.com'),
(78910, 'cindy', 'usuga ramos', 25, 'julian.velezza@gmail.com'),
(1017215202, 'juliankas', '333', 33, 'marcelita_1654@hotmail.com'),
(2147483647, 'julia', 'kjjhjhj', 69, 'yerikechavarri210@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perdedores`
--

CREATE TABLE `perdedores` (
  `cedula` int(13) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perdedores`
--

INSERT INTO `perdedores` (`cedula`, `nombre`, `apellido`, `edad`, `email`) VALUES
(0, 'jorge', 'jesus corona', 25, 'jorgejesus@gmail.com'),
(444, 'juu', 'hm', 8, 'marcelita_1654@hotmail.com'),
(1222, 'julian ', '', 22, 'julian.velezza@gmail.com'),
(8484, 'manuela villaoo', 'kjjhjhj', 8, 'julian.velezza@gmail.com'),
(12357, 'carloste', 'sepulveda', 1, 'yerikechavarri210@gmail.com'),
(123456, 'hggh', 'kjjhjhj', 69, 'yerikechavarria210@gmail.com'),
(43521955, 'maria', 'zapata', 45, 'maria@gmail.com'),
(1017215202, 'juan', '', 5, ''),
(1128469514, 'marcela', '', 25, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `categoria` varchar(9) NOT NULL,
  `pregunta` varchar(100) NOT NULL,
  `respuesta` varchar(68) NOT NULL,
  `incorrecta1` varchar(47) NOT NULL,
  `incorrecta2` varchar(47) NOT NULL,
  `incorrecta3` varchar(72) NOT NULL,
  `imagen` varchar(164) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `categoria`, `pregunta`, `respuesta`, `incorrecta1`, `incorrecta2`, `incorrecta3`, `imagen`) VALUES
(1, 'Fútbol', '¿En qué club de portugal jugaba Cristiano Ronaldo antes de ir al Manchester United?', 'Sporting de lisboa', 'Real Madrid', 'Juventus', 'Milan', 'https://dam.tbg.com.mx/content/dam/editorialTelevisa/mexico/caras/mx/trends/15/10/_fb8a02f5_f683_d6d7_96ca_2de71902d39c.jpg.imgo.jpg'),
(2, 'Fútbol', '¿Quién fue el primer campeÓn de la primera division de LA LIGA de españa?', 'FC Barcelona', 'Real Madrid', 'Sevilla', 'Athletic Club', 'https://e00-us-marca.uecdn.es/claro/assets/multimedia/imagenes/2020/07/16/15948512105591.jpg'),
(3, 'Fútbol', '¿Sólo un club de Rumania ganó la copa de europa, cual fué?', 'steaua bucarest', 'Clinceni', 'Târgoviște', 'Astra', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Coupe_Henri_Delaunay_2017.jpg/245px-Coupe_Henri_Delaunay_2017.jpg'),
(4, 'Fútbol', '¿3 personas han ganado la champions league durante 3 ocasiones como entrenadores, quiénes son?', 'Bob paisley , Carlo Ancelotti y Zidane', 'Pep guardiola, Luis carniglia, Helenio herrera', 'Jose mourinho, Josef Heynckes, Carlo Ancelotti', 'Béla Guttmann,Miguel Muñoz, Zidane', 'https://editorial.uefa.com/resources/026b-12b6a5dc8f16-3eee5dbb0cd4-1000/ucl_logo_20210701155513.jpg'),
(5, 'Futbol', '¿Cuál es el club europeo con más champions league ganadas?', 'Real Madrid', 'Barcelona', 'Inter de Milan', 'Milan', 'https://i0.wp.com/www.neogol.com/wp-content/uploads/2020/05/todos-los-campeones-champions-1.jpg?resize=696%2C311&ssl=1'),
(6, 'Farándula', '¿Cuál fue el Primer largometraje de Pixar?', 'Toy Story 1995', 'La bella y la Bestia', 'Hugo', 'Monster Inc', 'https://tentulogo.com/wp-content/uploads/2018/07/pixar-logo.jpg'),
(7, 'Farándula', '¿En qué año nació Stevie Wonder  ?', '1950', '1960', '1945', '1955', 'https://upload.wikimedia.org/wikipedia/commons/5/5c/Graduation_2011_%285716667594%29.jpg'),
(8, 'Farándula', '¿Cuál pelicula Leonardo Dicaprio ganó su primer Oscar', 'EL renacido', 'Titanic', 'Lagrimas de sol', 'La isla siniestra', 'https://smoda.elpais.com/wp-content/uploads/2019/08/leo-591x447.jpg'),
(9, 'Farándula', '¿Qué disco desbancó a Thriller de Michael Jackson en el puesto de disco más vendido de la historia ?', 'The Eagles: Their Greatest Hits (1971-1975) (17 de febrero de 1976)', 'Eagles: Hotel California (8 diciembre de 1986)', 'The Beatles: The Beatles', 'Billy Joel: Greatest Hits Volume I & Volume II (2 de septiembre de 1985)', 'https://www.solfeggio528.com/wp-content/uploads/2020/04/discos-de-oro-1024x768.jpg'),
(10, 'Farándula', '¿Qué artista tiene en su poder mas premios EMMY?', 'Julia Louis', 'Leonardo Dicaprio', 'Will Smith', 'Jhony Depp', 'https://empresas.blogthinkbig.com/wp-content/uploads/2019/11/Imagen3-245003649.jpg?w=800'),
(11, 'Moda', '¿Cuándo se publicó la primera edición de la revista Vogue ?', '1892', '1891', '1980', '1960', 'https://media.vogue.es/photos/5e74b16aca095800085a0c7c/master/w_1600,c_limit/PORTADAS%2520IG2.jpg'),
(12, 'Moda', '¿Qué diseñador(a) es el único que figura como una de las 100 personas mas influyentes del siglo XX?', 'Coco Channel', 'Azzedin Alaia', 'Martin Margiela', 'Antonio Berardi', 'https://modadesnuda.files.wordpress.com/2012/06/moda_desnuda_peplum_evolucion.jpg'),
(13, 'Moda', '¿Quién inventó el icónico Little Black Dress?', 'Coco Channel', 'Versace', 'Dolce & Gabbana', 'Giorgio Armani', 'https://aws.glamour.es/prod/designs/v1/assets/original/361347.jpg'),
(14, 'Moda', '¿Cuál es la marca de ropa que más vendio en el 2020?', 'Nike', 'GUCCI', 'Adidas', 'Louis Vuitton', 'https://www.ruubay.com/wp-content/uploads/tienda-jd-sports-granada-nevada-evento.jpg'),
(15, 'Moda', '¿Cuál es la marca de ropa deportiva que más vende?', 'Nike', 'Adidas', 'Reebok', 'Puma', 'https://i.blogs.es/029c15/sin-titulo/1366_2000.png'),
(16, 'Arte', '¿Dónde se encuentra The Pietà de Miguel Angel?', 'El Vaticano', 'Catedral de Santa María del Fiore', 'Torre de pisa', 'Foro Romano', 'https://images2.minutemediacdn.com/image/upload/c_fill,g_auto,h_1248,w_2220/v1555441541/shape/mentalfloss/800px-michelangelos_pieta_5450.jpg?itok=qAp9J1Pz'),
(17, 'Arte', '¿Quién pintó LAS BODAS DE CANÁ?', 'Pablo Veronese', 'Tiziano', 'Sandro Botticelli', 'Claude Monet', 'https://educacion.ufm.edu/wp-content/uploads/2016/11/Paolo_Veronese_008.jpg'),
(18, 'Arte', '¿Cuál es la obra artística mexica más grande?', 'el monolito de Tlaltecuhtli', 'Baile en Tehuantepec', 'La piedra del sol', 'Coyolxauhqui', 'https://i2.wp.com/polodearte.com/wp-content/uploads/2016/05/1462090766_911_25-preguntas-que-todo-conocedor-de-arte-deber%C3%ADa-poder-responder.jpg?resize=798%2C796'),
(19, 'Arte', '¿Quién pintó Anatomical Pieces?', 'Theodore Gericault', 'Leonardo da Vinci', 'Miguel Ángel', 'Donatello', 'https://images2.minutemediacdn.com/image/upload/c_fill,g_auto,h_1248,w_2220/v1555441541/shape/mentalfloss/800px-michelangelos_pieta_5450.jpg?itok=qAp9J1Pz'),
(20, 'Arte', '¿Quién pintó el Grito?', 'Edvard Munch', 'Vasili Kandindki', 'Ernst Ludwig', 'Anita Malfatti', 'https://cloudfront-us-east-1.images.arcpublishing.com/copesa/UTZGQT7AZJAWBFY57ZMTPUACMY.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ganadores`
--
ALTER TABLE `ganadores`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `perdedores`
--
ALTER TABLE `perdedores`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
