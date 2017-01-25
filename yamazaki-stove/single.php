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
  <div class="pad group">
    <?php if ( ot_get_option('single-eyecatch') == 'on' ) {  ?>
    <?php get_template_part('inc/page-image'); ?>
    <?php } ?>
    <?php get_template_part('inc/page-title'); ?>
    <div class="pad group pad-bg">
      <?php while ( have_posts() ): the_post(); ?>
      <article <?php post_class(); ?>>
        <?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
        <div class="clear"></div>
        <div class="entry <?php if ( ot_get_option('sharrre') != 'off' ) { echo 'share'; }; ?>">
          <div class="entry-inner">
            <?php the_content(); ?>
            <?php wp_link_pages(array('before'=>'<div class="post-pages">'.__('Pages:','monolight'),'after'=>'</div>')); ?>
          </div>
          <?php if ( ot_get_option('sharrre') == '0' ): ?>
          <?php 	 { get_template_part('inc/sharrre'); } ?>
          <?php elseif ( ot_get_option('sharrre') == '1' ): ?>
          <?php endif; ?>
          <div class="clear"></div>
        </div>
        <!--/.entry--> 
        
        <!--/.post-inner--> 
      </article>
      <!--/.post-->
      <?php endwhile; ?>
      <div class="postmeta clearfix">
        <?php if ( ot_get_option('cat-view') == 'on' ) { ?>
        <div class="post-item-category">
          <?php 
    $cats = get_the_category();
if ( $cats && ! is_wp_error( $cats ) ) : 
	foreach ( $cats as $cat ) { 
		$term_data = get_option('term_'.intval($cat->term_id));
		$term_bgcolor = ( empty( $term_data['bgcolor'] ) ) ? '#666' : $term_data['bgcolor'];
		$term_txcolor = ( empty( $term_data['textcolor'] ) ) ? '#fff' : $term_data['textcolor'];
		echo '<a style="background-color: '.esc_attr($term_bgcolor).'; color: '.esc_attr($term_txcolor).';" href="'.get_term_link( $cat ).'">'.$cat->name."</a> ";
	}
endif;
 ?>
        </div>
        <?php } ?>
        <?php if ( ot_get_option('tag-view') == 'on' ) { ?>
        <div class="post-item-tags"> <i class="fa fa-tag"></i>
          <?php the_tags('','','</p>'); ?>
        </div>
        <?php } ?>
      </div>
      <?php if ( ( ot_get_option( 'author-bio' ) != 'off' ) && get_the_author_meta( 'description' ) ): ?>
      <div class="author-bio">
        <div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
        <div class="author-desc">
          <p class="bio-name">
            <?php the_author_meta('display_name'); ?>
          </p>
          <p class="bio-desc">
            <?php the_author_meta('description'); ?>
          <div class="social_links clearfix">
            <?php mt_social_links() ; ?>
          </div>
          </p>
        </div>
      </div>
      <div class="clear"></div>
      <?php endif; ?>
      <?php if ( ot_get_option( 'post-nav' ) == 'content') { get_template_part('inc/post-nav'); } ?>
      <?php if ( ot_get_option( 'related-posts' ) != '1' ) { get_template_part('inc/related-posts'); } ?>
      <?php comments_template('/comments.php',true); ?>
      <!--#page-after-widget-->
      <?php dynamic_sidebar( 'pageafter-widgets' ); ?>
      <!--/#page-after-widget--> 
    </div>
    <!--/.pad--> 
    
  </div>
</section>
<!--/.content-->
<section class="content col-sm-4">
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>

<script type="text/javascript" src=" <?php bloginfo('template_url'); ?>/js/social-button.js"></script>

