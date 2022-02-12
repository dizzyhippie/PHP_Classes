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

//This is used to break up the formatting of var_dump. I was also using 
//echo '<pre>'; var_dump($whatever); echo '</pre>'; but am unsure how that will behave on other browsers and OS. *removed*
//Serves no other purpose but to help readability of var_dumps
$visualAid = '-----------------------';

//$animal = new Animal();

// Display the attributes for Air Animals
$air = new Air();
var_dump($air);
var_dump($air->food());
var_dump($air->drink());
var_dump($air->speak());
var_dump($air->flight());
var_dump($visualAid);

// Display the attributes for The Eagle
$eagle = new Eagle();
var_dump($eagle->food());
var_dump($eagle->drink());
var_dump($eagle->speak());
var_dump($eagle->flight());
var_dump($visualAid);

// Display the attributes for Geese
$geese = new Geese();
var_dump($geese->food());
var_dump($geese->drink());
var_dump($geese->speak());
var_dump($geese->amphib());
var_dump($geese->flight());
var_dump($geese->run());

// Display the attributes for Land Animals
$land = new Land();
var_dump($land);
var_dump($land->food());
var_dump($land->drink());
var_dump($land->speak());
var_dump($visualAid);

// Display the attributes for The Hippo
$hippo = new Hippo();
var_dump($hippo->food());
var_dump($hippo->drink());
var_dump($hippo->speak());
var_dump($hippo->amphib());
var_dump($visualAid);

// Display the attributes for The Cheetah
$cheetah = new Cheetah();
var_dump($cheetah->food());
var_dump($cheetah->drink());
var_dump($cheetah->speak());
var_dump($cheetah->run());
var_dump($visualAid);

// Display the attributes for The Racoon
$racoon = new Racoon();
var_dump($racoon->food());
var_dump($racoon->drink());
var_dump($racoon->speak());
var_dump($racoon->run());

// Display the attributes for Water Animals
$water = new Water();
var_dump($water);
var_dump($water->food());
var_dump($water->drink());
var_dump($water->speak());
var_dump($visualAid);

//Display the attributes for Frog
$frog = new Frog();
var_dump($frog->food());
var_dump($frog->drink());
var_dump($frog->speak());
var_dump($frog->amphib());
var_dump($visualAid);

// Display the attributes for Salmon
$salmon = new Salmon();
var_dump($salmon->food());
var_dump($salmon->drink());
var_dump($salmon->speak());
var_dump($visualAid);

//The Training class - a function across all of the 'type' classes that displays some information for them
$training = new Training($air, $land, $water);
var_dump($training);
var_dump($training->train());

die;