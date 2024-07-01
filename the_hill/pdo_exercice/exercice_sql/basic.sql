-- ============================ 1
SELECT * FROM students
LEFT JOIN school
ON students.school = school.idschool;
-- ============================ 2 
SELECT prenom FROM students
LEFT JOIN school
ON students.school = school.idschool;
-- ============================= 3 
SELECT prenom,datenaissance,school FROM students
-- ============================= 4
SELECT nom,prenom,genre FROM students WHERE genre LIKE '%f%';
-- ============================= 5
SELECT * FROM students WHERE School = (SELECT School FROM students WHERE Nom = 'Addy');
-- ============================ 6
SELECT prenom FROM students 
ORDER BY prenom DESC;
-- =========================== 7
SELECT prenom FROM students 
ORDER BY prenom DESC
LIMIT 2;
--============================= 8
INSERT INTO students (nom,prenom,datenaissance,school,genre) VALUES('Ginette','Dalor','1930-01-01','2','F');
-- =========================== 9
UPDATE students
SET prenom = 'Omer', genre = 'M'
WHERE idStudent = 31;
-- =========================== 10
DELETE FROM students WHERE students.idStudent = 3;
-- ========================== 11
UPDATE school
SET School = CASE
    WHEN idschool = '1' THEN 'Liege'
    WHEN idschool = '2' THEN 'Gent'
    ELSE School
END;
-- ======================= 12
-- FIN
