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

