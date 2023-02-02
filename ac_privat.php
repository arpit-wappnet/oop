 <?php

    Class Vehicle{

        /* Delcaration of private variables */

        private $_name = "Default Vehicle";
        private $_model;
        private $_type;
        private $_identification;

        /* Declaration of private arrays */
        private $_mode = array();
        private $feature = array();

        /* Magic code entry function, think of it as a main() in C/C++ */
        public function __construct( $name, $model, $type ){
            $this->create_vehicle( $name, $model, $type );
        }

        /* __getter function */
        public function __get( $variable ){
            if( !empty($this->$variable) ){
                $get_variable = $this->$variable;
            }

            return $get_variable;
        }

        /* __setter function */
        public function __set( $variable, $target ){
            $this->$variable = $target;
        }

        /* Private function */
        private function create_vehicle( $name, $model, $type ){
            $this->__set( "_name", $name );
            $this->__set( "_model", $model);
            $this->__set( "_type", $type );
        }

    }

    //end of the class.

?>

<?php
    /* Using the Vehicle class to create a vehicle by passing
       three parameters 'vehicle name', 'vehicle model', 'vehicle type' 
       to the class.
    */

    $toyota = new Vehicle("Toyotal 101", "TY101", "Sedan");

    /* Get the name and store it in a variable for later use */
    $vehicle_name = $toyota->__get('_name');

    /* Set the vehicle mode or status */
    $vehicle_mode = array(
            'gas' => 50,
            'ignition' => 'OFF',
            'tire' => "OK",
            'year' => 2020,
            'mfg' => 'Toyoda',
            'condition' => 'New'
        );

    /* Create vehicle features */    
    $vehicle_feature = array(
            "Tire" => 4,
            "Horse Power" => "V6",
            "blah blah" => "foo",
            "Airbag" => 2,
            "Transmission" => "Automatic"
            //....
        );

    /* Create vehicle identification */
    $vehicle_identification = array(
        "VIN" => "0001234567ABCD89",
        "NAME" => $vehicle_name,
        "FEATURE" => $vehicle_feature,
        "MODEL" => $vehicle_mode,
        "YEAR" => 2020,
        "MFG" => "Totota"
    ); 


    /* Set vehicle identification */
    $toyota->__set("_identification", $vehicle_identification );

    /* Set vehicle features */
    $toyota->__set("_feature", $vehicle_feature );

    /* Set vehicle mode */
    $toyota->__set("_mode", $vehicle_mode);

    /* Retrieve information and store them in variable using __get (getter) */
    $vehicle_name = $toyota->__get('_name');
    $vehicle_mode = $toyota->__get('_mode');
    $vehicle_id =  $toyota->__get('_identification');
    $vehicle_features = $toyota->__get('_feature');
    $vehicle_type = $toyota->__get('_type');
    $vehicle_model = $toyota->__get('_model');


    /* Printing information using store values in the variables. */
    echo "Printing Vehicle Information\n";
    echo "*****************************\n";

    echo "Vehicle name is $vehicle_name \n";
    echo "Vehicle Model is $vehicle_model \n";
    echo "Vehich type is $vehicle_type \n";

    printf("\n\n");
    echo "Printing Vehicle Mode\n";
    echo "***********************\n";
    print_r( $vehicle_mode );

    printf("\n\n");
    echo "Printing Vehicle Features\n";
    echo "**************************\n";
    print_r( $vehicle_features );

    printf("\n\n");

    echo "Printing Vehicle Identification\n";
    echo "******************************\n";
    print_r( $vehicle_id );


    printf("\n\n");
?>