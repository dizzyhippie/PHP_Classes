<?php

//namespaces allow for a better structure by grouping things that work together
namespace Water;
//import animal as root for namespace
use Animal;

// Create a new class that extends from the animal class (grabs data from that class). 
//Allows you to re use certain functionality.
class Water extends Animal{
    /**
     * @var string
     * Changing the previous name of the parent class to Water Animals
    */
   protected $name = 'Water animals';

    /**
     * Adding onto the function about what Water Animals eat - building off of the 'Animal.php' function food
     * @return string 
    */
    public function food(): string {
        //$parent statement grabs the initial food() return and allows us to modify it instead of overwriting it completely.
        $parentStatement = parent::food();
        //Take the original statement and add whatever we want to it.
        return $parentStatement . "including algae, smaller fish, and worms on a hook.";
    }

    /**
     * Adding onto the function about what Water Animals drink - building off of the 'Animal.php' function drink
     * @return string 
    */
    public function drink(): string {
        //Overwrite the drink function, no need to add on because water animals don't typically drink anything
        return $this->name . " don't typically drink, they absorb water through osmosis";
    }
    
     /**
     * State what sound the animal makes
     * @return string
    */
    public function speak(): string {
       return $this->name .  " don't typically make noise, but still can communicate in other ways";
    }

    /**
     * This is the 'Water' message going into the training function in training.php
     * @return string 
    */
    public function train(): string {
        return $this->name . ' teach the air animals how to swim!';
    }
}