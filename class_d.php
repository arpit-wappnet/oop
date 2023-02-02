<?php
// Class definition

class TV {
      
    // Member variables
    private $model;
    public $volume;
      
    // Member Functions
    function volumeUp() {
        $this->volume++;
    }
      
    function volumeDown() {
        $this->volume--;
    }
      
    function __construct($m, $v) {
        $this->model = $m; 
        $this->volume= $v;
    }
}
  
// Create new object
$tv = new TV('xyz', 2);
  
echo $tv->model;
  
?>