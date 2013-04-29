<div class="widget">
	<ul>
		<?php query_posts( 'cat=2&post_type=post&orderby=date&posts_per_page=6' ); ?> 
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
		<li>
		<div class="thumbnail pull-left">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		</div>

			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			 <p>
				<?php remove_filter('the_excerpt', 'wpautop'); ?>
				<?php the_excerpt(); ?> 
			</p>

		<?php endwhile; ?> 
		<?php else: ?> 
		  <p>Sorry, these posts could not be found.</p> 
		<?php endif; ?> 
		</li>
	
	</ul>
</div>
