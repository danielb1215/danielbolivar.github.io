--
-- Table structure for table `lamparas`
--

CREATE TABLE `lamparas` (
  `id` int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,3) NOT NULL,
  `info` varchar(500) NOT NULL,
  `quantity` int(30) NOT NULL,
  `sales` int(30)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamparas`
--

INSERT INTO `lamparas` (`name`, `from`, `code`, `image`, `price`, `info`, `quantity`, `sales`) VALUES
('Jack Daniel`s', 'Whiskey', 'JACK', '/lamparas/JACK.webp', 79.900, 'No es un bourbon es un whiskey la diferencia es un paso adicional en el proceso de producción y es que el licor debe pasar por un filtrado de carbón de arce algunos días para suavizar el destilado antes de añejarlo entonces por ley no puede ser un bourbon ni un whisky.', 1, 0),
('Hendrick`s', 'Gin', 'HENDRIX', '/lamparas/HENDRIX.webp', 79.900, 'La botella es hecha con el 45% vidrio reciclado. La reina Isabel ll de Inglaterra consume esta Ginebra al igual que James Bond (en la literatura).', 1, 0),
('Bombay', 'Gin', 'BOMBAY', '/lamparas/BOMBAY.webp', 79.900, 'Bombay se juntó en algún momento con unos joyeros y sacaron una edición deluxe que se denominó Bombay Sapphire Revelation, era tan excéntrico que las botellas estaban hechas de cristal tallado a mano y las decoraban con zafiros y diamantes y cada botella costaba alrededor de 200 mil dólares.', 1, 0),
('Tanqueray', 'Gin', 'TANQUERAY', '/lamparas/TANQUERAY.webp', 79.900, 'Hay una leyenda que dice que cuando Estados Unidos impuso la ley seca tanqueray seguía vendiendo de forma clandestina a todas las tiendas en las islas donde llegaban los barcos con gente de alta sociedad a comprar las botellas de licores prohibidos.', 1, 0),
('Absolut', 'Vodka', 'ABSOLUT', '/lamparas/ABSOLUT.webp', 79.900, 'Hubo un tiempo que no quería vender el vodka a Estocolmo y rechazó la licencia para vender licor, a cambio colocó una tienda en una isla cercana y ofrece paseos en ferry gratis a los que quisieran ir a la isla.', 1, 0),
('Bulldog', 'Gin', 'BULLDOG', '/lamparas/BULLDOG.webp', 79.900, 'Su nombre es porque cuando lo fundaron coincidió con el año chino del perro este fue en 2006, además la idea de su nombre era transmitir fuerza y una imagen masculina.', 1, 0);


--
-- Indexes for table `lamparas`
--
ALTER TABLE `lamparas`
  ADD UNIQUE KEY `product_code` (`code`);

-- ///////////////////////////////////////////////////////////////////////////////////////////////////

--
-- Table structure for table `vasos`
--

