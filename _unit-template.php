<?php
/*
template name: Unit

*/ 
?>


<?php
	require_once get_template_directory()."/inc/PageTemplateClass.php";
	$thistemplate = new PageTemplate;	
?>


<?php get_header(); ?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-8 page">

                <h2	class="page-title display-3">
					<a class="<?php echo $thistemplate->parent->post_title; ?>-link" href="<?php echo get_permalink($thistemplate->parent); ?>">
						<?php echo $thistemplate->parent->post_title; ?>
					</a> / <?php the_title(); ?>
				</h2>

				<div class="rounded-corner">
					<div class="row">
						<?php foreach ($thistemplate->children as $child) {?>
						<a class="col-md-4 <?php echo $thistemplate->parent->post_title?>-topic" href="<?php echo get_permalink() . $child->post_name; ?>"><?php echo $child->post_title ?></a>
						<?php }?>
					</div>
				</div>
			
            </div>

			<!-- sidebar div -->
			<div class="col-md-4 sidebar">
				<?php get_sidebar(); ?>
			</div>			
		</div>
	</div>
</div>


<?php get_footer(); ?>