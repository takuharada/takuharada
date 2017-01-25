<?php get_header(); ?>

<section class="content col-sm-8">

	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">
		
		<div class="notebox">
			<?php _e('For the term','monolight'); ?> "<span><?php echo get_search_query(); ?></span>".
			<?php if ( !have_posts() ): ?>
				<?php _e('Please try another search:','monolight'); ?>
			<?php endif; ?>
			<div class="search-again">
				<?php get_search_form(); ?>
			</div>
		</div>
		
   	<?php if ((category_description() != '') && !is_paged()) : ?>
			<div class="notebox">
				<?php echo category_description(); ?>
			</div>
		<?php endif; ?>
       <!--#pagebefore-widgets-->
    <?php dynamic_sidebar( 'pagebefore-widgets' ); ?>
    <!--/#pagebefore-widgets-->
  
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ): the_post(); ?>
    <?php get_template_part('content-standard'); ?>
    <?php endwhile; ?>
    <?php endif; ?>
   
   <div id="paginate">
    <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
</div>
    
    <!--#page-after-widget-->
    <?php dynamic_sidebar( 'pageafter-widgets' ); ?>
    <!--/#page-after-widget--> 
    
  </div>
  <!--/.pad--> 
  
</section>
<!--/.content-->
<section class="content col-sm-4">
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
