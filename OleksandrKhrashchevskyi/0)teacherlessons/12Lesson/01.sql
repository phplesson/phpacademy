SELECT
  s.supplier,
  AVG(ss.price * ss.quantity)
FROM
  suppliers s,
  supplys ss

WHERE
  s.idSupplier = ss.idSupplier

GROUP BY s.supplier;

#блюда + калорийность + витамин С

SELECT
  d.*,
  SUM((4.1 * (p.carb + p.protein) +
    p.fat * 9.3) /1000 * c.quantity) as "calories",
  SUM(p.C / 1000 * c.quantity) as 'C'
FROM
  dishes d,
  compositions c,
  products p
WHERE
  d.idDish = c.idDish AND
  c.idProduct = p.idProduct

GROUP BY d.idDish;


SELECT
  dt.dishType,
  AVG(pp.calories),
  AVG(pp.C)
FROM
  dishtypes dt,
  (
    SELECT
      d.*,
      SUM((4.1 * (p.carb + p.protein) +
        p.fat * 9.3) /1000 * c.quantity) as "calories",
      SUM(p.C / 1000 * c.quantity) as 'C'
    FROM
      dishes d,
      compositions c,
      products p
    WHERE
      d.idDish = c.idDish AND
      c.idProduct = p.idProduct

    GROUP BY d.idDish
  ) as pp
WHERE
  dt.idDishType = pp.idDishType
GROUP BY dt.dishType;

select idDish
from dishes
where idDish <=3
UNION ALL
select dish
from dishes
where idDish between 3 and 8;


select idDish, dish
from dishes
where idDish <=3
UNION ALL
(select idDish, dish
from dishes
where idDish between 3 and 8
ORDER BY idDish DESC)
;