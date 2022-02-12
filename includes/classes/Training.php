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
     * for example You can do ($geese, $hippo, $frog) but not ($frog, $geese, $hippo)
     */
    public function __construct(Air $air, Land $land, Water $water){
        $this->air = $air;
        $this->land = $land;
        $this->water = $water;
    }
}