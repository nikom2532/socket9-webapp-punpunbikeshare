<?php
/**

 * Template Name: About
 */

get_header(); ?>

<style>
.aboutvision .listsmartc ul{
	list-style-type: none;
}
</style>

	<div class="content">
	<div class="row-fluid">
		 <div class="row-fluid">
			 <div class="span12 news">
				<h2 class="martopbot12">ข่าวสารและกิจกรรม</h2>
			</div>
		</div>
		<?php $news_query = new WP_Query( array( 'cat' => 2, 'posts_per_page' => 6,'paged' => get_query_var('paged') ) );?> 
		<?php $i=0; if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post(); ?> 		
			<?php if($i==0) :?>
			<div class="row-fluid" style="margin-bottom:30px">
				<div class="span12 ">
					<ul class="thumbnails">	
			<?php endif; ?>
						<li class="span4">
							<a class="thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
						<div class="caption"> 
							<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> 
							</h3> 
							 <p>
								<?php remove_filter('the_excerpt', 'wpautop'); ?>
								<?php the_excerpt(); ?> 
								<a href="<?php the_permalink();?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/home/readMoreBtn.png" /></a>
								
							</p>
						</div><!-- .post -->
						</li>
			<?php $i++; if($i==3) :?>
					</ul>
				</div>
			</div>
			<?php $i=0;?>
			<?php endif; ?>					
		<?php endwhile; ?> 
		<?php endif; ?> 
					

		<div class="row-fluid"> 
			<?php 
				wp_pagenavi( array( 'query' => $news_query ) );
				wp_reset_postdata();
			?>
		</div>		
	
	
	
	
	
		        	
	</div>
			        
	<?php get_footer(); ?>			        
	</div>
                


