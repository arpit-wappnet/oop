
<?php 
  
// Class definition
class TV {
      
    //variables declaration 
    public $model = 'mi';
    public $volume = 1;
      
    //Functions declaration 
    function volumeUp() {
        $this->volume++;
    }
      
    function volumeDown() {
        $this->volume--;
    }
}
  
// Create new object
$tv_one = new TV;
  
// Calling member function
$tv_one->volumeUp();
echo $tv_one->volume;
  
?>