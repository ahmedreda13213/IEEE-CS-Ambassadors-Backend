
CREATE DATABASE IF NOT EXISTS school_system;
USE school_system;


CREATE TABLE Students (
  student_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  class_id INT,
  FOREIGN KEY (class_id) REFERENCES Classes(class_id)
);


CREATE TABLE Teachers (
  teacher_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100)
);


CREATE TABLE Classes (
  class_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50)
);


CREATE TABLE Subjects (
  subject_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  teacher_id INT,
  FOREIGN KEY (teacher_id) REFERENCES Teachers(teacher_id)
);


CREATE TABLE Enrollments (
  enrollment_id INT AUTO_INCREMENT PRIMARY KEY,
  student_id INT,
  subject_id INT,
  grade FLOAT,
  FOREIGN KEY (student_id) REFERENCES Students(student_id),
  FOREIGN KEY (subject_id) REFERENCES Subjects(subject_id)
);
