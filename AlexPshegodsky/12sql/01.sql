# сделать отчёт:блюда которые можно приготовить на 200 человек.

SELECT dish as 'Dishes available for 200 ppl banquet'
FROM dishes
WHERE dish NOT IN (
SELECT dish
FROM dishes,compositions,products,`storage`
WHERE
dishes.idDish = compositions.idDish AND compositions.idProduct = products.idProduct AND compositions.idProduct = `storage`.idProduct AND `storage`.available < ((compositions.quantity * 200) / 1000)
)
GROUP BY dish
ORDER BY dishes.idDish;


# через запросы(не через графический интерфейс) в базу добавить
# - одного поставщика
# - один новый продукт(желательно на который найдете реальные данные по калорийности, витаминам и микроелементам)
# - одно блюдо с использованием этого продукта
# - хотябы две поставки поставщиком этого продукта

INSERT INTO suppliers VALUES (121,'ООО "ПИВАСИК"', 'коопторг', 'Киев','Михаила Коцюбинского, 3', '5555555');
INSERT INTO products VALUES (122,'Ячменный солод', '10.3', '1.8','78.3','361','37','11','0.3','5.6','0.6');
INSERT INTO products VALUES (123,'Хмель', '10.3', '1.8','78.3','361','37','11','0.3','5.6','0.6');
INSERT INTO products VALUES (124,'Дрожжи', '10.3', '1.8','78.3','361','37','11','0.3','5.6','0.6');
INSERT INTO products VALUES (125,'Соль', '10.3', '1.8','78.3','361','37','11','0.3','5.6','0.6');
INSERT INTO dishes VALUES (126, 'Пиво', 'Н', 'Хмель', '1000', '5');
INSERT INTO compositions VALUES (126, 122, 5);
INSERT INTO compositions VALUES (126, 123, 4);
INSERT INTO compositions VALUES (126, 124, 4);
INSERT INTO compositions VALUES (126, 125, 1);
INSERT INTO supplys VALUES (127, 121, 122, 150);
INSERT INTO supplys VALUES (128, 121, 123, 100);
INSERT INTO supplys VALUES (129, 121, 124, 70);
INSERT INTO supplys VALUES (130, 121, 125, 90);
INSERT INTO supplys VALUES (131, 121, 122, 11);
INSERT INTO supplys VALUES (132, 121, 123, 32);
INSERT INTO supplys VALUES (133, 121, 124, 3);
INSERT INTO supplys VALUES (134, 121, 125, 1234);


# через второй способ добавить запись про новый продукт в таблицу склад ;
# а именно, обьем хранения продукта на складе, есть суммарные поставки этого продукта на склад.

INSERT INTO `storage`
SELECT idProduct,SUM(quantity) AS available, (price * SUM(quantity)) AS price
FROM supplys
WHERE idSupplier = 121
GROUP BY idProduct

#оновить стоимость поставки нового товара(цена)
UPDATE  supplys
SET price = 10
WHERE idProduct = 124;

#обновить цену на складе для нового продукта - ведь изменилась одна из поставок этого продукта вплане цены.
