<?php
?>
<p>ПРимер запроса к бд. 2 таблицы manager и leads соединяются</p>
/*
SELECT
	`manager`.`name` AS `name`,
    IF(t1.leads IS NULL,0,t1.leads) AS `leads`,
    `t2`.`sold` AS `sold`,
    `sold` / `leads` AS `conversion`


FROM `manager`
LEFT OUTER JOIN (
    SELECT
		`manager_id`,
        COUNT(*) AS `leads`
    FROM `lead`
    WHERE
        `created_at` BETWEEN '2018-01-30' and '2018-03-30'
    GROUP BY `manager_id`
    ) `t1`
	ON `t1`.`manager_id` = `manager`.`id`
LEFT OUTER JOIN (
    SELECT manager_id ,COUNT(*) AS sold  FROM nikita.lead WHERE (created_at
BETWEEN '2018-01-30' and '2018-03-30') AND status_ = 1 GROUP BY manager_id) `t2`
    ON `t2`.`manager_id` = `manager`.`id`

*/
/*
SELECT	materic.name, country.name ,city.name FROM city
INNER JOIN country ON city.country_id = country.id
INNER JOIN materic ON country.materic_id = materic.id


SELECT	materic.name, COUNT(*), SUM(city.population) city_count FROM city
INNER JOIN country ON city.country_id = country.id
INNER JOIN materic ON country.materic_id = materic.id GROUP BY materic.id


SELECT country.name ,COUNT(*),SUM(city.population) population_count FROM city
INNER JOIN country ON city.country_id = country.id GROUP BY country.id




SELECT
id,
name,
ceil(population/1000) AS population
FROM nikita.city ;


SELECT country.id, country.name ,COUNT(*),SUM(city.population) population_count  FROM city
INNER JOIN country ON city.country_id = country.id GROUP BY country.id  HAVING  population_count < 1000

*/