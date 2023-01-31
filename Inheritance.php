<?php 

/**
 * Inheritance
 */
class Shantilal
{
	Public $Student_name;
	Public $Student_enrol;
	Public $Student_city;
	Public $Student_age;


	function __construct($Student_name,$Student_enrol,$Student_city,$Student_age)
	{
		$this->Student_name = $Student_name;
		$this->Student_enrol = $Student_enrol;
		$this->Student_city = $Student_city;
		$this->Student_age = $Student_age;
	}
}

	class gec extends Shantilal{

		Public  function gec(){
			echo "i am web developer for it";
		}
	} 

	/**
	 * new class connectioon
	 */
	// class vgec extends Shantilal
	//  {		
	// 	function vgec()
	// 	{
	// 		echo " i am from vishwakarma Engineering Collage";
	// 	}
	// }

 // $admin = new Shantilal("Arpit Dholariya","190430116021","Rajkot","21");
 
	 $admin_gec = new gec("Arpit Dholariya","190430116021","Rajkot","21");
	 print_r($admin_gec);
 // echo '$admin_gec';
 // $admin_vgec = new vgec();

 // echo "<pre>";
 // echo '$admin';

 // echo "$admin";

 // print_r($admin);

 // var_dump($admin);




?>