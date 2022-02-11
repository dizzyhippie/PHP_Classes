<?php

// Create a new class that extends from the animal class (grabs data from that class). 
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
     * Adding onto the function about what Air Animals drink - building off of the 'Animal.php' function drink
     * @return string 
    */
    public function drink(): string {
        //$parent statement grabs the initial drink() return and allows us to modify it instead of overwriting it completely.
        $parentStatement = parent::drink();
        return $parentStatement . "water.";
    }

    /**
     * Adding onto the function about what Air Animals say - building off of the 'Animal.php' function speak
     * @return string 
    */
    public function speak(): string {
        //$parent statement grabs the initial speak() return and allows us to modify it instead of overwriting it completely.
        $parentStatement = parent::speak();
        return $parentStatement . " can make many different types of sounds. They can sing, warn and threaten other birds.";
    }
}