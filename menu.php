<?php

function gallery_function($atts) {
    $anime = $atts['project_folder'];
    $postTitle = $atts['project_name'];

    $animeID = str_replace('/', '_', $anime);

	$directory = 'assets/images/'.$anime;

    //valid image extensions
    $validFiles = array('jpg', 'jpeg', 'png');
    
    $counter = 1; //images counter
    if(is_dir($directory))
    if ($handle = opendir($directory)) { //read all files in directory
        //List all the files
        while (false !== ($file = readdir($handle))) {
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            if(in_array($ext, $validFiles)) {   
                $small[$counter] = $file; //add image to array
                $counter++; //increase counter
            }
        }//while
        closedir($handle);
    }//if

    sort($small); //sort image names in order

    //sorting adds a 0 element and shifts all elements back 1
    //this will fix the array 
    foreach ($small as $num => $picture) {
        $small[$num+1] = $picture; 
    }
    unset($small[0]); //delete 0 element

    //print_r($small); exit;

    //check for thumbnails
    if(is_dir($directory.'/thumbnails')) $showThumbnails = 1;

    $galleryContent .= '
	<table class="hoverbox_container"><tr valign="top"><td>
	<ul class="hoverbox">';
    
	foreach($small as $num => $picture) {
		//$num = $num + 1; //offset the 0 element    
		list($name, $ext) = explode('.', $picture); 
		
            if($showThumbnails) {
                $readThisImg = $directory.'/'.$picture;
                $showThisImg = $directory.'/thumbnails/'.$picture;
            }
            else    
                $showThisImg = $readThisImg = $directory.'/'.$picture;
			//$showThisImg = $site_url.'/'.$directory.'/'.$picture;
			
			if(file_exists($readThisImg)) {
				list($width, $height, $type, $attr) = getimagesize($readThisImg);

				if($thumbnails == 1) {
					$galleryContent .= '<li title="'.$anime.'" onclick="openModal(\''.$animeID.'\');currentSlide('.$num.')"><a href="#">
					<img src="'.$showThisImg.'" alt="'.$anime.'" class="episode_thumbnail" />
					<img src="'.$showThisImg.'" class="preview_large" alt="'.$anime.'" >
					</a></li>'; 
				}
				else {
                    
                    if($height > $width)
                        $class = 'preview_tall';
                    else
                        $class = 'preview_portrait';
        
					$galleryContent .= '<li title="'.$anime.'" onclick="openModal(\''.$animeID.'\');currentSlide('.$num.')"><a>
					<img src="'.$showThisImg.'" alt="'.$anime.'" />
					<img src="'.$showThisImg.'" class="'.$class.'" alt="'.$anime.'" >
					</a></li>'; 
				}					
		   }      
        }//foreach
 
    $galleryContent .= '</ul></td>
    </tr></table>';

    $counter = $counter - 1; //JS arrays start at 0
 
    //display the modal elements
    $galleryContent .=  '<div id="'.$animeID.'" class="modal">
    <a class="close cursor" onclick="closeModal(\''.$anime.'\')">&times;</a>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="modal-content">';

    foreach($small as $num => $picture) {
        $showThisImg = $directory.'/'.$picture;
        $galleryContent .=  '<div class="mySlides">
        <div class="numbertext">'.$num.' / '.$counter.'</div>
        <img src="'.$showThisImg.'" onclick="plusSlides(1)" class="lightbox_main_image cursor">
        </div>';
    }
    $galleryContent .=  '<div class="caption-container">
    <p id="caption">'.$postTitle.'</p>
    </div>
    </div>
    </div>';

    return $galleryContent;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="BL Web Solutions">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>BL Websolutions Portfolio</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/hoverbox.css">
  </head>
<body>