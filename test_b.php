
<?php
 
//
class GFG {
     
    // Location of overloading data
    private $data = array();
 
    // Overloading not used here
    public $declared = 1;
 
    // Overloading used when accessed
    // outside the class
    private $hidden = 2;
     
    // Function definition
    public function __set($name, $value) {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }
     
    // Function definition
    public function __get($name) {
        echo "Getting '$name: ";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
 
        $trace = debug_backtrace();
         
        return null;
    }
 
    // Function definition
    public function __isset($name) {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }
 
    // Definition of __unset function
    public function __unset($name) {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }
 
    // getHidden function definition
    public function getHidden() {
        return $this->hidden;
    }
}
 
// Create an object
$obj = new GFG;
 
// Set value 1 to the object variable
$obj->a = 1;
echo $obj->a . "\n";
 
// Use isset function to check
// 'a' is set or not
var_dump(isset($obj->a));
 
// Unset 'a'
unset($obj->a);
 
var_dump(isset($obj->a));
 
echo $obj->declared . "\n\n";
 
echo "Private property are visible inside the class ";
echo $obj->getHidden() . "\n\n";
 
echo "Private property are not visible outside of class\n";
echo $obj->hidden . "\n";
 
?>