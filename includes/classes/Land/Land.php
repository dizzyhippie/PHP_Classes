<?php

//namespaces allow for a better structure by grouping things that work together
namespace Land;
//import animal as root for namespace
use Animal;

// Create a new class that extends from the animal class (grabs data from that class). 
//Allows you to re use certain functionality.
class Land extends Animal{
    /**
     * @var string
     * Changing the previous name of the parent class to Land Animals
    */
    protected $name = 'Land animals';

    /**
     * Adding onto the function about what Land Animals eat - building off of the 'Animal.php' function food
     * @return string 
    */
    public function food(): string {
        //$parent statement grabs the initial food() return and allows us to modify it instead of overwriting it completely.
        $parentStatement = parent::food();
        return $parentStatement . "including plants, animals, and if they are starving - trash.";
    }
}