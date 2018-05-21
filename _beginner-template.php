<?php 
/*
template name: Beginner

*/ 

?>


<?php get_header();?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			
			<div class="col-md-8 page">


			
				<h2 class="page-title bg-primary text-white display-3" style="padding-left: 1rem; border-radius: 0.5rem 0.5rem 0 0"><a class="text-white" href="<?php echo get_permalink( $post->post_parent ); ?>"><?php echo get_the_title( $post->post_parent); ?> </a>| <?php the_title(); ?></h2>
				
				<!-- =========================
				 Add the template you need below
				 ================================== -->
				
			
			</div>


			<!-- sidebar div -->
			<div class="col-md-4 sidebar">
				<?php get_sidebar(); ?>
			</div>	
		</div>
	</div>
</div>


<?php get_footer();?>