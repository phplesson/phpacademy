-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.1.31-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5278
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных pansionat
DROP DATABASE IF EXISTS `pansionat`;
CREATE DATABASE IF NOT EXISTS `pansionat` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pansionat`;

-- Дамп структуры для таблица pansionat.compositions
DROP TABLE IF EXISTS `compositions`;
CREATE TABLE IF NOT EXISTS `compositions` (
  `idDish` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'g'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.compositions: ~148 rows (приблизительно)
DELETE FROM `compositions`;
/*!40000 ALTER TABLE `compositions` DISABLE KEYS */;
INSERT INTO `compositions` (`idDish`, `idProduct`, `quantity`) VALUES
	(1, 11, 100),
	(9, 11, 25),
	(16, 7, 35),
	(24, 8, 80),
	(1, 15, 80),
	(9, 13, 35),
	(16, 6, 15),
	(24, 7, 100),
	(1, 12, 5),
	(9, 12, 15),
	(16, 14, 9),
	(24, 5, 40),
	(1, 4, 15),
	(9, 3, 15),
	(16, 3, 5),
	(24, 6, 30),
	(2, 1, 65),
	(10, 2, 70),
	(17, 9, 150),
	(24, 16, 20),
	(2, 9, 40),
	(10, 7, 250),
	(17, 7, 50),
	(24, 3, 10),
	(2, 11, 35),
	(10, 3, 20),
	(17, 13, 25),
	(24, 14, 10),
	(2, 12, 20),
	(10, 14, 15),
	(17, 3, 20),
	(25, 15, 120),
	(2, 5, 20),
	(10, 12, 5),
	(17, 12, 10),
	(25, 16, 35),
	(2, 4, 20),
	(11, 2, 100),
	(17, 14, 5),
	(25, 14, 30),
	(3, 11, 55),
	(11, 9, 20),
	(18, 8, 140),
	(25, 8, 20),
	(3, 15, 55),
	(11, 10, 20),
	(18, 6, 30),
	(25, 3, 20),
	(3, 6, 50),
	(11, 3, 5),
	(18, 14, 15),
	(26, 15, 150),
	(3, 12, 20),
	(11, 12, 2),
	(18, 5, 10),
	(26, 16, 20),
	(3, 10, 15),
	(12, 7, 350),
	(18, 16, 15),
	(26, 3, 2),
	(3, 16, 5),
	(12, 13, 35),
	(19, 5, 120),
	(27, 15, 50),
	(4, 2, 50),
	(12, 3, 5),
	(19, 7, 45),
	(27, 7, 150),
	(4, 11, 50),
	(12, 16, 5),
	(19, 10, 20),
	(27, 5, 80),
	(4, 4, 40),
	(13, 1, 180),
	(19, 3, 15),
	(27, 16, 35),
	(4, 9, 35),
	(13, 11, 100),
	(20, 13, 50),
	(27, 3, 2),
	(4, 5, 20),
	(13, 10, 40),
	(20, 7, 75),
	(28, 8, 100),
	(4, 12, 5),
	(13, 12, 20),
	(20, 15, 75),
	(28, 5, 20),
	(5, 2, 80),
	(13, 3, 5),
	(20, 16, 10),
	(28, 6, 20),
	(5, 9, 40),
	(14, 1, 90),
	(20, 3, 5),
	(28, 16, 15),
	(5, 3, 25),
	(14, 7, 50),
	(21, 13, 70),
	(28, 3, 10),
	(5, 12, 5),
	(14, 6, 20),
	(21, 6, 30),
	(29, 15, 150),
	(6, 1, 80),
	(14, 10, 10),
	(21, 3, 20),
	(29, 9, 200),
	(6, 11, 150),
	(14, 3, 5),
	(21, 5, 20),
	(29, 16, 15),
	(6, 4, 30),
	(14, 12, 5),
	(21, 16, 15),
	(30, 15, 70),
	(6, 12, 10),
	(14, 14, 3),
	(22, 8, 140),
	(30, 16, 10),
	(7, 6, 125),
	(15, 2, 100),
	(22, 6, 30),
	(31, 7, 150),
	(7, 16, 15),
	(15, 9, 20),
	(22, 14, 20),
	(31, 15, 150),
	(8, 8, 75),
	(15, 5, 20),
	(22, 16, 15),
	(31, 16, 25),
	(8, 6, 50),
	(15, 3, 20),
	(22, 5, 8),
	(32, 17, 8),
	(8, 16, 15),
	(15, 10, 10),
	(23, 11, 250),
	(33, 17, 8),
	(9, 1, 80),
	(15, 12, 5),
	(23, 10, 65),
	(33, 16, 25),
	(9, 10, 30),
	(16, 5, 120),
	(23, 3, 20),
	(33, 7, 75);
/*!40000 ALTER TABLE `compositions` ENABLE KEYS */;

-- Дамп структуры для таблица pansionat.dishes
DROP TABLE IF EXISTS `dishes`;
CREATE TABLE IF NOT EXISTS `dishes` (
  `idDish` int(11) NOT NULL AUTO_INCREMENT,
  `dish` varchar(50) NOT NULL DEFAULT '0',
  `idDishType` char(1) NOT NULL DEFAULT '0',
  `base` varchar(50) NOT NULL DEFAULT '0',
  `output` int(11) NOT NULL DEFAULT '0',
  `laborCost` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idDish`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.dishes: ~33 rows (приблизительно)
