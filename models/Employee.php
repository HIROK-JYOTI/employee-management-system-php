<?php
class Employee
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(array $data): bool
{
    $sql = "INSERT INTO employees
            (
                employee_code,
                full_name,
                email,
                department_id
            )
            VALUES
            (
                :employee_code,
                :full_name,
                :email,
                :department_id
            )";

    $stmt = $this->pdo->prepare($sql);

    return $stmt->execute([
        ':employee_code' => $data['employee_code'],
        ':full_name' => $data['full_name'],
        ':email' => $data['email'],
        ':department_id' => $data['department_id']
    ]);
}

    public function getAll()
    {
    }

    public function getById(int $id)
    {
    }

    public function update(int $id, array $data)
    {
    }

    public function delete(int $id)
    {
    }
}