<?php

namespace Land;
use Traits\Run;

//This class will extend from the Air Animals class, creating a new level of children for specific animals.
class Racoon extends Land {
    /**
     * @var string
     * Changing the previous name of the parent class.
     */
    protected $name = 'Racoons';

    use Run;

}