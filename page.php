<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	if (get_field('header_image')) :?>		
	<div class="slider-container page" style="background: url('<?php echo the_field('header_image') ?>') center;"></div>
<?php endif; endwhile; endif;?>
<section id="content-wrapper" class="container" role="main">
	<div class="row">
		<div class="nine columns">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<section class="entry-content">
						<div class="ajax-load">
							<div class="the_title">
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="post_thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="the_content">
								<?php the_content(); ?>
							</div>
						</div>
						<div class="woo-wrapper"></div>
					</section>
				</div>
			<?php endwhile; endif;?>
		</div>
		<div class="three columns">
			<div class="sidebar">
				<?php
				$sidebarOption = get_field('sidebar_option');
				switch ($sidebarOption){
					case "frontPageSidebar":
					dynamic_sidebar( "Front Page Sidebar" );
					break;
					case "sidebar1":
					dynamic_sidebar( "Sidebar 1" );
					break;
					case "sidebar2":
					dynamic_sidebar( "Sidebar 2" );
					break;
					case "sidebar3":
					dynamic_sidebar( "Sidebar 3" );
					break;
					case "sidebar4":
					dynamic_sidebar( "Sidebar 4" );
					break;
					default:
					dynamic_sidebar( "Sidebar 1" );
					break;
				}
				?>
			</div>


		</div>
	</div>

</section>

<?php get_footer(); ?>