USE school_system;


INSERT INTO Classes (name) VALUES 
('Class A'), ('Class B'), ('Class C'), ('Class D'), ('Class E');


INSERT INTO Teachers (name, email) VALUES
('Mr. Ahmed', 'ahmed@example.com'),
('Ms. Sara', 'sara@example.com'),
('Dr. Reda', 'reda@example.com'),
('Eng. Samir', 'samir@example.com'),
('Prof. mahamed', 'mahamed@example.com');


INSERT INTO Students (name, email, class_id) VALUES
('Ali Hassan', 'ali@example.com', 1),
('Ahmed Samir', 'ahmed@example.com', 2),
('Omar Tarek', 'omar@example.com', 1),
('Reda Ahmed', 'reda@student.com', 3),
('Khaled Youssef', 'khaled@example.com', 4);


INSERT INTO Subjects (name, teacher_id) VALUES
('Math', 1),
('Science', 2),
('History', 3),
('English', 4),
('Geography', 5);


INSERT INTO Enrollments (student_id, subject_id, grade) VALUES
(1, 1, 85.5),
(2, 2, 91.0),
(3, 3, 78.5),
(4, 4, 88.0),
(5, 5, 92.5);


SELECT Students.name AS student_name, Classes.name AS class_name
FROM Students
JOIN Classes ON Students.class_id = Classes.class_id;


SELECT Students.name AS student_name, Subjects.name AS subject_name
FROM Enrollments
JOIN Students ON Enrollments.student_id = Students.student_id
JOIN Subjects ON Enrollments.subject_id = Subjects.subject_id
WHERE Subjects.name = 'Science';


SELECT Students.name AS student_name, Subjects.name AS subject_name, Enrollments.grade
FROM Enrollments
JOIN Students ON Enrollments.student_id = Students.student_id
JOIN Subjects ON Enrollments.subject_id = Subjects.subject_id
WHERE Subjects.name = 'Math';
