-- Create Database
CREATE DATABASE IF NOT EXISTS employee_management;
USE employee_management;

-- Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('Admin','Employee') DEFAULT 'Employee',
    profile_image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP
);

-- Departments Table
CREATE TABLE departments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Employees Table
CREATE TABLE employees (

    id INT AUTO_INCREMENT PRIMARY KEY,

    employee_code VARCHAR(20) NOT NULL UNIQUE,

    full_name VARCHAR(100) NOT NULL,

    email VARCHAR(100) NOT NULL UNIQUE,

    phone VARCHAR(20),

    gender ENUM('Male','Female','Other'),

    dob DATE,

    department_id INT NOT NULL,

    designation VARCHAR(100),

    salary DECIMAL(10,2),

    joining_date DATE,

    address TEXT,

    profile_image VARCHAR(255),

    status ENUM('Active','Inactive')
        DEFAULT 'Active',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (department_id)
        REFERENCES departments(id)

);