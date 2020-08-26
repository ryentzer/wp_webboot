<?php
/*
  * Bootstrap navigation goes here
  */
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<?php
wp_nav_menu( array(
	             'theme_location'  => 'navbar',
	             'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
	             'container'       => 'div',
	             'container_class' => 'collapse navbar-collapse',
	             'container_id'    => 'bs-example-navbar-collapse-1',
	             'menu_class'      => 'navbar-nav mr-auto',
	             'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	             'walker'          => new WP_Bootstrap_Navwalker(),
             ) );
?>
</nav>
