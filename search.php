<?php get_header(); ?>
<div class="slider-container">
	<?php putRevSlider("front-page-slider") ?>
</div>
<section id="content-wrapper" class="container" role="main">
	<div class="row">
		<div class="nine columns">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'entry' ); ?>
				<?php endwhile; ?>
				<?php get_template_part( 'nav', 'below' ); ?>
			<?php else : ?>
				<article id="post-0" class="post no-results not-found">
					<header class="header">
						<h2 class="entry-title"><?php _e( 'Nothing Found', 'conure' ); ?></h2>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'conure' ); ?></p>
						<?php get_search_form(); ?>
					</section>
				</article>
			<?php endif; ?>

		</div>
		<div class="three columns">
			<div class="sidebar">
				<?php dynamic_sidebar( "Sidebar 1" );?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
<?php get_footer(); ?>