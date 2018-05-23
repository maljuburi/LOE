
<!-- Get All Children of Parent Level Page -->
<?php
	// Set up the objects needed
	$getChildren_query = new WP_Query();
	//posts_per_page = -1 to show all pages available
	$all_children = $getChildren_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));
	$UC_levelPage = ucfirst($levelPage);
	// Get the page as an Object
	$parent_page =  get_page_by_title($UC_levelPage);

	// Filter through all pages and find Portfolio's children
	$children_list = get_page_children( $parent_page->ID, $all_children );
	// echo what we get back from WP to the browser
	// echo '<pre>' . print_r( $children_list, true ) . '</pre>';
	$topics = [];
	foreach($children_list as $child){
		$topics += ["$child->post_title" => "$child->post_name"];
	}
	asort($topics);
	// echo '<pre>' . print_r( $topics, true ) . '</pre>';


	// Generate Topic
	Generate_Topic($topics, $levelPage);

	function Generate_Topic($levelTopics, $level){
		?>
		<div class="rounded-corner">
			<div class="row">
				<?php foreach ($levelTopics as $topicTitle=>$topicLink) {?>
				<a class="col-md-4 <?php echo $level ?>-topic" href="<?php echo get_permalink() . $topicLink; ?>"><?php echo $topicTitle ?></a>
				<?php }?>
			</div>
		</div>
	<?php } ?>
			