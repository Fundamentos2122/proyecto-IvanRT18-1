-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220607.1684aa8b89
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 08-06-2022 a las 01:16:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebapagina2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `introduccion` text NOT NULL,
  `subtitulo1` text NOT NULL,
  `contenido1` text NOT NULL,
  `subtitulo2` text NOT NULL,
  `contenido2` text NOT NULL,
  `subtitulo3` text NOT NULL,
  `contenido3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `titulo`, `introduccion`, `subtitulo1`, `contenido1`, `subtitulo2`, `contenido2`, `subtitulo3`, `contenido3`) VALUES
(3, '¿Qué pan es mejor?', 'El pan es un alimento muy común en nuestra dieta, e incluso saludable. En función de su elaboración aportará unos nutrientes u otros. Lo que está claro es que… ¡si te encanta no tienes que renunciar a él! Muchos de ellos son ricos en fibra, hidratos de carbono y minerales y… si eliges el adecuado, consumido con moderación, es un buen aliado en una dieta sana y equilibrada. Pero, ¿todos los tipos de pan? ¿Qué pan es el más saludable? ¿Qué aporta cada tipo de pan? ¿Cuál debo consumir?', 'Tipos de pan', 'Existen distintos tipos de pan en el mercado por lo que es importante conocerlos.', 'Pan de trigo integral', 'El pan integral es un tipo de pan elaborado con harina de trigo y es saludable porque es el tipo de pan que conserva todos sus componentes y sus nutrientes. Es un pan en el que no se elimina ni el salvado ni el germen y por eso su aporte nutricional es mayor que el del plan blanco.', 'Pan de trigo integral', 'Es el pan de siempre. El que comían nuestros abuelos y… a ellos tampoco les ha ido tan mal, ¿no? Es un pan hecho con harinas refinadas, lo que significa, explicado de forma breve, que se han eliminado parte de los nutrientes, y aunque no pasa nada por comerlo, siempre hay que tener en cuenta que engorda un poquito más y que ha pasado el proceso de refinamiento y no es tan nutritivo como el integral. Dicho esto, si es el que te gusta… ¡no pasa nada! Solo deberás consumirlo con moderación, casi como cualquier alimento.'),
(4, 'La importancia de la lista de la compra', '¿Estás preocupado por tu alimentación y la de tu familia? Dar el salto para cambiar la alimentación tiene un punto de partida, y ese punto es la lista de la compra. Elaborar una buena lista de la compra es un punto clave en la alimentación, principalmente porque será una buena forma de llenar nuestra casa de alimentos saludables, y no de alimentos perjudiciales para nosotros.\r\n', 'Por qué hacer una lista de la compra\r\n', 'Principalmente porque nos ayuda a comer mucho más saludable y a optimizar todos los recursos. Con la lista de la compra nos obligamos a revisar la despensa, y sobre todo, ahorramos mucho tiempo y dinero al comprar en el súper. Pero esto no es todo. Con la lista de la compra adecuada, podremos cocinar un día o dos a la semana optimizando mucho nuestro tiempo. ¿Quién no quiere ahorrar dinero, tiempo y comer sano?\r\n', 'Tips para hacer una buena lista de la compra', 'A continuación, te damos algunos tips para hacer una buena lista: Planifica el menú de la semana, tanto las comidas como las cenas, los desayunos y las meriendas. Olvídate de improvisar, la planificación te ayudará a llevar una dieta sana y a ahorrar en la compra. No hagas la lista con hambre, así evitarás incluir alimentos que no son necesarios. Averigua qué alimentos tienes en tu cocina, ¡así no desperdiciarás ningún alimento!\r\n', 'Alimentos que debemos incluir', 'Estos son los alimentos que no pueden faltar en tu lista de la compra para empezar a llevar una dieta sana y equilibrada. Frutas: no puede faltar una selección variada de frutas (arándanos, plátanos, fresas, manzanas, peras, frambuesas, mango…). ¡Las que más te gusten! Verduras: lo mismo sucede con las verduras, y es que estas deben ser la base de nuestra alimentación. Carnes: compra el tipo de carne que más te guste. Puedes incluir pollo, pavo, ternera, cordero. Pescados: la lista de la compra de la semana debe incluir pescados (lenguado, rodaballo, atún rojo, bacalao, boquerones, sardinas, salmonetes, trucha…). Snacks saludables: incluye snacks saludables o los ingredientes para hacer los snacks tú mismo. Por ejemplo: puedes comprar remolachas para hacer chips de remolacha, chips de boniato, puedes comprar frutos secos…\r\n'),
(5, '¿Son buenos los hidratos de carbono?', 'Es la pregunta más habitual de nuestros pacientes, e imaginamos que de muchos de vosotros. Los hidratos de carbono son un tema de conflicto en muchas conversaciones. Unos dicen que son saludables, otros que no, unos que engordan, otros que son necesarios para aportar energía… ¿Qué es cierto de todo esto? ¿Son saludables? ¿Qué tipos de hidratos de carbono existen?\r\n', '¿Son saludables?', '¿Y estos nutrientes son saludables? Sus beneficios son numerosos, desde el aporte de energía del que te hablábamos, hasta la regulación de los niveles de azúcar en sangre, su ayuda en el metabolismo de proteínas, su intervención en la disminución de la fatiga y también en la recuperación muscular. A pesar de ello, muchos son los que piensan que no son saludables. ¿Es una creencia errónea? ¿Por qué se piensa esto? Sí que es una creencia errónea porque todos los nutricionistas recomendamos dietas equilibradas y variadas, y esto incluye los hidratos de carbono. De hecho, según las últimas recomendaciones de los expertos, los alimentos que contienen hidratos deberían representar alrededor de un 40% de nuestras calorías diarias como mínimo, pero siempre que sean hidratos que posean un bajo índice glucémico, porque los que lo tienen alto pueden generan un mayor incremento de la glucosa en sangre. ¿Cuáles son los más saludables? Los carbohidratos que se encuentran en los cereales de grano entero y también en las frutas y legumbres. No obstante, hay determinadas personas, con determinada actividad (por ejemplo deportistas de elite) que requieren que en sus dietas los hidratos de carbono ocupan un lugar más privilegiado.\r\n', 'Tipos de hidratos de carbono', 'Estos son los principales tipos de hidratos de carbono: Azúcares: son los carbohidratos más simples. Suelen llevarlo los dulces, alimentos procesados, refrescos, etcétera.\r\n\r\nAlmidones: son los carbohidratos complejos que están hechos de muchos azúcares simples unidos. Son los cereales, también la pasta, e incluso algunos cereales y verduras. Las patatas también las incluimos en este grupo.\r\n\r\nFibra: la fibra también es un carbohidrato complejo. Son necesarios para ayudar a bajar el colesterol y el azúcar en la sangre. Sobre todo se encuentran en frutas, verduras e incluso en algunos frutos secos como en las nueces.', 'En resumen...', 'Existen hidratos de carbono saludables. No es bueno eliminar ningún nutriente de la dieta salvo recomendación médica. Lo saludable es siempre llevar una dieta variada y equilibrada y combinarla con ejercicio y actividad.\r\n\r\nSi necesitas ayuda para comer de manera más saludable contacta con nosotros. Te ayudaremos a cambiar tus hábitos de vida y tus hábitos alimentarios para que te sientas mucho mejor.\r\n\r\n'),
(6, 'Las legumbres: fuente de proteínas', 'Las legumbres son proteínas. ¿Lo sabías? Son las semillas de las plantas leguminosas, un alimento esencial para nuestra salud y es un deber incluirlas en nuestra dieta, en general en la alimentación de nuestra familia, ya que son beneficiosas para niños y adultos sin distinción. Una de sus principales características y por lo que son tan apreciadas es porque están llenas de nutrientes y tienen un alto contenido de proteínas, lo que hace que sea un alimento muy especial y necesario. ¿Quieres saber más sobre las legumbres y sus nutrientes?\r\n', 'Beneficios de consumir legumbres\r\n', 'El consumo de las legumbres es muy beneficioso para nuestro organismo. Entre todas las ventajas, destacan: Su alto contenido en fibra. La fibra que contienen ayuda a reducir el colesterol malo que tenemos en el cuerpo y controla los niveles de glucosa. Su elevado contenido en proteínas hace que sean un alimento perfecto para las personas que optan por dietas veganas o vegetarianas. Elevado contenido en vitamina B. Los alimentos que contienen vitamina B son buenos para el sistema nervioso y para el mantenimiento y la salud de la piel, las uñas y el cabello. Son beneficiosas para reducir la hipertensión y combaten y reducen las enfermedades cardiovasculares.\r\n', 'Tipos de legumbres\r\n', '¿Sabías que existen muchos tipos de legumbres diferentes? En este apartado he querido hacer un pequeño listado de los tipos más comunes y más demandados en las dietas: Guisantes: son muy ricos en fibra y no son lo que más proteínas aportan al organismo. Muchas veces se confunden con una verdura tradicional pero son un tipo de legumbre. Garbanzos: es un tipo de legumbre que puede cocinarse de muchas formas, aunque en nuestra dieta mediterránea lo vemos mucho en platos típicos como el cocido. Habas: las habas quizá no sean tan conocidas, pero pueden comerse de muchas formas y son muy nutritivas. ¡Salteadas con jamón, solas, e incluso en tortilla! Lentejas: las lentejas son las legumbres más ‘famosas’ del mundo y uno de los tipos más demandados. Son una gran fuente de hierro y pueden consumirse en guisado, ensalada, etcétera. Existen muchas variedades, como la castellana, la roja, la pardina… Soja: puede que no sea tan conocida, aunque poco a poco vamos incluyéndola en nuestra dieta. ¡Contiene un montón de nutrientes!\r\n', 'Características de las legumbres\r\n', 'Para acabar con el post queremos contarte cuáles son las principales características de las legumbres. Este tipo de alimento son semillas de plantas. Estas plantas se cosechan con la única intención de extraer su semilla seca que es la legumbre, y su principal característica es la que venimos diciéndote durante todo el post: que es una gran fuente de proteína. Su aporte nutricional es muy elevado.\r\n\r\nNo queremos abandonar el artículo sin hacer mención a la digestión de este alimento. A muchas personas les cuesta digerirlo y tras su consumo acaban con hinchazón abdominal y/o gases. Hay quienes pueden ser intolerantes y luego hay quienes las consumen incorrectamente (cantidades demasiado abundantes, una ingesta del alimento muy rápida…)\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `dia_cita` date NOT NULL,
  `hora_cita` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `dia_cita`, `hora_cita`, `id_user`) VALUES
(40, '2025-10-07', '20:52:00', 31),
(48, '2025-06-08', '13:57:00', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(50) NOT NULL,
  `telefono_contacto` varchar(20) NOT NULL,
  `correo_contacto` varchar(30) NOT NULL,
  `comentario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `nombre_contacto`, `telefono_contacto`, `correo_contacto`, `comentario`) VALUES
