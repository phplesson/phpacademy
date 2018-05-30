#выбрать какие есть блюда(название)
SELECT d.dish
FROM dishes d
WHERE 1;

# выбрать какие есть поставщики(название)
SELECT idSupplier, supplier
FROM suppliers
WHERE 1;

# выбрать продукты(название, калорийность), у которых отсутсвуют жиры
SELECT p.product, (p.protein + p.carb) * 4.1 AS 'kcal'
FROM products p
WHERE p.fat = 0;

# выбрать поставщиков (название, инфо=адресс + телефон) из ленинграда
SELECT supplier, address, phone
FROM suppliers
WHERE city = 'Ленинград';

# сделать отчет - основа блюда, количество блюд на этой основе
SELECT d.base, count(*)
FROM dishes d
GROUP BY d.base;

# сделать отчёт - название города, количество поставщиков из него
SELECT spp.city as 'Город', COUNT(*) as 'Кол-во поставщиков'
FROM suppliers spp
GROUP BY spp.city
ORDER BY spp.city ASC;


# сделать отчёт - название типа блюда, количество блюд этого типа
SELECT dt.dishType, count(*) AS 'total'
FROM dishes d, dishTypes dt
WHERE
  d.idDishType = dt.idDishType
GROUP BY dt.dishType;

# сделать отчёт - город , количество поставок из этого города с ненулевым обьемом
SELECT spp.city AS 'Город', COUNT(*) AS 'Кол-во поставок'
FROM suppliers spp, supplys spy
WHERE spp.idSupplier = spy.idSupplier AND spy.quantity <> 0
GROUP BY spp.city;

# сделать отчет - основа блюда, самая маленькая порция, самая большая, средняя трудность
SELECT
  dt.dishType,
  MIN(d.output) AS 'least',
  MAX(d.output) AS 'biggest',
  AVG(d.laborCost) AS 'average labor cost'
FROM dishes d, dishTypes dt
WHERE
  d.idDishType = dt.idDishType
GROUP BY dt.dishType;

# сделать отчёт - название поставщика, сумма поставок от него, количество, средняя цена поставки
SELECT 
	suppliers.supplier AS 'Поставщик', 
	COUNT(supplys.price) AS 'Кол-во состоявшихся поставок', 
	SUM(supplys.price) AS 'Общая сумма поставок',
	AVG(supplys.price) AS 'Средняя цена поставки'
FROM suppliers, supplys
WHERE suppliers.idSupplier = supplys.idSupplier AND supplys.quantity <> 0
GROUP BY suppliers.supplier;

# сделать отчёт - название продукта, его калорийность на 100 гр, с сортировкой по калорйности
SELECT p.product, ((p.protein + p.carb) * 4.1 + p.fat * 9.3)/10 AS 'kcal per 100g'
FROM products p
ORDER BY p.product;


# сделать отчет -
#   название блюда, его калорийность, перечень продуктов в составе через запятую
SELECT 	subTable.idDish,
		subTable.dish AS 'Название блюда', 
		((SUM(subTable.protein) + SUM(subTable.carb)) * 4.1 + SUM(subTable.fat) * 9.3)/10 as 'Калорийность в kCal/100g', 
		GROUP_CONCAT(DISTINCT subTable.product ORDER BY subTable.product ASC SEPARATOR ', ') AS 'Состав'
FROM (
	SELECT dishes.idDish, dishes.dish, products.protein, products.carb, products.fat, products.product
	FROM dishes, compositions, products
	WHERE dishes.idDish = compositions.idDish AND compositions.idProduct = products.idProduct
	ORDER BY dishes.idDish
) AS subTable
GROUP BY idDish;

## испльзовать функцию агрегации group_concat
# GROUP_CONCAT([DISTINCT] expr [,expr ...]
#   [ORDER BY {unsigned_integer | col_name | expr}
#   [ASC | DESC] [,col_name ...]]
#   [SEPARATOR str_val])

#group_concat(выражение) - простой случай
#group_concat(выражение SEPARATOR string_value) - с заданием разделителя(напр точка)
#group_concat(выражение ORDER BY как_обычно_задание секции для сортировки) - с сортировкой значений в группе



##################################################
#
# для тех, кто дошёл до сюда и ему всё есчё скучно
#
##################################################
# сделать отчёт - тип блюда, средняя калорийность, среднее количество витамина С

# подсказка
# секция FROM - перечисляем отношения(таблицы)
# сам запрос выдаёт всегда в результате отношение(таблицу) - просто вычисляемую
# это как в пхп никто ведь не запрещает описать две функции f1($arg){}, f2($arg){}
# и делать вызов - f1(f2(100)) - ведь если ф2 выдает значение, оно же может быть
# тут же использованно как аргумент для другой функции.

# example:
SELECT newtable.product, newtable.C
FROM
  (SELECT *
   FROM products p
   WHERE p.C <> 0
  ) as newtable

WHERE newtable.fat <> 0
ORDER BY newtable.C DESC;