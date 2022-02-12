<?php

//use Land as the root
namespace Land;
//Import traits because they apply to cheetah.
use Traits\Run;

//This class will extend from the Air Animals class, creating a new level of children for specific animals.
class Cheetah extends Land {
    /**
     * @var string
     * Changing the previous name of the parent class.
     */
    protected $name = 'Cheetas';

    /**
     * @return string
     * Changing the food function to be specific to Cheetah
     */
    public function food(): string {
        return  "Cheetahs love eating other animals and are really savage about it.";
    }

    /**
     * State what sound the animal makes
     * @return string
    */
    public function speak(): string {
        return $this->name . " can growl, hiss and purr. They can communicate with other Cheetahs.";
    }
    //Import traits that apply to Cheetah.
    use Run;
}