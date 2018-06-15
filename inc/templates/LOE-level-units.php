
<!-- Get All Children of Parent Level Page -->
<?php
	// Set up the objects needed
	$getChildren_query = new WP_Query();
	//posts_per_page = -1 to show all pages available
	$all_children = $getChildren_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));
	$levelPage = get_the_title();
	$UC_levelPage = ucfirst($levelPage);
	// Get the page as an Object
	$parent_page =  get_page_by_title($UC_levelPage);

	$args = array(
		'child_of'			=> $parent_page->ID,
		'parent'			=> $parent_page->ID,
		'hierarchical'		=> 0,
	);

	$children_list = get_pages($args);
	$units = [];
	foreach($children_list as $child){
		$units += ["$child->post_title" => "$child->post_name"];
	}

	asort($units);


	// Generate Topic
	Generate_Topic($units, $UC_levelPage);

	function Generate_Topic($levelUnits, $level){
		?>
		<div class="rounded-corner">
			<div class="row">
				<?php foreach ($levelUnits as $unitTitle=>$unitLink) {?>
				<a class="col-md-4 <?php echo $level ?>-unit" href="<?php echo get_permalink() . $unitLink; ?>"><?php echo $unitTitle ?></a>
				<?php }?>
			</div>
		</div>
	<?php } ?>
			