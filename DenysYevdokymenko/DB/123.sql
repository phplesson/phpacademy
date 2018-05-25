-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.21-log - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных pension
DROP DATABASE IF EXISTS `pension`;
CREATE DATABASE IF NOT EXISTS `pension` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pension`;

-- Дамп структуры для таблица pension.availability
DROP TABLE IF EXISTS `availability`;
CREATE TABLE IF NOT EXISTS `availability` (
  `idProduct` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  KEY `FK_availability_products` (`idProduct`),
  CONSTRAINT `FK_availability_products` FOREIGN KEY (`idProduct`) REFERENCES `products` (`idProduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.availability: ~17 rows (приблизительно)
DELETE FROM `availability`;
/*!40000 ALTER TABLE `availability` DISABLE KEYS */;
INSERT INTO `availability` (`idProduct`, `quantity`, `price`) VALUES
	(1, 108, 429.84),
	(2, 0, 0),
	(3, 73, 274.61),
	(4, 39, 97.46),
	(5, 61, 111.83),
	(6, 88, 206.6),
	(7, 214, 83.08),
	(8, 92, 82.8),
	(9, 0, 0),
	(10, 77, 46.3),
	(11, 46, 51.7),
	(12, 13, 34.96),
	(13, 54, 51.14),
	(14, 91, 43.77),
	(15, 117, 189.92),
	(16, 98, 96.14),
	(17, 37, 166.5);
/*!40000 ALTER TABLE `availability` ENABLE KEYS */;

