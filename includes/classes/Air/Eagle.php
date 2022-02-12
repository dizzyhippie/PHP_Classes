<?php

namespace Air;

//This class will extend from the Air Animals class, creating a new level of children for specific animals.
class Eagle extends Air {
    /**
     * @var string
     * Changing the previous name of the parent class.
     */
    protected $name = 'Eagles';

    /**
     * @return string
     * Changing the food function to be specific to eagle.
     */
    public function food(): string {
        return  "Eagles eat other birds, rodents and fish.";
    }

}