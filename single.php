
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

				<div class="col-md-3 offset-md-1 sidebar">
					<?php if(is_active_sidebar('sidebar')) : ?>

						<?php dynamic_sidebar('sidebar'); ?>

					<?php endif; ?>
				</div>


			</div>
		</div>
	</div>


<?php get_footer();?>