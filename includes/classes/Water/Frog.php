<?php

namespace Water;
use Traits\Amphibious;

//This class will extend from the Water Animals class, creating a new level of children for specific animals.
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
     * Changing the speak function because frogs make noise
     */
    public function speak(): string {
        return  "Frogs make a ribbit kind of sound. If you are watching Bug's Bunny they can dance too.";
    }

    //Adds the trait of Amphibious to the hippo.
    use Amphibious;

}