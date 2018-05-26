#1 выбрать какие есть поставщики(название)
SELECT s.supplier
FROM suppliers s
WHERE 1;

#2 выбрать поставщиков (название, инфо=адресс + телефон) из ленинграда
SELECT s.supplier AS 'Supplier', 
CONCAT_WS(', ', s.address, s.phone) AS 'Info'
FROM suppliers s
WHERE s.city = 'Ленинград';

#3 сделать отчёт - название города, количество поставщиков из него
SELECT s.city AS 'City', count(*) AS 'Count_of_supplier'
FROM suppliers s
GROUP BY s.city;

#4 сделать отчёт - город , количество поставок из этого города с ненулевым обьемом
SELECT s.city, 
SUM(IF(s1.quantity = 0, 0, 1)) AS 'Count_of_supplys'
FROM suppliers s, supplys s1
WHERE
	s.idSupplier = s1.idSupplier
GROUP BY s.city;

#5 сделать отчёт - название поставщика, сумма поставок от него, количество, средняя цена поставки
SELECT s.supplier AS 'name_of_supplier',
	SUM(s1.price * s1.quantity) AS 'sum_of_supplys',
	SUM(IF(s1.quantity = 0, 0, 1)) AS 'count_of_supplys',
	SUM(s1.price * s1.quantity) / count(*) AS 'Avarage price'
FROM suppliers s, supplys s1
WHERE
	s.idSupplier = s1.idSupplier
GROUP BY s.supplier;

#6 сделать отчет -
#   название блюда, его калорийность, витамин C, перечень продуктов в составе через запятую

## испльзовать функцию агрегации group_concat
# GROUP_CONCAT([DISTINCT] expr [,expr ...]
#   [ORDER BY {unsigned_integer | col_name | expr}
#   [ASC | DESC] [,col_name ...]]
#   [SEPARATOR str_val])

SELECT
	d.dish AS 'Dish_name',
	SUM((((p.protein + p.carb) * 4.1 + p.fat * 9.3)/1000)*c.quantity) AS 'Calories',
	SUM ((p.C /1000) * c.quantity) AS 'Vitamin C',
	GROUP_CONCAT(p.product separator ',') AS 'List_of_products'
FROM dishes d, compositions c, products p
WHERE
	d.idDish = c.idDish AND p.idProduct = c.idProduct
GROUP BY d.dish;