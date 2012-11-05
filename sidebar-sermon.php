<div class='sidebar'>
  <?php $args = array(
    'taxonomy'     => 'series',
    'orderby'      => name,
    'show_count'   => 1,
    'pad_counts'   => 0,
    'hierarchical' => 1,
    'title_li'     => '<h6>Series</h6>'
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
    'title_li'     => '<h6>Preacher</h6>'
  );?>

  <ul>
  	<?php wp_list_categories( $args ); ?>
  </ul>
</div>