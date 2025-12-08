# Write your MySQL query statement below
SELECT manager.name as Employee
FROM Employee k1
INNER JOIN Employee manager ON k1.id = manager.managerId
WHERE k1.salary < manager.salary