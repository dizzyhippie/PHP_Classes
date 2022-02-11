<?php

spl_autoload_register(function($class) {
    require_once '../includes/classes/' . $class . '.php';
});

//$animal = new Animal();
//var_dump($animal);
//var_dump($animal->food());

// Display the attributes for Air Animals
$air = new Air();
var_dump($air);
var_dump($air->food());
var_dump($air->drink());
var_dump($air->speak());

// Display the attributes for LandAnimals
$land = new Land();
var_dump($land);
var_dump($land->food());
var_dump($land->drink());
var_dump($land->speak());
// Display the attributes for Water Animals
$water = new Water();
var_dump($water);
var_dump($water->food());
var_dump($water->drink());
var_dump($water->speak());



die;