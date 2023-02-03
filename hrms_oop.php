<?php

class Employee {
    private $name;
    private $email;
    private $position;
    private $salary;

    public function __construct($name, $email, $position, $salary) {
        $this->name = $name;
        $this->email = $email;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getSalary() {
        return $this->salary;
    }
}

class Payroll {
    private $employee;

    public function __construct(Employee $employee) {
        $this->employee = $employee;
    }

    public function calculatePay() {
        $salary = $this->employee->getSalary();
        // Perform payroll calculation
        return $salary;
    }
}

class Benefits {
    private $employee;

    public function __construct(Employee $employee) {
        $this->employee = $employee;
    }

    public function calculateBenefits() {
        $position = $this->employee->getPosition();
        // Perform benefits calculation based on employee position
        return $position;
    }
}

$employee = new Employee("John Doe", "johndoe@example.com", "Manager", 50000);
$payroll = new Payroll($employee);
$benefits = new Benefits($employee);

$pay = $payroll->calculatePay();
$ben = $benefits->calculateBenefits();

echo "Employee Name: " . $employee->getName() . "<pre>";
echo "Employee Email: " . $employee->getEmail() . "<pre>";
echo "Employee Position: " . $employee->getPosition() . "<pre>";
echo "Employee Salary: $" . $employee->getSalary() . "<pre>";
echo "Employee Pay: $" . $pay . "<pre>";
echo "Employee Benefits: " . $ben . "<pre>";

?>
