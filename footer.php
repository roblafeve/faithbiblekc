<?php wp_footer(); ?>

  </div>

  <footer>
  
    <nav>
     <?php 
     $args = array(
     'theme_location'  => 'primary',
     'menu'            => 'primary', 
     'container'       => false,
     'menu_class'      => '',
     'echo'            => true,
     'fallback_cb'     => 'faithbiblekc_page_menu',
     'items_wrap'      => '<ul>%3$s</ul>',
     'depth'           => 1          	
     );
     wp_nav_menu($args); ?>
     
   </nav>
  
  </footer>

</body>
</html>