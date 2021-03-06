<?php 
/*
template name: Topic

*/ 

?>


<?php
	require_once get_template_directory()."/inc/PageTemplateClass.php";
	$thistemplate = new PageTemplate;

	$topic	= $thistemplate->current;
	$unit	= $thistemplate->parent;
	$level	= $thistemplate->grandparent;
	$level_title = ucfirst($level->post_title);

?>


<?php get_header();?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-8 page">

				<h2	class="page-title <?php if($level_title == 'Beginner'){ echo 'bg-primary'; }elseif($level_title == 'Intermediate'){echo 'bg-success'; }elseif($level_title == 'Advance'){echo 'bg-danger'; } ?>  text-white display-3" style="padding-left: 1rem; border-radius: 0.5rem 0.5rem 0 0">
					<a class="text-white" href="<?php echo get_permalink($level); ?>">
						<?php echo get_the_title($level); ?>
					</a> / 
					<a class="text-white" href="<?php echo get_permalink( $thistemplate->parent); ?>">
						<?php echo get_the_title($thistemplate->parent); ?>
					</a> / <?php the_title(); ?>
				</h2>
				
				<!-- =========================
				Add the template you need below
				================================== -->
				<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?> <!-- Page Content -->
				<?php endwhile;	?>

			</div>

			<!-- sidebar div -->
			<div class="col-md-4 sidebar">
				<?php get_sidebar(); ?>
				


				<?php 

					global $wpdb;
					$table_name = $wpdb->prefix . "quiz";

					if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name){
						$query = "SELECT * FROM $table_name WHERE topic_level='$level_title' AND unit='$unit->post_title' AND topic='$topic->post_title'";
						$results = $wpdb->get_results(htmlspecialchars_decode($query));
					}
				?>

				<div class="container quiz-widget">
					<form action="<?php echo home_url(). "/quiz" ?>" method="post">
						<input type="hidden" name="level" value="<?php echo $level_title  ?>">
						<input type="hidden" name="unit" value="<?php echo $unit->post_title  ?>">
						<input type="hidden" name="topic" value="<?php echo $topic->post_title  ?>">
						<?php if (!empty($results)) {?>
						<input type="submit" name="submit" class="take-quiz-btn btn <?php if($level_title== 'Beginner'){ echo 'btn-primary'; }elseif($level_title== 'Intermediate'){echo 'btn-success'; }elseif($level_title== 'Advance'){echo 'btn-danger'; } ?>" value="Take a Quiz" />
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