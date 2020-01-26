<?php

/*
portal-config.php

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
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Melissa";


switch(THIS_PAGE){

  case 'index.php':
    $title = "Melissa's Home Page";
    $logo = "fa-home";
    $logo_color = ''; //make logo_color an empty string by default
    Break;

    case 'aia.php':
    $title = "Melissa's Final Project AIA (Client work)";
    $logo = "fa-universal-access";
    $logo_color = '';
    Break;

    case 'contactme.php':
    $title = "Contact Melissa";
    $logo = "fa-paper-plane-o";
    $logo_color = ' style="color:#3366cc"';
    break;
        
    case 'Big.php':
    $title = "Big project";
    $logo = "fa-coffee";
    $logo_color = '';
    break;
        
    case 'flowchart.php':
    $title = "Flowchart/Layout";
    $logo = "fa-paperclip";
    $logo_color = '';
    break;
        
    case 'finalproject.php':
    $title = "Final Project";
    $logo = "fa-project-diagram";
    $logo_color = ' style="color:#3366cc"';
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    

   }
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>