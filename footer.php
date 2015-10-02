<div class="footer">
	<footer class="container" id="footer" role="contentinfo">
		<div class="row">
			<div class="four columns">
				<?php dynamic_sidebar('Footer Widget Left'); ?>
			</div>
			<div class="four columns testimonials">
				<?php dynamic_sidebar('Footer Widget Center'); ?>
			</div>
			<div class="four columns">
				<?php dynamic_sidebar('Footer Widget Right'); ?>
			</div>
		</div>
	</footer>
</div>

<div class="footer2">
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<p><a href="http://www.pippindesign.com">Website Design & Development</a> by Pippin Design &copy; Copyright <?php echo date('Y'); ?> Paint Booth Maintenance Services, Inc. All Rights Reserved.<p></p>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>