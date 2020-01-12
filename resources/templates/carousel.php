<div class="container">

<?php
	displayAllImagesInDirectory('./img/content/carousel/');
?>


	<div id="carousel-eoc" class="carousel slide" data-ride="carousel" data-interval="4000">

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-eoc" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-eoc" data-slide-to="1"></li>
			<li data-target="#carousel-eoc" data-slide-to="2"></li>	
			<li data-target="#carousel-eoc" data-slide-to="4"></li>	
			<li data-target="#carousel-eoc" data-slide-to="5"></li>				
		</ol>

		<!-- Wrapper for slide -->
		<div class="coursel-inner" role="listbox">

			<!-- Load our carousel images -->
			<?php 
				loadCarouselImagesFromDirectory('./img/content/carousel/');
			?>
		</div>

		<!-- Controls -->
		<a class="carousel-control-prev" href="#carousel-eoc" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel-eoc" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>