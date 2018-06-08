<?php
/*
template name: Unit

*/ 
?>


<?php
	// Set up the objects needed
	$getChildren_query = new WP_Query();
	//posts_per_page = -1 to show all pages available
    $all_children = $getChildren_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));
    $theUnit = get_post();

    $UC_unitPage = ucfirst($theUnit->post_title);
	// Get the page as an Object
    $parent_page =  get_post($theUnit->post_parent);
    // $grandParent = get_post($parent_page->post_parent);


	$args = array(
		'child_of'			=> $theUnit->ID,
		'parent'			=> $theUnit->ID,
		'hierarchical'		=> 0,
	);

	$children_list = get_pages($args);
	$topics = [];
	foreach($children_list as $child){
		$topics += ["$child->post_title" => "$child->post_name"];
	}

	asort($topics);
	// echo '<pre>' . print_r( $topics, true ) . '</pre>';


	// Generate Topic
	Generate_Topic($topics, $theUnit, $parent_page);

	function Generate_Topic($topics, $unit, $level){
		?>

<?php get_header(); ?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			
			<div class="col-md-8 page">

                <h2	class="page-title display-3">
					<a class="<?php echo $level->post_title; ?>-link" href="<?php echo get_permalink($level); ?>">
						<?php echo $level->post_title; ?>
					</a> / <?php the_title(); ?>
				</h2>
		<div class="rounded-corner">
			<div class="row">
				<?php foreach ($topics as $topicTitle=>$topicLink) {?>
				<a class="col-md-4 <?php echo $level->post_title?>-topic" href="<?php echo get_permalink() . $topicLink; ?>"><?php echo $topicTitle ?></a>
				<?php }?>
			</div>
		</div>
	<?php } ?>
			

            </div>
			<!-- sidebar div -->
			<div class="col-md-4 sidebar">
				<?php get_sidebar(); ?>
			</div>			
		</div>
	</div>
</div>


<?php get_footer(); ?>