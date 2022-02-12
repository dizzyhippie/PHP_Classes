<?php

//Import namespace and use pull in Amphibious trait since we will use that here.
namespace Water;
use Traits\Amphibious;

//This class will extend from the Water Animals class, creating a new level of children for the frog.
class Frog extends Water {
    
    /**
     * @var string
     * Changing the previous name of the parent class.
     */
    protected $name = 'Frogs';

    /**
     * @return string
     * Changing the food function to be specific to frogs.
     */
    public function food(): string {
        return  "Frogs eat insects.";
    }

    /**
     * @return string
     * Changing the speak function because frogs make a different noise then the generic statement in Animal.
     */
    public function speak(): string {
        return  "Frogs make a ribbit kind of sound. If you are watching Bug's Bunny they can dance too.";
    }
    //Adds the trait of Amphibious to the frog.
    use Amphibious;
}