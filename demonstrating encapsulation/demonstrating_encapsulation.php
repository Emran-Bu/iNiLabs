<!-- Encapsulation – Employee Salary Management -->
<?php

class Employee
{
    private $emp_id;
    private $name;
    private $salary;

    public function __construct($emp_id, $name, $salary)
    {
        $this->emp_id = $emp_id;
        $this->name = $name;
        $this->setSalary($salary);
    }

    // getter salary
    public function getSalary()
    {
        return $this->salary;
    }

    // updating salary
    public function setSalary($salary)
    {
        if ($salary < 0) {
            throw new Exception("Salary cannot be negative.");
        }

        $this->salary = $salary;
    }

    public function getEmpId()
    {
        return $this->emp_id;
    }

    public function getEmpName()
    {
        return $this->name;
    }
}

$employee = new Employee("202221063028", "Emran Hasan", 60000);

// Getting salary
echo "Employee ID: " . $employee->getEmpId() . "<br>";
echo "Employee Name: " . $employee->getEmpName() . "<br>";
echo "Salary: " . $employee->getSalary() . "<br>";

// Updating salary securely
$employee->setSalary(70000);
echo "Updated Salary: " . $employee->getSalary() . "<br>";

// Attempting negative salary
$employee->setSalary(-80000);

?>