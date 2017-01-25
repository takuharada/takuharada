<?php get_header(); ?>
<!--========== PROMO BLOCK ==========-->
        <div class="js__parallax-window" style="background: url(<?php bloginfo('template_url'); ?>/img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs g-padding-y-120--sm">
                <div class="g-margin-b-10--xs">
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs">BLOG</h1>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2">最新情報や店主の独り言</p>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->
<section class="content col-sm-8 g-padding-l-90-lg">
<?php if (function_exists('z_taxonomy_image_url')):
    $category_image = z_taxonomy_image_url();
    if (!empty($category_image)):
?>
<div class="cat_eyecatch">
<img src="<?php echo $category_image; ?>" />
</div>
<?php endif;endif; ?>
    <?php get_template_part('inc/page-title'); ?>
    

    <div class="pad group">     
        
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

<script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/social-button.js"></script>