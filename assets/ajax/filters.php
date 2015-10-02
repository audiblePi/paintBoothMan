<div>
<?php
	require( '../../../../../wp-load.php' );
	
	$args = array( 'post_type' => 'page', 'name' => 'filters');
	$query = new WP_Query($args);
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
	?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>
