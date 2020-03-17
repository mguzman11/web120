<?php

/*
big-config.php

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
$nav1['big/index.php'] = "Big";
$nav1['big/flexbox.php'] = "Flexbox";
$nav1['big/galleries.php'] = "Galleries";
$nav1['big/calendar.php'] = "Melissa's Calendar";
$nav1['big/map.php'] = "Seattle Central College";
$nav1['big/youtube.php'] = "Accessability in Web Design";
$nav1['big/shoppingcarts.php'] = "Shopping Carts";
$nav1['big/siteapp.php'] = "Responsive Website vs App";
$nav1['big/webcam.php'] = "Live Streaming Feeds";



switch(THIS_PAGE){

  case 'index.php':
    $title = "Melissa's Home Page";
    $logo = "fa-home";
    $logo_color = ''; //make logo_color an empty string by default
    Break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    

   }

?>