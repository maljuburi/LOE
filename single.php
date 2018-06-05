
<?php get_header();?>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-8 blog">

					<?php if(have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php get_template_part('content', get_post_format()); ?>
						<?php endwhile; ?>
					<?php else : ?>
						<p><?php __('No Posts Found'); ?></p>
					<?php endif; ?>
					
				</div>
				<!-- main-blog ends -->				

			<!-- sidebar div -->
				<div class="col-md-4 sidebar">
					<?php get_sidebar(); ?>
				</div>


			</div>
		</div>
	</div>


<?php get_footer();?>