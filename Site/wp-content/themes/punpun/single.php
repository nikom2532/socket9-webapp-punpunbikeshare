<?php get_header(); ?>
<div class="content">
<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        <div class="row-fluid">
        <div class="span8 news">
			<h2 class="martopbot12">ข่าวสารและกิจกรรม</h2>
            <div id="post-<?php the_ID(); ?>">
				<div class="picframe"><?php the_post_thumbnail();?></div>
                <div class="caption"><h3 class="post-title"><?php the_title(); ?></h3> </div>
                <div class="post-entry" >
					<?php the_content(); ?>
                </div><!-- end of .post-entry -->
                <div class="span8 navigation" style="width:100%;margin-top:30px;margin-left:-10px">
			        <div class="next" style="float:left"><?php next_post_link( '&#8249; %link','ใหม่กว่า',TRUE ); ?></div>
					<div class="previous" style="float:right"><?php previous_post_link( '%link &#8250;','เก่ากว่า',TRUE ); ?></div>
		        </div><!-- end of .navigation -->
		<?php endwhile; ?>
			
	    <?php else : ?>
		<?php endif; ?>  
			</div>

		</div>
		<div class="span4 news">
		<h2 class="martopbot12">ข่าวเมื่อเร็วๆนี้</h2>
		<?php get_sidebar(); ?>
		</div>
		
		</div>
<?php get_footer(); ?>		
		</div><!-- end of #content -->



