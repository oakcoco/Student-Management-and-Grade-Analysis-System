CREATE DATABASE IF NOT EXISTS school_management_project;
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE school_management_project;

CREATE TABLE IF NOT EXISTS admin (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`first_name` VARCHAR(50) NOT NULL,
`username` VARCHAR(50) NOT NULL,
`password` VARCHAR(255) NOT NULL,
`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS subjects (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`subject_name` VARCHAR(50) NOT NULL,
`subject_code` VARCHAR(20) UNIQUE NOT NULL,
`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS students (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`first_name` VARCHAR(50) NOT NULL,
`middle_name` VARCHAR(50) NOT NULL,
`last_name` VARCHAR(50) NOT NULL,
`email` VARCHAR(100) UNIQUE NOT NULL,
`grade_level` VARCHAR(20) NOT NULL,
`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS grades (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`student_id` INT NOT NULL,
`subject_id` INT NOT NULL,
`grade` DECIMAL(5,2) NOT NULL,
`grade_level` VARCHAR(20) NOT NULL,
FOREIGN KEY (student_id) REFERENCES students(id),
FOREIGN KEY (subject_id) REFERENCES subjects(id),
UNIQUE KEY unique_grade (student_id, subject_id, grade_level)
); 

