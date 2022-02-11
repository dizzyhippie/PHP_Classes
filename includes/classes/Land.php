<?php

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

    /**
     * Adding onto the function about what Land Animals drink - building off of the 'Animal.php' function drink
     * @return string 
    */
    public function drink(): string {
        //$parent statement grabs the initial drink() return and allows us to modify it instead of overwriting it completely.
        $parentStatement = parent::drink();
        return $parentStatement . "water, milk, and maybe pepsi? I don't know I've never asked.";
    }

    /**
     * Adding onto the function about what Land Animals say - building off of the 'Animal.php' function speak
     * @return string 
    */
    public function speak(): string {
        //$parent statement grabs the initial speak() return and allows us to modify it instead of overwriting it completely.
        $parentStatement = parent::speak();
        return $parentStatement . " can growl, hiss, yelp, and express many other emotions through speaking.";
    }
}