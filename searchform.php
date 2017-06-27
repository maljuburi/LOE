
<form class="form-inline searchform searchbar" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="input-group col">
		<input id="search" class="form-control" type="text" placeholder="Search" name="s" value="<?php the_search_query(); ?>">
		<button class=" btn btn-outline-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
</form>
