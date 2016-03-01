<?php
/*
config.php

Provides place to put all configuration info for out app
*/

include 'credentials.php';
include 'safe-mail-test.php';

//We want to see all errors
define('DEBUG',true);

//THIS_PAGE is the name of the current page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "Home";
$nav1['contact.php'] = "Contact";
$nav1['book_list.php'] = "Books";
$nav1['weekdays.php'] = "Weekdays";

ob_start();//prevents header errors

switch(THIS_PAGE){
    case "index.php":
    $title="Home";
    $pageID="Home Page";
    break;
    case "contact.php":
    $title="Contact";
    $pageID="Contact Page";
    break;
    case "book_list.php":
    $title="Books";
    $pageID="Books Page";
    break;
    case "book_view.php":
    $title="Book View";
    $pageID="Book View Page";
    break;
    case "weekdays.php":
    $title="Weekdays page title";
    $pageID="Weekdays";
    break;
default:
    $title=THIS_PAGE;
    $pageID="";
}

function makeLinks($ar){
    $myReturn='';
    
    foreach($ar as $url => $label){
        
        if($url==THIS_PAGE){
        echo '<li class="active"><a href="'.$url.'">'.$label.'</a></li>';
        }else{
        echo '<li><a href="'.$url.'">'.$label.'</a></li>';
        }
    }
    
    return $myReturn;
}

function bookStatus($bookStatus){
    switch($bookStatus){
        case 1:
            return "Completed";
            break;
        case 2:
            return "Planning to read";
            break;
        default:
            return "What book is this?";
    }
}

//Error function
function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

//WeekdayConditionals

//variable for current weekday
if($_GET){
$day=$_GET["day"];
}else{
$day=date('l');
}
$bgcolor='';
//dynamic picture path
$picture="$day.jpg";
$alt='';

//variable background color
if(THIS_PAGE=="weekdays.php"){
switch($day){
    case 'Monday':
        $bgcolor='#ddccff';
        $alt='Purple landscape';
        break;
    case 'Tuesday':
        $bgcolor='#7ad17a';
        $alt='Mountains in the morning';
        break;
    case 'Wednesday':
        $bgcolor='#ffa266';
        $alt='Mellow sunset';
        break;
    case 'Thursday':
        $bgcolor='#99bbff';
        $alt='Colorful sky';
        break;
    case 'Friday':
        $bgcolor='#d3a678';
        $alt='Boat on lake';
        break;
    case 'Saturday':
        $bgcolor='#ffaa80';
        $alt='Desert cat';
        break;
    case 'Sunday':
        $bgcolor='#66b2ff';
        $alt='Aquatic life';
        break;
}
}

?>
