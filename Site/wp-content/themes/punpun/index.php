<?php get_header(); ?>
    <div class="content">
        <div class="row-fluid ">
            <div class="span8 hidden-phone">
                <div class="bs-docs-example">
                    <div id="this-carousel-id" class="carousel slide">
                        <div class="carousel-inner">
							<?php query_posts( 'tag=slide&posts_per_page=4' ); ?> 
							<?php $i=0; if (have_posts()) : while (have_posts()) : the_post();  ?> 
                            <div class="item <?php if ($i==0) {echo " active";}else{echo "";} ?>">
                                <a href="<?php the_permalink()?>"><?php the_post_thumbnail('large'); ?></a>
                                <div class="carousel-caption">
									<?php the_excerpt(); ?> 
                                </div>
                            </div>
					<?php $i++; endwhile; ?> 
					<?php else: ?> 
					  <p>Sorry, the slide could not be found.</p> 
					<?php endif; ?> 		
                        </div>
                        <a class="carousel-control left" href="#this-carousel-id" data-slide="prev"></a>
                        <a class="carousel-control right" href="#this-carousel-id" data-slide="next"></a>
                    </div>
                </div>
            </div>
            <!--end slidepic span7-->
            <div class="span4 margin_l_rside">
                <span class="span12 margintopbot">
                    <img class="images_b" src="<?php bloginfo( 'template_url' ); ?>/images/home/iconBkk.png" />
                    <img class="images_b" src="<?php bloginfo( 'template_url' ); ?>/images/home/iconTanakom.png" />
                    <img class="images_s" src="<?php bloginfo( 'template_url' ); ?>/images/sbsLogo.png" alt="sbsLogo" />
                </span>
                <div class="span12 margintopbot">
                	<div class="span6">
	                    <a target="_blank" href="http://www.facebook.com/punpunbikeshare"><img class="images_i" src="<?php bloginfo( 'template_url' ); ?>/images/home/iconFacebookBig.png" /></a>
	                    <a href="https://twitter.com/punpunbikeshare"><img class="images_i" src="<?php bloginfo( 'template_url' ); ?>/images/home/iconTwitterBig.png" /></a>
	                    <a href="#"><img class="images_i" src="<?php bloginfo( 'template_url' ); ?>/images/home/iconIgBig.png" /></a>
                	</div>
                    <a href="#" class="span6"><img class="" src="<?php bloginfo( 'template_url' ); ?>/images/home/hotLine.png" /></a>
                </div>
                <div class="span11 margintopbot listlink">
                    <ul>
                        <li class="span12"><span class=" iconwidth2 offset1">
                            <a href="http://www.punpunbikeshare.com/download/ApplicationForm.pdf" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/home/iconDownloadFrom.png" /></span> ดาวน์โหลดใบสมัคร </a></li>
                        <li class="span12 nomarleft"><span class=" iconwidth2 offset1">
                            <a href="./?page_id=41"><img src="<?php bloginfo( 'template_url' ); ?>/images/home/iconNews.png" /></span> ข่าวสารและกิจกรรม </a></li>
                        <li class="span12 nomarleft"><span class=" iconwidth2 offset1">
                            <a href="./?page_id=98"><img src="<?php bloginfo( 'template_url' ); ?>/images/home/iconRide.png" /></span> ปั่นอย่างปลอดภัย </a></li>
                    </ul>
                </div>
            </div>
            <!--end span4-->
        </div>
        <!--end row-fluid-->
        <div class="row-fluid linebotdetail">
            <span class="span12 ">
                <img class="positiondetail" src="<?php bloginfo( 'template_url' ); ?>/images/home/chainGp.png" />
            </span>
        </div>
        <!--end row-fluid-->
        <div class="row-fluid">
            <div class="span12 ">
                <ul class="thumbnails">
					<?php query_posts( 'cat=2&post_type=post&orderby=date&posts_per_page=3' ); ?> 
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
					<li class="span4">
					<div class="thumbnail">
						<a class="thumbnail1" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
					</div>
					<div class="caption"> 
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3> 
						 <p>
							<?php remove_filter('the_excerpt', 'wpautop'); ?>
							<?php the_excerpt(); ?> 
							<a href="<?php the_permalink(); ?>">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/home/readMoreBtn.png" /></a>
							</a>
						</p>
					</div><!-- .post -->
					<?php endwhile; ?> 
					<?php else: ?> 
					  <p>Sorry, these posts could not be found.</p> 
					<?php endif; ?> 
					</li>
				
                </ul>
            </div>
        </div>
        <!--end row-fluid-->
		<div class="row-fluidc alllink"> 
		<a href="<?php bloginfo( 'siteurl' ); ?>/?page_id=41" >ดูทั้งหมด</a>
		</div>
		
<?php get_footer(); ?>

