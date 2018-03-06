INSERT INTO ingredient VALUE (1, 'farine');
INSERT INTO ingredient VALUE (2, 'sel');
INSERT INTO ingredient VALUE (3, 'eau');
INSERT INTO ingredient VALUE (4, 'lait');
INSERT INTO ingredient VALUE (5, 'oeuf');
INSERT INTO ingredient VALUE (6, 'pates');
INSERT INTO ingredient VALUE (7, 'creme');
INSERT INTO ingredient VALUE (8, 'emental');
INSERT INTO ingredient VALUE (9, 'sucre');

INSERT INTO recipe VALUE (
       1,
       'pates a la carbo',
       15,
       0,
       5,
       4,
       'Maim !'
);

INSERT INTO recipe_ingredients VALUE (
1, 'pates a la carbo', 'pates', 1, 100);

INSERT INTO recipe_ingredients VALUE (
2, 'pates a la carbo', 'oeuf', 1, 2);

INSERT INTO recipe_ingredients VALUE (
3, 'pates a la carbo', 'creme', 1, 10);

INSERT INTO recipe_ingredients VALUE (
4, 'pates a la carbo', 'emental', 1, 20);
