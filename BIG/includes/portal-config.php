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

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case'index.php':
        $title = "Morgan's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'webcam.php':
        $title = "Web Cameras";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        break;
    
    case'project1.php':
        $title = "Morgan's Research Project";
        $logo = 'fa fa-pencil-square-o';
        $PageID = 'Responsive vs. Mobile';
        break;
        
    case'project2.php':
        $title = "Morgan's Research Project";
        $logo = 'fa fa-pencil-square-o';
        $PageID = 'Galleries';
        break;

    case'project3.php':
        $title = "Morgan's Research Project";
        $logo = 'fa fa-pencil-square-o';
        $PageID = 'Flexbox';
        break;
    
    case'project4.php':
        $title = "Morgan's Research Project";
        $logo = 'fa fa-pencil-square-o';
        $PageID = 'Shopping Carts';
        break;
    

    case'contactme.php':
        $title = "Morgan's Contact Page";
        $logo = 'fa-pencil-square-0';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact Morgan';
    break;

    case'access.php':
        $title = "Morgan's Website Accessibility Info";
        $logo = 'fa fa-wheelchair';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Website Accessibility';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $logo = '';//no icon by default  

} 

$nav1['index.php'] = "Welcome";
$nav1['project1.php'] = "Responsive vs Mobile";
$nav1['project2.php'] = "Galleries";
$nav1['project3.php'] = "Flexbox";
$nav1['project4.php'] = "Shopping Carts";
$nav1['webcam.php'] = "Webcam";
$nav1['access.php'] = "Website Accessibility";
$nav1['contactme.php'] = "Contact Morgan";


/*
here we're creating a function to generate
links and keep the highlight on the current page 

<ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Morgan</a></li>
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
