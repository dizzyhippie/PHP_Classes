<?php

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
        return $parentStatement . "including algae, smaller fish, and worms on a hook.";
    }

    /**
     * Adding onto the function about what Water Animals drink - building off of the 'Animal.php' function drink
     * @return string 
    */
    public function drink(): string {
        //Overwrite the drink function, no need to add on because Fish don't drink anything
        return "Water animals don't drink, they absorb water through osmosis";
    }

    /**
     * Adding onto the function about what Water Animals say - building off of the 'Animal.php' function speak
     * @return string 
    */
    public function speak(): string {
        //$parent statement grabs the initial speak() return and allows us to modify it instead of overwriting it completely.
        $parentStatement = parent::speak();
        return "Certain " . $parentStatement . " have the ability to talk to eachother. Some do not.";
    }
}