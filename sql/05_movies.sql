CREATE TABLE actor
(
    id SERIAL PRIMARY KEY
    , name VARCHAR(100) NOT NULL
);

CREATE TABLE movie
(
    id SERIAL PRIMARY KEY
    , title VARCHAR(100) NOT NULL
    , year SMALLINT
);

INSERT INTO movie(title, year) VALUES ('Return of the Jedi', 1983);
INSERT INTO movie(title, year) VALUES
  ('The Wizard of Oz', 1939),
  ('Harry Potter and the Chamber of Secrets', 2002),
  ('The Return of the King', 2003);

SELECT * FROM movie WHERE year >= 2000;
SELECT * FROM movie WHERE title like '%and%';

INSERT INTO actor(name) VALUES
  ('Orlando Bloom'),
  ('Elijah Wood'),
  ('Jackie Chan'),
  ('Mel Gibson'),
  ('Daniel Radcliffe');

UPDATE actor SET name = 'Melvin Gibson' WHERE id=4;

CREATE TABLE movie_actor
(
    id SERIAL PRIMARY KEY
    , movie_id INT NOT NULL REFERENCES movie(id) 
    , actor_id INT NOT NULL REFERENCES actor(id)
);

INSERT INTO movie_actor(movie_id, actor_id) VALUES
  (2, 3),
  (3, 5),
  (1, 4),
  (4, 1),
  (4, 2);

-- find all actors in return of the king
SELECT * FROM movie m
JOIN movie_actor ma ON m.id = ma.movie_id
JOIN actor a ON ma.actor_id = a.id
WHERE title = 'The Return of the King';

SELECT a.name, m.title FROM movie m
JOIN movie_actor ma ON m.id = ma.movie_id
JOIN actor a ON ma.actor_id = a.id
WHERE title = 'The Return of the King';
