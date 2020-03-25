<?php

/*
fp-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['about.php'] = "About the Lestinas";
$nav1['photos.php'] = "View Photos";
$nav1['game1.php'] = "Guess the Date of Baby Lestina's Arrival";
$nav1['game2.php'] = "How Big is Gabi's Belly?";
$nav1['registry.php'] = "Gift Registry";
$nav1['contact.php'] = "Offer Words of Wisdom and Love";


switch(THIS_PAGE){

  case 'index.php':
    $title = "Welcome";
    $logo_color = ''; //make logo_color an empty string by default
    Break;

    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    

   }

?>