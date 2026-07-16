<?php

require_once '../models/Employee.php';

class EmployeeController {
    private Employee $employee;
    
    public function __construct(PDO $pdo) {
        $this->employee = new Employee($pdo);
    }
}