DELETE FROM `dishes`;
/*!40000 ALTER TABLE `dishes` DISABLE KEYS */;
INSERT INTO `dishes` (`idDish`, `dish`, `idDishType`, `base`, `output`, `laborCost`) VALUES
	(1, 'Салат летний', 'З', 'Овощи', 200, 3),
	(2, 'Салат мясной', 'З', 'Мясо', 200, 4),
	(3, 'Салат витаминный', 'З', 'Овощи', 200, 4),
	(4, 'Салат рыбный', 'З', 'Рыба', 200, 4),
	(5, 'Паштет из рыбы', 'З', 'Рыба', 120, 5),
	(6, 'Мясо с гарниром', 'З', 'Мясо', 250, 3),
	(7, 'Сметана', 'З', 'Молоко', 140, 1),
	(8, 'Творог', 'З', 'Молоко', 140, 2),
	(9, 'Суп харчо', 'С', 'Мясо', 500, 5),
	(10, 'Суп-пюре из рыбы', 'С', 'Рыба', 500, 6),
	(11, 'Уха из судака', 'С', 'Рыба', 500, 5),
	(12, 'Суп молочный', 'С', 'Молоко', 500, 3),
	(13, 'Бастурма', 'Г', 'Мясо', 300, 5),
	(14, 'Бефстроганов', 'Г', 'Мясо', 210, 6),
	(15, 'Судак по-польски', 'Г', 'Рыба', 160, 5),
	(16, 'Драчена', 'Г', 'Яйца', 180, 4),
	(17, 'Морковь с рисом', 'Г', 'Овощи', 260, 3),
	(18, 'Сырники', 'Г', 'Молоко', 220, 4),
	(19, 'Омлет с луком', 'Г', 'Яйца', 200, 5),
	(20, 'Каша рисовая', 'Г', 'Крупа', 210, 4),
	(21, 'Пудинг рисовый', 'Г', 'Крупа', 160, 6),
	(22, 'Вареники ленивые', 'Г', 'Молоко', 220, 4),
	(23, 'Помидоры с луком', 'Г', 'Овощи', 260, 4),
	(24, 'Суфле из творога', 'Г', 'Молоко', 280, 6),
	(25, 'Рулет с яблоками', 'Д', 'Фрукты', 200, 5),
	(26, 'Яблоки печеные', 'Д', 'Фрукты', 160, 3),
	(27, 'Суфле яблочное', 'Д', 'Фрукты', 220, 6),
	(28, 'Крем творожный', 'Д', 'Молоко', 160, 4),
	(29, '"Утро"', 'Н', 'Фрукты', 200, 5),
	(30, 'Компот', 'Н', 'Фрукты', 200, 2),
	(31, 'Молочный напиток', 'Н', 'Молоко', 200, 2),
	(32, 'Кофе черный', 'Н', 'Кофе', 200, 1),
	(33, 'Кофе на молоке', 'Н', 'Кофе', 200, 2);
