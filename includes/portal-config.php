<?php

/*
portal-config.php
used to store all of our IT162 configuration information
*/

//prevents data from being sent early
ob_start();

date_default_timezone_set('America/Los_Angeles');

$nav1['index.php'] = 'Welcome';
$nav1['big.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp.php'] = 'Final Project';
$nav1['contact.php'] = 'Contact Me';

//echo $_SERVER['PHP_SELF'];
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
        case 'index.php';
            $title = "Alex's IT162 Title Page";
            $logo = 'fas fa-home-heart';
            $PageID = 'Welcome';
        break;
        case 'big.php';
            $title = "Alex's IT162 Big Page";
            $logo = 'fas fa-search-plus';
            $PageID = 'Welcome';
        break;
        case 'aia.php':
            $title = "Alex's IT162 AIA Page";
            $logo = 'fas fa-users';
            $PageID = 'Welcome';
        break;
        case 'flowchart.php':
            $title = "Alex's IT162 FLowchart Page";
            $logo = 'fas fa-arrows-alt';
            $PageID = 'Welcome';
        break;
        case 'final.php':
            $title = "Alex's IT162 Final Project Page";
            $logo = 'fas fa-trophy-alt';
            $PageID = 'Welcome';
        break;
        case 'contact.php':
            
            $title = "Alex's IT162 Contact Me Page";
            $logo = 'fas fa-envelope-open-text';
            $PageID = 'Welcome';
        break;
        default:
            $title = THIS_PAGE;
            $logo = 'fas fa-home';
            $PageID = 'Welcome';


}



/* here is a function to generate links and keep the highlight on the current page
<li><a href="IT162/index.php" class="selected">Welcome</a></li>
      <li><a href="IT162/big/index.php">Big</a></li>
      <li><a href="IT162/aia.php">AIA</a></li>
      <li><a href="IT162/flowchart.php">Flowchart/Layout</a></li>
      <li><a href="IT162/fp/index.php">Final Project</a></li>
      <li><a href="IT162/contact.php">Contact Alexander</a></li> 
*/

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
