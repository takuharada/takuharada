<?php if ( is_single() ): ?>
<?php
  $prevpost = get_adjacent_post(true, '', true); //前の記事
  $nextpost = get_adjacent_post(true, '', false); //次の記事
  if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>
<?php } ?>
<?php
  $prevpost = get_adjacent_post(true, '', true); //前の記事
  $nextpost = get_adjacent_post(true, '', false); //次の記事
  if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>
<ul class="post-nav group">
  <?php
    if ( $prevpost ) { //前の記事が存在しているとき
      echo '<li class="previous"><a href="' . get_permalink($prevpost->ID) . '" class="clearfix"><div class="post-nav_thumb">' . get_the_post_thumbnail($prevpost->ID, 'thumb-small') . '</div><div class="title">' . get_the_title($prevpost->ID) . '</div></a></li>';
    } else { //前の記事が存在しないとき
      echo '<div class="alignleft nopost"></div>';
    }
    if ( $nextpost ) { //次の記事が存在しているとき
      echo '<li class="next"><a href="' . get_permalink($nextpost->ID) . '" class="clearfix"><div class="post-nav_thumb">' . get_the_post_thumbnail($nextpost->ID, 'thumb-small') . '</div><div class="title">' . get_the_title($nextpost->ID) . '</div></a></li>';
    } else { //次の記事が存在しないとき
      echo '<div class="alignright nopost"></div>';
    }
  ?>
</ul>
<?php } ?>
<?php
  $prevpost = get_adjacent_post(true, '', true); //前の記事
  $nextpost = get_adjacent_post(true, '', false); //次の記事
  if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>
<?php } ?>

<?php endif; ?>