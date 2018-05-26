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
				<?php
					while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
							
									<?php the_content(); ?> <!-- Page Content -->
							

					<?php
					endwhile;
					?>					
			</div>


			<!-- sidebar div -->
			<div class="col-md-4 sidebar">
				<?php get_sidebar(); ?>
				

				<?php 
				$topic = get_the_title();
				$level = get_the_title($post->post_parent);
				global $wpdb;
				$table_name = $wpdb->prefix . "quiz";

				$results = $wpdb->get_results("
				SELECT * FROM $table_name WHERE topic_level='$level' AND topic='$topic';
				");
				
				?>



				<div class="container quiz-widget">
					<form action="<?php echo home_url(). "/quiz" ?>" method="post">
						<input type="hidden" name="level" value="<?php echo $level  ?>">
						<input type="hidden" name="topic" value="<?php echo $topic  ?>">
						<?php if (!empty($results)) {?>
						<input type="submit" name="submit" class="take-quiz-btn btn btn-primary" value="Take a Quiz" />
						<?php }else{ ?>
						<div class="alert alert-info">Quiz will be available soon</div>
						<?php } ?>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>


<?php get_footer();?>