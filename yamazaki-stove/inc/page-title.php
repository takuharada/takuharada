<div class="page-title pad g-padding-l-20--xs">

	<?php if ( is_home() ) : ?>
      
	<?php elseif ( is_single() ): ?>

    <!--title_h1-->
        <h1 class="post-title entry-title"><?php echo mt_page_title(); ?></h1>
    
    <!--title_h1-->
	<!---post_meta_group-->
    <div class="post-meta-group clearfix"> 
        <?php if ( ot_get_option('author') == 'on' ) {  ?> 
        <div class="post-byline"><i class="fa fa-user"></i>
                  <?php the_author_posts_link(); ?></div>
        <?php  } ?>
        
          
          
          <div class="post-item-category">
         <i class="fa fa-clock-o"></i>
		  
		  <?php if ( ot_get_option('daytime') == 'off' ) {  ?> 
		  <?php the_time(get_option('date_format')); ?>
         <?php } else {  ?> 
         <?php echo time_ago(); ?>
           <?php } ?>


        </div>
        

         <div class="post-view"><i class="fa fa-eye"></i><?php echo get_post_views( get_the_ID() ); set_post_views( get_the_ID() ); ?>VIEWS</div>

        
 <?php edit_post_link( __( '[Edit]', 'monolight' ), '<div class="post-byline"><i class="fa fa-pencil"></i>', '</div>' ); ?>
       </div> 
       <!---post_meta_group-->
    
    
		
	<?php elseif ( is_page() ): ?>
		<h1 class="post-title entry-title"><?php echo mt_page_title(); ?></h1>

	<?php elseif ( is_search() ): ?>
		<h1 class="post-title entry-title">
			<?php if ( have_posts() ): ?><i class="fa fa-search"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="fa fa-exclamation-circle"></i><?php endif; ?>
			<?php $search_results=$wp_query->found_posts;
				if ($search_results==1) {
					echo $search_results.' '.__('Search result','monolight');
				} else {
					echo $search_results.' '.__('Search results','monolight');
				}
			?>
		</h1>
		
	<?php elseif ( is_404() ): ?>
		<h3 class="entry-title"><i class="fa fa-exclamation-circle"></i><?php _e('Error 404.','monolight'); ?> <span><?php _e('Page not found!','monolight'); ?></span></h3>
		
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h3 class="entry-title"><i class="fa fa-user"></i><?php _e('Author:','monolight'); ?> <span><?php echo $author->display_name;?></span></h3>
		
	<?php elseif ( is_category() ): ?>
		<h3 class="entry-title"><span></span></h3>

	<?php elseif ( is_tag() ): ?>
		<h3 class="entry-title"><i class="fa fa-tags"></i><?php _e('Tagged:','monolight'); ?> <span><?php echo single_tag_title('', false); ?></span></h3>
		
	<?php elseif ( is_day() ): ?>
		<h3 class="entry-title"><i class="fa fa-clock-o"></i><?php _e('Daily Archive:','monolight'); ?> <span><?php echo get_the_time('Y-F-j, '); ?></span></h3>
		
	<?php elseif ( is_month() ): ?>
		<h3 class="entry-title"><i class="fa fa-calendar"></i><?php _e('Monthly Archive:','monolight'); ?> <span><?php echo get_the_time('Y-F '); ?></span></h3>
			
	<?php elseif ( is_year() ): ?>
		<h3 class="entry-title"><i class="fa fa-calendar"></i><?php _e('Yearly Archive:','monolight'); ?> <span><?php echo get_the_time('Y'); ?></span></h3>
	
	<?php else: ?>
<h1 class="post-title entry-title"><?php echo mt_page_title(); ?></h1>
    <div class="post-meta-group clearfix"> 
        <?php if ( ot_get_option('author') == 'on' ) {  ?> 
        <div class="post-byline"><i class="fa fa-user"></i>
                   <?php the_author_posts_link(); ?></div>
        <?php  } ?>
        
          
          
          <div class="post-item-category">
          <i class="fa fa-clock-o"></i>
		  
		  
		  <?php if ( ot_get_option('daytime') == 'off' ) {  ?> 
		  <?php the_time(get_option('date_format')); ?>
         <?php } if ( ot_get_option('daytime') != 'off' ) {  ?> 
<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . _e('before','monolight'); ?>
           <?php } ?>

        </div>
        

         <div class="post-view"><i class="fa fa-eye"></i><?php echo get_post_views( get_the_ID() ); set_post_views( get_the_ID() ); ?>VIEWS</div>

        
        
        
        </div>
	
	<?php endif; ?>

</div><!--/.page-title-->
    <!--#titleafter-widgets-->
    <?php dynamic_sidebar( 'titleafter-widgets' ); ?>
    <!--/#titleafter-widgets-->