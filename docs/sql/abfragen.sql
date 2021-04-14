-- CRUD - Create, Read, Update, Delete
-- neuen datensatz anlegen
INSERT INTO namen (id, vorname, nachname) VALUES (NULL,'Bernd', 'Engels');
INSERT INTO namen (vorname, nachname) VALUES ('Bernd', 'Engels');
-- neuen datensatz anlegen und bei fehler überspringen
INSERT IGNORE INTO namen (id, vorname, nachname) VALUES (NULL,'Bernd', 'Engels');

-- select abfragen 
SELECT id,vorname,nachname FROM namen;
SELECT * FROM namen WHERE id=1;
SELECT * FROM namen WHERE id=1 AND vorname LIKE 'Paul' OR vorname LIKE 'Hans';
-- select like mit platzhalter %
SELECT * FROM authors WHERE lastname LIKE 'a%';
SELECT * FROM Movies ORDER BY title;

-- UPDATE namen
UPDATE namen SET vorname='Paul', nachname='Meier' WHERE id=1;
-- löschen von datensätzen
DELETE FROM namen WHERE id=7;
-- Joins
SELECT
	authors.firstname,
	authors.lastname,
	movies.title
FROM movies
JOIN authors ON id = movies.author_id;
-- join mit alias
SELECT
	a.firstname,
	a.lastname,
	m.title
FROM movies AS m
JOIN authors AS a ON a.id = m.author_id;
-- join mit alias oder
SELECT
	a.firstname,
	a.lastname,
	m.title
FROM movies m
JOIN authors a ON a.id = m.author_id;
-- gruppieren und zählen
SELECT
	COUNT(m.id) anzahlMovies,
	a.firstname,
    a.lastname
FROM authors a
JOIN movies m ON a.id = m.author_id
GROUP BY a.id
ORDER BY anzahlMovies DESC
-- join mit concat
SELECT
	CONCAT(a.firstname, ' ', a.lastname) name,
	COUNT(m.id) anzahlMovies
FROM authors a
JOIN movies m ON a.id = m.author_id
GROUP BY a.id
ORDER BY anzahlMovies DESC

-- meine lösungen
-- event - category
SELECT
	e.title,
	c.name
FROM event e
JOIN category c ON c.id = e.category_id;
-- category with count events
SELECT
	c.name,
	COUNT(e.id) anzahlEvents
FROM category c
JOIN event e ON e.category_id = c.id
GROUP BY c.id
ORDER BY anzahlEvents DESC;
