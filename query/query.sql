-- (1)customers of numbers 120 – 130
SELECT customerNumber FROM `customers` WHERE customerNumber >=120 AND customerNumber <=130;
-- (or use between)
SELECT customerNumber FROM `customers` WHERE customerNumber BETWEEN 120 AND 130;

-- (2) customers in France, USA, Australia
SELECT country FROM `customers` WHERE country ='France' OR country ='USA' OR country ='Australia';
-- (or use IN)
SELECT country FROM `customers` WHERE country IN ('France', 'USA', 'Australia');

-- (3) customers  state =null
SELECT state FROM `customers` WHERE state IS NULL;
SELECT state FROM `customers` WHERE state IS NOT NULL;

--(4) coustomers country=USA and state begin with c or finished with a
SELECT state ,country FROM `customers` WHERE country='USA' AND (state LIKE 'c%' OR state LIKE '%a');
-- (5)
SELECT * FROM `orders` WHERE requiredDate LIKE '_____03___';
-- (6)
                  -- GROUPING
SELECT country, COUNT(customerNumber) FROM `customers` GROUP BY country LIMIT 5;
-- لو انا عايزه استخدم شرط ع ناتج الgrouping بستخدم HAVING

                   -- OPERATION               
                     
                 --(1) *(الضرب)لو عايزه اضرب صفين واحط الناتج ف صف واحد

(7) SELECT orderNumber, quantityOrdered, priceEach, (quantityOrdered*priceEach)AS totalPrice FROM `orderdetails`;   

                 -- (2) CONCAT
(8) SELECT customerNumber, CONCAT(contactFirstName ,' ',contactLastName)AS totalName  FROM `customers`;
   
                         
                     --subQuery
(9)SELECT *FROM `customers` WHERE creditLimit>(SELECT AVG(creditLimit)as avgCridit FROM `customers`);                     