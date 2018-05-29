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