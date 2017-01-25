<div class="oi_post_share_icons"> 
  <div class="oi_soc_icons">

<?php if ( ot_get_option('facebook-view') == 'on' ) { ?>
<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink()?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a><?php } ?> 

<?php if ( ot_get_option('twitter-view') == 'on' ) { ?>
<a href="https://twitter.com/share?url=<?php the_permalink()?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
<?php } ?>

<?php if ( ot_get_option('googleplus-view') == 'on' ) { ?>
<a href="https://plus.google.com/share?url=<?php the_permalink()?>" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
<?php } ?>

<?php if ( ot_get_option('hatena-view') == 'on' ) { ?>
<a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple"><span class="icon-hatebu"></span></a>
<script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
<?php } ?>
 <?php if ( comments_open() && ( ot_get_option( 'comment-count' ) != 'off' ) ): ?>
        <a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fa fa-comment"></i>
        <?php comments_number( '0', '1', '%' ); ?>
        </span></a>
        <?php endif; ?>
</div>
</div>
