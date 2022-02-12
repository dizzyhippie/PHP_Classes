<?php

//imports at the top
//Use statements pull in data from other files so we do not need to import all files.
use Air\Air;
use Air\Eagle;
use Air\Geese;

use Land\Land;
use Land\Hippo;
use Land\Cheetah;
use Land\Racoon;

use Water\Water;
use Water\Frog;
use Water\Salmon;

spl_autoload_register(function($class) {
    //This replaces back slash with forward slash because mac
    //str_replace lets you specify what you want to replace, what you want to replace it with, and the subject.
    $replaced = str_replace("\\", "/", $class);
    //Uses the replaced class instead of $class to create the correct path
    require_once '../includes/classes/' . $replaced . '.php';
});

//$animal = new Animal();

// Display the attributes for Air Animals
$air = new Air();
echo '<pre>'; var_dump($air); echo '</pre>';
echo '<pre>'; var_dump($air->food()); echo '</pre>';
echo '<pre>'; var_dump($air->drink()); echo '</pre>';
echo '<pre>'; var_dump($air->speak()); echo '</pre>';
echo '<pre>'; var_dump($air->flight()); echo '</pre>';

// Display the attributes for The Eagle
$eagle = new Eagle();
echo '<pre>'; var_dump($eagle); echo '</pre>';
echo '<pre>'; var_dump($eagle->food()); echo '</pre>';
echo '<pre>'; var_dump($eagle->drink()); echo '</pre>';
echo '<pre>'; var_dump($eagle->speak()); echo '</pre>';
echo '<pre>'; var_dump($eagle->flight()); echo '</pre>';

// Display the attributes for Geese
$geese = new Geese();
echo '<pre>'; var_dump($geese); echo '</pre>';
echo '<pre>'; var_dump($geese->food()); echo '</pre>';
echo '<pre>'; var_dump($geese->drink()); echo '</pre>';
echo '<pre>'; var_dump($geese->speak()); echo '</pre>';
echo '<pre>'; var_dump($geese->amphib()); echo '</pre>';
echo '<pre>'; var_dump($geese->flight()); echo '</pre>';
echo '<pre>'; var_dump($geese->run()); echo '</pre>';

// Display the attributes for Land Animals
$land = new Land();
echo '<pre>'; var_dump($land); echo '</pre>';
echo '<pre>'; var_dump($land->food()); echo '</pre>';
echo '<pre>'; var_dump($land->drink()); echo '</pre>';
echo '<pre>'; var_dump($land->speak()); echo '</pre>';

// Display the attributes for The Hippo
$hippo = new Hippo();
echo '<pre>'; var_dump($hippo); echo '</pre>';
echo '<pre>'; var_dump($hippo->food()); echo '</pre>';
echo '<pre>'; var_dump($hippo->drink()); echo '</pre>';
echo '<pre>'; var_dump($hippo->speak()); echo '</pre>';
echo '<pre>'; var_dump($hippo->amphib()); echo '</pre>';

// Display the attributes for The Cheetah
$cheetah = new Cheetah();
echo '<pre>'; var_dump($cheetah); echo '</pre>';
echo '<pre>'; var_dump($cheetah->food()); echo '</pre>';
echo '<pre>'; var_dump($cheetah->drink()); echo '</pre>';
echo '<pre>'; var_dump($cheetah->speak()); echo '</pre>';
echo '<pre>'; var_dump($cheetah->run()); echo '</pre>';

// Display the attributes for The Racoon
$racoon = new Racoon();
echo '<pre>'; var_dump($racoon); echo '</pre>';
echo '<pre>'; var_dump($racoon->food()); echo '</pre>';
echo '<pre>'; var_dump($racoon->drink()); echo '</pre>';
echo '<pre>'; var_dump($racoon->speak()); echo '</pre>';
echo '<pre>'; var_dump($racoon->run()); echo '</pre>';

// Display the attributes for Water Animals
$water = new Water();
echo '<pre>'; var_dump($water); echo '</pre>';
echo '<pre>'; var_dump($water->food()); echo '</pre>';
echo '<pre>'; var_dump($water->drink()); echo '</pre>';
echo '<pre>'; var_dump($water->speak()); echo '</pre>';

//Display the attributes for Frog
$frog = new Frog();
echo '<pre>'; var_dump($frog); echo '</pre>';
echo '<pre>'; var_dump($frog->food()); echo '</pre>';
echo '<pre>'; var_dump($frog->drink()); echo '</pre>';
echo '<pre>'; var_dump($frog->speak()); echo '</pre>';
echo '<pre>'; var_dump($frog->amphib()); echo '</pre>';

// Display the attributes for Salmon
$salmon = new Salmon();
echo '<pre>'; var_dump($salmon); echo '</pre>';
echo '<pre>'; var_dump($salmon->food()); echo '</pre>';
echo '<pre>'; var_dump($salmon->drink()); echo '</pre>';
echo '<pre>'; var_dump($salmon->speak()); echo '</pre>';

//
$training = new Training($air, $land, $water);

die;