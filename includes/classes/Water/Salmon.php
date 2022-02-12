<?php

namespace Water;

//This class will extend from the Water Animals class, creating a new level of children for specific animals.
class Salmon extends Water {
    /**
     * @var string
     * Changing the previous name of the parent class.
     */
    protected $name = 'Salmon';

    /**
     * @return string
     * Changing the speak function because salmon cannot speak.
     */
    public function speak(): string {
        return  "Salmon cannot speak but can darken their skin to communicate.";
    }

}