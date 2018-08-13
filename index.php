
<?php get_header();?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-8 blog">


				<?php	$blog = get_page(get_option( 'page_for_posts' )); ?>

				<h1 class="blog-title display-1"><?php echo $blog->post_title ?></h1>
			
        <?php if(have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          
          <!-- =================
          The code below graps the content,
          but also consider the format of the post
          =================================== -->
						<?php get_template_part('content' , get_post_format()); ?>
        
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
