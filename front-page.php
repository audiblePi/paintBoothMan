<?php get_header(); ?>

<div class="slider-container">
	<?php putRevSlider("front-page-slider") ?>
</div>

<div class="container front-page">
	<div class="row">
		<div class="nine columns">
			<div class="row front-page-callouts">
				<div class="four columns callout">
					<a href="/shop-products/filters">
						<div class="image-container">
							<img src="/wp-content/themes/paintBoothMan/assets/images/filters.jpg">
						</div>
						<div>
							<h4>Filters</h4>
						</div>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</a>	
				</div>
				<div class="four columns callout">
					<a href="/shop-products/paint-booths/">
						<div class="image-container">
							<img src="/wp-content/themes/paintBoothMan/assets/images/installation-thumb.png">
						</div>
						<div>
							<h4>Paint Booths</h4>
						</div>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</a>	
				</div>
				<div class="four columns callout">
					<a href="/our-services/maintenance/">
						<div class="image-container">
							<img src="/wp-content/uploads/2015/09/paint-booth-maintenance-service.jpg">
						</div>
						<div>
							<h4>Maintenance</h4>
						</div>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</a>	
				</div>
			</div>
			<div class="row logo-carousel">
				<div class="twelve columns">
					<div>
						<h4>We Are An Authorized Distributor Of These Trusted Manufacturers:</h4>
					</div>
					<ul class="bxslider">
						<?php load_slider_images(); ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="three columns">
			<?php dynamic_sidebar( "Front Page Sidebar" ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>