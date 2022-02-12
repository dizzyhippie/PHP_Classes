<?php

namespace Air;

use Traits\Amphibious;
use Traits\Run;

//This class will extend from the Air Animals class, creating a new level of children for specific animals.
class Geese extends Air {
    /**
     * @var string
     * Changing the previous name of the parent class.
     */
    protected $name = 'Geese';

    /**
     * @return string
     * Changing the food function to be specific to Geese
     */
    public function food(): string {
        return  "Geese eat mostly oats, vegtables and sometimes insects";
    }

    /**
     * @return string
     * Geese technically can fly but not as much as other birds such as eagles. They are more of a ground bird.
     */
    public function flight(): string {
        $parentStatement = parent::flight();
        return $parentStatement . " Although they prefer to hang out on the ground or in water.";
    }

    use Amphibious;
    use Run;
}