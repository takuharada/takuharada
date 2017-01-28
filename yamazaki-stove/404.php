<?php get_header(); ?>
<!--========== PROMO BLOCK ==========-->
        <div class="js__parallax-window" style="background: url(<?php bloginfo('template_url'); ?>/img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-120--xs">
                <div class="g-margin-b-60--xs">
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs">error404</h1>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2">Page Not Found</p>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->
<section class="content col-sm-8">

	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">		
		
		<div class="notebox">
			<?php get_search_form(); ?>
		</div>
		
		<div class="entry pad-bg">
			<p><?php _e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'monolight' ); ?></p>
		</div>
		
	</div><!--/.pad-->
	
</section><!--/.content-->
<section class="col-sm-4">
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>