<ul>
<?php 
$args = array(
'sort_order' => 'ASC',
'sort_column' => 'menu_order',
'parent' => '0'
);
$pages = get_pages($args);
foreach ($pages as $page) {
$id = $page->ID;
$title = $page->post_title;
$link = get_page_link($page->ID);
if (is_page($id) || $id == $post->post_parent) { $active = ' class="active"'; } else $active = '';
?>
<li<?php echo $active; ?>><a href="<?php echo $link; ?>"><?php echo $title; ?><span></span></a></li>
<?php } ?>
</ul>