<?php

abstract class BaseEmployee {

	protected $firstname;
	protected $lastname;
	
	public function getFullName() {
		return $this->firstname. " " .$this->lastname;
	}
	
	public abstract function getMonthlySalary();
	
	public function __construct($f, $l) {
		$this->firstname = $f;
		$this->lastname = $l;
	}
}

class FullTimeEmployee extends BaseEmployee {
	
	protected $annualSalary;
	
	public function getMonthlySalary() {
	return $this->annualSalary / 12;
	}
}

class ContractEmployee extends BaseEmployee {
	protected $hourlyRate;
	protected $totalHours;

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
