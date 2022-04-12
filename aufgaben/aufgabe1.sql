SELECT CONCAT(a.firstname, ' ', a.lastname) AS name, SUM(m.price) AS price
FROM authors AS a
INNER JOIN movies AS m ON a.id = m.author_id
GROUP BY name;