<div class="blog-post">				
	<!-- check if it single page or blog page to print the title
	===================================================== -->
	<?php if(is_single()) : ?>
		<?php 
			$bloglink = get_permalink( get_option( 'page_for_posts' ));
			$blog = get_page(get_option( 'page_for_posts' ));
		?>
		<h1 class="blog-title display-2"><a href="<?php echo $bloglink; ?>"><?php echo $blog->post_title; ?></a> / <?php the_title(); ?></h1>
	<?php  else : ?>
		<a class="post-title display-2" href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	<?php endif; ?>


	<!-- Print the date and time
	===================================== -->
	<small class="blog-meta text-muted">
		<?php the_time('F j, Y g:i a'); ?>
	</small>

	<!-- add the thumbnail / featured image
	===================================== -->
	<div class="post-thumb">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>
	</div>
	
	<!-- ========================
		if single get comment form
		============================== -->
	<?php if(is_single()) : ?>
		<?php the_content(); ?>
		<?php comments_template(); ?>
	<?php else : ?>
		<?php the_excerpt(); ?>
	<?php endif; ?>

</div>