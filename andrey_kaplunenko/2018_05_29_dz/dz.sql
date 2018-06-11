#сделать отчёт
#блюда которые можно приготовить на 200 человек.
#напоминаю что легче найти те, которые приготовить нельзя

SELECT *
FROM dishes
WHERE dishes.idDish NOT IN (
#Get list of unavailable products in needed quantity
SELECT DISTINCT dsh.idDish
FROM 
	dishes dsh,
	compositions cmp,
	storage stg
WHERE
	cmp.idProduct = stg.idProduct AND
	dsh.idDish = cmp.idDish AND
	cmp.quantity*200/1000 > stg.available #when needed > available
);

#Добавляем поставщика в нашу базу. Это реальный поставщик, называется Ферма "Дичь".
#idSupplier добавляем вручную так как у нас в базе он не авто-инкрементный
INSERT INTO suppliers  (idSupplier, supplier, status, city, address, phone) VALUES (9, 'Ферма "Дичь"', 'ферма', 'Черкассы', 'Черкасская область Христиновка ул. Пушкина, 98/1', '+380982758391');

#Прежде чем добавить новый продукт, изменим формат ячейки для фосфора (PP), так как количество фосфора в яйцах значительно больше чем рассчитано в ячейке (нам понадобится 6 знаков вместо 5):
ALTER TABLE pansionat.products MODIFY COLUMN PP decimal(6,2) NOT NULL COMMENT 'mg';

#Добавим яйца перепелиные:
INSERT INTO products (idProduct, product, protein, fat, carb, K, Ca, Na, B2, PP, C) VALUES (18, 'Яйца перепелиные', 130, 110, 4, 1320, 640, 1410, 8.5, 2270.00, 0);

#добавляем блюдо из перпелиных яиц, вложенный запрос не обязателен, так чисто для тренировки
INSERT INTO dishes (dish, idDishType, base, output, laborCost) VALUES ('Ласточкино гнездо', 1, (SELECT product FROM products WHERE idProduct = 18), 150, 5);

#неверно указал idDishType, надо не численное значение id, а букву, поправляем:
UPDATE dishes SET idDishType = (SELECT idDishType FROM dishTypes WHERE dishType = 'Горячее') WHERE idDish = 34;

#Добавим 4 поставки перепелиных яиц, по 8 4 2 и 3 кг и разной цене. Странно яйца килограммами мерять, но пусть пока так будет )
INSERT INTO supplys (idSupplier, idProduct, price, quantity) VALUES (9, 18, 68, 8), (9, 18, 70, 4), (9, 18, 77, 2), (9, 18, 71, 3);

#Добавим общее кол-во поставленных перепелиных яиц в таблицу склад. Учтем, что обьемы поставок были разные и цена была разная, так что правильно посчитаем среднее значение цены. 
INSERT INTO storage (idProduct, available, price)
SELECT idProduct AS idProduct, SUM(quantity) AS available, (SUM(quantity*price)/SUM(quantity)) AS price
FROM supplys
WHERE idProduct = 18
GROUP BY idProduct;

#Обновим стоимость одной из поставок нового товара, вдруг оказалось что на яйца была акция, и они продавались дешевле:
UPDATE supplys SET price = 73 WHERE idSupply = 40;

#Добавим в базу еще один продукт, возьмем что-то попроще, например СОЛЬ:
INSERT INTO products (idProduct, product, protein, fat, carb, K, Ca, Na, B2, PP, C) VALUES (19, 'Соль поваренная', 0, 0, 0, 80, 240, 390000, 0, 0, 0);

#Добавим пару поставок соли, будем считать что покупаем ее в универсаме ТУЛЬСКИЙ, который уже есть в базе:
INSERT INTO supplys (idSupplier, idProduct, price, quantity) VALUES (4, 19, 3.60, 2), (4, 19, 3.60, 4);

#Добавим соль в таблицу "склад":
INSERT INTO storage (idProduct, available, price)
SELECT idProduct AS idProduct, SUM(quantity) AS available, (SUM(quantity*price)/SUM(quantity)) AS price
FROM supplys
WHERE idProduct = 19
GROUP BY idProduct;

#Обновим цену на складе (табл. storage), после того как изменилась цена одной из поставок (табл. supplys).
#Для этого составим табличку, в которой будет текущая цена на складе, и пересчитанная усредненная по поставкам новая цена.
#Вот эту новую усредненную цену и присвоим соответствующей ячейке поля storage.price.
#В нашем примере мы получаем табличку только для двух новых товаров, id=18 (яйца перепелиные), id=19 (соль).
#Ну и для разнообразия используем новый синтаксис JOIN-ON.
UPDATE storage JOIN (
	SELECT idProduct, (SUM(quantity*price)/SUM(quantity)) AS new_price
	FROM supplys
	WHERE idProduct = 18 || idProduct = 19
	GROUP BY idProduct
) AS avged_table ON storage.idProduct = avged_table.idProduct
SET storage.price = avged_table.new_price;

#Простым удалением удаляем запись о новом поставщике
DELETE
FROM suppliers
WHERE idSupplier = 9;

#Сложным удалением удаляем новые продукты из таблиц products, supplys, storage
DELETE products, supplys, storage
FROM products JOIN supplys JOIN storage ON (
	products.idProduct = supplys.idProduct AND
	supplys.idProduct = storage.idProduct	
	)
WHERE products.idProduct = 18 || products.idProduct = 19;

#И напоследок, простым удалением удаляем новое блюдо из табл. dishes.
#Его можно было б удалить из предыдущего запроса сложным удалением, но только в том случае если бы новое блюдо было связано с
#табл. products через табл. compositions (по iDproduct). А так как рецепт для приготовления нового блюда я не добавлял,
#соответственно связей с табл. products у нового блюда нет. Удаляем его непосредственно.
DELETE
FROM dishes
WHERE idDish = 34;

#На данный момент база вернулась к исходному состоянию - новые записи удалены.