(1, 'Jesus', '34890731', 'ivan@outlook.com', 'hola'),
(2, 'Ivan Rdz', '4443172812', 'ivanquintoa2@hotmail.com', 'hola'),
(3, 'Ivan', '21675427', 'ivan2@gmail.com', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre_user` varchar(30) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `password_user` varchar(250) NOT NULL,
  `tipo_user` varchar(30) NOT NULL,
  `photo_user` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre_user`, `email_user`, `password_user`, `tipo_user`, `photo_user`) VALUES
(10, 'admin', 'admin@gmail.com', '$2y$10$JQvarvxbfUxxMYMkqhoNUeJCCUVTTHwaY5KlQZDrlkChhyzGNzGiy', 'admin', NULL),
(31, 'Ivan', 'ivan@gmail.com', '$2y$10$A.px8lvwvm4y8Rggwhlc6.1Iuzg7uXT9OMun1zmYegV/HgSzjPcWG', 'user', NULL),
(41, 'juan', 'juan@gmail.com', '$2y$10$jYzRjg30x1mdKacpFhIIU.Q98GLgXUBF7mYeyLNxUB0SusJj1wQOC', 'user', NULL),
(42, 'josue', 'nuevo@gmail.com', '$2y$10$gWiz2BJcoQZceNq37u7QTO6sUY5owXkQvZ/MA8ealLby1Dz5fPGb2', 'user', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `FK_citas_usuarios` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



