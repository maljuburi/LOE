
<?php get_header();?>

<!-- 	============
 			Slider
 		============	-->
	<section id="carousel">
		<div id="carousel-container" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-container" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-container" data-slide-to="1"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		      <img class="d-block img-fluid carousel-img" src="<?php echo get_template_directory_uri() . '/img/cover.jpg' ?>">
		      <div class="carousel-caption">
		      	<h1>Caption to be Written</h1>
		      	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magnam illo </p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid carousel-img" src="<?php echo get_template_directory_uri() . '/img/cover2.jpg' ?>">
		      <div class="carousel-caption">
		      	<h1>Caption to be Written</h1>
		      	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magnam illo </p>
		      </div>
		    </div>
		    
		   
		  </div>

		  <a class="carousel-control-prev" href="#carousel-container" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carousel-container" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>


<!-- 	============
 			levels
 		============	-->
<div class="container-fluid">
	<?php require (get_template_directory() . '/inc/templates/LOE-levels.php'); ?>
</div>




<?php get_footer();?>