<?php


abstract class wappnet_a{
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}

class cto extends wappnet_a {
  public function intro() : string {
    return "Chief Technology Officer! I'm an $this->name!"; 
  }
}

class ceo extends wappnet_a {
  public function intro() : string {
    return "Chief executive officer! I'm a $this->name!"; 
  }
}

class cfo extends wappnet_a {
  public function intro() : string {
    return "Chief Financial Officer! I'm a $this->name!"; 
  }
}

$cto = new cto("Kishan patel");
echo $cto->intro();
echo "<br>";

$ceo = new ceo("Ankit Patel");
echo $ceo->intro();
echo "<br>";

$cfo = new cfo("axay patel");
echo $cfo->intro();

class Wappnet {

    
    public $emp_name;
    private $emp_salary;
    protected $emp_position;

    public function __construct($emp_name,$emp_position,$emp_salary){

        $this->emp_name = $emp_name;
        $this->emp_salary = $emp_salary;
        $this->emp_position = $emp_position;

        echo $emp_name;


        // echo " Value for insant on data";
    }

    public function Deposit(){

        echo "Are You Deposit on 2000";
    }

    public function Withdraw(){
        echo "Are You Withdraw on Atm";
    }


}

$Arpit = new Wappnet("Arpit Dholariya","Software Decelopment Engineer",45000);
echo "<pre>";

// echo $Arpit->$emp_name();

// echo $Arpit->emp_name();

    // $Arpit->emp_name = " devang Parekh "; it can change value on public fuction that without Encapsulation


  print_r($Arpit);

 // var_dump($Arpit);

// var_dump($Arpit->Deposit());

?>