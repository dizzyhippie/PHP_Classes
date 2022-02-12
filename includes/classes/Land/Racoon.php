<?php

//use Land as the root
namespace Land;
//Import traits because they apply to racoon.
use Traits\Run;

//This class will extend from the Air Animals class, creating a new level of children for specific animals.
class Racoon extends Land {
    /**
     * @var string
     * Changing the previous name of the parent class.
     */
    protected $name = 'Racoons';

    /**
     * State what the animal type drinks.
     * @return string
    */
    public function drink(): string {
        $parentStatement = parent::drink();
        return $parentStatement . " They might enjoy other drinks too like Pepsi? I don't know I've never asked.";
    }
    //Add in the traits from run.php
    use Run;
}