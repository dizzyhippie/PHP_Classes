<?php

//Since it is in the root folder we dont need to add the namespace
use Air\Air;
use Land\Land;
use Water\Water;

class Training {
    /**
     *@var Air
     */
    protected $air;

    /**
     *@var Land
     */
    protected $land;

    /**
     *@var Water
     */
    protected $water;

    /**
     * @param Air $air
     * @param Land $land
     * @param Water $water
     * __construct is a built in function in php
     * Creating a function that passes in our Animal types with typehints. Values must be passed in that order
     * for example you can do ($geese, $hippo, $frog) but not ($frog, $geese, $hippo)
     * Stops user from putting info in wrong order or wrong type.
     * Not a big deal here, but widely used for many reasons in industry.
     */
    public function __construct(Air $air, Land $land, Water $water){
        $this->air = $air;
        $this->land = $land;
        $this->water = $water;
    }

    /**
     * @return string
     * passes the animal values into the train function, storing them into a variable which is used 
     * to display some information grouping animal types together.
     */
    public function train(): string {
        $airTraining = $this->air->train();
        $landTraining = $this->land->train();
        $waterTraining = $this->water->train();

        //displays the return messages found in Air, Land and water files. Seperates them with a space
        //for proper grammar.
        return $airTraining . ' ' . $landTraining . ' ' . $waterTraining;

    }
}