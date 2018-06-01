
<?php get_header();?>

<!-- 	============
			Slider
		============	-->
	<section id="carousel">
		<div id="carousel-container" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-container" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-container" data-slide-to="1"></li>
		    <li data-target="#carousel-container" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">

				<!-- Slider Sections -->
				<!-- =============== -->
		    <div class="carousel-item active">
		      <img class="d-block img-fluid carousel-img" src="<?php echo get_theme_mod('slider_image1', get_bloginfo('template_url').'/img/cover1.jpg'); ?>">
		      <div class="carousel-caption">
		      	<h1><?php echo get_theme_mod('slider_heading1','Caption to be Written #1'); ?></h1>
		      	<p class="lead"><?php echo get_theme_mod('slider_text1','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magnam illo #1'); ?></p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid carousel-img" src="<?php echo get_theme_mod('slider_image2', get_bloginfo('template_url').'/img/cover2.jpg'); ?>">
		      <div class="carousel-caption">
		      	<h1><?php echo get_theme_mod('slider_heading2','Caption to be Written #2'); ?></h1>
		      	<p class="lead"><?php echo get_theme_mod('slider_text2','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magnam illo #2'); ?></p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid carousel-img" src="<?php echo get_theme_mod('slider_image3', get_bloginfo('template_url').'/img/cover3.jpg'); ?>">
		      <div class="carousel-caption">
		      	<h1><?php echo get_theme_mod('slider_heading3','Caption to be Written #3'); ?></h1>
		      	<p class="lead"><?php echo get_theme_mod('slider_text3','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magnam illo #3'); ?></p>
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
	<?php require (get_template_directory() . '/inc/templates/LOE-levels-cards.php'); ?>
</div>




<?php get_footer('front-page');?>