
<section class="levels">
		<div class="container">
			<h2 class="text-center h3"> CHOOSE YOUR LEVEL </h2>
			<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium repudiandae dolo.</p>
			<hr>
			<div class="row col-xs-12 card-deck">
				<div class="level col-xs-12 col-md-4">

					<div class="card">
						<h3 class="card-header beginner bg-primary"><?php echo get_theme_mod('beginner_heading','Beginner'); ?></h3>

						<div class="card-block">
						    <h4 class="card-title"><?php echo get_theme_mod('beginner_title','Add Title'); ?></h4>
						    <p class="card-text"><?php echo get_theme_mod('beginner_caption','With supporting text below as a natural lead-in to additional content.'); ?></p>
						    <a href="<?php echo get_permalink() . 'beginner'?>" class="btn btn-primary"><?php echo get_theme_mod('beginner_button','Start Learning'); ?></a>
						</div>
					</div>
						
					
				</div>
				<div class="level col-xs-12 col-md-4">
					<div class="card">
						<h3 class="card-header intermediate bg-success"><?php echo get_theme_mod('intermediate_heading','Intermediate'); ?></h3>

						<div class="card-block">
						    <h4 class="card-title"><?php echo get_theme_mod('intermediate_title','Add Title'); ?></h4>
						    <p class="card-text"><?php echo get_theme_mod('intermediate_caption','With supporting text below as a natural lead-in to additional content.'); ?></p>
						    <a href="<?php echo get_permalink() . 'intermediate'?>" class="btn btn-success"><?php echo get_theme_mod('intermediate_button','Start Learning'); ?></a>
						</div>
					</div>
				</div>
				<div class="level col-xs-12 col-md-4">
					<div class="card">
						<h3 class="card-header advance bg-danger"><?php echo get_theme_mod('advance_heading','Advance'); ?></h3>

						<div class="card-block">
						    <h4 class="card-title"><?php echo get_theme_mod('advance_title','Add Title'); ?></h4>
						    <p class="card-text"><?php echo get_theme_mod('advance_caption','With supporting text below as a natural lead-in to additional content.'); ?></p>
						    <a href="<?php echo get_permalink() . 'advance'?>" class="btn btn-danger"><?php echo get_theme_mod('advance_button','Start Learning'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