-- Дамп структуры для таблица pension.composition
DROP TABLE IF EXISTS `composition`;
CREATE TABLE IF NOT EXISTS `composition` (
  `idDish` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  KEY `FK_composition_dishes` (`idDish`),
  KEY `FK_composition_products` (`idProduct`),
  CONSTRAINT `FK_composition_dishes` FOREIGN KEY (`idDish`) REFERENCES `dishes` (`idDish`),
  CONSTRAINT `FK_composition_products` FOREIGN KEY (`idProduct`) REFERENCES `products` (`idProduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.composition: ~152 rows (приблизительно)
DELETE FROM `composition`;
/*!40000 ALTER TABLE `composition` DISABLE KEYS */;
INSERT INTO `composition` (`idDish`, `idProduct`, `weight`) VALUES
	(1, 11, 100),
	(1, 15, 80),
	(1, 12, 5),
	(1, 4, 15),
	(2, 1, 65),
	(2, 9, 40),
	(2, 9, 40),
	(2, 11, 35),
	(2, 12, 20),
	(2, 5, 20),
	(2, 4, 20),
	(3, 11, 55),
	(3, 15, 55),
	(3, 6, 50),
	(3, 12, 20),
	(3, 10, 15),
	(3, 16, 5),
	(4, 2, 50),
	(4, 11, 50),
	(4, 4, 40),
	(4, 9, 35),
	(4, 5, 20),
	(4, 12, 5),
	(5, 2, 80),
	(5, 9, 40),
	(5, 3, 25),
	(5, 12, 5),
	(6, 1, 80),
	(6, 11, 150),
	(6, 4, 30),
	(6, 12, 10),
	(7, 6, 125),
	(7, 16, 15),
	(8, 8, 75),
	(8, 6, 50),
	(8, 16, 15),
	(9, 1, 80),
	(9, 10, 30),
	(9, 11, 25),
	(9, 13, 35),
	(9, 12, 15),
	(9, 3, 15),
	(10, 2, 70),
	(10, 7, 250),
	(10, 3, 20),
	(10, 14, 15),
	(10, 12, 5),
	(11, 2, 100),
	(11, 9, 20),
	(11, 10, 20),
	(11, 3, 5),
	(11, 12, 2),
	(12, 7, 350),
	(12, 13, 35),
	(12, 3, 5),
	(12, 16, 5),
	(13, 1, 180),
	(13, 11, 100),
	(13, 10, 40),
	(13, 12, 20),
	(13, 3, 5),
	(14, 1, 90),
	(14, 7, 50),
	(14, 6, 20),
	(14, 10, 10),
	(14, 3, 5),
	(14, 12, 5),
	(14, 14, 3),
	(15, 2, 100),
	(15, 9, 20),
	(15, 5, 20),
	(15, 3, 20),
	(15, 10, 10),
	(15, 12, 5),
	(16, 5, 120),
	(16, 7, 35),
	(16, 6, 15),
	(16, 14, 9),
	(16, 3, 5),
	(17, 9, 150),
	(17, 7, 50),
	(17, 13, 25),
	(17, 3, 20),
	(17, 12, 10),
	(17, 14, 5),
	(18, 8, 140),
	(18, 6, 30),
	(18, 14, 15),
	(18, 5, 10),
	(18, 16, 15),
	(19, 5, 120),
	(19, 7, 45),
	(19, 10, 20),
	(19, 3, 15),
	(20, 13, 50),
	(20, 7, 75),
	(20, 15, 75),
	(20, 16, 10),
	(20, 3, 5),
	(21, 13, 70),
	(21, 6, 30),
	(21, 3, 20),
	(21, 5, 20),
	(21, 16, 15),
	(22, 8, 140),
	(22, 6, 30),
	(22, 14, 20),
	(22, 16, 15),
	(22, 5, 8),
	(23, 11, 250),
	(23, 10, 65),
	(23, 3, 20),
	(24, 8, 80),
	(24, 7, 100),
	(24, 5, 40),
	(24, 6, 30),
	(24, 16, 20),
	(24, 3, 10),
	(24, 14, 10),
	(25, 15, 120),
	(25, 16, 35),
	(25, 14, 30),
	(25, 15, 120),
	(25, 16, 35),
	(25, 14, 30),
	(25, 8, 20),
	(25, 3, 20),
	(26, 15, 150),
	(26, 16, 20),
	(26, 3, 2),
	(27, 15, 50),
	(27, 7, 150),
	(27, 5, 80),
	(27, 16, 35),
	(27, 3, 2),
	(28, 8, 100),
	(28, 5, 20),
	(28, 6, 20),
	(28, 16, 15),
	(28, 3, 10),
	(29, 15, 150),
	(29, 9, 200),
	(29, 16, 15),
	(30, 15, 70),
	(30, 16, 10),
	(31, 7, 150),
	(31, 15, 150),
	(31, 16, 25),
	(32, 17, 8),
	(33, 17, 8),
	(33, 16, 25),
	(33, 7, 75);
/*!40000 ALTER TABLE `composition` ENABLE KEYS */;

-- Дамп структуры для таблица pension.dishes
DROP TABLE IF EXISTS `dishes`;
CREATE TABLE IF NOT EXISTS `dishes` (
  `idDish` int(11) NOT NULL AUTO_INCREMENT,
  `dishName` varchar(50) NOT NULL,
  `typeDish` char(50) NOT NULL,
  `base` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `work` tinyint(4) NOT NULL,
  PRIMARY KEY (`idDish`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.dishes: ~33 rows (приблизительно)
DELETE FROM `dishes`;
/*!40000 ALTER TABLE `dishes` DISABLE KEYS */;
INSERT INTO `dishes` (`idDish`, `dishName`, `typeDish`, `base`, `total`, `work`) VALUES
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

-- Дамп структуры для таблица pension.meals
DROP TABLE IF EXISTS `meals`;
CREATE TABLE IF NOT EXISTS `meals` (
  `idMeals` int(11) NOT NULL AUTO_INCREMENT,
  `nameMeals` varchar(50) DEFAULT NULL,
  KEY `Индекс 1` (`idMeals`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.meals: ~3 rows (приблизительно)
DELETE FROM `meals`;
/*!40000 ALTER TABLE `meals` DISABLE KEYS */;
INSERT INTO `meals` (`idMeals`, `nameMeals`) VALUES
	(1, 'Завтрак'),
	(2, 'Обед'),
	(3, 'Ужин');
/*!40000 ALTER TABLE `meals` ENABLE KEYS */;

-- Дамп структуры для таблица pension.menu
DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `idMeals` int(11) DEFAULT NULL,
  `shortType` varchar(50) DEFAULT NULL,
  `idDish` int(11) DEFAULT NULL,
  KEY `FK_menu_meals` (`idMeals`),
  KEY `FK_menu_dishes` (`idDish`),
  CONSTRAINT `FK_menu_dishes` FOREIGN KEY (`idDish`) REFERENCES `dishes` (`idDish`),
  CONSTRAINT `FK_menu_meals` FOREIGN KEY (`idMeals`) REFERENCES `meals` (`idMeals`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.menu: ~21 rows (приблизительно)
DELETE FROM `menu`;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`idMeals`, `shortType`, `idDish`) VALUES
	(1, 'З', 3),
	(1, 'З', 6),
	(1, 'Г', 19),
	(1, 'Г', 21),
	(1, 'Н', 31),
	(1, 'Н', 32),
	(2, 'З', 1),
	(2, 'З', 6),
	(2, 'С', 9),
	(2, 'С', 12),
	(2, 'Г', 14),
	(2, 'Г', 16),
	(2, 'Г', 18),
	(2, 'Д', 26),
	(2, 'Д', 28),
	(3, 'З', 6),
	(3, 'З', 8),
	(3, 'Г', 20),
	(3, 'Г', 16),
	(3, 'Н', 30),
	(3, 'Н', 31);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Дамп структуры для таблица pension.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `idProduct` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) DEFAULT NULL,
  `protein` int(11) DEFAULT NULL,
  `fat` int(11) DEFAULT NULL,
  `carbohydrate` int(11) DEFAULT NULL,
  `K` int(11) DEFAULT NULL,
  `Ca` int(11) DEFAULT NULL,
  `Na` int(11) DEFAULT NULL,
  `B2` float DEFAULT NULL,
  `PP` float DEFAULT NULL,
  `C` int(11) DEFAULT NULL,
  KEY `Индекс 1` (`idProduct`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.products: ~17 rows (приблизительно)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`idProduct`, `productName`, `protein`, `fat`, `carbohydrate`, `K`, `Ca`, `Na`, `B2`, `PP`, `C`) VALUES
	(1, 'Говядина', 189, 124, 0, 3150, 90, 600, 1.5, 28, 0),
	(2, 'Судак', 190, 80, 0, 1870, 270, 0, 1.1, 10, 30),
	(3, 'Масло', 60, 825, 90, 230, 220, 740, 0.1, 1, 0),
	(4, 'Майонез', 31, 670, 26, 480, 280, 0, 0, 0, 0),
	(5, 'Яйца', 127, 115, 7, 1530, 550, 710, 4.4, 1.9, 0),
	(6, 'Сметана', 26, 300, 28, 950, 850, 320, 1, 1, 2),
	(7, 'Молоко', 28, 32, 47, 1460, 1210, 1500, 1.3, 1, 10),
	(8, 'Творог', 167, 90, 13, 1120, 1640, 1410, 2.7, 4, 5),
	(9, 'Морковь', 13, 1, 70, 2000, 510, 210, 0.7, 9.9, 50),
	(10, 'Лук', 17, 0, 95, 1750, 310, 180, 0.2, 2, 100),
	(11, 'Помидоры', 6, 0, 42, 290, 140, 400, 0.4, 5.3, 250),
	(12, 'Зелень', 9, 0, 20, 340, 275, 75, 1.2, 4, 380),
	(13, 'Рис', 70, 6, 773, 540, 240, 260, 0.4, 16, 0),
	(14, 'Мука', 106, 13, 732, 1760, 240, 120, 1.2, 22, 0),
	(15, 'Яблоки', 4, 0, 113, 2480, 160, 260, 0.3, 3, 130),
	(16, 'Сахар', 0, 0, 998, 30, 20, 10, 0, 0, 0),
	(17, 'Кофе', 127, 36, 9, 9710, 180, 180, 0.3, 1.8, 0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Дамп структуры для таблица pension.recipes
DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `idDishes` int(11) NOT NULL,
  `recipe` varchar(50) DEFAULT NULL,
  KEY `FK_recipes_dishes` (`idDishes`),
  CONSTRAINT `FK_recipes_dishes` FOREIGN KEY (`idDishes`) REFERENCES `dishes` (`idDish`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.recipes: ~33 rows (приблизительно)
DELETE FROM `recipes`;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` (`idDishes`, `recipe`) VALUES
	(1, '\'Помидоры ...\''),
	(2, '\'Вареное ...\''),
	(3, '\'Зелень ме...\''),
	(4, '\'Вареные р...\''),
	(5, '\'Филе суда...\''),
	(6, '\'Мясо варе...\''),
	(7, '\'Сметану п...\''),
	(8, '\'Протертый ..\''),
	(9, '\'Грудинку ...\''),
	(10, '\'Филе суда...\''),
	(11, '\'Судак очи...\''),
	(12, '\'Промытый ...\''),
	(13, '\'Мясо наре...\''),
	(14, '\'Говядину ...\''),
	(15, '\'Подготовл...\''),
	(16, '\'Сырые яйц...\''),
	(17, '\'Нарезать ...\''),
	(18, '\'В протерт...\''),
	(19, '\'К свежим ...\''),
	(20, '\'Рис свари...\''),
	(21, '\'Готовую р...\''),
	(22, '\'В протерт...\''),
	(23, '\'Спассеров...\''),
	(24, '\'В протерт...\''),
	(25, '\'Очистить ...\''),
	(26, '\'Не прорез...\''),
	(27, '\'Запеченны...\''),
	(28, '\'Яйца разм...\''),
	(29, '\'Очищенную ..\''),
	(30, '\'Яблоки оч...\''),
	(31, '\'Яблоки на...\''),
	(32, '\'Кофеварку ..\''),
	(33, '\'Сварить ч...\'');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;

-- Дамп структуры для таблица pension.suppliers
DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `idSup` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `adress` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  KEY `Индекс 1` (`idSup`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.suppliers: ~8 rows (приблизительно)
DELETE FROM `suppliers`;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` (`idSup`, `name`, `status`, `city`, `adress`, `tel`) VALUES
	(1, 'СЫТНЫЙ', 'рынок', 'Ленинград', 'Сытнинская, 3', '2329916'),
	(2, 'ПОРТОС', 'кооператив', 'Резекне', 'Садовая, 27', '317664'),
	(3, 'ШУШАРЫ', 'совхоз', 'Пушкин', 'Новая, 17', '4705038'),
	(4, 'ТУЛЬСКИЙ', 'универсам', 'Ленинград', 'Тульская, 3', '2710837'),
	(5, 'УРОЖАЙ', 'коопторг', 'Луга', 'Песчаная, 19', '789000'),
	(6, 'ЛЕТО', 'агрофирма', 'Ленинград', 'Пулковское ш., 8', '2939729'),
	(7, 'ОГУРЕЧИК', 'ферма', 'Паневежис', 'Укмерге, 15', '127331'),
	(8, 'КОРЮШКА', 'кооператив', 'Йихви', 'Нарвское ш. 64', '432123');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;

-- Дамп структуры для таблица pension.supply
DROP TABLE IF EXISTS `supply`;
CREATE TABLE IF NOT EXISTS `supply` (
  `idSup` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  KEY `FK_supply_suppliers` (`idSup`),
  KEY `FK_supply_products` (`idProduct`),
  CONSTRAINT `FK_supply_products` FOREIGN KEY (`idProduct`) REFERENCES `products` (`idProduct`),
  CONSTRAINT `FK_supply_suppliers` FOREIGN KEY (`idSup`) REFERENCES `suppliers` (`idSup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.supply: ~37 rows (приблизительно)
DELETE FROM `supply`;
/*!40000 ALTER TABLE `supply` DISABLE KEYS */;
INSERT INTO `supply` (`idSup`, `idProduct`, `price`, `quantity`) VALUES
	(1, 9, NULL, NULL),
	(1, 11, 1.5, 50),
	(1, 12, 3, 10),
	(1, 15, 2, 170),
	(2, 1, 3.6, 300),
	(2, 3, NULL, NULL),
	(2, 5, 1.8, 100),
	(2, 6, 3.6, 80),
	(2, 8, NULL, NULL),
	(3, 7, 0.4, 200),
	(3, 9, NULL, NULL),
	(3, 12, 2.5, 20),
	(3, 15, 1.5, 200),
	(4, 2, NULL, NULL),
	(4, 4, 2.04, 50),
	(4, 13, 0.88, 150),
	(4, 14, NULL, NULL),
	(4, 16, 0.94, 200),
	(4, 17, 4.5, 50),
	(5, 4, 3, 50),
	(5, 9, NULL, NULL),
	(5, 10, 0.5, 130),
	(5, 11, NULL, NULL),
	(5, 13, 1.2, 40),
	(5, 14, 0.5, 70),
	(5, 16, 1, 50),
	(6, 10, 0.7, 90),
	(6, 11, NULL, NULL),
	(6, 12, NULL, NULL),
	(7, 1, 4.2, 70),
	(7, 3, 4, 250),
	(7, 6, 2.2, 140),
	(7, 7, NULL, NULL),
	(7, 8, 1, 150),
	(8, 2, NULL, NULL),
	(8, 5, 2, 70),
	(8, 11, 1, 100);
/*!40000 ALTER TABLE `supply` ENABLE KEYS */;

-- Дамп структуры для таблица pension.typedish
DROP TABLE IF EXISTS `typedish`;
CREATE TABLE IF NOT EXISTS `typedish` (
  `shortType` char(50) DEFAULT NULL,
  `type` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы pension.typedish: ~5 rows (приблизительно)
DELETE FROM `typedish`;
/*!40000 ALTER TABLE `typedish` DISABLE KEYS */;
INSERT INTO `typedish` (`shortType`, `type`) VALUES
	('З', 'Закуска'),
	('С', 'Суп'),
	('Г', 'Горячее'),
	('Д', 'Десерт'),
	('Н', 'Напиток');
/*!40000 ALTER TABLE `typedish` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
