<?php
include('include/functions.php');

if(file_exists('error_log'))
    unlink('error_log');

//default template
$header = 'header.php';
$footer = 'mainFooter.html';

switch($_GET['action']) {
    case 'code': 
        $metaTitle = 'Website Design & Development | Website Updates | Web Solutions | Affordable Websites';	
        include($header);
        include('code.html');
        include($footer);
        break;
    case 'portfolio':
        $metaTitle = 'Website Design | Website Updates | Web Solutions | Affordable Websites';	
        include($header);
        include('portfolio.html');
        include($footer);
        break;
    case 'solutions':
        $metaTitle = 'Website Design | Website Updates | Web Solutions | Affordable Websites';	
        include($header);
        include('solutions.html');
        include($footer); 
        break;
    case 'contact':
        include($header);
        include('contact.php');
        include($footer); 
        break;
    case 'home':
    default:
        $metaTitle = 'Website Design | Website Updates | Web Solutions | Affordable Websites';	
        include($header);
        include('home.html');
        include($footer); 
}

?>