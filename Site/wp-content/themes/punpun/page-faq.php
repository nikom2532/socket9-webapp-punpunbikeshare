<?php
/**
* Template Name: FAQ
*/

get_header(); ?>


<div class="content">
	<div class="row-fluid">
		
		<div class="span12">
			
			<div class="span12">
				<ul class="breadcrumb"style="margin-left:26px">
					<li><a href="./"><img src="<?php bloginfo('template_url'); ?>/images/about/iconHome.png" alt="iconHome" width="31" height="28"></a> <span class="divider">&gt;</span></li>
					<li> คำถามที่พบบ่อย </li>
				</ul><!--breadcrumb-->
			</div><!--span12-->
			<div class="span11 accordion" id="accordion2">			        		
				<?php query_posts('category_name=faq&showposts=15');?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="faq">
							<div class="accordion-heading">
							<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#post-<?php the_ID(); ?>">
								<?php the_title(); ?>
							</a>
						</div>
						<div id="post-<?php the_ID(); ?>" class="accordion-body collapse">
							<div class="accordion-inner">
									<?php remove_filter('the_content', 'wpautop'); ?>
									<?php the_content(); ?>
							</div>
						</div>
					</div><!--end accordion-group-->
				<?php endwhile; ?>						
			</div><!--end accordion-->
		</div><!--end span12-->
	</div>
	<!--end row-fluid-->
<?php get_footer(); ?>					
</div>
<script>
$('.faq').collapse({
toggle: false
});
</script>				
<!--end content--> 

