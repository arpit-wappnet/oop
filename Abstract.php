<?php 
  
// Abstract class
abstract class wappnet {
    public abstract function emp();
}
  
class wappnet_admin extends wappnet {
    public function emp() {
        echo "Welcome to Wappnet System Pvt. Ltd.";
    }
}
  
// Create new object
$obj = new wappnet_admin;
  
echo $obj->emp();
  
?>