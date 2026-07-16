<?php

require_once "../helpers/session.php";
require_once "../config/database.php";
require_once "../models/Employee.php";

$employee = new Employee($pdo);

$action = $_POST['action'] ?? '';

switch ($action) {

    case 'create':

        $data = [

            'employee_code' => trim($_POST['employee_code']),

            'full_name' => trim($_POST['full_name']),

            'email' => trim($_POST['email']),

            'department_id' => $_POST['department_id']

        ];

        if ($employee->create($data)) {

            $_SESSION['success'] = "Employee created successfully.";

        } else {

            $_SESSION['error'] = "Failed to create employee.";

        }

        header("Location: ../views/employee/create.php");

        exit;

    default:

        header("Location: ../index.php");

        exit;
}