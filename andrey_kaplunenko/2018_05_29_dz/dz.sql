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