#выбрать какие есть блюда(название)
SELECT dish
FROM dishes
WHERE 1;

# выбрать какие есть поставщики(название)
SELECT supplier
FROM suppliers
WHERE 1;

# выбрать продукты(название, калорийность), у которых отсутсвуют жиры
SELECT product,K
FROM products
WHERE fat = 0;

# выбрать поставщиков (название, инфо=адресс + телефон) из ленинграда
SELECT supplier, CONCAT_WS('. ',city,address,phone) as info
FROM suppliers
WHERE city = 'Ленинград';

# сделать отчет - основа блюда, количество блюд на этой основе
SELECT base, COUNT(*) as 'Dishes on base'
FROM dishes
GROUP BY base;

#сделать отчёт - название города, количество поставщиков из него
SELECT city, COUNT(*) as 'Suppliers from city'
FROM suppliers
GROUP BY city;

# сделать отчёт - название типа блюда, количество блюд этого типа
SELECT dt.dishType, COUNT(*) as 'Dishes count'
FROM dishes d, dishTypes dt
WHERE d.idDishType = dt.idDishType
GROUP BY dt.dishType;

# сделать отчёт - город , количество поставок из этого города с ненулевым обьемом
SELECT spp.city, COUNT(*) as 'Supply quantity'
FROM supplys s, suppliers spp
WHERE s.idSupplier = spp.idSupplier AND s.quantity <> 0
GROUP BY spp.city;

# сделать отчет - основа блюда, самая маленькая порция, самая большая, средняя трудность
SELECT d.base, MIN(d.output) as 'Min output', MAX(d.output) as 'Max output', AVG(laborCost) as 'Labor cost'
FROM dishes d
WHERE 1
GROUP BY d.base

# сделать отчёт - название поставщика, сумма поставок от него, количество, средняя цена поставки
SELECT spp.supplier, COUNT(*) as 'Supplys count', SUM(s.quantity) as 'Supplys quantity', AVG(s.price)
FROM supplys s, suppliers spp
WHERE s.idSupplier = spp.idSupplier AND s.quantity <> 0
GROUP BY spp.supplier;


# сделать отчёт - название продукта, его калорийность на 100 гр, с сортировкой по калорйности