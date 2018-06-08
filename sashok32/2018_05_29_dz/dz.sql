#сделать отчёт
#блюда которые можно приготовить на 200 человек.

#напоминаю что легче найти те, которые приготовить нельзя

***РЕШЕНИЕ***
SELECT *
FROM dishes dd
WHERE
	dd.idDish NOT IN (SELECT DISTINCT d.idDish
	FROM
		dishes d,
		compositions c,
		products p,
		storage st
	WHERE
		d.idDish = c.idDish AND
		c.idProduct = p.idProduct AND
		p.idProduct = st.idProduct AND
		c.quantity /5 > st.available);




# вставка новых записей - перечисляем поля которые будем задавать, а потом значения полей новых записей
# если для новой записи мы задаем значения всех полей, можно опустить перечисление полей, сразу задавать значения
# но зачастую мы не задаем все поля - например не задаем поле с значением по умолчнанию автоинкремент(счётчик)
-- INSERT INTO aTable (field1, field3, ..., fieldN) VALUES (val1,val3,...., valN);
-- INSERT INTO aTable (field1, field3, ..., fieldN) VALUES (val1,val3,...., valN), (otherval1, otherval2,...,othervalN);

# итого
через запросы(не через графический интерфейс) в базу добавить
- одного поставщика
***РЕШЕНИЕ***
INSERT INTO suppliers VALUES ('9', 'ДОСТАВЩИК', 'колхоз', 'Бровары', 'Независимости, 10', '5555555');

- один новый продукт(желательно на который найдете реальные данные по калорийности, витаминам и микроелементам)
***РЕШЕНИЕ***
INSERT INTO products VALUES ('18', 'Свёкла', '15', '1', '88', '2880', '370', '460', '0.4', '2', '100');

- одно блюдо с использованием этого продукта
***РЕШЕНИЕ***
INSERT INTO dishes VALUES ('34', 'Салат со свеклы', 'З', 'Овощи', '200', '3');

- хотябы две поставки поставщиком этого продукта
***РЕШЕНИЕ***
INSERT INTO supplys VALUES ('38', '8', '18', '1.4', '100'),('39', '9', '18', '1.6', '200');

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

***РЕШЕНИЕ***
INSERT INTO storage
SELECT p.idProduct, SUM(ss.quantity) as quant, SUM(ss.price * ss.quantity)/SUM(ss.quantity) as price
FROM products p, supplys ss
WHERE p.idProduct = ss.idProduct AND p.idProduct = 18;



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
***РЕШЕНИЕ***
UPDATE supplys ss
SET ss.price=1.45
WHERE ss.idProduct=18 AND ss.idSupplier=8;





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
***РЕШЕНИЕ***
UPDATE storage st
SET st.price = 
		(SELECT SUM(ss.price * ss.quantity)/SUM(ss.quantity) as price
		FROM products p, supplys ss
		WHERE p.idProduct = ss.idProduct AND p.idProduct = 18)
WHERE st.idProduct=18;


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
***РЕШЕНИЕ***
DELETE
FROM suppliers
WHERE supplier='ДОСТАВЩИК';

- сложным удалением(соединение таблиц) удалить сразу из таблиц блюд, рецептов, продуктов поставок, склада
***РЕШЕНИЕ***
DELETE p, ss, st
FROM products p JOIN supplys ss JOIN storage st ON (
	p.idProduct = ss.idProduct AND
	ss.idProduct = st.idProduct)
WHERE p.idProduct = 18;

DELETE
FROM dishes
WHERE idDish = 34;

Эту часть дз оформить ввиде одного скл файла, который по сути сначала поменяет базу, потом вернет обратно.
Напоминаю, что если в одном файле несколько запросов, каждый должен заканчиваться точкой с запятой.