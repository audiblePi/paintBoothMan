<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	if (get_field('header_image')) :?>		
	<div class="slider-container page" style="background: url('<?php echo the_field('header_image') ?>') center;"></div>
<?php endif; endwhile; endif;?>
<section id="content-wrapper" class="container" role="main">
	<div class="row">
		<div class="nine columns">
			<div class="ajax-load">
				<div class="woo-wrap">
					<?php woocommerce_content(); ?>
				</div>
			</div>
			<!-- <div class="shop-wrapper"></div> -->
		</div>
		<div class="three columns">
			<div class="sidebar">
				<?php dynamic_sidebar( "Sidebar 4" );?>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>