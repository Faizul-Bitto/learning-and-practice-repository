INSERT INTO
    player (
        firstName,
        lastName,
        city,
        phone,
        email,
        salary
    )
VALUES (
        'Jane',
        'Doe',
        'New York',
        '34234424243',
        'janedoe@me.com',
        4000.00
    );

DELETE FROM player WHERE id = 2;
-- Jane Doe will be deleted

UPDATE player SET salary = 6000.00, city = 'London' WHERE id = 1;
-- update salary and city for Jane Doe to 6000.00 and London respectively

SELECT * FROM player WHERE city = 'London';
-- SELECT all (*) data where city is London

SELECT * FROM player ORDER BY salary ASC;
-- SELECT all (*) data where salary is in ascending order

SELECT * FROM player ORDER BY salary DESC;
-- SELECT all (*) data where salary is in descending order

SELECT * FROM player LIMIT 1;
-- SELECT all (*) data where limit is 1

SELECT city FROM player GROUP BY city;
-- SELECT the cities. GROUP BY clause is used to group the data. Duplicates will be removed.

SELECT DISTINCT city FROM player;
-- SELECT the cities. DISTINCT clause is used to remove duplicates.

SELECT MAX(salary) AS Highest FROM player;
-- SELECT the maximum salary

SELECT *
FROM player
WHERE
    salary = (
        SELECT MAX(salary)
        FROM player
    );
-- SELECT the columns where salary is equal to the maximum salary

SELECT MIN(salary) AS Lowest FROM player;
-- SELECT the minimum salary

SELECT AVG(salary) AS Average FROM player;
-- Provide the average salary

SELECT SUM(salary) AS Total_Salary FROM player;
-- Provide the sum of salary

SELECT COUNT(*) AS Total_Rows FROM player;
-- Provide the number of rows

SELECT * FROM player;
-- SELECT all (*) data