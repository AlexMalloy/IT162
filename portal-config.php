<?php

/*
portal-config.php
used to store all of our IT162 configuration information
*/

//prevents data from being sent early
ob_start();

//echo $_SERVER['PHP_SELF'];
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
        case 'index.php';
            $title = "Alex's IT162 Title Page";
            $logo = 'fa-home';
            $PageID = 'Welcome';
        break;

                case 'contact.php';
            $title = "Alex's IT162 Contact Page";
            $logo = 'fa-envelope-open-text';
            $PageID = 'Welcome';
        break;

        default:
            $title = THIS_PAGE;
            $logo = 'fa-home';
            $PageID = 'Welcome';


}

$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contact.php'] = 'Contact Me';

/* here is a function to generate links and keep the highlight on the current page
<li><a href="IT162/index.php" class="selected">Welcome</a></li>
      <li><a href="IT162/big/index.php">Big</a></li>
      <li><a href="IT162/aia.php">AIA</a></li>
      <li><a href="IT162/flowchart.php">Flowchart/Layout</a></li>
      <li><a href="IT162/fp/index.php">Final Project</a></li>
      <li><a href="IT162/contact.php">Contact Alexander</a></li> 
*/

function makeLinks($nav)    {

        myReturn = '';
        foreach($nav1 as $url => $text){
                    $myReturn .= '<li><a href="IT162/big/index.php">Big</a></li>';

        }
        return = $myReturn;
}

?>

