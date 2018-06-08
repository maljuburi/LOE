<?php get_header(); ?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			
			<div class="col-md-8 page">

			
				<h2 class="page-title display-3"><?php the_title(); ?></h2>

				<?php
				require (get_template_directory() . '/inc/templates/LOE-level-units.php'); 
				
				
				?>
			
			</div>


			<!-- sidebar div -->
			<div class="col-md-4 sidebar">
				<?php get_sidebar(); ?>
			</div>			
		</div>
	</div>
</div>


<?php get_footer(); ?>