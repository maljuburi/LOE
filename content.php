				<div class="blog-post">
					<h2 class="post-title display-2">
					
					<!-- ========================
					 check if it single page or blog page to print the title
					 ===================================== -->

					<?php if(is_single()) : ?>
							
							<?php the_title(); ?>

						<?php  else : ?>
						<a href="<?php the_permalink(); ?>">
					 			<?php the_title(); ?>
						</a>
					<?php endif; ?>
					</h2>

					<!-- ========================
					 Print the date and time
					 ===================================== -->
					<p class="blog-meta text-muted">
						<?php the_time('F j, Y g:i a'); ?>
					</p>

					<!-- ========================
					 add the thumbnail / featured image
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