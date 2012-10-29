<div class='sidebar'>
  <?php $args = array(
    'taxonomy'     => 'series',
    'orderby'      => name,
    'show_count'   => 1,
    'pad_counts'   => 0,
    'hierarchical' => 1,
    'title_li'     => 'Series'
  );?>

  <ul>
  	<?php wp_list_categories( $args ); ?>
  </ul>

  <?php $args = array(
    'taxonomy'     => 'preacher',
    'orderby'      => name,
    'show_count'   => 1,
    'pad_counts'   => 0,
    'hierarchical' => 0,
    'title_li'     => 'Preacher'
  );?>

  <ul>
  	<?php wp_list_categories( $args ); ?>
  </ul>
</div>