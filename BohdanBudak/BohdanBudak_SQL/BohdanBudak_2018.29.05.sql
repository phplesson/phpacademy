#1 сделать отчёт
#блюда которые можно приготовить на 200 человек.


SELECT d.dish as 'Available  Dishes'
FROM dishes d
WHERE d.dish  NOT IN (
SELECT dish
FROM dishes d JOIN compositions c ON (d.idDish = c.idDish) JOIN storage s
ON (c.idProduct = s.idProduct AND s.available < ((c.quantity /1000)*200))
)
GROUP BY d.dish
ORDER BY d.idDish;

#2 через запросы(не через графический интерфейс) в базу добавить
#- одного поставщика
#- один новый продукт(желательно на который найдете реальные данные по калорийности, витаминам и микроелементам)
#- одно блюдо с использованием этого продукта
#- хотябы две поставки поставщиком этого продукта

INSERT INTO `pansionat`.`suppliers` (`idSupplier`, `supplier`, `status`, `city`, `address`, `phone`) 
VALUES ('9', 'COCA-COLA', 'ТОВ', 'Kiev', 'бул.Леси Украинки 99', '1236549');

INSERT INTO `pansionat`.`products` (`idProduct`, `product`, `protein`, `fat`, `carb`)
VALUES ('18', 'Coca-cola light', '0.5', '0.7', '1.2');

INSERT INTO `pansionat`.`dishes` (`idDish`, `Dish`)
VALUES ('34', 'Water');

INSERT INTO `pansionat`.`supplys` (`idSupply`, `idSupplier`, `idProduct`, `price`, `quantity`)
VALUES ('38', '3','18', '100', '150');
INSERT INTO `pansionat`.`supplys` (`idSupply`, `idSupplier`, `idProduct`, `price`, `quantity`)
VALUES ('39', '1','18', '95', '250');

#3 именно через второй способ добавить запись про новый продукт в таблицу склад ;
#а именно, обьем хранения продукта на складе, есть суммарные поставки этого продукта на склад.
#Задача разбиваеться на две - написать запрос выборки из поставок(с агрегацией - суммой, средним) заданного продукта
#-притом, результат по порядку и по числу столбцов совпадает с таблицей склада. В качестве цены для склада, взять среднюю
#стоимость товара(НЕ тоже самое, AVG(price) из таблицы поставок).ад.

INSERT INTO `pansionat`.`storage`
SELECT s.idProduct, SUM(s.quantity) AS available, (s.price * SUM(s.quantity)) AS price
FROM supplys s
WHERE idProduct = 18
GROUP BY idProduct;


#4 #оновить стоимость поставки нового товара(цена)
#обновление записей из таблицы которые будут отобраны по критерию секции WHERE
UPDATE  supplys
SET price = 300
WHERE idProduct = 18;

#5 обновить цену на складе для нового продукта - ведь изменилась одна из поставок этого продукта вплане цены.
-- сдесь получится три под задачи
-- - получить таблицу содержащую новую цену,
-- - соеденить её вместе с таблицей склада - что бы в результате были только записи связанные между собой, и только
-- те, которые надо обновлять(касаются нового продукта)


UPDATE storage st INNER JOIN (
	SELECT s.idProduct, (s.price * SUM(s.quantity)) AS price
	FROM supplys s
	WHERE idProduct = 18
	GROUP BY s.idProduct
) AS new_price ON st.idProduct = new_price.idProduct
SET st.price = new_price.price;

# удалить все новое связанное с новым продуктом.
#- простым удалением удалить запись о новом поставщике

DELETE 
FROM suppliers 
WHERE idSupplier = 9;

# удалить все новое связанное с новым продуктом.
#- сложным удалением(соединение таблиц) удалить сразу из таблиц блюд, рецептов, продуктов поставок, склада

DELETE p, s, st
FROM products p JOIN supplys s ON (p.idProduct = s.idProduct) JOIN storage st ON (s.idProduct = st.idProduct)
WHERE p.idProduct = 18;

#так как в базе данных изначально не были связаны между собой таблицы dishes с таблицами products, storage supplys 
#через id.Product, то соответсвенно невозможно предведущим запросом удалить новое блюдо из таблицы dishes.
#Поэтому удалил простым способом.

DELETE 
FROM dishes 
WHERE idDish = 34;
