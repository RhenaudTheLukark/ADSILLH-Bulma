INSERT INTO ingredient (name) VALUE ('farine');
INSERT INTO ingredient (name) VALUE ('sel');
INSERT INTO ingredient (name) VALUE ('eau');
INSERT INTO ingredient (name) VALUE ('lait');
INSERT INTO ingredient (name) VALUE ('oeuf');
INSERT INTO ingredient (name) VALUE ('pates');
INSERT INTO ingredient (name) VALUE ('creme');
INSERT INTO ingredient (name) VALUE ('emental');
INSERT INTO ingredient (name) VALUE ('sucre');

INSERT INTO recipe (name, time, difficulty, note, peopleNb, text) VALUE (
'pates a la carbo',
15, 0, 5, 4, 'Maim !');

INSERT INTO recipe_ingredients (recipeName,
       ingredient,
       quantity,
       quantity_unit)
       VALUE (
       	     'pates a la carbo',
	     'pates', 400, 'g');

INSERT INTO recipe_ingredients (recipeName,
       ingredient,
       quantity,
       quantity_unit)
       VALUE (
       	     'pates a la carbo',
	     'oeuf', 2, '');

INSERT INTO recipe_ingredients (recipeName,
       ingredient,
       quantity,
       quantity_unit)
       VALUE (
       	     'pates a la carbo',
	     'creme', 10, 'cl');

INSERT INTO recipe_ingredients (recipeName,
       ingredient,
       quantity,
       quantity_unit)
       VALUE (
       	     'pates a la carbo',
	     'emental', 20, 'g');
