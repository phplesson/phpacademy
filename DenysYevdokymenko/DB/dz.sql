#сделать отчёт
#блюда которые можно приготовить на 200 человек.

#напоминаю что легче найти те, которые приготовить нельзя


SELECT *

FROM dishes dd
WHERE dd.idDish NOT IN (
	SELECT DISTINCT d.idDish
		FROM
			storage s,
			dishes d,
			compositions c,
			products p
		WHERE
 		 d.idDish = c.idDish AND
  		c.idProduct = p.idProduct AND
  		p.idProduct = s.idProduct AND
 		 (c.quantity*200/1000 )> s.available
  );





# вставка новых записей - перечисляем поля которые будем задавать, а потом значения полей новых записей
# если для новой записи мы задаем значения всех полей, можно опустить перечисление полей, сразу задавать значения
# но зачастую мы не задаем все поля - например не задаем поле с значением по умолчнанию автоинкремент(счётчик)
-- INSERT INTO aTable (field1, field3, ..., fieldN) VALUES (val1,val3,...., valN);
-- INSERT INTO aTable (field1, field3, ..., fieldN) VALUES (val1,val3,...., valN), (otherval1, otherval2,...,othervalN);

# итого
через запросы(не через графический интерфейс) в базу добавить
- одного поставщика

INSERT INTO suppliers(supplier,`status`,city,address,phone)
VALUES ('ДЕМЕЕВКА','рынок','Киев','пл. Московская, 1','555-555')

- один новый продукт(желательно на который найдете реальные данные по калорийности, витаминам и микроелементам)

INSERT INTO products(product,protein,fat,carb,K,Ca,Na,B2,pp,C)
VALUES ('Гречка',13,3,57,15,2,0,11.1,36,0)

- одно блюдо с использованием этого продукта

INSERT INTO dishes(dish,idDishType,base,output,laborCost)
VALUES ('Каша гречневая','Г','Крупа',210,4);

INSERT INTO compositions
VALUES (34,3,10),(34,18,200)

- хотябы две поставки поставщиком этого продукта

INSERT INTO supplys(idSupplier,idProduct,price,quantity)
VALUES (9,18,4.50,10),(5,18,4.2,35)



# новый возможный вариант вставки новых значений

INSERT INTO aTable(f1,f2,...)
-- вместо
VALUES (f1val1,f2val1,...), (f1val2,f2val2,...);
-- задаем запрос, который вернёт данные для вставки
SELECT ....

-- итого получим
INSERT INTO aTable(f1,f2,...)
SELECT <expr1>,<expr2>, ... FROM <from_section> WHERE <where_section> ...;

именно через второй способ добавить запись про новый продукт в таблицу склад ;
а именно, обьем хранения продукта на складе, есть суммарные поставки этого продукта на склад.
Задача разбиваеться на две - написать запрос выборки из поставок(с агрегацией - суммой, средним) заданного продукта
-притом, результат по порядку и по числу столбцов совпадает с таблицей склада. В качестве цены для склада, взять среднюю
стоимость товара(НЕ тоже самое, AVG(price) из таблицы поставок).

INSERT INTO `storage`(idProduct,available,price)
SELECT
	p.idProduct,
	SUM(s.quantity),
	SUM(s.quantity*s.price)/SUM(s.quantity)
FROM
	products p,
	supplys s
WHERE
	p.idProduct = s.idProduct AND
	p.product = 'Гречка';



#обновление записей из таблицы которые будут отобраны по критерию секции WHERE

-- UPDATE
--   aTable   ---по сути секция FROM, просто сдесь это слово опущено
--
-- SET
--   aField1 = 'newValue',
--   aField2 = 'newValue2',....
-- WHERE
--   condition

#оновить стоимость поставки нового товара(цена)

UPDATE
	supplys s
SET s.price = 5.0
WHERE s.idProduct=18 AND s.idSupplier=9;


выборка для обновления может быть и сложной
UPDATE
  table1 t1, table2 t2 ,..., JOIN ...

  SET t1.field1 = newValue, t2.field2 = ...
WHERE
  difficultCondition


#обновить цену на складе для нового продукта - ведь изменилась одна из поставок этого продукта вплане цены.
-- сдесь получится три под задачи
-- - получить таблицу содержащую новую цену,
-- - соеденить её вместе с таблицей склада - что бы в результате были только записи связанные между собой, и только
-- те, которые надо обновлять(касаются нового продукта)

#Для одного продукта:
UPDATE
	`storage` st
SET
	st.price = (
	SELECT
	     	SUM(s.quantity*s.price)/SUM(s.quantity)
  FROM
	  products p,
	  supplys s
  WHERE
	  p.idProduct = s.idProduct AND
	  p.product = 'Гречка'
	GROUP BY p.idProduct)
WHERE
	st.idProduct=18;
-------------------------------------------------------------------------------------------------
#Для всех продуктов:
UPDATE
	`storage` st, products p
SET
	st.price = (
	SELECT
	     	SUM(s.quantity*s.price)/SUM(s.quantity)
  FROM
	  products p,
	  supplys s
  WHERE
	  p.idProduct = s.idProduct AND
	  p.idProduct = st.idProduct
	GROUP BY p.idProduct) * st.available
WHERE
	st.idProduct=p.idProduct;

--------------------------------------------------------------------------------------------------

удаление записей
DELETE
FROM
WHERE

последние две секции, их логика отобрать записи для удаления. Как и запрос на выборку.
Если секция фром содержит лишь одну таблицу то именно из неё и будет удаление

DELETE
FROM
  aTable
WHERE
  afield = some_value OR anotherField = someThing



Но возможно критерий удаления более сложный, требующий соединения с другими таблицами - тогда

DELETE t
FROM
  targetTable t JOIN aTable a ON (...)
    [JOIN ...]
WHERE
  condition

Последние две секции отработают как и при запросе SELECT
И записи попавшие в результат будут удалены из таблицы targetTable

Иными словами если у вас запрос

SELECT t.id
FROM
  table1 t, table2 tt, ...
WHERE
  condition

то запрос
DELETE t
FROM
  table1 t, table2 tt, ...
WHERE
  condition
удалит ровно те записи, которые первый выдаст в качестве результата.

удаление может быть и сразу из нескольких таблиц.

DELETE t,tt
FROM
  table1 t, table2 tt, ...
WHERE
  condition

К слову, аналогично и обновление

если в запросе на обновление слово UPDATE заменить на SELECT * FROM
и убрать строку SET ... - то получим запрос выборки, который отбирает ровно те записи, к которым будет пременено
обновление.


# удалить все новое связанное с новым продуктом.
- простым удалением удалить запись о новом поставщике
- сложным удалением(соединение таблиц) удалить сразу из таблиц блюд, рецептов, продуктов поставок, склада

Эту часть дз оформить ввиде одного скл файла, который по сути сначала поменяет базу, потом вернет обратно.
Напоминаю, что если в одном файле несколько запросов, каждый должен заканчиваться точкой с запятой.