/*!40000 ALTER TABLE `dishes` ENABLE KEYS */;

-- Дамп структуры для таблица pansionat.dishtypes
DROP TABLE IF EXISTS `dishtypes`;
CREATE TABLE IF NOT EXISTS `dishtypes` (
  `idDishType` char(1) NOT NULL,
  `dishType` varchar(50) NOT NULL,
  PRIMARY KEY (`idDishType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.dishtypes: ~5 rows (приблизительно)
DELETE FROM `dishtypes`;
/*!40000 ALTER TABLE `dishtypes` DISABLE KEYS */;
INSERT INTO `dishtypes` (`idDishType`, `dishType`) VALUES
	('Г', 'Горячее'),
	('Д', 'Десерт'),
	('З', 'Закуска'),
	('Н', 'Напиток'),
	('С', 'Суп');
/*!40000 ALTER TABLE `dishtypes` ENABLE KEYS */;

-- Дамп структуры для таблица pansionat.meals
DROP TABLE IF EXISTS `meals`;
CREATE TABLE IF NOT EXISTS `meals` (
  `idMeal` int(11) NOT NULL,
  `meal` varchar(50) NOT NULL,
  PRIMARY KEY (`idMeal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.meals: ~3 rows (приблизительно)
DELETE FROM `meals`;
/*!40000 ALTER TABLE `meals` DISABLE KEYS */;
INSERT INTO `meals` (`idMeal`, `meal`) VALUES
	(1, 'Завтрак'),
	(2, 'Обед'),
	(3, 'Ужин');
/*!40000 ALTER TABLE `meals` ENABLE KEYS */;

-- Дамп структуры для таблица pansionat.menus
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `idMeal` int(11) NOT NULL,
  `idDishType` char(1) NOT NULL,
  `idDish` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.menus: ~21 rows (приблизительно)
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`idMeal`, `idDishType`, `idDish`) VALUES
	(1, 'З', 3),
	(2, 'З', 1),
	(3, 'З', 6),
	(1, 'З', 6),
	(2, 'З', 6),
	(3, 'З', 8),
	(1, 'Г', 19),
	(2, 'С', 9),
	(3, 'Г', 20),
	(1, 'Г', 21),
	(2, 'С', 12),
	(3, 'Г', 16),
	(1, 'Н', 31),
	(2, 'Г', 14),
	(3, 'Н', 30),
	(1, 'Н', 32),
	(2, 'Г', 16),
	(3, 'Н', 31),
	(2, 'Г', 18),
	(2, 'Д', 26),
	(2, 'Д', 28);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Дамп структуры для таблица pansionat.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `idProduct` int(11) NOT NULL,
  `product` varchar(50) NOT NULL COMMENT 'for 1000 g of product',
  `protein` int(11) NOT NULL COMMENT 'g',
  `fat` int(11) NOT NULL COMMENT 'g',
  `carb` int(11) NOT NULL COMMENT 'g',
  `K` int(11) NOT NULL COMMENT 'mg',
  `Ca` int(11) NOT NULL COMMENT 'mg',
  `Na` int(11) NOT NULL COMMENT 'mg',
  `B2` decimal(5,2) NOT NULL COMMENT 'mg',
  `PP` decimal(5,2) NOT NULL COMMENT 'mg',
  `C` int(11) NOT NULL COMMENT 'mg',
  PRIMARY KEY (`idProduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.products: ~17 rows (приблизительно)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`idProduct`, `product`, `protein`, `fat`, `carb`, `K`, `Ca`, `Na`, `B2`, `PP`, `C`) VALUES
	(1, 'Говядина', 189, 124, 0, 3150, 90, 600, 1.50, 28.00, 0),
	(2, 'Судак', 190, 80, 0, 1870, 270, 0, 1.10, 10.00, 30),
	(3, 'Масло', 60, 825, 90, 230, 220, 740, 0.10, 1.00, 0),
	(4, 'Майонез', 31, 670, 26, 480, 280, 0, 0.00, 0.00, 0),
	(5, 'Яйца', 127, 115, 7, 1530, 550, 710, 4.40, 1.90, 0),
	(6, 'Сметана', 26, 300, 28, 950, 850, 320, 1.00, 1.00, 2),
	(7, 'Молоко', 28, 32, 47, 1460, 1210, 1500, 1.30, 1.00, 10),
	(8, 'Творог', 167, 90, 13, 1120, 1640, 1410, 2.70, 4.00, 5),
	(9, 'Морковь', 13, 1, 70, 2000, 510, 210, 0.70, 9.90, 50),
	(10, 'Лук', 17, 0, 95, 1750, 310, 180, 0.20, 2.00, 100),
	(11, 'Помидоры', 6, 0, 42, 290, 140, 400, 0.40, 5.30, 250),
	(12, 'Зелень', 9, 0, 20, 340, 275, 75, 1.20, 4.00, 380),
	(13, 'Рис', 70, 6, 773, 540, 240, 260, 0.40, 16.00, 0),
	(14, 'Мука', 106, 13, 732, 1760, 240, 120, 1.20, 22.00, 0),
	(15, 'Яблоки', 4, 0, 113, 2480, 160, 260, 0.30, 3.00, 130),
	(16, 'Сахар', 0, 0, 998, 30, 20, 10, 0.00, 0.00, 0),
	(17, 'Кофе', 127, 36, 9, 9710, 180, 180, 0.30, 1.80, 0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Дамп структуры для таблица pansionat.recipes
DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `idDish` int(11) NOT NULL,
  `recipe` varchar(500) NOT NULL,
  PRIMARY KEY (`idDish`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.recipes: ~33 rows (приблизительно)
DELETE FROM `recipes`;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` (`idDish`, `recipe`) VALUES
	(1, 'Помидоры ...'),
	(2, 'Вареное ...'),
	(3, 'Зелень ме...'),
	(4, 'Вареные р...'),
	(5, 'Филе суда...'),
	(6, 'Мясо варе...'),
	(7, 'Сметану п...'),
	(8, 'Протертый ..'),
	(9, 'Грудинку ...'),
	(10, 'Филе суда...'),
	(11, 'Судак очи...'),
	(12, 'Промытый ...'),
	(13, 'Мясо наре...'),
	(14, 'Говядину ...'),
	(15, 'Подготовл...'),
	(16, 'Сырые яйц...'),
	(17, 'Нарезать ...'),
	(18, 'В протерт...'),
	(19, 'К свежим ...'),
	(20, 'Рис свари...'),
	(21, 'Готовую р...'),
	(22, 'В протерт...'),
	(23, 'Спассеров...'),
	(24, 'В протерт...'),
	(25, 'Очистить ...'),
	(26, 'Не прорез...'),
	(27, 'Запеченны...'),
	(28, 'Яйца разм...'),
	(29, 'Очищенную ..'),
	(30, 'Яблоки оч...'),
	(31, 'Яблоки на...'),
	(32, 'Кофеварку ..'),
	(33, 'Сварить ч...');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;

-- Дамп структуры для таблица pansionat.storage
DROP TABLE IF EXISTS `storage`;
CREATE TABLE IF NOT EXISTS `storage` (
  `idProduct` int(11) NOT NULL,
  `available` int(11) NOT NULL COMMENT 'kg',
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idProduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.storage: ~17 rows (приблизительно)
DELETE FROM `storage`;
/*!40000 ALTER TABLE `storage` DISABLE KEYS */;
INSERT INTO `storage` (`idProduct`, `available`, `price`) VALUES
	(1, 108, 429.84),
	(2, 0, 0.00),
	(3, 73, 274.61),
	(4, 39, 97.46),
	(5, 61, 111.83),
	(6, 88, 206.60),
	(7, 214, 83.08),
	(8, 92, 82.80),
	(9, 0, 0.00),
	(10, 77, 46.30),
	(11, 46, 51.70),
	(12, 13, 34.96),
	(13, 54, 51.14),
	(14, 91, 43.77),
	(15, 117, 189.92),
	(16, 98, 96.14),
	(17, 37, 166.50);
/*!40000 ALTER TABLE `storage` ENABLE KEYS */;

-- Дамп структуры для таблица pansionat.suppliers
DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `idSupplier` int(11) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`idSupplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.suppliers: ~8 rows (приблизительно)
DELETE FROM `suppliers`;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` (`idSupplier`, `supplier`, `status`, `city`, `address`, `phone`) VALUES
	(1, 'СЫТНЫЙ', 'рынок', 'Ленинград', 'Сытнинская, 3', '2329916'),
	(2, 'ПОРТОС', 'кооператив', 'Резекне', 'Садовая, 27', '317664'),
	(3, 'ШУШАРЫ', 'совхоз', 'Пушкин', 'Новая, 17', '4705038'),
	(4, 'ТУЛЬСКИЙ', 'универсам', 'Ленинград', 'Тульская, 3', '2710837'),
	(5, 'УРОЖАЙ', 'коопторг', 'Луга', 'Песчаная, 19', '789000'),
	(6, 'ЛЕТО', 'агрофирма', 'Ленинград', 'Пулковское ш.,8', '2939729'),
	(7, 'ОГУРЕЧИК', 'ферма', 'Паневежис', 'Укмерге, 15', '127331'),
	(8, 'КОРЮШКА', 'кооператив', 'Йыхви', 'Нарвское ш., 64', '432123 ');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;

-- Дамп структуры для таблица pansionat.supplys
DROP TABLE IF EXISTS `supplys`;
CREATE TABLE IF NOT EXISTS `supplys` (
  `idSupply` int(11) NOT NULL AUTO_INCREMENT,
  `idSupplier` int(11) NOT NULL DEFAULT '0',
  `idProduct` int(11) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0' COMMENT 'kg',
  PRIMARY KEY (`idSupply`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pansionat.supplys: ~37 rows (приблизительно)
DELETE FROM `supplys`;
/*!40000 ALTER TABLE `supplys` DISABLE KEYS */;
INSERT INTO `supplys` (`idSupply`, `idSupplier`, `idProduct`, `price`, `quantity`) VALUES
	(1, 1, 9, 0.00, 0),
	(2, 1, 11, 1.50, 50),
	(3, 1, 12, 3.00, 10),
	(4, 1, 15, 2.00, 170),
	(5, 2, 1, 3.60, 300),
	(6, 2, 3, 0.00, 0),
	(7, 2, 5, 1.80, 100),
	(8, 2, 6, 3.60, 80),
	(9, 2, 8, 0.00, 0),
	(10, 3, 7, 0.40, 200),
	(11, 3, 9, 0.00, 0),
	(12, 3, 12, 2.50, 20),
	(13, 3, 15, 1.50, 200),
	(14, 4, 2, 0.00, 0),
	(15, 4, 4, 2.04, 50),
	(16, 4, 13, 0.88, 150),
	(17, 4, 14, 0.00, 0),
	(18, 4, 16, 0.94, 200),
	(19, 4, 17, 4.50, 50),
	(20, 5, 4, 3.00, 50),
	(21, 5, 9, 0.00, 0),
	(22, 5, 10, 0.50, 130),
	(23, 5, 11, 0.00, 0),
	(24, 5, 13, 1.20, 40),
	(25, 5, 14, 0.50, 70),
	(26, 5, 16, 1.00, 50),
	(27, 6, 10, 0.70, 90),
	(28, 6, 11, 0.00, 0),
	(29, 6, 12, 0.00, 0),
	(30, 7, 1, 4.20, 70),
	(31, 7, 3, 4.00, 250),
	(32, 7, 6, 2.20, 140),
	(33, 7, 7, 0.00, 0),
	(34, 7, 8, 1.00, 150),
	(35, 8, 2, 0.00, 0),
	(36, 8, 5, 2.00, 70),
	(37, 8, 11, 1.00, 100);
/*!40000 ALTER TABLE `supplys` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
