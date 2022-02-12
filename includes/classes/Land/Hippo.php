<?php

//use Land as the root
namespace Land;
//Import traits because they apply to hippo
use Traits\Amphibious;

//This class will extend from the Air Animals class, creating a new level of children for specific animals.
class Hippo extends Land {
    /**
     * @var string
     * Changing the previous name of the parent class.
     */
    protected $name = 'Hippos';

    /**
     * @return string
     * Changing the food function to be specific to hippo.
     */
    public function food(): string {
        return  "Hippos eat mostly plants and vegetation, but also have been known to eat meat.";
    }

    /**
     * State what sound the animal makes
     * @return string
    */
    public function speak(): string {
        return $this->name . " mostly moan and groan like they are in pain.";
    }
    //Adds the trait of Amphibious to the hippo.
    use Amphibious;
}