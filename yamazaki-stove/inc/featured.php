
	<script type="text/javascript">
		// Check if first slider image is loaded, and load flexslider on document ready
		jQuery(document).ready(function(){
		 var firstImage = jQuery('#flexslider-featured').find('img').filter(':first'),
			checkforloaded = setInterval(function() {
				var image = firstImage.get(0);
				if (image.complete || image.readyState == 'complete' || image.readyState == 4) {
					clearInterval(checkforloaded);
					
					jQuery('#flexslider-featured').flexslider({
						animation: "slide",
						useCSS: false, // Fix iPad flickering issue
						slideshow: false,
						directionNav: true,
						controlNav: true,
						pauseOnHover: true,
						slideshowSpeed: 7000,
						animationSpeed: 400,
						smoothHeight: true,
						touch: false
					});
					
				}
			}, 20);
		});
	</script>
		
	<div class="featured flexslider" id="flexslider-featured">
		<ul class="slides">				
			<?php while ( $featured->have_posts() ): $featured->the_post(); ?>
			<li>	
				<?php get_template_part('content-featured'); ?>
			</li>
			<?php endwhile; ?>			
		</ul>
	</div><!--/.featured-->
	

<?php wp_reset_postdata(); ?>