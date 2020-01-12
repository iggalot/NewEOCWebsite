<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));

// Function to insert an <img src= ....> block for all jpg, gif, and png files in a directiory
function displayAllImagesInDirectory($directory)
{
	$imagesDirectory = $directory;

	if(is_dir($imagesDirectory))
	{
		$opendirectory = opendir($imagesDirectory);

		while (($image = readdir($opendirectory)) !== false)
		{
			if(($image == '.') || ($image == '..'))
			{
				continue;
			}

			$imgFileType = pathinfo($image,PATHINFO_EXTENSION);

			if(($imgFileType == 'jpg') || ($imgFileType == 'png') || ($imgFileType == 'gif'))
			{
				echo "<img src='".$imagesDirectory.$image."' width='200'> ";
			}
		}	
		closedir($opendirectory);
	}
}

// Function to load all jpg, gif, and bmp images from a directory into appropriate carousel block
function loadCarouselImagesFromDirectory($directory)
{
	$imagesDirectory = $directory;

	if(is_dir($imagesDirectory))
	{
		$opendirectory = opendir($imagesDirectory);

		$count = 0;
		while (($image = readdir($opendirectory)) !== false)
		{
			if(($image == '.') || ($image == '..'))
			{
				continue;
			}

			$imgFileType = pathinfo($image,PATHINFO_EXTENSION);

			if(($imgFileType == 'jpg') || ($imgFileType == 'png') || ($imgFileType == 'gif'))
			{
				echo "<div class=\"carousel-item ";
				if($count == 0)
					echo "active";

				echo "\">
                      	<img src=\"".$imagesDirectory.$image."\" class=\"img-fluid\" alt=\"\">
                    	<div class=\"carousel-caption\">
                        	<h1>Carousel in a container</h1>
                        	<p>This is a demo for the Bootstrap Carousel Guide.</p>
                    	</div>
                	  </div>";
			}
			$count = $count + 1;
		}	
		closedir($opendirectory);
	}
}
?>