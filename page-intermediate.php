<?php get_header(); ?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			
			<div class="col-md-8 page">

			
				<h2 class="page-title display-2"><?php the_title(); ?></h2>

				<?php require (get_template_directory() . '/inc/templates/LOE-intermediate.php'); ?>
			
			</div>


			<!-- sidebar div -->
			<div class="col-md-3 offset-md-1 sidebar">
				<?php if(is_active_sidebar('sidebar')) : ?>
					
					<?php dynamic_sidebar('sidebar'); ?>
				<?php endif; ?>

			</div>			
		</div>
	</div>
</div>


<?php get_footer(); ?>