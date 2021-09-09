 SELECT country, SUM(creditLimit) FROM customers GROUP BY cWHERE state ='USA'ountry;

 SELECT state,SUM(creditLimit) FROM customers WHERE country ='USA'   GROUP BY state;

  SELECT state,SUM(creditLimit) FROM customers WHERE country ='USA'  GROUP BY state HAVING SUM(creditLimit)>100000;

  SELECT orderNumber, productCode ,SUM(quantityOrdered * priceEach) FROM orderdetailS GROUP BY orderNumber;

SELECT CONCAT(contactFirstName," ",contactLastName)AS FullName FROM customers;


SELECT *from customers WHERE country=(
SELECT country from customers 
    GROUP by country order by count(customerNumber) DESC LIMIT 1
);

SELECT *FROM customers  WHERE creditLimit>(
SELECT AVG(creditLimit) FROM customers
);

SELECT *FROM customers WHERE country='USA';

SELECT customers.customerNumber, orders.orderNumber FROM  customers JOIN orders ON
customers.customerNumber=orders.customerNumber;