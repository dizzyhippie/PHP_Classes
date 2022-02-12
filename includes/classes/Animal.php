<?php

class Animal{
    /**
     * @var string
    */
    protected $name = 'animal';
    
    /**
     * State what the animal type eats.
     * @return string
    */
    public function food(): string {
        return $this->name . " eat a variety of foods ";
    }

    /**
     * State what the animal type drinks.
     * @return string
    */
    public function drink(): string {
        return $this->name . " drink water.";
    }

    /**
     * State what sound the animal makes
     * @return string
    */
    public function speak(): string {
        return $this->name . " can make many different types of sounds. They can sing, warn and threaten other animals.";
    }
}