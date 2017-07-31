
<?php get_header();?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-8 blog">
			<h1 class="blog-title display-1">Blog</h1>
			<hr>
				<?php if(have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
							<!-- =================
							the code below graps the content,but also consider the format of the post
							=================================== -->
						<?php get_template_part('content' , get_post_format()); ?>

						<hr>
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php __('No Posts Found'); ?></p>
				<?php endif; ?>
			</div>

			<div class="col-md-4 sidebar">
				<!-- adding the sidebar file -->
					<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>
