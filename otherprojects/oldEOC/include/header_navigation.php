<!DOCTYPE html>
<html lang="en">

<?php 
echo "<h3>Our new NAVIGATION HEADER file </h3>" 
?>

<!--NAVBAR-->
<nav class="navbar navbar-default navbar-expand-lg navbar-fixed-top" role="navigation">
 	<div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
 		<div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
            </button>
        

        <?php 
        // EOC BUTTON
        echo "<a class=\"navbar-brand\" href=\"".$INDEX_FILE."\">EOC</a>"; 
        ?>

    	</div>

   		<!--  Start Desktop Navbar -->
      	<div id="navbar" class="navbar-collapse collapse">   	
        	<ul class="nav navbar-nav">

        		<?php 
        		// CLASSES BUTTON
	            echo "<li><a href=\"".$CLASSES_FILE."\">Class Info</a></li>";
	            ?> 

	            <li class="dropdown">
	            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                    	<?php 
		                        echo "<li><a href=\"".$TRIALS_FILE."\">Obedience, Rally &amp; Agility Trials</a></li>";
		                        echo "<li><a href=\"".$FUNMATCHES_FILE."\">Show and Go / Fun Matches</a></li>";
		                        echo "<li><a href=\"".$SEMINARS_FILE."\">Seminars</a></li>";
		                		echo "<li><a href=\"".$OTHERCLUBSEVENTS_FILE."\">Other Clubs\' Events</a></li>";
	            			?>

	                    </ul>
	            </li>
	            	<li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Members <span class="caret"></span></a>
	                        <ul class="dropdown-menu">
	                            <li><a href="members.html">Our Members</a></li>
								<li><a href="newmember.html">Become a Member</a></li>
	                            <li><a href="awards-year-end.html">Year End Awards</a></li>
	                        </ul>
	             	</li>
	             <!--li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Photos <span class="caret"></span></a>
	                        <ul class="dropdown-menu">
	                            <li><a href="photos-classes.html">Class Photos</a></li>
	                            <li><a href="photos-trials.html">Trial Photos</a></li>
	                        </ul>
	             </li-->
	    		 	<li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
	                        <ul class="dropdown-menu">
	                            <li><a href="about-us.html">Club Information</a></li>
	                            <li><a href="contact.html">Officers</a></li>
	                            <li><a href="instructors.html">Instructors</a></li>
	                        </ul>
	             	</li>
	             
	             	<li>
	             		<a href="favorites.html">Favorite Links</a>
	             	</li>
	             
	             	<li> <span class="fill-hor-text"> &nbsp; </span>
	             	</li>
	             
	             	<!-- Social Media Icons -->
	             	<li>
	             		<!--FB--><a href="http://facebook.com/pages/Evansville-Obedience-Club/152278254814193" class="navbar-socialmedia" target="_blank"><img src="images/FbookIcon-64.png" class="navbar-socialmedia" alt="face book link" /></a>
	             	</li>
        	</ul>
		</div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


