<?php

//namespaces allow for a better structure by grouping things that work together
namespace Air;
//import animal as root for namespace
use Animal;

//Create a new class that extends from the animal class (grabs data from that class). 
//Allows you to re use certain functionality.
class Air extends Animal{
    /**
     * @var string
     * Changing the previous name of the parent class to Air Animals
    */
    protected $name = 'Air animals';

    /**
     * Adding onto the function about what Air Animals eat - building off of the 'Animal.php' function food
     * @return string 
    */
    public function food(): string {
        //$parent statement grabs the initial food() return and allows us to modify it instead of overwriting it completely.
        $parentStatement = parent::food();
        return $parentStatement . "including fruits, small rodents, and any human food.";
    }

    /**
     * Adding the Flight attribute to the Air Animals
     * @return string 
    */
    public function flight(): string {
        return $this->name . " have the ability to fly.";
    }

    /**
     * This is the 'Air' message going into the training function in training.php
     * @return string 
    */
    public function train(): string {
        return $this->name . ' teach the land animals how to fly!';
    }
}