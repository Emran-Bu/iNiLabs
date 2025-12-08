<!-- Encapsulation – Employee Salary Management -->
<?php

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
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

    public function getName()
    {
        return $this->name;
    }
}

$employee = new Employee("Emran Hasan", 60000);

// Getting salary
echo "Employee: " . $employee->getName() . "<br>";
echo "Salary: " . $employee->getSalary() . "<br>";

// Updating salary through secure setter
$employee->setSalary(70000);
echo "Updated Salary: " . $employee->getSalary() . "<br>";

// Attempting negative salary
// $employee->setSalary(-80000);
?>