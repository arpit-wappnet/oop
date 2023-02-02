<?php

abstract class wappnet {

	protected $firstname_emp;
	protected $lastname_emp;

	// create function for full Name
	
	public function getFullName() {
		return $this->firstname_emp. " " .$this->lastname_emp;
	}
	 
	// create abstract function for mouth salary  

	public abstract function getMonthlySalary();
	
	public function __construct($firstname, $lastname) {
		$this->firstname = $firstname;
		$this->lastname = $lastname;
	}
}

class FullTimeEmployee extends wappnet {
	
	protected $annualSalary;
	
	public function getMonthlySalary() {
	return $this->annualSalary / 12;
	}
}

class ContractEmployee extends wappnet
 {
	protected $hourlyRate = 850;
	protected $totalHours = 8;

	public function getMonthlySalary() {
		return $this->hourlyRate * $this->totalHours;
	}
}

$fulltime = new FullTimeEmployee('fulltime', 'Employee');
$contract = new ContractEmployee('Contract', 'Employee');

echo $fulltime->getFullName();
echo $contract->getFullName();

echo $fulltime->getMonthlySalary();
echo $contract->getMonthlySalary();

?>
