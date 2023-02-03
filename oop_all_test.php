<?php

// Class definition
class Circle
{
    // Class constant
    const PI = 3.14159265;

    // Properties with visibility
    public $radius;
    private $color;

    // Constructor
    public function __construct($radius, $color = 'red')
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    // Method with scope resolution operator
    public function getArea()
    {
        return self::PI * $this->radius * $this->radius;
    }

    // Magic method
    public function __toString()
    {
        return "Circle with radius " . $this->radius . " and color " . $this->color;
    }

    // Destructor
    public function __destruct()
    {
        echo "Destroying Circle object\n";
    }
}

// Object creation
$circle = new Circle(74);

// Accessing object properties
echo "Radius: " . $circle->radius . "\n";

// Calling object methods
echo "Area: " . $circle->getArea() . "\n";

// Object serialization
$serializedCircle = serialize($circle);
$newCircle = unserialize($serializedCircle);

// Comparing objects
var_dump($circle == $newCircle);

// Object iteration
foreach ($newCircle as $key => $value) {
    echo "$key => $value\n";
}

// String representation of object
echo $newCircle;

?>
