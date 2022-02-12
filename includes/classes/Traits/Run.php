<?php

//use Traits as the root for the namespace
namespace Traits;

//A trait that will be added to any animals with the ability to run
//Allows us to add things to classes in different levels of the hierchy easily.
trait Run {
    /**
     * This is a trait which can be applied to multiple classes in different categories.
     * @return string
     */
    public function run(): string {
        return $this->name . " have the ability to run/ move quickly.";
    }
}
