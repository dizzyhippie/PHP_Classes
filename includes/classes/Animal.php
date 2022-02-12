<?php

class Animal{
    /**
     * @var string
    */
    protected $name = 'animal';
    
    /**
     * State what the animal type eats.
     * @return string
     * return $this->name grabs the name of the animal stated in the 'protected' field.
     * These are generic statements for the parent class of ANIMAL. These will be overwritten for Air, Land, and water.
     * Will also be overwritten for certain child animals that have unique attributes for food, drink and speak
    */
    public function food(): string {
        return $this->name . " eat a variety of foods ";
    }

    /**
     * State what an animal type drinks.
     * @return string
    */
    public function drink(): string {
        return $this->name . " drink water.";
    }

    /**
     * State what sound an animal makes
     * @return string
    */
    public function speak(): string {
        return $this->name . " can make many different types of sounds. They can sing, warn and threaten other animals.";
    }
}