CREATE TABLE `vasos` (
  `id` int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,3) NOT NULL,
  `info` varchar(500) NOT NULL,
  `quantity` int(30) NOT NULL,
  `sales` int(30)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vasos`
--

INSERT INTO `vasos` (`name`, `from`, `code`, `image`, `price`, `info`, `quantity`, `sales` ) VALUES
('Rock Legends', 'Wine', 'ROCKLEGENDS', '/vasos/ROCKLEGENDS.webp', 49.900, 'El 13 de julio de 1985 se organizó el primer live AID todo esto por la emergencia humanitaria que se vivía en Etiopía ante la falta de agua potable y alimentos. A él músico Bob Geldof le debemos el día mundial del rock.', 1, 0),
('Corona', 'Beer', 'CORONA', '/vasos/CORONA.webp', 39.900, 'Corona no pagó nunca por salir en las películas de rápido y furioso pero a los directores les pareció que era la cerveza que debía tomar Vin Diesel por eso sale en casi toda la saga.', 1, 0),
('Baltika', 'Beer', 'BALTIKA', '/vasos/BALTIKA.webp', 49.900, 'Es las empresa de cerveza más grande de Europa con una producción de más de 40 millones de barriles y los únicos que la superan en ese continente son los de Heineken.', 1, 0),
('Leyenda del Dorado', 'Wine', 'LEYENDADELDORADO', '/vasos/LEYENDADELDORADO.webp', 49.900, 'Todos los que intentaron encontrar la ciudad de oro pasaron por toda clase de penurias y calamidades desde picaduras de insectos hasta mordeduras de reptiles, enfermedades tropicales y hambre. Exploraciones que hicieron desde Santa Marta (Colombia) hasta Coro ( Venezuela) también fueron fallidas.', 1, 0),
('Casa de papel', 'Beer', 'CASADEPAPEL', '/vasos/CASADEPAPEL.webp', 49.900, 'El director pensaba que el primer capítulo debía quedar perfecto así que esto los llevó a grabar el primer capítulo más de 50 veces. El personaje de Tokio fue una inspiración del personaje Mathilda de la película Leon the professional.', 1, 0),
('Super heroes', 'Wine', 'SUPERHEROES', '/vasos/SUPERHEROES.webp', 49.900, 'En uno de los eventos de DC vs Marvel demostraron que la mujer maravilla es digna de tomar el martillo de Thor.', 1, 0);
--
-- Indexes for table `vasos`
--
ALTER TABLE `vasos`
  ADD UNIQUE KEY `product_code` (`code`);


-- ///////////////////////////////////////////////////////////////////////////////////////////////////
--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `transactionid` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

--INSERT INTO `sales` (`referenceid`, `reference`, `amount`, `customer_email`, `created_at`, `payment_method_type`, `state` ) VALUES
--('Masters', '', 'MASTERS', 'product-images/MASTERS.webp', 79.900, 1, 0),
--('Hendrix', '', 'HENDRIX', 'product-images/HENDRIX.webp', 79.900, 1, 0),
--('Bulldog', '', 'BULLDOG', 'product-images/BULLDOG.webp', 79.900, 1, 0);

--
-- Indexes for table `sales`

CREATE TABLE `products` (
  `id` int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,3) NOT NULL,
  `info` varchar(500) NOT NULL,
  `quantity` int(30) NOT NULL,
  `sales` int(30)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`name`, `from`, `code`, `image`, `price`, `info`, `quantity`, `sales`) VALUES
('Jack Daniel`s', 'Whiskey', 'JACK', '/lamparas/JACK.webp', 79.900, 'No es un bourbon es un whiskey la diferencia es un paso adicional en el proceso de producción y es que el licor debe pasar por un filtrado de carbón de arce algunos días para suavizar el destilado antes de añejarlo entonces por ley no puede ser un bourbon ni un whisky.', 1, 0),
('Hendrick`s', 'Gin', 'HENDRIX', '/lamparas/HENDRIX.webp', 79.900, 'La botella es hecha con el 45% vidrio reciclado. La reina Isabel ll de Inglaterra consume esta Ginebra al igual que James Bond (en la literatura).', 1, 0),
('Bombay', 'Gin', 'BOMBAY', '/lamparas/BOMBAY.webp', 79.900, 'Bombay se juntó en algún momento con unos joyeros y sacaron una edición deluxe que se denominó Bombay Sapphire Revelation, era tan excéntrico que las botellas estaban hechas de cristal tallado a mano y las decoraban con zafiros y diamantes y cada botella costaba alrededor de 200 mil dólares.', 1, 0),
('Tanqueray', 'Gin', 'TANQUERAY', '/lamparas/TANQUERAY.webp', 79.900, 'Hay una leyenda que dice que cuando Estados Unidos impuso la ley seca tanqueray seguía vendiendo de forma clandestina a todas las tiendas en las islas donde llegaban los barcos con gente de alta sociedad a comprar las botellas de licores prohibidos.', 1, 0),
('Absolut', 'Vodka', 'ABSOLUT', '/lamparas/ABSOLUT.webp', 79.900, 'Hubo un tiempo que no quería vender el vodka a Estocolmo y rechazó la licencia para vender licor, a cambio colocó una tienda en una isla cercana y ofrece paseos en ferry gratis a los que quisieran ir a la isla.', 1, 0),
('Bulldog', 'Gin', 'BULLDOG', '/lamparas/BULLDOG.webp', 79.900, 'Su nombre es porque cuando lo fundaron coincidió con el año chino del perro este fue en 2006, además la idea de su nombre era transmitir fuerza y una imagen masculina.', 1, 0),
('Rock Legends', 'Wine', 'ROCKLEGENDS', '/vasos/ROCKLEGENDS.webp', 49.900, 'El 13 de julio de 1985 se organizó el primer live AID todo esto por la emergencia humanitaria que se vivía en Etiopía ante la falta de agua potable y alimentos. A él músico Bob Geldof le debemos el día mundial del rock.', 1, 0),
('Corona', 'Beer', 'CORONA', '/vasos/CORONA.webp', 39.900, 'Corona no pagó nunca por salir en las películas de rápido y furioso pero a los directores les pareció que era la cerveza que debía tomar Vin Diesel por eso sale en casi toda la saga.', 1, 0),
('Baltika', 'Beer', 'BALTIKA', '/vasos/BALTIKA.webp', 49.900, 'Es las empresa de cerveza más grande de Europa con una producción de más de 40 millones de barriles y los únicos que la superan en ese continente son los de Heineken.', 1, 0),
('Leyenda del Dorado', 'Wine', 'LEYENDADELDORADO', '/vasos/LEYENDADELDORADO.webp', 49.900, 'Todos los que intentaron encontrar la ciudad de oro pasaron por toda clase de penurias y calamidades desde picaduras de insectos hasta mordeduras de reptiles, enfermedades tropicales y hambre. Exploraciones que hicieron desde Santa Marta (Colombia) hasta Coro ( Venezuela) también fueron fallidas.', 1, 0),
('Casa de papel', 'Beer', 'CASADEPAPEL', '/vasos/CASADEPAPEL.webp', 49.900, 'El director pensaba que el primer capítulo debía quedar perfecto así que esto los llevó a grabar el primer capítulo más de 50 veces. El personaje de Tokio fue una inspiración del personaje Mathilda de la película Leon the professional.', 1, 0),
('Super heroes', 'Wine', 'SUPERHEROES', '/vasos/SUPERHEROES.webp', 49.900, 'En uno de los eventos de DC vs Marvel demostraron que la mujer maravilla es digna de tomar el martillo de Thor.', 1, 0);
--




cwebp -m 6 -resize 110 35 -q 99 3peque.png -o logo3.png
